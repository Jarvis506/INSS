<?php
    @session_start();
    require("./server/connect.php");
    //session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/private.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/login.js"></script>
    <title>INSS</title>
</head>
<body>
    <div class="container" id="geral">
        <div class="top">
            <span class="logo" id="logo">
                INSS
            </span>
            <div class="menus">
                <?php
                    if(!$_SESSION["user"]){
                ?>
                <a href="#" class="login">Login</a>
                <div class="login" style='display:none'>
                    <form action="./server/login.php" id='loginAccount'method="post">
                        <input type="tel" name="telefone" placeholder="digite o seu telefone" class='Log_telefone'id="Log_telefone"/>
                        <input type="password" name="senha" placeholder="senha"id="Log_senha"/>
                        <input type="button" value="entrar">
                    </form>
                </div>
                <?php
                    }else{
                        ?>
                            <span>Usuario: <?php echo $_SESSION['user']?></span>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="corpo">
            <?php
            
                if ($_SESSION['user']) {
                    include("./views/private.php");
                }else{
                    echo file_get_contents('./views/infogeral.php');
                }
            ?>
        </div>
        <footer>CopyRight <?php echo date("Y")?></footer>
    </div>
</body>
</html>