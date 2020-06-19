<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Ваш личный кабинет, <?php echo $user['name'];?></h3>
            <a href="/cabinet/edit">Редактировать данные</a></br>
            <a href="../admin/index">ROOT</a>   
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>