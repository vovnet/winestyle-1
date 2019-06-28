
<form>
    <input type="text" name="dollar" id="dollar">
</form>
<p id="roubli"></p>
<script>
    $(document).ready(function() {
        let course = <?=json_encode($data)?>;
        $("#dollar").on("keyup", function () {
            let kolvodollarov = +$('#dollar').val() * course;	// Получаем количество долларов, на которое кликнули
            $("#roubli").text(kolvodollarov);
        });
    });

</script>