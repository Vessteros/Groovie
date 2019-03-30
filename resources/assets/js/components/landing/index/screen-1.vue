<template>
    <div class="screen-1-content">
        <img src="http://vessteros.beget.tech/resources/img/landing/screen1/phone.png" class="screen-1-phone">

        <div class="screen-1-info">
            <div class="screen-1-title">Groovie</div>
            <div class="screen-1-info-block">
                <div class="screen-1-subtitle">
                    To make communication even easier is simply impossible.
                </div>
                <ul class="screen-1-ul">
                    <li>&nbsp;&nbsp;Общайтесь с друзьями из разных социальных сетей в одном месте</li>
                    <li>&nbsp;&nbsp;Забудьте об огромном количестве приложений на своем смартфоне</li>
                    <li>&nbsp;&nbsp;Приложение, которое сделает вашу жизнь на много проще :)</li>
                </ul>
                <div class="screen-1-form">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div>
                <div class="screen-1-action">
                    <div class="screen-1-app"></div>
                    <div class="screen-1-app_info">
                        Скачайте приложение "Groovie" в Google Play
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "screen-1"
    }
</script>

<style scoped>
    .screen-1-content {
        display: block;
        float: left;
        width: 90vw;
        height: 84vh;
        margin: 5vh 5vw;
    }

    .screen-1-phone {
        display: block;
        float: left;
        width: 37vw;
        height: 37vw;
        margin: 5vh 0 5vh 6vw;
        
    }

    .screen-1-info {
        display: block;
        float: left;
        width: 41vw;
        height: 37vw;
        padding: 1vw 0;
        margin: 5vh 0;
    }

    .screen-1-title {
        display: block;
        float: left;
        width: 41vw;
        height: 6vh;
        margin: 0;
        padding-left: 1vw;
        font-size: 2.6vw;
    }

    .screen-1-info-block {
        display: block;
        float: left;
        width: 41vw;
        height: 31vw;
        margin: 0;
        padding: 2vh 1vw;
        
    }

    .screen-1-subtitle {
        display: block;
        float: left;
        width: 100%;
        font-size: 1.3vw;
        padding: 0.5vh;
        
    }

    .screen-1-ul {
        display: block;
        float: left;
        width: 100%;
        font-size: 0.9vw;
        padding: 1vw;
    }

    .screen-1-ul li {
        display: block;
        float: left;
        width: 100%;
        padding: 0.7vw;
        list-style-type: none;
    }

    .screen-1-ul li:before {
        content: ">   ";
        color: #1cc48a;
    }

    .screen-1-form {
        display: block;
        float: left;
        width: 100%;
    }

    .screen-1-form a {
        float: left;
        width: 15vw;
        height: 4vw;
        font-size: 1vw;
        padding-top: 1vw;
        display: block;
        margin: 1vh 4.2vw 5vh 0;
        text-align: center;
        border: 1px #9baec8 solid;
        border-radius: 5px;
        text-decoration: none;
        color: #9baec8;
        -webkit-box-shadow: 0 2px 5px rgba(155, 174, 200, 0.2);
        box-shadow: 0 2px 5px rgba(155, 174, 200, 0.2);
    }

    .screen-1-form a:hover {
        color: #fff;
        background-color: #9baec8;
    }

    .screen-1-app {
        display: block;
        float: left;
        width: 15.1vw;
        height: 4.5vw;
        background-image: url("../../../../../img/landing/screen1/google_play2.png");
        background-size: cover;
        margin-top: 1vw;
    }

    .screen-1-action {
        display: block;
        float: left;
        width: 100%;
        height: 10vw;
    }

    .screen-1-app_info {
        display: block;
        float: left;
        width: 23vw;
        height: 4.5vw;
        padding: 1.5vw;
        margin-top: 1vw;
        font-size: 0.9vw;
    }
</style>