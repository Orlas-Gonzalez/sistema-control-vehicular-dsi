<?php
    function conectar(){
        $ServerName = "localhost";
        $Usuario = "root";
        $Password = "";
        $BD = "control_vehicular";
        $connectionMYSQL = mysqli_connect($ServerName, $Usuario, $Password, $BD);
        return $connectionMYSQL;
    }

    function consultar($connectionMYSQL, $SQL){
        //print("<br><h1>Consulta Ejecutada</h1>");
        //$resulset = mysqli_query($connectionMYSQL, $SQL) or die(mysqli_error($connectionMYSQL));
        $resulset = mysqli_query($connectionMYSQL, $SQL);
        return $resulset;
    }

    function cerrar($connectionMYSQL){
        mysqli_close($connectionMYSQL);
    }
?>