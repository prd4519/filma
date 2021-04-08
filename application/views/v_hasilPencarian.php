<div class="container-fluid">
 
  <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt" style="font-size:20px">  Hasil Pencarian</i>  
  </div>
  <?php echo $this->session->set_flashdata('Pesan') ?>
  <?php echo anchor('Dashboard/tambah_files','<button class="btn btn-sm btn-primary mb-3">
                    <i class="fas fa-sm fa-plus-square"></i> Tambah File</button>'); ?>

  <table class="table table-striped table-bordered table-hover table-responsive">
    <tr>
      <th>NO</th>
      <TH>PROGRAM</TH>
      <TH>TAHUN</TH>
      <TH>KEGIATAN</TH>
      <TH>BARANG</TH>
      <TH>NAMA FILE</TH>
      <TH>FILE</TH>
      <TH>TGL UPLOADS</TH>
      <TH colspan="3" style="text-align:center">AKSI</TH>
    </tr>

    <?php if(count($cari)>0): ?>
    <?php 
    $no=1;
    foreach ($cari as $daffile) : ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $daffile->program; ?></td>
      <td><?php echo $daffile->tahun; ?></td>
      <td><?php echo $daffile->kegiatan; ?></td>
      <td><?php echo $daffile->belanja; ?></td>
      <td><?php echo $daffile->nama_files; ?></td>
      <td><?php echo $daffile->files; ?></td>
      <td><?php echo $daffile->uploads; ?></td>
      <td width="20px"><?php echo anchor('Dashboard/detail/'.$daffile->id_files,'<div class="btn btn-small btn-info"><i class="fas fa-book-reader"></i></div>') ?></td>
      <td width="20px"><?php echo anchor('Dashboard/update/'.$daffile->id_files,'<div class="btn btn-small btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    <?php
      if($this->session->userdata('role') == 'admin'){
    ?>
      <td width="20px"><?php echo anchor('Dashboard/delete/'.$daffile->id_files,'<div class="btn btn-small btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    <?php } ?>
    </tr>

    <?php endforeach; ?>

    <?php else : echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                        <strong>Data Tidak Ditemukan!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times</span>
                        </button>
                        </div>' ?>
    <?php endif; ?> 

  </table>
  <br>
  <?php echo anchor('Dashboard','<div class="btn btn-primary btn-sm">Kembali</div>') ?>
</div>