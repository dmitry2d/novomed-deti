
<?php

    include 'components/header.php';

    include 'components/topline.php';
    
    include 'components/navbar.php';

    include 'components/breadcrumb.php';

?>
    
    <!-- Контент -->
    <section class="content">
        <div class="container-xl px-3 py-5">

            <h1>Специалисты клиники</h1>

            <div class="row my-5">
                <!-- Левая колонка -->
                <div class="col-lg-4 text-center">
                    <img src="assets/img/doctor01.jpg" alt="" class="rounded-2 shadow-lg">                    
                </div>
                <!-- /Левая колонка -->

                <!-- Правая колонка -->

                <div class="col-lg-8 py-2 ps-lg-5">
                    
                    <h4>Главный врач</h4>
                    <h3>Булатова Вера Михайловна</h3>
                    <p>Стаж с 2002 года</p>

                    <p>Прием по личным вопросам: среда с 16:00 до 17:00 (каб.613)</p>

                    <p>Приемная: +7 (8617) 79-71-47</p>

                    <p>Почта: <a href="mailto:novomed@novomed.com.ru">novomed@novomed.com.ru</a></p>

                    <div class="my-4">
                        <a href="https://novomed-novoross.ru/napisat-glavnomu-vrachu/"
                            type="button" class="btn btn-outline-danger py-3 px-4 fw-bold">
                                Написать главному врачу
                        </a>
                    </div>

                </div>
                
                <!-- Правая колонка -->
            </div>


            <div class="row mt-4 pt-4">
                <div class="col-md-6">
                    <form action="" class="">
                        <div class="input-group my-3">
                            <input type="text" class="form-control bg-white" placeholder="Поиск врача..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass">
                                    <input type="submit" class="btn p-0 m-0" value=" ">
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Врачи -->
                <?php include 'components/doctors.php'; ?>
            <!-- / Врачи -->


        </div>
    </section>
    <!-- Контент -->

    <?php

        include 'components/contactform.php';

        include 'components/footer.php';

    ?>

    