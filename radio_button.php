<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio Button</title>
</head>

<body>
  <!-- i use name becouse i only have to select one -->
  <form action="radio_button.php" method="post">
    <input type="radio" name="credit_card" value="caman_dude_what's_wrong">Visa</br>
    <input type="radio" name="credit_card" value="Master card">Master Card</br>
    <input type="radio" name="credit_card" value="American express">American express</br>
    <input type="submit" name="confirm" value="confirm">
  </form>
</body>

</html>

<?php
// we use nasted if statement to echo that massege 'please make a select'

if (isset($_POST["confirm"])) {
  if (isset($_POST["credit_card"])) {
    $credit_card = $_POST["credit_card"];
    echo $credit_card;
  } else {
    echo "Please make a selection";
  }
}
?>