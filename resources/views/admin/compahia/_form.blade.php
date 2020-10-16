<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{
        isset($registro->nome) ? $registro->nome : ''
    }}">
</div>