<div>
	<form method="post" role="form">
		<div>
			{{ csrf_field() }}
			<label>Nama</label>
			<input type="text" name="nama" value="{{ $bahan->nama }}"/>
		</div>
		<div>
			<label>Kode</label>
			<input type="text" name="kode"  value="{{ $bahan->kode }}" />
		</div>
		<button type="submit">Ubah</button>
	</form>
</div>