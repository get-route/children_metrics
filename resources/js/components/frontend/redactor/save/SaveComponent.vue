<template>
    <div v-if="imgNatParams" class="col-lg-12 text-center mt-5">


        <button id="download" class="btn btn-success m-2" ref="load_metrics"  @click="imgReads($event,this.imgRead,this.canvas,this.context, imgNatParams, this.$store.state.fontRedact,this.$store.state.ChildFonts )">Скачать </button>
            <canvas id="canvas" hidden>

            </canvas>


    </div>
</template>

<script>
    export default {
        name: "Save-Component",
        props:[
        'imgNatParams',
        ],

        data(){
            return{
                imgRead:null,
                canvas:null,
                context:null,
            }
        },

        methods:{
            //Method read img and property field component/Ф-я добавляет текст за счет канвас и выводит на экран с заполненными данными из формы.
            imgReads(event,imgRead,canvas, context, imgSize,fieldName, fieldChild ){
                imgRead = new Image()
                canvas = document.getElementById("canvas")
                canvas.width = 3508;
                canvas.height = 4961;
                context = canvas.getContext("2d")
                imgRead.src = imgSize.currentSrc
                console.log(fieldName)
                imgRead.onload = function () {
                    context.drawImage(imgRead,0,0)

                    //font.js component
                    context.fillStyle = fieldName.colorName
                    context.font = fieldName.fontSizeName * (imgSize.naturalHeight/imgSize.clientHeight) +'px '+fieldName.font
                   context.fillText(fieldName.name,fieldName.leftName * (imgSize.naturalWidth/imgSize.clientWidth) - fieldName.fontSizeName*(imgSize.naturalHeight/imgSize.clientHeight) * 2, fieldName.topName * (imgSize.naturalHeight/imgSize.clientHeight) + fieldName.fontSizeName*(imgSize.naturalHeight/imgSize.clientHeight))

                    //children.js component
                    context.fillStyle = fieldChild.colorNameChild
                    context.font = fieldChild.fontSizeNameChild * (imgSize.naturalHeight/imgSize.clientHeight) +'px '+fieldChild.fontChild
                    context.fillText(fieldChild.nameChild,fieldChild.leftChildPos * (imgSize.naturalWidth/imgSize.clientWidth) - fieldChild.fontSizeNameChild*(imgSize.naturalHeight/imgSize.clientHeight) * 2, fieldChild.topChildPos * (imgSize.naturalHeight/imgSize.clientHeight) + fieldChild.fontSizeNameChild*(imgSize.naturalHeight/imgSize.clientHeight))

                    //link start
                    var image = canvas.toDataURL();
                    var tmpLink = document.createElement( 'a' );
                    tmpLink.download = 'image.png'; // set the name of the download file
                    tmpLink.href = image;
                    document.body.appendChild( tmpLink );
                    tmpLink.click();
                    document.body.removeChild( tmpLink );
                }
            },

        }
    }
</script>

<style scoped>

</style>
