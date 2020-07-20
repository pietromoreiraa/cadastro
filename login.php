<?php include('db.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit;
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);



$query = "select usuario_id, email from usuario where email = '$email' and senha = '$senha' ";

$result =mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: cadastro.php');
    exit();
} else {
    header('Location: index.php');
    exit();
}
