<?php

$produtos = "CREATE TABLE produtos (
    id int primary key auto_increment,
    nome varchar(50) not null,
    quantidade int
);\n\n";

$produtos .= "INSERT INTO produtos (nome, quantidade) VALUES \n";

for ($i=0; $i < 1000; $i++) {   
    $nome = addslashes($faker->name);
    $quantidade = $faker->numberBetween($min = 1, $max = 1000);

    if($i<999){
        $produtos .= "('$nome','$quantidade'),\n";
    }else{
        $produtos .= "('$nome','$quantidade');\n";
    }
}

$fp = fopen("produtos.sql", "w");
fwrite($fp, $produtos);
fclose($fp);

