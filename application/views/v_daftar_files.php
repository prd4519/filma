<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Dashboard</i>  
  </div>
  <div class="alert alert-info" role="alert">
  
    <!-- merupakan isi content -->
   <div>
      <i class="fas fa-book" style="font-size:22px">  Daftar Files</i>
    </div><br>

    <?php echo $this->session->flashdata('Pesan') ?>
    
    <div class="pull-left"><a href="Dashboard/tambah_files" class="btn btn-primary">Tambah Data</a></div> 
    <br>
   
  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <th>NO</th>
      <TH>TAHUN</TH>
      <TH>KEGIATAN</TH>
      <TH>KATEGORI</TH>
      <TH>PROGRAM</TH>
      <TH>BARANG</TH>
      <TH>NAMA FILE</TH>
      <TH>FILE</TH>
      <TH>TGL UPLOADS</TH>
      <TH colspan="3" style="text-align:center">AKSI</TH>
    </tr>
    <?php 
    $no=1;
    foreach ($daftar_file as $daffile) : ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $daffile->id_tahun; ?></td>
      <td><?php echo $daffile->id_kegiatan; ?></td>
      <td><?php echo $daffile->id_kategori; ?></td>
      <td><?php echo $daffile->id_program; ?></td>
      <td><?php echo $daffile->id_belanja; ?></td>
      <td><?php echo $daffile->nama_files; ?></td>
      <td><?php echo $daffile->files; ?></td>
      <td><?php echo $daffile->uploads; ?></td>
      <td width="20px"><?php echo anchor('Dashboard/detail/'.$daffile->id_files,'<div class="btn btn-small btn-info"><i class="fas fa-book-reader"></i></div>') ?></td>
      
    <?php
      if($this->session->userdata('role') == 'admin'){
    ?>
      <td width="20px"><?php echo anchor('Dashboard/update/'.$daffile->id_files,'<div class="btn btn-small btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    <?php } ?> 

    <?php
      if($this->session->userdata('role') == 'admin'){
    ?>
      <td width="20px"><?php echo anchor('Dashboard/delete/'.$daffile->id_files,'<div class="btn btn-small btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    <?php } ?>

    </tr>
    <?php endforeach; ?>
     
  </table>
 
 
  </div>
  <!-- Button trigger modal -->
</div>