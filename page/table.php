
        <main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <form action="/?route=table" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Количество колонок</span>
                    <input type="text" class="form__input" name="col">
                </label>
                <label class="form__label">
                    <span class="form__text">Количество строк</span>
                    <input type="text" class="form__input" name="row">
                </label>
                <button class="form__btn">Отправить</button>
            </form>
            <?
                $col = $_POST['col'];
                $row = $_POST['row'];
                $result = "";
                for ($i=1; $i <= $row; $i++) { 
                    $result.='<div class="table__row">';
                    for ($j=1; $j <= $col; $j++) { 
                        $result .= '<div class="table__col">'. $i * $j .'</div>';
                    }
                    $result .='</div>';
                }

            ?>
            <div class="table">
                <?=$result?>
            </div>


        </main>
