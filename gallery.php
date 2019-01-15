<?php

include 'assets/header.php';
include 'lib/connect.php';

?>
<div class="container grid-md">
		<header style="text-align: center;padding-top: 16px;padding-bottom: 8px;">
			<h1 style="font-weight: 100;margin-bottom: 4px;">Simple Blog</h1>
			<h4 style="margin-top: 8px;">Make blogging simply</h4>
		</header>
		<?php include 'assets/menu.php'; ?>
		<div class="columns" style="margin-top: 16px;">
			<div class="column col-8">
				<div class="panel">
					<div class="panel-header">
						<h5 class="panel-title">Gallery</h5>
					</div>
					<div class="panel-body">
						<div class="columns">
						<?php

						$showImage = $lo->query("SELECT * FROM post");
						if($showImage == true){
							while($rowImage = $showImage->fetch_array(MYSQLI_BOTH)){
							?>
							<div class="column col-6">
								<div class="panel">
									<a href="img/<?php echo $rowImage['img']; ?>" role="group" class="fancybox" data-fancybox="images"><img src="img/<?php echo $rowImage['img']; ?>" style="width: 100%;"></a>
									<div class="panel-body">
										<div class="panel-header">
											<label class="panel-title d-block" style="margin-bottom: 8px;"><a href="see-posting.php?id=<?php echo $rowImage['idpost']; ?>"><?php echo $rowImage['title']; ?></a></label>
											<a href="label.php?search=<?php echo $rowImage['label']; ?>" class="btn btn-sm btn-primary"><?php echo $rowImage['label']; ?></a>
										</div>
									</div>
								</div>
							</div>
							<?php
							}
						}

						?>
						</div>
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
	<script type="text/javascript" src="dist/js/jquery.js"></script>
	<script type="text/javascript" src="fancybox/dist/jquery.fancybox.min.js"></script>