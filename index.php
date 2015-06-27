<?php

$tipo_conexao = 'localhost:81';
   // include 'config.php';
	
	if (($tipo_conexao == 'localhost:81') || ($tipo_conexao == '127.0.0.1:81')){
		define('url', 'http://localhost:81/maratona');
	}else{
		define('url', 'http://jiparanainfo.zz.vc/e');
	}
    $paginas = array('/', 'oque', 'participar', 'novo');
    $url = explode('/', $_GET['url']);

        $arquivo = $url[0];
//        $identificador = $url[1];
//echo $tipo_conexao."luizz";
?>
<html>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo url?>/css/bootstrap.css" />	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt-br" />
	<link href="<?php echo url ?>/imgs/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>

<body>
	<div class="col-sm-12">
<?php
	include "form/top.php"; //inicio topo
	include "form/menu.php";   //inicio menu

	if (($tipo_conexao == 'localhost') || ($tipo_conexao == '127.0.0.1')){
		echo "<b class= 'label alert'> Voce está conectado em ".$tipo_conexao. "</b>";
	}//verifica se o está conectado localhost

    if ($arquivo != '' && in_array($arquivo, $paginas))
    {
        include "$arquivo.php";
    }
    elseif ($arquivo == '')
    {
        include 'home.php';
    }
    else
    {
        include '404.php';
    }
?>
		<?php include "form/rodape.php"; ?>      <!-- Inicio da Barra RODAPE -->
	</div>
<br />
<script src="js/dropdown.js"></script>
<script src="<?php echo url ?>/js/jquery.min.js"></script>
<script src="<?php echo url ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo url ?>/js/jquery-1.6.min.js"></script>

</body>
</html>