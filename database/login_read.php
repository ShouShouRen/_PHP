<?php
extract($_POST);
include("db.php");
include("includes/header.php");
include("function.php");

?>
<div class="container">
    <div class="col-sm-6">
        <pre>
            <?php ReadRows();
            ?>
            </pre>
    </div>
</div>
<?php

?>
</body>
<?php
include("includes/footer.php");
?>