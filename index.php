<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureJobs</title>
</head>
<body>
<?php
    $message = '';
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['Name']) && !empty($_GET['Number'])) {
        $name = $_GET['Name'];
        $phone = $_GET['Number'];
    $message = "Поздравляем! <b> $name </b>В скором времени с вами свяжутся наши сотрудники по номеру -  <b>$phone</b>";
}
?>
    <header class="header">
        <ul class="header-list">
            <li><img src="https://kappa.lol/L3K6y" alt="sss"></li>
            <section class="header-mail">
                <h1 class="mail-help">По вопросам и предложениям</h1>
                <li class="pioner">pionerrr@sila.ru</li>
            </section>
            <section class="number">
                <h1 class="number-text">Для консультаций</h1>
                <li class="number-list">+7 (495) 456-24-21
                </li>
            </section>
            <section class="lain"></section>
        </ul>
    </section>
    <nav class="header-nav">
        <ul class="header-nw">
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">Главная</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">О предприятии</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">Новости</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">Продукция</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">Услуги</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">Поддержка</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">География поставок</a>
            </li>
            <li class="header-ss">
                <a href="#!" style="text-decoration: none;" class="header-dd">Контакты</a>
            </li>
        </ul>
    </nav>
    <nav class="pere-nav">
        <ul class="per-nav">
            <li class="pe-nav">
                <a href="#!" style="text-decoration: none;" class="p-nav">ПЕРЕЗВОНИТЕ МНЕ</a>
            </li>
        </ul>
    </nav>
    <section>
        <header class="header-logo">
            <ul class="header-log">
                <li><img src="./img/phone1.png" alt="ddd"></li>
            </ul>
        </header>
    </section>
    </header>
        <section class="header-www">
                <li class="header-ww">Российский завод силовых машин</li>
        </section>
        <section class="header-aaa">
            <li class="header-aa">научно-производственное предприятие, занимающееся разработкой и производством силовых машин.</li>
    </section>
    <header class="header-laga">
        <ul class="header-lag">
            <li><img src="./img/hero-image.png" alt="ss"></li>
        </ul>
    </header>
    <section class="header-eee">
        <li class="header-ee">О предприятии</li>
    </section>
    <section class="header-xxx">
        <li class="header-xx">За 20 лет развития в структуре завода сформирован мощный производственный потенциал, научно-технический центр, испытательная лаборатория, современная база, учебный центр и широкая сеть региональных и международных представительств в Российской Федерации, Республике Беларусь, Узбекистане и Казахстане.</li>
    </section>
    <section class="header-ttt">
        <li class="header-tt">В номенклатуре выпускаемой НПП «ПИОНЕР» продукции найдется все, что необходимо для успешного решения задачи автоматизации технологических процессов на любом предприятии. Все средства измерения производства «ПИОНЕР» внесены в Государственный реестр СИ и имеют необходимые разрешительные документы.</li>
    </section>
    <section class="header-yyy">
        <li class="header-yy">Ежегодно НПП «ПИОНЕР» реализует несколько проектов по модернизации серийных и разработке новых приборов, призванные в наибольшей степени удовлетворять возрастающие требования наших заказчиков.</li>
    </section>
    <header class="header-ggg">
        <ul class="header-gg">
            <li><img src="./img/aurelien-romain-DB_q6rPFnBM-unsplash1.png" alt="qwq"></li>
        </ul>
        <header class="header-uuu">
            <ul class="header-uu">
                <li><img src="./img/carlos-aranda-QMjCzOGeglA-unsplash1.png" alt="asas"></li>
            </ul>
            <section class="header-iii">
                <li class="header-ii">Продукция</li>
            </section>
            <header class="header-asas">
                <ul class="header-fff">
                    <li><img src="./img/bg.png" alt="wewewew"></li>
                </ul>
            </header>
            <header class="header-ghghgh">
                <ul class="header-rfrf">
                    <li><img src="./img/06c66ef48d3d590545623cb6625417611.png" alt="haha"></li>
                </ul>
        </header>
        <section>
            <header class="header-zzz">
                <li class="header-zz">Сигнализатор уровня</li>
            </header>
        </section>
        <section>
            <header class="header-dfdf">
                <a href="#!" style="text-decoration: none;" class="header-cv">Подробнее</a>
            </header>
        </section>
        <section>
        <header class="header-jjjj">
            <ul class="header-jaja">
                <li><img src="./img/bg.png" alt="xcxc"></li>
            </ul>
        </section>
        <section>
        <header class="header-dasdasd">
            <ul class="header-ghfd">
                <li><img src="./img/title-aero1.png" alt="fgbfgh"></li>
            </ul>
        <section>
            <header class="header-fghfs">
                <li class="header-vcvcx">Датчики давления</li>
            </section>
        <section >
            <header class="header-ghfgha">
                <a href="#!" style="text-decoration: none;" class="header-dfg">Подробнее</a>
            </header>
        </section>
        <section>
        <header class="header-fgxxc">
            <ul class="header-asasa">
                <li><img src="./img/bg.png" alt="sdfsdf"></li>
        </ul>
        </section>
        <header>
        <header class="header-gbvb">
            <ul class="header-sdeqw">
                <li><img src="./img/kamaz11.png" alt="sdfsssf"></li>
        </ul>
        </header>
        <section>
            <header class="header-ghbvvxx">
                <li class="header-swwwww">ПИД-регуляторы</li>
            </header>
        </section>
        <header>
        <header class="header-vbvbvb">
            <a href="#!" style="text-decoration: none;" class="header-bdb">Подробнее</a>
        </header>
        <section>
        <header class="header-ghghghghf" >
            <ul class="header-asdasdzx"></ul>
                <li><img src="./img/bg.png" alt="sdfsdf"></li>
        </section>
        <section>
            <header class="header-sdfsdsd">
                <li class="header-asdvfee">Калибратор давления</li>
            </header>
        </section>
        <header>
            <header class="header-werrsdaws">
                <a href="#!" style="text-decoration: none;" class="header-dfghytdfe">Подробнее</a>
            </header>
        <section>
            <header class="header-scgsdfe" >
                <ul class="header-wssdwasdw"></ul>
                    <li><img src="./img/turbo1.png" alt="asdcvg"></li>
        </section>
        <section>
            <header class="header-qweqwsss" >
                <ul class="header-dfgergwwwe"></ul>
                    <li><img src="./img/bg.png" alt="qweqaaas"></li>
        </section>
        <section>
            <header class="header-dfgdfgrew" >
                <ul class="header-asdazxddsf"></ul>
                    <li><img src="./img/main-slide-power1.png" alt="sdfsdfw"></li>
        </section>
        <section>
            <header class="header-asdasdwew">
                <li class="header-sfghhjhe">Корректор расхода газа</li>
            </header>
        </section>
        <header>
            <header class="header-fgghjjtrf">
                <a href="#!" style="text-decoration: none;" class="header-dffggvx">Подробнее</a>
        </header>
        <header class="header-qwerwerfff">
            <ul class="header-gfgfrwws"></ul>
            <li><img src="./img/bg.png" alt="asdasdg"></li>
        </header>
        <section>
            <header class="header-vgbfgewd" >
                <ul class="header-ghjjty"></ul>
                    <li><img src="./img/engine1.png" alt="fgvxx"></li>
        </section>
        <section>
            <header class="header-dfgfgfht">
                <li class="header-sddfdsxcf">Манометры</li>
            </header>
        </section>
        <header class="header-tyeedfg">
            <a href="#!" style="text-decoration: none;" class="header-hjk">Подробнее</a>
        </header>
        <header class="header-sdfsdfcvxcv">
            <li class="header-awssd">Представительства</li>
        </header>
        <section>
            <header class="header-ghbcx" >
                <ul class="header-errtwd"></ul>
                    <li><img src="./img/map.png" alt="dfcxcv"></li>
        </section>
        <header class="header-dfgcxvxc">
            <li class="header-asdadwwef">Новости</li>
        </header>
        <header class="header-sdfsdfsdf">
            <ul class="header-sdfeerwer"></ul>
            <li><img src="./img/bg.png" alt="sdfasasd"></li>
        </header>
        <section>
            <header class="header-asdasdd" >
                <ul class="header-gddfeww"></ul>
                    <li><img src="./img/jonas-morgner-F7u5fL11Lt0-unsplash1.png" alt="ssddddf"></li>
        </section>
        <header class="header-dfgdfgdse">
            <li class="header-assadasxd">НПП «ПИОНЕР» подтвердило свои компетенции в области консультирования и изготовления…</li>
        </header>
        <header  class="header-sdfsdfe">
            <a href="#!" style="text-decoration: none;" class="header-qwesdsdf">Читать далее</a>
        </header>
        <header class="header-wewasw">
            <ul class="header-sdwqas"></ul>
            <li><img src="./img/bg.png" alt="sdawwe"></li>
        </header>
        <header class="header-dasfasdas">
            <ul class="header-yyyyy"></ul>
            <li><img src="./img/greg-rosenke-xoxnfVIE7Qw-unsplash1.png" alt="kkkk"></li>
        </header>
        <header class="header-fgdrweqweqesd">
            <li class="header-sdfseqqwasd">Поздравляем коллектив регионального представительства «ПИОНЕР» с праздником!</li>
        </header>
        <header class="header-werwerdddd">
            <a href="#!" style="text-decoration: none;" class="header-wweasdass">Читать далее</a>
        </header>
        <header class="header-bvcbcdff">
            <li class="header-weeqeqsdaw">18.07.2020</li>
        </header>
        <header class="header-asdfsreerw">
            <ul class="header-qwesdasda"></ul>
            <li><img src="./img/bg.png" alt="asdawasdaw"></li>
        </header>
        <header class="header-retertweq">
            <ul class="header-sdfesfw"></ul>
            <li><img src="./img/rafael-juarez-hTUdXgbhd3o-unsplash1.png" alt="fffdf"></li>
        </header>
        <header class="header-dfggggg">
            <li class="header-sdfsdeeee">Перенос сроков проведения запланированных работ в 2020 году</li>
        </header>
        <header class="header-sdfeqweqw">
            <a href="#!" style="text-decoration: none;" class="header-asdasdwsd">Читать далее</a>
        </header>
        <header class="header-asdawsdsx">
            <li class="header-asdawdwadasdw">20.06.2020</li>
        </header>
        <header class="header-aseqweqweasdwe">
            <ul class="header-qweqweqedasdw"></ul>
            <li><img src="./img/bg(7).png" alt="erweqwesad"></li>
        </header>
        <header class="header-qweqweqwesw">
            <ul class="header-sdfwwwweqweqw"></ul>
            <li><img src="./img/Group.png" alt="wasdadssweq"></li>
        </header>
        <header class="header-qwewewewesssdwq">
            <ul class="header-ssdawasdw"></ul>
            <li><img src="./img/logo22222.png" alt="wqqeqewqq"></li>
        </header>
        <section>
        <header class="header-wwessaa">
            <ul class="header-weqsfgh"></ul>
            <li><img src="./img/Group.png" alt="wwsrfwerqweq"></li>
        </header>
        <header class="header-wewssssdaw">
            <ul class="header-lkhfg"></ul>
            <li><img src="./img/Group.png" alt="wessqwegheq"></li>
        </header>
        <header class="header-wwwewsssdaw">
            <ul class="header-weswqqa"></ul>
            <li><img src="./img/Group.png" alt="asasdqwe"></li>
        </header>
        <header class="header-qwwwessdsasdw">
            <ul class="header-weassd"></ul>
            <li><img src="./img/Group.png" alt="qwqwdfgq"></li>
        </header>
        <header class="header-wqeqsswewe">
            <ul class="header-weassd"></ul>
            <li><img src="./img/Group.png" alt="asdasdawdww"></li>
        </header>
    </section>
        <header class="header-sdfsdfsdfeqq">
            <li class="header-erwrweee">Главная</li>
        </header>
        <header class="header-sdeerrrqqqq">
            <li class="header-wewwddsqee">Новости</li>
        </header>
        <section>
        <header class="header-sdgjhjhjhvbc">
            <li class="header-erwrwewwwee">20.07.2020</li>
        </header>
    </section>
    <header class="header-swwweqqhjhvbc">
        <li class="header-erwrssswewwwee">Продукция</li>
    </header>
    <section>
        <header class="header-sdeeerqqqqq">
            <li class="header-weweqqqqqqee">О предприятии</li>
        </header>
    </section>
    <section>
    <header class="header-sdewwwwsq">
        <a href="#!" style="text-decoration: none;" class="header-wasdcvbhtqee">Услуги</li>
    </header>
    <header class="header-sdewqqnnnwsq">
        <a href="#!" style="text-decoration: none;" class="header-wasdcsdsstqee">Поддержка</li>
    </header>
    <header class="header-sdeffffwsq">
        <a href="#!" style="text-decoration: none;" class="header-wasdlllltqee">География поставок</li>
    </header>
    <header class="header-sjjkkwsq">
        <a href="#!" style="text-decoration: none;" class="header-wkewrwerfge">Контакты</li>
    </header>
    <header class="header-sjjdkjgjgq">
        <a href="#!" style="text-decoration: none;" class="header-wkeuuue">Файлы</li>
    </header>
        <header class="header-sjjdkjgjgq">
            <a href="#!" style="text-decoration: none;" class="header-wqffdfdfuuue">Поддержка</li>
        </header>
    <header class="header-sjjdkjgjgq">
        <a href="#!" style="text-decoration: none;" class="header-wqfqqwsdfe">Политика 
            конфеденциальности</li>
    </header>
    <header class="header-sjkkjndfjgq">
        <a href="#!" style="text-decoration: none;" class="header-wqfwwlkjnfue">1994 — 2020 ООО «ПИОНЕР»</li>
    </header>

    <div class="sms">
<?php if (!empty($message)) echo $message; ?>
</div>

    <section>
    <form method="GET" class="forma">
        <p>
            <input class="name13" placeholder="Name" type="text" name ="Name" pattern="[A-Za-z-А-Яа-я]{2,}" required>
        </p>
        <p>
            <input class="number12" placeholder="Number: ***********" type="tel" name = "Number" pattern="[0-9]{9,11}" required>
        </p>
        <div class="button1">
            <button value="Запись" class="button1bg" type="submit">Продолжить</button>
        </div>
    </form>
    </section>

    
    <div class="container">
        
        <div class="slider">
            <div class="slider-line">
                <img src="./img/-UesVaOm-CI.jpg" alt="12waa">
                <img src="./img/Skgv48ZlMcE.jpg" alt="12sdsq">
                <img src="./img/bPN-4AkTbUk.jpg" alt="asdqw2w">
            </div>

        </div>

        <button class="slider-prev">Prev</button>
        <button class="slider-next">Next</button>

        </div>

        <script src="script.js"></script>
    <div>
</body>
</html>
