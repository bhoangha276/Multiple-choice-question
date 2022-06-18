     <!-- inner page banner -->
     <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
         <div class="container">
             <div class="page-banner-entry">
                 <h1 class="text-white">Profile</h1>
             </div>
         </div>
     </div>
     <!-- Breadcrumb row -->
     <div class="breadcrumb-row">
         <div class="container">
             <ul class="list-inline">
                 <li><a href="#">Home</a></li>
                 <li>Profile</li>
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
                     <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
                         <div class="profile-content-bx">
                             <div class="tab-content">
                                 <div class="tab-pane active" id="courses">
                                     <div class="profile-head">
                                         <h3>My Courses</h3>
                                         <div class="feature-filters style1 ml-auto">
                                             <ul class="filters" data-toggle="buttons">
                                                 <li data-filter="" class="btn active">
                                                     <input type="radio">
                                                     <a href="#"><span>All</span></a>
                                                 </li>
                                                 <li data-filter="publish" class="btn">
                                                     <input type="radio">
                                                     <a href="#"><span>Publish</span></a>
                                                 </li>
                                                 <li data-filter="pending" class="btn">
                                                     <input type="radio">
                                                     <a href="#"><span>Pending</span></a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="courses-filter">
                                         <?php
                                            foreach ($data_class as $value) {
                                            ?>
                                             <div class="clearfix">
                                                 <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                                                     <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                                                     </li>
                                                     <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 pending">
                                                         <div class="cours-bx">
                                                             <div class="action-box">
                                                                 <img src="assets/images/courses/pic2.jpg" alt="">
                                                                 <a href="#" class="btn">Read More</a>
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
                                                                         <li><i class="fa fa-star"></i></li>
                                                                         <li><i class="fa fa-star"></i></li>
                                                                     </ul>
                                                                 </div>
                                                                 <div class="price">
                                                                     <del>$190</del>
                                                                     <h5>$120</h5>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </li>
                                                 </ul>
                                             </div>
                                         <?php
                                            }
                                            ?>
                                     </div>
                                 </div>
                                 <div class="tab-pane" id="quiz-results">
                                     <div class="profile-head">
                                         <h3>My class</h3>
                                     </div>
                                   
                                 </div>
                                 <div class="tab-pane" id="edit-profile">
                                     <div class="profile-head">
                                         <h3>Edit Profile</h3>
                                     </div>
                                     <form class="edit-profile">
                                         <div class="">
                                             <div class="form-group row">
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                     <h3>1. Personal Details</h3>
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full
                                                     Name</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="Mark Andre">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone
                                                     No.</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="+120 012345 6789">
                                                 </div>
                                             </div>

                                             <div class="seperator"></div>

                                             <div class="form-group row">
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                     <h3>2. Address</h3>
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Address</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="5-S2-20 Dummy City, UK">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                             </div>


                                             <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x">
                                             </div>

                                             <div class="form-group row">
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                                                     <h3 class="m-form__section">3. Social Links</h3>
                                                 </div>
                                             </div>

                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Linkedin</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="www.linkedin.com">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Facebook</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="www.facebook.com">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Twitter</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="www.twitter.com">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Instagram</label>
                                                 <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                     <input class="form-control" type="text" value="www.instagram.com">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="">
                                             <div class="">
                                                 <div class="row">
                                                     <div class="col-12 col-sm-3 col-md-3 col-lg-2">
                                                     </div>
                                                     <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                                         <button type="reset" class="btn">Save changes</button>
                                                         <button type="reset" class="btn-secondry">Cancel</button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="tab-pane" id="change-password">
                                     <div class="profile-head">
                                         <h3>Change Password</h3>
                                     </div>
                                     <form class="edit-profile">
                                         <div class="">
                                             <div class="form-group row">
                                                 <div class="col-12 col-sm-8 col-md-8 col-lg-9 ml-auto">
                                                     <h3>Password</h3>
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Current
                                                     Password</label>
                                                 <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                     <input class="form-control" type="password" value="">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">New
                                                     Password</label>
                                                 <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                     <input class="form-control" type="password" value="">
                                                 </div>
                                             </div>
                                             <div class="form-group row">
                                                 <label class="col-12 col-sm-4 col-md-4 col-lg-3 col-form-label">Re Type
                                                     New Password</label>
                                                 <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                     <input class="form-control" type="password" value="">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                             </div>
                                             <div class="col-12 col-sm-8 col-md-8 col-lg-7">
                                                 <button type="reset" class="btn">Save changes</button>
                                                 <button type="reset" class="btn-secondry">Cancel</button>
                                             </div>
                                         </div>

                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>