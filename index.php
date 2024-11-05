<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/leitor.js"></script>
    <title>Document</title>
    <style>
    .btn-audio {
        background-color: rgb(37, 41, 68);
        color: #fff;
        width: 70px;
        height: 70px;
        font-weight: 600;
        border: none !important;
        border-radius: 50%;
        transition: all linear 160ms;
        cursor: pointer;
        margin: 0 !important;
    }

    .btn-audio:hover {
        transform: scale(1.05);
        background-color: rgb(37, 41, 68);
        color: #fff;
    }

    article {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        border: 1px solid #ddd;
    }
    </style>
</head>
<body>
    <?php
        include_once 'header.php';
        include_once 'vlibras.php';
    ?>
    <div class="container">

        <br><br><br><br>
        
        <div class="row g-0">
            <article style="display: flex; align-items: center; gap: 10px;">
                <div>
                    <h2 id="titulo1">Inclusão digital pela interface gráfica</h2>
                    <p id="noticia1">O time da cidade venceu por 3 a 1 em uma partida emocionante neste fim de semana.</p>
                </div>
                <button type="submit" class="btn-audio" name="acao" onclick="lerNoticia('titulo1', 'noticia1')">
                    <img src="img/som.png" width="28" height="28" alt="">
                </button>
            </article>
        </div>
    </div>
</body>
</html>