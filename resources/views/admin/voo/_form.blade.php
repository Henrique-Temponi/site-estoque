<div class="form-group">
    <label for="voo">Voo:</label>
    <input type="text" class="form-control" placeholder="Nome do voo..." name="voo" id="voo" value="{{
    isset($voo->voo) ? $voo->voo : ''
    }}">
</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="destino">destino: </label>
            <select name="destino_id" class="custom-select" id="destino">
                @foreach($destino as $d)
                    <option value="{{ $d->id }}" {{ isset($voo->destino_id) && $voo->destino_id == $d->id ? 'selected' : '' }}>{{ $d->nome }} </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="compahia">Compahia: </label>
            <select name="compahia_id" class="custom-select" id="compahia">
                @foreach($compahia as $c)
                    <option value="{{ $c->id }}" {{ isset($voo->compahia_id) && $voo->compahia_id == $c->id ? 'selected' : '' }}>{{ $c->nome }} </option>
                @endforeach
            </select>
        </div>
    </div>
</div>



<div class="form-group">
    <label for="turno">Turno: </label>
    <select name="turno" class="custom-select" id="turno">
        <option value="1" {{ isset($voo->turno) && $voo->turno == 1 ? 'selected' : '' }}>Manha</option>
        <option value="2" {{ isset($voo->turno) && $voo->turno == 2 ? 'selected' : '' }}>Tarde</option>
        <option value="3" {{ isset($voo->turno) && $voo->turno == 3 ? 'selected' : '' }}>Noite</option>
    </select>
</div>

<!-- <div class="input-field">
    <input type="text" name="turno" id="turno">
    <label for="turno">Turno: </label>
</div> -->