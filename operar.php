<?php
	$valor1=$_POST['n1'];
	$valor2=$_POST['n2'];
	$op=$_POST['operación'];
	if($op==1)
	{
		$resultado= ($valor1+$valor2);
	}
	if($op==2)
	{
		$resultado= ($valor1-$valor2);
	}
	if($op==3)
	{
		$resultado= ($valor1*$valor2);
	}
	if($op==4)
	{
		$resultado= ($valor1/$valor2);
	}
?>
<html>
	<head>
		<link rel = "stylesheet" type="text/css" href="estilos.css"/>
	</head>
	<body>
		<header>
			<div align="center" id="resultado">
				<h1>resultado</h1>
			</div>
		</header>
		<section>
			<div align="center" id="mostrar">
				<p><?php echo $resultado; ?> </p>
			</div>
		</section>
	</body>
</html>