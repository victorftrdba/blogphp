<section class="container" style="padding-top:150px;">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-md-4 bg-light p-4 shadow rounded">
            <form action="valida.php" method="POST">
                <?php if(isset($_GET['loginErro'])) { ?>

                <div class="bg-danger shadow-sm text-white rounded p-4 fw-bold mb-5">
                    Erro nos dados!
                </div>

                <?php } ?>
                <?php if(isset($_GET['logoffSucesso'])) { ?>

                <div class="bg-success shadow-sm text-white rounded p-4 fw-bold mb-5">
                    Deslogou com sucesso!
                </div>

                <?php } ?>
                <div class="mb-3">
                    <label for="user" class="form-label fw-bold">Usuário</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger fw-bold">Submit</button>
            </form>
        </div>
    </div>
</section>