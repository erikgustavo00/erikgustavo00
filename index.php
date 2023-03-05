<?php
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erik</title>
    <!-- meta tags -->
    <!-- Primary Meta Tags -->

    <meta name="title" content="portifolio de Erik Gustavo de Oliveira dos Santos">
    <meta name="description" content="esse e meu portifolio web que eu criei desde o design até o backend">
    <meta name="keywords" content="erik, website,webApp,portifolio,">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Meta Tags — Preview, Edit and Generate">
    <meta property="og:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Meta Tags — Preview, Edit and Generate">
    <meta property="twitter:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
    <!-- meta tags -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- scripts -->
    <script src="js/all.min.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>

</head>

<body>


    <section id="home" class="banner--section main_section">
        <header>
            <div class="container">
                <h1><a href='#home'>Erik</a></h1>
               
                <nav class="desktop">
                
                    <ul>
                        <li><a  class='activated' href='#home'>home</a></li>
                        <li><a  href='#sobre'>sobre</a></li>
                        <li><a  href='#projetos'>projetos</a></li>
                        <li><a  href='#contato'>contato</a></li>
                    </ul>
                </nav>
                <nav class="mobile">
                
                <ul>
                    <li><a  class="activated--mobile" href='#home'><span><i class="fa-solid fa-house"></i></span><span class="font">home</span></a></li>
                    <li><a  href='#sobre'><span><i class="fa-solid fa-address-card"></i></span><span class="font">sobre</span></a></li>
                    <li><a  href='#projetos'><span><i class="fa-solid fa-diagram-project"></i></span><span class="font">projetos</span></a></li>
                    <li><a  href='#contato'><span><i class="fa-solid fa-address-book"></i></span><span class="font">contato</span></a></li>
                </ul>
            </nav>
            </div>
        </header>


        <div class="layer"></div>
        <div class="container">


            <section class='banner--content'>
                <article class="descricao">
                    <div class="titulo--descricao">
                        <h1>olá,<br>meu nome é <span>Erik gustavo</span></h1>
                        <h2>sou um desenvolvedor web</h2>
                    </div>
                    <p>Sou um programador com foco no desenvolvimento web.
                        Sempre em busca de desenvolvimento pessoal e profissional,
                        desafios e novas tecnologias</p>
                    <button><a href="#sobre">Mais sobre mim <div class="circulo"><span></span></div></a></button>
                    <div class="icons">
                        <span class="icon--single"><i class="fa-brands fa-linkedin"></i></span>
                        <span class="icon--single"><i class="fa-brands fa-github"></i></span>
                        <span class="icon--single"><i class="fa-brands fa-instagram"></i></span>
                    </div>

                </article><!--descriçao-->
                <article class="minha_img">
                    <img src="assets/minhaimg_oficial.png" alt="minha imagem">
                </article>

            </section>
            <section class="scrolldown">
                <h3>ScrollDown</h3>
                <div class='mouse--scroll'><i class="fa-solid fa-angles-down"></i></div>
            </section>
        </div>
    </section>

    <section id="sobre" class="sobre_mim main_section">
        <div class="container grid">
            <article class="techs">
                <div style="color:#E34719;" class="techs-icon"><i class="fa-brands fa-html5"></i></div>
                <h3>html</h3>
            </article>
            <article class="techs">
                <div style="color:#17A2DD;" class="techs-icon"><i class="fa-brands fa-css3-alt"></i></div>
                <h3>css</h3>
            </article>
            <article class="techs">
                <div style="color:#FFDE24;" class="techs-icon"><i class="fa-brands fa-square-js"></i></div>
                <h3>javaScript</h3>
            </article>
            <article class="techs">
                <div style="color:#7175AA;" class="techs-icon"><i class="fa-brands fa-php"></i></div>
                <h3>php</h3>
            </article>
            <article class="techs">
                <div style="color:#61DBFB;" class="techs-icon"><i class="fa-brands fa-react"></i></div>
                <h3>reactJs</h3>
            </article>
            <article class="techs">
                <div style="color:#FD0070;" class="techs-icon"><i class="fa-brands fa-sass"></i></div>
                <h3>sass</h3>
            </article>
        </div>
    </section>
    <section id="projetos" class="portfolio main_section">
        <h2>meus projetos mais recentes</h2>
        <div class="container">
            <article class="projeto">
                <div class="projeto--img"><a href="https://loquacious-klepon-a9e4e6.netlify.app/"><img src="./assets/projetosimg/eifzhkkomjdgaxsjicgf.webp" alt="faq accordan img"></a></div>
                <div class="conteudo">
                    <h3><a href="https://loquacious-klepon-a9e4e6.netlify.app/">faq accordian card feito em html, css e javaScript</a></h3>
                    <p>esse desafio do frontend mentor foi bem interessante, pois aprendi a usar esse sistema de faq usando javaScript puro alem do posicionamento da imagem. </p>
                </div>
            </article>
            <article class="projeto">
                <div class="projeto--img"><a href="https://peppy-pavlova-4d3d44.netlify.app/#"><img src="./assets/projetosimg/nc667kw1nr2vrue9a2ae.webp" alt="news homepage" srcset=""></a></div>
                <div class="conteudo">
                    <h3><a href="https://peppy-pavlova-4d3d44.netlify.app/#">news homepage using html,css javaScript pure</a></h3>
                    <p>esse projeto foi um dos mais simples mas pude aprimorar o html e css e o javaScript para criação do menu mobile.
                    <p>
                </div>
            </article>
            <article class="projeto">
                <div class="projeto--img"><a href="https://notification-page-frontend-mentor-tau.vercel.app/#"><img src="./assets/projetosimg/w24pku2lx6ubu13lryqr.webp" alt="notifications page"></a></div>
                <div class="conteudo">
                    <h3><a href="https://notification-page-frontend-mentor-tau.vercel.app/#">notifications page using reactJS and sass</a></h3>
                    <p>esse foi concerteza um dos projetos mais desafiador que ja fiz pois usei ele pra praticar reactjs e sass, mas pude termina-lo e esse foi o resultado.</p>
                </div>
            </article>
        </div>
    </section>

    <section id="contato" class="contato main_section">
        <h2>entre em contato</h2>
        <div class="container">

            <form method="post">
                <input type="text" name="nome" id="name" placeholder='nome*' required>
                <input type="email" name="email" id="email" placeholder="email*" required>
                <textarea name="mensagem" id="mensagem" placeholder="deixe me um recado"></textarea>
                <input type="submit" value="Enviar">
            </form>
        </div>

    </section>
    <footer>
        <div class="container">
            <article class="foot--icons">
                <a style="color:#E34719;"><i class="fa-brands fa-html5"></i></a>
                <a style="color:#17A2DD;"><i class="fa-brands fa-css3-alt"></i></a>
                <a style="color:#FFDE24;"><i class="fa-brands fa-square-js"></i></a>
                <a><i style="color:#7175AA;" class="fa-brands fa-php"></i></a>
                <a><i class="fa-brands fa-figma"></i></a>
                <a><i class="fa-solid fa-code"></i></a>
            </article>
            <article class="direitos">
                <h4>todos os direitos reservados a Erik Gustavo de Oliveira dos Santos</h4>
            </article>
            <article class="social--media">
                <a><i style="color:#275DAD;" class="fa-brands fa-linkedin"></i></a>
                <a><i style="color:black;" class="fa-brands fa-github"></i></a>
                <a><i style="color:#FD0070;" class="fa-brands fa-instagram"></i></a>
                <a><i style="color:#275DAD;" class="fa-brands fa-facebook"></i></a>
                 <div class="email"><a href="erikgustavo00@gmail.com"><i class="fa-solid fa-envelope"></i><span>: erikgustavo00@gmail.com</span></a></div>
            </article>
        </div>
    </footer>



    <script src="js/scroll.js"></script>
    <script src="js/scrollMobile.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>