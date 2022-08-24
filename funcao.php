<?php
    function nomeFuncao(){

        if (true){
            echo "função está funcionando";
        }else{
            echo " nunca vai cair aqui";
        }
    }
    function adicao($num1, $num2){
        $soma = $num1 + $num2;
        return $soma;
    }

    function subtracao($num1, $num2){
        $resultado = $num1 - $num2;
        return $resultado; 
    }

    function multiplicacao($num1, $num2){
        $resultado = $num1 * $num2;
        return $resultado;
    }

    function divisao($num1, $num2){
        $resultado = $num1 / $num2;
        return $resultado;
    }

    function media($num1, $num2){
        $resultado = $num1+$num2;
        $media = $resultado/2;
        return $media;
    }


    function lendaria($num1, $num2, $operacao){
        $resultado = 0;
        echo "<br>";
        if($operacao == "+"){
            echo adicao($num1,$num2);
        } else if($operacao == "-"){
            echo subtracao($num1,$num2);
        } else if($operacao == "*"){
            echo multiplicacao($num1,$num2);
        } else if($operacao == "/"){
            echo divisao($num1,$num2);
        } else if($operacao == "media"){
            echo media($num1,$num2);
        } else {
            echo "digite uma operação válida";
        }
    }

    function SomaArray($array){
        $retorno = 0;
        for($i = 0; $i < count ($array); $i++){
           $retorno += $array[$i]; 
        }
        return $retorno;
    }

    //nomeFuncao();
    // $resultado = adicao (1,2);
    // echo "1ª adição é: ".adicao(565464,545454);
    // echo "2º adição é: ".adicao(84645,577);
    // echo "O resultado da soma é: ".$resultado;

    // $numeros = array(1,5,10,15,20,25);
    // echo SomaArray($numeros);

    lendaria(8,6, "+");
    lendaria(8,6,"-");
    lendaria(8,8,"/");
    lendaria(8,6,"*");
    lendaria(8,6,"media");
    lendaria(8,6,"dfsdfdfd");
    
?>