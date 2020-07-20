<?php include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT *FROM salgadinho WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $marca = $row ['marca'];
        $sabor= $row ['sabor'];
        $peso = $row ['peso'];
    }
}

    if(isset($_POST['update'])) {
        $id =$_GET['id'];
        $marca = $_POST['marca'];
        $sabor = $_POST['sabor'];
        $peso = $_POST['peso'];

        $query = "UPDATE salgadinho set marca = '$marca', sabor = '$sabor', peso = '$peso'  WHERE  id = $id";
        mysqli_query($conn, $query);

        $_SESSION['msg'] = 'Salgadinho Atualizado!';
        $_SESSION['msg_type'] = 'primary';
        header("Location: cadastro.php");

    }

?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                    <div class="form-group">
                        <p>Atualize seu salgadinho!</p>
                    </div>
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="marca" value="<?php echo $marca ?>" class="form-control" placeholder="Atualizar Marca">
                    </div>
                    <div class="form-group">
                        <input type="text" name="sabor" value="<?php echo $sabor ?>" class="form-control" placeholder="Atualizar Sabor">
                    </div>
                    <div class="form-group">
                        <input type="text" name="peso" value="<?php echo $peso ?>" class="form-control" placeholder="Atualizar Peso">
                    </div>
                    <button class="btn btn-success" name="update">
                        Atualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>
