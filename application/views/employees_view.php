<script src="<?=SITE_ROOT?>js/zoomphoto.js"></script>

<form action="<?=SITE_ROOT?>main/getEmployees" method="get">
<div class="form-group">
    <label>Выберите за какой месяц и год показать зарплату:</label>
    <input type="month" class="form-control" id="date" name="monthpay" placeholder="Дата">
</div>
    <input type="submit" class="btn btn-primary" value="Показать">
</form>
<br>
<?php if(count($data) == 0) {
    ?>
    <div class="alert alert-info" role="alert">
      Зарплата в данном месяце не выдавалась.
    </div>
    <?
}
else
    {
?>
<table class="table table-hover">
    <caption>Список сотрудников и их зарплат за <?= date_format(date_create($data[0]['date']),'m-Y')?></caption>
    <thead>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Профессия</th>
        <th>Фото</th>
        <th>Заработная плата</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $work)
    {
        ?>
        <tr>
            <td><?= $work['surname'] ?></td>
            <td><?= $work['name'] ?></td>
            <td><?= $work['name_prof'] ?></td>
            <td><img class="photo img-responsive img-thumbnail" src="<?=SITE_ROOT.'images/photos/'.$work['photo'].'.'.$work['photoformat'];?>"></td>
            <td><?= $work['salarytotal']?></td>
        </tr>

        <?php
    }
    }
    ?>
    </tbody>
</table>