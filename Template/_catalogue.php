<?php
$product_shuffle = $product->getData();
?>

<section id="catalogue">
    <div class="container p-2">
        <div class="grid">
            <?php array_map(function($item){ ?>
            <div class="grid-item border <?php echo $item['categorie'];?>">
                <div class="item" style="width: 200px;">
                    <div class="product font-Roboto">
                        <a href="product.php?item_id=1"><img src="<?php echo $item['image_produit'] ?? './assets/product/argile.jpg'; ?>" alt="product1" class="img-fluid"></a>
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
            </div>
            <?php },$product_shuffle)?>
        </div>
    </div>
</section>