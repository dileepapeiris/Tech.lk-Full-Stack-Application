<?php
session_start();

$pagename="tech.lk:  Your One-Stop Shop for the Latest Gadgets!"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
//display name of the page as window title
echo "<body>";
include ("headfile.html");
include("detectlogin.php");
//include header layout file
echo "<h4>".$pagename."</h4>";
//display name of the page on the web page
//display random text
echo "At Tech.LK, we bring you the best in technology at unbeatable prices. Whether you’re upgrading your home, enhancing your entertainment setup, or looking for the latest smart devices, we’ve got everything you need in one place.

SECURE YOUR HOME WITH SMART SECURITY
Stay connected to your home no matter where you are. Our smart security cameras and motion sensors give you real-time alerts, live streaming, and remote access for complete peace of mind.

SAVE ENERGY WITH SMART DEVICES
Control your home’s heating, cooling, and lighting with a tap on your phone. Our smart energy solutions help you reduce electricity bills while keeping your home comfortable and efficient.

ENHANCE YOUR LIFESTYLE WITH SMART TECH
From wireless earbuds to smart speakers and wearables, our range of cutting-edge gadgets makes life more convenient, connected, and fun. Whether you need hands-free assistance, immersive sound, or fitness tracking, we’ve got the perfect device for you.";
include("footfile.html");
//include head layout
echo "</body>";
?>