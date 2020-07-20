<?php include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM salgadinho WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!result) {
        die("Sem resposta");
    }

    $_SESSION['msg'] = 'Salgadinho Removido';
    $_SESSION['msg_type'] = 'danger';
    header("Location: cadastro.php");
}
