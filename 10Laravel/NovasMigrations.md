# Novos métodos das migrations no Laravel

Estes novos métodos apareceram na versão 7 do laravel.

São eles (alguns não são novos mas podem ser úteis):

```php
$table->id()
$table->foreignId('user_id')
$table->constrained()
$table->primary(['id', 'parent_id']);//Adds a primary key.
$table->bigIncrements('id');
$table->decimal('amount', 8, 2);
$table->enum('level', ['easy', 'hard']);
$table->json('options');
$table->unsignedInteger('votes');
$table->unsignedSmallInteger('votes');
$table->uuid('id');
$table->index(['account_id', 'created_at']);
$table->unique('email');
```

## Exemplo prático

Relacionando as tabelas users com permissions

Antes
```php
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // edit posts
            $table->string('slug'); //edit-posts
            $table->timestamps();
        });

        Schema::create('user_permission', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('permission_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
 
            $table->primary(['user_id','permission_id']);
        });
```
Versões 7 e 8 em diante
```php
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // edit posts
            $table->string('slug'); //edit-posts
            $table->timestamps();
        });

        public function up()
        {
            Schema::create('user_permission', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('permission_id')->constrained()->onDelete('cascade');
     
                $table->primary(['user_id','permission_id']);
            });
        }
```

## Implementação
```php
    public function id($column = 'id')
    {
        return $this->bigIncrements($column);
    }

    public function foreignId($column)
    {
        $this->columns[] = $column = new ForeignIdColumnDefinition($this, [
            'type' => 'bigInteger',
            'name' => $column,
            'autoIncrement' => false,
            'unsigned' => true,
        ]);

        return $column;
    }
```
## Alguns comandos do artisan
```php
php artisan schema:dump - este cria um dump do banco atual em database/schema
php artisan migrate:fresh --seed -- Remove todas as tabelas e as cria novamente com os seeders
```
https://laravel.com/docs/8.x/migrations 
