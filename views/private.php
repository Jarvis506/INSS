<?php

$verifi = $connect -> prepare("select * from usuario  where(id = :id)");
$executa = $verifi -> execute(array(':id' => $_SESSION['id'] ));
$conta = $verifi -> rowCount();

if($conta > 0){
               
    $dados = $verifi -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($dados as $lista) {
        $lista = $dados;
        
    ?>

<div class="leftmenus">
    <span class="menus">Lista de Menus</span>
    <ul class="menus">
        <a href="#resume_profile" class="resumo" id="resumo">
            <li>Resumo</li>
        </a>
        <a href="#user_profile" class="profile" id="perfil">
            <li>Perfil</li>
        </a>
    </ul>
</div>
<div class="rightside">
    <div id="resume_profile">
        resumo do perfil
    </div>
    <div id="user_profile">
        <?php


          ?>
                        <div class="dados_user">
                            <span class="nome">Nome: <?php echo $lista['nome']?></span>
                            <span class="telefone">Telefone: <?php echo $lista['telefone']?></span>
                            <span class="genero">Genero: <?php echo $lista['genero']?></span>
                            <span class="bi">Bilhete de identidade: <?php echo $lista['bi']?></span>
                            <span class="bi">TRabalha por conta de outrem?: <?php echo $lista['empregado']?></span>
                        </div>
                    <?php
                  //deve apresentar ass seguintes informacoes adcionais
                  /*
                    1 - se o assegurado trabalha por conta propria ou nao
                        se trabalha por conta propria nao apresente entidade empregadora
                        se trabalha por conta de otrem deves apresentar a entidade empregadora
                    2 - pega o salario multiplica por 11%(3% do funcionario e 8% da empresa)
                    3 - pegar o serultya do da multiplicao anterio e multiplicar pelos anos de trabalho para ter o total do valor que o assegurado ja tem conservado
                    4 - para gerar o futuro salario do assegurado pegue no resultado anterio e divida pelos 12 mese que conrespoende a um ano.(utopia).

                    apos tere estar inofrmacoes no sistema.
                    na aba de resumo 
                    mostre: o nome do susurio, o bi, o telefone, o salario actual e o futuro salario como forma de ressumo da informacao do ususrio.
                
           */

        ?>
    </div>
</div>
<?php
        }
        print_r($lista);
    }
?>
