FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    bash \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer global require phpunit/phpunit

ENV PATH="${PATH}:/root/.composer/vendor/bin"

WORKDIR /app

COPY . .

CMD ["php", "run.php"]