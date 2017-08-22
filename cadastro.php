<?php


$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$email2 = $_POST["email2"];
$senha = md5($_POST["senha"]);
$senha2 = md5($_POST["senha2"]);
$sexo = $_POST["sexo"];
$estado = $_POST["estado"];
$regulamento = $_POST["regulamento"];

if ($sexo == 'masculino') {

	echo "Senhor ".$nome. "</br>";
}

else {
	echo "Senhora ".$nome. "</br>";
}

if ($email != $email2) {
		
		echo "O E-Mail ficou diferente da Confirmação de E-Mail </br>";
	}
if ($senha != $senha2) {

	echo "As Senhas não Correspondem </br>";
}
if ($estado == 'Acre'){

	echo $nome." é Acriana </br>";

}

if ($estado == 'Bahia') {
	echo $nome." é Baiana </br>";

}

if ($estado == 'SP') {
	echo $nome." é Paulista </br>";

}
if ($estado == 'RJ') {
	echo $nome." é Carioca </br>";

}

 if ($estado == 'CE') {
	echo $nome." é Cearense </br>";

}
if ($email == '' || $email2 == ''){

	echo " Alerta : O Campo E-Mail e Confirmar E-Mail precisa ser preechido !!! </br> ";
}

if ($cpf > 11){
	echo "CPF possui mais de 11 caracteres !!!";
}
else {
	echo "CPF possui menos de 11 caracteres";
}


 
include "insere.inc";
 
?>