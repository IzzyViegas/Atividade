<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jubinha_Black 2022</title>
</head>

<body>
  <?php
  include("topo.php");
  ?>
  <div id="corpo">
    <main>
      <table class="tabela">
        <caption>Calculadora Mediana</caption>

        <tbody>
          <tr>
            <td><input type="text" id="number" value="" max="15" placeholder="Ex: 3,15,8,29" /></td>
          </tr>
          <tr>
            <td><input type="text" id="result" value="" max="15" placeholder="Resultado"/></td>
          </tr>
        </tbody>

        <tfoot>
          <td><button type="submit" onclick="clearScreen();" value="Apagar" />Apagar</td>
          <td><button type="submit" onclick="consultar();" value="Consultar" />Consultar</td>
        </tfoot>
      </table>
    </main>
  </div>
  <footer>
    <p>Jubinha_Black 2022 @Desenvolvedora Web</p>
  </footer>
</body>

</html>