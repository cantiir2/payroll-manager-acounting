<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
	<div class="card-body">
		<?php foreach ($kehadiran as $j): ?>
		<form method="POST" action="<?php echo base_url('admin/data_absensi/update_data_aksi')?>">
			<div class="form-group">
				<label>Hadir</label>
				<input type="hidden" name="id_kehadiran" class="form-control" value="<?php echo $j->id_kehadiran?>">
				<input type="number" name="hadir" class="form-control" value="<?php echo $j->hadir?>">
				<?php echo form_error('hadir', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Sakit</label>
				<input type="number" name="sakit" class="form-control" value="<?php echo $j->sakit?>">
				<?php echo form_error('sakit', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Alpha</label>
				<input type="float" name="alpha" class="form-control" value="<?php echo $j->alpha?>">
				<?php echo form_error('alpha', '<div class="text-small text-danger"> </div>')?>
			</div>

			<button type="submit" class="btn btn-success" >Simpan</button>
			<a href="<?php echo base_url('admin/data_absensi')?>" class="btn btn-warning">Kembali</a>

		</form>
	<?php endforeach; ?>
	</div>
</div>