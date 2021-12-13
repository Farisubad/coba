<?php
class dataparkir  extends CI_Model{
	function input($uji){
		$this->db->insert('tbl_parkir',$uji);
	}

function ambildata(){
	$query=$this ->db-> get('tbl_parkir');
	return $query->result();
}
function ambildatadetail($plat){
	$this ->db-> where('plat',$plat);
	$query=$this ->db-> get('tbl_parkir');
	return $query->row();
}
function updatedataparkiran($plat,$data){
	$this ->db-> where('plat',$plat);
	$this ->db-> update('tbl_parkir',$data);
	
}
function deletedataparkir($plat){
	$this ->db-> where('plat',$plat);
	$this ->db-> delete('tbl_parkir');
	
}
}
    ?>