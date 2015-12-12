<html>
    <head>
        <title>My Laravel</title>
    </head>
    <body>
        <div>
            <div>
                <a href="bahan/create">Tambah</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Kode</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ( $bahan as $item )
            <tr>
                <td>
                    {{ $item->id }}
                </td>
                <td>
                    {{ $item->nama }}
                </td>
                <td>
                    {{ $item->kode }}
                </td>
                <td>
                    <a href="bahan/update/{{ $item['id'] }}">Ubah</a>
                    <a href="bahan/delete/{{ $item['id'] }}">Hapus</a>
                </td>
            </tr>
            @endforeach

            </tbody>
            </table>   
        </div>
    </body>
</html>
