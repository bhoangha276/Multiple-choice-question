<!-- Content -->
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Blog List Sidebar</h1>
				</div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>Classes</li>
					<li>Subjects</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <!-- contact area -->
         <div class="content-block">
			<div class="section-area section-sp1">
				<div class="container">
					<div class="row">
						<!-- Left part start -->
						<div class="col-lg-15">
                            <?php
                            foreach ($data as $value) {
                            ?>
							<div class="blog-post blog-md clearfix">
								<div class="ttr-post-media"> 
									<a href="#"><img src="assets/images/blog/grid/pic1.jpg" alt=""></a> 
								</div>
								<div class="ttr-post-info">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>Jan 12 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By William</a></li>
									</ul>
									<h5 class="post-title">
                                        <a href=""><?php echo $value['subject_name'] ?></a>
                                    </h5>
									<p><?php echo $value['description'] ?></p>
									<div class="post-extra">
										<a href="index.php?controller=exam&id=<?php echo $value['id']; ?>" class="btn">Study</a>
										<!-- <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>05 Comment</a> -->
									</div>
								</div>
							</div>
							<?php
                            }
                            ?>
							<!-- Pagination start -->
							<div class="pagination-bx rounded-sm gray clearfix">
								<ul class="pagination">
									<li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
								</ul>
							</div>
							<!-- Pagination END -->
						</div>
						<!-- Left part END -->
						
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Content END-->