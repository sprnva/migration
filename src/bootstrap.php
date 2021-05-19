<?php

// CLASS AUTO LOADER
spl_autoload_register(function ($class) {

  $classes = [
    "Connection" => "Connection.php",
    "QueryBuilder" => "QueryBuilder.php",
    "Migration" => "Migration.php",
    "Migrator" => "Migrator.php",
    "MigrationRepository" => "Repository.php",
    "SchemaFactory" => "SchemaFactory.php",
    "App" => "App.php"
  ];

  if (array_key_exists($class, $classes)) {
    require_once $classes[$class];
  }
});

App::bind('config', require __DIR__ . '/config.php');

App::bind('database', new QueryBuilder(
  Connection::make(App::get('config')['database'])
));
