<!-- Главная - о нас -->
<div class="container index-about my-5">
    <div class="row">
        <div class="col-md-7">
            <h1 class="fw-normal text-style-blue">О нас</h1>
            <p>
                Медицинский центр «Новомед Дети» предоставляет полный комплекс медицинских услуг в области педиатрии. Плановая и экстренная, амбулаторная и стационарная — в нашей компетенции практически все виды помощи вашему ребенку. Наши пациенты — дети с рождения до 18 лет.
            </p>
            <p>
                Медицинский центр оснащен новейшим оборудованием, соответствующим современным стандартам медицины. С его помощью мы проводим самую точную диагностику, а это в свою очередь гарантирует эффективность лечения. Специалисты — высококвалифицированные врачи с большим опытом работы в области педиатрии, знающие и любящие свое дело.
            </p>
            <p>
                Главная цель нашей работы — здоровье ребенка с первых дней жизни и навсегда! Малыш рождается с огромным жизненным потенциалом, сохранить его, раскрыть сильные стороны детского организма, скорректировать — в случае необходимости — слабые — мы делаем все возможное, чтобы ваш ребенок прекрасно себя чувствовал, гармонично развивался, с легкостью учился и добивался всяческих успехов в жизни.
            </p>
        </div>
        <div class="col-md-5">
            <div class="index-about-slider">
                <div class="index-about-slider-items slick-slider">
                    <div class="item">
                        <a href="./assets/img/photo/about1.jpg" data-lightbox="about">
                            <img src="./assets/img/photo/about1.jpg">
                        </a>
                    </div>
                    <div class="item">
                        <img src="./assets/img/photo/about2.jpg">
                    </div>
                    <div class="item">
                        <img src="./assets/img/photo/about3.jpg">
                    </div>
                </div>
                <div class="index-about-slider-navi slick-slider">
                    <div class="item">
                        <img src="./assets/img/photo/about1.jpg">
                    </div>
                    <div class="item">
                        <img src="./assets/img/photo/about2.jpg">
                    </div>
                    <div class="item">
                        <img src="./assets/img/photo/about3.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(e => {
        $('.index-about-slider-items').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.index-about-slider-navi'
        });
        $('.index-about-slider-navi').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.index-about-slider-items',
            dots: true,
            // centerMode: true,
            focusOnSelect: true
        });
    });
</script>
<!-- /Главная - о нас -->