<?php

class Db{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","root");


	function list(){

		$sql="select * from news";
		$res=$pdo->fetchAll();
		return $res;
	}
	function add($title,$content,$writer,$read){
		$sql="insert news ('title','content','writer','read') values ('$title','$content','$writer','$read')";
		$res=$pdo->exec($sql);
		if ($res) {
			echo "添加成功";
		}else{
			echo "添加失败";
		}
	}
}