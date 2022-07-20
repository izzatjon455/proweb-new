
        <main class="main">
            <section class="head">
                <h2 class="head__title">Send Message</h2>
                <p class="head__date">Сегодня 03 Март 2020 год</p>
            </section>

            <form action="./components/bot.php" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Name</span>
                    <input type="text" class="form__input" name="name" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Phone</span>
                    <input type="text" class="form__input" name="phone" autocomplete="off">
                </label>
                <label class="form__label">
                    <span class="form__text">Email</span>
                    <input type="email" class="form__input" name="email" autocomplete="off">
                </label>
                <label class="form__label">
                        <span class="form__text">Write Comment</span>
                        <textarea class="form__input" name="descr"></textarea>
                </label>
              
                <button class="form__btn">Send</button>
            </form>
        </main>
