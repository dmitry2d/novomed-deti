
<?php

    include 'components/header.php';

    include 'components/topline.php';
    
    include 'components/navbar.php';

    include 'components/breadcrumb.php';

?>
    




    <!-- Контент -->
    <section class="content">
        <div class="container-xl px-3 py-5">

            <div class="row">
                <!-- Левая колонка -->
                <div class="col-lg-7">
                    
                    
                    
                    <h1>Лицензии</h1>
                    <br>
                    <p>
                        <a href="">Лицензия ООО «Новомед»</a>
                    </p>
                    
                </div>
                <!-- /Левая колонка -->

                <!-- Разделитель -->
                <div class="col-lg-1 d-none d-lg-block border-end border-gray-medium"></div>
                <!-- / Разделитель -->
                
                <!-- Правая колонка -->
                <div class="col-lg-4 py-2 ps-lg-5">

                    

                    <form action="" class="">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-white" placeholder="Поиск..." aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass">
                                    <input type="submit" class="btn p-0 m-0" value=" ">
                                </i>
                            </button>
                        </div>
                    </form>

                    <button type="button" class="btn btn-danger px-4 py-2 my-4">
                        <div class="my-1">
                            <a href="" class="text-white text-decoration-none fw-bold">
                                +7 (8617) 799-799
                            </a>
                        </div>
                    </button>
                    
                    <div>
                        <a href="">
                            <img src="./assets/img/about_company-1-1-300x225.jpeg" class="img-fluid rounded-3 my-3" alt="">
                            <p>
                                О клинике
                            </p>
                        </a>
                    </div>

                    <button type="button" class="btn btn-danger px-4 py-2 my-4">
                        <div class="my-1">
                            <a href="" class="text-white text-decoration-none fw-bold">
                                Скорая мед. помощь
                            </a>
                        </div>
                    </button>

                    <!-- Правая колонка -->
                </div>
            </div>

        </div>
    </section>
    <!-- Контент -->

    <?php

        include 'components/contactform.php';

        include 'components/footer.php';

    ?>
    