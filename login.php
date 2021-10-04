<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet" />
    <title>ONG APV</title>
</head>

<body>

    <header>
        <div class="center">
            <!--center-->
            <div class="logo">
                <!--logo-->
                <h2>ONG APV</h2>
            </div>
            <div class="menu">
                <!--menu-->
                <a href="./index.html">
                    Home
                </a>
                <a href="./index.html">
                    Quero ajudar
                </a>
                <a href="./index.html">
                    Relatos
                </a>
                <a class="btn-menu" href="./login.php">
                    Login
                </a>
            </div>
            <div class="menu-mobile">
                <!--menu-mobile-->
                <i class="fas fa-bars menu-mobile-icon"></i>
                <div class="menu-items">
                    <!--menu-items-->
                    <a href="#principal">Home</a>
                    <a href="#ajuda">Quero ajudar</a>
                    <a href="#relatar">Relatos</a>
                    <a href="a">Login</a>
                </div>
            </div>
        </div>
    </header>

    <section class="login">
        <div class="container">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartilhe seu email.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="rodape-ong">
            <h3>2021. ONG APV - Apoio às Pessoas em Situação de Vulnerabilidade</h3>
        </div>
        <div class="rodape-grupo">
            <p>Alícia Lopes, Gustavo Henrique Medeiros Bezerra, José Victor de Oliveira dos Santos, Millena Alburquerque de Almeida, Rodrigo Tarcis Bueno Elias</p>
            <p class="etec">ETEC de Guarulhos - Desenvolvimento de Sistemas</p>
        </div>
    </footer>
</body>

</html>