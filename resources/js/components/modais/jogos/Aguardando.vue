<style>
.modal.modal-black .modal-content {
    /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
    box-shadow: rgba(240, 46, 170, 0.4) 5px 5px,
        rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px,
        rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
}
</style>
<template>
    <div
        class="modal modal-black"
        id="aguardandoModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="aguardandoModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aguardandoModalLabel">
                        Ainda não chegou a hora do seu bingo!
                        <br>
                        <br>
                        <h6>Começa:</h6>
                    </h5>
                    <!-- <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-hidden="true"
                        @click="closeModal()"
                    >
                        <i class="tim-icons icon-simple-remove"></i>
                    </button> -->
                </div>
                <div class="modal-body">
                    <h1 class="text-center">{{ date }}</h1>
                </div>
                <div class="modal-footer">
                    <!-- <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                        @click="closeModal()"
                    >
                        Fechar
                    </button> -->
                    <!-- <button type="button" class="btn btn-primary save">
                        Salvar bingo
                    </button> -->
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
    },
    created(){
        console.log(this.data)
    },
    props: ['data'],
    data(){
        let info = JSON.parse(JSON.stringify(this.data))
        console.log(info)
        return {
            date: new Date(info.horaBingo).toLocaleString().substr(0,16) || (new Date()).toLocaleString().substr(0,16),
        }
    },
    methods: {
    closeModal() {
        $('#aguardandoModal').modal('show');
    }
  }
};
</script>
