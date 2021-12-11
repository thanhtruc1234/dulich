$(document).ready(function() {
	$('#xacnhan').click(function (e) {
			$('#maxacnhan').load('pages/main/xulybanking.php');
	});
	$('#binhluanngay').click(function (e) {
			$('#binhluansanpham').load('pages/main/binhluan.php');
	});


	// $('#thongsokithuat').click(function (e) {
	// 		$('#hienthithongsokithuat').load('pages/main/thongsokithuat.php');
	// });

	// $('#xacnhan').click(function (e) {
	// 	$.get("pages/main/xulybanking.php", function(data){
	// 	$('#hienthithongsokithuat').html(data);
	// 	});
	// });



});