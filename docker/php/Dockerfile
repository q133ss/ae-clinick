FROM php:8.3.20-apache-bookworm

ENV DEBIAN_FRONTEND=noninteractive

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
      apache2-utils \
      curl \
      ca-certificates \
      unzip \
      locales \
      git \
      pkg-config \
      libicu-dev \
      zlib1g-dev \
      libzip-dev \
      libbz2-dev \
      libxml2-dev \
      libcurl4-openssl-dev \
      libssl-dev \
      libsodium-dev \
      libsqlite3-dev \
      libonig-dev \
      libjpeg62-turbo-dev \
      libpng-dev \
      libwebp-dev \
      libfreetype6-dev \
      libxpm-dev \
      libldap2-dev \
      libpq-dev \
      unixodbc-dev \
      libxslt1-dev \
      libtidy-dev \
      libgmp-dev \
      libpspell-dev \
      aspell \
      aspell-en \
      libenchant-2-dev \
      libdb-dev \
      libc-client2007e-dev \
      libkrb5-dev \
    ; \
    rm -rf /var/lib/apt/lists/*

RUN set -eux; \
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm; \
    docker-php-ext-configure imap --with-kerberos --with-imap-ssl; \
    docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu; \
    docker-php-ext-configure pdo_odbc --with-pdo-odbc=unixODBC,/usr; \
    docker-php-ext-install -j"$(nproc)" \
      bcmath \
      bz2 \
      calendar \
      curl \
      dba \
      exif \
      ftp \
      gd \
      gettext \
      gmp \
      imap \
      intl \
      ldap \
      mbstring \
      mysqli \
      opcache \
      pcntl \
      pdo_mysql \
      pdo_odbc \
      pdo_pgsql \
      pgsql \
      pspell \
      shmop \
      soap \
      sockets \
      sysvmsg \
      sysvsem \
      sysvshm \
      tidy \
      xsl \
      zip \
    ;

RUN set -eux; \
    a2dismod mpm_event || true; \
    a2enmod mpm_prefork; \
    for mod in \
      access_compat \
      actions \
      alias \
      auth_basic \
      auth_digest \
      authn_core \
      authn_file \
      authz_core \
      authz_groupfile \
      authz_host \
      authz_owner \
      authz_user \
      autoindex \
      cgi \
      charset_lite \
      deflate \
      dir \
      env \
      expires \
      ext_filter \
      filter \
      headers \
      include \
      info \
      logio \
      mime \
      mime_magic \
      negotiation \
      proxy \
      proxy_ajp \
      proxy_balancer \
      proxy_connect \
      proxy_express \
      proxy_fcgi \
      proxy_fdpass \
      proxy_ftp \
      proxy_http \
      proxy_scgi \
      proxy_uwsgi \
      proxy_wstunnel \
      ratelimit \
      remoteip \
      reqtimeout \
      rewrite \
      setenvif \
      slotmem_shm \
      socache_shmcb \
      status \
      unique_id \
      version \
      lbmethod_bybusyness \
      lbmethod_byrequests \
      lbmethod_bytraffic \
      lbmethod_heartbeat \
    ; do \
      a2enmod "$mod" || true; \
    done

RUN set -eux; \
    echo 'ServerName localhost' > /etc/apache2/conf-available/servername.conf; \
    a2enconf servername

WORKDIR /var/www/html
