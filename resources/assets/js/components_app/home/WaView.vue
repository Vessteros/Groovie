<template>
    <div class="wa-view-container" :class="{'wa-view-auth_form' : !showBanner}">
        <div v-if="showBanner" class="wa-view-banner" @click="showBanner=!showBanner">
            <img class="wa-view-banner-img" src="http://vessteros.beget.tech/resources/img/views/walogo.png">
        </div>

        <div v-else>
            <h3 class="auth-block-title">{{ networkTitle }}</h3>
            <a href="#" class="auth-block-close" @click="closeBanner">X</a>

            <form class="wa-view-auth_block_form">
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
            <p class="wa-view-auth_form-info">
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
        name: "WaView",
        data: function () {
            return {
                showBanner: true,
                networkTitle: 'WhatsApp',
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
    .wa-view-container {
        display: block;
        float: left;
        width: 20vw;
        height: 20vw;
        cursor: pointer;
        background: #303540;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
    }
    .wa-view-banner {
        background: #0d9f16;
        width: 100%;
        height: 100%;
    }
    .wa-view-banner-img {
        display: block;
        float: left;
        width: 10vw;
        height: 10vw;
        margin: 5vw 5vw auto 5vw;
    }
    .wa-view-auth_form {
        display: block;
        float: left;
        width: 75vw;
        height: 80vh;
        margin: 0 2.5vw auto 2.5vw;
        overflow-y: auto;
    }

    .wa-view-auth_block_form {
        display: block;
        float: left;
        width: 40%;
        height: 65vh;
        margin-left: 5%;
        padding: 3%;
    }

    .wa-view-auth_form-info {
        display: block;
        float: left;
        width: 45%;
        height: 65vh;
        margin-left: 5%;
        padding: 3%;
    }
</style>