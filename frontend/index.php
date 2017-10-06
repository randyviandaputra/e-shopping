
    <?php include "components/header.php"; ?>
    <?php include "components/slider.php"; ?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php include "components/sidebar.php"; ?>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <?php
                        if (isset($_GET['cart'])) {
                            include "modules/cart/list.php";
                        } elseif (isset($_GET['category'])) {
                            include "modules/category/detail.php";
                        } elseif (isset($_GET['categories'])) {
                            include "modules/category/all.php";
                        }

                        else {
                            include "components/content.php"; 
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include "components/footer.php"; ?>

