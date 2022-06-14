<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jubinha_Black</title>
</head>

<body>
  <?php
  include("topo.php");
  ?>
 <div id="corpo">
   <main>
     <table class="tabela">
       <caption>Criptografar</caption>
       <tbody>
         <tr>
           <td><input type="text" id="text" value="" placeholder="digite seu texto"/></td>
        </tr>
        <tr>
          <td><input type="text" id="text" value="" placeholder="digite seu texto" /></td>
        </tr>
        <tr>
          <td><input type="text" id="text" value="" placeholder="digite seu texto" /></td>
        </tr>
       </tbody>

       <tfooter>
          <td><button type="submit" onclick="Encrypted();" value="text" />Criptografar</td>
          <td><button type="submit" onclick="Descrypted();" value="Consultar" />Descriptografar</td>
       </tfooter>
     </table>
   </main>
 </div>
  <footer>
    <p> Jubinha_Black 2022 @Desenvolvedora Web</p>
  </footer>

  <script src="script1.js"></script>
</body>

</html>