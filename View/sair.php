<?php
session_start();
session_destroy();
echo "<script>";
echo "alert('Saiu!')";
echo "</script>";
echo "<script>";
echo "window.location='index.php'";
echo "</script>";

