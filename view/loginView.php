<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/view/css/login.css">
</head>

<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="/view/img/login.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper center">
                                <img src="/view/img/logo_logistica.png" alt="logo" class="">
                            </div>
                            <p class="login-card-description">Iniciar sesión en su cuenta</p>
                            <form method="post" enctype="multipart/form-data" action="/login/procesarLogin">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="***********">
                                </div>
                                {{#error}}
                                <div class="alert alert-danger" role="alert">
                                    Datos invalidos.
                                </div>
                            {{/error}}

                            {{#cuentaActivada}}
                                <div class="alert alert-primary" role="alert">
                                    Tu cuenta se activo correctamente! Ahora puedes entrar.
                                </div>
                            {{/cuentaActivada}}
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Ingresar">
                        </form>
                        <a href="#!" class="forgot-password-link">¿Se te olvidó tu contraseña?</a>
                        <p class="login-card-footer-text">¿No tienes una cuenta? <a href="/registro" class="text-reset">REGISTRARSE AQUÍ</a></p>
                        <a href="/registro/codigo" class="text-reset">ACTIVA TU CUENTA AQUÍ</a>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Condiciones de uso.</a>
                            <a href="#!">Política de privacidad</a>
                        </nav>
                    </div>
                </div>
            </div>  

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>