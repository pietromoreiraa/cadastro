<?php include('db.php') ?>
<?php include('includes/header.php') ?>

<style>

    .minhaClasse{
       margin: 0 auto;
    }

</style>

<div class="container-fluid p-6  col-md-5 ">
    <div class="card card body mt-5 col-md-5 minhaClasse" style="background-color: dodgerblue; color: white; font-family: 'Century Gothic'">

        <form action="login.php" method="POST">
            <div class="form-group" >
                <p style="text-align: center; color: white; font-family: 'Century Gothic'; font-size: 25px">Login</p>
                <div>
                    <label for="email"> E-mail </label>
                </div>

                <div>
                    <input name="email" type="email" class="form-control" placeholder="exemple@mail" autofocus>
                </div>

            </div>
            <div class="form-group">
                <div>
                    <label for="senha"> Senha </label>
                </div>

                <div >
                    <input name="senha" type="password" class="form-control"  placeholder="Digite sua senha!" autofocus>
                </div>

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger btn-block" value="Entrar">
            </div>
        </form>
    </div>
</div>



<?php include('includes/footer.php') ?>

