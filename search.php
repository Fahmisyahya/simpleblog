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
				<div class="columns">
				<?php

				if(isset($_POST['keyword'])){
					$keyword = $_POST['keyword'];
					$checkPost = $lo->query("SELECT * FROM post WHERE title AND content LIKE '%".$keyword."%'");
					if($checkPost == true){
						while($row == $checkPost->fetch_array(MYSQLI_BOTH)){
						?>
						<div class="column col-6">
							<div class="panel">
								<img src="img/<?php echo $row['img']; ?>">
								<div class="panel-header">
									<h5 class="panel-title"><?php echo $row['title']; ?></h5>
								</div>
								<div class="panel-body">
									<p><?php echo substr($row['content'], 0, 100); ?>...</p>
								</div>
							</div>
						</div>
						<?php
						}
					}
				}

				?>
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