## Codeigniter Learning

A simple learning project based on Codeigniter 3.1.11

## Requirements

* PHP version: >= 5.6 
* MySQL

## Clone repository and install packages

```bash
git clone https://github.com/ovillafuerte94/codeigniter-learning.git
cd codeigniter-learning 
```

## Configure database

```bash
cp ./application/config/database.php ./application/config/development/database.php
```

- Open the file `/application/config/development/database.php` and set up the database connection data.
- Once the parameters have been configured, create a database for the project and import the tables with the following command:

```bash
php index.php migrate do_migration
```

## Open in browser
Through the terminal in the project folder, execute the command
```bash
php -S localhost:8000
```
Open from browser at http://localhost:8000

