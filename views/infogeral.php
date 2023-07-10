<div class="inform">
    <img src="./src/img.jpg" alt="image" srcset="">
A Previdência Privada ou Previdência complementar é um tipo de seguro contratado ou investimento disponibilizado para pessoas físicas com o caráter de longo prazo, funcionando como um complemento à previdência pública disponibilizada pelo Governo.
</div>
<div class="form">
    <form action="./server/cadastro.php" method="post" id="cadastrar">
        <span>Cadastrar Beneficiario</span>
        <input type="text" name="name" placeholder="digite o seu nome"id="name"/>
        <input type="tel" name="telefone" placeholder="digite o seu telefone" id="telefone">
        <input type="text" name="id" placeholder="digite o seu B.I" id="id"/>
        <input type="date" name="date" placeholder="informe a data de nascimento"id="date">
        <input type="password" name="password" id="senha">
        <select name="genero" id="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>

        <input type="button" value="cadastrar">
    </form>
</div>