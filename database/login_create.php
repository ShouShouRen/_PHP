<?php
include("db.php");
include("function.php");
CreateUsers();
include("includes/header.php");
?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary my-1">
        </form>
    </div>
</div>
<?php
include("includes/footer.php");
?>