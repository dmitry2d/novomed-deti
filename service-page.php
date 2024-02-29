
<?php

    include 'components/header.php';

    include 'components/inner-header.php';

?>

    <div class="container service-page">

        <?php
            include './components/breadcrumb.php';
        ?>

        <h1 class="text-style-darkblue fw-normal fs-1 mb-5 pb-4">Ортопедия и травмотология</h1>


        <ul class="navpills nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Об услуге
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Цены
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Врачи
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <p>
            Медицинский центр «Новомед» оказывает помощь пациентам в лечении заболеваний опорно-двигательного аппарата. Команда травматологов-ортопедов проводит как консультативные приемы по любым заболеваниям костно-мышечной системы – от деформации стоп до проблем с шеей, так и операции разной сложности.
        </p>
        <p>
            Для диагностики заболевания в используются все основные методы лабораторного и инструментального исследования:
        </p>
        <ul class="styled my-4">
            <li>КТ –исследования.</li>
            <li>Ультразвуковое исследование.</li>
            <li>Педобарография.</li>
            <li>Лабораторные исследования.</li>
        </ul>
        <p>
            Комплексная диагностика позволяет точно выявить локализацию патологического процесса, форму и степень тяжести заболевания. На основе результатов диагностики и детального сбора анамнеза травматолог-ортопед предложит подходящий вариант лечения.
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
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>

    </div>
    
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
    