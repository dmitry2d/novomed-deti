
<?php

    include 'components/header.php';

    include 'components/inner-header.php';
    
    
?>

<div class="container">

    <!-- Заголовок и поиск -->
    
    <div class="row">

        <div class="col-md-8">
            <?php
                
                include './components/breadcrumb.php';

            ?>
            <h1 class="text-style-darkblue fw-normal fs-1 mb-5 pb-4">Ортопедия и травмотология</h1>
        </div>
        
        <div class="col-lg-4 d-none d-lg-block pt-4">
            <?php

                include 'components/sitesearch.php';

            ?>
        </div>
    
    </div>

    <!-- / Заголовок и поиск -->

    <!-- Содержание страницы -->


    <div class="row">

        <div class="col-sm-4 pe-5 pb-5">
            <img src="./assets/img/photo/doc1.png" alt="" class="w-100 shadow-lg rounded-5">
        </div>
        <div class="col-sm-8">

            <!-- Вкладки -->

            <ul class="navpills nav nav-pills mb-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                        О враче
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Заболевания
                    </button>
                </li>
            </ul>

            <!-- / Вкладки -->

            <!-- Вкладка 1 -->

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-style-blue">Главный врач</h4>
                            <h1 class="text-style-darkblue">Каралевтеров Александр Юрьевич</h1>
                        </div>
                        <div class="col-md-6 ps-4">
                            <div class="d-flex py-1">
                                <div class="">
                                    <svg width="37" height="17" viewBox="0 0 37 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4.97461H13M3 12.4746H14C15.1046 12.4746 16 11.5792 16 10.4746V3.47461C16 2.37004 15.1046 1.47461 14 1.47461H3C1.89543 1.47461 1 2.37004 1 3.47461V10.4746C1 11.5792 1.89543 12.4746 3 12.4746Z" stroke="#7BB007" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </div>
                                <div class="fs-6 text-style-darkblue flex-grow-1">
                                    Прием по личным вопросам: среда с 16:00 до 17:00 (каб.613)
                                </div>
                            </div>
                            <div class="d-flex py-1">
                                <div class="">
                                    <svg width="37" height="25" viewBox="5 5 45 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 22H17M12 26H20C21.1046 26 22 25.1046 22 24V8C22 6.89543 21.1046 6 20 6H12C10.8954 6 10 6.89543 10 8V24C10 25.1046 10.8954 26 12 26Z" stroke="#7BB007" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="fs-6 text-style-darkblue flex-grow-1">
                                    Приемная: +7 (8617) 79-71-47
                                </div>
                            </div>
                            <div class="d-flex py-1">
                                <div class="">
                                    <svg width="37" height="45" viewBox="5 10 42 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 11H23M9 11V22H23V11M9 11L16 17L23 11" stroke="#7BB007" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="fs-6 text-style-darkblue flex-grow-1">
                                    Почта: <a href="mailto:novomed@novomed.com.ru">novomed@novomed.com.ru</a>
                                </div>
                            </div>
                            <div class="pb-2">
                                <a href="" class="bg-style-lightblue bg-gradient d-inline-flex align-items-center rounded-5 py-2 px-3 pe-4 text-white">
                                    <img src="./assets/img/icons/mail.svg" alt="" class="pe-2">
                                    <div>Записаться</div>
                                </a>
                            </div>
                        </div>
                    </div>
                <p class="my-5">
                    Медицинский центр «Новомед» оказывает помощь пациентам в лечении заболеваний опорно-двигательного аппарата. Команда травматологов-ортопедов проводит как консультативные приемы по любым заболеваниям костно-мышечной системы – от деформации стоп до проблем с шеей, так и операции разной сложности.
                </p>
                <h2 class="text-style-darkblue mt-4">
                    Консервативное лечение переломов:
                </h2>
                <ul class="styled my-4">
                <li>КТ –исследования.</li>
                    <li>Ультразвуковое исследование.</li>
                    <li>Педобарография.</li>
                    <li>Лабораторные исследования.</li>
                </ul>

            </div>

            <!-- / Вкладка 1 -->
            
            <!-- Вкладка 2 -->
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul class="styled">
                    <li>Список заболеваний</li>
                    <li>Список заболеваний</li>
                    <li>Список заболеваний</li>
                    <li>Список заболеваний</li>
                </ul>
            </div>

        </div>

    </div>

    
</div>

<!-- Содержание страницы -->


<div class="doctors-full mt-5 pt-4">
    <?php
        include 'components/doctors.php';
    ?>
</div>


<?php

    include 'components/question.php';

    include 'components/index-footer.php';

    include 'components/footer.php';

?>
    