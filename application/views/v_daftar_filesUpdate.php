<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-University"></i>  Form Update Files
    </div>
    <?php echo $this->session->flashdata('Pesan') ?>
  	<?php echo form_open_multipart('Dashboard/update_aksi') ?>
	<?php foreach($files as $prl)  : ?>
	<div class="form-group">
		<input type="hidden" name="id_satker" class="form-control" value="<?php echo $prl->id_satker ?>">
		<input type="hidden" name="id_files" class="form-control" value="<?php echo $prl->id_files ?>">
		<?php echo form_error('id_files','<div class="text-danger small ml-3">') ?>
	</div>
	<div class="form-group">
		<label>Jenis Files :</label>
		<select name="jenis_files" class="form-control">

			<option value="">-- Pilih Jenis Files --</option>
			<?php foreach ($jenis_files as $jns) : ?>
      		<option value="<?php echo $jns->jenis_files ?>"><?php echo $jns->jenis_files ?>
			<?php endforeach; ?>
		</select>
		<?php echo form_error('jenis_files','<div class="text-danger small ml-3">') ?>
	</div>

	<div class="form-group">
		<label>Tahun :</label>
		<select name="tahun" class="form-control">

			<option value="">-- Pilih Tahun --</option>
			<?php foreach ($tahun as $th) : ?>
      		<option value="<?php echo $th->tahun ?>"><?php echo $th->tahun ?>
			<?php endforeach; ?>
		</select>
		<?php echo form_error('jenis_files','<div class="text-danger small ml-3">') ?>
	</div>

	<div class="form-group">
		<label>Nama Files :</label>
		<input type="text" name="nama_files" class="form-control" value="<?php echo $prl->nama_files ?>">
		<?php echo form_error('nama_files','<div class="text-danger small ml-3">') ?>
	</div>
	<div class="form-group">
		<label>Diskripsi :</label>
		<!--<input type="text" name="diskripsi" class="form-control" value="<?php echo $prl->diskripsi ?>"> -->
		<textarea class="form-control" name="diskripsi"  rows="3" value="<?php echo $prl->diskripsi ?>"><?php echo $prl->diskripsi ?></textarea>
		<?php echo form_error('diskripsi','<div class="text-danger small ml-3">') ?>
	</div>
	<div class="form-group">
		<input type="file" name="files" value="<?php echo $prl->files ?>" title="<?php echo $prl->files ?>"> 
	</div>
	
<?php endforeach; ?>
	<button type="submit" class="btn btn-primary mb-5">Update</button>
</form>
<?php form_close(); ?>
</div>