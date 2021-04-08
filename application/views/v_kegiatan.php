<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Data Kegiatan</i>  
  </div>
  <div class="alert alert-info" role="alert">
  
    <!-- merupakan isi content -->
   <div>
      <i class="fas fa-book" style="font-size:22px">  Daftar Kegiatan</i>
    </div><br>

    <?php echo $this->session->flashdata('Pesan') ?>
    
    <div class="pull-left"><a href="tambah_kegiatan" class="btn btn-primary">Tambah Data Kegiatan</a></div> 
    <br>
   
  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <TH>ID KEGIATAN</TH>
      <TH>KEGIATAN</TH>
    </tr>
    
    <?php 
    $no=1;
    foreach ($kegiatan as $keg) : ?>
    <tr>
      <td><?php echo $keg->id_kegiatan; ?></td>
      <td><?php echo $keg->nama_kegiatan; ?></td>
    </tr>
    <?php endforeach; ?>

  </table>
 
 
  </div>
  <!-- Button trigger modal -->
</div>