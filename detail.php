<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `product` a 
    left join category b on a.catid = b.catid WHERE a.proid =" . $id;
$result = pg_query($conn, $sql);
while ($row = pg_fetch_array($result)) {
?>
    <div class="row main">
        <h2 class="product text-center">PRODUCT DETAILS</h2>
        <div class="image text-center">
            <div class="image text-center">
            <img class="card-img-top" src="admin/pimgs/01.jpg" alt="Card image cap" style="height:350px">

            <h2 class="card-title">Police Patrol Ship</h2>
            <p class="card-text">
            </p><h3>Price: 48</h3>
            <p></p>
            <h3 class="description">Description:</h3>
            <p class="description">
            </p><h4>OMGGG</h4>
            <p></p>
            <a class="btn btn-primary mt-3" href="?page=cartadd.php&amp;id=1">Add to cart</a>
        </div>
            <img class="card-img-top" src="<?php echo 'admin/pimgs/'
                                                . $row['proimage']; ?>" alt="Card image cap" style="height:350px">

            <h2 class="card-title"><?php echo $row['proname']; ?></h2>
            <p class="card-text">
            <h3>Price: <?php echo $row['proprice']; ?></h3>
            </p>
            <h3 class="description">Description:</h3>
            <p class="description">
            <h4><?php echo $row['prodescription']; ?></h4>
            </p>
            <a class="btn btn-primary mt-3" href="?page=cartadd.php&id=<?php echo $row['proid']; ?>">Add to cart</a>
        </div>
    </div>
<?php
}
?>