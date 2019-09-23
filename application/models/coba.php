	>?php 

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

