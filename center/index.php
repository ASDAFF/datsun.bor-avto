<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("center");
?>

    <div class="header-spacer"></div>


    <div class="content">
        <div class="news-detail">
            <h1>БорАВТО</h1>
            <div class="news-date">
            </div>
            <!-- <div class="news-line"></div> -->
            <div class="news-banner">
                <img src="./images/banner.jpg" class="news-banner-img">
                <div class="news-banner-menu">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/news-banner-menu.php"
                        )
                    );?>

                </div>
            </div>
            <div class="news-cont">
                <p>Официальный дилер Datsun в Борисоглебске.
                </p>

                <p>&nbsp;</p>
                <div class="news-bxslider">
                    <li><a class="news-item-fancy" href="./images/IMG_11.jpg"><img src="./images/IMG_11.jpg" style="width: 335px; height: 188px;" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_12.jpg"><img src="./images/IMG_12.jpg" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_13.jpg"><img src="./images/IMG_13.jpg" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_14.jpg"><img src="./images/IMG_14.jpg" style="width: 335px; height: 188px;" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_16.jpg"><img src="./images/IMG_16.jpg" style="width: 335px; height: 188px;" /></a></li>
                </div>

                <p><b>В нашем Автосалоне Вы можете не только купить новый автомобиль Datsun, клиентам дилерского центра доступен полный спектр сопутствующих услуг:</b>
                </p>

                <ul class="red-bullet">
                    <li><p><a href="/testdrive/">тест-драйв</a></p></li>
                    <li><p><a href="/teh-service/">сервисное обслуживание и ремонт</a></p></li>
                    <li><p><a href="/credit/">кредитование и страхование</a></p></li>
                    <li><p><a href="/trade-in/">Trade-In</a></p></li>
                    <li><p><a href="/corp-sales/">лизинг и выгодные условия для корпоративных клиентов</a></p></li>
                </ul>

                <p>Основной задачей при создании дилерского центра «Ринг Авто Север» было обеспечение максимальной удовлетворенности и комфорта для наших посетителей и клиентов путем достижения и поддержания высочайшего уровня обслуживания.
                </p>
                <p>БорАВТО – это неизменно высокое качество обслуживания, отличный сервис, соответствующий высоким стандартам японского бренда Datsun, доверие и выбор клиентов.
                </p>
                <p><b>Предлагаем Вам оценить качество и комфорт автомобиля Datsun.</b></p>
                <p><b>Мы всегда рады видеть Вас в нашем салоне.</b></p>

<!--
                <div class="news-subtitle">
                    НАШИ ПРЕИМУЩЕСТВА:
                </div>
                <ul class="red-bullet">
                    <li><p><b>CTK CENTER удобно расположен:</b> в 10 минутах езды от центра города и КАД, в 10 минутах ходьбы от станции метро «Ладожская».</p></li>
                    <li><p>В CTK CENTER для Вас открыт <b>большой светлый демонстрационный зал</b> по продаже новых автомобилей, в котором представлен весь модельный ряд Datsun.</p></li>
                    <li><p><b>Склад автомобилей Datsun расположен на территории CTK CENTER.</b> Наши специалисты помогут выбрать комплектацию и цвет, которые нужны именно Вам.</p></li>
                    <li><p>В CTK CENTER оборудован <b>просторный паркинг площадью 3 500 кв. м.</b> Вы всегда с легкостью сможете найти место для парковки.</p></li>
                    <li><p>Станция технического обслуживания <b>площадью 813 кв. м оборудована прозрачными стенами,</b> благодаря чему Вы можете наблюдать за тем, как специалисты CTK CENTER проводят работы по сервисному обслуживанию Вашего автомобиля.</p></li>
                    <li><p>Малярно-кузовной цех <b>площадью 716 кв.м способен обслуживать за смену около 40 автомобилей.</b> В случае необходимости специалисты CTK CENTER выполнят кузовные работы качественно и в максимально короткие сроки.</p></li>
                    <li><p><b>Прекрасная кухня и уютная атмосфера кафе «Токио-Париж»,</b> расположенном на втором этаже дилерского центра, позволят Вам отдохнуть в приятной обстановке, пока специалисты CTK CENTER заботятся о Вашем автомобиле.</p></li>
                </ul>
-->
<!--
                <p>&nbsp;</p>
                <div class="news-bxslider">
                    <li><a class="news-item-fancy" href="./images/IMG_11.jpg"><img src="./images/IMG_11.jpg" style="width: 335px; height: 188px;" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_12.jpg"><img src="./images/IMG_12.jpg" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_13.jpg"><img src="./images/IMG_13.jpg" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_14.jpg"><img src="./images/IMG_14.jpg" style="width: 335px; height: 188px;" /></a></li>
                    <li><a class="news-item-fancy" href="./images/IMG_15.jpg"><img src="./images/IMG_15.jpg" /></a></li>
                </div>
-->



            </div>
            <br>
        </div>

        <!-- map -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/map.php"
            )
        );?>
        <!-- map END -->
        ﻿
    </div>

    <!-- content END -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>