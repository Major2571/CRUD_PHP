<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <?php if (!empty($returnMessage)): ?>
        <div class="box-message">
            <p>
                <?= $returnMessage ?>
            </p>
            <button class="btn-close-message" onclick="reload()">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>
    <?php endif; ?>

    <h1>Home</h1>

    <a class="button" href="./index.php?a=goToNew">New client</a>

    <section>
        <div class="content">
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data Nasc</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($result as $data): ?>
                        <tr>
                            <th scope="row">
                                <?= $data['id'] ?>
                            </th>
                            <td>
                                <?= $data['email'] ?>
                            </td>
                            <td>
                                <?= $data['firstName'] ?>
                            </td>
                            <td>
                                <?= $data['lastName'] ?>
                            </td>
                            <td>
                                <?= $data['phone'] ?>
                            </td>
                            <td>
                                <?= $data['birth_date'] ?>
                            </td>
                            <td>
                                <a class="button btn-edit"
                                    href="./index.php?a=editUser&id=<?= $data['id'] ?>">Editar</a>
                                <button class="button btn-delete"
                                    onclick="verifyDelete(<?= $data['id'] ?>)">Deletar</button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

<script>
    function verifyDelete(id) {
        let result = confirm('Você tem certeza que deseja deletar o registro com id: ' + id);
        console.log(result);
        if (result) {
            window.location.replace('./index.php?a=deleteUser&id=' + id);
        }
    }
    function reload() {
        window.location.replace('index.php');
    }
</script>

</html>