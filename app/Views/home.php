<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="descrição legal da minha página">
    <meta name="author" content="Ana">
    <title>Portifólio Ana Beatriz Juvencio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Responsive meta tag-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <?php include ("components/header.php"); ?>
</head>

<body>
    <div class="container-xxl container-ini">
        <div class="row">
            <div class="col">
                <h1 class="title-cod">
                    &lt;/&gt;
                </h1>
                <h1 class="quadro-1-text">Portifólio</h1>
                <h1 class="title-cod2">
                    &lt;/&gt;
                </h1>
            </div>
            <div class="col">
                <center>
                    <img class="imginicial" src="../../public/images/computer.png">
                </center>
            </div>
        </div>
    </div>
    <div class='container-xxl container-two'>
        <div class='row'>
            <div class="col" style="position: relative">
                <h1><span></span></h1>
                <div class="frase-cont2" style="height: 150px; overflow: hidden;">
                    <p class="segunda-frase" style="text-align: justify"></p>
                </div>
                <a href="link" onclick="adicionarEstilo()" title="Conheça"
                    class="myButton" style="padding: 20px 50px; font-size: 14px; height: auto; text-decoration: none;">
                    <div class="font" style="font-weight: bold; font-family: poppins; text-transform: uppercase;">Sobre mim</div>
                </a>
            </div>
            <div class="col">
                <center>
                    <div class="circle">
                        <img class="me-img" src="../../public/images/anabeatriz1.png">
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="container-xxl container-tree">
        <h1>Habilidades</h1>
        <hr>
        <br>
        <div class="circle-tree">
            <img src='../../public/images/html.png'>
        </div>
    </div>
</body>

<style>
    /*primeiro container*/
    .imginicial {
        width: 100%;
        padding-right: 20px;
        padding-bottom: 70px;
    }

    .container-ini {
        padding-top: 90px;
        background: rgb(81, 40, 51);
        background: linear-gradient(180deg, rgba(81, 40, 51, 1) 57%, rgba(22, 22, 22, 1) 100%);
    }

    .container-ini h1 {
        color: #fff;
        text-transform: uppercase;
        font-family: poppins;
    }

    .quadro-1-text {
        /*padding-top: 20%;*/
        font-size: 70px;
        text-align: center;
    }

    .title-cod {
        padding-top: 20%;
        padding-left: 18%;
    }

    .title-cod2 {
        padding-left: 75%;
    }

    /*segundo container*/
    .container-two {
        background-color: #161616;
        padding: 10% 0 10% 0;
        position: relative;
    }

    .me-img {
        /*z-index: 1; Coloca a imagem na frente do losango */
        position: absolute;
        top: 65%;
        left: 45%;
        transform: translate(-50%, -50%);
        /* Gira a imagem de volta */
        width: 80%;
        height: auto;
        /* Mantém a proporção */
    }

    .container-two h1 {
        text-align: center;
        color: #fff;
        padding-top: 8%;
        margin-left: 30%;
    }

    .container-two h2 {
        color: #fff;
        padding: 3% 10% 0 10%;
        text-align: justify;
    }

    /*.quadrado {
        width: 300px;
        height: 300px;
        background-color: #512833;
        margin-top: 4%;
        position: absolute;
        margin-left: 10%;
        transform: rotate(45deg); /* Rotaciona o quadrado em 45 graus 
        position: relative;
        overflow: hidden;
        margin-right: 15%;
    }*/
    .circle {
        width: 300px;
        height: 300px;
        background-color: red;
        border-radius: 50%;
        /* Define a forma do círculo */
        position: relative;
        overflow: hidden;
        background-color: #512833;
        border-color: #fff;
        border-width: 0px;
        border-style: solid;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        /* Sombra na borda (branca) */
    }

    .container-two span {
        position: relative;
    }

    .container-two span::before {
        content: "";
        color: #fff;
        margin: 0% 0% 0% 0%;
        animation: palavrashome 20s infinite;
    }

    .container-two p {
        color: #fff;
        margin: 0% 0% 0% 10%;
    }

    /*.container-two span::after{
        content: "";
        position: absolute;
        height: 110%;
        border-left: 3px solid #512833;
        right: -10px;
       /* animation: cursor .8s infinite, digita 20s steps(15) infinite;
        width: calc(100% + 15px);
        background-color: #161616;
    }*/
    .container-two.animated span::after {
        content: "";
        position: absolute;
        height: 110%;
        /*border-left: 3px solid #512833;*/
        right: -10px;
        animation: digita 20s steps(15) infinite;
        /*cursor .8s infinite*/
        width: calc(100% + 15px);
        background-color: #161616;
    }

    /*@keyframes cursor {
        /*cria o cursor e faz ele piscar
        0%{
            border-left: 2px solid #161616;
        }
    }*/

    @keyframes palavrashome {

        /*animação para aparecer as palavras*/
        0%,
        100% {
            content: "Hi, Guys!";
        }
    }

    @keyframes digita {

        /*animação para digitar*/
        10%,
        15%,
        30%,
        35%,
        50%,
        55%,
        70%,
        75%,
        90%,
        95% {
            width: 0;
        }

        /*5%, 20%, 25%, 40%, 45%, 60%, 65%, 80%, 85%{
            width: calc(100% + 15px);
        } /*aqui ele volta e apagar, mas eu não quero que apague*/
    }

    @media screen and (max-width: 768px) {
        .myButton {
            /*background-image: linear-gradient(180deg, rgba(81, 40, 51, 1) 57%, rgba(22, 22, 22, 1) 100%);*/
            background-color: #512833;
            -moz-border-radius: 42px;
            -webkit-border-radius: 42px;
            border-radius: 42px;
            display: inline-block;
            cursor: pointer;
            position: absolute;
            color: #fff;/* Define a cor do texto como branco */
        }
    }

    @media screen and (min-width: 768px) {
        .myButton {
            /*background-image: linear-gradient(180deg, rgba(81, 40, 51, 1) 57%, rgba(22, 22, 22, 1) 100%);*/
            background-color: #512833;
            -moz-border-radius: 42px;
            -webkit-border-radius: 42px;
            border-radius: 42px;
            display: inline-block;
            cursor: pointer;
            position: absolute;
            color: #fff;  /* Define a cor do texto como branco */
            margin-left: 50%;
        }
    }


    .myButton:hover::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 42px;
        padding: 4px;
        background: linear-gradient(180deg, rgba(81, 40, 51, 1) 57%, rgba(22, 22, 22, 1) 100%);
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
    }

    .myButton:hover {
        background: #161616;
    }

    .font {
        color: #fff;
    }

    .myButton:hover .font {
        color: transparent;
        /*background-image: linear-gradient(180deg, rgba(81, 40, 51, 1) 57%, rgba(22, 22, 22, 1) 100%);*/
        background-color: #512833;
        background-clip: text;
        -webkit-background-clip: text;
    }

    .frase-cont2{
        margin-left: 20%;
    }
    /*terceiro container*/
    .container-tree{
        background-color: #161616;
    }
    .container-tree h1{
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        font-family: poppins;
        padding: 0px;
        margin: 0px;
    }
    .container-tree hr{
        border-color: #512833;
        border-width: 1px;
        height: 2px;
        border-style: solid;
        width: 10%;
        position: relative;
        left: 45%;
    }
    .container-tree img{
        width: 70%;
        height: auto;
        position: absolute;
        left: 24px;
        top: 20px;
    }
    .circle-tree {
        width: 150px;
        height: 150px;
        background-color: red;
        border-radius: 50%;
        /* Define a forma do círculo */
        position: relative;
        overflow: hidden;
        background-color: #1c1c1c;
        border-color: #fff;
        border-width: 0px;
        border-style: solid;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5); /* Sombra na borda (branca) */  
        margin-left: 15%;
    }
</style>
<script>
    function adicionarEstilo() {
        var button = document.querySelector('.myButton');
        button.classList.add('clicked');
    }
    var animacaoIniciada = false; // Flag para verificar se a animação já foi iniciada

    window.addEventListener('scroll', function () { /*script para acionar a animação do cursor e do digita quando rola a página*/
        /* console.log('Evento de rolagem acionado!'); /*abra o console do navegador*/
        var elemento = document.querySelector('.container-two');
        var distanciaDoTopo = elemento.getBoundingClientRect().top;
        var alturaDaTela = window.innerHeight;

        // Se o topo do elemento estiver visível na tela e a animação ainda não foi iniciada
        if (distanciaDoTopo - alturaDaTela < 0 && !animacaoIniciada) {
            iniciarAnimacao();
            animacaoIniciada = true; // Define a flag como true para indicar que a animação foi iniciada
            var segundaFrase = document.querySelector('.segunda-frase');
            setTimeout(function () {
                digitarTexto(segundaFrase, "Meu nome é Ana Beatriz Juvencio, sou técnica em Desenvolvimento de Sistemas e discente em Ciência da Computação na Universidade Federal de São Carlos. Hoje, estou iniciando a minha carreira com muita humildade para aprender e com foco em engenharia de software.", 50);
            }, 2000); /*add uma espera para começar*/
        }
    });

    function iniciarAnimacao() {
        var elemento = document.querySelector('.container-two');
        elemento.classList.add('animated');
    }

    function digitarTexto(elemento, texto, velocidade) {
        var i = 0;
        var interval = setInterval(function () {
            if (i < texto.length) {
                elemento.textContent += texto.charAt(i);
                i++;
            } else {
                clearInterval(interval);
            }
        }, velocidade);
    }
</script>


</html>