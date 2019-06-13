<template>
    <div id="news_body">
        <div id="news_title_container">
            <div id="news_body_title">Формирование новости</div>
            <div id="news_creation_status">{{creationStatus}}</div>
            <div id="news_save" v-on:click="createNews()">Создать</div>
        </div>

        <form id="news_body_content" enctype="multipart/form-data">
            <div class="news_content_column">
                <label class="content_label" for="news_title">Заголовок:</label>
                <input id="news_title" placeholder="Название новостного поста" required>
                <label class="content_label" for="news_text">Новостной текст:</label>
                <textarea id="news_text" required
                          placeholder="Текстовый контент новости, можно использовать пробелы, табуляцию и переносы строк"></textarea>
            </div>

            <div class="news_content_column">
                <label class="content_label padding_10" for="news_title">Прикрепить фото:</label>
                <div id="image_loader">
                    <label for="news_file_upload" id="image_loader_drag_area">
                        <label id="image_loader_title" for="news_file_upload">Перетащите фото в эту область</label>
                        <input id="news_file_upload" type="file" accept="image/*" value="Загрузите фото"
                               v-on:change="(this.files === undefined) ? getFile() : handleFiles(this.files)">
                        <label id="image_loader_btn" for="news_file_upload">Или выберите фото через проводник</label>
                    </label>
                </div>


                <div id="news_visibility">
                    <div id="news_visibility_title">Область видимости:</div>
                    <div class="visibility_item_holder">
                        <input id="news_radio_1" name="news_visibility" type="radio" value="web"
                               v-on:click="setVisibility('news_radio_1')">
                        <label for="news_radio_1">Показывать на сайте</label>
                    </div>
                    <br>
                    <div class="visibility_item_holder">
                        <input id="news_radio_2" name="news_visibility" type="radio" value="app"
                               v-on:click="setVisibility('news_radio_2')">
                        <label for="news_radio_2">Показывать в приложении</label>
                    </div>
                    <br>
                    <div class="visibility_item_holder">
                        <input id="news_radio_3" name="news_visibility" type="radio" value="both"
                               v-on:click="setVisibility('news_radio_3')" checked>
                        <label for="news_radio_3">Показывать везде</label>
                    </div>
                    <br>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import * as axios from "axios";

    export default {
        name: "news",
        data: function () {
            return {
                mainTitle: {},
                dropArea: {},
                textDragIn: {},
                file: null,
                title: {},
                message: {},
                visibility: {},
                area: {},
                creationStatus: '',
            }
        },

        mounted() {
            this.dropArea = document.getElementById('image_loader');
            this.textDragIn = document.getElementById('image_loader_title');
            this.title = document.getElementById('news_title');
            this.message = document.getElementById('news_text');
            this.visibility = document.getElementById('news_radio_3');
            this.area = document.getElementById('image_loader');
            this.area.setAttribute("style", "width:80%");
            this.mainTitle = document.getElementById('news_title_container');

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                this.dropArea.addEventListener(eventName, this.preventDefaults, false)
            });

            ['dragenter', 'dragover'].forEach(eventName => {
                this.dropArea.addEventListener(eventName, this.highlight, false)
            });

            ['dragleave', 'drop'].forEach(eventName => {
                this.dropArea.addEventListener(eventName, this.unhighlight, false)
            });

            this.dropArea.addEventListener('drop', this.handleDrop, false)
        },

        methods: {
            preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            },

            highlight(e) {
                this.dropArea.classList.add('highlight');
                this.textDragIn.classList.add('highlight');
            },

            unhighlight(e) {
                this.dropArea.classList.remove('highlight');
                this.textDragIn.classList.remove('highlight');
            },

            handleDrop(e) {
                let dt = e.dataTransfer;
                let files = dt.files;

                this.handleFiles(files)
            },

            handleFiles(files) {
                ([...files]).forEach(this.uploadFile)
            },

            setVisibility(id) {
                this.visibility = document.getElementById(id);
            },

            getFile() {
                this.file = document.querySelector('#news_file_upload').files[0];

                this.previewFile();
            },

            /**
             * Пока просто перезаписываю файлы, ибо может быть только одно фото
             *
             * @param file
             */
            uploadFile(file) {
                this.file = file;

                this.previewFile()
            },

            previewFile() {
                let reader = new FileReader();
                reader.readAsDataURL(this.file);

                let meh = this;

                reader.onloadend = function () {
                    let img = document.createElement('img');

                    img.style.height = '100%';
                    img.style.backgroundAttachment = 'fixed';
                    img.id = 'loaded_image';

                    let parent = document.getElementById('image_loader_drag_area');

                    meh.area.setAttribute("style", "width:none");

                    img.src = reader.result;

                    if ($('#image_loader_drag_area').children('#image_loader_title').length !== 0) {
                        parent.removeChild(document.getElementById('image_loader_title'));
                    }
                    if ($('#image_loader_drag_area').children('#image_loader_btn').length !== 0) {
                        parent.removeChild(document.getElementById('image_loader_btn'));
                    }
                    if ($('#image_loader_drag_area').children('#loaded_image').length !== 0) {
                        parent.removeChild(document.getElementById('loaded_image'));
                    }

                    parent.appendChild(img);
                }
            },

            createNews() {
                const data = new FormData(document.getElementById('news_body_content'));
                data.append('image', this.file);
                data.append('title', this.title.value);
                data.append('message', this.message.value);
                data.append('visibility', this.visibility.value);

                axios({
                    method: 'post',
                    url: 'http://vessteros.beget.tech/api/news/create',
                    data: data,
                    // headers: {
                    //     'content-Type': 'application/form-data',
                    // },
                })
                    .then((response) => {
                        this.creationStatus = 'Новость создана';
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
    #news_body {
        display: block;
        float: left;
        width: 79vw;
        height: 83vh;
        margin: 5vh 3vw 5vh 3vw;
        background: black;
        color: white;
        border: 1px black solid;
    }

    #news_title_container {
        display: block;
        float: left;
        width: 100%;
        height: 10%;
        background: #000;
        color: #fff;
    }

    #news_body_title {
        display: block;
        float: left;
        width: 25%;
        height: 100%;
        text-align: left;
        padding: 2vh 1vw 1vh 1vw;
        font-size: 1.5vw;
    }

    #news_creation_status {
        display: block;
        float: left;
        width: 60%;
        height: 100%;
        text-align: center;
        padding: 2vh 1vw 1vh 1vw;
        font-size: 1.5vw;
    }

    #news_save {
        display: block;
        float: left;
        text-align: center;
        width: 15%;
        height: 100%;
        padding: 2.3vh 1vw 1vh 1vw;
        cursor: pointer;
        font-size: 1.2vw;
    }

    #news_save:hover {
        background: #fff;
        color: #000;
    }

    #news_body_content {
        display: block;
        float: left;
        width: 100%;
        height: 90%;
        border: 1px black solid;
        color: #000;
        background: white;
    }

    .news_content_column {
        display: block;
        float: left;
        width: 50%;
        height: 100%;
        padding: 1vh 1vw 1vh 1vw;
    }

    .content_label, #news_title {
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

    #news_text {
        display: block;
        float: left;
        width: 100%;
        height: 75%;
        resize: none;
    }

    #news_title, #news_text {
        -webkit-border-radius: 0.2vw;
        -moz-border-radius: 0.2vw;
        border-radius: 0.2vw;
        padding: 0.5vh 0.5vw;
        border: 1px #1f1f1f7a inset;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        outline: black;
    }

    #news_title:focus,
    #news_text:focus {
        border: 2px #1f1f1f7a dashed;
    }

    #image_loader {
        display: block;
        float: left;
        /*width: 80%;*/
        height: 40%;
        margin: 0 10% 1vh 10%;
        border: 0.2vw #1f1f1fa1 dashed;
        border-radius: 0.4vw;
        background: #f6f6f6;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    #image_loader.highlight {
        border: 0.2vw black dashed;
    }

    #image_loader_drag_area {
        display: block;
        float: left;
        width: 100%;
        height: 100%;
        cursor: pointer;
        text-align: center;
    }

    #image_loader_title {
        display: block;
        float: left;
        width: 100%;
        text-align: center;
        font-size: 2vw;
        color: #1f1f1fa1;
        padding: 2vh 0 2vh 0;
        cursor: pointer;
    }

    #image_loader_title.highlight {
        color: black;
    }

    #news_file_upload {
        float: left;
        width: 80%;
        text-align: center;
        margin: 1vh 10% 1vh 10%;
        padding-left: 25%;
        cursor: pointer;
        display: none;
    }

    #image_loader_btn {
        display: block;
        float: left;
        width: 100%;
        text-align: center;
        font-size: 1vw;
        color: #1f1f1fa1;
        padding: 1vh 0 2vh 0;
        cursor: pointer;
    }

    #news_visibility {
        display: block;
        float: left;
        width: 80%;
        margin: 4vh 10% 1vh 10%;
        /*border-left: 0.4vw black solid;*/
        /*padding-left: 2vw;*/
    }

    #news_radio_1,
    #news_radio_2,
    #news_radio_3 {
        display: block;
        float: left;
        width: 1.5vw;
        height: 1.5vw;
        margin: 1.3vh 1vw 1.5vh 1vw;
        cursor: pointer;
    }

    #news_visibility label {
        display: block;
        float: left;
        width: 80%;
        height: 1.5vw;
        margin: 1.2vh 1vw 1.5vh 0;
        padding-top: 0.3vh;
        font-size: 0.8vw;
        cursor: pointer;
    }

    #news_visibility_title {
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