
<?php

    include 'components/header.php';

    include 'components/topline.php';
    
    include 'components/navbar.php';

    include 'components/breadcrumb.php';

?>
    
    <!-- Контент -->
    <section class="content">
        <div class="container-xl px-3 py-5">

            <h1>Услуги клиники</h1>

            <p class="my-3">«Новомед» — один из первых в Новороссийске частных медицинских центров — был учрежден в 2004 году. Благодаря доверию пациентов «Новомед» приобрел статус самого крупного частного лечебного учреждения Новороссийска.</p>

            <div class="row align-items-start my-5">

                <div class="col-md-3">
                    <a href="https://novomed-novoross.ru/napisat-glavnomu-vrachu/"
                        type="button" class="btn btn-outline-danger py-2 px-3 fw-bold d-block">
                            Скачать актуальный прайс
                    </a>
                </div>

                <div class="col-md-5 py-3 py-md-0 px-md-4">
                    <i>
                        Информация, размещенная на сайте, носит справочно-информационный характер и не является публичной офертой.
                        Подробности уточняйте у операторов колл-центра.
                    </i>
                </div>

                <div class="col-md-4">
                    <form action="" class="">
                        <div class="input-group">
                            <input type="text" class="form-control bg-white py-2" placeholder="Поиск..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass">
                                    <input type="submit" class="btn p-0 m-0" value=" ">
                                </i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Меню услуг -->
            <div class="row">

                <div class="col-md-3 my-2">
                    <a class="btn btn-outline-primary d-block text-start py-3" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Флебология
                    </a>
                </div>

                <div class="dropdown col-md-3 my-2">
                    <a class="btn btn-outline-primary dropdown-toggle d-block text-start py-3" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Акушерство и гинекология
                    </a>
                    <ul class="dropdown-menu w-100 me-2" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item d-block" href="#">Акушерство и гинекология</a></li>
                        <li><a class="dropdown-item d-block" href="#">Акушерство и гинекология</a></li>
                        <li><a class="dropdown-item d-block" href="#">Акушерство и гинекология</a></li>
                    </ul>
                </div>

                <div class="dropdown col-md-3 my-2">
                    <a class="btn btn-outline-primary dropdown-toggle d-block text-start py-3" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Акушерство и гинекология
                    </a>
                    <ul class="dropdown-menu w-100 me-2" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item d-block" href="#">Акушерство и гинекология</a></li>
                        <li><a class="dropdown-item d-block" href="#">Акушерство и гинекология</a></li>
                        <li><a class="dropdown-item d-block" href="#">Акушерство и гинекология</a></li>
                    </ul>
                </div>

                <div class="col-md-3 my-2">
                    <a class="btn btn-outline-primary d-block text-start py-3" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Флебология
                    </a>
                </div>

                <div class="col-md-3 my-2">
                    <a class="btn btn-outline-primary d-block text-start py-3" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Флебология
                    </a>
                </div>

            </div>


            <!-- / Меню услуг -->


        </div>
    </section>
    <!-- Контент -->

    <?php

        include 'components/contactform.php';

        include 'components/footer.php';

    ?>
