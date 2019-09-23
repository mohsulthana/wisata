 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_hotel extends CI_Model {

	public function getUser($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function tambahData($table_name,$data){
		$tambah= $this->db->insert($table_name,$data);
		return $tambah;

	}

	public function editData($table_name,$data,$no){
		$this->db->where('no',$no);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function editDataResto($table_name,$data,$no){
		$this->db->where('id',$no);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function editDataWisata($table_name,$data,$no){
		$this->db->where('id',$no);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function editDataSeni($table_name,$data,$no){
		$this->db->where('id',$no);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}

	public function hapusData($table_name,$id){
		$hapus = $this->db->delete($table_name, array('no' => $id));
		return $hapus;
	}
	public function hapusDataResto($table_name,$id){
		$hapus = $this->db->delete($table_name, array('id' => $id));
		return $hapus;
	}
	public function hapusDataWisata($table_name,$id){
		$hapus = $this->db->delete($table_name, array('id' => $id));
		return $hapus;
	}
	public function hapusDataSeni($table_name,$id){
		$hapus = $this->db->delete($table_name, array('id' => $id));
		return $hapus;
	}

	public function dataEdit($table_name, $no){

		$this->db->where('no',$no);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
	public function dataEditResto($table_name, $no){

		$this->db->where('id',$no);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
	public function dataEditWisata($table_name, $no){

		$this->db->where('id',$no);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
	public function dataEditSeni($table_name, $no){

		$this->db->where('id',$no);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
}

