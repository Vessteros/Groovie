<template>
    <div class="screen-2-content">
        <div class="container">
            <div class="rev_slider">
                <div class="rev_slide">
                    <div class="slide-content vk">
                        <img class="net-img" src="http://vessteros.beget.tech/resources/img/views/vklogo.png">
                    </div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content vb">
                        <img class="net-img" src="http://vessteros.beget.tech/resources/img/views/vblogo.png">
                    </div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content fb">
                        <img class="net-img" src="http://vessteros.beget.tech/resources/img/views/fblogo.png">
                    </div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content tg">
                        <img class="net-img" src="http://vessteros.beget.tech/resources/img/views/tglogo.png">
                    </div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content ig">
                        <img class="net-img" src="http://vessteros.beget.tech/resources/img/views/iglogo.png">
                    </div>
                </div>
                <div class="rev_slide">
                    <div class="slide-content wa">
                        <img class="net-img" src="http://vessteros.beget.tech/resources/img/views/walogo.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="screen-2-info_block">
            <div class="screen-2-info-title">
                <h1>
                    <div class="goo goo-title" contenteditable="true">...connect your networks</div>
                </h1>
            </div>
            <div class="screen-2-info-desc1">
                <h1>
                    <div class="goo" contenteditable="true">connect the most popular social networks to your master
                        account <br>for getting access to chat history in a single place without switching an applications
                    </div>
                </h1>


            </div>
            <div class="screen-2-info-desc2">
                <h1>
                    <div class="goo" contenteditable="true">
                        telegram, instagram, viber...<br>
                        ...is just a start
                    </div>
                </h1>
            </div>
            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                 xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"/>
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                       result="goo"/>
                        <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                    </filter>
                </defs>
            </svg>
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
                cur.children().children().children().addClass('shadow');
                cur.removeClass('slick-snext').removeClass('slick-sprev');
                slick.$prev = prev;
                slick.$next = next;
            }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
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
                prev.children().children().children().removeClass('shadow');
                next.children().children().children().removeClass('shadow');
                slick.$prev = prev;
                slick.$next = next;
                cur.removeClass('slick-next').removeClass('slick-sprev');
                cur.children().children().children().addClass('shadow');
            });

            rev.slick({
                speed: 500,
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
    .vk {
        background: #4c75a3;
    }

    .fb {
        background: #4e71a8;
    }

    .tg {
        background: #2ca5e0;
    }

    .vb {
        background: #7d3daf;
    }

    .ig {
        background: #f33b9b;
    }

    .wa {
        background: #0d9f16;
    }

    .net-img {
        display: block;
        float: left;
        width: 9vw;
        height: 8vw;
        background-size: cover;
        margin: 4vw 4.5vw;
    }

    .screen-2-info_block {
        display: block;
        float: left;
        width: 53vw;
        height: 25vw;
        margin: 6.5vw 3vw;
        font-family: WorkSans-ExtraLight;
    }

    .screen-2-info-title {
        display: block;
        float: left;
        text-align: right;
        width: 100%;
        font-size: 2.2vw;
        padding-right: 2vw;
        font-family: WorkSans-Bold;
    }

    .screen-2-info-desc1 {
        display: block;
        float: left;
        width: 100%;
        padding: 2vw;
    }

    .screen-2-info-desc2 {
        display: block;
        float: left;
        width: 100%;
        padding: 2vw;
        font-size: 1.2vw;
        text-align: right;
    }

    .goo {
        font-family: WorkSans-Light;
        font-size: 1.3vw;
        line-height: 1.35;
        display: inline;
        box-decoration-break: clone;
        background: #cde1fd;
        padding: 0.7rem 2rem;
        filter: url('#goo');
        color: #000000;
    }

    .goo-title {
        font-size: 2.4vw;
    }

    .goo:focus {
        outline: 0;
    }

</style>