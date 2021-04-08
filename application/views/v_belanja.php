<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Data Belanja</i>  
  </div>
  <div class="alert alert-info" role="alert">
  
    <!-- merupakan isi content -->
   <div>
      <i class="fas fa-book" style="font-size:22px">  Daftar Belanja</i>
    </div><br>

    <?php echo $this->session->flashdata('Pesan') ?>
    
    <div class="pull-left"><a href="tambah_belanja" class="btn btn-primary">Tambah Data Belanja</a></div> 
    <br>
   
  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <TH>ID BARANG</TH>
      <TH>BARANG</TH>
    </tr>
    
    <?php 
    $no=1;
    foreach ($belanja as $bel) : ?>
    <tr>
      <td><?php echo $bel->id_belanja; ?></td>
      <td><?php echo $bel->nama_barang; ?></td>
    </tr>
    <?php endforeach; ?>

  </table>
 
 
  </div>
  <!-- Button trigger modal -->
</div>