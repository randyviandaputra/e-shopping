                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="">ALL CATEGORIES</a></h4>
                                    </div>
                                </div>
                                <?php
                                    include "../config/connection.php";
                                    $sql = "SELECT * FROM product_categories";
                                    $query = mysql_query($sql);
                                    while ($data = mysql_fetch_assoc($query)) {
                                ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="?category&id_category=<?= $data['category_id']?>"><?= $data['category_name'] ?></a></h4>
                                    </div>
                                </div>
                            <?php } ?>
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>PRODUCTS</h2>
                            <div class="brands-name">
                            <?php  
                                include "../config/connection.php";
                                $sql_product = "SELECT * FROM products
                                        ORDER BY product_inStock DESC LIMIT 5; 
                                        ";
                                $query_product = mysql_query($sql_product);
                                while ($data_product = mysql_fetch_assoc($query_product)) {
                                ?>
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#"> <span class="pull-right">( <?= $data_product['product_inStock']  ?> )</span> <?= $data_product['product_name'] ?></a></li>
                                    </ul>
                                <?php } ?>

                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="/public/assets/images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>