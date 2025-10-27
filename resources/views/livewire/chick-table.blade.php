<div wire:poll.2000ms>
    <table>
        <thead>
            <tr><th>ID</th><th>Warna</th><th>Hasil</th><th>Waktu</th></tr>
        </thead>
        <tbody>
            @foreach($chicks as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->warna }}</td>
                <td>{{ $c->hasil }}</td>
                <td>{{ $c->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
