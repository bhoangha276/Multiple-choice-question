<h1 class="modal-title">Exam</h1>
<div class="row">
    <form action="" method="GET" class="navbar-form navbar-left col-sm-12">
        <div class="input-group">
            <input type="hidden" name="controller" value="exam">
            <input type="text" value="" class="form-control" placeholder="Search exam..." name="input">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i> Search
                </button>
            </span>
        </div>
        <input type="hidden" name="action" value="search">
    </form>
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=exam&action=add" class="btn btn-success btn-toastr">
            <i class="fa fa-fw fa-plus-circle"></i> Add question
        </a>
    </div>
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
                    <th>Id subject</th>
                    <th>Exam name</th>
                    <th>start</th>
                    <th>time</th>
                    <th>Number question</th>
                    <th>Create at</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $index = 1;
                foreach($data as $value) {
            ?>
                <tr>
                    <th><?php echo $index++; ?></th>
                    <td><?php echo $value['id_subject']; ?></td>
                    <td><?php echo $value['exam_name']; ?></td>
                    <td><?php echo $value['start']; ?></td>
                    <td><?php echo $value['time']; ?></td>
                    <td><?php echo $value['number_question']; ?></td>
                    <td><?php echo $value['create_at']; ?></td>
                    <td>
                        <a href="index.php?controller=exam&action=detail&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-primary btn-toastr"><i class="ti-eye"></i> Detail</a>&nbsp
                        <a href="index.php?controller=exam&action=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning btn-toastr"><i class="ti-pencil"></i> Edit</a>&nbsp
                        <a onclick="return confirm('Are you sure you want to delete question: '+ '<?php echo $index-1; ?>')" href="index.php?controller=exam&action=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger btn-toastr"><i class="ti-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>