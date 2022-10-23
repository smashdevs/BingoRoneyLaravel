<style scoped>
    .geral{
        height: calc(90% - 40px);
    }
</style>
<template>
    <div class="row geral">
        <div class="col-md-9">
            <corpo-sorteio></corpo-sorteio>
        </div>
        <div class="col-md-3">
            <chat></chat>
        </div>
    </div>

  </template>

  <script>
  // If you are using PurgeCSS, make sure to whitelist the carousel CSS classes

  export default {
    name: 'App',
    components: {
    },
  };
  </script>
