<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код</th>
                                <th>Название</th>
                                <th>Стомость, руб.</th>
                                <th>Количество, шт</th>
                                <th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td> 
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>">
                                        <span class="oi" data-glyph="x"></span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="4">Общая стоимость, руб.:</td>
                                    <td><?php echo $totalPrice;?></td>
                                </tr>
                            
                        </table>
                        
                        <a class="btn btn-default checkout" href="/cart/checkout"><span class="oi" data-glyph="credit-card"></span> Оформить заказ</a>
                    <?php else: ?>
                        <p>Корзина пуста</p>
                        
                        <a class="btn btn-default checkout" href="/"><span class="oi" data-glyph="cart"></span> Вернуться в магазин</a>
                    <?php endif; ?>

                </div>

                
                
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>