<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>

<!-- Método: $_POST | Action em branco porque executaremos na própria página -->
        <form method="post" action="">
            <!-- Input que receberá o primeiro valor a ser calculado -->
            <?php
            $vum='';
            $vdois='';
            if(isset($_POST['v1'])){
                $vum = $_POST['v1'];
            }
            if(isset($_POST['v2'])){
                $vdois = $_POST['v2'];
            }
            ?>
            <input type="text" name="v1" placeholder="Valor 1" value="<?=$vum?>"/>

            <!-- Select com o tipo de operação (Somar, Diminuir, Multiplicar ou Dividir -->
            <select name="operacao">
                <option value="soma">+</option>
                <option value="subtrai">-</option>
                <option value="multiplica">*</option>
                <option value="divide">/</option>
            </select>

            <!-- Input que receberá o segundo valor a ser calculado -->
            <input type="text" name="v2" placeholder="Valor 2"  value="<?=$vdois?>"/>

            <!-- Input que enviará os valores para a função de cálculo -->
            <input type="submit" name="doCalc" value="Calcular" />
        </form>

<?php
        # classe :: Calculadora
        class Calculadora {

            # Função "Calcular" para executar o cálculo dos valores (v1 e v2)
            public function Calcular() {

                # Se for setado algum valor ào submit (doCalc), executa a operação
                if (isset($_POST['doCalc'])) {

                    # Se a operação for soma (value = soma), então...
                    if ($_POST['operacao'] == "soma") {

                        # Armazena a soma de [v1 + v2] na variável $resultado
                        $resultado = $_POST['v1'] + $_POST['v2'];

                        # Exibe a variável $resultado com os valores já somados
                        return $resultado;

                        # Ou então, se a operação não for (value = soma), e sim (value = subtrai) então...
                    } elseif ($_POST['operacao'] == "subtrai") {
                        $resultado = $_POST['v1'] - $_POST['v2'];
                        return $resultado;
                    } elseif ($_POST['operacao'] == 'multiplica') {
                        $resultado = $_POST['v1'] * $_POST['v2'];
                        return $resultado;
                    } elseif ($_POST['operacao'] == 'divide') {
                        $resultado = $_POST['v1'] / $_POST['v2'];
                        return $resultado;
                    }
                }
            }

        }

        # Instancia a classe CALCULADORA()
        $calcular = new Calculadora();

        # Executa a função
        echo $calcular->Calcular();
        ?>
