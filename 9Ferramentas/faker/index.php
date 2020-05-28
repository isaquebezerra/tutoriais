<?php
ini_set('max_execution_time', '-1');// Ilimitados
ini_set('max_input_time', 120);// s
ini_set('max_input_nesting_level', 64);//s
ini_set('memory_limit', '-1');//Ilimitada

// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
//$faker = Faker\Factory::create();
$faker = Faker\Factory::create('pt_BR');
?>
<?xml version="1.0" encoding="UTF-8"?>
<?php
function stringGen($length = 4) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
/*
$clientes = "CREATE TABLE clientes (
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50),
    idade int,
    vendedor_id int not null
);\n\n";

$clientes .= "INSERT INTO clientes (nome, email, idade, vendedor_id) VALUES \n";

for ($i=0; $i < 1000; $i++) {   
    $nome = addslashes($faker->name);
    $email = $faker->email;
    $idade = $faker->numberBetween($min = 15, $max = 120);
    $vendedor_id = $faker->numberBetween($min = 1, $max = 1000);

    if($i<999){
        $clientes .= "('$nome','$email', '$idade', '$vendedor_id'),\n";
    }else{
        $clientes .= "('$nome','$email', '$idade', '$vendedor_id');\n";
    }
}

$clientes .="ALTER TABLE `clientes`
  ADD CONSTRAINT `vendedor_fk` FOREIGN KEY (`vendedor_id`) REFERENCES `vendedores` (`id`);
";

$fp = fopen("clientes.sql", "w");
$escreve = fwrite($fp, $clientes);
fclose($fp);
*/

require_once 'produtos.php';

print 'Arquivo criado';

