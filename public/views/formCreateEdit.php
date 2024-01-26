<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <a class="button btn-back" href="index.php">Back</a>

        <form action="index.php" method="POST">

        
            <div class="input-box">
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email" value="<?= isset($user['email']) ? $user['email'] : '' ?>"
                    placeholder="Digite seu e-mail" required>
            </div>

            <div class="input-box">
                <label for="firstName">Nome: </label>
                <input type="text" name="firstName" id="firstName"
                    value="<?= isset($user['firstName']) ? $user['firstName'] : '' ?>" placeholder="Digite seu nome"
                    required>
            </div>

            <div class="input-box">
                <label for="lastName">Sobrenome: </label>
                <input type="text" name="lastName" id="lastName"
                    value="<?= isset($user['lastName']) ? $user['lastName'] : '' ?>" placeholder="Digite seu sobrenome"
                    required>
            </div>

            <div class="input-box">
                <label for="phone">Telefone: </label>
                <input type="text" name="phone" id="phone" value="<?= isset($user['phone']) ? $user['phone'] : '' ?>"
                    placeholder="Digite seu telefone" required>
            </div>


            <div class="input-box">
                <label for="birth_date">Data de Nascimento: </label>
                <input type="date" name="birth_date" id="birth_date"
                    value="<?= isset($user['birth_date']) ? $user['birth_date'] : '' ?>"
                    placeholder="Digite sua data de nascimento" required>
            </div>


            <input type="" name="a" value="<?= isset($user['id']) ? 'updateUser' : 'insertUser' ?>">
            <input type="" name="id" value="<?= isset($user['id']) ? $user['id'] : '' ?>">
            <input class="button btn-search" type="submit" name="submit" value="Submit">

        </form>


    </section>
</body>

</html>