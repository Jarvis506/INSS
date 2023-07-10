<?php
    require("connect.php");
    session_start();
    if($connect){
        $nome = $_POST["name"];
        $senha = $_POST["password"];
        $numero = $_POST["telefone"];
        $nascimento = $_POST["date"];
        $genero = $_POST["genero"];
        $bi = $_POST["id"];
        
        if (isset($numero)) {
            
            $verifi = $connect -> prepare("select * from usuario  where(telefone = :fone)");
            $executa = $verifi -> execute(array(':fone' => $numero ));
            $conta = $verifi -> rowCount();

            if($conta == 0){
                
                $process = $connect -> prepare("INSERT INTO usuario(nome,telefone,senha,bi,nascimento,genero) VALUES (:nome, :tel, :senha, :bi, :datas, :genero)");
                $process -> bindValue(":nome",$nome);
                $process -> bindValue(":tel",$numero);
                $process -> bindValue(":senha",$senha);
                $process -> bindValue(":bi",$bi);
                $process -> bindValue(":datas",$nascimento);
                $process -> bindValue(":genero",$genero);
                
                $exe = $process -> execute();
                
                if ($exe == true) {
                    # code...
                    $response = array(
                        'estado'=>"valido"
                    );
                }
            }else {
                $response = array(
                    'estado'=>"dados ja presentes no sistema"
                );
            }
        }

        echo json_encode($response);
    }else{
        echo"falso";
    }
?>