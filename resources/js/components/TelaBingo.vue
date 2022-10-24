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
            var x = setInterval(() => {
                console.log(document.numbers)
                fetch('/api/bingo/1').then(result=>{return result.json()}).then(data=>{document.numbers = data.numeros})
            }, 3000);
        },
    },
  };
  </script>
