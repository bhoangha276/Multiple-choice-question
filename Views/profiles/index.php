<!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Classroom</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Classes</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                         <div class="profile-bx text-center">
                             <div class="user-profile-thumb">
                                 <img src="assets/images/profile/pic1.jpg" alt="" />
                             </div>
                             <div class="profile-info">
                                 <h5><a href="#"><?php echo $data['username']; ?></a></h5>
                                 <p>Name : <?php echo $data['full_name']; ?></p>
                                 <p>Email : <?php echo $data['email']; ?></p>
                                 <p>Phone : <?php echo $data['phone']; ?></p>
                                 <p>Address : <?php echo $data['address']; ?></p>
                             </div>
                             <div class="profile-social">
                                 <ul class="list-inline m-a0">
                                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                 </ul>
                             </div>
                             <div class="profile-tabnav">
                                 <ul class="nav nav-tabs">
                                     <li class="nav-item">
                                         <a class="nav-link active" data-toggle="tab" href="#courses"><i class="ti-book"></i>Courses</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" data-toggle="tab" href="#quiz-results"><i class="ti-bookmark-alt"></i>My Class </a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" data-toggle="tab" href="#edit-profile"><i class="ti-pencil-alt"></i>Edit Profile</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" data-toggle="tab" href="#change-password"><i class="ti-lock"></i>Change Password</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <h3>My Courses</h3>
                    <div class="row">
                        <?php
                        foreach ($data_class as $value) {
                        ?>
                            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="assets/images/courses/pic1.jpg" alt="">
                                        <a href="index.php?controller=subject&id=<?php echo $value['id']; ?>" class="btn">Enter</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#"><?php echo $value['class_name']; ?></a></h5>
                                        <span><?php echo $value['description']; ?></span>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span>3 Review</span>
                                            <ul class="cours-star">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <h5>1900</h5>
                                            <h6>memmbers</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->