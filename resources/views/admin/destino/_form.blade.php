<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{
        isset($registro->nome) ? $registro->nome : ''
    }}">
</div>
<div class="form-group">
    <label for="abreviacao">Abreviação:</label>
    <input type="text" class="form-control" name="abreviacao" id="abreviacao" value="{{
        isset($registro->abreviacao) ? $registro->abreviacao : ''
    }}">
</div>