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
    <link rel="stylesheet" href="css/EstiloJorge.css">
    <title>Computadores Informações</title>
</head>

<body>

    <?php
        include_once 'vlibras.php';
    ?>

    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="img/logoo-ads.png" alt="Logo" width="50"
                            height="50" class="d-inline-block align-text-top"></a>


                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="index.php"><img src="img/logoo-ads.png" alt="Logo" width="50"
                                    height="50" class="d-inline-block align-text-top"></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="paginainclusao.php">Interface Gráfica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="NormasThiago.php">Normas e Padrões</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Computador</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </section>

    <div>" "</div>
    <div class="container my-5">

        <div>
            <h1> Computadores e Inclusão Por Periféricos </h1>
        </div>

        <div class="row">
            <div class="col-3">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">Introdução</a>
                        <a class="nav-link" href="#item-2">Hardware</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1">Processador</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2">Memória RAM</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-3">Armazenamento</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-4">Placa Mãe</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-5">Fonte de Alimentação</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-6">Sistema de Resfriamento</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-7">Placa de Vídeo</a>
                        </nav>
                        <a class="nav-link" href="#item-3">Periféricos</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-3-1">Teclado</a>
                            <a class="nav-link ms-3 my-1" href="#item-3-2">Mouse</a>
                            <a class="nav-link ms-3 my-1" href="#item-3-3">Controle(Video Game)</a>
                            <a class="nav-link ms-3 my-1" href="#item-3-4">Webcam</a>
                            <a class="nav-link ms-3 my-1" href="#item-3-5">Monitor</a>
                        </nav>
                        <a class="nav-link" href="#item-4">Conclusão</a>
                    </nav>
                </nav>
            </div>

            <div class="col-9">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                    class="scrollspy-example-2" tabindex="0">
                    <div id="item-1">
                        <h4 id="t1">Introdução</h4>
                        <p id="p1">Neste guia interativo, você encontrará uma visão completa sobre os principais
                            componentes do
                            computador, com um menu de navegação que permite acessar cada seção rapidamente.
                            Exploraremos o funcionamento do hardware, como o processador, a memória RAM e o
                            armazenamento, além de discutir a importância dos periféricos, que tornam possível a
                            interação com o sistema.

                            Também destacaremos os avanços em tecnologia inclusiva, apresentando dispositivos projetados
                            para tornar o uso do computador acessível a todos. Use o menu ao lado para navegar
                            facilmente entre os tópicos e descobrir como cada parte contribui para o desempenho e a
                            versatilidade dessa ferramenta indispensável.</p>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t1', 'p1')">
                            <img src="img/som.png" width="28" height="28" alt="">
                        </button>
                    </div>
                    <div id="item-2">
                        <h4 id="t2">hardware</h4>
                        <p id="p2">Os componentes de hardware formam a base do funcionamento do computador, trabalhando
                            de
                            maneira integrada para executar tarefas, processar dados e armazenar informações. Cada peça
                            tem uma função específica e desempenha um papel indispensável no desempenho e na eficiência
                            do sistema.</p>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t2', 'p2')">
                            <img src="img/som.png" width="28" height="28" alt="">
                        </button>
                    </div>
                    <div id="item-2-1">
                        <h4 id="t3">Processador</h4>
                        <p id="p3">A unidade central de processamento (CPU), frequentemente chamada de "cérebro" do
                            computador,
                            é o principal responsável por executar as instruções dos programas e realizar cálculos
                            complexos. Ele interpreta e processa milhões de comandos por segundo, sendo crucial para o
                            desempenho do sistema. Processadores modernos possuem múltiplos núcleos, permitindo a
                            execução simultânea de diversas tarefas (paralelismo), e tecnologias como hyper-threading,
                            que otimizam ainda mais o desempenho em aplicações exigentes, como edição de vídeo e jogos.
                        </p>
                        <div class="col">
                            <div class="card">
                                <img src="img/Processador.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Processador</b></h5>
                                    <p class="card-text">
                                        Exemplo de Processador
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t3', 'p3')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-2-2">
                        <h4 id="t4">Memória RAM</h4>
                        <p id="p4">A unidade central de processamento (CPU), frequentemente chamada de "cérebro" do
                            computador,
                            é o principal responsável por executar as instruções dos programas e realizar cálculos
                            complexos. Ele interpreta e processa milhões de comandos por segundo, sendo crucial para o
                            desempenho do sistema. Processadores modernos possuem múltiplos núcleos, permitindo a
                            execução simultânea de diversas tarefas (paralelismo), e tecnologias como hyper-threading,
                            que otimizam ainda mais o desempenho em aplicações exigentes, como edição de vídeo e jogos.
                        </p>
                        <div class="col">
                            <div class="card">
                                <img src="img/RAMs.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Memória Ram</b></h5>
                                    <p class="card-text">
                                        Exemplo de Memória Ram
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t4', 'p4')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-2-3">
                        <h4 id="t5">Armazenamento</h4>
                        <p id="p5">O armazenamento do computador é garantido por dispositivos como o disco rígido (HD)
                            ou a
                            unidade de estado sólido (SSD). O HD oferece maior capacidade a um custo reduzido, mas é
                            mais lento. Já o SSD, mais moderno, é muito mais rápido, proporcionando inicializações e
                            carregamentos quase instantâneos. Além disso, o NVMe SSD, uma tecnologia mais avançada,
                            oferece velocidades de leitura e gravação ainda maiores. Muitos sistemas combinam HD e SSD
                            para equilibrar custo, desempenho e capacidade.
                        </p>
                        <div class="col">
                            <div class="card">
                                <img src="img/hd.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Armazenamento</b></h5>
                                    <p class="card-text">
                                        Exemplo de Armazenamento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t5', 'p5')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-2-4">
                        <h4 id="t6">Placa Mãe</h4>
                        <p id="p6">A placa-mãe é o coração do computador, responsável por conectar e interligar todos os
                            componentes de hardware, como processador, RAM, armazenamento e periféricos. Ela também
                            abriga o chipset, que gerencia a comunicação entre os componentes e define as capacidades do
                            sistema. As placas-mãe possuem diferentes fatores de forma (como ATX ou Mini-ITX),
                            oferecendo flexibilidade para desktops de tamanhos variados.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/placamae.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Placa Mãe</b></h5>
                                    <p class="card-text">
                                        Exemplo de Placa Mãe
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t6', 'p6')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>


                    <div id="item-2-5">
                        <h4 id="t7">Fonte de Alimentação</h4>
                        <p id="p7">A fonte de alimentação (Power Supply Unit - PSU) converte a energia elétrica da
                            tomada para
                            os níveis adequados exigidos pelos componentes do computador. Fontes modernas oferecem
                            eficiência energética elevada e recursos de proteção contra picos de energia, garantindo um
                            fornecimento estável e seguro.
                        </p>
                        <div class="col">
                            <div class="card">
                                <img src="img/fonte.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Fonte de Alimentação</b></h5>
                                    <p class="card-text">
                                        Exemplo de Fonte de Alimentação
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t7', 'p7')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-2-6">
                        <h4 id="t8">Sistema de Resfriamento</h4>
                        <p id="p8">O sistema de resfriamento é essencial para evitar o superaquecimento dos componentes
                            internos, especialmente em computadores de alto desempenho. Ele pode ser composto por
                            coolers (ventiladores), heatsinks (dissipadores de calor) e até sistemas de resfriamento
                            líquido, que são mais eficientes e silenciosos.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/cooler.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Sistema de Resfriamento</b></h5>
                                    <p class="card-text">
                                        Exemplo de Sistema de Resfriamento
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t8', 'p8')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>

                    <div id="item-2-7">
                        <h4 id="t9">Placa de Vídeo</h4>
                        <p id="p9">A placa de vídeo, ou GPU (Graphics Processing Unit), é especializada no processamento de
                            dados gráficos. Em máquinas básicas, esse trabalho pode ser realizado pela GPU integrada ao
                            processador. No entanto, para aplicações que demandam alto desempenho, como jogos, modelagem
                            3D e inteligência artificial, uma GPU dedicada é indispensável. Essas placas possuem memória
                            e processadores próprios otimizados para cálculos paralelos, proporcionando qualidade
                            gráfica e desempenho superiores.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/placavideo.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Placa de Vídeo</b></h5>
                                    <p class="card-text">
                                        Exemplo de Placa de Vídeo
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t9', 'p9')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>

                    <div id="item-3">
                        <h4 id="t10">Periféricos</h4>
                        <p id="p10">Os periféricos são dispositivos indispensáveis para o funcionamento completo do computador,
                            permitindo que o usuário interaja com o sistema e aproveite ao máximo suas funcionalidades.
                            Eles podem ser classificados em periféricos de entrada, saída, armazenamento e híbridos,
                            cada um desempenhando um papel essencial. Além disso, a tecnologia moderna tem proporcionado
                            periféricos inclusivos, projetados para atender às necessidades de pessoas com diferentes
                            habilidades.
                        </p>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t10', 'p10')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-3-1">
                        <h5 id="t11">Teclado</h5>
                        <p id="p11">O teclado é um periférico de entrada essencial para digitação e execução de comandos. Existem
                            modelos tradicionais, ergonômicos e mecânicos, cada um adaptado a diferentes preferências e
                            usos.
                        </p>
                        <div class="col">
                            <div class="card">
                                <img src="img/teclado.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Teclado</b></h5>
                                    <p class="card-text">
                                        Exemplo inclusivo: O teclado em braile permite que pessoas com deficiência
                                        visual interajam com o computador, oferecendo uma interface tátil que traduz
                                        informações para o braile.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t11', 'p11')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-3-2">
                        <h5 id="t12">Mouse</h5>
                        <p id="p12">O mouse é outro periférico de entrada, usado para navegar em interfaces gráficas, selecionar
                            itens e executar comandos com rapidez e precisão. Modelos como mouses ópticos e trackballs
                            atendem a diferentes preferências e espaços de trabalho.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/olho.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Mouse</b></h5>
                                    <p class="card-text">
                                        Exemplo inclusivo: O mouse controlado por movimentos da cabeça ou por comandos
                                        de voz é ideal para usuários com limitações motoras, permitindo que interajam
                                        com o sistema sem o uso das mãos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t12', 'p12')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-3-3">
                        <h5 id="t13">Controle(Video Game)</h5>
                        <p id="p13">Periféricos como joysticks, volantes e outros controladores são usados principalmente em
                            jogos ou simulações, oferecendo uma experiência imersiva.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/Controle.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Mouse</b></h5>
                                    <p class="card-text">
                                        Exemplo inclusivo: Controladores adaptados, que utilizam botões maiores e
                                        configurações personalizadas, permitem que pessoas com mobilidade limitada
                                        também possam desfrutar de jogos e simulações.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t13', 'p13')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-3-4">
                        <h5 id="t14">Webcam</h5>
                        <p id="p14">A webcam é um periférico de entrada que captura imagens e vídeos, sendo amplamente utilizada
                            em videoconferências, criação de conteúdo e chamadas de vídeo.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/rosto.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Webcam</b></h5>
                                    <p class="card-text">
                                        Exemplo inclusivo: Algumas webcams oferecem reconhecimento facial acessível,
                                        permitindo login sem necessidade de teclado ou mouse, ideal para usuários com
                                        mobilidade reduzida.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t14', 'p14')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-3-5">
                        <h5 id="t15">Monitor</h5>
                        <p id="t15">O monitor é o principal periférico de saída, responsável por exibir informações visuais,
                            sejam textos, imagens ou vídeos. Os monitores podem variar em tamanho, resolução e tipo de
                            tela, como LCD, LED ou OLED, atendendo a diferentes necessidades.</p>
                        <div class="col">
                            <div class="card">
                                <img src="img/monitor.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Monitor</b></h5>
                                    <p class="card-text">
                                        Exemplo inclusivo: Monitores com alto contraste ou ampliação de tela ajudam
                                        pessoas com baixa visão, tornando o conteúdo mais acessível.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t15', 'p15')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                    <div id="item-4">
                        <h4 id="c1">Conclusão</h4>
                        <p id="cp1">O computador, composto por seu hardware interno e pelos periféricos externos, é uma
                            ferramenta indispensável na sociedade moderna, permitindo desde tarefas simples até
                            aplicações complexas. Cada componente desempenha um papel essencial para garantir
                            eficiência, desempenho e funcionalidade. Mais do que isso, a tecnologia tem evoluído para
                            promover a inclusão digital, garantindo que todos, independentemente de suas habilidades,
                            possam acessar e utilizar os benefícios oferecidos por esses sistemas.</p>

                        <p id="cp2"> Dispositivos inclusivos, como teclados em braile, mouses adaptados e monitores com
                            ampliação, demonstram que a tecnologia pode e deve ser acessível a todos. Essa abordagem
                            inclusiva não só amplia o impacto positivo dos computadores na vida das pessoas, mas também
                            reforça a importância de criar soluções que atendam às necessidades de uma sociedade
                            diversa.</p>

                        <p id="cp3"> Ao unir desempenho e acessibilidade, o hardware e os periféricos tornam-se verdadeiros
                            aliados na construção de um mundo mais conectado, democrático e inclusivo, onde a tecnologia
                            é uma ponte que conecta pessoas, supera barreiras e transforma vidas.</p>
                            <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('t4', 'p4')">
                            <img src="img/som.png" width="28" height="28" alt="">
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-5 my-5 text-body-secondary border-top">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="nav col-md-3 justify-content-start">
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


                <div class="nav col-md-3 justify-content-end">
                    Feito por Jorge Gabriel .
                </div>
            </div>
        </footer>
    </div>

</body>

</html>