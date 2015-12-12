@extends('layouts.master')
@section('content')
            <div>
                <a href="resep/create">Tambah</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Nama Koki</th>
                    </tr>
                </thead>
            <tbody>
            @foreach ( $resep as $item )
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
                    {{ $item->koki->nama }}
                </td>
                <td>
                    <a href="resep/update/{{ $item['id'] }}">Ubah</a>
                    <a href="resep/delete/{{ $item['id'] }}">Hapus</a>
                </td>
            </tr>
            @endforeach

            </tbody>
            </table>
@stop
