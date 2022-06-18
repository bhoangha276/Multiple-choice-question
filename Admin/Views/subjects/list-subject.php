<h1 class="modal-title">subjects</h1>
<div class="row">
    <form action="" method="GET" class="navbar-form navbar-left col-sm-12">
        <div class="input-group">
            <input type="hidden" name="controller" value="subject">
            <input type="text" value="" class="form-control" placeholder="Search subject..." name="input">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i> Search
                </button>
            </span>
        </div>
        <input type="hidden" name="action" value="search">
    </form>
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=subject&action=add" class="btn btn-success btn-toastr">
            <i class="fa fa-fw fa-plus-circle"></i> Add subject
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
                    <th>Class name</th>
                    <th>Subject name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
            <?php
            
                $index = 1;
                foreach($data as $value) {
            ?>
                <tr>
                    <th><?php echo $index++; ?></th>
                    <td><?php echo $value['class_name']; ?></td>
                    <td><?php echo $value['subject_name']; ?></td>
                    <td><?php echo $value['description']; ?></td>
                    <td>
                        <a href="index.php?controller=subject&action=detail&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-primary btn-toastr"><i class="ti-eye"></i> Detail</a>&nbsp
                        <a href="index.php?controller=subject&action=edit&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-warning btn-toastr"><i class="ti-pencil"></i> Edit</a>&nbsp
                        <a onclick="return confirm('Are you sure you want to delete subject: '+ '<?php echo $index-1; ?>')" href="index.php?controller=subject&action=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger btn-toastr"><i class="ti-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>