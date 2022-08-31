<?php
    echo "Exercicio 1 - Faça um array que gere 10 números aleatorios e verifique
    quantos são pares, quantos são impares, quantos são positivos e quantos são negativos<br>";

            $numero = array ();
            $cont_pares= 0;
            $cont_impar= 0;
            $cont_negativo=0;
            $cont_positivo=0;

            for ($i = 0; $i<10; $i++){
                $numero[$i] =  rand(-10,10);
                if($numero[$i] % 2 == 0){
                    $cont_pares++;
                } else{
                    $cont_impar++;
                }
                if($numero[$i]<0){
                    $cont_negativo++;
                } else{
                    $cont_positivo++;
                }
            }
            echo "Pares: ".$cont_pares." Impares: ".$cont_impar."<br>";
            echo "Positivos: ".$cont_positivo." Negativos: ".$cont_negativo."<br>";

            function ImprimeArray($array){
                for ($i = 0; $i <count($array); $i++){
                    echo "<br>Indice ".$i." Valor ".$array[$i];
                }
            }
            ImprimeArray($numero);

    echo "<br><br>Exercicio 2 - Ultilizando o for imprima a tabuada do 8<br>";

            $numero = 8;

            for ($i = 0; $i <= 10; $i++) {
                $resultado = $numero*$i;
                 echo $tabuadaDoOito = "8 x $i = $resultado"."<br>";
            }

    echo "<br>Exercicio 3 - Faça uma função que some todos os impares de 10 a 50 e exiba na tela<br>";
           /* $soma=0;

            for($i = 10; $i <= 50; $i++){
                if($i %2 == 1)
                $soma += $i;
            }

            echo "Soma dos impares de 10 a 50: $soma";
            */

        
            function imprimirImpares($inicial, $final){
                $soma = 0;
                for ($i = $inicial; $i<= $final; $i++){
                    if($i % 2 == 1){
                        $soma += $i;
                    }
                }
                echo $soma;
            }
            imprimirImpares(10,50);


    echo "<br><br>Exercicio 4 - Faça uma função que calcule a porcentagem de um número<br>";

                $base= 20;
                $valor= 1000;

                function porcentagem($base, $valor){
                   $resposta = ($valor*$base)/100;
                   echo $resposta="$valor"." x "."$base"." = "."$resposta"."<br><br>";
                }
                    porcentagem($base,$valor);
                    
    echo "<br>Exercicio 5 - Gere um array com números randomicos (rand(-50,50)) e ordene em ordem crescente.<br>";
                function gerarArrayAleatorio($qtdIndices){
                    $array = array();
                    for($i=0; $i<=$qtdIndices; $i++){
                        array_push($array, rand(-50,50));
                    }
                    return $array;
                }
                $novoArray = gerarArrayAleatorio(10);
                ImprimeArray($novoArray);

                function ordenarcaoCrescente($array){
                    $tamanho = count($array)-1;
                    $auxiliar = 0;

                    for ($i = 0; $i<$tamanho;$i++){

                        for($j=0; $j<$tamanho-$i; $j++){

                            if($array[$j] > $array [$j + 1]){
                                $auxiliar = $array[$j];
                                $array[$j] = $array [$j + 1];
                                $array [$j + 1] = $auxiliar;
                            }
                        }
                    }
                    return $array;
                }
                echo "Antes<br>";
                ImprimeArray($novoArray);

                $arrayOrdenado = ordenarcaoCrescente($novoArray);
                echo "<br> Depois de ordenar<br>"; ImprimeArray($arrayOrdenado);
?>