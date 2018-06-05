<?php
Class ConnSQL
{
	private $conn;

	public function openConn()
	{
		$dbhost = 'localhost';
		$dbuser = 'id5985449_admin';
		$dbpass = '12345678';
		$dbname = 'id5985449_tester';

		$this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
		if ($this->conn -> connect_error)
		{
			die("Connection failed:". $this->conn -> connect_error);
		}
	}

	public function queryConn($statement)
	{
		$this->openConn();
		if($this->conn)
			$query = $this->conn->query($statement);
		else echo("Error description: " . mysqli_error($this->conn));
		
		if(!$query){
		    echo("Error description: " . mysqli_error($this->conn));
		}
		$this->closeConn();
		return $query;
	}

	public function closeConn()
	{
		$this->conn->close();
	}

}
