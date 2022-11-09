<style scoped>
    .geral{
        height: calc(90% - 40px);
    }
</style>
<template>
    <div class="row geral">
        <div class="col-md-9">
            <corpo-sorteio :numbers="numbers" :bingo="info"></corpo-sorteio>
        </div>
        <div class="col-md-3">
            <chat></chat>
        </div>
    </div>

  </template>

  <script>
    document.numbers = []
  export default {
    name: 'App',
    components: {
    },
    props: ['data'],
    watch:{
        activeList: (x) =>{
            console.log(x)
        }
    },
    data(){
        return {
            numbers: [],
            vencedor: null,
            info: this.data
        }
    },
    mounted() {
        this.changeActive();
        // console.log(this.data)
    },
    methods: {
        changeActive: function() {
            fetch('/api/bingo/'+this.data.id).then(function(result){return result.json()})
            .then(function(data){
                console.info(data)
                this.numbers = data.numeros;
                this.info = data;
            }.bind(this))

            let count = 0;
            var x = setInterval(function(){
                let element = this;
                fetch('/api/bingo/'+this.data.id).then(function(result){return result.json()})
                .then(function(data){
                    // console.info(data)
                    element.numbers = data.numeros;
                    element.info = data;
                }.bind(element))
            }.bind(this), 5000);
        },
    },
  };
  </script>
