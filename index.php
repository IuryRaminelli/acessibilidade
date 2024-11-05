<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/leitor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/EstiloIury.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'vlibras.php';
    ?>

    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Tema Thiago/Iury</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Tema Samara/Jorge</a></li>
                            <li class="nav-item"><a class="nav-link" href="">Info sobre PC</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <div class="container">

        <br><br><br><br><br>
        
        <div class="row g-0">
            <article style="display: flex; align-items: center; gap: 10px;">
                <div>
                    <h2 id="titulo1">Inclusão digital pela interface gráfica</h2>
                    <p id="noticia1">O conteúdo de alguma coisa? Sei lá.</p>
                </div>
                <br>
                <button type="submit" class="btn-audio" name="acao" onclick="lerNoticia('titulo1', 'noticia1')">
                    <img src="img/som.png" width="28" height="28" alt="">
                </button>
            </article>
            <br>
        </div>
        <a href="teste.php">
            <button type="submit" class="btn" name="mais">
                Ver mais
            </button>
        </a>
        
        <br><br><br><br>

        <div class="row g-0">
            <article style="display: flex; align-items: center; gap: 10px;">
                <div>
                    <h2 id="titulo2">Normas e Padrões Internacionais sobre Acessibilidade</h2>
                    <p id="noticia2">O conteúdo de alguma coisa? Sei lá.</p>
                </div>
                <br>
                <button type="submit" class="btn-audio" name="acao" onclick="lerNoticia('titulo2', 'noticia2')">
                    <img src="img/som.png" width="28" height="28" alt="">
                </button>
            </article>
            <br>
        </div>
        <a href="teste.php">
            <button type="submit" class="btn" name="mais">
                Ver mais
            </button>
        </a>
        
        <br><br><br><br>

        <div class="row g-0">
            <article style="display: flex; align-items: center; gap: 10px;">
                <div>
                    <h2 id="titulo3">Informações sobre computador</h2>
                    <p id="noticia3">O conteúdo de alguma coisa? Sei lá.</p>
                </div>
                <br>
                <button type="submit" class="btn-audio" name="acao" onclick="lerNoticia('titulo3', 'noticia3')">
                    <img src="img/som.png" width="28" height="28" alt="">
                </button>
            </article>
            <br>
        </div>
        <a href="teste.php">
            <button type="submit" class="btn" name="mais">
                Ver mais
            </button>
        </a>

        <br>

        <footer class="pt-5 my-5 text-body-secondary border-top">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-3 text-right">
                Todos os direitos reservados. &copy; 2024
            </div>

            <div class="col-md-3 text-center mx-auto footer-logo">
                <a href="https://sig.iffarroupilha.edu.br/sigaa/public/curso/portal.jsf?id=76320&lc=pt_BR">
                    <img src="img/logoo-ads.png" alt="Logo ADS" width="120" height="120">
                </a>
                <a href="https://www.iffarroupilha.edu.br/sao-vicente-do-sul">
                    <img src="img/logo-iffar-svs.png" alt="Logo IFFar" width="100" height="120">
                </a>
            </div>

            <div class="col-md-3 text-left">
                Feito por Iury Raminelli.
            </div>
        </div>
    </footer>
    </div>
</body>
</html>