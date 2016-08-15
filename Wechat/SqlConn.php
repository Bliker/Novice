<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2016/8/14
 * Time: 12:09
 */
    $conn = mysql_connect("localhost","root","") or die('Could not connect: ' . mysql_error());
    mysql_select_db("regist",$conn);
    mysql_query("set names 'UTF-8'");
?>