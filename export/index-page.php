
<?php

include 'components/header.php';

include 'components/index-header.php';

?>

<div class="container pt-5" style="position: relative;">
    <div class="row">
        <div class="col-md-4">
            <div class="d-flex my-1">
                <img src="./assets/img/icons/geo.svg" alt="" class="pe-3 mb-4">
                <div class="">
                    Новороссийск, пр. Ленина, д. 76<br>
                    <span class="text-style-red">Круглосуточно</span>

                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <a href="" class="bg-style-red bg-gradient d-flex w-auto m-auto align-items-center rounded-5 py-3 px-4 pe-5 text-white">
                <img src="./assets/img/icons/paper.svg" alt="" class="pe-2">
                <div>Записаться на прием</div>
            </a>
        </div>
        <div class="col-md-5">
            <?php
                include 'components/sitesearch.php';
                ?>
        </div>
    </div>
</div>

<?php
    
    include 'components/index-about.php';

    include 'components/index-dir.php';

    include 'components/index-clouds.php';

?>

<div class="doctors-full">
    <?php
        include 'components/doctors.php';
    ?>
</div>


<?php

    include 'components/index-news.php';

    include 'components/feedback.php';

    include 'components/appointment.php';

    include 'components/index-footer.php';

    include 'components/footer.php';

?>
    