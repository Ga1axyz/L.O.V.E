/*
 * @Descripttion: 
 * @version: 1.0
 * @Author: Ga1axy_z
 * @Date: 2021-08-02 13:47:25
 * @LastEditors: Ga1axy_z
 * @LastEditTime: 2022-04-16 19:05:04
 */
<?php

$MyCode = $_POST["MyCode"];

if($MyCode == " 相爱很难 - 2022.04.16 "){
	Header("location:./LoveU.html");
}else{
	Header("location:./jump.html");
}
?>