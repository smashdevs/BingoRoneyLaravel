<style scoped>
    .geral{
        height: calc(90% - 40px);
    }
</style>
<template>
    <div class="row geral">
        <div class="col-md-9">
            <corpo-sorteio :numbers="numbers"></corpo-sorteio>
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
    watch:{
        activeList: (x) =>{
            console.log(x)
        }
    },
    data(){
        return {
            numbers: [],
            activeList: [],
            ratings: []
        }
    },
    mounted() {
        this.changeActive();
    },
    methods: {
        changeActive: function() {
            let count = 0;
            var x = setInterval(function(){
                let element = this;
                fetch('/api/bingo/1').then(function(result){return result.json()})
                .then(function(data){element.numbers = data.numeros;}.bind(element))
            }.bind(this), 5000);
        },
    },
  };
  </script>
