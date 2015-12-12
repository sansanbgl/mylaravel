@extends('layouts.master')
@section('content')
{{$someitem}}
<div>
	<table class="table">
		<tr>
			<th>{{$koki->nama}}</th>
			<th>{{$koki->kode}}</th>
		</tr>
	</table>
	<label for="">Resep Milik Koki {{$koki->nama}}</label>
	<table class="table">
		@foreach($koki->resep as $resep)
		<tr>
			<td>{{$resep->nama}}</td>
			<td></td>
		</tr>
		@endforeach
	</table>
</div>
@stop
