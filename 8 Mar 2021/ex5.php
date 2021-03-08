<?php
	$x =1002;

	if ($x <=100){
		echo "Gía tiền điện chưa VAT :" , ($x*450) ,"<br/>", "Giá tiền điện cả thuế VAT :", (($x*450)*0.1)+ ($x*450);
	}
	if ($x >= 101 and $x <= 200 ){
		echo "Gía tiền điện chưa VAT :" , ($x*600) ,"<br/>", "Giá tiền điện cả thuế VAT :", (($x*600)*0.1)+ ($x*600);
	}
	if ($x >= 201 and $x <= 300 ){
		echo "Gía tiền điện chưa VAT :" , ($x*750) ,"<br/>", "Giá tiền điện cả thuế VAT :", (($x*750)*0.1)+ ($x*750);
	}
	if ($x >= 301 and $x <= 500 ){
		echo "Gía tiền điện chưa VAT :" , ($x*900) ,"<br/>", "Giá tiền điện cả thuế VAT :", (($x*900)*0.1)+ ($x*900);
	}
	if ($x >= 501 and $x <=1000 ){
		echo "Gía tiền điện chưa VAT :" , ($x*1000) ,"<br/>", "Giá tiền điện cả thuế VAT :", (($x*1000)*0.1)+ ($x*1000);
	}
	if ($x > 1000 ){
		echo "Gía tiền điện chưa VAT :" , ($x* 1200) ,"<br/>", "Giá tiền điện cả thuế VAT :", (($x* 1200)*0.1)+ ($x* 1200);
	}
?>