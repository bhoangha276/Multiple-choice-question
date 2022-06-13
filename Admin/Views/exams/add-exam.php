<h1 class="modal-title">Add exam</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=exam" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <!-- <div class="modal-header">
        <h2 class="modal-title">Add question</h2>
    </div> -->
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <div class="form-group">
                <label for="usr">Id Author</label>
                <textarea type="text" class="form-control" placeholder="Id Author..." rows="3" name="id_author" required></textarea>
            </div>
            <div class="form-group">
                
                <label for="usr">Id subject</label>
                <textarea type="text" class="form-control" placeholder="Id subject..." rows="1" name="id_subject" required></textarea>
            </div>
            <div class="form-group">
               
                <label for="usr">Exam name</label>
                <textarea type="text" class="form-control" placeholder="Exam name..." rows="1" name="exam_name" required></textarea>
            </div>
            <div class="form-group">
               
                <label for="usr">Start</label>
                <textarea type="text" class="form-control" placeholder="Time start..." rows="1" name="start" required></textarea>
            </div>
            <div class="form-group">
               
                <label for="usr">Time</label>
                <textarea type="text" class="form-control" placeholder="Time ..." rows="1" name="time" required></textarea>
            </div>
            <div class="form-group">
                
                <label for="usr">Number question</label>
                <textarea type="text" class="form-control" placeholder="Number question ..." rows="1" name="number_question" required></textarea>
            </div>
            <div class="form-group">
                
                <label for="usr">Create at</label>
                <textarea type="text" class="form-control" placeholder="Create at ..." rows="1" name="create_at" required></textarea>
            </div>


            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="add_exam">Add</button>
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