<?php
include("ayar.php");
$guncelID=@$_GET["guncelID"];
$adsoyad=@$_POST["adsoyad"];
$kulad=@$_POST["kulad"];
$email=@$_POST["email"];
$tel=@$_POST["tel"];

$guncel2=@mysql_query("Update users set kulad='$kulad' , adsoyad='$adsoyad',tel='$tel' , email='$email'
WHERE sno='$guncelID'");	
		
	if($guncel2)
	{
		?>
       <script type="text/javascript">
		window.location = "http://localhost/deneme/updateokey.php";
	   </script>
		<?php
	}
	else
	{
		echo "Bir Sorun Oluştu Güncellenemedi...";
		header("refresh:1;url=index.php");
	}
	?>