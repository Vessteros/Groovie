<template>
    <div class="auth-block">
        <div
                v-if="showForm"

                class="auth-form">

            <h3>{{ networkTitle }}</h3>

            <input name="email" v-model="login">
            <input name="pass" v-model="password" type="password">

            <input  v-if="redirectUrl === ''"
                    type="submit"
                    v-bind:value="inputValue"
                    @click="authorization">

            <a v-else target="_blank" v-bind:href="redirectUrl">Авторизоваться</a>
        </div>
        <div
                v-else
                @click="switchForm"
                class="auth-form dark-banner">
        </div>
    </div>
</template>

<script>
    export default {
        name: "AccountAuthBlock",

        props: [
            'content'
        ],

        data: function () {
            return {
                showForm: false,
                networkTitle: this.content.networkTitle,
                inputValue: 'Авторизировать аккаунт',
                login: '',
                password: '',
                redirectUrl: '',
            }
        },

        methods: {
            switchForm() {
                this.showForm = !this.showForm;
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
                        authorizationUrl: this.content.authorizationUrl,
                        login: this.login,
                        password: this.password,
                        networkId: 'vk',
                        clientId: 94895684,
                        state: 'secret_state_code',
                    }
                })
                    .then((response) => {
                        console.log(response);
                        this.redirectUrl = response.data;
                        this.inputValue = 'Авторизировать аккаунт';
                    })
                    .catch((error) => {
                        // Error
                        if (error.response) {
                            // The request was made and the server responded with a status code
                            // that falls out of the range of 2xx
                            // console.log(error.response.data);
                            // console.log(error.response.status);
                            // console.log(error.response.headers);
                        } else if (error.request) {
                            // The request was made but no response was received
                            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log(error.request);
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log('Error', error.message);
                        }
                        console.log(error.config);
                    });
            }
        },

        mounted() {
            console.log(this.content)
        }
    }
</script>