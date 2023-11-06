<?php
    session_start();
    $server = "localhost";
    $username="root";
    $password="";
    $dbname="safedrive";

    $conn = new mysqli($server,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }

    if(isset($_POST['id_usuario'])){
        /* valores para ingresar información a la tabla */
        $text = $_POST['id_usuario'];
		$nombre = ;
		$correo = ;
		$patente = ;
		$hora_ingreso = date('H:i:s');

		/* Verificación de que el usuario tiene permitido ingresar */
		$sql ="SELECT * FROM usuarios, vehiculos WHERE id_usuario='$text' ";
		$query=$conn->query($sql);
		if($query->num_rows>0){
            /* Insertar en historial junto a su información */
			$sql = "INSERT INTO historial(run, nombre, correo, patente, hora_ingreso) VALUES('$text','$nombre','$correo','$patente','$hora_ingreso')";
			if($conn->query($sql) === TRUE){
			 $_SESSION['success'] = 'Tiene permitido el ingreso.';
			 }else{
			  $_SESSION['error'] = $conn->error;
		   }	
		}
		  
	}

    header("location: vista_guardia.php");
    $conn->close();
?>