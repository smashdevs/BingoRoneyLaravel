<style scoped>
    .corpo-sorteio{
        height: 100%;
    }
    .principal{
    }

    .full-height{height: 100%;}

    .topo-bolas{
        height: 80%;
    }
    .bg-gray{ background-color: gray;}
    .bg-red{ background-color: red;}
    .cartelas {
        height: 35%;
    }

    .bola{
        padding: 0px;
    }
    .bola div{
        border-radius: 50%;
        border: 5px solid red;
        color: black;
        background-color: white;
        height: 30px;
        width: 30px;
        text-align: center;
        margin: 0 0px;
    }

    .bola-sorteio{
        border-radius: 50%;
        border: 20px solid red;
        padding-top: 8px;
        font-size: 45px;
        color: black;
        background-color: white;
        height: 120px;
        width: 120px;
        text-align: center;
        margin: 0px 0px;
        margin-top: -120px;
        margin-bottom: 10px;
    }

    .hide{
        visibility: hidden;
    }

    .cartela {
        width: 20px;
    }

    .cartela table {
        font-size: 20px;
        font-weight: 400;
    }
</style>
<template>
    <div class="card corpo-sorteio">
        <div class="card-header">
            <h3 class="title pb-1 mb-1">Bingo do Roney</h3>
            <!-- <p class="category">Jogos onde você está inscrito</p> -->
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 principal">
                    <div class="container">
                        <div class="row topo-bolas">
                            <div class="col-7">
                                <div class="container">
                                    <div class="row py-1" v-for="x in [0,10,20,30,40]">
                                        <div class="col bola" :class="{ hide: !ballList.includes(1+x) }"><div>{{ 1 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(2+x) }"><div>{{ 2 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(3+x) }"><div>{{ 3 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(4+x) }"><div>{{ 4 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(5+x) }"><div>{{ 5 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(6+x) }"><div>{{ 6 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(7+x) }"><div>{{ 7 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(8+x) }"><div>{{ 8 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(9+x) }"><div>{{ 9 + x }}</div></div>
                                        <div class="col bola" :class="{ hide: !ballList.includes(10+x) }"><div>{{ 10 + x }}</div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 p-0">
                                <img src="http://localhost:8000/images/Gaming%20Vlogger%20Channel%20Banner%20Maker%20copy.jpg" alt="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class="bola-sorteio"><div>{{ 10 }}</div></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row cartelas">
                            <div class="col-12 bg-gray">
                                <div class="row">
                                    <div class="col-3 cartela pt-2">
                                        <table class="table table-sm table-dark">
                                        <tbody>
                                            <tr>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            </tr>
                                            <tr>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            </tr>
                                            <tr>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            <td>x</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'App',
  components: {
  },
  props: ['numbers'],
  data(){
    let data = []
    for(let i = 1; i <= 50; i++){
        data.push(i)
    }
    return {
        ballList:data
    }
  },
  created() {
    // props are exposed on `this`
    console.log(this.numbers)
  }
};

setInterval(()=>{
    let element = document.querySelector('.progress-bar');
    let value = element.style.width.replace("%","")
    value = parseInt(value);
    value = value - 5;
    if(value <= 0){
        value = 110;
    }
    element.style.width = value + "%";
}, 2000);
</script>
