<form action="<?=SITE_ROOT?>addemployee/givepremium" method="get">
    <div class="form-group">
        <label for="date">Выберите за какой месяц и год выдать премию:</label>
        <input type="month" class="form-control" id="date" name="monthpay" placeholder="Дата">
    </div>
    <?php foreach($data as $profession)
           { ?>
        <div class="form-group">
            <label for="<?=$profession['id_prof']?>"><?=$profession['name_prof'];?></label>
            <input type="text" class="form-control" id="<?=$profession['id_prof']?>" name="premium_<?=$profession['id_prof']?>" placeholder="Введите премию <?=$profession['name_prof'];?>у">
        </div>
        <?php } ?>

    <hr>


    <input type="submit" name="give" class="btn btn-primary" value="Выдать">
</form>

