<?php include_once 'templates/head.php' ?>

    <section class="form-user">
        <h1>Formulário do Usuário</h1>

        <form action="index.php" method="POST">

            <div class="input-box">
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required
                    value="<?= isset($user['email']) ? $user['email'] : '' ?>">
            </div>

            <div class="input-box">
                <label for="firstName">Nome: </label>
                <input type="text" name="firstName" id="firstName" placeholder="Digite seu nome" required
                    value="<?= isset($user['firstName']) ? $user['firstName'] : '' ?>">
            </div>

            <div class="input-box">
                <label for="lastName">Sobrenome: </label>
                <input type="text" name="lastName" id="lastName" placeholder="Digite seu sobrenome" required
                    value="<?= isset($user['lastName']) ? $user['lastName'] : '' ?>">
            </div>

            <div class="input-box">
                <label for="phone">Telefone: </label>
                <input type="tel" name="phone" id="phone" placeholder="(DD) _____-____" maxlength="15" required
                    value="<?= isset($user['phone']) ? $user['phone'] : '' ?>">
            </div>

            <div class="input-box">
                <label for="birth_date">Data de Nascimento: </label>
                <input type="date" name="birth_date" id="birth_date" min="1950-01-01" max="<?= date('Y-m-d') ?>"
                    placeholder="Digite sua data de nascimento" required
                    value="<?= isset($user['birth_date']) ? $user['birth_date'] : '' ?>">
            </div>

            <input type="hidden" name="a" value="<?= isset($user['id']) ? 'updateUser' : 'insertUser' ?>">
            <input type="hidden" name="id" value="<?= isset($user['id']) ? $user['id'] : '' ?>">

            <div class="btn-container">
                <input class="button btn-submit" type="submit" name="submit"
                    value="<?= isset($user['id']) ? 'Editar' : 'Salvar' ?>" />
                <a class="button btn-cancel" href="./index.php">
                    Cancelar
                </a>
            </div>

        </form>

    </section>

<?php include_once 'templates/footer.php' ?>