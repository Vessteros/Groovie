<template>
    <div class="vk-view-container" :class="{'vk-view-auth_form' : !showBanner}">
        <div v-if="showBanner" class="vk-view-banner" @click="checkUserAuth">
            <img class="vk-view-banner-img" src="http://vessteros.beget.tech/resources/img/views/vklogo.png">
        </div>

        <div v-else>
            <div v-if="!userAuthorized">
                <h3 class="auth-block-title">{{ networkTitle }}</h3>
                <a href="#" class="auth-block-close" @click="closeBanner">X</a>

                <p class="auth-block-vk_api_notice">
                    Web-приложение «Groovie» является "stand-alone" приложением,
                    запрашивающим доступ к персональным данным ваших социальных сетей для функционирования и упрощения
                    жизни своих пользователей.
                    В тоже время наш сервис гарантирует конфиденциальность данных и ни в коем случае не использует их в
                    своих целях или как либо еще.
                    Каждый сервис стремится обезопасить своих пользователей от постороннего вмешательства и кражи
                    персональных данных,
                    так и политика <a href="https://vk.com/" target="_blank">vk.com</a> накладывает некоторые
                    ограничения на работу сторонних сервисов со своим API.
                    На данный момент для польного функционирования "stand-alone" приложения «Groovie» необходим
                    специальный токен с достаточной привилегией доступа.
                    Если Вы по какой-либо причине не доверяете нашему сервису или очень бережно относитесь к своим
                    личным данным, то для использования сервиса «Groovie»
                    Вы можете установить наше мобильное приложение. В случае если вы головы пойти на риск (😏), то после
                    успешной авторизации сервис <a href="https://vk.com/" target="_blank">vk.com</a> перенаправит вас на
                    страницу на своем домене, в url которого будет находиться привилегированный токен, который
                    необходимо вставить в поле ниже.
                    Напоминаем вам, что беспокоится о приватности своей личной информации правильно, и, если у Вас есть
                    какие-либо сомнения, то советуем оставить авторизацию в сервисе <a href="https://vk.com/"
                                                                                       target="_blank">vk.com</a> через
                    наше web-приложение до момента, когда Вы установите наше мобильное приложение:)
                </p>
                <div class="vk-view-auth_container">
                    <a v-bind:href="redirectUrl" class="auth-block-vk_auth" target="_blank">Авторизоваться</a>
                    <div class="auth-block-token_form" v-if="showTokenForm">
                        <input autocomplete="off" v-on:keyup.enter="setUserToken" v-model="apiUserToken"
                               class="form-control" name="token" placeholder="Привилегированный токен"/>
                    </div>
                    <div class="auth-block-token_form dark-banner" v-else @click="showTokenForm=true">
                        Token
                    </div>
                </div>
            </div>
            <div v-else>
                {{userInfo}}
                <a href="#" class="auth-block-close" @click="closeBanner">X</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Vk-view",

        data: function () {
            return {
                showBanner: true,
                showTokenForm: false,
                userAuthorized: false,
                networkTitle: 'ВКонтакте',
                userInfo: {},
                redirectUrl: '',
                apiUserToken: '',
            }
        },

        methods: {
            closeBanner() {
                this.showBanner = true;
                this.showTokenForm = false;
                location.reload();
            },

            setUserToken() {
                axios({
                    method: 'post',
                    url: '/account/authorized/set',
                    data: {
                        networkId: 'vk',
                        apiUserToken: this.apiUserToken,
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.userInfo = response.data;
                        this.userAuthorized = true;
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.log(0);
                            console.log(error.response);
                        } else if (error.request) {
                            console.log(1);
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                        console.log(error.config);
                    });
            },

            checkUserAuth() {
                axios({
                    method: 'post',
                    url: '/account/auth/check',
                    data: {
                        networkId: 'vk',
                    }
                })
                    .then((response) => {
                        console.log(response);
                        if (response.data.length !== 0)  {
                            this.showBanner = false;
                            this.userAuthorized = true;
                            this.userInfo = response.data;
                        } else {
                            this.authorization();
                        }
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.log(0);
                            console.log(error.response);
                        } else if (error.request) {
                            console.log(1);
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                        console.log(error.config);
                    });
            },

            authorization() {
                this.showBanner = false;
                this.inputValue = 'Авторизация...';

                axios({
                    method: 'post',
                    url: '/account/auth',
                    headers: {
                        'content-type': 'application/form-data',
                    },
                    data: {
                        networkId: 'vk',
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.redirectUrl = response.data;
                        this.showForm = true;
                    })
                    .catch((error) => {
                        if (error.response) {
                            console.log(0);
                            console.log(error.response);
                        } else if (error.request) {
                            console.log(1);
                            console.log(error.request);
                        } else {
                            console.log('Error', error.message);
                        }
                        console.log(error.config);
                    });
            },
        }
    }
</script>

<style scoped>
    .vk-view-container {
        display: block;
        float: left;
        width: 20vw;
        height: 20vw;
        cursor: pointer;
        background: #303540;
    }

    .vk-view-banner {
        background: #4c75a3;
        width: 100%;
        height: 100%;
    }

    .vk-view-banner-img {
        display: block;
        float: left;
        width: 10vw;
        height: 8vw;
        margin: 6vw 5vw auto 5vw;
    }

    .vk-view-auth_container {
        display: block;
        float: left;
        width: 30vw;
        height: 100%;
        margin-left: 3vw;
    }

    .vk-view-auth_form {
        display: block;
        float: left;
        width: 75vw;
        height: 80vh;
        margin: 0 12% auto 12%;
        overflow-y: auto;
    }
</style>