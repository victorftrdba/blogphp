<?php
include_once '../../database/Configs.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>

    <form action="../layout/valida-editar.php" method="POST" class="d-flex flex-column justify-content-center p-5">
        <label for="title" class="p-3"> ID
            <input type="text" name="id" value="<?php echo $_GET['id'] ?>" readonly='readonly' class="input-group" />
        </label>
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
        <input type="submit" class="btn btn-primary" />
        <a href="../layout/app.php">Voltar</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>