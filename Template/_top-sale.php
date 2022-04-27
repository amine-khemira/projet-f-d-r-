<?php
$product_shuffle = $product->getData();
?>
<section id="top-sale">
    <div class="container py-5">
        <h3 class="font-Serif">Coups de coeur:</h3>
        <hr>
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item){?>
            <div class="item">
                <div class="product font-Roboto">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['id_produit'])?>"><img src="<?php echo $item['image_produit'] ?? './assets/product/argile.jpg';?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h5><?php echo $item['nom_produit'] ?? 'uknown'; ?></h5>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span><?php echo $item['Prix_produit'] ?? '0'; ?></span>DT
                        </div>
                        <button type="submit" class="btn color-primaryalt-bg font-size-14 text-white font-Roboto">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!--owl carousel-->
    </div>
</section>