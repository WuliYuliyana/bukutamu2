<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script type="text/javascript" src="../admin/modul/tinymce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinymce.init({
			mode:"textareas",
			theme:"advanced",
		});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	
</head>
<body>
	<div id="container">
		<h2>Buku Tamu</h2>
		<hr>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>




									<form action="aksi.php?module=bukutamu&act=inputtamu" method="post">
									  <div class="form-row">
									    <div class="col-md-4 mb-3">
									      <label for="validationCustom01">ID :</label>
									      <input type="text" name="id_bktamu" class="form-control" id="validationCustom01" placeholder="Ketik ID anda" required>
									      <div class="valid-feedback">
									        Looks good!
									      </div>
									    </div>
									    <div class="col-md-4 mb-3">
									      <label for="validationCustom02">Status :</label>
									      <input type="text" name="status_bktamu" class="form-control" id="validationCustom02" placeholder="Ketik Status Anda"  required>
									      <div class="valid-feedback">
									        Looks good!
									      </div>
									    </div>
									    <div class="col-md-4 mb-3">
									      <label for="validationCustomUsername">Nama :</label>
									      <div class="input-group">
									        <input type="text" name="nama_bktamu" class="form-control" id="validationCustomUsername" placeholder="Ketik Nama Anda" aria-describedby="inputGroupPrepend" required>
									        <div class="invalid-feedback">
									          Silahkan isi nama anda
									        </div>
									      </div>
									    </div>
									  </div>
									  <div class="form-row">
									    <div class="col-md-4 mb-3">
									      <label for="validationCustom03">Email :</label>
									      <input type="text" name="email_bktamu" class="form-control" id="validationCustom03" placeholder="Ketik Email Anda" required>
									      <div class="invalid-feedback">
									        Masukan Alamat Email Yang valid
									      </div>
									    </div>
									    <div class="col-md-4 mb-3">
									      <label for="validationCustom04">Alamat :</label>
									      <input type="text" name="alamat_bktamu" class="form-control" id="validationCustom04" placeholder="Ketik Alamat Anda" required>
									      <div class="invalid-feedback">
									        Masukan Alamat yang valid
									      </div>
									    </div>
									    <div class="col-md-4 mb-3">
									      <label for="validationCustom05">Tanggal :</label>
									      <input type="date" name="tgl_bktamu" class="form-control" id="validationCustom05" placeholder="Zip" required>
									      <div class="invalid-feedback">
									        Isi tanggal
									      </div>
									    </div>
									    <div class="col-md-12">
									      <label for="validationCustom05">Komentar :</label>
									      <textarea name="komentar"></textarea></p>
									      <div class="invalid-feedback">
									        Isi komentar anda
									      </div>
									    </div>
									  </div>
									  <div class="form-group">
									    <div class="form-check">
									      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
									      <label class="form-check-label" for="invalidCheck">
									        Agree to terms and conditions
									      </label>
									      <div class="invalid-feedback">
									        You must agree before submitting.
									      </div>
									    </div>
									  </div>
									  <button class="btn btn-primary" type="submit"  name="go" value="Kirim" >Kirim</button>
									  <button class="btn btn-primary" type="reset" name="del" value="Hapus"  >Hapus</button>
									</form>

									<script>
									// Example starter JavaScript for disabling form submissions if there are invalid fields
									(function() {
									  'use strict';
									  window.addEventListener('load', function() {
									    // Fetch all the forms we want to apply custom Bootstrap validation styles to
									    var forms = document.getElementsByClassName('needs-validation');
									    // Loop over them and prevent submission
									    var validation = Array.prototype.filter.call(forms, function(form) {
									      form.addEventListener('submit', function(event) {
									        if (form.checkValidity() === false) {
									          event.preventDefault();
									          event.stopPropagation();
									        }
									        form.classList.add('was-validated');
									      }, false);
									    });
									  }, false);
									})();
									</script>





		<!-- <form action="aksi.php?module=bukutamu&act=inputtamu" method="post">
			<p><b>Id :</b><br><input type="text" name="id_bktamu" placeholder="Ketik id anda" required /></p>
			<p><b>Status :</b><br><input type="text" name="status_bktamu" placeholder="Ketik status anda" required /></p>
			<p><b>Nama :</b><br><input type="text" name="nm_bktamu" placeholder="Ketik nama anda" /></p>
			<p><b>Email :</b><br><input type="text" name="email_bktamu" placeholder="Ketik email anda" /></p>
			<p><b>Alamat :</b><br><input type="text" name="alamat_bktamu" placeholder="Ketik alamat anda" /></p>
			<p><b>Tanggal : </b></p><input type="date" name="tgl_bktamu" required />
			<p><b>Komentar :</b><br><textarea  name="komentar"></textarea></p>
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
		</form> -->
	</div>
	<?php
	include '../include/koneksi.php';
	$sql ='select *from buku_tamu';
	$query=mysqli_query($koneksi,$sql);
	while($data=mysqli_fetch_array($query)){?>
				<?php echo $data['id_bktamu']?><br>
				<?php echo $data['status_bktamu']?><br>
				<?php echo $data['nm_bktamu']?><br>
				<?php echo $data['email_bktamu']?><br>
				<?php echo $data['alamat_bktamu']?><br>
				<?php echo $data['tgl_bktamu']?>
				<?php echo $data['komentar']?><br>
			<?php
		}
		?>
</body>
</html>

