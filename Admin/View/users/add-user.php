<h1 class="modal-title">Add user</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=user" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <!-- <div class="modal-header">
        <h2 class="modal-title">Add user</h2>
    </div> -->
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <div class="form-group">
                <label for="usr">Username:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="usr">Password:</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label for="usr">Full name:</label>
                <input type="text" class="form-control" name="full_name">
            </div>
            <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="usr">Phone:</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label for="usr">Address:</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label for="sel1">Admin:</label>
                <select class="form-control" id="sel1" name="roleAdmin">
                    <option>false</option>
                    <option>true</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="add_user">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>

        <div>
            <?php
                if (isset($success) && in_array('add_success', $success)) {
                    echo "<p style='color:green;'>Add success!</p>";
                }
            ?>
        </div>

    </div>

</div>