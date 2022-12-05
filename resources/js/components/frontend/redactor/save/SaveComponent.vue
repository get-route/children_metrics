<template>
    <div class="col-lg-12 text-center mt-5">
        <button id="donwload" class="btn btn-success m-2 " @click="imgReads(this.imgRead,this.canvas,this.context,this.$store.state.fontRedact.name,this.$store.state.fontRedact.fontSizeName,this.$store.state.fontRedact.font,this.$store.state.fontRedact.topName, this.$store.state.fontRedact.leftName, this.$store.state.fontRedact.colorName, imgNatParams, this.$store.state.urlSite)">Скачать</button>
        <canvas id="canvas" width="2000" height="2000" >

        </canvas>
    </div>
</template>

<script>
    export default {
        name: "Save-Component",
        props:['' +
        'imgNatParams',
        ],

        data(){
            return{
                imgRead:null,
                canvas:null,
                context:null,
            }
        },
        mounted() {
            console.log( this.canvasWight)
        },
        computed:{

        },
        methods:{
            //Method read img and property field component/Ф-я добавляет текст за счет канвас и выводит на экран с заполненными данными из формы.
            imgReads(imgRead,canvas, context, text, sizeFont, styleFont,YPos,XPos,color, imgSize=false, url){
                imgRead = new Image()
                canvas = document.getElementById("canvas")
                context = canvas.getContext("2d")
                imgRead.src = imgSize.currentSrc
                imgRead.onload = function () {
                    context.drawImage(imgRead,0,0)
                    // this.$store.state.fontRedact.font
                    // this.$store.state.fontRedact.fontSizeName
                    // console.log(imgSize)
                    // console.log(imgSize.naturalHeight / imgSize.clientHeight)
                    // console.log("XPOS-"+ XPos)
                    // console.log("YPOS-"+ YPos)
                    // console.log("naturalHeight - "+imgSize.naturalHeight, "ClientHeight - "
                    // +imgSize.clientHeight)
                    // console.log("naturalWidth -"+imgSize.naturalWidth,"clientWidth - "+
                    // imgSize.clientWidth)
                    context.fillStyle = color
                    context.font = sizeFont * (imgSize.naturalHeight / imgSize.clientHeight) +'px '+styleFont
                    context.fillText(text,XPos * (imgSize.naturalWidth/imgSize.clientWidth) - 200, YPos* (imgSize.naturalHeight/imgSize.clientHeight) +50)

                }
            },

        }
    }
</script>

<style scoped>

</style>
