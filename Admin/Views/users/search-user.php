<h1 class="modal-title">Users</h1>
<div class="row">
    <form action="" method="GET" class="navbar-form navbar-left col-sm-12">
        <div class="input-group">
            <input type="hidden" name="controller" value="user">
            <input type="text" value="" class="form-control" placeholder="Search user..." name="input">
            <span class="input-group-btn"><button type="submit" class="btn btn-primary">Search</button></span>
        </div>
        <input type="hidden" name="action" value="search">
    </form>
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=user&action=add" class="btn btn-success btn-toastr">Add user</a>
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
                    <th>User</th>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Admin</th>
                    <th>Handle</th>
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
                    <td><?php echo $value['full_name']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['address']; ?></td>
                    <td><?php echo $value['roleAdmin']; ?></td>
                    <td>
                        <a onclick="return confirm('Are you sure you want to delete user: '+ '<?php echo $index-1; ?>')" href="index.php?controller=user&action=delete&id=<?php echo $value['id']; ?>" class="btn btn-sm btn-danger btn-toastr">Delete</a>
                    </td>
                </tr>
            <?php 
                }
            ?>
            </tbody>
        </table>
    </div>
</div>