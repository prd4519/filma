<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Data Kagetori</i>  
  </div>
  <div class="alert alert-info" role="alert">
  
    <!-- merupakan isi content -->
   <div>
      <i class="fas fa-book" style="font-size:22px">  Daftar Kategori</i>
    </div><br>

    <?php echo $this->session->flashdata('Pesan') ?>
    
    <div class="pull-left"><a href="tambah_kategori" class="btn btn-primary">Tambah Data Kategori</a></div> 
    <br>
   
  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <TH>ID KATEGORI</TH>
      <TH>KATEGORI</TH>
    </tr>
    
    <?php 
    $no=1;
    foreach ($kategori as $kat) : ?>
    <tr>
      <td><?php echo $kat->id_kategori; ?></td>
      <td><?php echo $kat->nama_kategori; ?></td>
    </tr>
    <?php endforeach; ?>

  </table>
 
 
  </div>
  <!-- Button trigger modal -->
</div>