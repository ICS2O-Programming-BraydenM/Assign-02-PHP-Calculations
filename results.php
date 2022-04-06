// Copyright (c) 2022 Brayden MacMillan All rights reserved
//
// Created by: Brayden MacMillan
// Created on: April 4 2022
// This file contains the JS functions for index.html

"use strict"

// declare constants
define (Pi, "Math.PI")

// This function calculates diameter and circumference of a circle
 
function payClicked () {
  // get user input
  $radius = document.getElementById('length').value

  // calculate the diameter and circumference
  $diameter = $radius * 2
  $circumference = $radius * 2 * Math.Pi

  // display the results
  document.getElementById('diameter').innerHTML = "The diameter of the circle would be " + diameter.toFixed(2) + " cm"

  // display the results

  document.getElementById('circumference').innerHTML = "The circumference of the circle would be " + circumference.toFixed(2) + " cm"
}

