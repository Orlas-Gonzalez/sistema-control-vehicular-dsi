<?php
    $F_IdCuenta = $_POST['IdCuenta'];
    $F_PWD = $_POST['PWD'];

    include("Controlador.php");
    $conn_MYSQL = conectar();
    $SQL = "SELECT * FROM cuentas WHERE id_cuenta = '$F_IdCuenta';";
    $Resultado = consultar($conn_MYSQL, $SQL);
    $Registros = mysqli_num_rows($Resultado);
    if($Registros == 0){
        print("<h1>El Usuario NO Existe</h1>");
        header("Location:F_ACCESO.html");
    }else{
        $Fila = mysqli_fetch_row($Resultado);
        if($Fila[1] == $F_PWD){
            if($Fila[5] == 1){
                if($Fila[4] == 1){
                    print("<h1>Cuenta Bloqueada</h1>");
                    header("Location:F_ACCESO.html");
                }else{
                    print("<h1>ACCESO CORRECTO</h1>");
                    session_start();
                    $_SESSION['Usuario'] = $Fila[0];
                    $_SESSION['Tipo'] = $Fila[2];
                    if($Fila[2] == "A"){
                        header("Location:MENU_ADMINISTRADOR.php");
                    }else{
                        header("Location:MENU_USUARIO.php");
                    }
                }
            }else{
                print("<h1>Cuenta No Activa</h1>");
                header("Location:F_ACCESO.html");
            }
        }else{
            print("<h1>Contraseña Incorrecta</h1>");
            header("Location:F_ACCESO.html");
        }
    }
    cerrar($conn_MYSQL);
?>