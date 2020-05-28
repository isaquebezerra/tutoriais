Função para debugar código PHP

<?php
// Debugar dentro de tabela HTML
// d($variavel, 1)
// Debugar várias variáveis fora de tabela:
// d($var,false); // $die = false
// d($var2,false); // $die = false
// d($var3); // $die = true
function d( $params = [], $die = true, $t=0)
{
    print '<style>.pre_red{font-size: 14px;color:red;}.pre_black{font-size: 14px;}</style>';
    print '<h3>Resultado do Debug</h3>';

    if(!empty($params)){
        if($t==1) $t='</t>';
        echo $t.'<b><pre class="pre_red">$params<br>';
        print_r($params);
        echo '</pre></b>';
    }

    echo 'Para debugar código que esteja dentro de tabela HTML use o parâmetro $t: d(1,$ar)';
    if ($die) die();
}

?>

<table><tr><td>
<?php $ar = array(0 => 'a', 1 =>'b');
?></td></tr></table>

<?php
d($ar);

Idealmente salvar como "d" include_path, que no meu caso é /usr/share/php
Podemos adicionar ao include_path outro diretório assim, adicionei ':/usr/share/php':
include_path = ".:/php/includes:/usr/share/php"

 e incluir assim:

require 'd';

https://www.youtube.com/watch?v=A1rVfAZ4hk8

função d(), criada tendo a dd() como inspiração.

