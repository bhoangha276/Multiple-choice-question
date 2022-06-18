<h1 class="modal-title">result</h1>
<div class="row">
    <form action="" method="GET" class="navbar-form navbar-left col-sm-12">
        <div class="input-group">
            <input type="hidden" name="controller" value="result">
            <input type="text" value="" class="form-control" placeholder="Search result..." name="input">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i> Search
                </button>
            </span>
        </div>
        <input type="hidden" name="action" value="search">
    </form>
</div>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Exam name</th>
                    <th>Number Correct</th>
                    <th>Mark</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $index = 1;
                foreach($data_Search as $value) {
            ?>
                <tr>
                    <th><?php echo $index++; ?></th>
                    <td><?php echo $value['username']; ?></td>
                    <td><?php echo $value['exam_name']; ?></td>
                    <td><?php echo $value['number_correct']; ?></td>
                    <td><?php echo $value['mark']; ?></td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>