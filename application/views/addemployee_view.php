<form action="<?=SITE_ROOT?>addemployee/addEmployee" method="get">

    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" class="form-control" id="surname" name="surname" placeholder="Введите фамилию">
    </div>

    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" name="surname" placeholder="Введите имя">
    </div>

    <?php
    foreach($data as $profession) {
        ?>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="<?=$profession['id_prof']?>" name="profession" value="<?=$profession['id_prof']?>">
            <label class="custom-control-label" for="<?=$profession['id_prof']?>"><?=$profession['name_prof'];?></label>
        </div>
        <?php
    }
    ?>
    <div class="form-group">
        <label for="salary">Зарплата</label>
        <input type="text" class="form-control" id="salary" name="salary" placeholder="Введите зарплату">
    </div>

   <hr>
    <div class="form-group">
        <label for="exampleFormControlFile1">Добавить фото</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <input type="submit" class="btn btn-primary" value="Добавить">
</form>


