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
        id="vencedorModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="vencedorModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vencedorModalLabel">
                        Bingo encerrado!
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-hidden="true"
                        @click="closeModal()"
                    >
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="text-left">Vencedor</h4>
                    <h1 class="text-center" id="text-vencedor"></h1>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                        @click="closeModal()"
                    >
                        Fechar
                    </button>
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
        console.log("Component mounted.");
    },
    props: ['data'],
    methods: {
        closeModal() {
            $('#vencedorModal').modal('hide');
            $('#vencedorModal').data('hidden',true);
            $('.modal-backdrop').remove();
        }
    },
    data(){
        return {
            vencedor: ""
        }
    },
    watch: {
        data(old,newi){
            old = JSON.parse(JSON.stringify(old));
            newi = JSON.parse(JSON.stringify(newi));
            console.log(old,newi)
            this.vencedor = newi.vencedor.name
        }
    }
};
</script>
