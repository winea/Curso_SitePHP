
<?php 
//arquivo de conexao com o banco de dados
//mysqli_connect
//ciando as variaveis
//sempre coloque a porta do mysql
$host = "localhost:330";
$user = "root";
$pass = "";
$db = "db_comocriarumsitephp";

//criando conexao
$link = mysqli_connect($host,$user,$pass,$db);
/* //se quiser verificar se tem erro ou nao 
$banco = mysqli_connect_errno(); //erro conexao
if($banco == true){
    echo "erro conexao";
} else {
    echo "Conexao ok";
}*/
?>