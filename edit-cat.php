<?php include 'assets/header.php'; ?>
<?php include 'lib/connect.php'; ?>
<body>
	<div class="container grid-md">
		<header style="text-align: center;padding-top: 16px;padding-bottom: 8px;">
			<h1 style="font-weight: 100;margin-bottom: 4px;">Simple Blog</h1>
			<h4 style="margin-top: 8px;">Make blogging simply</h4>
		</header>
		<?php include 'assets/menu.php'; ?>
		<div class="columns" style="margin-top: 16px;">
			<div class="column col-8">
				<h4><i class="icon icon-flag"></i> Tambah Kategori</h4>
				<form method="post" action="update-cat.php">
					<div class="form-group">
						<label class="form-label">Kategori</label>
						<?php

						if(isset($_GET['idcat'])){
							$idcat = $_GET['idcat'];
							$viewCat = $lo->query("SELECT * FROM category WHERE idcat = '$idcat'");
							if($viewCat == true){
								while($showCat = $viewCat->fetch_array(MYSQLI_BOTH)){
						?>
						<input type="text" value="<?php echo $showCat['idcat']; ?>" style="display: none;" name="idcat">
						<input type="text" class="form-input" name="ucat" value="<?php echo $showCat['title']; ?>">
						<?php
								}
							}
						}

						?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="saveCat">Save Category</button>
					</div>
				</form>
			</div>
			<div class="column col-4">
				<?php include 'assets/right.php'; ?>
			</div>
		</div>
		<?php include 'assets/footer.php'; ?>
	</div>
</body>
</html>