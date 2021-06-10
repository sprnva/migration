# database-migration

>Migrations are like version control for your database, allowing your team to define and share the application's database schema definition. If you have ever had to tell a teammate to manually add a column to their local database schema after pulling in your changes from source control, you've faced the problem that database migrations solve.  
&mdash; Laravel

![image](https://user-images.githubusercontent.com/37282871/118764554-46ffff80-b8ac-11eb-9082-b2df72238ad4.png)

# WHAT IS MIGRATION?
Migration is your database version control when collaborating with teams or for yourself. This will help you or your team to get the latest database update as possible. With a user interface, migration is easy to use. You can include this to any projects and start versioning your database development.

### CONFIGURATION
- update the config.php and set the connection to your database
- point your mysql_path to your mysql/bin folder

# THIS DATABASE MIGRATION IS ONLY USED IN LOCAL DEVELOPMENT AND MIGHT CAUSE DOWNTIME AND ERRORS WHEN USED IN PRODUCTION

<br>
Access database migration by visiting this URL: http://localhost/sprnva/migration

### INSTANCES
- NEW - This create the table specified
- RENAMETABLE - Will rename the table specified
- DROP - This will drop the table specified
- CHANGE - It's like altering the table columns

# Migration Buttons
How these button really work?

### Migrate
This will migrate the migration files database is intact no data will be overidden
- will make sure database repository exist
- attach a migration batch number
- will prepare the pending migrations or "outstanding migrations"
- after that we build the migration schema
- we run the schema that we built
- we log the migration to database repository

### Fresh
This is where we drop all tables and replace a new one base on our migration and stored database
- First we drop all the tables in database
- and if the database repository does not exist, we create
- after that, we load the stored database schema if exist
- then we run the pending migrations on our local repository
- insert the views schema

### Rollback
This will rollback 1 step down base on last batch number
- ensure database repository exist
- we get the completed migrations on our database repository base on the last batch number
- then we build the schema of the completed migrations 
- after that, we remove the migrations from the database repository

### Make
- This is where we add a migration file in our local repository
- ```{{ varName }}``` will be automatically replaced by the name you specified
- DIR: api/database/migrations/
- this accept:
 - mode: "NEW", "DROP", "CHANGE", "RENAMETABLE"
 - table: the target table
 - primary_key: the primary key of the table
 - up: Run the migrations
 - down: Reverse the migrations

```php
<?php
/**
 * MIGRATION DOCUMENTATION
 * https://gitlab.com/notesservice/notes/-/snippets/2070052
 *
 * Always remember:
 * "up" is for Create and alter table schema
 * "down" is for the rollback, reverse the migration
 * 
*/
${{ varName }} = [
	"mode" => "",
	"table"	=> "",
	"primary_key" => "",
	"up" => [
		"" => ""
	],
	"down" => [
		"" => ""
	]
];
```

# Dumps
As time goes by, migrations will be immense. We need to shrink it down, and dump is the answer for that. We have dumps to clear out migrations while migration schemas is dump in a .sql file that will be soon loaded as we migrate or need a fresh database environment.

### Dump
This will dump the database to an .sql file base on your database config.
- output: .sql file

### Dump Prune
This will dump the database to an .sql file base on your database config.
- output: .sql file
- this removes all the migration files in your local repository

