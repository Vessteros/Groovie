<template>
    <div class="screen-2-content">
        <div class="container">
            <div class="rev_slider">
                <div class="rev_slide">
                    <div class="slide-content">1</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">2</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">3</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">4</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">5</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">6</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">7</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">8</div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content">9</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Slick from 'vue-slick';

    export default {

        name: "screen-2",
        components: {Slick},
        mounted() {
            var rev = $('.rev_slider');
            rev.on('init', function (event, slick, currentSlide) {
                var
                    cur = $(slick.$slides[slick.currentSlide]),
                    next = cur.next(),
                    prev = cur.prev();
                prev.addClass('slick-sprev');
                next.addClass('slick-snext');
                cur.removeClass('slick-snext').removeClass('slick-sprev');
                slick.$prev = prev;
                slick.$next = next;
            }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                console.log('beforeChange');
                var
                    cur = $(slick.$slides[nextSlide]), next, prev;
                slick.$prev.removeClass('slick-sprev');
                slick.$next.removeClass('slick-snext');
                next = cur.next();
                prev = cur.prev();
                prev.prev();
                prev.next();
                prev.addClass('slick-sprev');
                next.addClass('slick-snext');
                slick.$prev = prev;
                slick.$next = next;
                cur.removeClass('slick-next').removeClass('slick-sprev');
            });

            rev.slick({
                speed: 700,
                arrows: true,
                dots: false,
                focusOnSelect: true,
                prevArrow: '<div></div>',
                nextArrow: '<div></div>',
                infinite: true,
                centerMode: true,
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '0',
                swipe: true,
                customPaging: function (slider, i) {
                    return '';
                },
                /*infinite: false,*/
            });
        },
    }
</script>

<style scoped>

</style>