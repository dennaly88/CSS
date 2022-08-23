<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="img/FAVicon.ico"> 
<head>
    <title>
Inventario Logistica    
</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        @import "https://fonts.googleapis.com/css?family=Ubuntu:400,700italic";
        @import "https://fonts.googleapis.com/css?family=Cabin:400";
        * {
            box-sizing: border-box;
        }
        
        html {
            background: #000;
            font-size: 10px;
            height: 100%;
            overflow: hidden;
            position: absolute;
            text-align: center;
            width: 100%;A
        }
        
        #logo {
            animation: logo-entry 4s ease-in;
            width: 500px;
            position: relative;
            z-index: 40;
            margin: 0 auto;
        }
        
        h1 {
            animation: text-glow 2s ease-out infinite alternate;
            position: absolute;
            font-size: 48px;
            color: #00a4a2;
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            text-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 30px #000, 0 0 40px #000, 0 0 50px #000, 0 0 60px #000, 0 0 70px #000;
            top: 0;
            margin-top: -80px;
            text-align: center;
            margin-left: 30px;
            margin-bottom: 40px;
        }
        
        h1:before {
            animation: before-glow 2s ease-out infinite alternate;
            border-left: 535px solid transparent;
            border-bottom: 10px solid #00a4a2;
            height: 0;
            width: 0;
            top: -11px;
            left: -79px;
            position: absolute;
            content: '';
        }
        
        h1:after {
            animation: after-glow 2s ease-out infinite alternate;
            border-left: 100px solid transparent;
            border-top: 16px solid #00a4a2;
            height: 0;
            width: 0;
            top: 24px;
            right: -80px;
            position: absolute;
            content: '';
            transform: rotate(-49deg);
        }
        
        #fade-box {
            animation: input-entry 3s ease-in-out;
            z-index: 4;
        }
        
        .stark-login form {
            animation: form-entry 3s ease-in-out;
            background: #111;
            background: linear-gradient(#004746, #111111);
            border: 6px solid #00fffd;
            box-shadow: 0 0 15px #00fffd;
            border-radius: 5px;
            height: 220px;
            width: 500px;
            margin: 20px auto 0;
            position: relative;
            z-index: 4;
            transition: 1s all;
            margin-top: 180px;
        }
        
        .stark-login form:hover {
            border: 6px solid #00fffd;
            box-shadow: 0 0 15px #00fffd;
            transition: 1s all;
        }
        
        .stark-login input {
            background: #222;
            background: linear-gradient(#333333, #222222);
            border: 1px solid #444;
            border-radius: 5px;
            box-shadow: 0 2px 0 #000 0;
            color: #888;
            display: block;
            font-family: 'Cabin', Arial, Helvetica, sans-serif;
            height: 40px;
            width: 400px;
            font-size: 14px;
            margin: 20px auto 10px;
            padding: 0 10px;
            text-shadow: 0 -1px 0 #000;
            text-align: center;
        }
        
        .stark-login input:hover {
            border-bottom: 10px solid #00fffc;
        }
        
        .stark-login input:focus {
            animation: box-glow ease-out infinite alternate;
            background: #0b4252;
            background: linear-gradient(#333933, #222922);
            background-color: #00fffc;
            box-shadow: 0 0 5px rgba(0, 255, 253, 0.2, ) inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 #000;
            color: #efe;
            outline: none;
        }
        
        .stark-login input:invalid {
            border: 2px solid red;
            box-shadow: 0 0 5px rgba(0, 255, 253, 0.2, ) inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 #000;
        }
        
        .stark-login button {
            animation: inout-entry 3s ease-in;
            background: #222;
            background: linear-gradient(#333933, #222922);
            box-sizing: content-box;
            border: 1px solid #444;
            border-left-color: #000;
            border-radius: 5px;
            box-shadow: 0 2px 0 #000;
            display: block;
            font-family: 'Cabin', Arial, Helvetica, sans-serif;
            color: #fff;
            font-size: 13px;
            height: 40px;
            width: 400px;
            font-weight: 400;
            line-height: 40px;
            margin: 20px auto;
            padding: 0;
            position: relative;
            transition: 1s all;
            text-shadow: 0 -1px 0 #000;
        }
        
        .stark-login button:hover,
        .strak-login button:focus {
            background: #0c6125;
            background: linear-gradient(#393939, #292929);
            color: #00fffc;
            outline: none;
            transition: 1s all;
        }
        
        .strak-login button:active {
            background: #229922;
            background: linear-gradient(#339933, #229922);
            box-shadow: 0 1px 0 #000, inset 1px #222;
            top: 1px;
        }
        
        #circle1 {
            animation: circle1 4s linear infinite, circle-entry 6s ease-in-out;
            background: #000;
            border-radius: 50%;
            border: 10px solid #00a4a2;
            box-shadow: 0 0 0 2px black, 0 0 0 6px #00fffc;
            height: 500px;
            width: 500px;
            top: 20px;
            left: 50%;
            position: absolute;
            margin-left: -250px;
            overflow: hidden;
            opacity: 0.4;
            z-index: -3;
        }
        
        #inner-circle1 {
            height: 460px;
            width: 460px;
            margin: 10px;
            border: 42px solid #00fffc;
            background: #000;
            border-radius: 50%;
        }
        
        #inner-circle1:before {
            background: #000;
            content: '';
            width: 240px;
            height: 480px;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        #inner-circle1:after {
            background: #000;
            content: '';
            width: 480px;
            height: 240px;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .hexagons {
            animation: logo-entry 4s ease-in;
            font-size: 52px;
            letter-spacing: -0.1em;
            color: #000;
            position: absolute;
            text-shadow: 0 0 6px #00fffc;
            top: 310px;
            width: 100%;
            line-height: 0.7;
            transform: perspective(600px) rotatex(60deg) scale(1.2) ;
            z-index: -3;
            padding:5px;
        }
        
        @keyframes logo-entry {
            0% {
                opacity: 0;
            }
            80% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @keyframes circle-entry {
            0% {
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            100% {
                opacity: 0.4;
            }
        }
        
        @keyframes input-entry {
            0% {
                opacity: 0;
            }
            90% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @keyframes form-entry {
            0% {
                height: 0;
                width: 0;
                padding: 0;
                opacity: 0;
            }
            20% {
                height: 0;
                width: 0;
                padding: 0;
                border: 1px solid #00a4a2;
                opacity: 0;dpd
            }
            40% {
                height: 220px;
                width: 0;
                padding: 1;
                border: 6px solid #00a4a2;
                opacity: 0;
            }
            100% {
                height: 220px;
                width: 500px;
            }
        }
        
        @keyframes box-glow {
            0% {
                border-color: #00b8b6;
                box-shadow: 0 0 5px rgba(0, 255, 253, 0.2, ) inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 #000;
            }
            100% {
                border-color: #00fffc;
                box-shadow: 0 0 20px rgba(0, 255, 253, 0.6, ) inset 0 0 10px rgba(0, 255, 253, 0.4), 0 2px 0 #000;
            }
        }
        
        @keyframes text-glow {
            0% {
                border-color: #00b8b6;
                box-shadow: 0 0 5px rgba(0, 255, 253, 0.2, ) inset 0 0 5px rgba(0, 255, 253, 0.1), 0 2px 0 #000;
            }
            100% {
                border-color: #00fffc;
                box-shadow: 0 0 20px rgba(0, 255, 253, 0.6, ) inset 0 0 10px rgba(0, 255, 253, 0.4), 0 2px 0 #000;
            }
        }
        
        @keyframes before-glow {
            0% {
                border-bottom: 10px solid #00a4a2;
            }
            100% {
                border-bottom: 10px solid #00fffc;
            }
        }
        
        @keyframes after-glow {
            0% {
                border-top: 16px solid #00a4a2;
            }
            100% {
                border-top: 16px solid #00fffc;
            }
        }
        
        @keyframes circle1 {
            0% {
                transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
            }
        }
        /*key frames glow is not working*/
        
        #username:hover {
            border: 3px solid #00fffc;
            box-shadow: 0 0 15px #00fffd;
        }
        
        #password:hover {
            border: 3px solid #00fffc;
            box-shadow: 0 0 15px #00fffd;
        }
        
        .btn:hover {
            border: 3px solid #00a4a2;
            box-shadow: 0 0 15px #00fffd;
            transform: scale(0.9);
            transition: 0.5s;
        }
        .h4{
        color:white;
        text-align:right;
        margin-bottom:4px;
        }
    </style>
</head>

<body>
<?php
unset($usu);
$usu1=$_GET["usu"];





      if($usu1<8){

       
    } else{

require ("mensajes/error-usuario.php");

 

    }


   
     
?>
<section id="op">


    <div id="logo">
        <h1><i>Inventario Logistica</i><br></h1>
    </div>
    <section class="stark-login">
        <form   method="post"action="sql/validacion.php">
            <div id="fade-box">
                <input type="text" name="usuario" id="usuario" placeholder="USUARIO" required>
                <input type="password" name="pass" id="pass" placeholder="CONTRASEÑA" required>
                <button class="btn">Enviar</button>
                
            </div>
        </form>
        <button onclick="window.location.href='http://192.168.6.22/'">Regresar</button>



        <div class="hexagons">
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <br>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <br>


        </div>
    </section>
    |<div id="circle1">
        <div id="inner-circle1">
            <div class="main-section">
                <h2></h2>
            </div>
        </div>
    </div>
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    </section>
</body>

</html>

</html>