@extends('layouts.master')
@section('content')
<div>
	<div class="col-md-6">
		<form action="" method="post" role="form">
		<table class="table">
			<tr>
				<td>Nama Resep</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="nama"></td>
			</tr>
		</table>
		<label for="">Bahan yang digunakan</label>
		<table>
			@foreach($bahans as $bahan)
			<tr>
				<td><input type="checkbox" name="bahan_ids[]" id="">{{$bahan->nama}}</td>
			</tr>
			@endforeach
		</table>
		{{csrf_field()}}
		<button class="btn btn-block">Submit</button>
		</form>
	</div>
</div>
@stop
