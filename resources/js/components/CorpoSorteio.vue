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
        opacity: .2;
    }

    .cartela {
    }

    div.cartela table {
        font-size: 20px;
        font-weight: 400;
    }

    div.cartela table tr td {
        padding: 12px 0px 12px 28px;
    }

    .lista_cartelas {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
    }

    .lista_cartelas > .col-4 {
    display: inline-block;
    }
</style>
<template>
    <div class="card corpo-sorteio">
        <div class="card-header">
            <h3 class="title pb-1 mb-1">{{ info.nome }}</h3>
            <p class="category">{{ info.descricao }}</p>
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
                                <div class="bola-sorteio"><div>{{ bolaSorteio }}</div></div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100" hidden></div>
                                </div>
                            </div>
                        </div>
                        <div class="row cartelas">
                            <div class="col-12 bg-gray">
                                <div class="row lista_cartelas">
                                    <div class="col-4 cartela pt-2" v-for="cartela in cartelas">
                                        <table class="table table-sm table-dark" border="1">
                                        <tbody>
                                            <tr>
                                            <td :class="{ hide: !ballList.includes(cartela[0]) }">{{ cartela[0] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[1]) }">{{ cartela[1] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[2]) }">{{ cartela[2] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[3]) }">{{ cartela[3] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[4]) }">{{ cartela[4] }}</td>
                                            </tr>
                                            <tr>
                                            <td :class="{ hide: !ballList.includes(cartela[5]) }">{{ cartela[5] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[6]) }">{{ cartela[6] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[7]) }">{{ cartela[7] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[8]) }">{{ cartela[8] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[9]) }">{{ cartela[9] }}</td>
                                            </tr>
                                            <tr>
                                            <td :class="{ hide: !ballList.includes(cartela[10])}">{{ cartela[10] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[11])}">{{ cartela[11] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[12])}">{{ cartela[12] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[13])}">{{ cartela[13] }}</td>
                                            <td :class="{ hide: !ballList.includes(cartela[14])}">{{ cartela[14] }}</td>
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
    <modal-jogo-aguardando :data="info"></modal-jogo-aguardando>
    <modal-jogo-vencedor :data="info"></modal-jogo-vencedor>
</template>

<script>
export default {
  name: 'App',
  components: {
  },
  props: ['numbers','bingo'],
  data(){
    return {
        ballList: [],
        bolaSorteio: "0",
        lastNumber: "",
        cartelas:[
        [5,7,9,15,16,20,21,24,31,32,37,41,47,49,50],
        [3,7,8,11,12,18,23,24,28,31,33,34,38,45,50],
        [2,5,13,14,16,19,20,22,27,30,34,36,39,40,42],
        [4,9,12,16,17,21,22,23,30,32,34,35,45,48,50],
        [1,2,13,14,16,19,20,27,28,31,33,39,41,44,49],
        [4,5,6,12,17,19,27,29,31,32,33,36,41,44,49],
        [1,4,10,11,14,17,27,29,30,31,36,37,39,40,50]
        ],
        info: JSON.parse(JSON.stringify(this.bingo)),
    }
  },
  created() {
    // console.log(JSON.parse(JSON.stringify(this.info)))
  },
  watch: {
    numbers(newQuestion, oldQuestion) {
        newQuestion = JSON.parse(JSON.stringify(newQuestion));
        oldQuestion = JSON.parse(JSON.stringify(oldQuestion));
        // console.log(newQuestion, oldQuestion)

        this.ballList = oldQuestion;

        oldQuestion = JSON.parse(JSON.stringify(oldQuestion))
        let novaBola = newQuestion.filter(x => !oldQuestion.includes(x)).shift();

        this.bolaSorteio = novaBola !== undefined ? novaBola : this.bolaSorteio;
    },
    bingo(old,newi){
        old = JSON.parse(JSON.stringify(old));
        newi = JSON.parse(JSON.stringify(newi));
        // console.log(newi)
        if(newi.numeros !== undefined && newi.numeros.length === 0){
            $('#aguardandoModal').modal({
                backdrop: 'static',
            });
            $('#aguardandoModal').modal('show');
        }else if(newi.vencedor !== undefined && newi.vencedor !== null){
            $('#vencedorModal').modal({
                backdrop: 'static',
            });
            $('#vencedorModal').modal('show');
            $('#text-vencedor').text(newi.vencedor.name);
        }

    }
  },
};

setInterval(()=>{
    let element = document.querySelector('.progress-bar');
    let value = element.style.width.replace("%","");
    value = parseInt(value);
    value = value - 5;
    if(value <= 0){
        value = 110;
    }
    element.style.width = value + "%";
}, 2000);
</script>
