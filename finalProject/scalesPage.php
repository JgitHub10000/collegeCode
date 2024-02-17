<?php
include("navbar.php");
 include("scales.php");
$scales = Scales::getScalesFromDb($conn, $_GET['scaleId']);
?>
 
<header class="masthead">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $scales->scaleId; ?></h1>
                    <span class="meta">
                        Posted by <?php echo $scales->scaleType; ?>
                        on <?php echo $scales->scalePosition; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
 
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php echo $scales->horizontalPosition ?>
            </div>
        </div>
    </div>
</article>

