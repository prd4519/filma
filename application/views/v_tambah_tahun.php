<div class="container-fluid">
     
    <div class="alert alert-success" role="alert">
        <i class="fas fa-file"></i>  Tambah File
    </div>
    
    <?php echo $this->session->flashdata('Pesan') ?>

    <?php echo form_open_multipart('Dashboard/tambah_tahun_aksi') ?>
     
    <div class="form-group">
        <label>Input ID Tahun</label>
        <input type="text" name="id_tahun" class="form-control">
        <?php echo form_error('tahun','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Input Tahun</label>
        <input type="text" name="tahun" class="form-control">
        <?php echo form_error('tahun','<div class="text-danger small ml-3">') ?>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
 
    <?php form_close(); ?>
</div>