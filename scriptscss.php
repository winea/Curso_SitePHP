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
    <?php include "conteudo_scriptscss.php";?>
    </div>
    <div id="rodape">
    <?php include "rodape.php";?>
    </div>
   </div>
</body>
</html>