<div>
	<form method="post" role="form">
		<div>
			{{ csrf_field() }}
			<label>Nama</label>
			<input type="text" name="nama" />
		</div>
		<div>
			<label>Kode</label>
			<input type="text" name="kode" />
		</div>
		<button type="submit">Tambah</button>
	</form>
</div>