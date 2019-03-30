<template>
    <div class="welcome_block">
        <!--Блок авторизации-->
        <div v-if="auth" class="welcome_auth_block">
            <!--Авторизация-->
            <auth-block></auth-block>
            <button class="right_block_button" @click="switchBlock()">Регистрация</button>
        </div>

        <!--Блок регистрации-->
        <div v-else class="welcome_register_block">
            <!--Регистрация-->
            <register-block></register-block>
            <button class="right_block_button" @click="switchBlock()">Авторизация</button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                auth: true,
            }
        },
        methods: {
            switchBlock() {
                this.auth = !this.auth;
            }
        },
        mounted() {
            console.log(this.auth);
        }
    }
</script>

<style scoped>

</style>