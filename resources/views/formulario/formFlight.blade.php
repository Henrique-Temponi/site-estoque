<h3>Voo</h3>

<div class="input-field row">
        <label for="companhia">Companhia: </label>
        <input type="text" name="companhia" id="companhia" value="{{
            isset($registro['companhia']) ? $registro['companhia'] : ''
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
</div>