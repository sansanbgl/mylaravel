@extends('layouts.master')
@section('content')
<div>
	<table class="table table-striped">
		<thead>
			<th>No</th>
			<th>Nama Resep</th>
			<th>Kode Resep</th>

			<th>Aksi</th>
		</thead>
		<tbody>
			@foreach($items as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->nama}}</td>
				<td>{{$item->kode}}</td>

				<td>
					<a href="{{url('resep/update/'.$item->id)}}">Update Resep</a>
					<a href="{{url('resep/delete/'.$item->id)}}">Delete Resep</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
