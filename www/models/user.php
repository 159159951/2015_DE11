<?php 
//Ket noi voi database
 $connect = mysql_connect("localhost","root","") or die ("Loi ket noi toi CSDL");
 
 //Ket noi voi database shopping
 $select_db = mysql_select_db("shopping",$connect) or die ("Loi ket noi toi database");
 

?>