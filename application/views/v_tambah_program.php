<div class="container-fluid">
     
    <div class="alert alert-success" role="alert">
        <i class="fas fa-file"></i>  Tambah Program
    </div>
    
    <?php echo $this->session->flashdata('Pesan') ?>

    <?php echo form_open_multipart('Dashboard/tambah_program_aksi') ?>
     
    <div class="form-group">
        <label>Input ID Program</label>
        <input type="text" name="id_program" class="form-control">
        <?php echo form_error('program','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Input Program</label>
        <input type="text" name="nama_program" class="form-control">
        <?php echo form_error('program','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Satker</label>
         
        <select name="id_satker" class="form-control">
            <option value="">-- Pilih Satker --</option>
            <?php 
        // $no=1;
            foreach ($satker as $sat) : ?>
                <option value="<?php echo $sat->id_satker ?>"><?php echo $sat->nama_pendek ?></option>
            <?php endforeach; ?>
                         
        </select>
        <?php echo form_error('id_satker','<div class="text-danger small ml-3">') ?>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
 
    <?php form_close(); ?>
</div>