<template>
    <div id="feedback_body">
        <div id="feedback_content">
            <div id="feedback_title">
                {{feedback_title}}
            </div>
            <div v-if="setAsBugreport !== ''" id="feedback_set_bugreport" v-on:click="setBugreport(feedback_id)">
                {{setAsBugreport}}
            </div>
            <div v-if="setFeedbackClosed !== ''" id="feedback_set_closed" v-on:click="closeFeedback(feedback_id)">
                {{setFeedbackClosed}}
            </div>
            <div id="feedback_person">
                <div id="feedback_person_name">{{feedback_person_name}}</div>
                <div id="feedback_person_lastname">{{feedback_person_lastname}}</div>
            </div>
            <div id="feedback_person_message">{{feedback_person_message}}</div>
        </div>

        <div id="feedback_list_container">
            <div id="feedback_list_title">Feedback list:</div>
            <div id="feedback_list">
                <div id="feedback_list_item" v-for="item in items" v-on:click="getFeedback(item.feedback_id)">
                    <div id="feedback_list_item_person">{{item.feedback_person_name}}
                        {{item.feedback_person_lastname}}
                    </div>
                    <div id="feedback_list_item_id">{{item.feedback_id}}</div>
                    <div id="feedback_list_item_title">{{item.feedback_title}}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import * as axios from "axios";

    export default {
        name: "reviews",
        data: function () {
            return {
                feedback_title: 'Choose a feedback from feedback list at right menu ->',
                feedback_person_name: '',
                feedback_person_lastname: '',
                feedback_person_message: '',
                feedback_id: '',
                setAsBugreport: '',
                setFeedbackClosed: '',
                items: [],
            }
        },

        mounted() {
            this.getFeedbackList()
        },

        methods: {
            getFeedbackList: function () {
                axios({
                    method: 'get',
                    url: 'http://vessteros.beget.tech/api/list/feedback',
                    // headers: {
                    //     'content-type': 'application/form-data',
                    // },
                })
                    .then((response) => {
                        let meh = this.items = [];

                        response.data.forEach(function (element) {
                            meh.push({
                                feedback_title: element.feedback_title,
                                feedback_person_name: element.feedback_person_name,
                                feedback_person_lastname: element.feedback_person_lastname,
                                feedback_person_message: element.feedback_person_message,
                                feedback_id: element.feedback_id,
                            });
                        });
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

            getFeedback: function (feedback_id) {
                let item = this.items.find(function (element, index, array) {
                    return element.feedback_id === feedback_id
                });

                this.feedback_title = item.feedback_title;
                this.feedback_person_name = item.feedback_person_name;
                this.feedback_person_lastname = item.feedback_person_lastname;
                this.feedback_person_message = item.feedback_person_message;
                this.feedback_id = item.feedback_id;
                this.setAsBugreport = 'Пометить, как багрепорт';
                this.setFeedbackClosed = 'Закрыть обращение';
            },

            setBugreport(feedback_id) {
                axios({
                    method: 'post',
                    url: 'http://vessteros.beget.tech/api/feedback/' + feedback_id + '/bugreport/set',
                    // headers: {
                    //     'content-Type': 'application/form-data',
                    // },
                })
                    .then((response) => {
                        console.log(response);
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

            closeFeedback(feedback_id) {
                axios({
                    method: 'post',
                    url: 'http://vessteros.beget.tech/api/feedback/' + feedback_id + '/closed/set',
                    // headers: {
                    //     'content-Type': 'application/form-data',
                    // },
                })
                    .then((response) => {
                        this.getFeedbackList();

                        this.feedback_title = 'Choose a feedback from feedback list at right menu ->';
                        this.feedback_person_name = this.feedback_person_lastname = this.feedback_person_message =
                            this.feedback_id = this.setAsBugreport = this.setFeedbackClosed = '';
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

<style scoped>
    #feedback_body {
        display: block;
        float: left;
        width: 79vw;
        height: 83vh;
        margin: 5vh 3vw 5vh 3vw;
        background: black;
        color: black;
        border: 1px black solid;
        border-right: none;
    }

    #feedback_content {
        display: block;
        float: left;
        width: 75%;
        height: 100%;
        background: white;
    }

    #feedback_list_container {
        display: block;
        float: left;
        width: 25%;
        height: 100%;
        background-color: white;
    }

    #feedback_list_title {
        display: block;
        float: left;
        width: 100%;
        height: 8vh;
        color: white;
        background: black;
        text-align: center;
        font-size: 1.4vw;
        padding: 2vh 0 2vh 0;
    }

    #feedback_list {
        display: block;
        float: left;
        width: 100%;
        height: 74.8vh;
        color: white;
        background: black;
        overflow-x: hidden;
        overflow-y: auto;
    }

    #feedback_title {
        display: block;
        float: left;
        width: 64%;
        height: 7vh;
        font-size: 1.3vw;
        color: black;
        padding: 2vh 0 2vh 2vw;
    }

    #feedback_person {
        display: block;
        float: left;
        width: 100%;
        height: 5vh;
        font-size: 1vw;
        color: black;
        padding: 0 2vw 2vh 2vw;
    }

    #feedback_person_name, #feedback_person_lastname {
        display: block;
        float: left;
        height: 100%;
        margin-right: 0.8vw;
    }

    #feedback_person_message {
        display: block;
        float: left;
        width: 100%;
        height: 71vh;
        padding: 2vh 2vw 2vh 2vw;
        font-size: 0.9vw;
        color: black;
    }

    #feedback_list_item {
        display: block;
        float: left;
        width: 100%;
        height: 17vh;
        color: black;
        background: white;
        margin-top: 1vh;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    #feedback_list_item:hover {
        -webkit-transition: ease 0.3s;
        -moz-transition: ease 0.3s;
        -ms-transition: ease 0.3s;
        -o-transition: ease 0.3s;
        transition: ease 0.3s;
        border-right: 1vw black solid;
    }

    #feedback_list_item_person,
    #feedback_list_item_title,
    #feedback_list_item_id {
        display: block;
        float: left;
        height: 6vh;
    }

    #feedback_list_item_id {
        color: #1f1f1fa1;
        padding: 2vh 1vw 0 1vw;
        font-size: 0.95vw;
        width: 20%;
        text-align: center;
    }

    #feedback_list_item_person {
        padding: 2vh 1vw 0 1vw;
        font-size: 1.1vw;
        width: 70%;
    }

    #feedback_list_item_title {
        padding: 1vh 1vw 1vh 1vw;
        font-size: 0.95vw;
        width: 80%;
    }

    #feedback_set_bugreport, #feedback_set_closed {
        display: block;
        float: left;
        width: 18%;
        height: 7vh;
        text-align: center;
        padding: 3vh 1vw 2vh 1vw;
        color: black;
        cursor: pointer;
    }

    #feedback_set_bugreport:hover,
    #feedback_set_closed:hover {
        border-top: 1vh black solid;
        -webkit-transition: ease 0.5s;
        -moz-transition: ease 0.5s;
        -ms-transition: ease 0.5s;
        -o-transition: ease 0.5s;
        transition: ease 0.5s;
    }
</style>