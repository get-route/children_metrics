<template>
    <div v-if="imgNatParams" class="col-lg-9 text-center mt-5">
        <button id="download" class="btn btn-success m-2" ref="load_metrics"  @click="imgReads(
//          this.stateMetric(this.$store.state.prestart,
// this.$store.state.start,
// this.$store.state.progress,
// this.$store.state.progressTwo,
// this.$store.state.progressThree,
// this.$store.state.finish),
        $event,
        this.imgRead,
        this.canvas,
        this.context,
        imgNatParams,
        this.adaptivePosition,
        this.$store.state.fontRedact,
        this.$store.state.ChildFonts,
        this.$store.state.Brother,
        this.$store.state.AddInfo,
        this.$store.state.Birthday,
        this.$store.state.Father,
        this.$store.state.Height,
        this.$store.state.Horo,
        this.$store.state.Mother,
        this.$store.state.Sister,
        this.$store.state.Town,
        this.$store.state.WatchBirthday,
        this.$store.state.Week,
        this.$store.state.Weight,
        this.$store.state.YearsName,
        )">Скачать </button>
        <div v-if="spinner" class="spinner-border text-success col-lg-3" role="status">
            <span class="visually-hidden">Загрузка...</span>

        </div>
        <div style="color: #b1b1b1">
            <p>{{this.start}}</p>
            <p>{{this.progress}}</p>
            <p>{{this.progressTwo}}</p>
            <p>{{this.progressThree}}</p>
            <p>{{this.finish}}</p>
        </div>


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
                spinner:false,
                start:null,
                finish:null,
                progress:null,
                progressTwo:null,
                progressThree:null,
            }
        },
    computed:{

    }
    ,
        methods:{
            //Method read img and property field component/Ф-я добавляет текст за счет канвас и выводит на экран с заполненными данными из формы.
            imgReads(event,imgRead,canvas, context, imgSize,adaptive,fieldName, fieldChild,fieldBrother, fieldAddInfo, fieldBirthday, fieldFather, fieldHeight, fieldHoro, fieldMother, fieldSister, fieldTown, fieldWatchBirthday, fieldWeek, fieldWeight, fieldYearsName){

                imgRead = new Image()
                canvas = document.getElementById("canvas")
                canvas.width = 3508;
                canvas.height = 4961;
                context = canvas.getContext("2d")
                imgRead.src = imgSize.currentSrc
                // this.start = this.$store.state.start
                //console.log(this.$store.state.start)
                //console.log(load)
                //this.start = 1

                //this.spinner = true
                //var xhr = new XMLHttpRequest();
                //console.log($refs)
                // обработчик для отправки
                // xhr.onprogress = function(event) {
                //
                //     alert( 'Получено с сервера ' + event.loaded + ' байт из ' + event.total );
                //
                // }

                    // setTimeout(()=>{
                    //     this.finish = this.$store.state.finish
                    // },2000);
                //Info blocks state downloads...
                this.spinner = true
                setTimeout(()=>{
                    this.start =  this.$store.state.start
                },200);

                setTimeout(()=>{
                    this.progress = this.$store.state.progress
                    this.progressTwo = this.$store.state.progressTwo
                    this.progressThree=this.$store.state.progressThree
                },3000);
                setTimeout(()=>{
                    this.finish =  this.$store.state.finish
                },5000);

                setTimeout(()=>{
                    this.finish =  null
                    this.start =  null
                    this.progress = null
                    this.progressTwo = null
                    this.progressThree=null
                    this.spinner = false
                },12000);
                imgRead.onload = function () {

                    context.drawImage(imgRead,0,0)
                    var ParamsHeight = imgSize.naturalHeight/imgSize.clientHeight
                    var ParamsWidth = imgSize.naturalWidth/imgSize.clientWidth
                    var coefficientWidthHeight = imgSize.naturalWidth/imgSize.clientHeight


                    //font.js component --fieldName--
                    context.fillStyle = fieldName.colorName
                    context.font = fieldName.fontSizeName * (ParamsWidth) +'px '+fieldName.font
                   context.fillText(fieldName.name,(fieldName.leftName * (coefficientWidthHeight)+fieldName.leftName) -((fieldName.fontSizeName * (ParamsHeight))), ((ParamsHeight)* fieldName.topName ) +(fieldName.fontSizeName * (ParamsWidth)))

                    //children.js component --fieldChild--
                    context.fillStyle = fieldChild.colorNameChild
                    context.font = fieldChild.fontSizeNameChild * (ParamsWidth) +'px '+fieldChild.fontChild

                    context.fillText(fieldChild.nameChild,(fieldChild.leftChildPos * (coefficientWidthHeight)+fieldChild.leftChildPos) -((fieldChild.fontSizeNameChild * (ParamsHeight))), ((ParamsHeight)* fieldChild.topChildPos ) +(fieldChild.fontSizeNameChild * (ParamsWidth)))

                    //brother.js component --fieldBrother--
                    context.fillStyle = fieldBrother.colorNameBrother
                    context.font = fieldBrother.fontSizeNameBrother * (ParamsWidth) +'px '+fieldBrother.fontBrother

                    context.fillText(fieldBrother.nameBrother,(fieldBrother.leftBrotherPos * (coefficientWidthHeight)+fieldBrother.leftBrotherPos) -((fieldBrother.fontSizeNameBrother * (ParamsHeight))), ((ParamsHeight)* fieldBrother.topBrotherPos ) +(fieldBrother.fontSizeNameBrother * (ParamsWidth)))

                    //addinfo.js component --fieldAddnfo--
                    context.fillStyle = fieldAddInfo.colorNameAddInfo
                    context.font = fieldAddInfo.fontSizeNameAddInfo * (ParamsWidth) +'px '+fieldAddInfo.fontAddInfo

                    context.fillText(fieldAddInfo.nameAddInfo,(fieldAddInfo.leftAddInfoPos * (coefficientWidthHeight)+fieldAddInfo.leftAddInfoPos) -((fieldAddInfo.fontSizeNameAddInfo * (ParamsHeight))), ((ParamsHeight)* fieldAddInfo.topAddInfoPos ) +(fieldAddInfo.fontSizeNameAddInfo * (ParamsWidth)))
                        //Birthday.js component --fieldBirthday--
                        context.fillStyle = fieldBirthday.colorNameBirthday
                    context.font = fieldBirthday.fontSizeNameBirthday * (ParamsWidth) +'px '+fieldBirthday.fontBirthday

                    context.fillText(fieldBirthday.nameBirthday,(fieldBirthday.leftBirthdayPos * (coefficientWidthHeight)+fieldBirthday.leftBirthdayPos) -((fieldBirthday.fontSizeNameBirthday * (ParamsHeight))), ((ParamsHeight)* fieldBirthday.topBirthdayPos ) +(fieldBirthday.fontSizeNameBirthday * (ParamsWidth)))

                    //Father.js component --fieldFather--
                    context.fillStyle = fieldFather.colorNameFather
                    context.font = fieldFather.fontSizeNameFather * (ParamsWidth) +'px '+fieldFather.fontFather

                    context.fillText(fieldFather.nameFather,(fieldFather.leftFatherPos * (coefficientWidthHeight)+fieldFather.leftFatherPos) -((fieldFather.fontSizeNameFather * (ParamsHeight))), ((ParamsHeight)* fieldFather.topFatherPos ) +(fieldFather.fontSizeNameFather * (ParamsWidth)))

                    //Height.js component --fieldHeight--
                    context.fillStyle = fieldHeight.colorNameHeight
                    context.font = fieldHeight.fontSizeNameHeight * (ParamsWidth) +'px '+fieldHeight.fontHeight

                    context.fillText(fieldHeight.nameHeight,(fieldHeight.leftHeightPos * (coefficientWidthHeight)+fieldHeight.leftHeightPos) -((fieldHeight.fontSizeNameHeight * (ParamsHeight))), ((ParamsHeight)* fieldHeight.topHeightPos ) +(fieldHeight.fontSizeNameHeight * (ParamsWidth)))

                    //Horo.js component --fieldHoro--
                    context.fillStyle = fieldHoro.colorNameHoro
                    context.font = fieldHoro.fontSizeNameHoro * (ParamsWidth) +'px '+fieldHoro.fontHoro

                    context.fillText(fieldHoro.nameHoro,(fieldHoro.leftHoroPos * (coefficientWidthHeight)+fieldHoro.leftHoroPos) -((fieldHoro.fontSizeNameHoro * (ParamsHeight))), ((ParamsHeight)* fieldHoro.topHoroPos ) +(fieldHoro.fontSizeNameHoro * (ParamsWidth)))


                    //Mother.js component --fieldMother--
                    context.fillStyle = fieldMother.colorNameMother
                    context.font = fieldMother.fontSizeNameMother * (ParamsWidth) +'px '+fieldMother.fontMother

                    context.fillText(fieldMother.nameMother,(fieldMother.leftMotherPos * (coefficientWidthHeight)+fieldMother.leftMotherPos) -((fieldMother.fontSizeNameMother * (ParamsHeight))), ((ParamsHeight)* fieldMother.topMotherPos ) +(fieldMother.fontSizeNameMother * (ParamsWidth)))

                    //Sister.js component --fieldSister--
                    context.fillStyle = fieldSister.colorNameSister
                    context.font = fieldSister.fontSizeNameSister * (ParamsWidth) +'px '+fieldSister.fontSister

                    context.fillText(fieldSister.nameSister,(fieldSister.leftSisterPos * (coefficientWidthHeight)+fieldSister.leftSisterPos) -((fieldSister.fontSizeNameSister * (ParamsHeight))), ((ParamsHeight)* fieldSister.topSisterPos ) +(fieldSister.fontSizeNameSister * (ParamsWidth)))

                    //Town.js component --fieldTown--
                    context.fillStyle = fieldTown.colorNameTown
                    context.font = fieldTown.fontSizeNameTown * (ParamsWidth) +'px '+fieldTown.fontTown

                    context.fillText(fieldTown.nameTown,(fieldTown.leftTownPos * (coefficientWidthHeight)+fieldTown.leftTownPos) -((fieldTown.fontSizeNameTown * (ParamsHeight))), ((ParamsHeight)* fieldTown.topTownPos ) +(fieldTown.fontSizeNameTown * (ParamsWidth)))

                    //WatchBirthday.js component --fieldWatchBirthday--
                    context.fillStyle = fieldWatchBirthday.colorNameWatchBirthday
                    context.font = fieldWatchBirthday.fontSizeNameWatchBirthday * (ParamsWidth) +'px '+fieldWatchBirthday.fontWatchBirthday

                    context.fillText(fieldWatchBirthday.nameWatchBirthday,(fieldWatchBirthday.leftWatchBirthdayPos * (coefficientWidthHeight)+fieldWatchBirthday.leftWatchBirthdayPos) -((fieldWatchBirthday.fontSizeNameWatchBirthday * (ParamsHeight))), ((ParamsHeight)* fieldWatchBirthday.topWatchBirthdayPos ) +(fieldWatchBirthday.fontSizeNameWatchBirthday * (ParamsWidth)))

                    //Week.js component --fieldWeek--
                    context.fillStyle = fieldWeek.colorNameWeek
                    context.font = fieldWeek.fontSizeNameWeek * (ParamsWidth) +'px '+fieldWeek.fontWeek

                    context.fillText(fieldWeek.nameWeek,(fieldWeek.leftWeekPos * (coefficientWidthHeight)+fieldWeek.leftWeekPos) -((fieldWeek.fontSizeNameWeek * (ParamsHeight))), ((ParamsHeight)* fieldWeek.topWeekPos ) +(fieldWeek.fontSizeNameWeek * (ParamsWidth)))

                    //Weight.js component --fieldWeight--
                    context.fillStyle = fieldWeight.colorNameWeight
                    context.font = fieldWeight.fontSizeNameWeight * (ParamsWidth) +'px '+fieldWeight.fontWeight

                    context.fillText(fieldWeight.nameWeight,(fieldWeight.leftWeightPos * (coefficientWidthHeight)+fieldWeight.leftWeightPos) -((fieldWeight.fontSizeNameWeight * (ParamsHeight))), ((ParamsHeight)* fieldWeight.topWeightPos ) +(fieldWeight.fontSizeNameWeight * (ParamsWidth)))
                    //YearsName.js component --fieldYearsName--
                    context.fillStyle = fieldYearsName.colorNameYearsName
                    context.font = fieldYearsName.fontSizeNameYearsName * (ParamsWidth) +'px '+fieldYearsName.fontYearsName

                    context.fillText(fieldYearsName.nameYearsName,(fieldYearsName.leftYearsNamePos * (coefficientWidthHeight)+fieldYearsName.leftYearsNamePos) -((fieldYearsName.fontSizeNameYearsName * (ParamsHeight))), ((ParamsHeight)* fieldYearsName.topYearsNamePos ) +(fieldYearsName.fontSizeNameYearsName * (ParamsWidth)))
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
