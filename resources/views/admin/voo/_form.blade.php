<div class="input-field">
    <input type="text" name="voo" id="voo" value="{{
        isset($voo->voo) ? $voo->voo : ''
    }}">
    <label for="voo">Voo:</label>
</div>
<div class="input-field">
    <select name="destino_id" id="destino">
        @foreach($destino as $d)
            <option value="{{ $d->id }}" {{ isset($voo->destino_id) && $voo->destino_id == $d->id ? 'selected' : '' }}>{{ $d->nome }} </option>
        @endforeach
    </select>
    <label for="destino">destino: </label>
</div>

<div class="input-field">
    <select name="compahia_id" id="compahia">
        @foreach($compahia as $c)
            <option value="{{ $c->id }}" {{ isset($voo->compahia_id) && $voo->compahia_id == $c->id ? 'selected' : '' }}>{{ $c->nome }} </option>
        @endforeach
    </select>
    <label for="compahia">Compahia: </label>
</div>

<div class="input-field">
    <select name="turno" id="turno">
        <option value="1" {{ isset($voo->turno) && $voo->turno == 1 ? 'selected' : '' }}>Manha</option>
        <option value="2" {{ isset($voo->turno) && $voo->turno == 2 ? 'selected' : '' }}>Tarde</option>
        <option value="3" {{ isset($voo->turno) && $voo->turno == 3 ? 'selected' : '' }}>Noite</option>
    </select>
    <label for="turno">Turno: </label>
</div>

<!-- <div class="input-field">
    <input type="text" name="turno" id="turno">
    <label for="turno">Turno: </label>
</div> -->