<div>
	<form method="post" role="form">
		<div>
			{{ csrf_field() }}
			<label>Nama</label>
			<input type="text" name="nama" value="{{ $koki->nama }}"/>
		</div>
		<div>
			<label>Kode</label>
			<input type="text" name="kode"  value="{{ $koki->kode }}" />
		</div>
		<button type="submit">Ubah</button>
	</form>
</div>