<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 8vh;
            background-color: #35b8b0;
        }

        .logo {
            color: #444;
            text-transform: uppercase;
            font-size: 20px;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            justify-content: space-around;
            width: 30%;
        }

        .nav-links li {
            list-style: none;
        }

        .nav-links a {
            color: #444;
            text-decoration: none;
            letter-spacing: 2px;
            font-size: 17px;
            font-weight: bold;
            padding: 13px 13px;
            border-radius: 3px;
            text-transform: uppercase;
        }

        .burger {
            display: none;
            cursor: pointer;
        }

        .burger div {
            width: 25px;
            height: 2px;
            background-color: #444;
            margin: 5px;
        }

        @media screen and (max-width: 1024px) {
            .nav-links {
                width: 50%;
            }
        }

        @media screen and (max-width: 768px) {
            body {
                overflow-x: hidden;
            }

            .nav-links {
                position: absolute;
                right: 0px;
                height: 50vh;
                top: 8vh;
                background-color: #35b8b0;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 40%;
                transform: translateX(100%);
                transition: transform 0.5s ease-in;
            }

            .nav-links li {
                opacity: 0;
            }

            .burger {
                display: block;
            }
        }

        .nav-active {
            transform: translateX(0%);
        }

        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);

            }

            to {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        .toogle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .toogle .line2 {
            opacity: 0;
        }

        .toogle .line3 {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        section div:first-child {
            background-color: rgb(13, 90, 169);

            width: 100%;
            height: 190px;
            position: relative;

        }

        section div:last-child {
            background-color: rgb(161, 142, 114);
            width: 220px;
            height: 250px;
            position: relative;
            margin-top: -230px;
            margin-left: 120px;
            border-radius: 10px;

        }

        .titulo {
            margin-left: 380px;
            margin-top: 100px;

            color: white;
        }

        #bt {
            margin-left: 10px;
            color: white;
            cursor: pointer;

        }

        #lista {
            display: none;
        }

        ol>li {

            padding: 5px;
            /* Espaçamento em volta do conteúdo */
            list-style: none;
            color: white;


        }
    </style>

</head>

<body>
    <?php require_once(dirname(__FILE__) . '/../componentes/nav.php'); ?>
    <br>
    <br>
    <br>
    <section>

        <div>
            <h1 class="titulo"><br><br><strong>#EUSOUELLISAGÊNCIA</strong><br>
                uma agência inovadora que vem a mais de 10 anos <br>
                trabalhando para prosperar empresas na era digital.</h1>
        </div>
        <div>
            <br>
            <p id="bt" onclick="aparecerDados()"><strong>O QUE A ELLIS AGÊNCIA FAZ?</strong></p>

            <ol id='lista'>

                <?php foreach ($data['servicosAtivos'] as $servicos) { ?>
                    <li> <?= $servicos['nome_servico'] ?> </li>
                <?php } ?>


            </ol>
        </div>
    </section>
</body>

<script>
    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');
        const nLinks = document.querySelectorAll('.nav-links li');
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');

            nLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`
                }
            });
        });
        burger.classList.toggle('toggle');
    }
    navSlide();

    function aparecerDados() {
        console.log('s')
        let botao = document.getElementById("lista");
        if (botao.style.display == 'block') {
            console.log('none')
            return botao.style.display = 'none'
        }
        return botao.style.display = 'block'




    }
</script>

</html>