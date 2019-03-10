<template>
    <div>
        <div>{{lastName}} {{firstName}} {{hash}}</div>
    </div>
</template>

<script>
    export default {
        name: "Authorized",
        props: [
            'content',
        ],

        data: function () {
            return {
                firstName: '',
                lastName: '',
                accessToken: '',
                apiUserId: '',
                expiresIn: '',
                state: '',
                hash: '',
            }
        },

        mounted() {
            this.hash = this.parseUri(window.location.hash);
            console.log(this.hash);

            this.accessToken = this.hash.access_token;
            this.apiUserId = this.hash.user_id;
            this.expiresIn = this.hash.expires_in;
            this.state = this.hash.state;
            axios({
                method: 'post',
                url: '/account/authorized/set',
                data: {
                    accessToken: this.accessToken,
                    apiUserId: this.apiUserId,
                    expiresIn: this.expiresIn,
                    state: this.state,
                }
            })
                .then((response) => {
                    console.log('Ответ сервера');
                    console.log(response);
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
                });
        },

        methods: {
            parseUri(uri) {
                uri = uri.slice(1);
                uri = uri.substring(uri.indexOf('?')+1).split('&');
                var params = {}, pair, d = decodeURIComponent;
                for (var i = uri.length - 1; i >= 0; i--) {
                    pair = uri[i].split('=');
                    params[d(pair[0])] = d(pair[1] || '');
                }

                return params;
            }
        }
    }
</script>

<style scoped>

</style>