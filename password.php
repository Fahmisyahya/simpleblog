<?php include 'assets/header.php'; ?>
<?php include 'lib/connect.php'; ?>
<body>
	<div class="container grid-md">
		<header style="text-align: center;padding-top: 16px;padding-bottom: 8px;">
			<h1 style="font-weight: 100;margin-bottom: 4px;">Simple Blog</h1>
			<h4 style="margin-top: 8px;">Make blogging simply</h4>
		</header>
		<?php include 'assets/menu.php'; ?>
		<div class="columns" style="margin-top: 16px;margin-bottom: 16px;">
			<div class="column col-8">
				<div class="panel">
					<div class="panel-header">
						<h4 class="panel-title"><i class="icon icon-people"></i> Ganti Password</h4>
					</div>
					<div class="panel-body">
						<form method="post" action="save-password.php">
							<?php

							if(isset($_GET['iduser'])){
								$iduser = $_GET['iduser'];
								$checkId = $lo->query("SELECT * FROM user");
								if($checkId == true){
									while($rowId = $checkId->fetch_array(MYSQLI_BOTH)){
							?>
							<input type="text" value="<?php echo $rowId['iduser']; ?>" name="id" style="display: none;">
							<?php
									}
								}
							}

							?>
							<div class="form-group">
								<label class="form-label">Password Lama</label>
								<input type="password" class="form-input" name="old">
							</div>
							<div class="form-group">
								<label class="form-label">Password Baru</label>
								<input type="password" class="form-input" name="new">
							</div>
							<div class="form-group">
								<label class="form-label">Masukkan password baru lagi</label>
								<input type="password" class="form-input" name="new2">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="save">Simpan</button>
							</div>
						</form>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="column col-4">
				<?php include 'assets/right.php'; ?>
			</div>
		</div>
		<?php include 'assets/footer.php'; ?>
	</div>
</body>
</html>