<?php

$config_file = 'config.php';
if (!file_exists($config_file)) {
  die("The [migration/config.php] not found.");
}

// CLASS AUTO LOADER
spl_autoload_register(function ($class) {

  $classes = [
    "Connection" => "system/Connection.php",
    "QueryBuilder" => "system/QueryBuilder.php",
    "Migration" => "system/Migration.php",
    "Migrator" => "system/Migrator.php",
    "MigrationRepository" => "system/Repository.php",
    "SchemaFactory" => "system/SchemaFactory.php",
    "App" => "system/App.php"
  ];

  if (array_key_exists($class, $classes)) {
    require_once $classes[$class];
  }
});

App::bind('config', require __DIR__ . '/config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));
