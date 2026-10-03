# mock-psp — эмулятор внешнего платёжного провайдера для демо CS2-трейдинг-платформы.
# Один файл, без зависимостей: достаточно стандартных расширений PHP (json/standard, hash).
FROM php:8.4-cli

WORKDIR /app
COPY index.php /app/index.php

# При запуске можно переопределить:
#   docker run -e PSP_WEBHOOK_SECRET=dev-secret -e STATE_DIR=/tmp -p 8081:8081 mock-psp
EXPOSE 8081

CMD ["php", "-S", "0.0.0.0:8081", "/app/index.php"]
