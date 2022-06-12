<h1 class="modal-title">Add subject</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=subject" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <!-- <div class="modal-header">
        <h2 class="modal-title">Add question</h2>
    </div> -->
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <div class="form-group">
                <label for="usr">Id Class</label>
                <textarea type="text" class="form-control" placeholder="Id Class..." rows="3" name="id_class" required></textarea>
            </div>
            <div class="form-group">
                
                <label for="usr">Subject name</label>
                <textarea type="text" class="form-control" placeholder="Subject name..." rows="1" name="subject_name" required></textarea>
            </div>
            <div class="form-group">
                
                <label for="usr">Description</label>
                <textarea type="text" class="form-control" placeholder="Description..." rows="1" name="description" required></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="add_subject">Add</button>
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