<template>
    <div class="tg-view-container" :class="{'tg-view-auth_form' : !showBanner}">
        <div v-if="showBanner" class="tg-view-banner" @click="showBanner=!showBanner">
            <img class="tg-view-banner-img" src="http://vessteros.beget.tech/resources/img/views/tglogo.png">
        </div>

        <div v-else>
            <h3 class="auth-block-title">{{ networkTitle }}</h3>
            <a href="#" class="auth-block-close" @click="closeBanner">X</a>

            <form class="tg-view-auth_block_form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Логин</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Авторизироваться</button>
            </form>
            <p class="tg-view-auth_form-info">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TgView",

        data: function () {
            return {
                showBanner: true,
                networkTitle: 'Telegram',
            }
        },

        methods: {
            closeBanner() {
                this.showBanner = true;
                location.reload();
            },
        }
    }
</script>

<style scoped>
    .tg-view-container {
        display: block;
        float: left;
        width: 20vw;
        height: 40vw;
        cursor: pointer;
        background: #303540;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
    }
    .tg-view-banner {
        background: #2ca5e0;
        width: 100%;
        height: 100%;
    }
    .tg-view-banner-img {
        display: block;
        float: left;
        width: 10vw;
        height: 8vw;
        margin: 16vw 5vw auto 5vw;
    }

    .tg-view-auth_form {
        display: block;
        float: left;
        width: 75vw;
        height: 80vh;
        margin: 0 2.5vw auto 2.5vw;
        overflow-y: auto;
    }

    .tg-view-auth_block_form {
        display: block;
        float: left;
        width: 40%;
        height: 65vh;
        margin-left: 5%;
        padding: 3%;
    }

    .tg-view-auth_form-info {
        display: block;
        float: left;
        width: 45%;
        height: 65vh;
        margin-left: 5%;
        padding: 3%;
    }
</style>