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
		<div>
			<label>Nama Koki</label>
			<select name="koki_id">
				<?php foreach ($koki as $key): ?>
					<option value="{{ $key->id }}">{{ $key->nama }}</option>
				<?php endforeach ?>
			</select>
		</div>
		<button type="submit">Tambah</button>
	</form>
</div>