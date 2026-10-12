<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" href="{{ asset('images/logoIF.png') }}">
    @vite('resources/css/login.css')
    <title>Login</title>
</head>
<body>
    <div class="containerLogo">
        <img src="{{ asset('images/logoIF.png') }}" alt="IF logo" height="100px">
        <h1>Sistema de levantamento patrimonial</h1>
    </div>
    <form action="" method="" class="formLogin">
        <h2 class="formLoginTitle">Login de usuário</h2>
        <div class="inputsLabelUni">
            <div class="inputLabelUni">
                <label for="inputUserName">Nome:</label>
                <input type="text" name="name" id="inputUserName" placeholder="Nome de usuário...">
            </div>
            <div class="inputLabelUni">
                <label for="inputPassword">Senha:</label>
                <div class="containerPasswordButton">
                    <input type="password" name="password" id="inputPassword" placeholder="Senha do usuário...">
                    <button type="button" id="eyeButtonPassword"><i class="fa-solid fa-eye fa-xl" id="eyeIconPassword"></i></button>
                </div>
            </div>
        </div>
        <div class="inputsSubmitReset">
            <input type="submit" value="Acessar">
            <input type="reset" value="Apagar">
        </div>
    </form>
    @vite('resources/js/login.js')
</body>
</html>