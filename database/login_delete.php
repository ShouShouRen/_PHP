<?php
include("db.php");
include("function.php");
include("includes/header.php");
DeleteRows();
?>
<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllData();
                    ?>
                </select>
            </div>
            <input type="submit" value="delete" name="delete" class="btn btn-primary my-1">
        </form>
    </div>
</div>
<?php
include("includes/footer.php");
?>