<h1 class="modal-title">Add class</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=class" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <div class="form-group">
                <label for="usr">Class name</label>
                <textarea type="text" class="form-control" placeholder="Class name..." rows="1" name="class_name" required></textarea>
            </div>
            <div class="form-group">
                <label for="usr">Description</label>
                <textarea type="text" class="form-control" placeholder="Description..." rows="1" name="description" required></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="add_class">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>

        <div>
            <?php
                if(isset($success) && in_array('add_success', $success)) {
                    echo "<p style='color:green;'>Add success!</p>";
                }
            ?>
        </div>

    </div>

</div>