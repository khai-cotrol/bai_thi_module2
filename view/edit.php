<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="trademark">Brand</label>
            <input type="text" class="form-control" name="brand">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" class="form-control" name="amount">
            <div class="form-group">
                <label for="status">Comment</label>
                <input type="text" class="form-control" name="comment">
            </div>
            <button type="submit" class="btn btn-primary">edit</button>
            <a href="index.php?page=list" class="btn btn-danger">Cancel</a>
    </form>
</div>