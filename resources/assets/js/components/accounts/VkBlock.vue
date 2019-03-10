<template>
    <div class="auth-block">
        <div v-if="!accountConnected">
            <div v-if="showForm">
                <h3 class="auth-block-title">{{ networkTitle }}</h3>
                <a href="#" class="auth-block-close" @click="closeBanner">X</a>
                <a v-bind:href="redirectUrl" class="auth-block-vk_auth" target="_blank">Авторизоваться</a>
                <p class="auth-block-vk_api_notice">
                    Web-приложение «Groovie» является "stand-alone" приложением,
                    запрашивающим доступ к персональным данным ваших социальных сетей для функционирования и упрощения жизни своих пользователей.
                    В тоже время наш сервис гарантирует конфиденциальность данных и ни в коем случае не использует их в своих целях или как либо еще.
                    Каждый сервис стремится обезопасить своих пользователей от постороннего вмешательства и кражи персональных данных,
                    так и политика <a href="https://vk.com/" target="_blank">vk.com</a> накладывает некоторые ограничения на работу сторонних сервисов со своим API.
                    На данный момент для польного функционирования "stand-alone" приложения «Groovie» необходим специальный токен с достаточной привилегией доступа.
                    Если Вы по какой-либо причине не доверяете нашему сервису или очень бережно относитесь к своим личным данным, то для использования сервиса «Groovie»
                    Вы можете установить наше мобильное приложение. В случае если вы головы пойти на риск (😏), то после успешной авторизации сервис <a href="https://vk.com/" target="_blank">vk.com</a> перенаправит вас на страницу на своем домене, в url которого будет находиться привилегированный токен, который необходимо вставить в поле ниже.
                    Напоминаем вам, что беспокоится о приватности своей личной информации правильно, и, если у Вас есть какие-либо сомнения, то советуем оставить авторизацию в сервисе <a href="https://vk.com/" target="_blank">vk.com</a> через наше web-приложение до момента, когда Вы установите наше мобильное приложение:)
                </p>
                <div class="auth-block-token_form" v-if="showTokenForm">
                    <input autocomplete="off" v-on:keyup.enter="setUserToken" v-model="apiUserToken" class="form-control" name="token" placeholder="Привилегированный токен"/>
                </div>
                <div class="auth-block-token_form dark-banner" v-else @click="showToken">
                    Token
                </div>
            </div>
            <div
                    v-else
                    @click="authorization"
                    class="auth-form dark-banner">
                <img src="http://vessteros.beget.tech/resources/img/vk.png" class="auth-form-network_img">
                <h2 class="auth-form-network_title">{{networkTitle}}</h2>
            </div>
        </div>
        <div v-else>
            <h2>{{userInfo.first_name}} {{userInfo.last_name}}</h2>
            {{userInfo}}
        </div>
    </div>
</template>

<script>
    export default {
        name: "VkBlock",
        props: [
            'content'
        ],

        data: function () {
            return {
                showForm: false,
                networkTitle: this.content.networkTitle,
                inputValue: 'Авторизировать аккаунт',
                redirectUrl: '',
                showTokenForm: false,
                apiUserToken: '',
                accountConnected: false,
                userInfo: [],
            }
        },

        mounted() {
            this.checkUserAuth();
        },

        methods: {
            closeBanner() {
                this.showForm = false;
                this.showTokenForm = false;
            },

            showToken() {
                this.showTokenForm = true;
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
                        this.accountConnected = true;
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
                    method: 'get',
                    url: '/account/auth/check',
                    data: {
                        networkId: 'vk',
                    }
                })
                    .then((response) => {
                    console.log(response);
                    this.redirectUrl = response.data;
                    //this.showForm = true;
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
            }
        }
    }
</script>