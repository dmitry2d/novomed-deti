<!-- Главная - о нас -->
<div class="container index-about my-5">
    <h1 class="fw-normal text-style-blue">О нас</h1>
    <div class="row">
        <div class="col-lg-6 pe-3">
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
        <div class="col-lg-6">
            <div class="index-about-slider">
                <div class="index-about-slider-items slick-slider">
                    <div class="item">
                        <a href="./assets/img/photo/about1.jpg" data-lightbox="about">
                            <img src="./assets/img/photo/about1.jpg">
                        </a>
                    </div>
                    <div class="item">
                        <a href="./assets/img/photo/about2.jpg" data-lightbox="about">
                            <img src="./assets/img/photo/about2.jpg">
                        </a>
                    </div>
                    <div class="item">
                        <a href="./assets/img/photo/about3.jpg" data-lightbox="about">
                            <img src="./assets/img/photo/about3.jpg">
                        </a>
                    </div>
                </div>
                <div class="index-about-slider-navi slick-slider my-4">
                    <div class="item">
                        <span>
                            <img src="./assets/img/photo/about1.jpg">
                        </span>
                    </div>
                    <div class="item">
                        <span>
                            <img src="./assets/img/photo/about2.jpg">
                        </span>
                    </div>
                    <div class="item">
                        <span>
                            <img src="./assets/img/photo/about3.jpg">
                        </span>
                    </div>
                    <div class="item">
                        <span>
                            <img src="./assets/img/photo/about3.jpg">
                        </span>
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
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.index-about-slider-items',
            arrows: false,
            dots: true,
            centerMode: true,
            focusOnSelect: true,
            centerPadding: '0px',
            customPaging : function(slider, i) {
                return '';
            }
        });
    });
</script>
<!-- /Главная - о нас -->