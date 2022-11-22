<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <FontsController
                        dispatchFont="FONT_PROPERTY"
                        dispatchName="NAME_PROPERTY"
                        dispatchSizeFont = "FONT_SIZE"
                        dispatchColor = "FONT_COLOR"
                        :namesField = this.$store.state.fontRedact.name
                        :fontSizeField = this.$store.state.fontRedact.fontSizeName
                        :fontColorField=this.$store.state.fontRedact.colorName
                        h2="Настройка имени"
                        faqButton="'Укажите имя, которое будет использоваться при заголовки метрики. При желании можно нажмать на значок шестеренки и настроить текстовую область.'"
                        formPlaceholder="Это тоже"
                    ></FontsController>
                    <FontsController
                    dispatchFont="FONT_PROPERTY_CHILD"
                    dispatchName="NAME_PROPERTY_CHILD"
                    dispatchSizeFont = "FONT_SIZE_CHILD"
                    dispatchColor = "FONT_COLOR_CHILD"
                    :namesField = this.$store.state.ChildFonts.nameChild
                    :fontSizeField = this.$store.state.ChildFonts.fontSizeNameChild
                    :fontColorField=this.$store.state.ChildFonts.colorNameChild
                    h2="Настройка пола"
                    faqButton="'Укажите имя'"
                    formPlaceholder="Задайте имя"
                ></FontsController>
                </div>






                <p>Имя</p>

                <p>Дата</p>
                <p>Время</p>
                <p>День недели</p>

                <p>Вес</p>
                <p>Рост</p>

                <p>Мама</p>
                <p>Папа</p>
                <p>братья</p>
                <p>сестры</p>

                <p>Город</p>
                <p>год соб</p>
                <p>Знак Зодиака</p>
                <p>доп</p>


            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-lg-12">

                <p :class="this.$store.state.fontRedact.font" :style="'font-size:' + this.$store.state.fontRedact.fontSizeName + 'px'+';'+ 'color:' + this.$store.state.fontRedact.colorName">
                {{this.$store.state.fontRedact.name}}
                    {{this.$store.state.fontRedact.fontSizeName}}

                </p>
            </div>
            <div class="col-lg-12">

                <p :class="this.$store.state.ChildFonts.fontChild" :style="'font-size:' + this.$store.state.ChildFonts.fontSizeNameChild + 'px'+';'+ 'color:' + this.$store.state.ChildFonts.colorNameChild">
                    {{this.$store.state.ChildFonts.nameChild}}
                    {{this.$store.state.ChildFonts.fontSizeNameChild}}

                </p>
            </div>
        </div>
    </div>



</template>

<script>
    import FontsController from "./fonts/FontsController.vue";
    export default {
        name: "Redactor-Index",
        components: {FontsController},

        computed: {
            btnStyles() {
                return {
                    font_size: 'font-size:' + this.$store.state.fontRedact.fontSizeName + 'px',
                };
            },
        },

    }
</script>

<style >
    .segoe-font{
        font-family: "Segoe Script";
    }
    .verdana-font{
        font-family: "Verdana";
    }
    .monotype-corsiva{
        font-family: "Monotype Corsiva";
    }
    .bounce-enter-active {
        animation: bounce-in .5s;
    }
    .bounce-leave-active {
        animation: bounce-in .5s reverse;
    }
    @keyframes bounce-in {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.5);
        }
        100% {
            transform: scale(1);
        }
    }
    .hr{
        border-bottom: #190b34 dashed 2px;
        color: #190b34;
        font-family: "Segoe Script";
        opacity: 70%;
    }
</style>
