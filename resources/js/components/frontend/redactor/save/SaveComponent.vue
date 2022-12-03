<template>
    <div class="col-lg-12 text-center mt-5">
        <button id="donwload" class="btn btn-success m-2 " @click="imgReads(this.imgRead,this.canvas,this.context,this.$store.state.fontRedact.name,this.$store.state.fontRedact.fontSizeName,this.$store.state.fontRedact.font,this.$store.state.fontRedact.topName, this.$store.state.fontRedact.leftName)">Скачать</button>

        <canvas id="canvas" width="1000" height="1000" >

        </canvas>
    </div>
</template>

<script>
    export default {
        name: "Save-Component",
        data(){
            return{
                imgRead:null,
                canvas:null,
                context:null,
            }
        },
        methods:{
            //Method read img and property field component/Ф-я добавляет текст за счет канвас и выводит на экран с заполненными данными из формы.
            imgReads(imgRead,canvas, context, text, sizeFont, styleFont,YPos,XPos,){
                imgRead = new Image()
                canvas = document.getElementById("canvas")
                context = canvas.getContext("2d")
                imgRead.src = 'public/Frontend/img/metrica/metrika.jpg'
                imgRead.onload = function () {
                    context.drawImage(imgRead,0,0)
                    // this.$store.state.fontRedact.font
                    // this.$store.state.fontRedact.fontSizeName
                    console.log(sizeFont)
                    context.fillStyle = "#0808a1"
                    context.font = sizeFont*5+'px '+styleFont
                    context.fillText(text,XPos,YPos)


                }


            }

        }
    }
</script>

<style scoped>

</style>
