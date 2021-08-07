<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php
            $codm = $_POST['codm']; 
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];
            $sexo = $_POST['sexo'];
            $especialidade = $_POST['especialidade'];
            $link = mysqli_connect("localhost", "root", "", "avaliacaoodaw");
            $query = "INSERT INTO mecanico(codm,nome,cpf,data_nascimento,sexo,especialidade) VALUES ('$codm', '$nome', '$cpf', '$data_nascimento', '$sexo', '$especialidade')";
            mysqli_query($link, $query);
            mysqli_close($link);
            $host  = ('localhost');
            $uri   = ('gabriel');
            $extra = 'logado.php';
            header("Location: http://$host/$uri/$extra");
        ?>
    </body>
</html>