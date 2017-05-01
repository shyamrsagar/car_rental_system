<?php
class mymodel extends CI_Model{
function __construct()
{
parent::__construct();
$this->load->database();
}
public function insert($table,$data){
$data=$this->db->insert($table,$data);
if($data==1)
return "success";
else
return "fail";
}
public function update($table,$data,$condition)
{
$this->db->update($table,$data,$condition);
if($this->db->affected_rows()>0)
return "success";
else
return "fail";
}
public function delete($table,$condition)
{
return $this->db->delete($table,$condition);
}
public function gettable($table,$condition=null,$fields=null)
{
$result=array();
if(isset($fields))
$this->db->select($fields);
if(isset($condition))
$this->db->where($condition);
$query=$this->db>get($table);
foreach($query->result_array() as $row)
{
$result[]=$row;
}
return $result;
}
public function getquery($qry)
{
$query=$this->db->query($qry);
$result=array();
foreach($query->result_array() as $row)
{
$result[]=$row;
}
return $result;
}
}
?>