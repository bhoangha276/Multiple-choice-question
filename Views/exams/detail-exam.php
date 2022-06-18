<!-- inner page banner -->
<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Exams</h1>
        </div>
    </div>
</div>
<!-- Breadcrumb row -->
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li>Exams</li>
            <li>Detail</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb row END -->
<!-- inner page banner END -->
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1 gallery-bx">
        <div class="container">
            <div class="container mb-5">
                <h5 class="card-header">Exam</h5>
                <div class="row mt-5">
                    <?php
                    $index = 1;
                    foreach($dataByID as $value){
                    ?>
                        <div class="col-12">
                        <p class="fw-bold mt-5">
                            Question <?php echo $index++; ?>: 
                            <?php echo $value['question'] ?>
                        </p>
                        <div>
                            <input type="radio" name="box" id="one" />
                            <input type="radio" name="box" id="two" />
                            <input type="radio" name="box" id="three" />
                            <input type="radio" name="box" id="four" />
                            <label for="one" class="box first">
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $value['option_a'] ?>
                                    </span>
                                </div>
                            </label>
                            <label for="two" class="box second">
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $value['option_b'] ?>
                                    </span>
                                </div>
                            </label>
                            <label for="three" class="box third">
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $value['option_c'] ?>
                                    </span>
                                </div>
                            </label>
                            <label for="four" class="box forth">
                                <div class="course">
                                    <span class="circle"></span>
                                    <span class="subject">
                                        <?php echo $value['option_d'] ?>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary px-4 py-2 fw-bold">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->