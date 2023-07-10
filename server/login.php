<?php
    require("connect.php");
    session_start();
    if($connect){
        $numero = $_POST["telefone"];
        $senha = $_POST["senha"];

        if (isset($numero)) {

            $verifi = $connect -> prepare("select * from usuario  where(telefone = :fone)");
            $executa = $verifi -> execute(array(':fone' => $numero ));
            $conta = $verifi -> rowCount();

            if($conta > 0){
               
                $dados = $verifi -> fetchAll(PDO::FETCH_ASSOC);
                foreach ($dados as $lista) {
                    $numero = $lista["telefone"];
                    $nome = $lista["nome"];
                    $id = $lista["id"];
                    //gerando a seccao
                    $_SESSION['user'] = $nome;
                    $_SESSION['id'] = $id;
                    //array de retorno
                    $response = array('estado'=>"valido",'nome'=>$nome,'numero'=> $numero);
                }
            }
        }

        echo json_encode($response);
    }else{
        echo"falso";
    }
    /*
    
    if (!isset($numero)) {
        $conta =  2;
        $verifi = $pdo -> prepare("select * from usuario");
        //$executa = $verifi -> execute(array(':fone' => $numero ));
        $executa = $verifi -> execute();
        $conta = $verifi -> rowCount();
     }
     /*
      //busca no banco de dados
        $verifi = $connect -> prepare("select * from usuario where(telefone = :fone)");
        //$executa = $verifi -> execute(array(':fone' => $numero ));
      
        $conta = $verifi -> rowCount();
        
     if($conta > 0){
            $hash = new PassCrypt(8);
            $dados = $verifi -> fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $lista) {
                $numero = $lista["telefone"];
                $nome = $lista["nome"];
                $id = $lista["id"];
                //gerando a seccao
                $_SESSION['user'] = $nome;
                $_SESSION['id'] = $id;
                //array de retorno
                $response = array('estado'=>"valido");
            }
        }
    */
?>