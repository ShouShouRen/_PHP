<?php
include("./includes/db.php");
include("./includes/header.php");
?>
<!-- Navigation -->

<?php
include("./includes/navigation.php");
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];
                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                    $search_query = mysqli_query($connection,$query);
                    if(!$search_query){
                        die("QUERY FAILED" .mysqli_error($connection));
                    }
                    $count = mysqli_num_rows($search_query);
                    if($count == 0){
                        echo "<h1> NO RESULT</h1>";
                    }else{
                        echo $search;
                    }
                }
            ?>

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php
            include("./includes/sidebar.php");
        ?>
    </div>
    <!-- /.row -->

    <hr>
    <?php include("./includes/footer.php"); ?>