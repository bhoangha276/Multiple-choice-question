<h1 class="modal-title">Edit subject</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=subject" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <label for="usr">Class name</label>
            <select name="id_class">
                <?php
                    foreach($classes as $value) {
                        ?>
                            <option value="<?php echo $value['id']; ?>"
                                <?php if($dataByID['id_class'] == $value['id']) { ?>
                                    selected
                                <?php } ?>>
                                <?php echo $value['class_name']; ?>
                            </option>
                        <?php 
                    }
                ?>
            </select>
            <!-- <div class="form-group">
                <label for="usr">Id Class</label>
                <textarea type="text" class="form-control" placeholder="Input Id class..." rows="3" name="id_class" required><?php echo $dataByID['id_class']; ?></textarea>
            </div> -->
            <div class="form-group">
                
                <label for="usr">Subject name</label>
                <textarea type="text" class="form-control" placeholder="Subject name..." rows="1" name="subject_name" required><?php echo $dataByID['subject_name']; ?></textarea>
            </div>
            <div class="form-group">
                
                <label for="usr">Description</label>
                <textarea type="text" class="form-control" placeholder="Description..." rows="1" name="description" required><?php echo $dataByID['description']; ?></textarea>
</div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="update_subject">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div