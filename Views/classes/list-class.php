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
                    <div class="widget courses-search-bx placeani">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Search Classes</label>
                                <input name="dzName" type="text" required class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_archive">
                        <h5 class="widget-title style-1">All Classes</h5>
                        <ul>
                            <li class="active"><a href="#">General</a></li>
                            <li><a href="#">IT & Software</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Programming Language</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <a href="#"><img src="assets/images/adv/adv.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                            <div class="cours-bx">
                                <div class="action-box">
                                    <img src="assets/images/courses/pic1.jpg" alt="">
                                    <a href="#" class="btn">Read More</a>
                                </div>
                                <div class="info-bx text-center">
                                    <h5><a href="#">Introduction EduChamp – LMS plugin</a></h5>
                                    <span>Programming</span>
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
                        </div>
                        <div class="col-lg-12 m-b20">
                            <div class="pagination-bx rounded-sm gray clearfix">
                                <ul class="pagination">
                                    <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->

<table class="table table-hover">
    <thead>
        <tr>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $value) {
        ?>
            <tr>
                <td><?php echo $value['class_name']; ?></td>
                <td><?php echo $value['descrpition']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>