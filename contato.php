<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jubinha_Black 2022</title>
</head>
<body>
  <?php
   include_once("topo.php");
  ?>
  <div id="corpo">
    <main>
      <h2>Fale Conosco</h2>
      <fieldset>
        <form action="receber_dados.php" method="POST">
          <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo">
          </div>
          <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="E-mail">
          </div>
          <div>
            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade" placeholder="Cidade">
          </div>
          <div>
            <label for="estado">Estado: </label>
            <select name="estado" id="estado">
              <option>Maranhão</option>
              <option>Minas Gerais</option>
              <option>Mato Grosso do Sul</option>
            </select>
          </div>
          <div>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Sua Mensagem"></textarea>
          </div>
          <div>
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
          </div>
        </form>
      </fieldset>
    </main>
  </div>
  <footer>
    <p> Jubinha_Black 2022 @Desenvolvedora Web</p>
  </footer>
</body>

</html>