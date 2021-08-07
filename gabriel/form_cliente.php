<html>
  <head>
    <title>Formulario Cliente</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>
   <script src="script.js"></script>
   <center>
   <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Inserir novo cliente</h3>
                    <div class="box">
                      <form action="insere_cliente.php" method="post">
                        <br><b>Código cliente:</b> <br><input type="number" name="codc" required><br>
                        <br><b>Cpf:</b> <br><input type="number" name="cpf" placeholder="Só numeros" onblur="valida_cpf(cpf)" required><br>
                        <br><b>Nome:</b><br> <input type="text" name="nome" placeholder="Fulano" required><br>
                        <br><b>Email:</b><br><input type="text" name="email" onblur="validacaoEmail(email)" placeholder="nome@gmail.com"><br>
                        <br><b>Data de nascimento:</b></label><br><input type="date" name="data_nascimento" required><br><br>
                        <p> <b>Sexo:</b></p>
                        <input type="radio" id="masculino" name="sexo" value="masculino">
                        <label for="masculino">Masculino</label><br>
                        <input type="radio" id="feminino" name="sexo" value="feminino">
                        <label for="feminino">Feminino</label><br>
                        <input type="radio" id="outro" name="sexo" value="outro">
                        <label for="outro">Outro</label><br><br>
                        <b>Veiculo:</b> <br><textarea name="veiculo" rows="10" cols="20">  </textarea><br>
                        <br><input type="submit" name="adicionar" value="adicionar">
                      </form><hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </center>
  </body>
</html>