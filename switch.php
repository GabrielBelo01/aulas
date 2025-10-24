<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
       $cor = "azul";

       switch ($cor){
          case "vermelho": echo "a cor é vermelho"; break;
          case "azul": echo "a cor é azul"; break;
          case "verde": echo "a cor é verde"; break;
          default: echo "nenhuma cor foi selecionada"; break;     
       }
    ?>

    <br><br>

    <?php
        $categoria = "SUV";
        $preco = 0.0;
        $carro = '';

        
        switch (strtolower($categoria)){
            case 'luxo':
                $carro = 'Mercedes';
                $preco = 250000;
                break;

            case 'suv':
            case 'suv basico':
                $carro = 'Renegade';
                $preco = 80000;
                break;
                
            case 'sedan':
                $carro = 'Etios';
                $preco = 55000;
                break;
            
            default:
                $carro = 'Mobi';
                $preco = 33000;
                break;    

        }

        $precoFormatado = number_format($preco, 2, ",", ".");
        echo "<p>Carro: $carro</p> Preço: R$ $precoFormatado</p>";



        
    ?>

    <form action = "#" method="POST">
        <div>
            <label for="dia">Dias: </label>
            <input type="text" name="dia" value="">
        </div>

        <button type="submit" name="diaSemana">Executar</button>
    </form>

    <?php
    if(isset($_POST['diaSemana'])){
        $diasSemanas = $_POST['dia'];
               
        
        switch(strtolower($diasSemanas)){
            case 'segunda':
            case 'terca':
            case 'quarta':
            case 'quinta':
            case 'sexta':
                echo "dia util";
                break;
            case 'sabado':
            case 'domingo':
                echo "final de semana";
                break;
            default:
                echo "dia invalido";
                                        
        }

    }
    ?>

    <br><br>

    <form action = "#" method="POST">

            <label for="numero1">Numero1: </label>
            <input type="number" name="numero1" value="">
            <br>
            <label for="numero2">Numero2: </label>
            <input type="number" name="numero2" value="">
            <br>    
            <label for="operacao">Operaçao: </label>
            <input type="text" name="operacao" value="">
            <br>


        <button type="submit" name="calcularNumeros">Executar</button>
    </form>

     <?php

    if(isset($_POST['calcularNumeros'])) {
         
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacao = $_POST['operacao'];  
        $soma = 0;

        switch($operacao){
            case "+":
                $soma = $numero1 + $numero2;
                echo $numero1 ." + ". $numero2 ;
                echo "A soma é: " . $soma;   
                break;

        }
            
    }

    ?>

    

</body>
</html>