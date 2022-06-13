<h1 class="modal-title">Detail exam</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=exam" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body">
        <div class="form-group">
                <label for="usr">Id Author</label>
                <h5 class="form-control" name="id_author"><?php echo $dataByID['id_author']; ?></h5>
            </div>
            <div class="form-group">
               
                <label for="usr">Id subject</label>
                <h5 class="form-control" name="id_subject"><?php echo $dataByID['id_subject']; ?></h5>
            </div>
            <div class="form-group">
               
                <label for="usr">Exam name</label>
                <h5 class="form-control" name="exam_name"><?php echo $dataByID['exam_name']; ?></h5>
            </div>
            <div class="form-group">
                
                <label for="usr">start</label>
                <h5 class="form-control" name="start"><?php echo $dataByID['start']; ?></h5>
            </div>
            <div class="form-group">
                
                <label for="usr">time</label>
                <h5 class="form-control" name="time"><?php echo $dataByID['time']; ?></h5>
            </div>
            <div class="form-group">
                <label>Number question</label>
                <h5 class="form-control" name="number_question"><?php echo $dataByID['number_question']; ?></h5>
            </div>
            <div class="form-group">
                <label>Create at</label>
                <h5 class="form-control" name="create_at"><?php echo $dataByID['create_at']; ?></h5>
            </div>

            <div class="modal-footer">
                <a href="index.php?controller=exam&action=edit&id=<?php echo $dataByID['id']; ?>" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div