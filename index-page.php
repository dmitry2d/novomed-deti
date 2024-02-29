
<?php

include 'components/header.php';

include 'components/index-header.php';

?>

<div class="container pt-5">
    <div class="row">
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

    include 'components/appointment.php';

    include 'components/index-footer.php';

    include 'components/footer.php';

?>
    