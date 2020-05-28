# How to add third party packages

## Package to migrations - phinx and faker

Installation

composer require robmorgan/phinx
composer require fzaninotto/faker

Gererate phinx.yml - database configurations

Create on application root:

- mkdir db
- mkdir db/migrations
- mkdir db/seeds

Execute

Linux
php vendor/bin/phinx init

Windows
php vendor\bin\phinx.bat init

Edite phinx.yml and adjust database configuration.

Create migrations

Linux
vendor/robmorgan/phinx/bin/phinx create Customers

Windows
vendor\robmorgan\phinx\bin\phinx.bat create Customers

Edit db/migrations/20190821114033_customers.php

Adapte change method to:
```php
public function change()
{
		$this->table('customers')
		    ->addColumn('name', 'string', ['limit' => 50])
		    ->addColumn('email', 'string', ['limit' => 50])
		    ->addColumn('birthday', 'date', ['null' => true])
		    ->addColumn('created', 'datetime',['default'=>'CURRENT_TIMESTAMP'])
		    ->create();
}
```
Execute to create table

php vendor/robmorgan/phinx/bin/phinx migrate -e development

Windows
php vendor\robmorgan\phinx\bin\phinx migrate -e development

Create seeds

Linux
php vendor/bin/phinx seed:create Customers

Windows (não funcionou)
php vendor/bin/phinx seed:create Customers

Edit generated db/seeds/Customers.php
```php
class Customers extends AbstractSeed
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'name'      => $faker->userName,
                'email'         => $faker->email,
                'birthday'    => $faker->date('Y-m-d'),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $this->insert('customers', $data);
    }
}
```
Execute to populate table

php vendor/bin/phinx seed:run -e development

## Tracy
composer require tracy/tracy

<?php
require_once 'vendor/autoload.php';

use Tracy\Debugger;

Debugger::enable();

//Mostrar a barra de debug
Debugger::$showBar = true;

https://github.com/nette/tracy


