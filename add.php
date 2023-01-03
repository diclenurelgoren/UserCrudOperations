<script src="add.js"></script>
<div class="modal-dialog">
		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Yeni Kullanıcı</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Kullanıcı Adı</label>
						<input type="text" name="kulad" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Ad Soyad</label>
						<input type="text" name="adsoyad" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Telefon</label>
						<input type="text"name="tel" class="form-control" minlength="11" maxlength="11" required>
					</div>		
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>			
				</div>
				<div class="modal-footer">
                <a href="okey.php"><input type="submit" class="btn btn-danger" name="ekle"  value="Ekle"></a>
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Temizle">
					
				</div>
			</form>
		</div>
	</div>
<?php
include("ayar.php");
if($_POST["ekle"])
{
	$kulad=@$_POST["kulad"];
	$adsoyad=@$_POST["adsoyad"];
	$email=@$_POST["email"];
	$tel=@$_POST["tel"];

	$sec=mysql_query("select * from users");
	while($dizi=mysql_fetch_array($sec))
	{		
		if ($dizi['kulad']==$kulad)
		{
			?>
				<script>
					showalert("Kullanıcı Adı Bulunmakta");
				</script>
			<?php
			break;
		}
		else if($dizi['tel']==$tel || $dizi['adsoyad']==$adsoyad)
		{
			?>
				<script>
					showalert("Telefon numarası veya Ad Soyad Bulunmakta.");
				</script>
			<?php
			break;
		}
		else
		{
			$kekle=mysql_query("insert into users (sno,kulad,adsoyad,tel,email) values
			('','$kulad','$adsoyad','$tel','$email') ");
		}
	}
	if($kekle)
	{
		?>
		<script type="text/javascript">
			window.location = "http://localhost/deneme/okey.php";
		</script>
			<?php
		}
		
	else
	{
			?>
			<script>
			showalert("Kullanıcı Eklenemedi.");
			</script>
			<?php
	}
}
?>