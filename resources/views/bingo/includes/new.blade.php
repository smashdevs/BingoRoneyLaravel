<!-- Button trigger modal -->
<button type="button" class="btn btn-primary novo_bingo" data-toggle="modal" data-target="#exampleModal">
    <i class="tim-icons icon-simple-add"></i>
    Criar novo bingo
  </button>
<!-- Modal -->
<div class="modal modal-black" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<style>
    .modal.modal-black .modal-content {
        /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
        box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;
    }
</style>
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar novo bingo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="tim-icons icon-simple-remove"></i>
        </button>
    </div>
    <div class="modal-body">
        @include("bingo.includes.form_new",["bingo"=>null])
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary save">Salvar bingo</button>
    </div>
    </div>
</div>
</div>
<script>
    window.onload = ()=>{
        document.querySelector("button.save").addEventListener('click',()=>{
            document.querySelector('#criar_bingo').submit()
        })
    }
</script>
