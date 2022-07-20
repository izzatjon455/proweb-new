
        <main class="main">
            <section class="head">
                <h2 class="head__title">Гостевая книга</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <?if ($_SESSION['name']):?>
                <form action="./components/comment.php" class="form" method="post">
                    <input type="text" value="<?=$_GET['id']?>" name="id" hidden>
                    <label class="form__label">
                        <h1><?=$_SESSION['name']?></h1>
                    </label>
                    <?
                        include_once('./components/db.php');
                        $comment = getForEdit($_GET['id']);
                        $delComment = delComment($_GET['delId']);
                    ?>
                    <label class="form__label">
                        <span class="form__text">Оставте отзыв</span>
                        <textarea class="form__input" name="descr"><?=$comment['comment']?></textarea>
                    </label>
                    <button class="form__btn"><?=$comment ? "Edit" : "Send"?></button>
                </form>
            <?endif?>
            <?
                include_once('./components/db.php');
                $comment = getComment();
                $comment  = array_reverse($comment);
            ?>

            <div class="comments">
                <?foreach ($comment as $key => $value):?>
             
                <div class="comments__item">
                    <p class="comments__item-time"><?=$value['time']?></p>
                    <section class="comments__body">
                        <div class="comments__head">
                            <h2 class="comment__head-title"><?=$value['name']?></h2>
                            <img src="<?=$value['img']?>" alt="" class="comments__head-img">
                        </div>
                        <p class="comments__body-descr"><?=$value['comment']?></p>
                        <div class="comments__footer">
                            <a href="./?route=guest&id=<?=$value['id']?>" class="comments__footer-link"><i class="fal fa-edit"></i></a>
                            <a href="./?route=guest&delId=<?=$value['id']?>" class="comments__footer-link"><i class="fal fa-trash"></i></a>
                        </div>
                    </section>
                </div>
                <?endforeach?>
            </div>
        </main>
