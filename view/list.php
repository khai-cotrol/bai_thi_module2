<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Price</th>
            <th scope="col">Amount</th>
            <th scope="col">Comment</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($result)) {
            foreach ($result as $key=> $product ) :?>
                <tr>
                    <th scope="row"><?php echo $product->id ?></th>
                    <td><?php echo $product->name ?></td>
                    <td><?php echo $product->brand ?></td>
                    <td><?php echo $product->price  ?></td>
                    <td><?php echo $product->amount ?></td>
                    <td><?php echo $product->comment ?></td>
                    <td>
                        <a href="index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="index.php?page=delete&id=<?php echo $product->id; ?>"
                           class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

