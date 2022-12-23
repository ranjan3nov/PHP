<form action="#" method="POST">
    <input type="text" name="digit" placeholder="Enter a number">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $digit = $_POST['digit'];
    for ($i = 1; $i < 10; $i++) {
        echo $digit . ' X' . $i . '=' . $i * $digit;
        echo '<br>';
    }
}
?>