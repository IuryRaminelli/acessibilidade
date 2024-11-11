<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/EstiloThiago.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Normas e Padrões de Acessibilidade</title>
</head>
<body>
    <?php
        include_once 'vlibras.php';
    ?>
    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar bg-body-tertiary absolute-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="img/logoo-ads.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"></a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="index.php"><img src="img/logoo-ads.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Interface Gráfica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Normas e Padrões</a>
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

    <div class="container my-5">
        
        <div>
            <h1> Normas e padrões de acessibilidade</h1>
        </div>

        <button onclick="lerTexto()" style="position: fixed; bottom: 10px; right: 10px; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px;">Ouvir Conteúdo</button>

        <div class="row">
            <div class="col-3">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link" href="#item-1">1 - Acessibilidade</a>
                        <a class="nav-link" href="#item-2">2 - Tipos de Acessibilidade</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-2-1">2.1 - Atitudinal</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-2">2.2 - Arquitetônica</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-3">2.3 - Metodológica</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-4">2.4 - Programática</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-5">2.5 - Instrumental</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-6">2.6 - Transporte</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-7">2.7 - Comunicações</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-8">2.8 - Digital</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-9">2.9 - Natural</a>
                            <a class="nav-link ms-3 my-1" href="#item-2-10">2.10 - Exemplos de Acessibilidade</a>
                        </nav>
                        <a class="nav-link" href="#item-3">3 - Normas Internacionais de Acessibilidade</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-3-1">3.1 - Lei nº 10.436</a>
                            <a class="nav-link ms-3 my-1" href="#item-3-2">3.2 - Lei nº 10.098</a>
                            <a class="nav-link ms-3 my-1" href="#item-3-3">3.3 - Lei Brasileira de Inclusão da Pessoa com Deficiência (LBI)</a>
                        </nav>
                        <a class="nav-link" href="#item-4">4 - WCAG (Diretrizes de Acessibilidade para Conteúdo Web)</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-4-1">4.1 - Estrutura</a>
                            <a class="nav-link ms-3 my-1" href="#item-4-2">4.2 - Níveis de Conformidade</a>
                            <a class="nav-link ms-3 my-1" href="#item-4-3">4.3 - Evolução</a>
                        </nav>
                        <a class="nav-link" href="#item-5">5 - eMAG3 (Modelo de Acessibilidade em Governo Eletrônico, versão 3)</a>
                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ms-3 my-1" href="#item-5-1">5.1 - Aplicação</a>
                            <a class="nav-link ms-3 my-1" href="#item-5-2">5.2 - Objetivos do eMAG3</a>
                            <a class="nav-link ms-3 my-1" href="#item-5-3">5.3 - Principais Características do eMAG3</a>
                            <a class="nav-link ms-3 my-1" href="#item-5-4">5.4 - Ferramentas de Suporte</a>
                        </nav>
                    </nav>
                </nav>
            </div>

            <div class="col-9">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                <div id="item-1">
                    <h4><b>Acessibilidade</b></h4>
                    <p>
                        O termo acessibilidade significa incluir a pessoa com deficiência na 
                        participação de atividades como o uso de produtos, serviços e
                        informações.
                    </p>
                    <p>
                        A acessibilidade envolve o acesso seguro e autônomo ao meio físico, 
                        transporte, informação e comunicação, incluindo tecnologias de 
                        informação.
                    </p>
                    <p>
                        Na internet, acessibilidade refere-se principalmente às recomendações 
                        do WCAG (World Content Accessibility Guide) do W3C e no caso do 
                        Governo Brasileiro ao e-MAG (Modelo de Acessibilidade em 
                        Governo Eletrônico).
                    </p>
                </div>
                <div id="item-2">
                    <h4><b>Tipos de Acessibilidade</b></h4>
                    <p>
                        A acessibilidade abrange diversas áreas que visam garantir que todas as pessoas, independentemente 
                        de suas condições físicas, sensoriais, intelectuais ou emocionais, possam participar plenamente da 
                        sociedade. Cada tipo de acessibilidade é voltado para eliminar um tipo específico de barreira.
                    </p>
                </div>
                <div id="item-2-1">
                    <h5><b>Atitudinal</b></h5>
                    <p>
                        Refere-se a atitudes e comportamentos que promovem a inclusão de pessoas com deficiência, 
                        evitando estigmas e preconceitos. Esse tipo de acessibilidade visa conscientizar a sociedade 
                        sobre o respeito e o acolhimento das diversidades, eliminando barreiras sociais e preconceitos.
                        <br><br>
                        <img src="img/original-9103d5c130d5bdf482e1e7d68dc92e4d-1110x508.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-2">
                    <h5><b>Arquitetônica</b></h5>
                    <p>
                        Envolve adaptações e modificações nos ambientes físicos, como edificações, calçadas e espaços 
                        públicos, para garantir que todas as pessoas, independentemente de limitações físicas, possam 
                        acessá-los. Rampas de acesso, corrimãos, elevadores acessíveis e sinalização em braille são 
                        alguns exemplos.
                        <br><br>
                        <img src="img/60728-1.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-3">
                    <h5><b>Metodológica</b></h5>
                    <p>
                        Refere-se à adaptação de métodos de ensino e técnicas de trabalho para garantir a inclusão. 
                        Na educação, por exemplo, pode incluir o uso de recursos alternativos de avaliação, materiais 
                        didáticos acessíveis e métodos de ensino adaptados para atender a diferentes necessidades.
                        <br><br>
                        <img src="img/images.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-4">
                    <h5><b>Programática</b></h5>
                    <p>
                        Trata-se da inclusão de políticas públicas, leis e normas que assegurem os direitos das pessoas 
                        com deficiência. Ela garante que a acessibilidade seja reconhecida e respeitada nas práticas 
                        governamentais e institucionais, facilitando o acesso a serviços e direitos fundamentais.
                        <br><br>
                        <img src="img/fotos-acessibilidade-201508-2.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-5">
                    <h5><b>Instrumental</b></h5>
                    <p>
                        Relaciona-se a equipamentos, dispositivos e ferramentas que auxiliam pessoas com deficiência a 
                        realizar atividades cotidianas. Exemplos incluem bengalas, cadeiras de rodas, leitores de tela 
                        e aparelhos auditivos. Esses instrumentos são fundamentais para proporcionar autonomia e independência.
                        <br><br>
                        <img src="img/fotos-acessibilidade-201508-9.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-6">
                    <h5><b>Transporte</b></h5>
                    <p>
                        Envolve a adaptação de veículos e sistemas de transporte para pessoas com deficiência ou mobilidade 
                        reduzida. Isso inclui ônibus, metrôs, trens e aviões adaptados com rampas, assentos preferenciais, 
                        elevadores e sinalização adequada, garantindo que possam se deslocar com segurança e autonomia.
                        <br><br>
                        <img src="img/fifae.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-7">
                    <h5><b>Comunicações</b></h5>
                    <p>
                        Foca na adaptação de meios e canais de comunicação para torná-los acessíveis a todos. Exemplos incluem 
                        intérpretes de Libras (Língua Brasileira de Sinais), legendas em vídeos, sistemas de leitura em braille e 
                        comunicação aumentativa e alternativa para aqueles com dificuldades na comunicação oral.
                        <br><br>
                        <img src="img/EW-2024-01-29-BLOG-Acessibilidade-digital-em-sites-de-noticias-_3-1.png" alt="">
                    </p>
                </div>
                <div id="item-2-8">
                    <h5><b>Digital</b></h5>
                    <p>
                        Trata da adaptação de conteúdos e interfaces digitais, como sites, aplicativos e sistemas de computador, 
                        para que sejam acessíveis a todos, incluindo pessoas com deficiência. Isso inclui uso de leitores de 
                        tela, descrições de imagem (alt text), navegação por teclado e outros recursos que seguem as diretrizes 
                        do WCAG (Web Content Accessibility Guidelines).
                        <br><br>
                        <img src="img/tic-web-acessibilidade.png" alt="">
                    </p>
                </div>
                <div id="item-2-9">
                    <h5><b>Natural</b></h5>
                    <p>
                        Relaciona-se à adaptação e ao planejamento de ambientes naturais, como parques, praias e reservas, 
                        para garantir que todos possam usufruir desses espaços. Inclui trilhas acessíveis, rampas de acesso, 
                        guias interpretativas e outros recursos para permitir que pessoas com deficiência ou mobilidade reduzida 
                        explorem e apreciem o ambiente natural.
                        <br><br>
                        <img src="img/16540324246296882883922_1654032424_3x2_md.jpg" alt="">
                    </p>
                </div>
                <div id="item-2-10">
                    <h5><b>Exemplos de Acessibilidade</b></h5>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                            <img src="img/formacao-de-consultores-em-audiodescricao.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Audiodescrição</b></h5>
                                <p class="card-text">
                                    A audiodescrição é uma narração adicional que descreve o conteúdo visual de filmes, espetáculos, 
                                    eventos e exposições para pessoas com deficiência visual.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/livros-digitais-pexels-e1616014122600.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Audiolivros</b></h5>
                                <p class="card-text">
                                    Audiolivros são versões em áudio de livros impressos, que permitem a pessoas com deficiência visual 
                                    ou dificuldades de leitura acessar conteúdos literários e acadêmicos.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/acessibiliadde-villarta.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Elevador</b></h5>
                                <p class="card-text">
                                    Elevadores acessíveis são essenciais para pessoas com mobilidade reduzida, permitindo o acesso a diferentes 
                                    andares de uma edificação de maneira segura.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/legendas-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Legendas closed caption</b></h5>
                                <p class="card-text">
                                    Legendas closed caption (CC) são legendas que transcrevem diálogos e descrevem sons, permitindo que 
                                    pessoas com deficiência auditiva acompanhem produções audiovisuais.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/softwares-gratis-para-deficientes-visuais.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Leitor de tela e ampliador de texto</b></h5>
                                <p class="card-text">
                                    Leitores de tela e ampliadores de texto são tecnologias assistivas que auxiliam pessoas 
                                    com deficiência visual a usar computadores e dispositivos móveis.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/portal-da-prefeitura-ganha-tradutora-virtual-para-acessibilidade-em-li-211220170702.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Libras</b></h5>
                                <p class="card-text">
                                    A Libras é a língua de sinais usada pela comunidade surda no Brasil, 
                                    essencial para comunicação entre pessoas surdas e ouvintes.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/1-marco-linha-braille-blog-1024x536.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Linha Braille</b></h5>
                                <p class="card-text">
                                    Dispositivos de linha Braille permitem que pessoas 
                                    cegas leiam conteúdos digitais convertidos em braille em tempo real.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/images212.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Piso tátil</b></h5>
                                <p class="card-text">
                                    O piso tátil é um sistema de sinalização no chão que ajuda pessoas 
                                    com deficiência visual a se orientarem em espaços públicos.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/BANCO1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Rampas de acesso</b></h5>
                                <p class="card-text">
                                    Rampas são alternativas às escadas, projetadas para permitir 
                                    o acesso de pessoas em cadeiras de rodas, com mobilidade reduzida ou que usam muletas.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="img/vagas-de-estacionamento-para-gestantes-idosos-e-pessoas-com-deficiencia-pcd.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Vagas de estacionamento</b></h5>
                                <p class="card-text">
                                    Vagas de estacionamento reservadas para pessoas com deficiência ou mobilidade reduzida, 
                                    localizadas em áreas mais próximas das entradas e saídas.
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div id="item-3">
                    <h4><b>Normas Internacionais de Acessibilidade</b></h4>
                    <p>
                        As normas internacionais de acessibilidade promovem a inclusão social, 
                        garantindo que ambientes sejam acessíveis a todas as pessoas, incluindo 
                        idosos e aqueles com deficiências temporárias ou permanentes.
                    </p>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item" id="item-3-1">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Lei nº 10.436
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Reconhece a Libras como uma língua no Brasil, sendo um meio legal de
                                    comunicação e expressão.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item" id="item-3-2">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Lei nº 10.098
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Ela é conhecida como a Lei da Acessibilidade. Ela estabelece diretrizes 
                                    e normas para que edificações, transporte, comunicação e outros elementos 
                                    sejam projetados e adaptados de forma a permitir o acesso e a utilização 
                                    por todas as pessoas. Assegurando assim, a autonomia das pessoas com 
                                    deficiência e oportunidade para todas.
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item" id="item-3-3">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Lei Brasileira de Inclusão da Pessoa com Deficiência (LBI)
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>
                                    Uma das leis mais completas sobre acessibilidade no Brasil. A LBI veio 
                                    para completar a Lei nº 10.098. Ela foi inspirada no protocolo da Convenção 
                                    da ONU sobre os Direitos das Pessoas com Deficiência.
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div id="item-4">
                        <h4><b>WCAG (Diretrizes de Acessibilidade para Conteúdo Web)</b></h4>
                        <p>
                            É conjunto de normas desenvolvidas pelo W3C (World Wide Web
                            Consortium) para garantir que o conteúdo da web seja acessível
                            a todas as pessoas, incluindo aquelas com deficiências visuais,
                            auditivas, motoras, cognitivas e outras.
                        </p>

                        <p>
                            O principal objetivo da WCAG é tornar os sites e aplicações web
                            mais acessíveis para pessoas com diferentes necessidades,
                            assegurando que possam perceber, operar, compreender e
                            navegar pelos conteúdos, independentemente de suas
                            limitações.
                        </p>

                        <p>
                            Organizações, governos e empresas utilizam a WCAG
                            para assegurar a conformidade com as leis de
                            acessibilidade em diversos países, como a Lei de
                            Acessibilidade dos Estados Unidos (Section 508), a Lei
                            Brasileira de Inclusão e a Diretiva Europeia de
                            Acessibilidade na Web.
                        </p>
                    </div>
                    <div id="item-4-1">
                        <h4><b>Estrutura</b></h4>
                        <p style="text-align: center;">
                            A WCAG está organizada em quatro princípios fundamentais (POUR)
                        </p>

                        <div class="row justify-content-center">
                            <!-- Card 1 -->
                            <div class="col-md-4">
                                <div class="card border-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><h5 class="card-title"><b>Perceptível</b></h5></div>
                                    <div class="card-body text-primary">
                                        <p class="card-text">
                                            A informação e os
                                            componentes da interface
                                            de usuário devem ser
                                            apresentados de forma que
                                            possam ser percebidos por
                                            todos (ex.: uso de
                                            descrições textuais para
                                            imagens).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-4">
                                <div class="card border-success mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><h5 class="card-title"><b>Compreensível</b></h5></div>
                                    <div class="card-body text-success">
                                        <p class="card-text">
                                            O conteúdo deve ser legível
                                            e previsível, sem causar
                                            confusão (ex.: estrutura
                                            clara e consistente).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <!-- Card 3 -->
                            <div class="col-md-4">
                                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><h5 class="card-title"><b>Operável</b></h5></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">
                                            Os componentes da
                                            interface e navegação
                                            devem ser utilizáveis por
                                            qualquer pessoa (ex.:
                                            suporte para navegação por
                                            teclado).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-md-4">
                                <div class="card border-danger mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><h5 class="card-title"><b>Robusto</b></h5></div>
                                    <div class="card-body text-danger">
                                            
                                        <p class="card-text">
                                            O conteúdo deve ser
                                            robusto o suficiente para
                                            ser interpretado por uma
                                            ampla gama de tecnologias
                                            assistivas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="item-4-2">
                            <h4><b>Níveis de Conformidade</b></h4>
                            <p style="text-align: center;">
                                A WCAG define três níveis de conformidade, 
                                que indicam o grau de acessibilidade de um site.
                            </p>

                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><b>Nível A</b></div>
                                        <p>
                                            O nível mais básico de
                                            acessibilidade, garantindo
                                            que os requisitos mínimos
                                            sejam cumpridos.
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><b>Nível AA</b></div>
                                        <p>
                                            Considerado o nível ideal
                                            para a maioria dos sites, é
                                            um equilíbrio entre
                                            acessibilidade e viabilidade
                                            técnica.
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><b>Nível AAA</b></div>
                                        <p>
                                            O nível mais alto de
                                            acessibilidade, que atende a
                                            uma gama mais ampla de
                                            usuários com diferentes
                                            tipos de deficiências, mas
                                            pode ser mais difícil de
                                            implementar em todas as
                                            situações.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div id="item-4-3">
                            <br><br>
                            <h4><b>Evolução</b></h4>
                            <p style="text-align: center;">
                                A WCAG passou por atualizações, sendo as versões mais importantes
                            </p>

                            <p class="d-flex justify-content-center gap-1">
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">WCAG 2.0</a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">WCAG 2.1</button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Ocultar</button>
                            </p>

                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="card card-body">
                                            <h5><b>WCAG 2.0</b></h5>
                                            <p>
                                                Publicada em 2008, foi a
                                                primeira versão
                                                amplamente adotada e
                                                tornou-se um padrão global.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card card-body">
                                            <h5><b>WCAG 2.1</b></h5>
                                            <p>
                                                Lançada em 2018, trouxe
                                                melhorias, como diretrizes
                                                adicionais para
                                                acessibilidade em
                                                dispositivos móveis,
                                                questões de baixa visão e
                                                deficiência cognitiva.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>

                        <div id="item-5">
                            <h4><b>eMAG3 (Modelo de Acessibilidade em Governo Eletrônico, versão 3)</b></h4>
                            <p>
                                É um conjunto de diretrizes e recomendações adotado pelo
                                governo brasileiro com o objetivo de garantir a acessibilidade
                                digital em sites e portais governamentais.
                            </p>

                            <p>
                                Ele visa assegurar que os serviços públicos disponíveis na
                                internet sejam acessíveis a todas as pessoas, especialmente
                                aquelas com deficiências, promovendo a inclusão digital de
                                acordo com as melhores práticas e legislações de
                                acessibilidade.
                            </p>

                            <p>
                                O eMAG3 está alinhado com as diretrizes internacionais de
                                acessibilidade, como as WCAG 2.0/2.1 (Web Content Accessibility
                                Guidelines), e se baseia no POUR.
                            </p>

                            <p>
                                O eMAG3 reforça o compromisso do Brasil com a inclusão
                                digital, garantindo que os serviços online sejam acessíveis a
                                todos, promovendo a cidadania digital e o acesso equitativo aos
                                serviços públicos.
                            </p>
                        </div>

                        <div id="item-5-1">
                            <h4><b>Aplicação</b></h4>
                            <p>
                                O eMAG3 é obrigatório para
                                órgãos públicos federais,
                                sendo recomendável
                                também para estados,
                                municípios e empresas que
                                prestam serviços ao governo.
                            </p>
                            <p>
                                Ele oferece orientações
                                práticas para garantir que os
                                sites públicos sigam os
                                padrões de acessibilidade,
                                cobrindo aspectos como
                                design, código HTML,
                                usabilidade e compatibilidade
                                com tecnologias assistivas.
                            </p>
                        </div>

                        <div id="item-5-2">
                            <h4><b>Objetivos do eMAG3</b></h4>
                            <p style="text-align: center;">
                                O eMAG3 busca garantir que todos os usuários, independentemente de suas
                                limitações físicas, sensoriais ou cognitivas, possam:
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item"><p>Navegar com facilidade em sites governamentais.</p></li>
                                <li class="list-group-item"><p>Acessar informações e serviços oferecidos online.</p></li>
                                <li class="list-group-item"><p>Utilizar tecnologias assistivas (como leitores de tela) para interagir com o conteúdo digital.</p></li>
                            </ul>
                        </div>
                        <br><br>
                        <div id="item-5-3">
                            <h4><b>Principais Características do eMAG3</b></h4>
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <b>Conformidade</b>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <p>
                                                O eMAG3 segue as
                                                diretrizes da WCAG 2.1
                                                (Web Content Accessibility
                                                Guidelines), o que significa
                                                que adota padrões globais
                                                de acessibilidade.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            <b>Aplicação em Órgãos Públicos</b>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Todos os sites e portais
                                                mantidos por órgãos da
                                                administração pública
                                                brasileira devem seguir as
                                                diretrizes do eMAG3.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            <b>Princípios Básicos</b>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                O eMAG3 orienta que os
                                                sites governamentais
                                                devem ser perceptíveis,
                                                operáveis, compreensíveis e
                                                robustos, garantindo que
                                                sejam acessíveis a todos os
                                                tipos de usuários.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                                            <b>Ferramentas e Avaliação</b>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <p>
                                                Para facilitar a adoção
                                                dessas práticas, o eMAG3
                                                disponibiliza uma série de
                                                ferramentas que ajudam a
                                                avaliar e corrigir problemas
                                                de acessibilidade nos sites
                                                governamentais.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div id="item-5-4">
                            <h4><b>Ferramentas de Suporte</b></h4>
                            <p>
                                Para ajudar na implementação das diretrizes, o eMAG3 oferece uma série de
                                ferramentas que auxiliam no teste e avaliação da acessibilidade de sites
                                governamentais.
                            </p>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><b>Ferramentas de validação automática</b></div>
                                        <p>
                                            Verificam se o site segue as diretrizes de acessibilidade.
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><b>Guias de boas práticas</b></div>
                                        <p>
                                            Para desenvolvedores e
                                            designers, para garantir a
                                            conformidade desde o
                                            planejamento até a execução.
                                        </p>
                                    </div>
                                </li>
                            </ol>
                        </div>

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
                        <img src="img/logoo-ads.png" alt="Logo ADS" width="60" height="60">
                    </a>
                    <a href="https://www.iffarroupilha.edu.br/sao-vicente-do-sul">
                        <img src="img/logo-iffar-svs.png" alt="Logo IFFar" width="60" height="80">
                    </a>
                </div>

                <div class="nav col-md-3 justify-content-end">
                    Desenvolvido por Thiago.
                </div>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script>
        function lerTexto() {
            const texto = document.body.innerText; // Captura o texto do corpo da página
            const utterance = new SpeechSynthesisUtterance(texto); // Cria a fala com o texto
            utterance.lang = 'pt-BR'; // Define o idioma para português
            speechSynthesis.speak(utterance); // Fala o texto
        }
    </script>
</body>
</html>
