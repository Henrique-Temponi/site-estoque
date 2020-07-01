<div class="row">
    <form action="{{ action('site\RegistroController@pesquisar') }}">
        <div class="input-field col s3 m3">
            <label for="companhia">Companhia: </label>
            <input type="text" name="companhia" id="companhia">
        </div>
        <div class="input-field col s3 m3">
            <label for="origem">origem: </label>
            <input type="text" name="origem" id="origem">
        </div>
        <div class="input-field col s3 m3">
            <label for="destino">destino: </label>
            <input type="text" name="destino" id="destino">
        </div>
        <div class="input-field col s3 m3">
            <select name="horas" id="horas">
                <option value="">horas</option>
                <option value="3">Voo curto (1-3)</option>
                <option value="6">Voo medio (4-6)</option>
                <option value="9">Voo longo (6+)</option>
            </select>
            <label for="horas">horas: </label>
        </div>
        <button type="submit" class="btn col s12 m12">Registrar</button>
    </form>
</div>