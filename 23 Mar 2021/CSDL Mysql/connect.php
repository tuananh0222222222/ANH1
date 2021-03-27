<?php
    $mysqli = new mysqli('localhost','root','mypass123','quanlynv')
    if (isset($_POST['submit'])) { 
        $HONV = $_POST['HONV'];
        $TENLOT = $_POST['TENLOT'];
        $TENNV = $_POST['TENNV'];
        $PHAI = $_POST['PHAI'];
        $LUONG = $_POST['LUONG'];
        $MANV = $_POST['MANV'];
        $NGSINH = $_POST['NGSINH'];
        $DIACHI = $_POST['DIACHI'];
        $PHG = $_POST['PHG'];
    }
?>