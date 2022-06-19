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
                    <form class="modal-body" method="POST" action="">
                        <?php
                        $index = 1;
                        $mark = 0;
                        foreach ($dataByID as $value) {
                        ?>
                            <div class="col-12">
                                <h6 class="fw-bold mt-5 text-info text-info">
                                    Question <?php echo $index++; ?>:
                                    <?php echo $value['question'] ?>
                                </h6>
                                <div id="quizpage">
                                    <form name="quiz" id="quiz">
                                        <div class="quest">
                                            <p><input type="radio" name="q<?php echo $index ?>" value="<?php echo $value['option_a'] ?>"> <span class="text-primary">A.</span> <?php echo $value['option_a'] ?></p>
                                            <p><input type="radio" name="q<?php echo $index ?>" value="<?php echo $value['option_b'] ?>"> <span class="text-primary">B.</span> <?php echo $value['option_b'] ?></p>
                                            <p><input type="radio" name="q<?php echo $index ?>" value="<?php echo $value['option_c'] ?>"> <span class="text-primary">C.</span> <?php echo $value['option_c'] ?></p>
                                            <p><input type="radio" name="q<?php echo $index ?>" value="<?php echo $value['option_d'] ?>"> <span class="text-primary">D.</span> <?php echo $value['option_d'] ?></p>
                                            <input type="hidden" value="<?php echo $value['answer'] ?>">
                                        </div>
                                    </form>
                                </div>
                        
                            </div>
                        <?php
                        }
                        ?>
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <a href="index.php?controller=exam&action=mark&id=<?php echo $id_exam; ?>" onclick="return confirm('Xác nhận nộp bài?')" type="submit" name="answer_exam" class="btn btn-primary px-4 py-2 fw-bold">Done</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area END -->