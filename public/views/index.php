<?php include_once 'templates/head.php' ?>

    <section>

        <h1>Tabela de Usuários</h1>

        <div class="content">

            <div>
                <a href="./index.php?a=goToNew">
                    <button class="button btn-new">
                        <i class="fa-solid fa-plus"></i>
                        Novo Usuário
                    </button>
                </a>
            </div>

            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Data Nasc</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
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
                                <?= date('d/m/Y', strtotime($data['birth_date'])) ?>
                            </td>
                            <td>
                                <a href="./index.php?a=editUser&id=<?= $data['id'] ?>">
                                    <button class="button btn-edit">
                                        <i class="fa-solid fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <button class="button btn-delete" onclick="verifyDelete(<?= $data['id'] ?>)">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        
    </section>

<?php include_once 'templates/footer.php' ?>