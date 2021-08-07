<html>
  <head>
  <title>Lista Cliente</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>
  <center>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                    <h3 class="title has-text-grey">Lista Mecanico</h3>
                    <center>
                      <?php
                        $link = mysqli_connect("localhost", "root", "", "avaliacaoodaw");
                        $query = "SELECT * FROM cliente ORDER BY codc";
                        $result = mysqli_query($link, $query);
                        echo "<table border=\"1\">";
                            echo "<td><b>Codc</b></td>";
                            echo "<td><b>CPF</b></td>";
                            echo "<td><b>Nome</b></td>";
                            echo "<td><b>Veiculo</b></td>";
                            echo "<td><b>Sexo</b></td>";
                            echo "<td><b>Data de nascimento</b></td>";
                            echo "<td><b>Email</b></td>";
                            while ($row = mysqli_fetch_row($result)) {
                                echo "<tr><td>".$row[0]."</td>";
                                echo "<td>".$row[1]."</td>";
                                echo "<td>".$row[2]."</td>";
                                echo "<td>".$row[3]."</td>";
                                echo "<td>".$row[4]."</td>";
                                echo "<td>".$row[5]."</td>";
                                echo "<td>".$row[6]."</td>";
                            }
                            echo "</table><hr>";
                            mysqli_close($link);
                        ?><p><button onclick="document.location='logado.php'">Voltar</button></p>
                        </center>
                 </div>
             </div>
         </section>
      </center>
    </body>
</html>