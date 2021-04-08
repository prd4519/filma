<?php

class Dashboard extends CI_Controller{
	
	public function index(){

		$data['daftar_file']=$this->files_model->tampil_data('tb_files')->result();

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_daftar_files',$data);
		$this->load->view('v_footer');
	}

  public function tahun(){

		$data['tahun']=$this->files_model->tampil_data('tb_tahun')->result();

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_tahun',$data);
		$this->load->view('v_footer');
	}

  public function belanja(){

		$data['belanja']=$this->files_model->tampil_data('tb_belanja')->result();

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_belanja',$data);
		$this->load->view('v_footer');
	}

  public function program(){

		$data['program']=$this->files_model->tampil_data('tb_program')->result();

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_program',$data);
		$this->load->view('v_footer');
	}

  public function kategori(){

		$data['kategori']=$this->files_model->tampil_data('tb_kategori')->result();

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_kategori',$data);
		$this->load->view('v_footer');
	}

  public function kegiatan(){

		$data['kegiatan']=$this->files_model->tampil_data('tb_kegiatan')->result();

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_kegiatan',$data);
		$this->load->view('v_footer');
	}

	public function tambah_files(){
        
        $q_jFiles       =   "SELECT * FROM tb_jenis_files";
        $r_jFiles = $this->db->query($q_jFiles)->result();
 
        $q_satker       =   "SELECT * FROM tb_satker";
        $r_satker = $this->db->query($q_satker)->result();

		    $q_kategori       =   "SELECT * FROM tb_kategori";
        $r_kategori = $this->db->query($q_kategori)->result();

        $q_tahun       =   "SELECT * FROM tb_tahun";
        $r_tahun = $this->db->query($q_tahun)->result();

        $q_kegiatan       =   "SELECT * FROM tb_kegiatan";
        $r_kegiatan = $this->db->query($q_kegiatan)->result();

        $q_program       =   "SELECT * FROM tb_program";
        $r_program = $this->db->query($q_program)->result();

        $q_belanja       =   "SELECT * FROM tb_belanja";
        $r_belanja = $this->db->query($q_belanja)->result();
 
        $data = array(
        'jenis_files'   => $r_jFiles,
        'satker'        => $r_satker,
		    'kategori'		=> $r_kategori,
        'tahun'        => $r_tahun,
        'kegiatan'        => $r_kegiatan,
        'program'        => $r_program,
        'belanja'       => $r_belanja
        );
 
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('v_tambah_files',$data);
        $this->load->view('v_footer');
    }
 
    public function tambah_files_aksi(){
        $this->load->helper('date');
        date_default_timezone_set("Asia/Jakarta");
        $this->rules();
 
        if($this->form_validation->run() == FALSE){
            $this->tambah_files();
        }else{
            $id_satker          = $this->input->post('id_satker');
			      $id_kategori          = $this->input->post('id_kategori');
            $id_tahun          = $this->input->post('id_tahun');
            $id_kegiatan          = $this->input->post('id_kegiatan');
            $id_program          = $this->input->post('id_program');
            $id_belanja          = $this->input->post('id_belanja');
            $nama_files         = strtoupper($this->input->post('nama_files'));
            $diskripsi          = strtoupper($this->input->post('diskripsi'));
            $upload             = date("Y-m-d H:i:s");
            $id_jenis_files     = $this->input->post('jenis_files');
            $files              = $_FILES['files'];
            if($files=''){}else{
                //TENTUKAN PATH FILES
                $config['upload_path'] ='./assets/uploads/';
                $config['allowed_types']='jpg|pdf|png|docx|doc';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('files')){
                    $this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Harap pilih Files yang akan di upload !!!!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
                    //echo "Gagal upload !!! anda belum milih file untuk diupload  ".
                    redirect('Dashboard/tambah_files');
                    //echo "Gagal upload"; die();
                }else{
                    $files=$this->upload->data('file_name');
                }
            }
 
            $data = array(
                'id_satker'             =>$id_satker,
				        'id_kategori'           =>$id_kategori,
                'id_tahun'              =>$id_tahun,
                'id_kegiatan'           =>$id_kegiatan,
                'id_program'            =>$id_program,
                'id_belanja'            =>$id_belanja,
                'nama_files'            =>$nama_files,
                'diskripsi'             =>$diskripsi,
                'uploads'               =>$upload,
                'id_jenis_files'        =>$id_jenis_files,
                'files'                 =>$files
            );
 
            $this->files_model->insert_data($data,'tb_files');
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Data Files Berhasil ditambahkan!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
            redirect('Dashboard');
        }
    }
 
    public function rules(){
 
        $this->form_validation->set_rules('nama_files','Nama File','required',['required' => 'Nama File Wajib Diisi!']);
        //$this->form_validation->set_rules('diskripsi','Diskripsi','required',['required' => 'Diskripsi Wajib Diisi!']);
        $this->form_validation->set_rules('id_satker','Satker','required',['required' => 'Satker Wajib Diisi!']);
	    	$this->form_validation->set_rules('id_kategori','Kategori','required',['required' => 'Kategori Wajib Diisi!']);
        $this->form_validation->set_rules('jenis_files','Diskripsi','required',['required' => 'Jenis File Wajib Diisi!']);
         
    }

    public function detail($id){

        $data['detail']=$this->files_model->ambil_id_files($id);
 
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('v_detail',$data);
        $this->load->view('v_footer');
    }

    public function update($id){
		$where = array('id' =>$id);

		$qfiles="SELECT *from tb_files where id_files='$id'";
		$exqfiles=$this->db->query($qfiles)->result();

		$query		=	"SELECT tb_satker.id_satker,tb_satker.nama_pendek,tb_jenis_files.id_jenis_files,tb_jenis_files.jenis_files,tb_jenis_files.id_satker FROM tb_satker INNER join tb_jenis_files ON (tb_satker.id_satker = tb_jenis_files.id_satker)	";
		$sql = $this->db->query($query)->result();
		$data = array(
		'jenis_files'	=> $sql,
		'files'			=>$exqfiles
		);

		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_daftar_filesUpdate',$data);
		$this->load->view('v_footer');
	}

    public function update_aksi(){
		$this->rules();

		if($this->form_validation->run() == FALSE){
			$this->update();
		}else{

            $id_satker          = $this->input->post('id_satker');
			      $id_kategori          = $this->input->post('id_kategori');
            $nama_files         = strtoupper($this->input->post('nama_files'));
            $diskripsi          = strtoupper($this->input->post('diskripsi'));
            $upload             = date("Y-m-d H:i:s");
            $id_jenis_files     = $this->input->post('jenis_files');
            $files              = $_FILES['files'];

		    if($files=''){}else{
				//TENTUKAN PATH FILES
				$config['upload_path'] ='./assets/uploads/';
				$config['allowed_types']='jpg|pdf|png|docx|doc';
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('files')){
					$this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Harap pilih Files yang akan diuploads !!!!.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					//echo "Gagal upload !!! anda belum milih file untuk diupload  ".
					redirect('Dashboard/update'.'/'.$id_files);
					
				}else{
					$files=$this->upload->data('file_name');
				}
			}

			$data = array(
				'id_satker'             =>$id_satker,
				'id_kategori'           =>$id_kategori,
                'nama_files'            =>$nama_files,
                'diskripsi'             =>$diskripsi,
                'uploads'               =>$upload,
                'id_jenis_files'        =>$id_jenis_files,
                'files'                 =>$files
			);

			$where =array('id_files'	=>$id_files);

			$this->files_model->update_data($where,$data,'tb_files');
			$this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Files Berhasil diupdate!.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('Dashboard'); //ditampilkan daftar fileny...
		}
	}

  public function delete($id){
		$where = array('id_files' =>$id);

		$this->files_model->hapus_data($where,'tb_files');
    $this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissable fade show" role="alert">
                                  <strong> Data File berhasil Dihapus!
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>');
    redirect('Dashboard'); //Menampilkan daftar file
	}

  public function hasilPencarian(){
    $data['cari'] = $this->files_model->cariData();
    $this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('v_hasilPencarian',$data);
		$this->load->view('v_footer');

    $this->session->set_flashdata('Pesan','<div class="alert alert-danger alert-dismissable fade show" role="alert">
                                  <strong> File telah ditemukan!
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>');
  }

  public function tambah_tahun(){
    $q_tahun       =   "SELECT * FROM tb_tahun";
    $r_tahun = $this->db->query($q_tahun)->result();

    $data = array(
    'tahun'        => $r_tahun
    );

    $this->load->view('v_header');
    $this->load->view('v_sidebar');
    $this->load->view('v_tambah_tahun',$data);
    $this->load->view('v_footer');
}

public function tambah_tahun_aksi(){
    $this->rules();

        $id_tahun           = $this->input->post('id_tahun');
        $tahun              = strtoupper($this->input->post('tahun'));
      

        $data = array(
            'id_tahun'              =>$id_tahun,
            'tahun'                 =>$tahun
        );

        $this->files_model->insert_data($data,'tb_tahun');
        $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Data Files Berhasil ditambahkan!.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>');
        redirect('Dashboard/tahun');
    }

    public function tambah_kategori(){
      $q_kategori       =   "SELECT * FROM tb_kategori";
      $r_kategori = $this->db->query($q_kategori)->result();

      $q_satker       =   "SELECT * FROM tb_satker";
      $r_satker = $this->db->query($q_satker)->result();
  
      $data = array(
      'kategori'        => $r_kategori,
      'satker'          => $r_satker
      );
  
      $this->load->view('v_header');
      $this->load->view('v_sidebar');
      $this->load->view('v_tambah_kategori',$data);
      $this->load->view('v_footer');
  }
  
  public function tambah_kategori_aksi(){
      $this->rules();
  
          $id_kategori            = $this->input->post('id_kategori');
          $nama_kategori          = strtoupper($this->input->post('nama_kategori'));
          $id_satker              = $this->input->post('id_satker');
        
  
          $data = array(
              'id_kategori'              =>$id_kategori,
              'nama_kategori'            =>$nama_kategori,
              'id_satker'                =>$id_satker
          );
  
          $this->files_model->insert_data($data,'tb_kategori');
          $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Files Berhasil ditambahkan!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>');
          redirect('Dashboard/kategori');
      }

      public function tambah_kegiatan(){
        $q_kegiatan     =   "SELECT * FROM tb_kegiatan";
        $r_kegiatan      = $this->db->query($q_kegiatan)->result();
  
        $q_satker       =   "SELECT * FROM tb_satker";
        $r_satker = $this->db->query($q_satker)->result();
    
        $data = array(
        'kegiatan'        => $r_kegiatan,
        'satker'          => $r_satker
        );
    
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('v_tambah_kegiatan',$data);
        $this->load->view('v_footer');
    }
    
    public function tambah_kegiatan_aksi(){
        $this->rules();
    
            $id_kegiatan            = $this->input->post('id_kegiatan');
            $nama_kegiatan          = strtoupper($this->input->post('nama_kegiatan'));
            $id_satker              = $this->input->post('id_satker');
          
    
            $data = array(
                'id_kegiatan'              =>$id_kegiatan,
                'nama_kegiatan'            =>$nama_kegiatan,
                'id_satker'                =>$id_satker
            );
    
            $this->files_model->insert_data($data,'tb_kegiatan');
            $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Data Files Berhasil ditambahkan!.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>');
            redirect('Dashboard/kegiatan');
        }
  
        public function tambah_program(){
          $q_program     =   "SELECT * FROM tb_program";
          $r_program      = $this->db->query($q_program)->result();
    
          $q_satker       =   "SELECT * FROM tb_satker";
          $r_satker = $this->db->query($q_satker)->result();
      
          $data = array(
          'program'        => $r_program,
          'satker'          => $r_satker
          );
      
          $this->load->view('v_header');
          $this->load->view('v_sidebar');
          $this->load->view('v_tambah_program',$data);
          $this->load->view('v_footer');
      }
      
      public function tambah_program_aksi(){
          $this->rules();
      
              $id_program            = $this->input->post('id_program');
              $nama_program          = strtoupper($this->input->post('nama_program'));
              $id_satker              = $this->input->post('id_satker');
            
      
              $data = array(
                  'id_program'              =>$id_program,
                  'nama_program'            =>$nama_program,
                  'id_satker'                =>$id_satker
              );
      
              $this->files_model->insert_data($data,'tb_program');
              $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data Files Berhasil ditambahkan!.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>');
              redirect('Dashboard/program');
          }


          public function tambah_belanja(){
            $q_belanja     =   "SELECT * FROM tb_belanja";
            $r_belanja      = $this->db->query($q_belanja)->result();
      
            $q_satker       =   "SELECT * FROM tb_satker";
            $r_satker = $this->db->query($q_satker)->result();
        
            $data = array(
            'belanja'        => $r_belanja,
            'satker'          => $r_satker
            );
        
            $this->load->view('v_header');
            $this->load->view('v_sidebar');
            $this->load->view('v_tambah_belanja',$data);
            $this->load->view('v_footer');
        }
        
        public function tambah_belanja_aksi(){
            $this->rules();
        
                $id_belanja            = $this->input->post('id_belanja');
                $nama_barang          = strtoupper($this->input->post('nama_barang'));
                $id_satker              = $this->input->post('id_satker');
              
        
                $data = array(
                    'id_belanja'              =>$id_belanja,
                    'nama_barang'             =>$nama_barang,
                    'id_satker'                =>$id_satker
                );
        
                $this->files_model->insert_data($data,'tb_belanja');
                $this->session->set_flashdata('Pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Data Files Berhasil ditambahkan!.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>');
                redirect('Dashboard/belanja');
            }
	/* New Function */

}
