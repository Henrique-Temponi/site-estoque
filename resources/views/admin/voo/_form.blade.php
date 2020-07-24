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