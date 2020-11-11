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
            <div id="welcome" class="post">
            </div>
                <div class="title">
                    <a href="#"><h2>Астрал</h2></a>
                </div>
                    <p>
                        <img src="img/astral.jpg" style="float:left" class="image">
                        Ти потрапив в аварію, і твоє тіло знаходится в комі, 
                        а душа зараз в астралі, там, де немає місця для живих!
                        В тебе є 80 хв, щоб повернутися назад до тіла в реальному
                        світі або ти підеш у темряву! Ти хочеш жити? Прийшов час довести це!
                    </p>
                <div class="title">
                    <br>
                    <a href="#"><h2>Гра на виживання </h2></a>
                </div>
                    <p>
                        <img src="img/saw.jpg" style="float:left" class="image">
                        Повна темрява, один ліхтарик на всіх. З кожної кімнати вам потрібно знайти вихід
                         і при цьому ВИЖИТИ. Скільки часу ви там пробудете і чи вийдете - залежить тільки від ВАС!
                        Кімнати страху "Insomnia" - це новий атракціон, реалістичне шоу, в якому ви стаєте 
                        головними учасниками фільму жахів в реальності.
                        Ви - головні герої ... проте чи зможете ви вибратися з підземелля?
                        Це не квест ... це реаліті, яке приготувало вам місію на виживання.
                    </p>
                <div class="title">
                    <br>
                    <a href="#"><h2>Оверлук</h2></a>
                </div>
                    <p>
                        <img src="img/shining.jpg" style="float:left" class="image">
                        Ви - головні герої ... проте чи зможете ви вибратися з підземелля готелю Оверлук?
                        Ваше головне завдання - пройти кімнати в повній темряві, тримаючи один ліхтарик на всіх. 
                        Це не квест ... це реаліті, яке приготувало вам місію на виживання.
                        Екстремальне Шоу - це новий формат шоу з новими видами тортур, мук і психологічним тиском, 
                        який стане справжнім випробуванням.
                        Так близько до своїх фобіями Ви зустрічалися ніколи!
                        Тільки для осіб зі стійкою психікою і міцними нервами!
                    </p>
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

