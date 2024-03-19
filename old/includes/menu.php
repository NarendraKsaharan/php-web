<div class="main">
	<nav>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<!-- <li>
						<a href="#band">band</a>
					</li>
					<li>
						<a href="#tour">tour</a>
					</li>
					<li>
						<a href="#contact">contact</a>
					</li> -->
				<?php
					$selCate = "select * from `categories` where parent_id=0 AND status=1";
					$selParentCate = $con->query($selCate);

					while ($_parentCate = $selParentCate->fetch_assoc()) {
						?>
						<li>
						<a href="category.php?catid=<?= $_parentCate['id'] ?>"><?= $_parentCate['name'] ?><ion-icon name="caret-down-outline"></ion-icon></a>
						<?php
						$selChildCate = "select * from `categories` where parent_id=".$_parentCate['id']." AND status=1";
						$selChildCateData = $con->query($selChildCate);

						if ($selChildCateData->num_rows) {
							?>
							<div class="sub-menu">
								<ul>
									<?php
										while ($_childCate = $selChildCateData->fetch_assoc()) {
											?>
											<li>
												<a href="category.php?catid=<?= $_childCate['id'] ?>"><?= $_childCate['name'] ?><ion-icon name="caret-forward-outline"></ion-icon></a>
												<?php
													$selSubChildCate = "select * from `categories` where parent_id=".$_childCate['id']." AND status=1";
													$selSubChildCate = $con->query($selSubChildCate);

													if ($selSubChildCate->num_rows) {
														?>
														<div class="sub-cat">
															<ul>
																<?php
																	while ($_subChild = $selSubChildCate->fetch_assoc()) {
																		?>
																		<li>
																			<a href="category.php?catid=<?= $_subChild['id'] ?>"><?= $_subChild['name'] ?></a>
																		</li>
																		<?php
																	}
																?>
															</ul>
														</div>
														<?php
													}
												?>
											</li>
										<?php	
										}
										?>
								</ul>
							</div>
							<?php
						}
						?>
						</li>
				<?php
					}

				?>	
					<!-- <li>
						<a href="#">more<ion-icon name="caret-down-outline"></ion-icon></a>
						<ul>
							<li>
								<a href="#">Merchandise</a>
							</li>
							<li>
								<a href="#">Extras</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
						</ul>
					</li> -->
				</ul>
			</nav>
			<div class="search">
				<ul>
					<li>
						<a href="add-enquiry.php">Contact Us</a>
					</li>
					<li>
						<a href="#contact">About Us</a>
					</li>
					<li>
					<a href="#">
						<ion-icon name="search-outline"></ion-icon>
					</a>
					</li>
				</ul>
			</div>
		</div>