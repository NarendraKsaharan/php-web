<?php
include_once('config-user.php');

$countryId = $_GET['country_id'];
$selCountQuery = "SELECT * FROM `states` WHERE country_id=$countryId AND status=1";
$selState = $con->query($selCountQuery);
?>
<option value="">Select State</option>
<?php
while($state = $selState->fetch_assoc()) { ?>
    <option value="<?= $state['id']?>"> <?= $state['name']?> </option>
<?php
}
?>