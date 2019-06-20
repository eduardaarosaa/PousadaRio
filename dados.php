<?php
include "conexao.php";
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];
$sql="insert into contato(nome,telefone,celular,email,comentario) values ('$nome','$telefone','$celular','$email','$comentario')";
$query=$mysqli->query($sql);
?>
<html>
<head>
<meta charset="UTF-8">
	<title>Pousada Rio</title>
	<link rel="icon" href="logo.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="index.css"/>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<section>
			<div id="contato">
				<i class="fa fa-phone" aria-hidden="true"></i>(22)2324-5546 |
				<i class="fa fa-phone" aria-hidden="true"></i> (22)95435-1331|
				<i class="fa fa-envelope" aria-hidden="true"></i>contato@praiadorio.com.br
			</div>
		</section>
		<div id="logo">
			<img src="logo.png" width="220"/>
		</div>
		<nav id="menu">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="galeria.html">Galeria</a></li>
				<li><a href="cabo.html">Cabo Frio</a></li>
				<li><a href="#">Agendamentos</a></li>
				<li><a href="contato.html">Contato</a></li>
			</ul>
		</nav>
	<br/><br/><br/><br/>

		<div id="envio">
			Dados enviados com sucesso aguardo nosso retorno ! 
		</div>
		<br/><br/><br/><br/>
	</body>
	
</html>