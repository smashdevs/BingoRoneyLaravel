<form id="criar_bingo" action="{{ route('bingos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="inputNome">Nome</label>
        <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome do bingo" required>
    </div>
    <div class="form-group">
        <label for="inputDescricao">Descrição</label>
        <input type="text" class="form-control" id="inputDescricao" name="inputDescricao" placeholder="Breve descrição do bingo" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputData">Data de início</label>
        <input type="date" class="form-control" id="inputData" name="inputData" placeholder="Email" value="{{ date('Y-m-d') }}" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputHora">Hora de início</label>
        <input type="time" class="form-control" id="inputHora" name="inputHora" placeholder="Password" value="{{ date('H:i') }}" required>
      </div>
    </div>
    {{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
</form>
