(function () {
   var STORAGE_KEY = 'ae-theme-mode';
   var MODES = ['system', 'dark', 'light'];
   var mediaQuery = null;

   function getStoredMode() {
      try {
         var value = window.localStorage ? localStorage.getItem(STORAGE_KEY) : null;
         if (value === 'system' || value === 'dark' || value === 'light') {
            return value;
         }
      } catch (e) {}
      return 'system';
   }

   function saveMode(mode) {
      try {
         if (window.localStorage) {
            localStorage.setItem(STORAGE_KEY, mode);
         }
      } catch (e) {}
   }

   function getSystemTheme() {
      try {
         if (!window.matchMedia) {
            return 'light';
         }
         if (!mediaQuery) {
            mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
         }
         return mediaQuery.matches ? 'dark' : 'light';
      } catch (e) {
         return 'light';
      }
   }

   function getActiveTheme(mode) {
      if (mode === 'dark' || mode === 'light') {
         return mode;
      }
      return getSystemTheme();
   }

   function setTheme(mode, options) {
      var root = document.documentElement;
      var active = getActiveTheme(mode);
      var skipSave = options && options.skipSave;

      root.setAttribute('data-ae-theme-mode', mode);
      root.setAttribute('data-ae-theme-active', active);
      root.style.colorScheme = active;

      if (!skipSave) {
         saveMode(mode);
      }

      updateToggle(mode, active);
   }

   function nextMode(mode) {
      var index = MODES.indexOf(mode);
      if (index < 0) {
         return MODES[0];
      }
      return MODES[(index + 1) % MODES.length];
   }

   function updateToggle(mode, active) {
      var button = document.getElementById('ae-theme-toggle');
      var icon;
      var titleMap = {
         system: 'Theme: system',
         dark: 'Theme: dark',
         light: 'Theme: light'
      };
      var labelMap = {
         system: 'SYS',
         dark: 'DRK',
         light: 'LGT'
      };

      if (!button) {
         return;
      }

      button.setAttribute('data-mode', mode);
      button.setAttribute('data-active-theme', active);
      button.setAttribute('aria-pressed', active === 'dark' ? 'true' : 'false');
      button.setAttribute('aria-label', titleMap[mode] || 'Theme');
      button.setAttribute('title', (titleMap[mode] || 'Theme') + ' (click to switch)');

      icon = button.querySelector('.ae-theme-toggle__icon');
      if (icon) {
         icon.textContent = labelMap[mode] || 'AUTO';
      }
   }

   function bindToggle() {
      var button = document.getElementById('ae-theme-toggle');
      if (!button || button.getAttribute('data-ae-theme-bind') === '1') {
         return;
      }

      button.setAttribute('data-ae-theme-bind', '1');
      button.addEventListener('click', function () {
         var current = document.documentElement.getAttribute('data-ae-theme-mode') || 'system';
         setTheme(nextMode(current));
      });
   }

   function bindSystemThemeChanges() {
      var onChange;

      if (!window.matchMedia) {
         return;
      }

      try {
         if (!mediaQuery) {
            mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');
         }
      } catch (e) {
         return;
      }

      onChange = function () {
         var mode = document.documentElement.getAttribute('data-ae-theme-mode') || 'system';
         if (mode === 'system') {
            setTheme('system', { skipSave: true });
         }
      };

      if (mediaQuery.addEventListener) {
         mediaQuery.addEventListener('change', onChange);
      } else if (mediaQuery.addListener) {
         mediaQuery.addListener(onChange);
      }
   }

   function init() {
      bindToggle();
      bindSystemThemeChanges();
      setTheme(getStoredMode(), { skipSave: true });
   }

   if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', init);
   } else {
      init();
   }
})();
