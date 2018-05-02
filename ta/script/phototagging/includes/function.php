<?php
	//Start session (for error reporting, can be stripped out if needed)
	session_start();
	
	//Include database connection details
	require_once('conn.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	db_connect();

	$idAlbum = $_POST[idAlbum];
	$idFoto = $_POST[idFoto];
    $id_user = $_POST[id_user];
    $userTag=explode(";",$id_user);
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	if($_POST['tag']) {
		//Sanitize the POST values
		$title = clean($_POST['title']);
		$x1 = $_POST['x1'];
		$y1 = $_POST['y1'];
		$w = $_POST['w'];
		$h = $_POST['h'];
	
	
		//Input Validations
		/*
        if($title == '') {
			$errmsg_arr[] = 'Tag title missing.';
			$errflag = true;
		}
        */
		if($w == '' || $h == '') {
			$errmsg_arr[] = 'Area not selected';
			$errflag = true;
		}
	
	
		//If there are input validations, redirect back to the login form
		if($errflag) {
			$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
			session_write_close();
			header("location: ../../../index.php?idFoto=54&idAlbum=.php");
			exit();
		}
		
		//Insert tag into database. I am capturing more data than needed from a previous version but this could be useful oneday.
		//$qry = " INSERT INTO phototags (id, title, x1, y1, x2, y2, width, height) " .
		//" VALUES('', '".$title."', '".$x1."', '".$y1."', '".$_POST['x2']."', '".$_POST['y2']."', '".$w."', '".$h."') ";
         if($title=="")
        mysql_query("INSERT INTO userpnyfoto (id_user,id_foto) VALUES ('$userTag[0]','$_POST[idFoto]')");
        if($title=="") 
        {
         $title = $userTag[1];
         $qry = " INSERT INTO phototags (id, title, x1, y1, x2, y2, width, height,id_foto,id_user) " .
		" VALUES('', '".$title."', '".$x1."', '".$y1."', '".$_POST['x2']."', '".$_POST['y2']."', '".$w."', '".$h."','$_POST[idFoto]','$userTag[0]') ";
        }
        else $userTag[0]="";
		$qry = " INSERT INTO phototags (id, title, x1, y1, x2, y2, width, height,id_foto,id_user) " .
		" VALUES('', '".$title."', '".$x1."', '".$y1."', '".$_POST['x2']."', '".$_POST['y2']."', '".$w."', '".$h."','$_POST[idFoto]','$userTag[0]') ";
		
       
        
		$result=mysql_query($qry);
		
		//Check if query is ok
		if($result) {
			header("location: ../../../tampilDetailFoto2.php?idAlbum=$idAlbum&idFoto=$idFoto");
           
		} else {
			$errmsg_arr[] = 'Something went wrong.';
			$errflag = true;
	
			//If there are input validations, redirect back to the login form
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: ../../../tampilDetailFoto2.php?idAlbum=$idAlbum&idFoto=$idFoto");
				exit();
			}
		}
		exit();
	} elseif($_GET['delete']) {
		//Sanitize the POST values
		$id = clean($_GET['id']);
        $idAlbum1 = $_GET['idAlbum'];
        $idFoto1 = $_GET['idFoto'];
       	$qry = " DELETE FROM phototags where id = $id ";
        $result=mysql_query($qry);
        if($_GET['idUser']!="" || $idAlbum1=="")
        mysql_query("DELETE FROM tgsakhir.userpnyfoto WHERE id_user='$_GET[idUser]' AND id_foto='$idFoto1'");
        //echo "DELETE FROM tgsakhir.userpnyfoto WHERE id_user='$_GET[idUser]' AND id_foto='$idFoto1'";
        {
        if($idAlbum1!="") 
        header("location: ../../../tampilDetailFoto2.php?idAlbum=$idAlbum1&idFoto=$idFoto1");
        else
        header("location: ../../../profile.php");
        }
	} else {
		header("location: ../../../tampilDetailFoto2.php?idAlbum=$idAlbum&idFoto=$idFoto1");
	}
	
?>