<?php 
	$sanpham ="EV2009";
	$tensanpham ="Tấm hợp kim nhôm ngoài trời EV2009";
	$soluong ="500";
	$dongia ="160000";
	$vat ="0.05";
	echo "$sanpham";
	echo "<br>";
	echo "$tensanpham";
	echo "<br>";
	echo "$soluong";
	echo "<br>";
	echo "$dongia";
	echo "<br>";
	echo "$vat";
	echo "<br>";
	echo "<br>";

	echo "Sản phâm trước khi trừ thuế VAT :",$soluong*$dongia;
	echo "<br>";
	echo "Sản phâm sau khi trừ thuế VAT :",$soluong*$dongia*$vat;

 ?>