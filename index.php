<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>
            Cálculo de notas.
        </title>
        <h1>
            Cálculo de notas.
        </h1>
        <form name="form1" method="POST" action="index.php">
            Nota 1: <input type="text" name="txtnota1"> 
            <br>
            Nota 2: <input type="text" name="txtnota2">
            <br>
            Nota 3: <input type="text" name="txtnota3">
            <br>
            Nota 4: <input type="text" name="txtnota4">
            <br>
            Nota 5: <input type="text" name="txtnota5">
            <br>
            <input type="submit" name="calcularedad" value="Calcular">
        </form>

        <?php
        if(isset($_POST["calcular"])){
            $valor1 = $_POST["txtnota1"];
            $valor2 = $_POST["txtnota2"];
            $valor3 = $_POST["txtnota3"];
            $valor4 = $_POST["txtnota4"];
            $valor5 = $_POST["txtnota5"];

            $valor1 = $valor1*0.20;
            $valor2 = $valor2*0.15;
            $valor3 = $valor3*0.22;
            $valor4 = $valor4*0.10;
            $valor5 = $valor5*0.33;

            $notafinal = $valor1+$valor2+$valor3+$valor4+$valor5;
            echo "<br>La nota final o definitiva es: " . $notafinal;

        }
       ?>

       <h1>
           Cálculo de Edad
       </h1>
       <form name="form2" method="POST" action="index.php">
        Edad: <input type="text" name="txtedad">
        <br>
        <input type="submit" name="calcularedad" value="Calcular">
       </form>

       <?php
        if(isset($_POST["calcularedad"])){
            $valoredad = $_POST["txtedad"];

            if($valoredad >=0 && $valoredad<=10){
                echo "Niño";
            }
            if($valoredad>=11 && $valoredad<=14){
                echo "Pre-Adolescente";
            }
            if($valoredad>=15 && $valoredad<=18){
                echo "Adolescente";
            }
            if($valoredad>=19 && $valoredad<=25){
                echo "Jóven";
            }
            if($valoredad>=26 && $valoredad<=65){
                echo "Adulto";           
            }
            if($valoredad>=65){
                echo "Anciano";
            }
        }

       ?>

    </head>
</html>