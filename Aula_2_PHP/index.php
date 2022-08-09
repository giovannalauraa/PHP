<?php 

    //Array List 
    $array = ["Maria", 15, 25.5];
        $array[]= "João"; //Como o local não foi especificado, ele adiciona na posição a seguir da última
        $array[5]= 15;
        $array[]= 25.5;
        $array["curso"]= "Informática"; //Cria uma posição para o Array
       // var_dump($array); // Exibe na tela detalhes da variável

    
       //Array associativo

    $aluna = [
        "Nome: " => "Maria",
        "Idade: " => 16,
        "Média: " => 10.0
    ];
        foreach($aluna as $chave => $valor){
            echo "<strong> $chave</strong>: $valor <br />";
        } //Percorrendo o Array associativo

      //  var_dump($aluna);


    // Repetição com while
    /** $contador = 1;
    *echo "Contador: <br />";
    *while ($contador <= 100){
    *    echo "<br>" .$contador. "<br />";
    *    $contador ++;
    *}
     */
    
    //Repetição com for
   /* for($i = 100 , $j = 0; $i > 0; $i --, $j++){
         echo "<br>" .$i. "-" .$j."<br/>";
       }

       //Operadores
      /* echo "<br> Valor: <br>";
       $valor = 10;
       $valor -= 1; // valor é igual a ele mesmo -1
       echo "<br>".$valor;


    //EXEMPLO REPETIÇÃO

    /**
   *   echo "Contagem de 0 a 100: <br/>";
   *   for($i = 0 ; $i <= 100; $i++){
   *     echo "<br>" .$i. "<br/>";
   * }
   *   echo "<br> Contagem de 100 a 0: <br/>";
   *   for($i = 100 ; $i >=0; $i--){
   *     echo "<br>" .$i. "<br/>";
   *  }*/
   ?>