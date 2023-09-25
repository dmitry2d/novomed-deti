
<?php

    include 'components/header.php';

    include 'components/topline.php';
    
    include 'components/navbar.php';

    include 'components/breadcrumb.php';

?>
    
    <!-- Контент -->
    <section class="content">
        <div class="container-xl px-3 py-5">

            <h1>Абрамов Игорь Владимирович</h1>

            <div class="row my-5">
                <!-- Левая колонка -->
                <div class="col-lg-4 text-center">
                    <img src="assets/img/doctor01.jpg" alt="" class="rounded-2 shadow-lg">
                    <br><br>
                    <h2>врач-пластический хирург</h2>
                    <h2>Стаж с 2018 года</h2>
                    
                    <div class="my-4">
                        Вт 9:00 - 19:00<br>
                        Ср 9:00 - 19:00<br>
                        Чт 9:00 - 19:00<br>
                        Пт 9:00 - 19:00<br>
                        Сб 9:00 - 19:00<br>
                        Вс 9:00 - 19:00<br>
                    </div>
                    
                </div>
                <!-- /Левая колонка -->

                <!-- Правая колонка -->

                <div class="col-lg-8 py-2 ps-lg-5">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active px-4 py-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#d1" type="button" role="tab" aria-controls="d1" aria-selected="true">Образование</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4 py-3" id="profile-tab" data-bs-toggle="tab" data-bs-target="#d2" type="button" role="tab" aria-controls="d2" aria-selected="false">Заболевания, которые лечит	</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4 py-3" id="contact-tab" data-bs-toggle="tab" data-bs-target="#d3" type="button" role="tab" aria-controls="d3" aria-selected="false">Примеры работ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-4 py-3" id="contact-tab" data-bs-toggle="tab" data-bs-target="#d4" type="button" role="tab" aria-controls="d4" aria-selected="false">Отзывы</button>
                            </li>
                        </ul>

                    <div class="tab-content" id="myTabContent">
                        
                        <div class="tab-pane fade show active p-4 border border-top-0" id="d1" role="tabpanel" aria-labelledby="d1tab">
                            <p>Саратовский государственный медицинский университет имени В.И. Разумовского по специальности «лечебное дело». Рязанский государственный медицинский университет имени академика И.П Павлова по специальности «пластическая хирургия».</p>
                            <p>Соавтор патентов по пластической хирургии:</p>
                            <p>«Способ двухплоскостного гармничного листинга лица»;</p>
                            <p>«Способ формирования кармана для имплантата с полным мышечным покрытием при аугментационной маммопластике».</p>
                        </div>

                        
                        <div class="tab-pane fade p-4 border border-top-0" id="d2" role="tabpanel" aria-labelledby="d2-tab">
                            <p>Выполняет следующие виды пластических операций:</p>
                            <ul class="lh-lg">
                                <li>маммопластика (увеличение, подтяжка, уменьшение груди, увеличение с подтяжкой);</li>
                                <li>абдоминопластика;</li>
                                <li>липосакция;</li>
                                <li>подтяжка лица;</li>
                                <li>блефаропластика;</li>
                                <li>липофилинг;</li>
                                <li>отопластика.</li>
                            </ul>
                        </div>


                        <div class="tab-pane fade p-4 border border-top-0" id="d3" role="tabpanel" aria-labelledby="d3-tab">
                            <div class="row">
                                <a class="col-md-4 p-2 my-1" href="./assets/img/works_big1.jpeg" data-lightbox="works" data-title="My caption">
                                    <img src="./assets/img/works1.jpg" class="w-100 rounded-2" alt="">
                                </a>
                                <a class="col-md-4 p-2 my-1" href="./assets/img/works_big2.jpeg" data-lightbox="works" data-title="My caption">
                                    <img src="./assets/img/works2.jpg" class="w-100 rounded-2" alt="">
                                </a>
                                <a class="col-md-4 p-2 my-1" href="./assets/img/works_big1.jpeg" data-lightbox="works" data-title="My caption">
                                    <img src="./assets/img/works1.jpg" class="w-100 rounded-2" alt="">
                                </a>
                                <a class="col-md-4 p-2 my-1" href="./assets/img/works_big2.jpeg" data-lightbox="works" data-title="My caption">
                                    <img src="./assets/img/works2.jpg" class="w-100 rounded-2" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="tab-pane fade p-4 border border-top-0" id="d4" role="tabpanel" aria-labelledby="d4-tab">

                            <!-- Отзыв -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-10">
                                        <b>12.11.2022 ProDoctorov: отлично</b>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://novomed-novoross.ru/images/logo_prodoctorov.svg" class="w-100" alt="">
                                    </div>
                                </div>
                                <h5 class="mt-4"><i>Понравилось</i></h5>
                                <p>Доктор внимательный, всегда на связи, с отличным чувством юмора и лёгкой рукой! :)</p>
                                <h5 class="mt-4"><i>Не понравилось</i></h5>
                                Недостатков нет.
                                <h5 class="mt-4"><i>Комментарий</i></h5>
                                <p>Здравствуйте! Абрамова Игоря Владимировича порекомендовали и был выбран мною по положительным отзывам. На консультации доктор рассказал что нужно и как нужно, назначил полное обследование, и вот наступил долгожданный день... Длительная операция под общим наркозом прошла успешно! Круговая блефаропластика с эндоскопической подтяжкой лба и бровей. Сутки находилась в комфортабельной платной палате, с идеальной чистотой! Медперсонал отзывчивый и заботливый! Сейчас нахожусь в стадии реабилитации, строго выполняя все рекомендации врача, и это очень важно! Не сомневайтесь в опытности и грамотности доктора! Игорь Владимирович, огромное вам спасибо! Успехов в нелёгком труде, стремлении к лучшему и большом желании превращать наши мечты в реальность! :) С уважением к вам [...]!</p>
                            </div>
                            <!-- / Отзыв -->
                            
                            <div class="my-4 border-top">&nbsp;</div>

                            <!-- Отзыв -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-10">
                                        <b>12.11.2022 ProDoctorov: отлично</b>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://novomed-novoross.ru/images/logo_prodoctorov.svg" class="w-100" alt="">
                                    </div>
                                </div>
                                <h5 class="mt-4"><i>Понравилось</i></h5>
                                <p>Доктор внимательный, всегда на связи, с отличным чувством юмора и лёгкой рукой! :)</p>
                                <h5 class="mt-4"><i>Не понравилось</i></h5>
                                Недостатков нет.
                                <h5 class="mt-4"><i>Комментарий</i></h5>
                                <p>Здравствуйте! Абрамова Игоря Владимировича порекомендовали и был выбран мною по положительным отзывам. На консультации доктор рассказал что нужно и как нужно, назначил полное обследование, и вот наступил долгожданный день... Длительная операция под общим наркозом прошла успешно! Круговая блефаропластика с эндоскопической подтяжкой лба и бровей. Сутки находилась в комфортабельной платной палате, с идеальной чистотой! Медперсонал отзывчивый и заботливый! Сейчас нахожусь в стадии реабилитации, строго выполняя все рекомендации врача, и это очень важно! Не сомневайтесь в опытности и грамотности доктора! Игорь Владимирович, огромное вам спасибо! Успехов в нелёгком труде, стремлении к лучшему и большом желании превращать наши мечты в реальность! :) С уважением к вам [...]!</p>
                            </div>
                            <!-- / Отзыв -->

                            <div class="my-4 border-top">&nbsp;</div>

                            <!-- Отзыв -->
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-10">
                                        <b>12.11.2022 ProDoctorov: отлично</b>
                                    </div>
                                    <div class="col-2">
                                        <img src="https://novomed-novoross.ru/images/logo_prodoctorov.svg" class="w-100" alt="">
                                    </div>
                                </div>
                                <h5 class="mt-4"><i>Понравилось</i></h5>
                                <p>Доктор внимательный, всегда на связи, с отличным чувством юмора и лёгкой рукой! :)</p>
                                <h5 class="mt-4"><i>Не понравилось</i></h5>
                                Недостатков нет.
                                <h5 class="mt-4"><i>Комментарий</i></h5>
                                <p>Здравствуйте! Абрамова Игоря Владимировича порекомендовали и был выбран мною по положительным отзывам. На консультации доктор рассказал что нужно и как нужно, назначил полное обследование, и вот наступил долгожданный день... Длительная операция под общим наркозом прошла успешно! Круговая блефаропластика с эндоскопической подтяжкой лба и бровей. Сутки находилась в комфортабельной платной палате, с идеальной чистотой! Медперсонал отзывчивый и заботливый! Сейчас нахожусь в стадии реабилитации, строго выполняя все рекомендации врача, и это очень важно! Не сомневайтесь в опытности и грамотности доктора! Игорь Владимирович, огромное вам спасибо! Успехов в нелёгком труде, стремлении к лучшему и большом желании превращать наши мечты в реальность! :) С уважением к вам [...]!</p>
                            </div>
                            <!-- / Отзыв -->

                        </div>

                    </div>

                </div>
                
                <!-- Правая колонка -->
            </div>

        </div>
    </section>
    <!-- Контент -->

    <?php

        include 'components/contactform.php';

        include 'components/footer.php';

    ?>

    