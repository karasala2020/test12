<!DOCTYPE html>
<html lang="en">

<?php
require_once "blocks/header.php";
?>
<body>
    <div class="body container">
        <div class="col-xl-8">
            <img src="img\depositphotos_65084631-stock-photo-kids-drawing.jpg" alt="">
        </div>
        <div class="cons col-xl-4">
            <p>Детский сад Мое Солшышко -
это профессиональная помощь родителям
и бережное развитие ребенка!</p>
        <a href="contacts.php"><button type="button">Получить консультацию</button></a>
        </div>
    </div>
    
    <div class="container">
        <div class="About">
            <h1>Почему выбирают нас?</h1>
        </div>
        <div class="top-low">
        <div class="top-body">
        <div class="col-xl-4">
            <img src="img\iconfinder_house_299061.png" width="200px" alt="">
            <p>По-домашнему уютно</p>
        </div>
        <div class="col-xl-4">
            <img src="img\teacher-128.webp" width="200px" alt="">
            <p>Квалифицированные педагоги</p>
        </div>
        <div class="col-xl-4">
            <img src="img\018-slightly-smiling-face-128.webp" width="200px" alt="">
            <p>Развитие эмоционального <br> интеллекта</p>
        </div>
        </div>
        <div class="low-body">
        <div class="col-xl-4">
            <img src="img\Soccer-128.webp" width="200px" alt="">
            <p>Психомоторное развитие детей</p>
        </div>
        <div class="col-xl-4">
            <img src="img\ilustracoes_04-07-128.webp" width="200px" alt="">
            <p>Творческие кружки <br> и спортивные секции</p>
        </div>
        <div class="col-xl-4">
            <img src="img\Know-128.webp" width="200px" alt="">
            <p>Образовательная программа</p>
        </div>
        </div>
        </div>
        <div class="connect">
    <div class="left-img">
        <img src="img\pencil-2841859_1280.jpg " width="500px" alt="">
    </div>
    <div class="msg">
        <form action="">
        <h1>Оставьте заявку тут!</h1>
        <label>Имя</label><br>
        <input type="text" name="name" id="name" placeholder="Введите ваше имя">
        <br>
        <label>Телефон</label><br>  
        <input type="phone" name="phone" id="phone" placeholder="Введите ваш телефон">
        <br>
        <button class="button">Отправить</button>
        </form>
    </div>
    </div>
    </div>

<div class="map container">

<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d47114.731836770574!2d59.619129!3d42.4347429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDI2JzU2LjQiTiA1OcKwMzUnNTcuMCJF!5e0!3m2!1sru!2s!4v1588671902331!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class="adress">
<h3>Адрес:</h3>    
<p>
г. Нукус, ул. Тумар, 15,<br>
Тел.: +99890 727 73 23; 
    </p>
    <ul>
    <li><i class="fab fa-telegram"></i>
        Moe_Solnishko
    </li>
    <li><i class="fab fa-facebook"></i>
    Moe_Solnishko
    </li>
    <li><i class="fab fa-instagram-square"></i>
    Moe_Solnishko</li>
</ul>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
<?php
require_once "blocks/footer.php";
?>
</html>