<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Data Tahun</i>  
  </div>
  <div class="alert alert-info" role="alert">
  
    <!-- merupakan isi content -->
   <div>
      <i class="fas fa-book" style="font-size:22px">  Daftar Tahun</i>
    </div><br>

    <?php echo $this->session->flashdata('Pesan') ?>
    
    <div class="pull-left"><a href="tambah_tahun" class="btn btn-primary">Tambah Data Tahun</a></div> 
    <br>
   
  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <TH>ID TAHUN</TH>
      <TH>TAHUN</TH>
    </tr>
    
    <?php 
    $no=1;
    foreach ($tahun as $th) : ?>
    <tr>
      <td><?php echo $th->id_tahun; ?></td>
      <td><?php echo $th->tahun; ?></td>
    </tr>
    <?php endforeach; ?>

  </table>
 
 
  </div>
  <!-- Button trigger modal -->
</div>