<h1 class="modal-title">Detail subject</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=subject" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body">
            <div class="form-group">
                
                <label for="usr">Id class</label>
                <h5 class="form-control" name="id_class"><?php echo $dataByID['class_name']; ?></h5>
            </div>
            <div class="form-group">
               
                <label for="usr">Subject name</label>
                <h5 class="form-control" name="subject_name"><?php echo $dataByID['subject_name']; ?></h5>
            </div>
            <div class="form-group">
               
                <label for="usr">Description</label>
                <h5 class="form-control" name="description"><?php echo $dataByID['description']; ?></h5>
            </div>

            <div class="modal-footer">
                <a href="index.php?controller=subject&action=edit&id=<?php echo $dataByID['id']; ?>" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div