<form action="<?=SITE_ROOT?>addemployee/addEmployee" method="get">

    <div class="form-group">
        <label for="surname">Фамилия</label>
        <input type="text" class="form-control" id="surname" name="surname" placeholder="Введите фамилию">
    </div>

    <div class="form-group">
        <label for="name">Имя</label>
        <input type="text" class="form-control" id="name" name="surname" placeholder="Введите имя">
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
        <label class="custom-control-label" for="defaultGroupExample1">Option 1</label>
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios">
        <label class="custom-control-label" for="defaultGroupExample2">Option 2</label>
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
        <label class="custom-control-label" for="defaultGroupExample3">Option 3</label>
    </div>


   <hr>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


