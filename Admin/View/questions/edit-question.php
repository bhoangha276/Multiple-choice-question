<h1 class="modal-title">Edit question</h1>
<div class="row">
    <div class="col-sm-12 text-right">
        <a href="index.php?controller=question" class="btn btn-success btn-toastr">Return list</a>
    </div>
</div>
<div class="modal-content">
    <div class="modal-body">
        <form class="modal-body" method="POST" action="">
            <div class="form-group">
                <label for="usr">Question:</label>
                <textarea type="text" class="form-control" placeholder="Input question..." rows="3" name="question" required><?php echo $dataByID['question']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option A:</label>
                <textarea type="text" class="form-control" placeholder="Option A..." rows="1" name="option_a" required><?php echo $dataByID['option_a']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option B:</label>
                <textarea type="text" class="form-control" placeholder="Option B..." rows="1" name="option_b" required><?php echo $dataByID['option_b']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option C:</label>
                <textarea type="text" class="form-control" placeholder="Option C..." rows="1" name="option_c" required><?php echo $dataByID['option_c']; ?></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" value="">
                <label for="usr">Option D:</label>
                <textarea type="text" class="form-control" placeholder="Option D..." rows="1" name="option_d" required><?php echo $dataByID['option_d']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="sel1">Answer:</label>
                <select class="form-control" id="sel1" name="answer">
                    <option value="" selected disabled hidden><?php echo $dataByID['answer']; ?></option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="update_question">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div