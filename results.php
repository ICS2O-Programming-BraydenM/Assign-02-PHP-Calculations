<?php
// declare constants
define (Pi, pi());

// This function calculates diameter and circumference of a circle
 
  // get user input;
  $radius = $_POST['length'];

  // calculate the diameter and circumference;
  $diameter = $radius * 2;
  $circumference = $radius * 2 * Pi;
  $diameter_rounded = number_format($diameter, 2);
  $circumference_rounded = number_format($circumference, 2);
?>
<center>
 The diameter would be <?php echo "$diameter_rounded"; ?> cm and the circumference would be <?php echo "$circumference_rounded"; ?> cm.
</center>