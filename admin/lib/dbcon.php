<?php
//core
function dbcon()
{
	$user = "root";
	$pass = "";
	$host = "localhost";
	$db = "inventaris";
	// mysql_connect($host,$user,$pass);
	// mysql_select_db($db);
	return $conn = mysqli_connect($host, $user, $pass, $db);
}

function mysql_num_rows($query)
{
	return mysqli_num_rows($query);
}

function mysql_fetch_array($result)
{
	return mysqli_fetch_array($result);
}

function mysql_query($query)
{
	return mysqli_query(dbcon(), $query);
}

function mysql_error()
{
	return mysqli_error();
}

function mysql_fetch_assoc($query)
{
	return mysqli_fetch_assoc($query);
}

function host()
{
	$h = "http://" . $_SERVER['HTTP_HOST'] . "/thesis/";
	return $h;
}

function hRoot()
{
	$url = $_SERVER['DOCUMENT_ROOT'] . "/thesis/";
	return $url;
}

//parse string
function gstr()
{
	$qstr = $_SERVER['QUERY_STRING'];
	parse_str($qstr, $dstr);
	return $dstr;
}
