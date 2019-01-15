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
				<form method="post" action="send-cat.php">
					<div class="form-group">
						<label class="form-label">Kategori</label>
						<input type="text" class="form-input" name="cat">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="saveCat">Save Category</button>
					</div>
				</form>
				<table class="table table-stripped table-hover">
					<tr>
						<th>No. </th>
						<th>Title</th>
						<th>Tools</th>
					</tr>
					<?php

					$checkCat = $lo->query("SELECT * FROM category");
					$no = 1;
					if($checkCat == true){
						while($rowCat = $checkCat->fetch_array(MYSQLI_BOTH)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $rowCat['title']; ?></td>
						<td><a href="del-cat.php?idcat=<?php echo $rowCat['idcat']; ?>">Hapus</a> | <a href="edit-cat.php?idcat=<?php echo $rowCat['idcat']; ?>">Edit</a></td>
					</tr>
					<?php
						}
					}

					?>
				</table>
			</div>
			<div class="column col-4">
				<?php include 'assets/right.php'; ?>
			</div>
		</div>
		<?php include 'assets/footer.php'; ?>
	</div>
</body>
</html>