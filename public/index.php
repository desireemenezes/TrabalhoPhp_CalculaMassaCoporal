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
  <script type="text/javascript" src="index.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
  <!--cabeçalho-->
  <div class="col-sm-12">
    <h1>Cálculo<span class="gray"> IMC</span></h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div id="box-animacao">
          <table class="text">
            <tbody>
              <tr>
                <td> IMC: </th>
                  <td> Classificação: </th>
                  </tr>
                  <tr>
                    <td> 18.5 </td>
                    <td> Abaixo do Peso </td>
                  </tr>
                  <tr>
                    <td> 18.5 - 24.9 </td>
                    <td> Peso Ideal </td>
                  </tr>
                  <tr>
                    <td> 25.0 - 29.9 </td>
                    <td> Sobrepeso </td>
                  </tr>
                  <tr>
                    <td> 30.0 - 34.9 </td>
                    <td> Obesidade Grau I </td>
                  </tr>
                  <tr>
                    <td> 35.0 - 39.9 </td>
                    <td> Obesidade Grau II </td>
                  </tr>
                  <tr>
                    <td> 40.0 </td>
                    <td> Obesidade Grau III </td>
                  </tr>
                </tbody></table>
                <p></p>
              </div>
            </div>


            <div class="col-sm-6">
              <h5 class="text">O índice de massa corporal (IMC) é reconhecido como padrão internacional para avaliar
              o grau de obesidade. O IMC é calculado dividindo o peso (em Kg) pela altura ao quadrado.</h5>
              <h3>Digite seus dados para realizar o cálculo:</h3>

              <form name="formularioDados"action="calcular.php" method="post">

                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input name="nome" class="form-control" placeholder="Digite seu Nome..." required="required" type="text">
                </div>

                <div class="form-group">
                  <label for="data" class="col-2 col-form-label">Data Nascimento:</label>
                  <div class="col-10">
                    <input class="form-control" type="date" placeholder="2011-08-19" name="data"required="required" type="number">
                  </div>
                </div>

                <div class="form-group">
                  <label for="select">Sexo:</label>
                  <select class="form-control">
                    <option>Feminino</option>
                    <option>Masculino</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="kilos">Kilos:</label>
                  <input class="form-control" name="kilos" min="1" max="1000" required="required" type="number">
                </div>

                <div class="form-group">
                  <label for="meters">Metros:</label>
                  <input class="form-control" name="meters" min="1" max="1000" required="required" type="number">
                </div>

                <div class="form-group">
                  <label for="centimeters">Centimetros:</label>
                  <input class="form-control" name="centimeters" min="1" max="1000" required="required" type="number">
                </div>

                <button onfocus="validar()" type="submit" class="btn btn-danger">Calcular</button>
                <br /><br />
              </form>
            </div>
          </div>
        </div>
      </body>
      </html>
