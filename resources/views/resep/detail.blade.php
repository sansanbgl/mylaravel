@extends('layouts.master')
@section('content')
<div>
	<table class="table">
		<tr>
			<th>Nama Resep</th>
			<th>{{$item->nama}}</th>
		</tr>
	</table>
	Bahan yang digunakan
	<ol>
		@foreach($item->bahan as $bahan)
		<li>{{$bahan->nama}}</li>
		@endforeach
	</ol>
</div>
@stop
