<?php
				session_start();
				if(isset($_SESSION['login'])){
					$login = $_SESSION['login'];
				?>
					<div class="panel">
					<div class="panel-header">
						<h5 class="panel-title">Admin Menu</h5>
						<label>Selamat datang <b><?php echo $login; ?></b></label>.
					</div>
					<div class="panel-body">
						<ul class="nav">
							<li class="nav-item">
								<a href="posting.php"><i class="icon icon-edit"></i> Buat Posting</a>
							</li>
							<li class="nav-item">
								<a href="password.php?iduser=<?php echo $_SESSION['id']; ?>"><i class="icon icon-people"></i> Ganti Password</a>
							</li>
							<li class="nav-item">
								<a href="post.php"><i class="icon icon-menu"></i> Lihat Posting</a>
							</li>
							<li class="nav-item">
								<a href="cat.php"><i class="icon icon-flag"></i> Tambah Kategori</a>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<a href="logout.php" class="btn btn-primary">Logout</a>
					</div>
				</div>
				<?php
				}else{
					?>
					<div class="panel">
					<div class="panel-header">
						<h4 class="panel-title">Login</h4>
					</div>
					<div class="panel-body">
						<form method="post" action="login.php">
							<div class="form-group">
								<label class="form-label">Username</label>
								<input type="text" class="form-input" name="username">
							</div>
							<div class="form-group">
								<label class="form-label">Username</label>
								<input type="password" class="form-input" name="password">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" name="login">Login</button>
							</div>
						</form>
					</div>
					<div class="panel-footer"></div>
				</div>
				<?php
				}
				?>
				<div class="panel" style="margin-top: 8px;">
					<div class="panel-header">
						<h5 class="panel-title">Label</h5>
					</div>
					<div class="panel-body">
						<?php

						include 'lib/connect.php';
						$checkCat = $lo->query("SELECT * FROM category");
						if($checkCat == true){
							while($rowCat = $checkCat->fetch_array(MYSQLI_BOTH)){
						?>
						<a href="label.php?search=<?php echo $rowCat['title']; ?>" class="btn" style="margin-bottom: 8px;"><?php echo $rowCat['title']; ?></a>
						<?php
							}
						}

						?>
					</div>
					<div class="panel-footer">
					</div>
				</div>