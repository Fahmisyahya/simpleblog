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

				if(isset($_GET['search'])){
					$search = $_GET['search'];
					$checkPost = $lo->query("SELECT * FROM post WHERE label LIKE '%".$search."%'");
					if($checkPost == true){
						while($rowPost = $checkPost->fetch_array(MYSQLI_BOTH)){
				?>
					<div class="column col-6">
						<div class="panel">
							<img src="img/<?php echo $rowPost['img']; ?>" style="width: 100%;">
							<div class="panel-header">
								<h5 class="panel-title"><?php echo $rowPost['title']; ?></h5>
								<p><?php echo substr($rowPost['content'],0,100); ?>...</p>
								<a href="see-posting.php?id=<?php echo $rowPost['idpost']; ?>" class="btn btn-primary" style="margin-bottom: 16px;">Selengkapnya</a>
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