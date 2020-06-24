<form action="{{ route('site.novo') }}" method="POST">
        {{ csrf_field() }}
        <div class="input-field row">
            <label for="compania">Compania: </label>
            <input type="text" name="compania" id="compania">
        </div>
        <div class="input-field row">
            <label for="origem">origem: </label>
            <input type="text" name="origem" id="origem">
        </div>
        <div class="input-field row">
            <label for="destino">destino: </label>
            <input type="text" name="destino" id="destino">
        </div>
        <div class="input-field row">
            <label for="horas">horas: </label>
            <input type="text" name="horas" id="horas">
        </div>
        <button type="submit" class="btn ">Registrar</button>
    </form>
</div>