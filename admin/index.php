<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<meta charset="utf-8">

</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
<div class="container" style="margin-top: 230px;">
	<h1 align="center">Login</h1>
<form method="post" action="cek_login.php">
  <div class="form-group">
    <label for="id_user">Email</label>
    <input name="id_user" type="text" class="form-control" id="id_user" placeholder="Masukan email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Masukan Password">
  </div>
  <button type="submit" name="kirim" class="btn btn-primary" value="kirim">Kirim</button>
</form>
</div>
</body>
</html>
