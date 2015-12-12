<div>
	<form method="post" role="form">
		<div>
			{{ csrf_field() }}
			<label>Nama</label>
			<input type="text" name="nama" value="{{ $resep->nama }}"/>
		</div>
		<div>
			<label>Kode</label>
			<input type="text" name="kode"  value="{{ $resep->kode }}" />
		</div>
		<div>
			<label>Nama Koki</label>
			<select name="koki_id">
				<?php foreach ($koki as $key): ?>
					<option value="{{ $key->id }}" 
					<?php if ($key->id == $resep->kode ): ?>
						selected
					<?php endif ?>
						>{{ $key->nama }}</option>
				<?php endforeach ?>
			</select>
		</div>
		<button type="submit">Ubah</button>
	</form>
</div>