<h1 class="modal-title">Detail class</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=class" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body">
            <div class="form-group">
                <label for="usr">Classes </label>
                <h5 class="form-control" name="question"><?php echo $dataByID['class_name']; ?></h5>
            </div>
            <div class="form-group">
                <label for="usr">Description</label>
                <h5 class="form-control" name="option_a"><?php echo $dataByID['description']; ?></h5>
            </div>

            <div class="modal-footer">
                <a href="index.php?controller=class&action=edit&id=<?php echo $dataByID['id']; ?>" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div