<div class="container-fluid">
     
    <div class="alert alert-success" role="alert">
        <i class="fa fa-eye"></i>  DETAIL FILES
  </div>
     
    <?php foreach ($detail as $dt) : ?>
 
      <div>
        <b>NAMA FILES   :</b>
        <?php echo $dt->nama_files; ?>
        <br>
        <b>TAHUN   :</b>
        <?php echo $dt->id_tahun; ?>
        <br>
        <b>KATEGORI   :</b>
        <?php echo $dt->id_kategori; ?>
        <br>
        <b>DISKRIPSI    :</b>
        <?php echo $dt->diskripsi; ?>
      </div>
 
     <a href="<?php echo base_url().'assets/uploads/'.$dt->files;?>" target="_blank">
                    Download file untuk membaca
     </a>
 
   <?php endforeach; ?><br>  <br>
 
     
    <?php echo anchor('Dashboard','<div class="btn btn-sm btn-primary">Kembali</div>') ?>
    <br><br>
</div>