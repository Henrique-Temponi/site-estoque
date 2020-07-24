<div class="input-field">
    <input type="text" name="nome" id="nome" value="{{
        isset($registro->nome) ? $registro->nome : ''
    }}">
    <label for="nome">Nome:</label>
</div>
<div class="input-field">
    <input type="text" name="abreviacao" id="abreviacao" value="{{
        isset($registro->abreviacao) ? $registro->abreviacao : ''
    }}">
    <label for="abreviacao">Abreviação:</label>
</div>