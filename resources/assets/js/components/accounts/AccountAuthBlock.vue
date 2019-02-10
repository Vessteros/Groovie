<template>
    <div class="auth-block">
        <div
                v-if="showForm"
                v-on:keyup.esc="switchForm"
                class="auth-form">

            <h3>{{ networkTitle }}</h3>

            <input name="email" v-model="login">
            <input name="pass" v-model="password" type="password">

            <input
                    type="submit"
                    v-bind:value="inputValue"
                    @click="authorization">
        </div>
        <div
                v-else
                @click="switchForm"
                class="auth-form dark-banner">
        </div>

        <div>{{result}}</div>
    </div>
</template>

<script>
    export default {
        name: "AccountAuthBlock",

        data: function () {
            return {
                showForm: false,
                networkTitle: 'meh',
                inputValue: 'Авторизировать аккаунт',
                login: '',
                password: '',
                result: '',
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
                        authUrl: 'meh',
                        login: this.login,
                        pass: this.password,
                    }
                })
                    .then((response) => {
                        this.result = response.config;
                        console.log(response);
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
            console.log('Component mounted.')
        }
    }
</script>