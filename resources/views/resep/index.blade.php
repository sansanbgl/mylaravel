@extends('layouts.master')
@section('content')
<div>
	<table class="table table-striped">
		<thead>
			<th>No</th>
			<th>Nama Resep</th>
			<th>Kode Resep</th>
			<th>Pemilik Resep</th>
		</thead>
		<tbody>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->nama}}</td>
				<td>{{$item->kode}}</td>
				<td>{{$item->koki->nama}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
