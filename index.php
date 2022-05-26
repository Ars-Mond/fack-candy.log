<?php
$mysqli = new mysqli("localhost", "mysql", "", "fack");
//echo $mysqli->host_info . "\n";

$result = $mysqli->query("SELECT * FROM products;");


/*echo "<pre>";
foreach ($result as $row) {
    echo " id = " . $row['name'] . "\n";
}
echo "</pre>";*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хреновые конфеты</title>
</head>
<link rel="stylesheet" href="index.css" type="text/css"/>
<link rel="shortcut icon" href="img/logo.png" type="image/png">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&display=swap&subset=cyrillic" rel="stylesheet">
<body>
<header>
    <div class="header-menu">
        <ul>
            <a href="#promo-code"><img src="img/logo.png" alt="logo"></a>
            <li><a href="#about-candy">О конфетах</a></li>
            <li><a href="#our-sugar">Наш сахар</a></li>
            <li><a href="#gallery">Каталог</a></li>
            <li><a href="#pro5">Контакты</a></li>
            <li><a id="cart">Корзина</a></li>
        </ul>
    </div>
    <div class="cart-popup" id="cart-popup">
       <div class="cart-popup--wrapper">
           <div class="cart-popup--header">
               <h2>Корзина</h2>
           </div>
           <div class="cart-popup--list">
               <div class="cart-popup--list-item">
                   <img src="" alt="">
                   <span class="name">Name</span>
                   <span class="price">Price</span>
                   <div class="close"></div>
               </div>
               <div class="cart-popup--list-item">
                   <img src="" alt="">
                   <span class="name">Name2</span>
                   <span class="price">Price2</span>
                   <div class="close"></div>
               </div>
           </div>
           <div class="cart-popup--close"></div>
       </div>
    </div>
</header>
<main>
    <div class="hero-prop anime" id="promo-code">
    <h1 class="block-center">Больше, чем просто конфеты</h1>
    </div>
    <div class="prop prop-1" id="about-candy">
        <h2 class="sidr">О конфентах</h2>
        <p>Наша кондитерская “Хреновые конфеты” названа<br>в честь самого
            продукта, а конкретнее в честь<br>сахара из которого изготовляются наши конфеты.</p>
    </div>
    <div class="prop prop-2" id="our-sugar">
        <h2 class="mm">Наш сахар</h2>
        <p class="nn">Наш сахар представляет собой более сладкую версию обычного,<br> по цвету напоминающий смесь тростникового и обычного сахара.<br> Учитывая его повышенную сладость, его количество может<br> а вместе с этим может быть и понижена калорийность.</p>
    </div>
    <div class="prop prop-4" >
        <h2 id="gallery">Каталог</h2>
        <div class="prop-gallery">

            <?php foreach ($result as  $item): ?>
            <div class="prop-gallery-item">
                <a href="#gallery-item-1">
                    <img src="img/G/120.png">
                    <div class="name-nacls">
                        <b><?php echo $item['name'] ?></b>
                    </div>
                    <div class="info-hidden" id="gallery-item-1">
                        <div class="info-hidden-wrapper">
                            <a class="button-close" href="#gallery"></a>
                            <h2>Состав <?php echo $item['name'] ?></h2>
                            <h3>Состав шоколада:</h3>
                            <p><?php echo $item['component1'] ?></p>
                            <h3>Состав начинки:</h3>
                            <p><?php echo $item['component2'] ?></p>
                            <b><?php echo $item['price'] ?></b>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>

            <div class="prop-gallery-item">
                <a href="#gallery-item-2">
                    <img src="img/G/110.png">
                    <div class="name-nacls">
                        <b>Кремний</b>
                    </div>
                    <div class="info-hidden" id="gallery-item-2">
                        <div class="info-hidden-wrapper">
                            <a class="button-close" href="#gallery"></a>
                            <h2>Состав Кремний</h2>
                            <h3>Состав шоколада:</h3>
                            <p>Какао тертое (содержание какао тертого - не менее 50%), сахар (экстрагированный из хрена), масло какао, натуральный экстракт ванили.</p>
                            <h3>Состав начинки:</h3>
                            <p>Нуга - молоко, сахар, яичный белок и орехи. Может содержать следы арахиса, других орехов и пшеницы, лецитина или следы их переработки.</p>
                            <b>75</b>
                        </div>
                    </div>
                </a>
            </div>

            <div class="prop-gallery-item">
                <a href="#gallery-item-3">
                    <img src="img/G/130.png">
                    <div class="name-nacls">
                        <b>Солёнка</b>
                    </div>
                    <div class="info-hidden" id="gallery-item-3">
                        <div class="info-hidden-wrapper">
                            <a class="button-close" href="#gallery"></a>
                            <h2>Состав Солёнка</h2>
                            <h3>Состав Бисквита:</h3>
                            <p>Мука пшеничная, яйца (яичный желток, яичный белок), сахар (экстрагированный из хрена), масло сливочное 82%.</p>
                            <h3>Состав начинки:</h3>  <!--<h3>Состав СЛАВИКА: Вэйп, Снилс, Vans,</h3>-->
                            <p>Сливки 20%, яичный белок, сахар (экстрагированный из хрена), загуститель (натуральный яблочный пектин), мёд натуральный.</p>
                            <b>75</b>
                        </div>
                    </div>
                </a>
            </div>

            <div class="prop-gallery-item">
                <a href="#gallery-item-4">
                    <img src="img/G/140.png">
                    <div class="name-nacls">
                        <b>Чебника</b>
                    </div>
                    <div class="info-hidden" id="gallery-item-4">
                        <div class="info-hidden-wrapper">
                            <a class="button-close" href="#gallery"></a>
                            <h2>Состав Чебника</h2>
                            <h3>Состав Бисквита:</h3>
                            <p>Мука пшеничная, яйца (яичный желток, яичный белок), сахар (экстрагированный из хрена), масло сливочное 82%.</p>
                            <h3>Состав начинки:</h3>  <!--<h3>Состав СЛАВИКА: Вэйп, Снилс, Vans,</h3>-->
                            <p>Сливки 20%, яичный белок, сахар (экстрагированный из хрена), загуститель (натуральный яблочный пектин), мёд натуральный.</p>
                            <b>75</b>
                        </div>
                    </div>
                </a>
            </div>

            <div class="prop-gallery-item">
                <a href="#gallery-item-5">
                    <img src="img/G/IMG_2668.png">
                    <div class="name-nacls">
                        <b>Белёнка</b>
                    </div>
                    <div class="info-hidden" id="gallery-item-5">
                        <div class="info-hidden-wrapper">
                            <a class="button-close" href="#gallery"></a>
                            <h2>Состав Белёнка</h2>
                            <h3>Состав Бисквита:</h3>
                            <p>Мука пшеничная, яйца (яичный желток, яичный белок), сахар (экстрагированный из хрена), масло сливочное 82%.</p>
                            <h3>Состав начинки:</h3>  <!--<h3>Состав вСЛАВИКА: Вэйп, Снилс, Vans,</h3>-->
                            <p>Сливки 20%, яичный белок, сахар (экстрагированный из хрена), загуститель (натуральный яблочный пектин), мёд натуральный.</p>
                            <b>75</b>
                        </div>
                    </div>
                </a>
            </div>

            <div class="prop-gallery-item">
                <a href="#gallery-item-6">
                    <img src="img/G/5.png">
                    <div class="name-nacls">
                        <b>Бонбон</b>
                    </div>
                    <div class="info-hidden" id="gallery-item-6">
                        <div class="info-hidden-wrapper">
                            <a class="button-close" href="#gallery"></a>
                            <h2>Состав Бонбона</h2>
                            <h3>Состав Бисквита:</h3>
                            <p>Мука пшеничная, яйца (яичный желток, яичный белок), сахар (экстрагированный из хрена), масло сливочное 82%.</p>
                            <h3>Состав начинки:</h3>  <!--<h3>Состав СЛАВИКА: Вэйп, Снилс, Vans,</h3>-->
                            <p>Сливки 20%, яичный белок, сахар (экстрагированный из хрена), загуститель (натуральный яблочный пектин), мёд натуральный.</p>
                            <b>75</b>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="prop prop-3">
        <h2>Промокод</h2>
        <p>Он включает в себя скидку на  пробники наших конфет<br>и мы более подробно раскажем вам о нас.</p>
        <b class="promoCode">ITHUB</b>
    </div>

    <div class="prop prop-5" id="pro5">
        <h2>Наши конфеты</h2>
        <div class="slavic">
            <img src="img/14.svg" width="64px">
        </div>
        <a class="button-number" href="tel:+7-977-256-23-90">+7 (977) 256-23-90</a>
        <a class="button-email" href="mailto:sereda_is18@st.ithub.ru">sereda_is18@st.ithub.ru</a>
        <a class="button-link" href="https://yandex.ru/maps/-/CCvzUE-s">Перейти в Яндекс.Карты</a>
        <div class="web-icon">
            <a href="https://www.instagram.com/ithubmoscow/"><img src="img/7.png"></a>
            <a href="https://vk.com/collegemirbismoscow"><img src="img/13.png"></a>
            <a href="https://www.facebook.com/ithub.ru/"><img src="img/5.png"></a>
        </div>
    </div>
    <script src="main.js"></script>
    <!--<div class="page-wrapper" id="test"></div>-->
</main>
</body>
</html>