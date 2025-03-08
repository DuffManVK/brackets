# Используем базовый образ PHP
FROM php:8.3-cli

# Устанавливаем необходимые пакеты
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    bash \
    && rm -rf /var/lib/apt/lists/*

# Устанавливаем Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Устанавливаем PHPUnit
RUN composer global require phpunit/phpunit

# Добавляем Composer в PATH
ENV PATH="${PATH}:/root/.composer/vendor/bin"

# Устанавливаем рабочую директорию
WORKDIR /app

# Копируем файлы в контейнер
COPY . .

# Указываем команду для запуска приложения
CMD ["php", "run.php"]