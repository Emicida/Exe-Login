<html>
  <body>
    <?php
      $link = mysqli_connect("localhost", "root", "", "avaliacaoodaw");
      $login = mysqli_real_escape_string($link, $_POST['login']);
      $senha = mysqli_real_escape_string($link, $_POST['senha']);
      if(empty($_POST['login']) || empty($_POST['senha'])) {
        echo "<script>alert('Campo Usuario e Senha Vazios.');</script>";
        header('Location: index.php');
        exit();
       }
      $query = "SELECT * from usuario where login = '{$login}' and senha = '{$senha}'";
      $result = mysqli_query($link, $query);
      $row = mysqli_num_rows($result);
      if($row == 1){
        header('Location: logado.php');
        exit();
      } 
      else {
        header('Location: index.php');
        echo "<script>alert('Login Inválido.');</script>";
        exit();
      }
    ?>