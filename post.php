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
				<div class="panel" style="margin-bottom: 16px;">
					<div class="panel-header">
						<h5 class="panel-title">Cari</h5>
					</div>
					<div class="panel-body">
						<form method="get" action="">
							<div class="form-group">
								<input type="text" class="form-input" name="cari">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="submit">Cari</button>
							</div>
						</form>
						<table class="table table-stripped table-hover">
							<tr>
								<th>No.</th>
								<th>Title</th>
								<th>Tools</th>
							</tr>
						<?php

							if(isset($_GET['cari'])){
								$cari = $_GET['cari'];
								$searchPost = $lo->query("SELECT * FROM post WHERE content LIKE '%".$cari."%'");
								if($searchPost == true){
									$no = 1;
									while($showSearch = $searchPost->fetch_array(MYSQLI_BOTH)){
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $showSearch['title']; ?></td>
											<td><a href="edit-post.php?id=<?php echo $showSearch['idpost']; ?>">Edit</a> | <a href="del-post.php?id=<?php echo $showSearch['idpost']; ?>">Hapus</a></td>
										</tr>
										<?php
									}
								}
							}

						?>
					</table>
					</div>
					<div class="panel-footer">
					</div>
				</div>					
				<h4><i class="icon icon-menu"></i> Daftar Posting</h4>
				<table class="table table-stripped table-hover">
					<tr>
						<td>No. </td>
						<td>Title</td>
						<td>Date</td>
						<td>User</td>
						<td>Tools</td>
					</tr>
					<?php

					$no = 1;
					$checkPost = $lo->query("SELECT * FROM post ORDER BY idpost DESC");
					if($checkPost == true){
						while($rowPost = $checkPost->fetch_array(MYSQLI_BOTH)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><a href="see-posting.php?id=<?php echo $rowPost['idpost']; ?>"><?php echo $rowPost['title']; ?></a></td>
						<td><?php echo $rowPost['date']; ?></td>
						<td><?php echo $rowPost['username']; ?></td>
						<td><a href="edit-post.php?id=<?php echo $rowPost['idpost']; ?>">Edit</a> | <a href="del-post.php?id=<?php echo $rowPost['idpost']; ?>">Hapus</a></td>
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