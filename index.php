<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/leitor.js"></script>
    <link rel="stylesheet" href="css/EstiloIury.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'header.php';
        include_once 'vlibras.php';
    ?>
    <div class="container">

        <br><br><br><br><br>
        
        <div class="row g-0">
            <article style="display: flex; align-items: center; gap: 10px;">
                <div>
                    <h2 id="titulo1">Inclusão digital pela interface gráfica</h2>
                    <p id="noticia1">O conteúdo de alguma coisa? Sei lá.</p>
                </div>
                <button type="submit" class="btn-audio" name="acao" onclick="lerNoticia('titulo1', 'noticia1')">
                    <img src="img/som.png" width="28" height="28" alt="">
                </button>
            </article>
        </div>

        <?php
            include_once 'footer.php';
        ?>
    </div>
</body>
</html>