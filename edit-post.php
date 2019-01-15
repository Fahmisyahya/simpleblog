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
				<h4><i class="icon icon-edit"></i> Edit Posting</h4>
				<div class="panel" style="margin-bottom: 8px;">
					<div class="panel-header">
						<?php

							error_reporting(0);

							if(isset($_GET['id'])){
								$id = $_GET['id'];
								$checkPost = $lo->query("SELECT * FROM post WHERE idpost = '$id'");
								if($checkPost == true){
									while($rowPost = $checkPost->fetch_array(MYSQLI_BOTH)){
						?>
						<img src="img/<?php echo $rowPost['img']; ?>" style="width: 100%;">
					</div>
					<div class="panel-body">
						<form method="post" action="update-post.php?act=imgMedia" enctype="multipart/form-data">
							<input type="text" name="id" value="<?php echo $rowPost['idpost']; ?>" style="display: none;">
							<div class="form-group">
								<label class="form-label">Image</label>
								<input type="file" name="image" class="form-input">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="upload">Upload</button>
							</div>
						</form>
					</div>
					<?php
									}
								}
							}
						?>
					<div class="panel-footer"></div>
				</div>
				<form method="post" action="update-post.php?act=stringText">
					<?php

					error_reporting(0);

					if(isset($_GET['id'])){
						$id = $_GET['id'];
						$checkPost = $lo->query("SELECT * FROM post WHERE idpost = '$id'");
						if($checkPost == true){
							while($rowPost = $checkPost->fetch_array(MYSQLI_BOTH)){
						?>
						<input type="text" name="id" value="<?php echo $rowPost['idpost']; ?>" style="display: none;">
						<div class="form-group">
							<label class="form-label">Title</label>
							<input type="text" class="form-input" name="title" value="<?php echo $rowPost['title']; ?>">
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
							<textarea id="content" name="content"><?php echo $rowPost['content']; ?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="post">Save Post</button>
						</div>
						<?php
							}
						}
					}

					?>
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