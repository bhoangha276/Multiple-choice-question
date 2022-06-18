<h1 class="modal-title">User choice</h1>
<div class="row">
    <form action="" method="GET" class="navbar-form navbar-left col-sm-12">
        <div class="input-group">
            <input type="hidden" name="controller" value="userchoice">
            <input type="text" value="" class="form-control" placeholder="Search choice..." name="input">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-search"></i> Search
                </button>
            </span>
        </div>
        <input type="hidden" name="action" value="search">
    </form>
    <div class="col-sm-12 text-right">

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
                    <th>Id user</th>
                    <th>ID exam_detail</th>
                    <th>User choice</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $index = 1;
                foreach($data_Search as $value) {
            ?>
                <tr>
                    <th><?php echo $index++; ?></th>
                    <td><?php echo $value['id_user']; ?></td>
                    <td><?php echo $value['id_exam_detail']; ?></td>
                    <td><?php echo $value['user_choice']; ?></td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>