<div class="input-field row">
        <label for="compania">Compania: </label>
        <input type="text" name="compania" id="compania" value="{{
            isset($registro['compania']) ? $registro['compania'] : ''
        }}">
    </div>
    <div class="input-field row">
        <label for="origem">origem: </label>
        <input type="text" name="origem" id="origem" value="{{
            isset($registro['origem']) ? $registro['origem'] : ''
        }}">
    </div>
    <div class="input-field row">
        <label for="destino">destino: </label>
        <input type="text" name="destino" id="destino" value="{{
            isset($registro['destino']) ? $registro['destino'] : ''
        }}">
    </div>
    <div class="input-field row">
        <label for="horas">horas: </label>
        <input type="text" name="horas" id="horas" value="{{
            isset($registro['horas']) ? $registro['horas'] : ''
        }}">
    </div>
    <button type="submit" class="btn ">Registrar</button>
</div>