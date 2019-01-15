<?php

include 'lib/connect.php';
include 'assets/header.php';

?>
<body>
	<div class="container grid-md">
		<header style="text-align: center;padding-top: 16px;padding-bottom: 8px;">
			<h1 style="font-weight: 100;margin-bottom: 4px;">Simple Blog</h1>
			<h4 style="margin-top: 8px;">Make blogging simply</h4>
		</header>
		<?php include 'assets/menu.php'; ?>
		<div class="columns" style="margin-top: 16px;margin-bottom: 16px;">
			<div class="column col-8">
				<h4><i class="icon icon-edit"></i> Buat Posting</h4>
				<form method="post" action="send-posting.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="form-label">Title</label>
						<input type="text" class="form-input" name="title">
					</div>
					<div class="form-group">
						<label class="form-label">Category</label>
						<select name="category" class="form-input">
							<?php

							$checkCat = $lo->query("SELECT * FROM category");
							if($checkCat == true){
								while($rowCat = $checkCat->fetch_array(MYSQLI_BOTH)){
							?>
							<option value="<?php echo $rowCat['title']; ?>"><?php echo $rowCat['title']; ?></option>
							<?php
								}
							}

							?>
						</select>
						<small>Untuk membuat <b>Category</b> , Klik menu <mark><i class="icon icon-flag"></i> Tambah Kategori</mark></small>
					</div>
					<div class="form-group">
						<label class="form-label">Content</label>
						<textarea id="content" name="content"></textarea>
					</div>
					<div class="form-group">
						<label class="form-label">Image</label>
						<input type="file" name="image" class="form-input">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="post">Save Post</button>
					</div>
				</form>
			</div>
			<div class="column col-4">
				<?php include 'assets/right.php'; ?>
			</div>
		</div>
		<?php include 'assets/footer.php'; ?>
	</div>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('content');
	</script>
</body>
</html>