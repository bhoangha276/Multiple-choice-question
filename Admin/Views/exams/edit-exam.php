<h1 class="modal-title">Edit exam</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=exam" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <div class="form-group">
                
                <label for="usr">Id subject</label>
                <select name="id_subject">
                <?php
                    foreach($subject as $value) {
                        ?>
                            <option value="<?php echo $value['id']; ?>"
                                <?php if($dataByID['id_subject'] == $value['id']) { ?>
                                    selected
                                <?php } ?>>
                                <?php echo $value['subject_name']; ?>
                            </option>
                        <?php 
                    }
                ?>
            </select>
            <div class="form-group">
             
                <label for="usr">Exam name</label>
                <textarea type="text" class="form-control" placeholder="Exam name..." rows="1" name="exam_name" required><?php echo $dataByID['exam_name']; ?></textarea>
            </div>
            <div class="form-group">
              
                <label for="usr">start</label>
                <textarea type="text" class="form-control" placeholder="Start..." rows="1" name="start" required><?php echo $dataByID['start']; ?></textarea>
            </div>
            <div class="form-group">
              
                <label for="usr">time</label>
                <textarea type="text" class="form-control" placeholder="Time..." rows="1" name="time" required><?php echo $dataByID['time']; ?></textarea>
            </div>
            <div class="form-group">
               
                <label for="usr">Number question</label>
                <textarea type="text" class="form-control" placeholder="Number question..." rows="1" name="number_question" required><?php echo $dataByID['number_question']; ?></textarea>
            </div>
            <div class="form-group">
               
                <label for="usr">Create at</label>
                <textarea type="text" class="form-control" placeholder="Create at..." rows="1" name="create_at" required><?php echo $dataByID['create_at']; ?></textarea>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="update_exam">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div