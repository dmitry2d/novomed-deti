
<!-- Облака -->
<div class="index-clouds">
    <div class="picture">
        <img src="./assets/img/clouds/photo.jpg" alt="">
    </div>
    <div class="clouds-top1"></div>
    <div class="clouds-top2"></div>
    <div class="clouds-top3"></div>
    <div class="clouds-bottom1"></div>
    <div class="clouds-bottom2"></div>
    <div class="clouds-bottom3"></div>
</div>
<script>
    $(document).ready (() => {
        $(window).on('scroll', () => {
            const speed = 0.2;
            const offset = 70;
            const offsetY = ($('.index-clouds').offset()?.top - $(window).scrollTop());
            $('.index-clouds .picture img').css({
                'object-position': `50% calc(50% + ${offsetY * speed + offset}px)`
            })
        });
    });
</script>

<!-- /Облака -->

<div class="" style="height: 1000px;"></div>