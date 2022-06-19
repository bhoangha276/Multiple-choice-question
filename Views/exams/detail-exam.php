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
                    foreach ($dataByID as $value) {
                    ?>
                        <div class="col-12">
                            <p class="fw-bold mt-5">
                                Question <?php echo $index++; ?>:
                                <?php echo $value['question'] ?>
                            </p>
                            <div id="quizpage">
                                <form name="quiz" id="quiz">
                                    <div class="quest">
                                        <p><input type="radio" name="q1" value="1"> <?php echo $value['option_a'] ?></p>
                                        <p><input type="radio" name="q1" value="2"> <?php echo $value['option_b'] ?></p>
                                        <p><input type="radio" name="q1" value="3"> <?php echo $value['option_c'] ?></p>
                                        <p><input type="radio" name="q1" value="4"> <?php echo $value['option_d'] ?></p>
                                    </div>
                                </form>
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