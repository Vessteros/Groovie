<template>
    <div class="screen-1-content">
        <img src="http://vessteros.beget.tech/resources/img/landing/screen1/phone.png" class="screen-1-phone">

        <div class="screen-1-info">
            <div class="screen-1-title">Groovie</div>
            <div class="screen-1-info-block">
                <div class="screen-1-subtitle">
                    ...to make communication even easier is simply impossible.
                </div>
                <ul class="screen-1-ul">
                    <li>&nbsp;&nbsp;chat with every friend in a single place</li>
                    <li>&nbsp;&nbsp;huge number of applications - forget</li>
                    <li>&nbsp;&nbsp;the point is to make your communication easier</li>
                </ul>
                <div class="screen-1-form">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div>
                <!--<hr class="screen-1-line">-->
                <div class="screen-1-action">
                    <div class="screen-1-app"></div>
                    <div class="screen-1-app_info">
                        Download the Groovie app on Google Play
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
        font-family: WorkSans-Light;
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
        margin: 0 0 1vw 0;
        padding-left: 1vw;
        font-size: 3vw;
    }

    .screen-1-info-block {
        display: block;
        float: left;
        width: 41vw;
        height: 31vw;
        margin: 0;
        padding: 2vh 1vw;
        font-family: WorkSans-Regular;
    }

    .screen-1-subtitle {
        display: block;
        float: left;
        width: 100%;
        font-size: 1.2vw;
        padding: 0.5vh;
        
    }

    .screen-1-ul {
        display: block;
        float: left;
        width: 100%;
        font-size: 1.2vw;
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
        color: #000000;
    }

    .screen-1-form {
        display: block;
        float: left;
        width: 100%;
    }

    .screen-1-form a {
        float: left;
        width: 10vw;
        height: 2.5vw;
        font-size: 1vw;
        padding-top: 0.4vw;
        display: block;
        margin: 1vh 2.5vw 3vh 0;
        text-align: center;
        border: 1px #282c37 solid;
        border-radius: 0.2vw;
        text-decoration: none;
        color: #282c37;
        -webkit-box-shadow: 0 2px 5px rgba(155, 174, 200, 0.2);
        box-shadow: 0 2px 5px rgba(155, 174, 200, 0.2);
    }

    .screen-1-form a:hover {
        color: #ffffff;
        background-color: #282c37;
    }

    .screen-1-line {
        float: left;
        width: 85%;
        border: 0.01vh #282c37 solid;
    }

    .screen-1-app {
        display: block;
        float: left;
        width: 15.1vw;
        height: 4.5vw;
        background-image: url("../../../../../img/landing/screen1/google_play.png");
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