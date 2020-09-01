<?php
class User_model extends CI_MODEL
{

	function create($formArray)
	{
		$this->db->insert('users',$formArray);
	}


function all(){
	return $users = $this->db->get('users')->result_array();
}

function getUser($userId){
	$this->db->where('id',$userId);
	return $user = $this->db->get('users')->row_array();
}
function updateUser($userId,$formArray){
	$this->db->where('id',$userId);
	$this->db->update('users',$formArray);
	
}
  function deleteUser($userId)
  {
   $this->db->where('id',$userId);
   $this->db->delete('users');
	
  }
}
?>