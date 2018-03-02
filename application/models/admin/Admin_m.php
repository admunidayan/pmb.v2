<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_m extends CI_Model
{
	public function info_pt($id){
		$this->db->where('id_info_pt', $id);
		$query = $this->db->get('info_pt');
		return $query->row();
	}
	public function cek_pt($id){
		$this->db->where('id_info_pt', $id);
		$query = $this->db->get('info_pt');
		return $query;
	}
	public function Update_pt($id,$data){
		$this->db->where('id_info_pt', $id);
		$this->db->update('info_pt',$data);
	}
	public function all_link(){
		$this->db->join('kategori_link', 'kategori_link.id_kategori_link = link.id_kategori_link');
		$query = $this->db->get('link');
		return $query->result();
	}
	public function all_kat_link(){
		$query = $this->db->get('kategori_link');
		return $query->result();
	}
	public function detail_link($id){
		$this->db->join('kategori_link', 'kategori_link.id_kategori_link = link.id_kategori_link');
		$this->db->where('id_link', $id);
		$query = $this->db->get('link');
		return $query->row();
	}
	public function detail_kategori_link($id){
		$this->db->where('id_kategori_link', $id);
		$query = $this->db->get('kategori_link');
		return $query->row();
	}
	function insert_link($data){
		$this->db->insert('link', $data);
	}
	function insert_kategori_link($data){
		$this->db->insert('kategori_link', $data);
	}
	function update_link($id,$data){
		$this->db->where('id_link',$id);
		$this->db->update('link', $data);
	}
	function update_kategori_link($id,$data){
		$this->db->where('id_kategori_link',$id);
		$this->db->update('kategori_link', $data);
	}
	public function delete_link($id){
		$this->db->where('id_link', $id);
		$this->db->delete('link');
	}
	public function cek_link_by_katelink($id){
		$this->db->where('id_kategori_link', $id);
		$query = $this->db->get('link');
		return $query->result();
	}
	public function delete_kategori_link($id){
		$this->db->where('id_kategori_link', $id);
		$this->db->delete('kategori_link');
	}
	// 
	public function select_all_data($table){
		$query = $this->db->get($table);
		return $query->result();
	}
	public function select_all_data_order($table,$field,$id){
		$this->db->where($field, $id);
		$query = $this->db->get($table);
		return $query->result();
	}
	public function select_all_data_bulan($bulan){
		$this->db->like('kode', $bulan);
		$query = $this->db->get('tanggal');
		return $query->result();
	}
	public function detail_data($table,$field,$id){
		$this->db->where($field, $id);
		$query = $this->db->get($table);
		return $query->result();
	}
	public function detail_data_order($table,$field,$id){
		$this->db->where($field, $id);
		$query = $this->db->get($table);
		return $query->row();
	}
	public function detail_obat($id){
		$this->db->where('menu.id_menu', $id);
		$this->db->join('kategori', 'kategori.id_kategori = menu.id_kategori');
		$query = $this->db->get('menu');
		return $query->row();
	}
	public function detail_data_nota($id){
		$this->db->where('nota.id_nota', $id);
		$this->db->join('status', 'status.id_status = nota.id_status');
		$this->db->join('users', 'users.id = nota.id_user');
		$query = $this->db->get('nota');
		return $query->row();
	}
	public function list_data_beli($nota){
		$this->db->where('menu_to_nota.id_nota',$nota);
		$this->db->join('menu', 'menu.id_menu = menu_to_nota.id_menu');
		$query = $this->db->get('menu_to_nota');
		return $query->result();
	}
	public function list_obat(){
		$this->db->join('kategori', 'kategori.id_kategori = menu.id_kategori');
		$query = $this->db->get('menu');
		return $query->result();
	}
	public function list_pembelian_hari_ini($tgl){
		$this->db->where('tgl_nota',$tgl);
		$this->db->join('status', 'status.id_status = nota.id_status');
		$this->db->join('users', 'users.id = nota.id_user');
		$this->db->order_by('nota.id_nota','desc');
		$query = $this->db->get('nota');
		return $query->result();
	}
	public function lastid($table,$field){
		$this->db->order_by($field, 'desc');
		$query = $this->db->get($table);
		return $query->row();
	}
	function create($table,$data){
		$this->db->insert($table,$data);
	}
	function update($table,$field,$id,$data){
		$this->db->where($field,$id);
		$this->db->update($table,$data);
	}
	function delete($table,$field,$id){
		$this->db->where($field, $id);
		$this->db->delete($table);
	}
	function count_data_menu($string,$kat){
		if (!empty($string)) {
			$this->db->like('nama_menu',$string);
			$this->db->or_like('kode_menu',$string);
		}
		if (!empty($kat)) {
			$this->db->where('menu.id_kategori',$kat);
		}
		return $this->db->get('menu')->num_rows();
	}
	public function select_all_data_menu($sampai,$dari,$string,$kat){
		if (!empty($string)) {
			$this->db->like('nama_menu',$string);
			$this->db->or_like('kode_menu',$string);
		}
		if (!empty($kat)) {
			$this->db->where('menu.id_kategori',$kat);
		}
		$this->db->join('kategori', 'kategori.id_kategori = menu.id_kategori');
		$this->db->order_by('nama_menu','asc');
		$query = $this->db->get('menu',$sampai,$dari);
		return $query->result();
	}
	function count_data_member($string){
		if (!empty($string)) {
			$this->db->like('first_name',$string);
			$this->db->or_like('username',$string);
		}
		if (!empty($tahun)) {
			$this->db->where('tahun',$string);
		}
		if (!empty($gel)) {
			$this->db->where('gelombang',$gel);
		}
		$this->db->where('stat_user',1);
		return $this->db->get('users')->num_rows();
	}
	public function select_all_data_member($sampai,$dari,$string,$tahun,$gel){
		if (!empty($string)) {
			$this->db->like('first_name',$string);
			$this->db->or_like('username',$string);
		}
		if (!empty($tahun)) {
			$this->db->where('tahun',$string);
		}
		if (!empty($gel)) {
			$this->db->where('gelombang',$gel);
		}
		$this->db->where('stat_user',1);
		$this->db->order_by('username','desc');
		$query = $this->db->get('users',$sampai,$dari);
		return $query->result();
	}
}
