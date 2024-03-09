# Task Manager
## A project for the REDBERRY internship

Task manager is a platform where you can manage your tasks. With this application you can add, remove, and edit your tasks, check their due dates etc.

#
### Table of Contents
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Resources](#resources)

#
### Prerequisites

* <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@8.1 and up*
* <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2.2 and up*
* <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> *MYSQL*
* <img src="readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> *npm*

#
### Tech Stack

* [Laravel@10.x](https://laravel.com/docs/10.x)
* [Spatie Translatable](https://github.com/spatie/laravel-translatable)
* [PHP CS Fixer](https://cs.symfony.com/)
* [Tailwind CSS](https://tailwindcss.com/)

#
### Getting Started

1\. Clone the repository:
```sh
git clone git@github.com:RedberryInternship/task-manager-tamar-sinauridze.git
```

2\. Install PHP dependencies:
```sh
composer install
```

3\. Install JS dependencies:
```sh
npm install
```

4\. Copy **.env** file:
```sh
cp .env.example .env
```

5\. Fill in the **.env** file:

>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****

6\. Generate the key:
```sh
  php artisan key:generate
```

7\. Create the storage link:
```sh
  php artisan storage:link
```

8\. If you are going to make changes in this project, you also need to install and configure PHP CS Fixer in your code editor using [this guide](https://redberry.gitbook.io/resources/laravel/php-is-linteri#id-4890).

#
### Migration

Migrate the database:
```sh
php artisan migrate
```

#
### Development

Run the server:
```sh
  npm run dev
```

```sh
  php artisan serve
```
Now the server should be running on http://localhost:8000/

Create a user:
```sh
  php artisan user:create
```

#
### Resources
* [Figma](https://www.figma.com/file/HkL8NHL7914PBgdYb6D3zN/Laravel-Dev?type=design&node-id=0-1&mode=design&t=PcfFZjW8iAKz044P-0) - The design of the project
* [DrawSQL](https://drawsql.app/teams/sin165s-team/diagrams/redberry-task-manager) - The database diagram
