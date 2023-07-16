<div class="feedback">
    <div class="form">
        <div class="topic-text"><h1>Оставьте нам контакты для обратной связи</h1></div>
        <form action="/feedback/" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Введите ФИО"/>
                <span style="color: red"><?=!empty($errors) && isset($errors['name']) ? $errors['name'] : '' ?></span>
            </div>
            <div class="input-box">
                <input type="text" name="address"  placeholder="Введите адресс"/>
                <span style="color: red"><?=!empty($errors) && isset($errors['address']) ? $errors['address'] : '' ?></span>
            </div>
            <div class="input-box">
                <input type="number" name="number" placeholder="Введите телефон"/>
                <span style="color: red"><?=!empty($errors) && isset($errors['number']) ? $errors['number'] : '' ?></span>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Введите email"/>
                <span style="color: red"><?=!empty($errors) && isset($errors['email']) ? $errors['email'] : '' ?></span>
            </div>
            <button class="button" type="submit">Отправить</button>
        </form>
    </div>
</div>

<h2>Вы отравили:</h2>

<table class="table">
    <?php
    if (isset($feedback)) {
            ?>
            <tr>
                <td><?= $feedback['name'] ?></td>
                <td><?= $feedback['address'] ?></td>
                <td><?= $feedback['number'] ?></td>
                <td><?= $feedback['email'] ?></td>
            </tr>
            <?php
    }
    ?>
</table>
