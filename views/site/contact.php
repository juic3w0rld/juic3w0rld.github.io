<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Мы свяжемся с вами в ближайшее время.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Обратная связь</h2>
                        <h5>Вы можете связаться с нами самостоятельно или отправить сообщение, используя форму:</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваш e-mail</p>
                            <input type="email" name="userEmail" placeholder="e-mail" value="<?php echo $userEmail; ?>"/>
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>