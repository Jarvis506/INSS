<?php
    $localhost = "127.0.0.1";
    $user = "root";
    $pass = "";
    $bd = "INSS";

    try {
        //code...
        $connect = new PDO("mysql:host=".$localhost.";dbname=".$bd."",$user,$pass);
        if($conect){
			$GLOBALS['pdo'] = @$conect;
		}
    } catch (\Throwable $error) {
        //throw $th;
        echo "houve algum erro: ".$error;
    }
?>