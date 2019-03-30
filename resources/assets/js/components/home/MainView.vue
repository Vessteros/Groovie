<template>
    <div class="form-group home-container">
        <div v-if="viewTypes.vk || viewTypes.ig" class="fst-container">
            <div v-if="viewTypes.vk" @click="showView('vk')">
                <vk-view></vk-view>
            </div>
            <div v-if="viewTypes.ig" @click="showView('ig')">
                <ig-view></ig-view>
            </div>
        </div>
        <div>
            <div v-if="viewTypes.tg" @click="showView('tg')">
                <tg-view></tg-view>
            </div>
            <div v-if="viewTypes.vb" @click="showView('vb')">
                <vb-view></vb-view>
            </div>
            <div v-if="viewTypes.wa" @click="showView('wa')">
                <wa-view></wa-view>
            </div>
            <div v-if="viewTypes.fb" @click="showView('fb')">
                <fb-view></fb-view>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "MainView",

        data: function () {
            return {
                viewTypes: {
                    vk: true,
                    tg: true,
                    ig: true,
                    fb: true,
                    vb: true,
                    wa: true,
                },
            }
        },

        methods: {
            showView(network) {
                var key;

                for (key in this.viewTypes) {
                    this.viewTypes[key] = false;
                }

                this.viewTypes[network] = true;
            },

            showViews() {
                var key;

                for (key in this.viewTypes) {
                    this.viewTypes[key] = true;
                }
            }
        }
    }
</script>

<style scoped>
    .home-container {
        display: block;
        width: 80vw;
        height: 80vh;
        margin: 10vh auto auto auto;
        overflow-y: auto;
    }

    .home-container::-webkit-scrollbar-track {
        border-radius: 4px;
    }

    .home-container::-webkit-scrollbar {
        width: 6px;
    }

    .home-container::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background: #303540;
    }

    .home-container:hover::-webkit-scrollbar-thumb {
        background: #9baec8;
    }

    .fst-container {
        display: block;
        float: left;
        width: 20vw;
        height: 40vw;
    }
</style>