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
      <h2> Dados Recebidos</h2>
      <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['estado'];
        $msg = $_POST['mensagem'];
        echo "Nome:" . $nome . "<br>";
        echo "E-mail:" . $email . "<br>";
        echo "cidade:" . $cidade . "<br>";
        echo "Estado:" . $uf . "<br>";
        echo "Mensagem:" . $msg . "<br>";
        $contato = array("Nome" => $nome, "Email" => $email, "UF" => $uf, "cidade" => $cidade, "Mensagem" => $msg);
        echo "<hr> Vetor criado: <br>";
        print_r($contato);
        if (file_exists("dados.json")) {
          $string = file_get_contents("dados.json");
          $json = json_decode($string, true);
        }
        $json["contatos"][] = $contato;
         $fp = fopen('dados.json', 'w');
         if ($fp == false) {
            print(error_get_last());
          }
        fwrite($fp, json_encode($json));
        fclose($fp); 
      ?>
    </main>
  </div>
  <footer>
    <p> Jubinha_Black 2022 @Desenvolvedora Web</p>
  </footer>
</body>

</html>