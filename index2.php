<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>teste2</title>
</head>

<body>
  <?php
  include("topo.php");
  ?>
  <div id="corpo">
    <main>
      <table class="tabela">
        <caption>Conjuntos Ordenados</caption>

        <tbody>
          <tr>
            <td><input type="text" id="number1" value="" placeholder="Ex: 2, 8, 10, 14, 15" /></td>
          </tr>
          <tr>
            <td><input type="text" id="result1" value="" placeholder="Resultado"/></td>
          </tr>
        </tbody>

        <tfooter>
          <td><button type="submit" onclick="clean();" value="clean" />Apagar</td>
          <td><button type="submit" onclick="calcular();" value="calcular" />Calcular</td>
        </tfooter>
      </table>
    </main>
  </div>
  <footer>
    <p> Jubinha_Black 2022 @Desenvolvedora Web</p>
  </footer>

</body>

</html>