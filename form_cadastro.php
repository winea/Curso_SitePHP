<html>
<head>
    <title>Site PHP</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
</head>
<body>
    <!--usa metodo post para deixar em segredo devido a senha-->
    <!--coloca o enctype dessa forma para poder passar imagem tb alem de texto-->
    <div id="box_form">
        <h1 class="titulos" style="margin-left:10%;">Cadastre-se</h1>
        <form action="cadastrar.php" method="POST" enctype="multipart/form/data">
            <input type="text" name="nome" class="campo_cad" placeholder="Nome">
            <input type="email" name="email" class="campo_cad" placeholder="E-mail">
            <input type="password" name="senha" class="campo_cad" placeholder="Senha">
            <input type="password" name="repetesenha" class="campo_cad" placeholder="Confirmar senha">
            <input type="text" name="lembrete" class="campo_cad" placeholder="Lembrete">
            <input type="file" name="foto" class="campo_cad">
            <div id="botoes">
                <input type="submit" value="Cadastrar" class="bt_cad">
                <input type="reset" value="Limpar" class="bt_cad">
            </div>
        </form>
        <div class="botoes">
            <a href="index.php" class="form_link">&larr; Voltar para a página principal</a>
            <p class="p_form">Se ja possui cadastro clique no link abaixo para efetuar login</p>
            <a href="login.php" class="form_link">Logar</a>
        </div>
       
    </div>
  
</body>
</html>