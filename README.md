# Codeigniter 3 migration
Migrations are a fantastic way to manage database schema changes across multiple development environments, as well as provide a way to roll back poorly executed schema changes without having to manually run MySQL table alters, creations, etc. Database migrations also provide a simple way to spin up new development servers that can run a local database while ensuring all development databases are in sync.

## Database
Database name: bthiban_migration

## Execute
- move in to the main directory
- c:\wamp\www\codeigniter-migration>php index.php migrate

## Notes
- 001_add_users.php:  for rapid development, you can generate the sql code from phpmyadmin or sqlyog or etc
- 002_add_contact.php: this is the framework oriented way, as well as it will take some time for sure.