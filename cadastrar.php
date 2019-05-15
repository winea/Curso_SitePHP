<?php 
//arquivo de cadastro, receber dados do formulario usa $_POST ou $_GET
$nome = $_POST['nome']; //recebe o valor do name
$email = $_POST['email'];
$senha = $_POST['senha'];
$repsenha = $_POST['repetesenha'];
$lembrete = $_POST['lembrete'];
//tipo arquivo
$foto = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];

//verificar se recebeu os dados corretos
/*
echo "Foto: $foto<br>";
echo "Tipo: $tipo<br>";
echo "Nome: $nome<br>";
echo "Email: $email<br>";
echo "senha: $senha<br>";
echo "Repete Senha: $repsenha<br>";
echo "Lembrete: $lembrete<br>";
*/

if ($nome != "" && $email != "" && $senha !="" && $lembrete != "" && $foto != ""){
    if ($senha != $repsenha){
        echo "Senhas nao sao iguais";
    } else {
        echo "Dados corretos";
    }
    
} else {
    echo "Preencha todos os campos";
}


?>