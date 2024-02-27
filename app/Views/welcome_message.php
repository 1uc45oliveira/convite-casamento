<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite de Casamento</title>
    <link rel="stylesheet" href="/casamento/public/assets/css/reset.min.css">
    <link rel="stylesheet" href="/casamento/public/assets/css/default.css">
    <link rel="stylesheet" href="/casamento/public/assets/css/style.css">
</head>
<body>
    <div class="container">

    <header class="header">
        <div class="credit">
        <a style="color: white;" id="ancoraPresenca" href="#">Presença</a> | <a style="color: white;" id="ancoraPresentes" href="#">Presentes</a>  |  <a style="color: white;" id="ancoraLocal" href="#">Local</a>
        </div>
        
    </header>

    <main class="main"></main>

        <div id="modalPresenca" class="modal">
            <div class="modal-content">
                <span class="closePresenca">&times;</span>
                <form method="post" id="formulario">
                    <br>
                    <label for="nome">Nome completo:</label> <br>
                    <input type="text" id="nome" name="nome"><br><br>

                    <button type="button" onclick="confirmarPresenca()">Confirmar</button>
                </form>
            </div>
        </div>

        <div id="modalPresentes" class="modal">
            <div class="modal-content">
                <span class="closePresentes">&times;</span>
                <br><br>
                <img src="/casamento/public/assets/img/img_lista.jpg" width="350">
                <br><br>
                <a href="https://www.finalfeliz.de/sabrina-de-oliveira--gabriel-felipe-bilbao-santana" target="_blank"  style="color: blue;">Link Magalu</a>
                <br><br>
                <a onclick="copiarMensagem()"  style="color: blue;">Chave Pix</a>
            </div>
        </div>

        <div id="modalLocal" class="modal">
            <div class="modal-content">
            <span class="closeLocal">&times;</span>
            <br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d118340.33563524547!2d-47.95334793524744!3d-22.044412086262653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-22.0026024!2d-47.911928599999996!4m5!1s0x94c78b74ee33c6cb%3A0xd382ff2ea62e8bcc!2sch%C3%A1cara%20Recanto%20Bartholomeu!3m2!1d-22.1012986!2d-47.8325659!5e0!3m2!1spt-BR!2sbr!4v1693056626664!5m2!1spt-BR!2sbr" width="350" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <br><br>
            <a href="https://goo.gl/maps/bVHsWZsmkyrMJQQn8" target="_blank"  style="color: blue;">Abrir no Maps</a>
            </div>
        </div>

        <div id="modalObservacoes" class="modal">
            <div class="modal-content">
                <span class="closeObservacoes">&times;</span>
                <br><br>
                <img src=/casamento/public/assets/img/img_obs.jpg width="350">
            </div>
        </div>

    <footer class="footer">
        <address>
            <div class="credit">
                <a style="color: white;" id="ancoraObservacoes" href="#">Informações</a>
            </div>
        </address>
        <script src="/casamento/public/assets/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script> var base_url = '<?= base_url() ?>';</script>
    </footer>
    </div>
    
</body>
</html>