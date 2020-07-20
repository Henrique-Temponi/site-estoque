<h3>Conexoes</h3>
<div class="row">
    <table class="highlight responsive-table">
        <tbody>
            @foreach($registro->airports as $airport)
            <tr>
                <td>
                    {{ $airport->name }}
                </td>
                <td>
                    <a href="#" class="btn">Editar</a>
                    <a href="#" class="btn">Deletar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <button type="" class="btn">Adicionar</button> -->
</div>