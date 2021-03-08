<html>

<?php
include('../core/dbconfig.php');
if (isset($_POST['acao'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM tbautores WHERE nome = ?");
    $sql->execute([$usuario]);
    //var_dump($sql->rowCount());
    if ($sql->rowCount() == 1) {
        $info = $sql->fetch();
        var_dump($senha);
        var_dump($info['senha']);
        var_dump(password_verify($senha, $info['senha']));
        if (password_verify($senha, $info['senha'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $info['id'];
            $_SESSION['usuario'] = $info['nome'];
            header("Location: main.php");
            die();
        } else {
            //Erro
            echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário ou senha incorretos!</p></div>';
        }
    } else {
        //Erro
        echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
    }
}
?>


<form method="post">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="Entrar" name="acao">
</form>