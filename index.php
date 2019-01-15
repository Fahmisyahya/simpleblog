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
				<?php

					$limit = 5;
					$page = isset($_GET['postPage']) ? (int)$_GET['postPage'] : 1;
					$start = ($page>1) ? ($page * $limit) - $limit : 0;
					$checkPost = $lo->query("SELECT * FROM post ORDER BY idpost DESC LIMIT $start, $limit");
					$all = $lo->query("SELECT * FROM post");
					$postRows = $all->num_rows;
					$pages = ceil($postRows/$limit);

					if($checkPost == true){
						while($rowPost = $checkPost->fetch_array(MYSQLI_BOTH)){
					?>
					<h3 style="margin-bottom: 8px;"><?php echo $rowPost['title']; ?></h3>
					<label class="d-block" style="margin-bottom: 8px;"><small>Sends By <b><?php echo $rowPost['username']; ?></b> at <b><?php echo $rowPost['date']; ?></b></small></label>
					<a href="label.php?label=<?php echo $rowPost['label']; ?>" class="btn btn-sm btn-primary"><?php echo $rowPost['label']; ?></a>
					<img src="img/<?php echo $rowPost['img']; ?>" style="width: 100%;margin-top: 16px;">
					<p><?php echo substr($rowPost['content'],0,350); ?> ... </p>
					<a href="see-posting.php?id=<?php echo $rowPost['idpost']; ?>" class="btn btn-primary" style="margin-bottom: 16px;">Selengkapnya</a>
					<hr>
					<?php
						}
					}
					for($i=1;$i<=$pages;$i++){
					?>
					<a href="?postPage=<?php echo $i; ?>" class="btn btn-sm btn-primary"><?php echo $i; ?></a>
					<?php
					}

				?>
			</div>
			<div class="column col-4">
				<?php include 'assets/right.php'; ?>
			</div>
		</div>
		<?php include 'assets/footer.php'; ?>
	</div>
</body>
</html>