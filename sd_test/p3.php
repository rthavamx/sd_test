<?php
$cars = array("Volvo","BMW","Toyota");
print "$cars[2]";
?>

<?php
$count = flag_get_user_flag_counts(flag_get_flag('product_comparison'), $user);
if ($count >4){
    echo 'Compare limit achieved';
}
///
?>