<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Data Program</i>  
  </div>
  <div class="alert alert-info" role="alert">
  
    <!-- merupakan isi content -->
   <div>
      <i class="fas fa-book" style="font-size:22px">  Daftar Program</i>
    </div><br>

    <?php echo $this->session->flashdata('Pesan') ?>
    
    <div class="pull-left"><a href="tambah_program" class="btn btn-primary">Tambah Data Program</a></div> 
    <br>
   
  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <TH>ID PROGRAM</TH>
      <TH>PROGRAM</TH>
    </tr>
    
    <?php 
    $no=1;
    foreach ($program as $pro) : ?>
    <tr>
      <td><?php echo $pro->id_program; ?></td>
      <td><?php echo $pro->nama_program; ?></td>
    </tr>
    <?php endforeach; ?>

  </table>
 
 
  </div>
  <!-- Button trigger modal -->
</div>