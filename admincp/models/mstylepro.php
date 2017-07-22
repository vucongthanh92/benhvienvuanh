
<?php
class Models_MStylePro extends Project
{
	function __construct(){
		parent::__construct();
	}
	
	/*
	 * liet ke danh sach du lieu
	 */
	function listdata($select = '', $where = '', $order = '', $limit = ''){
		
		if($select != ''){
			$this->select($select);
		}
		if($where !=''){
			$this->where($where);
		}
		
		$this->getdata(TBL_STYLEPRO,$order,$limit);
		return $this->fetchall();
	}
	
	/*
	 * lay tong so dong
	 */
	function countdata($where = ""){
		if($where != "")
			$this->where($where);
		$this->getdata(TBL_STYLEPRO);
		return $this->num_rows();
	}
	
	
	/*
	 * them mot tin
	 */
	function addListData($arr){
		if(!empty($arr)){
			foreach ($arr as $item){
				$this->insert(TBL_STYLEPRO,$item);
			}	
		}
	}
	
	/*
	 * delete nhieu dong
	 */
	function del_allcheck($id){
		$this->delete(TBL_STYLEPRO,'idpro = "'.$id.'"');
	}

}
?>