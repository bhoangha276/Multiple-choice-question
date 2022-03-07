<h1 class="modal-title">Detail question</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=question" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body">
        <div class="form-group">
                <label for="usr">Question:</label>
                <h5 class="form-control" name="question"><?php echo $dataByID['question']; ?></h5>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option A:</label>
                <h5 class="form-control" name="option_a"><?php echo $dataByID['option_a']; ?></h5>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option B:</label>
                <h5 class="form-control" name="option_b"><?php echo $dataByID['option_b']; ?></h5>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option C:</label>
                <h5 class="form-control" name="option_c"><?php echo $dataByID['option_c']; ?></h5>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option D:</label>
                <h5 class="form-control" name="option_d"><?php echo $dataByID['option_d']; ?></h5>
            </div>
            <div class="form-group">
                <label>Answer:</label>
                <h5 class="form-control" name="answer"><?php echo $dataByID['answer']; ?></h5>
            </div>

            <div class="modal-footer">
                <a href="index.php?controller=question&action=edit&id=<?php echo $dataByID['id']; ?>" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div