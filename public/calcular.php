<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Calculadora de IMC</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<?php

require_once 'class/Calculadora.php';

$nome = $_POST['nome'];
$data = $_POST['data'];

$kilos = $_POST['kilos'];
$meters = $_POST['meters'];
$centimeters = $_POST['centimeters'];


$calculadora = new Calculadora();

//SETANDO VALORES
$calculadora->setKilos( $kilos );
$calculadora->setMeters( $meters );
$calculadora->setCentimeters( $centimeters );

?>
<body>

  <!--cabeçalho-->
  <div class="col-sm-12">
    <h1>Cálculo<span class="gray"> IMC</span></h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="padding">
          <h3>Informações coletadas</h3>

        <?php
        echo 'Nome: '.$nome.'<br />';
        echo 'Data de Nascimento: '.$data.'<br/>';
        echo 'Seu indice de massa corporal é: '.$calculadora->getImc();
        ?>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
