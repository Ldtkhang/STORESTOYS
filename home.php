<div>
    <span class="text text-center">
    </span>
</div>
<div class="row">
    <?php
    $sql = "SELECT * FROM product";
    $result = pg_query($conn, $sql);
    while ($row = pg_fetch_assoc($result)) {
    ?>
        <div class="col-sm-4">
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="card-title"><?php echo $row['proname']; ?></h4>
                </div>
                <div class="panel-body-inner">
                    <div>
                        <img src="<?php echo 'admin/pimgs/' . $row['proimage']; ?>" class="img-product" />
                    </div>
                </div>
                <div class="panel-footer">
                    <span>Price: <?php echo $row['proprice']; ?></span>
                    <a class="btn btn-primary" href="?page=detail.php&id=<?php echo $row['proid']; ?>">Details</a>
                </div>
            </div>
        </div>
        
    <?php
    }
    ?>
</div>