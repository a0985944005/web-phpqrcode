<?
include 'phpqrcode.php'; 
// QRcode::png('http://xyz.cinc.biz/2014/08/php-qr-code.html'); //顯示QR CODE
QRcode::png('http://xyz.cinc.biz/2014/08/php-qr-code.html','test.png');

?>

<table>
	<tr>
		123	
	</tr>
	<tr>
			<img src = "test.png">
	</tr>
</table>
