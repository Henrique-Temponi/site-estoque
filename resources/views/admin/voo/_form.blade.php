<div class="input-field">
    <input type="text" name="voo" id="voo" value="{{
        isset($voo->voo) ? $voo->voo : ''
    }}">
    <label for="voo">Voo:</label>
</div>
<div class="input-field">
    <input type="text" name="destino" id="destino" value="{{
        isset($voo->destino) ? $voo->destino : ''
    }}">
    <label for="destino">destino</label>
</div>