<!DOCTYPE html>
<html lang="en-ca">
  <head>
<!-- metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first Assignment">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- For the favicon on this page -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-pink.min.css" />
    <title>Assignment 2</title>
    
<!-- Link to CSS sheet -->
    <link rel="stylesheet" href="./css/style.css">
  </head>
  
<!-- Getting text over an image --> 
  <body>
    <center>
<!-- php echo to print the html to the page -->

    <div class="container">
    <img src="./images/panorama.jpg" alt="Ocean" style="width:100%;">"
    <h2 style="color:white"><font face="Times New Roman"><div class="centered">◉ Diameter and Circumference of a Circle in PHP ◉</div></h2>
    </div>
    
<!-- Slider with Starting Value -->
			<h4 style="color:purple">How much do you know about circles and their formulas?</h4>
			<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0"> 

<!-- Glowing text -->
    <h1 class="glow" style="background-color:paleturquoise">~ Formulas ~</h1>

<!-- Inserting an image shoing the formulas for finding the diameter and circumference of a circle -->
    <img src="./images/formulas.jpg" width="800" length="900">

<!-- Adding a JavaScript button --> 
        <form action="./results.php" method="post" target="results">
    <script src="./js/script.js"></script>
    <h1 style="background-color:palevioletred"><font face="Garamond">Circle Program, with a JS file</font></h1>
    <p>
      <h3 style="background-color:moccasin"><font face="Garamond">Please enter your information:</font></h3>
      <form action="javascript:payClicked()">
        <label for="length">The length of the radius in cm</label>
        <input type="number" step="any" id="length" placeholder="Length"><br><br>
        <input type="submit" value="Calculate">
      </form>
    </p>

<!-- Create a space where the user information will be displayed -->
      <div id="display-the-results"></div>
    	<div id="diameter"></div>
      <div id="circumference"></div>
		

<!-- Adding a MDL button -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script>
      function myButtonClicked() {
        alert("This was quite challenging to do!")
      }
    </script>

<!-- Colored raised button -->
    <button onclick="myButtonClicked()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
		  A message!
		</button>
		<br></br>

<!-- A table -->
    <h2 style="background-color:turquoise"><font face="Garamond">Here is a table</font></h2>
      <h6>This table is showcasing different types of shapes with their formula for area, perimeter and how hard the calculation is to do on a scale of 10 (10 being the hardest and 1 being the easiest)</h6>
 <table border="1">
          <tr>
            <th>Shape name</th>
            <th>Area formula</th>
            <th>Perimeter formula</th>
            <th>Difficulty scale</th>
          </tr>
          <tr>
            <td>Square</td>
            <td>Side x other side</td>
            <td>Side x 4</td>
            <td>1/10</td>
          </tr>
          <tr>
            <td>Rectangle</td>
            <td>Length x width</td>
            <td>Side x 4</td>
            <td>2/10</td>
          </tr>
          <tr>
            <td>Triangle</td>
            <td>Base x height / 2</td>
            <td>a x b x c</td>
            <td>4/10</td>
          </tr>
         </table>

<!-- An ordered list -->
  <h2 style="background-color:violet"><font face="Garamond">~ A list of prisms ~</font></h2>
  <ol>
    <li>Triangular prism</li>
    <li>Square prism</li>
    <li>Rectangular Prism</li>
    <li>Pentagonal Prism</li>
    <li>Hexagonal prism</li>
    <li>Regular prism</li>
    <li>Irregular Prism</li>
    <li>Oblique prism</li>
  </ol>

<!-- Adding a GIF -->
    <img src="./images/thanks.gif" alt="Thank You" width="500" length="700">
   </center>
  </body>
</html>