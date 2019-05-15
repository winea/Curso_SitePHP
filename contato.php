<!--http://localhost:8080/PHP/ComoCriarUmSite/-->
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Site PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='main.js'></script>
</head>
<body>
   <div id="geral"> 
    <div id="topo">
        <?php include "topo.php";?>
    </div>
    <div id="menu">
    <?php include "menu.php";?>
    </div>
    <div id="conteudo">
        <!--action enviar para esse endereço-->
        <div id="box-form">
        <form action="cad_contato.php" method="POST">
            <label class="legenda">Nome: </label><br>
            <input type="text" name="nome" class="campos" placeholder="Preencha esse campo com seu nome completo"><br>
            <label class="legenda">E-mail: </label><br>
            <input type="email" name="email" class="campos" placeholder="Digite o seu e-mail aqui" required><br>
            <label class="legenda">Assunto: </label><br>
            <input type="text" name="assunto" class="campos" placeholder="Sobre o que deseja falar" required><br>
            <textarea name="conteudo" class="campo2" placeholder="Digite no maximo 140 caracteres" maxlength="140"></textarea><br>
            <input type="submit" value="Enviar" class="bt_enviar">
           
        </form>
    </div>
    <div id="rodape">
    <?php include "rodape.php";?>
    </div>
   </div>
</body>
</html>