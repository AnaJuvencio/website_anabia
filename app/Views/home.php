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
    <?php include("components/header.php"); ?>
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
            <img class="imginicial" src="../../public/images/computer.png" >
            </center>
            </div>
        </div>
    </div>
    <div class='conatiner-xxl container-two'>
        <div class='row'>
            <div class="col">
                <h1>Hi Guys!</h1>
                <h2>
                    Eu sou a Ana Beatriz Juvencio, atualmente curso Cência da Computação na UFSCar. 
                </h2>
            </div>
            <div class="col">
                <center>
                <div class="quadrado">
                <img class="me-img" src="../../public/images/anabeatriz1.png">
                </div>
                </center>
            </div>
        </div>
    </div>
</body>

<style>
    .imginicial{
       width: 100%;
       padding-right: 20px;
       padding-bottom: 70px;
    }
    .container-ini{
        padding-top: 90px;
        background: rgb(81,40,51);
        background: linear-gradient(180deg, rgba(81,40,51,1) 57%, rgba(22,22,22,1) 100%);
    }
   
    .container-ini h1{
        color: #fff;
        text-transform: uppercase;
        font-family: poppins;
    }
    .quadro-1-text{
        /*padding-top: 20%;*/
        font-size: 70px;
        text-align: center;
    }
    .title-cod{
        padding-top: 20%;
        padding-left: 18%;
    }
    .title-cod2{
        padding-left: 75%;
    }

    /*segundo container*/
    .container-two{
        background-color: #161616;
        padding: 10% 0 20% 0;
        position: relative;
    }
    .me-img{
       /*z-index: 1; Coloca a imagem na frente do losango */
        position: absolute;
        top: 65%; 
        left: 50%; 
        transform: translate(-50%, -50%) rotate(-45deg); /* Gira a imagem de volta */
        width: 80%; 
        height: auto; /* Mantém a proporção */
    }
    .container-two h1{
        text-align: center;
        color: #fff;
        padding-top: 10%;
    }
    .container-two h2{
        color: #fff;
        padding: 3% 10% 0 10%;
        text-align: justify;
    }
    .quadrado {
        width: 300px;
        height: 300px;
        background-color: #512833;
        margin-top: 4%;
        position: absolute;
        margin-left: 10%;
        transform: rotate(45deg); /* Rotaciona o quadrado em 45 graus */
        position: relative;
        overflow: hidden;
        margin-right: 15%;
    }
</style>
</html>