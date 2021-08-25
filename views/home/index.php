<div class="container mb-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <p class="mb-0 fw-bold">Bem-vindo <?php print_r($_SESSION['user']) ?></p>
            <?php if(isset($_GET['sucesso'])) { ?>

            <div class="bg-info shadow-sm text-white rounded p-4 fw-bold mb-5">
                Dados enviados com sucesso
            </div>

            <?php } ?>
            <?php if(isset($_GET['loginSucesso'])) { ?>

            <div class="bg-info shadow-sm text-white rounded p-4 fw-bold mb-5">
                Bem-vindo! <?php $_SESSION['user'] ?>
            </div>

            <?php } ?>
            <?php if(isset($_GET['jaLogado'])) { ?>

            <div class="bg-danger shadow-sm text-white rounded p-4 fw-bold mb-5">
                Você já está logado!
            </div>

            <?php } ?>
            <?php if(isset($_GET['excluir'])) { ?>
            <div class="bg-success shadow-sm text-white rounded p-4 fw-bold mb-5">
                Excluído com sucesso
            </div>

            <?php } ?>
            <?php if(isset($_GET['alterado'])) { ?>

            <div class="bg-warning shadow-sm text-white rounded p-4 fw-bold mb-5">
                Alterado com sucesso
            </div>

            <?php } ?>
            <?php if(isset($_GET['erro'])) { ?>

            <div class="bg-danger shadow-sm text-white rounded p-4 fw-bold mb-5">
                Algum erro foi encontrado - Revise os dados!
                <a href="../layout/app.php">Voltar</a>
            </div>
            <?= exit() ?>
            <?php } ?>
            <a href="../login/logout.php">Sair</a>
            <table class="table shadow">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Corpo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($show as $s) { ?>
                    <?php if($s->status === "Ativo") { ?>
                    <tr>
                        <th scope="row"><?php echo $s->id; ?></th>
                        <td><?php echo $s->title; ?></td>
                        <td><?php echo $s->body; ?></td>
                        <td><?php echo $s->status; ?></td>
                        <td>
                            <div class="d-flex flex-column p-2 justify-content-center align-items-center">
                                <form action="editar.php?id=<?php echo $s->id ?>" method="post">
                                    <button class="btn btn-primary mb-3" value="Alterar" type="submit">Alterar</button>
                                </form>
                                <form action="excluir.php?id=<?php echo $s->id ?>" method="post">
                                    <button class="btn btn-danger" value="Excluir" type="submit">Excluir</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Inserir novos dados
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Formulário de inserção de dados</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="../layout/valida.php" method="POST"
                                class="d-flex flex-column justify-content-center p-5">
                                <label for="title" class="p-3"> Título
                                    <input type="text" name="title" class="input-group" />
                                </label>
                                <label for="body" class="p-3"> Corpo
                                    <textarea type="text" name="body" class="input-group"></textarea>
                                </label>
                                <label for="status" class="p-3"> Status
                                    <select name="status">
                                        <option name="status">Ativo</option>
                                        <option name="status">Inativo</option>
                                    </select>
                                </label>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>