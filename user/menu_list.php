<div>

    <a href="index.php" class="list-group-item active">ประเภทสินค้า</a>
    <ul class="list-group">

        <?php require_once('../conn.php');

        $query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
        $result_type = mysqli_query($conn, $query_type) or die("Error in query: $query_type " . mysqli_error());
        //echo($query_type);
        //exit()

        ?>

        <div class="list-group">
            <?php
            foreach ($result_type as $row) { ?>

                <a href="plist2.php?act=showbytype&type_id=<?php echo $row['type_id']; ?>" class="list-group-item list-group-item-action list-group-item-light">
                    <?php echo $row["type_name"]; ?></a>

            <?php } ?>
        </div>


    </ul>

</div>




  