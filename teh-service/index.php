<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Техническое обслуживание Datsun | Ринг Авто Север дилер Datsun");
$APPLICATION->SetTitle("teh_service");
?>

    <div class="header-spacer"></div>


    <div class="content">

        <div class="news-detail">
            <h1>Техническое обслуживание Datsun</h1>

            <div class="news-banner"> <img alt="to.jpg" src="./images/to_3.jpg" title="to.jpg" class="news-banner-img"  />
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
                <p> 			 Официальный сервис Datsun — это недорого! Мы предлагаем только то, что действительно необходимо для сохранения безупречного состояния и полной исправности всех механизмов Вашего Datsun. 		</p>

                <p> <b>Ринг Авто Север осуществляет плановое техническое обслуживание всего модельного ряда Datsun.&nbsp;</b> 		</p>

                <p> <b>Периодичность прохождения — каждые 15&nbsp;000 км.</b> 		</p>

                <p> 			 Чтобы записаться, звоните &nbsp;<u><b class="ya-phone-1">+7 (473) 233-27-77</b></u> или воспользуйтесь онлайн-формой ниже. 		</p>

                <br />

                <!-- <p> </p> -->
                <a href="#writingToServiceOnService" class="form-fancybox service btn" >Записаться на сервис</a>
                <!-- <br> -->

                <p> 			 &nbsp; 		</p>
                <!--
                <div class="news-subtitle"> 			 ПРОВЕРКА ПЕРЕД ПУТЕШЕСТВИЕМ 		</div>
                <img src="./images/03.jpg" class="img1140"  />
                <p> 			 Хотите проверить свой Datsun перед предстоящей дальней дорогой? В периоды между техническими обслуживаниями Вы можете в любое удобное время посетить сервис CTK CENTER и провести диагностику автомобиля абсолютно БЕСПЛАТНО (при условии прохождения планового ТО у официальных дилеров Datsun). 		</p>

                <p> 			 Проверка перед путешествием проводится по наиболее важным пунктам, обеспечивающим комфорт и безопасность в дальней поездке. Отправляйтесь в путь с уверенностью, что с Вашим Datsun все в порядке! 		</p>

                <p> <b>Ознакомиться с краткими описаниями сервисных программ Datsun, а также уточнить стоимость ТО для Datsun On-Do и Mi-Do можно <a href="/files/Datsun_Service.pdf" target="_blank" >ЗДЕСЬ&gt;&gt;</a></b> 		</p>
-->

                <p>Datsun Сервис – это оптимальные, удобные и выгодные решения. Мы предлагаем Вам только то, что действительно необходимо для поддержания отличной формы Вашего Datsun. Ничего лишнего! Длительность сервисных процессов строго регламентирована, а все используемые нами запчасти прошли дополнительный контроль качества. Честность и прозрачность ценообразования, высокое качество работ, запчастей и аксессуаров, привлекательные условия сервисных программ – все это отличительные черты сервиса для Вашего нового Datsun!</p>
                <div class="news-subtitle"> 			Понимание – ключ к доверию		</div>
                <p>Чтобы сервис был доступным, мы предлагаем специально разработанный план регулярного ТО. Работы в рамках каждого ТО построены таким образом, что обслуживание в официальных сервисных центрах для автомобиля с пробегом так же доступно, как и для нового автомобиля.</p>
                <div class="news-subtitle"> 			Ради Вашего удобства		</div>
                <p>Сервис Datsun – это привлекательные условия обслуживания и ничего лишнего. Если Вы сами отлично разбираетесь в автомобилях, мы возьмем на себя выполнение лишь самых ответственных операций, предложив Вам выгодные сервисные пакеты.</p>
                <div class="news-subtitle"> 			 ОРИГИНАЛЬНОЕ МАСЛО 		</div>
                <p>Ничто не может обеспечить оптимальную производительность и долговечность двигателя Вашего автомобиля DATSUN лучше, чем использование масла из линейки оригинальных моторных масел DATSUN. При использовании неоригинальных масел Вы подвергаете автомобиль риску поломок, снижения производительности или дорогостоящего ремонта. Позаботьтесь о Вашем DATSUN. При визите к Официальному Дилеру всегда настаивайте на использовании оригинальных масел DATSUN.<br />
                Оригинальное моторное масло DATSUN – масло высшего качества, разработано специально для использования в бензиновых двигателях автомобилей DATSUN. Моторное масло DATSUN одобрено производителем и является маслом первой (заводской) заливки. Только с оригинальным маслом DATSUN двигатель работает с максимальной эффективностью.</p>
                <div class="news-subtitle"> 			 ДОКУМЕНТАЦИЯ 		</div>

                <div id="accordion">
                    <div class="accordionButton">
                        <p> 					 Правила приема на сервис. Бланк доверенности 				</p>
                    </div>

                    <div class="accordionContent">
                        <p> 					 Информируем Вас о том, что приёмка и передача автомобилей на техническое обслуживание и ремонт на станцию технического обслуживания возможны только при наличии документов, подтверждающих право собственности на автомобиль, либо при наличии доверенности, содержащей право на совершение подобных действий. 				</p>

                        <p> 					 Право собственности должно быть подтверждено свидетельством о регистрации транспортного средства, а также документом, удостоверяющим личность (паспорт, водительское удостоверение, либо иными установленными законом документами). При обращении на станцию технического обслуживания на основании доверенности необходимо предъявить оригинал данной доверенности, а также документ удостоверяющий личность, данные которого должны соответствовать данным документа доверенного лица, указанным в доверенности. 				</p>

                        <p> <a href="/files/form.doc" >Скачать бланк доверенности</a> 				</p>

                    </div>

                    <div class="accordionButton">
                        <p> 					 Порядок приема на сервис 				</p>
                    </div>

                    <div class="accordionContent">
                        <ul>
                            <li>осмотр автомобиля мастером-консультантом в присутствии клиента с целью обнаружения царапин, трещин и других дефектов во избежание конфликтных ситуаций;</li>

                            <li>диагностика и оценка технического состояния автомобиля;</li>

                            <li>подробное обсуждение и согласование предстоящего ремонта;</li>

                            <li>информирование клиента о стоимости ремонта, цене запасных частей, сроке проведения всех работ;</li>

                            <li>подписание акта приемки-сдачи автомобиля;</li>

                            <li>выдача клиенту одного экземпляра данного акта.</li>
                        </ul>
                    </div>

                    <div class="accordionButton">
                        <p> 					 Порядок выдачи автомобиля 				</p>
                    </div>

                    <div class="accordionContent">
                        <ul>
                            <li>ознакомление клиента с перечнем выполненных работ;</li>

                            <li>демонстрация выполненных работ и замененных запасных частей;</li>

                            <li>предоставление мастером-консультантом счета с комментарием по каждой его позиции;</li>

                            <li>выдача ведомости технического обслуживания с пояснениями и рекомендациями;</li>

                            <li>осмотр автомобиля для проверки на отсутствие вновь появившихся царапин, трещин и других дефектов;</li>

                            <li>подписание акта сдачи-приемки автомобиля.</li>
                        </ul>
                    </div>
                </div>

                <br />
                <hr>
                <p class="disclaimer"> <sup>*</sup> Средняя стоимость ТО1, ТО2, ТО3 для а/м Datsun on-DO с МКПП. 		</p>
            </div>
        </div>

        <br />




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