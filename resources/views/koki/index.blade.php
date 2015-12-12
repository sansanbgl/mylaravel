@extends('layouts.master')
@section('content')
    <div>
        <a href="koki/create">Tambah</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $koki as $item )
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
                <a href="koki/update/{{ $item['id'] }}">Ubah</a>
                <a href="koki/delete/{{ $item['id'] }}">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
