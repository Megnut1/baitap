<?php
session_start();
// if (!isset($_SESSION['username'])) {
// 	header("location: login.php");
// }
include('Control.php');
$get_Data = new Data();

?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<title>Zerotype Website Template</title>
	<link rel="stylesheet" href="css/text.css" type="text/css">
	<link rel="stylesheet" href="css/header.css" type="text/css">
	<link rel="stylesheet" href="css/body.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php 
include('header.php');
?>
	<div id="contents">
		<div class="home">
			<h1>Đại dịch covid</h1>
			<div class="info">
				<div class="what">
					<h4>1. Virus corona 2019 là gì?</h4>
					<p>Coronavirus 2019 (2019-nCoV) là virus đường hô hấp mới gây bệnh viêm đường hô hấp cấp ở người và có thể lây lan từ người sang người. Virus này được xác định trong một cuộc điều tra ổ dịch bắt nguồn từ khu chợ lớn chuyên bán hải sản và động vật ở Vũ Hán, tỉnh Hồ Bắc, Trung Quốc. 2019-nCoV là chủng virus mới chưa được xác định trước đó. Ngoài chủng coronavirus mới phát hiện này, đã có nhiều chủng coronavirus khác được biết tới ngày nay có khả năng lây nhiễm ở người với nhiều biến thể có khả năng lây nhiễm cao hơn và kháng vacxin cao hơn.</p>
				</div>
				<div class="what">
					<h4>2. Nguồn gốc của 2019-nCoV</h4>
					<p>Các cơ quan y tế và đối tác y tế đang nỗ lực để xác định nguồn gốc của 2019-nCoV. Virus corona là một betacoronavirus, giống như MERS và SAR, tất cả đều có nguồn gốc từ vật chủ từ loài dơi. Virus corona là một họ virus lớn, phổ biến ở nhiều loài động vật khác nhau bao gồm lạc đà, mèo và dơi. Phân tích cây di truyền của virus này đang được tiếp tục để biết nguồn gốc cụ thể của virus. SARS, một loại coronavirus khác xuất hiện lây nhiễm cho người, bắt nguồn loài từ cầy hương, trong khi MERS, một loại coronavirus khác lây nhiễm cho người, bắt nguồn từ lạc đà.</p>
				</div>
				<div class="what">
					<h4>3. Cơ chế lây lan của 2019-nCoV như thế nào?</h4>
					<p>Vi-rút này ban đầu xuất hiện từ nguồn động vật nhưng có khả năng lây lan từ người sang người. Điều quan trọng cần lưu ý là sự lây lan từ người sang người có thể xảy ra liên tục. Ở người, virus lây từ người này sang người kia thông qua tiếp xúc với dịch cơ thể của người bệnh. Tùy thuộc vào mức độ lây lan của chủng virus, việc ho, hắt hơi hay bắt tay có thể khiến người xung quanh bị phơi nhiễm. Virus cũng có thể bị lây từ việc ai đó chạm tay vào một vật mà người bệnh chạm vào, sau đó đưa lên miệng, mũi, mắt họ. Những người chăm sóc bệnh nhân cũng có thể bị phơi nhiễm virus khi xử lý các chất thải của người bệnh.</p>
					<ul>
						Lưu ý đặc biệt:
						<li> - Quy định tạm thời của Vinmec về hạn chế khách thăm để phòng ngừa dịch virus Corona 2019</li>
						<li> - Khuyến cáo và hotline của Vinmec tiếp nhận tư vấn khách hàng về dịch virus Corona 2019</li>
					</ul>
				</div>
				<div class="what">
					<h4>4. 2019-nCoV có giống virus MERS-CoV hoặc SARS không?</h4>
					<p>Coronavirus là một họ virus lớn, một số virus gây bệnh ở người và virus lây truyền giữa các loài động vật, bao gồm lạc đà, mèo và dơi. 2019-nCoV mới xuất hiện gần đây không giống với coronavirus gây ra Hội chứng hô hấp Trung Đông (MERS) hoặc coronavirus gây ra Hội chứng hô hấp cấp tính nặng (SARS). Tuy nhiên, các phân tích di truyền cho thấy virus này xuất hiện từ một loại virus liên quan đến SARS. Hiện nay, những cuộc điều tra đang diễn ra để tìm hiểu thêm.</p>
				</div>
				<div class="what">
					<h4>5. Cách phòng ngừa 2019-nCoV</h4>
					<ul>Bộ Y tế khuyến cáo người dân và cộng đồng chủ động thực hiện tốt các biện pháp sau:

						<li> - Tránh đi lại, du lịch nếu đang có sốt, ho hoặc khó thở. Đến ngay cơ sở y tế khi có triệu chứng nghi ngờ. Đồng thời, chia sẻ lịch trình di chuyển của bạn với nhân viên y tế.</li>
						<li> - Tránh tiếp xúc với người bị sốt, ho. Thường xuyên rửa tay bằng xà phòng, tránh chạm tay vào mắt, mũi, miệng.</li>
						<li> - Khi ho, hắt hơi hãy che kín miệng và mũi bằng khăn giấy hoặc tay áo. Sau khi sử dụng khăn giấy bỏ vào thùng rác rồi rửa tay sạch sẽ.</li>
						<li> - Nếu thấy có dấu hiệu ốm khi đi lại, du lịch cần thông báo ngay cho nhân viên hàng không, đường sắt, ô tô và tìm đến cơ sở y tế càng sớm càng tốt.</li>
						<li> - Chỉ sử dụng các loại thực phẩm chín.</li>
						<li> - Không khạc nhổ bừa bãi nơi công cộng. Tránh tiếp xúc gần với các động vật nuôi hoặc hoang dã.</li>
						<li> - Đeo khẩu trang khi đi đến chỗ đông người hoặc khi tiếp xúc với người có triệu chứng bệnh.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div id="connect">
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a><a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a><a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
			</div>
			<p>
				© 2023 Zerotype. All Rights Reserved.
			</p>
		</div>
	</div>

	<script>
		function typingEffect() {
			const contactTexts = shuffleArray(['Hello world?😊', 'I\'m Ba Toi Nguyen!', 'Ask me anything!', 'I\'m a Front-end develop!']);
			const typedtext = document.getElementsByClassName("typedtext")[0];
			typedtext.style.color = "red";
			typedtext.style.fontSize = "2.3rem";

			let removing = false;
			let idx = char = 0;

			setInterval(() => { // We define the interval of the typing speed

				// If we do not reach the limit, we insert characters in the html
				if (char < contactTexts[idx].length) typedtext.innerHTML += contactTexts[idx][char];

				// 15*150ms = time before starting to remove characters
				if (char == contactTexts[idx].length + 15) removing = true;

				// Removing characters, the last one always
				if (removing) typedtext.innerHTML = typedtext.innerHTML.substring(0, typedtext.innerHTML.length - 1);

				char++; // Next character

				// When there is nothing else to remove
				if (typedtext.innerHTML.length === 0) {

					// If we get to the end of the texts we start over
					if (idx === contactTexts.length - 1) idx = 0
					else idx++;

					char = 0; // Start the next text by the first character
					removing = false; // No more removing characters
				}

			}, 150); // Typing speed, 150 ms

		}
		typingEffect();

		function shuffleArray(array) {
			let currentIndex = array.length,
				temporaryValue, randomIndex;

			// While there remain elements to shuffle...
			while (0 !== currentIndex) {

				// Pick a remaining element...
				randomIndex = Math.floor(Math.random() * currentIndex);
				currentIndex -= 1;

				// And swap it with the current element.
				temporaryValue = array[currentIndex];
				array[currentIndex] = array[randomIndex];
				array[randomIndex] = temporaryValue;
			}

			return array;
		}
	</script>
</body>

</html>