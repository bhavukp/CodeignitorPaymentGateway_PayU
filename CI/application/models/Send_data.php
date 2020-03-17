<?php

class Send_data extends CI_Model{

	function insert_data($str){

		$this->db->insert("payment_data",$str);

	}

	function update_data($data3,$txnid){

		$this->db->where('tid',$txnid);
		$this->db->update('payment_data',$data3);

	}

}

?>