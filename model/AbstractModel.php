<?php

class AbstractModel{

	private $conn;

	public function __construct(){
		$this->conn = new ConnSQL();
	}
/*
	public function getList($statement)
	{

		$result;

		if ($conn) {
			
		}
			

		$conn->closeConn();
		return $result;
	}
*/
	public function selectQuery($table_name){
		
		return $this->conn->queryConn('Select * From ' . $table_name);

	}

		/*
			$result = $conn->queryConn('Show Tables');
			while($row = $result->fetch_array())
			{
			  var_dump($row);
			  echo "<br />";
			}
			*/
	
}
