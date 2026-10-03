#!/bin/sh
# Создаём тестовую БД (cs2_test) при первой инициализации контейнера MySQL.
# ВАЖНО: не менять shell-опции (set -u и т.п.) — скрипт СОРСИТСЯ entrypoint'ом,
# и опции утекают в родительский shell (известный footgun образа mysql).
TEST_DB="${DB_TEST_NAME:-cs2_test}"

mysql -uroot -p"${MYSQL_ROOT_PASSWORD}" <<SQL
CREATE DATABASE IF NOT EXISTS \`${TEST_DB}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
GRANT ALL PRIVILEGES ON \`${TEST_DB}\`.* TO '${MYSQL_USER}'@'%';
FLUSH PRIVILEGES;
SQL

echo "[init] test database '${TEST_DB}' ready"
