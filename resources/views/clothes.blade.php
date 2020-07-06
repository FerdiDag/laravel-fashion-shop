<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Distributore</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_vestiti as $vestito)
                    <tr>
                        <td>{{ $vestito->id }}</td>
                        <td>{{ $vestito->marca }}</td>
                        <td>{{ $vestito->distributore }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
