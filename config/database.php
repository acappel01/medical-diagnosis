<?php
$dbUrl = parse_url(env("CLEARDB_DATABASE_URL"));
return [
…
'mysql' => [
    'driver' => 'mysql’,
    'host' => isset($dbUrl["host"]) ? $dbUrl["host"] : env("DB_HOST"),
    'port' => isset($dbUrl["port"]) ? $dbUrl["port"] : env("DB_PORT"),
    'database' => isset($dbUrl["path"]) ? ltrim($dbUrl["path"], '/') : env("DB_DATABASE"),
    'username' => isset($dbUrl["user"]) ? $dbUrl["user"] : env("DB_USERNAME"),
    'password' => isset($dbUrl["pass"]) ? $dbUrl["pass"] : env("DB_PASSWORD"),
    'charset' => 'utf8mb4’,
    'collation' => 'utf8mb4_unicode_ci’,
    'prefix' => '’,
    'strict' => true,
    'engine' => null,
],
