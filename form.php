<?php session_start();
$step = 1;

print $step;

if(isset($_GET)){ 
$step = $_GET['step'];
} 

print "step: " . $step;

?>
<?php
if($step == "") { 
?>
<form method="post" action="<?php print $config['baseurl']; ?>/form.php?step=2">
    <input type="text" name="name">
    <input type="text" name="email_address">
    <input type="submit" value="Go To Step 2">
</form>

<?php } ?>


<!-- form 2 -->

<?php
if($step == 2) { 
?>

<?php
//let's start the session
//session_start();
//now, let's register our session variables
//session_register('name');
//session_register('email_address');
//finally, let's store our posted values in the session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['email_address'] = $_POST['email_address'];
?>
<form method="post" action="form.php?step=3">
<input type="radio" name="membership_type" value="Free">
<input type="radio" name="membership_type" value="Normal">
<input type="radio" name="membership_type" value="Deluxe">
<input type="checkbox" name="terms_and_conditions">
<input type="submit" value="Go To Step 3">
</form>
<?php } ?>

<!-- form 3 -->

<?php
if($step == 3) { 
?>


<?php
//let's start the session
//session_start();
//now, let's register our session variables
//session_register('membership_type');
//session_register('terms_and_conditions');
//finally, let's store our posted values in the session variables
$_SESSION['membership_type'] = $_POST['membership_type'];
$_SESSION['terms_and_conditions'] = $_POST['terms_and_conditions'];
?>
<form method="post" action="form.php?step=4">
<input type="text" name="name_on_card">
<input type="text" name="credit_card_number">
<input type="text" name="credit_card_expiration_date">
<input type="submit" value="Finish">
</form>

<?php } ?>
<!-- form process -->


<?php
if($step == 4) { 
?>


<?php
//let's start our session, so we have access to stored data
//    session_start();
//let's create the query

print "values:
                " . $_SESSION['email_address'] . ",
                " . $_SESSION['membership_type'] . ",
                " . $_SESSION['terms_and_conditions'] . ",
                " . $_POST['name_on_card'] . ",
                " . $_POST['credit_card_number'] . ",
                " . $_POST['credit_card_expiration_date'] . "
                .";
/*
$insert_query = 'insert into subscriptions (
                name,
                email_address,
                membership_type
                terms_and_conditions,
                name_on_card,
                credit_card_number,
                credit_card_expiration_date
                        ) values (
                " . $_SESSION['name'] . ",
                " . $_SESSION['email_address'] . ",
                " . $_SESSION['membership_type'] . ",
                " . $_SESSION['terms_and_conditions'] . ",
                " . $_POST['name_on_card'] . ",
                " . $_POST['credit_card_number'] . ",
                " . $_POST['credit_card_expiration_date'] . "
                        );
//let's run the query
mysql_query($insert_query);
 
 */
?>


<?php } ?>