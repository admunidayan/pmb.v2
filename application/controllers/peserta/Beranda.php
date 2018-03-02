<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('admin/Admin_m');
    }
    public function index(){
        $data['title'] = $this->Admin_m->info_pt(1)->nama_info_pt;
        $data['infopt'] = $this->Admin_m->info_pt(1);
        $data['brand'] = 'asset/img/lembaga/'.$this->Admin_m->info_pt(1)->logo_pt;
        $data['users'] = $this->ion_auth->user()->row();
        $data['page'] = 'peserta/beranda-main-v';
                // pagging setting
        $this->load->view('peserta/beranda-v',$data);
    }
}
?>