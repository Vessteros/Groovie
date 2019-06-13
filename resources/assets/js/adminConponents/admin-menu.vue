<template>
    <div id="admin_menu">
        <a id="item1" href="#" :onclick="setSelected(1)" v-bind:class="{menu_item_selected: item1selected}">Feedback</a>
        <a id="item2" href="#" :onclick="setSelected(2)" v-bind:class="{menu_item_selected: item2selected}">News</a>
        <a id="item3" href="#" :onclick="setSelected(3)" v-bind:class="{menu_item_selected: item3selected}">Updates</a>
    </div>
</template>

<script>
    export default {
        name: "admin-menu",
        data: function () {
            return {
                item1selected: true,
                item2selected: false,
                item3selected: false
            }
        },

        methods: {
            setSelected(item) {
                switch (item) {
                    case 1: {
                        this.item1selected = true;
                        this.item2selected = false;
                        this.item3selected = false;
                    }
                        break;

                    case 2: {
                        this.item1selected = false;
                        this.item2selected = true;
                        this.item3selected = false;
                    }
                        break;

                    case 3: {
                        this.item1selected = false;
                        this.item2selected = false;
                        this.item3selected = true;
                    }
                        break;
                }
            }
        }
    }
</script>

<style scoped>

</style>