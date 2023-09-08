<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
</head>
<body>
    <header>
        <h1>Sistema</h1>
    </header>
    <main>
        <div class="container">
            <?= form_open('auth/login', ['id'=>'form_login']); ?>
                <div class="form_input_group">
                    <label for="user">Usuario</label>
                    <input type="text" name="user" id="user" placeholder="usuario">
                </div>
                <div class="form_input_group">
                    <label for="passwd">Contraseña</label>
                    <input type="password" name="passwd" id="passwd" placeholder="contraseña">
                </div>
                <button type="submit">Iniciar sesión</button>
            <?= form_close(); ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>