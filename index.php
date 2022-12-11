<?php 

session_start();

$token = md5(rand(1, 999) . 'kophyo');

$_SESSION['token'] = $token; ?>

<!DOCTYPE html>
<html lang="en">
<div><span style="font-size:20; color:lime; background-color:black; border-radius: 5px;">&nbsp; Upload Program &nbsp;</span></div> <br>

<?php if(isset($_GET['error'])) : ?>
<div>
<span style="color:red;font-size:14;">Your file have error.</span>
</div> <br>
<?php endif ?>

<?php if(isset($_GET['uploaded'])) : ?>
<div>
<span style="color:green;font-size:14;">Your file is uploaded.</span>
</div> <br>
<?php endif ?>

<?php if(isset($_GET['nopermission'])) : ?>
<div>
<span style="color:red;font-size:14;">You have no permission to upload.</span>
</div> <br>
<?php endif ?>

<form action="_actions/upload.php?token=<?= $token ?>" method="post" enctype="multipart/form-data">
			<div>
				<input type="text" name="username" style="color: green; border-radius: 5px; width: 100px; height: 25px; font-family: times,serif; font-size: 15px;" placeholder="User_ID" required> <br> <br>

				<input type="file" name="file" style="color: green; border-radius: 5px; width: 190px; font-family: times,serif;" required>

				<button style="color: white; background-color: green; border-radius: 5px; font-family: times,serif;">Upload Profile</button>
			</div> <br>
		</form>

<a href="./data/" style="color:blue; font-size:14;">View Your Files</a>
</html>