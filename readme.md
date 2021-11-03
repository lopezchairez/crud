## CRUD 101

A CRUD 101 example made with the Laravel Framework.

### Requirements

- Apache
- PHP 5.6
- MySQL 5.7
- Composer
- [Virtualhost](https://github.com/RoverWire/virtualhost)

### Setup the project

Let's assume you have your projects inside ```~/Code```

Clone the project
```bash
cd ~/Code && git clone git@github.com:lopezchairez/crud.git
```

Navigate to the project's root directory
```bash
cd crud
```

Install the dependencies
```bash
composer install
```

Create the environment file
```bash
cp .env.example .env
```

Set the application key
```bash
php artisan key:generate
```

### Setup the database

Log in to MySQL
```bash
mysql -uroot -p
```

Create the database
```bash
create database crud;
```

Exit MySQL
```bash
exit
```

Set the database credentials in the project's environment file.
```bash
vim .env
```

Migrate the database
```bash
php artisan migrate
```

### Setup the Virtual Host

Create the vhost for the project
```bash
sudo virtualhost create crud.local ~/Code/crud/public
```

Open the hosts file
```bash
sudo vim /etc/hosts
```

Set the local domain (No Virtual Machine)
```text
127.0.0.1       crud.local
```

Run the project in the [Browser](http://crud.local/)
