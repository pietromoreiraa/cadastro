<?php include("db.php") ?>
<?php include("includes/header.php") ?>
<?php include("verifica_login.php") ?>

<style>

    .sair{
        position: relative;
        left: 280px;
    }

</style>

<div class="container p-4">

    <div class="row">
        <div class="col-md-8 ">
        <h2 style="font-family: 'Century Gothic'; color: teal">Bem vindo, <?php echo $_SESSION['email']; ?> </h2>
    </div>
    <div class="col-md-4">
        <h3 class="sair btn btn-secondary"><a href="logout.php" style="font-family: 'Century Gothic'; color: white"><b>Sair</b></a></h3>
         </div>
    </div>

</div>

<div class="container p-4">
    <div class="row">

        <div class="col-md-4">

            <?php if(isset($_SESSION['msg'])) { ?>
                <div class="alert alert-<?= $_SESSION['msg_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['msg'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save.php"  method="POST">
                    <div class="form-group">
                        <input type="text" name="marca" class="form-control" placeholder="Marca do Salgadinho" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="sabor" class="form-control" placeholder="Sabor do Salgadinho" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="peso" class="form-control" placeholder="Peso do Salgadinho" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save" value="Adicionar">
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Marca</th>
                    <th>Sabor</th>
                    <th>Gramas</th>
                    <th>Data adquirida</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM salgadinho";
                $result_salgadinhos = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_salgadinhos)) { ?>
                    <tr>
                        <td><?php echo $row['marca'] ?></td>
                        <td><?php echo $row['sabor'] ?></td>
                        <td><?php echo $row['peso'] ?></td>
                        <td><?php echo $row['created_at'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>

                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include("includes/footer.php")?>
