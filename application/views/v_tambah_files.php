<div class="container-fluid">
     
    <div class="alert alert-success" role="alert">
        <i class="fas fa-file"></i>  Tambah File
    </div>
    
    <?php echo $this->session->flashdata('Pesan') ?>

    <?php echo form_open_multipart('Dashboard/tambah_files_aksi') ?>
     
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
    <div class="form-group">
        <label>Tahun</label>
         
        <select name="id_tahun" class="form-control">
            <option value="">-- Pilih Tahun --</option>
            <?php 
        // $no=1;
            foreach ($tahun as $th) : ?>
                <option value="<?php echo $th->id_tahun ?>"><?php echo $th->tahun ?></option>
            <?php endforeach; ?>       
        </select>
        <?php echo form_error('id_tahun','<div class="text-danger small ml-3">') ?>
    </div>
    <div class="form-group">
        <label>Kategori</label>
         
        <select name="id_kategori" class="form-control">
            <option value="">-- Pilih Kategori --</option>
            <?php 
        // $no=1;
            foreach ($kategori as $kat) : ?>
                <option value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nama_kategori ?></option>
            <?php endforeach; ?>
                         
        </select>
        <?php echo form_error('id_kategori','<div class="text-danger small ml-3">') ?>
    </div>
    <div class="form-group">
        <label>Kegiatan</label>
         
        <select name="id_kegiatan" class="form-control">
            <option value="">-- Pilih Kegiatan --</option>
            <?php 
        // $no=1;
            foreach ($kegiatan as $keg) : ?>
                <option value="<?php echo $keg->id_kegiatan ?>"><?php echo $keg->nama_kegiatan ?></option>
            <?php endforeach; ?>
                         
        </select>
        <?php echo form_error('id_kegiatan','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Program</label>
         
        <select name="id_program" class="form-control">
            <option value="">-- Pilih Program --</option>
            <?php 
        // $no=1;
            foreach ($program as $pro) : ?>
                <option value="<?php echo $pro->id_program ?>"><?php echo $pro->nama_program ?></option>
            <?php endforeach; ?>
                         
        </select>
        <?php echo form_error('nama_program','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Barang</label>
         
        <select name="id_belanja" class="form-control">
            <option value="">-- Pilih Barang --</option>
            <?php 
        // $no=1;
            foreach ($belanja as $bel) : ?>
                <option value="<?php echo $bel->id_belanja ?>"><?php echo $bel->nama_barang ?></option>
            <?php endforeach; ?>
                         
        </select>
        <?php echo form_error('id_belanja','<div class="text-danger small ml-3">') ?>
    </div>

    <div class="form-group">
        <label>Jenis Files</label>
         
        <select name="jenis_files" class="form-control">
            <option value="">-- Pilih Jenis File --</option>
            <?php 
        // $no=1;
            foreach ($jenis_files as $jns) : ?>
                <option value="<?php echo $jns->id_jenis_files ?>"><?php echo $jns->jenis_files ?></option>
            <?php endforeach; ?>
                         
        </select>
        <?php echo form_error('jenis_files','<div class="text-danger small ml-3">') ?>
    </div>
    <div class="form-group">
        <label>Nama Files</label>
        <input type="text" name="nama_files" class="form-control">
        <?php echo form_error('nama_files','<div class="text-danger small ml-3">') ?>
    </div>
    <div class="form-group">
        <label>Note</label>
        <!--<input type="textarea" name="diskripsi" class="form-control" > -->
        <textarea class="form-control" name="diskripsi"  rows="3"></textarea>
        <?php echo form_error('diskripsi','<div class="text-danger small ml-3">') ?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Pilih File</label>
        <input name="files"type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
 
    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
 
    <?php form_close(); ?>
</div>