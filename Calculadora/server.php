<?php
  //aqui estamos invocando el archivo externo para dar uso de  las operaciones de ese archivo
  include("MathHelp_jmd.php");

  if($_POST){
     // Aqui se ejecuta la condicionnes de la operacion raiz
    if (isset ($_POST["raiz"])){
        $numbers=$_POST["raiz"];
        $raiz=sqrt($numbers);
        // aqui me retorna la informacion
        echo $raiz;
    }
          
        // aqui se ejecuta las condiciones de las operaciones basicas + - * /
        if (isset ($_POST["calculo"])){
            $numbers=$_POST["calculo"];
            // aqui se esta almacenando el resultado que se ejecuta en el archivo MathHelp_jmd_php
            $resultado=MathHelp_jmd :: calculate_str($numbers);

            // aqui se coloca una condicion para cuando la  division es  por cero 
            if($resultado=="NaN"){
              // aqui me retorna la informacion
              echo false;
            }else{
              // aqui me retorna la informacion
              echo $resultado;
            }
            
        }
  

  }



?>