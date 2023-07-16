<div class="feedback">
    <div class="form">
        <div class="topic-text"><h1>Оставьте нам контакты для обратной связи</h1></div>
        <form action="/feedback/save" method="post">
            <div class="input-box">
                <input type="text" name="name" placeholder="Введите ФИО"/><?php echo $_POST['name']?>
            </div>
            <div class="input-box">
                <input type="text" name="address"  placeholder="Введите адресс"/>
            </div>
            <div class="input-box">
                <input type="number" name="number" placeholder="Введите телефон"/>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Введите email"/>
            </div>
            <button class="button" type="submit">Отправить</button>
        </form>
    </div>
</div>
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
