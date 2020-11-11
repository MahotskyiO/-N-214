<?php
include('send.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Conjuring</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body id="body"> 
    <header>

        <div id="topnav">    
            <ul id="menu">
                <li>
                    <a href="index.php">Головна</a>
                </li>
                <li><a href="aboutUs.php">Про нас</a></li>
                <li><a href="contacts.php">Контакти</a></li>
                <li><input type="image" src="img/sun.jpg" width="33px" id="theme" alt="змінити тему" ></li>
            </ul>

        </div>
        <div class="logo">
            <a href="index.html"><img id="graficlogo" src="img/logo.jpg" alt="Logo"></a>
        </div>
    </header>

    <div id="page">
        <div id="content">
            <div id="welcome" class="post"> </div>
                <p>Контактна особа: Stephen King</p><br/>
                <p>E-mail: the_conjuring@gmail.com</p><br/>
                <p>Адреса: м. Львів, вулиця Жахлива, 13/6</p><br/>
                <p>Номер телефону: 066 - 666 - 13 - 13</p><br/>
                <p>Instagram: @the_conjuring </p><br/><br/>

                <p>Як забронювати кімнату?</p>
                <p>Заповнити форму своїми контактними даними, дочекатись дзвінка менеджера та записатись.</p>
        </div>
        <div id="sidebar">
            <div id="login" class="boxed">
                <div class="title">
                    <h2 id="form_title">Залишити заявку</h2>
                </div>
                <div class="content">
                    <form id="form1" action="" method="POST">
                        <input  type="text" name="surName" placeholder="Прізвище" />
                        <input  type="text" name="name" placeholder="Ім'я" /> <br/>
                        <input id="num" type="text" name="num" placeholder="Номер телефону" /><br/> 
                        
                            <input id="inputsubmit1" type="submit" name="inputsubmit1" value="Відправити"/>   <br/>
                    </form>
                </div>
            </div>
        
        </div>
            
        <script src="script.js"></script>
</body>
</html>