<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

<form action="" id="formid">

    <label>Country</label>
    <select name="country_id" id="country_id">
        <option value="">Select Country</option>
        <option value="62"> India </option>
        <option value="63"> USA </option>
    </select>
    <br><br>

    <label>State</label>
    <select name="state_id" id="state_id">
        <option value="">Select State</option>
    </select>

    <br><br>
    <input type="submit" class="submit">
</form>

<script>

$(document).ready(function(){
    $('#country_id').change(function(){
        countryId = $(this).val();
        
        if(countryId!="") {
            $.ajax({
                url: 'get-state.php',
                method: 'GET',
                data: {'country_id': countryId},
                success: function(response) {
                    $('#state_id').html(response);
                },
                error: function(res) {
                    console.log(res);
                }
            });
        } else {
            $('#state_id').html('<option value="">Select State</option>');
        }

    });
});

</script>

</body>
</html>