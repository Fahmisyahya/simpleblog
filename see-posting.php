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
		<div class="columns" style="margin-top: 16px;margin-bottom: 16px;">
			<div class="column col-8">
				<?php

					if(isset($_GET['id'])){
						$idpost = $_GET['id'];
						$checkPost = $lo->query("SELECT * FROM post WHERE idpost = '$idpost'");
						if($checkPost == true){
							while($rowPost = $checkPost->fetch_array(MYSQLI_BOTH)){
					?>
					<h3 style="margin-bottom: 8px;"><?php echo $rowPost['title']; ?></h3>
					<label class="d-block" style="margin-bottom: 8px;"><small>Sends By <b><?php echo $rowPost['username']; ?></b> at <b><?php echo $rowPost['date']; ?></b></small></label>
					<a href="label.php?label=<?php echo $rowPost['label']; ?>" class="btn btn-sm btn-primary"><?php echo $rowPost['label']; ?></a>
					<img src="img/<?php echo $rowPost['img']; ?>" style="width: 100%;margin-top: 16px;">
					<p><?php echo $rowPost['content']; ?></p>
					
				<div class="panel" id="comment">
					<div class="panel-header">
						<h6 class="panel-title">Komentar</h6>
						<hr>
					</div>
					<div class="panel-body">
						<?php

						$showComment = $lo->query("SELECT * FROM comment WHERE idpost = '$idpost' ORDER BY idcomment DESC");
						if($showComment == true){
							while($rowCom = $showComment->fetch_array(MYSQLI_BOTH)){
							?>
							<small class="d-block">Sends by <b><?php echo $rowCom['fullname']; ?></b> at <b><?php echo $rowCom['date']; ?></b></small>
							<p><?php echo $rowCom['content']; ?></p>
							<hr>
							<?php
							}
						}

						?>
						<form method="post" action="send-comment.php">
							<input type="text" value="<?php echo $idpost; ?>" style="display: none;" name="idpost">
							<div class="form-group">
								<label class="form-label">Fullname</label>
								<input type="text" class="form-input" name="fullname">
							</div>
							<div class="form-group">
								<label class="form-label">Email</label>
								<input type="email" class="form-input" name="email">
							</div>
							<div class="form-group">
								<label class="form-label">Content</label>
								<textarea class="form-input" name="content"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="send">Send</button>
							</div>
						</form>
					</div>
					<div class="panel-footer">
					</div>
				</div>
			</div>
			<?php
							}
						}
					}

				?>
			<div class="column col-4">
				<?php include 'assets/right.php'; ?>
			</div>
		</div>
		<?php include 'assets/footer.php'; ?>
	</div>