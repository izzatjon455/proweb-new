
        <main class="main">
            <section class="head">
                <h2 class="head__title">Слайдер</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>
            <?
                $imgList = scandir('./img');
                $result ="";
                foreach ($imgList as $index => $imgName) {
                    $ext = pathinfo($imgName,PATHINFO_EXTENSION );
                    if ($ext =='jpg' || $ext=='webp'||$ext=='png'||$ext =="jpeg"||$ext=='jfif'||$ext=='svg') {
                        $result .="<img src=\"./img/$imgName\" alt=\"\" class=\"slider__img\">";
                    
                    }
                }
            ?>
            <div class="slider">
                <div class="slider__line">
                    <?=$result?>
                </div>
                <div class="slider__controls">
                    <button class="slider__prev slider__btn"><i class="far fa-chevron-left"></i></button>
                    <button class="slider__next slider__btn"><i class="far fa-chevron-right"></i></button>
                </div>
            </div>
        </main>
