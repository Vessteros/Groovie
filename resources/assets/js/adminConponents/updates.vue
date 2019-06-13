<template>
    <div id="updates_body">
        <div id="updates_title_container">
            <div id="updates_body_title">Составление описания обновления</div>
            <div id="updates_creation_status">{{creationStatus}}</div>
            <div id="updates_save" v-on:click="createUpdate()">Создать</div>
        </div>

        <form id="updates_body_content" enctype="multipart/form-data">
            <div class="updates_content_column">
                <label class="content_label" for="updates_title">Заголовок:</label>
                <input id="updates_title" placeholder="Оглавление обновления" required>
                <label class="content_label" for="updates_text">Описание обновления:</label>
                <textarea id="updates_text" required
                          placeholder="Текстовое описание обновления, можно использовать пробелы, табуляцию и переносы строк"></textarea>
            </div>

            <div class="updates_content_column">
                <label class="content_label padding_10" for="updates_title">Список изменений:</label>
                <div id="update_items_list">
                    <div v-bind:key="item.id" class="update_item" v-for="item in items">
                        <input v-bind:id="item.id" class="update_item_input" v-bind:name="item.name" v-bind:placeholder="item.placeholder" v-on:change="setValue(item.id)">
                        <div class="update_item_delete" v-on:click="deleteUpdateListItem(item.id)">x</div>
                    </div>
                </div>
                <div id="updates_add_item_btn" v-on:click="addUpdateListItem()">+</div>

                <div id="updates_visibility">
                    <div id="updates_visibility_title">Область видимости:</div>
                    <div class="visibility_item_holder">
                        <input id="updates_radio_1" name="updates_visibility" type="radio" value="web"
                               v-on:click="setVisibility('updates_radio_1')">
                        <label for="updates_radio_1">Показывать на сайте</label>
                    </div>
                    <br>
                    <div class="visibility_item_holder">
                        <input id="updates_radio_2" name="updates_visibility" type="radio" value="app"
                               v-on:click="setVisibility('updates_radio_2')">
                        <label for="updates_radio_2">Показывать в приложении</label>
                    </div>
                    <br>
                    <div class="visibility_item_holder">
                        <input id="updates_radio_3" name="updates_visibility" type="radio" value="both"
                               v-on:click="setVisibility('updates_radio_3')" checked>
                        <label for="updates_radio_3">Показывать везде</label>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "updates",
        data: function () {
            return {
                creationStatus: '',
                items: [
                    {
                        id: 'item_1',
                        placeholder: 'Изменение 1',
                        name: 'update_item_1',
                        value: '',
                    },
                    {
                        id: 'item_2',
                        placeholder: 'Изменение 2',
                        name: 'update_item_2',
                        value: '',
                    },
                    {
                        id: 'item_3',
                        placeholder: 'Изменение 3',
                        name: 'update_item_3',
                        value: '',
                    },
                    {
                        id: 'item_4',
                        placeholder: 'Изменение 4',
                        name: 'update_item_4',
                        value: '',
                    },
                    {
                        id: 'item_5',
                        placeholder: 'Изменение 5',
                        name: 'update_item_5',
                        value: '',
                    },
                ],

                title: {},
                message: {},
                visibility: {},
                mainTitle: {},
                data: {},
            }
        },

        mounted() {
            this.mainTitle =  document.getElementById('updates_title_container');
            this.title = document.getElementById('updates_title');
            this.message = document.getElementById('updates_text');
            this.visibility = document.getElementById('updates_radio_3');
        },

        methods: {
            addUpdateListItem() {
                let count = this.items.length + 1;

                this.items.push({
                    id: 'item_' + count,
                    placeholder: 'Изменение ' + count,
                    name: 'update_item_' + count,
                },);
            },

            setVisibility(id) {
                this.visibility = document.getElementById(id);
            },

            setValue(id) {
                for (let i = 0; i < this.items.length; i++) {
                    if (this.items[i].id === id) {
                        this.items[i].value = document.getElementById(id).value;
                        break;
                    }
                }
            },

            deleteUpdateListItem(id) {
                this.items = this.items.filter((item) => item.id !== id);

                for (let i = 0; i < this.items.length; i++) {
                    let index = i + 1;
                    this.items[i] = {
                        id: 'item_' + index,
                        placeholder: 'Изменение ' + index,
                        name: 'update_item_' + index,
                    };
                }
            },

            createUpdate() {
                this.data = {};
                this.setItems();
                this.setFormData();

                this.sendData();
            },

            setItems() {
                let meh = [];

                this.items.forEach(function (item) {
                    if (item.value !== '') {
                        meh.push(item.value);
                    }
                });

                if (meh.length === 0) {
                    this.creationStatus = 'Не указаны изменения';
                    this.mainTitle.style.background = '#E33B35';

                    setTimeout(() => {
                        this.creationStatus = '';
                        this.mainTitle.style.background = 'black';
                    },2000);
                } else {
                    this.data.items = meh;
                }

                console.log(this.data);
            },

            setFormData() {
                this.data.title = this.title.value;
                this.data.message = this.message.value;
                this.data.visibility = this.visibility.value;
            },

            sendData() {
                axios({
                    method: 'post',
                    url: 'http://vessteros.beget.tech/api/update/create',
                    data: this.data,
                })
                    .then((response) => {
                        this.creationStatus = 'Обновление записано';
                        this.mainTitle.style.background = '#35E342';
                        setTimeout(this.dispel,2000);
                    })
                    .catch((error) => {
                        if (error.response) {
                            this.creationStatus = error.response.data.problem.message;
                            this.mainTitle.style.background = '#E33B35';
                            setTimeout(this.dispel,2000);
                        }
                    });
            },

            dispel() {
                this.creationStatus = '';
                this.title.value = '';
                this.message.value = '';
                this.visibility.value = '';
                this.mainTitle.style.background = 'black';
            }
        }
    }
</script>

<style scoped>
    #updates_body {
        display: block;
        float: left;
        width: 79vw;
        height: 83vh;
        margin: 5vh 3vw 5vh 3vw;
        background: black;
        color: white;
        border: 1px black solid;
    }

    #updates_title_container {
        display: block;
        float: left;
        width: 100%;
        height: 10%;
        background: #000;
        color: #fff;
    }

    #updates_body_title {
        display: block;
        float: left;
        width: 35%;
        height: 100%;
        text-align: left;
        padding: 2vh 1vw 1vh 1vw;
        font-size: 1.5vw;
    }

    #updates_creation_status {
        display: block;
        float: left;
        width: 50%;
        height: 100%;
        text-align: center;
        padding: 2vh 1vw 1vh 1vw;
        font-size: 1.5vw;
    }

    #updates_save {
        display: block;
        float: left;
        text-align: center;
        width: 15%;
        height: 100%;
        padding: 2.3vh 1vw 1vh 1vw;
        cursor: pointer;
        font-size: 1.2vw;
    }

    #updates_save:hover {
        background: #fff;
        color: #000;
    }

    #updates_body_content {
        display: block;
        float: left;
        width: 100%;
        height: 90%;
        border: 1px black solid;
        color: #000;
        background: white;
    }

    .updates_content_column {
        display: block;
        float: left;
        width: 50%;
        height: 100%;
        padding: 1vh 1vw 1vh 1vw;
    }

    .content_label, #updates_title {
        display: block;
        float: left;
        width: 100%;
        height: 6%;
        margin-bottom: 1vh;
        font-size: 1vw;
    }

    .content_label {
        padding-top: 1vh;
    }

    .padding_10 {
        padding-left: 10% !important;
    }

    #updates_text {
        display: block;
        float: left;
        width: 100%;
        height: 75%;
        resize: none;
    }

    #updates_title,
    #updates_text,
    .update_item {
        -webkit-border-radius: 0.2vw;
        -moz-border-radius: 0.2vw;
        border-radius: 0.2vw;
        padding: 0.5vh 0.5vw;
        border: 1px #1f1f1f7a inset;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        outline: black;
    }

    #updates_title:focus,
    #updates_text:focus,
    .update_item:focus {
        border: 2px #1f1f1f7a dashed;
    }

    #update_items_list {
        display: block;
        float: left;
        width: 85%;
        max-height: 46%;
        margin: 0 auto 1vh 10%;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .update_item {
        display: block;
        float: left;
        width: 95%;
        height: 4.6vh;
        margin-bottom: 2vh;
        margin-right: 5%;
        font-size: 1vw;
    }

    #updates_add_item_btn {
        display: block;
        float: left;
        width: 80.8%;
        height: 3.3vw;
        text-align: center;
        font-size: 2vw;
        color: #1f1f1f7a;
        margin: 0 auto 1vh 10%;
        border: 2px #1f1f1f7a dashed;
        border-radius: 0.3vw;
        cursor: pointer;
        background: #f6f6f6;
    }

    #updates_add_item_btn:hover {
        color: black;
        border: 2px black dashed;
    }

    .update_item_input {
        display: block;
        float: left;
        width: 95%;
        height: 100%;
        border: none;
        outline: none;
    }

    .update_item_delete {
        display: block;
        float: left;
        width: 5%;
        height: 100%;
        color: #5a4c4a;
        text-align: center;
        cursor: pointer;
    }

    .update_item_delete:hover {
        color: #ff000f;
    }

    #updates_visibility {
        display: block;
        float: left;
        width: 80%;
        margin: 2vh 10% 1vh 10%;
        /*border-left: 0.4vw black solid;*/
        /*padding-left: 2vw;*/
    }

    #updates_radio_1,
    #updates_radio_2,
    #updates_radio_3 {
        display: block;
        float: left;
        width: 1.5vw;
        height: 1.5vw;
        margin: 1.3vh 1vw 1.5vh 1vw;
        cursor: pointer;
    }

    #updates_visibility label {
        display: block;
        float: left;
        width: 80%;
        height: 1.5vw;
        margin: 1.2vh 1vw 1.5vh 0;
        padding-top: 0.3vh;
        font-size: 0.8vw;
        cursor: pointer;
    }

    #updates_visibility_title {
        display: block;
        float: left;
        width: 100%;
        height: 15%;
        font-size: 1vw;
        margin-bottom: 1vh;
    }

    .visibility_item_holder {
        display: block;
        float: left;
        width: 100%;
        height: 2.9vw;
        cursor: pointer;
        -webkit-transition: ease 0.5s;
        -moz-transition: ease 0.5s;
        -ms-transition: ease 0.5s;
        -o-transition: ease 0.5s;
        transition: ease 0.5s;
    }

    .visibility_item_holder:hover {
        border-left: 0.4vw black solid;
        -webkit-transition: ease 0.5s;
        -moz-transition: ease 0.5s;
        -ms-transition: ease 0.5s;
        -o-transition: ease 0.5s;
        transition: ease 0.5s;
    }
</style>