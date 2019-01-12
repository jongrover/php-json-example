<?php
$data = array(
  array(
    "testDate" => "10 Jan 2019",
    "testDOM" => "Thur",
    "testLoc" => "CFL",
    "testTime" => "6:30 pm",
    "testVEC" =>  "ARRL",
    "radioButtonStatus" => "disabled"
  ),
  array(
    "testDate" => "06 Feb 2019",
    "testDOM" => "Wed",
    "testLoc" => "CFL",
    "testTime" => "6:30 pm",
    "testVEC" => "ARRL",
    "radioButtonStatus" => "checked"
  ),
  array(
    "testDate" => "24 Mar 2019",
    "testDOM" => "Sun",
    "testLoc" => "ASCPL",
    "testTime" => "2:00 pm",
    "testVEC" => "Laurel",
    "radioButtonStatus" => ""
  ),
  array(
    "testDate" => "13 Apr 2019",
    "testDOM" => "Sat",
    "testLoc" => "Emidio Expo",
    "testTime" => "9:00 am",
    "testVEC" => "Laurel",
    "radioButtonStatus" => ""
  ),
  array(
    "testDate" => "09 May 2019",
    "testDOM" => "Thur",
    "testLoc" => "CFL",
    "testTime" => "6:30 pm",
    "testVEC" => "ARRL",
    "radioButtonStatus" => ""
  ),
  array(
    "testDate" => "13 Jun 2019",
    "testDOM" => "Thur",
    "testLoc" => "CFL",
    "testTime" => "6:30 pm",
    "testVEC" => "Laurel",
    "radioButtonStatus" => ""
  ),
  array(
    "testDate" => "11 Jul 2019",
    "testDOM" => "Thur",
    "testLoc" => "CFL",
    "testTime" => "6:30 pm",
    "testVEC" => "ARRL",
    "radioButtonStatus" => ""
  ),
  array(
    "testDate" => "13 Sep 2019",
    "testDOM" => "Thur",
    "testLoc" => "CFL",
    "testTime" => "6:30 pm",
    "testVEC" => "ARRL",
    "radioButtonStatus" => ""
  ),
  array(
    "testDate" => "03 Nov 2019",
    "testDOM" => "Sun",
    "testLoc" => "CFPL",
    "testTime" => "2:00 pm",
    "testVEC" => "Laurel",
    "radioButtonStatus" => ""
  )
);
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $jsonData;
?>
