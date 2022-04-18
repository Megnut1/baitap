-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bao
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog` (
  `blog_id` bigint NOT NULL AUTO_INCREMENT,
  `title` text,
  `shortContent` text,
  `longContent` longtext,
  `createByDate` datetime DEFAULT NULL,
  `category_id` bigint DEFAULT NULL,
  `author` int DEFAULT NULL,
  `status_blog` int DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `fk_category` (`category_id`),
  CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog`
--

LOCK TABLES `blog` WRITE;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` VALUES (50,'Lời hiệu triệu của Tổng Bí thư và sức mạnh toàn dân tộc','TP - 76 năm sau ngày Ðộc lập (2/9/1945 - 2/9/2021), đất nước đang đứng trước muôn vàn khó khăn, thử thách do tác động của đại dịch COVID-19. Trong bối cảnh đó, thực hiện lời kêu gọi của Tổng Bí thư Nguyễn Phú Trọng, toàn đảng, toàn quân và toàn dân đang phát huy truyền thống tương thân, tương ái, đoàn kết một lòng để ngăn chặn, đẩy lùi bằng được, không để dịch lan rộng, bùng phát trong cộng đồng.','     “Ðã đoàn kết càng phải đoàn kết hơn nữa”\r\n\r\nSự xuất hiện làn sóng COVID-19 lần thứ tư, với biến chủng Delta lây lan nhanh, phức tạp những tháng gần đây đã ảnh hưởng nghiêm trọng đến kinh tế, xã hội nước ta. Với phương châm bảo vệ sức khoẻ, tính mạng của nhân dân là trên hết, trước hết, nhiều địa phương đã phải thực hiện giãn cách xã hội theo Chỉ thị 16.\r\n\r\nTrong bối cảnh đó, để phát huy tinh thần đoàn kết, toàn dân tộc muôn người như một, đồng lòng ngăn chặn sự lây lan của đại dịch, ngày 29/7, Tổng Bí thư Nguyễn Phú Trọng đã ra lời kêu gọi gửi đồng bào, đồng chí, chiến sĩ cả nước và đồng bào ta ở nước ngoài về công tác phòng, chống đại dịch COVID-19.\r\n\r\n“Chúng ta đã cố gắng càng cố gắng hơn nữa; đã đoàn kết càng đoàn kết hơn nữa; đã quyết tâm càng quyết tâm cao hơn nữa; toàn dân tộc muôn người như một, đồng lòng cùng Đảng, Chính phủ, các cấp, các ngành tìm mọi cách quyết ngăn chặn, đẩy lùi bằng được, không để dịch lan rộng, bùng phát trong cộng đồng”, Tổng Bí thư kêu gọi.\r\n\r\nTổng Bí thư bày tỏ tin tưởng sâu sắc rằng, cả nước góp sức, toàn Đảng, toàn dân đồng lòng, thống nhất ý chí và hành động, cùng với sự giúp đỡ chí tình của đồng bào ta ở nước ngoài và bạn bè quốc tế, nhất định chúng ta sẽ chiến thắng đại dịch COVID-19 và phải chiến thắng cho bằng được, góp phần xứng đáng vào sự nỗ lực chung của toàn nhân loại vì một thế giới an toàn, lành mạnh, hoà bình, hữu nghị, hợp tác và thịnh vượng, xứng đáng với truyền thống anh hùng vẻ vang của Đất nước ta, Dân tộc ta!\r\n\r\nĐể khơi dậy, phát huy sức mạnh đoàn kết, Thủ tướng Phạm Minh Chính cũng đã phát động Phong trào thi đua đặc biệt: “Cả nước đoàn kết, chung sức, đồng lòng thi đua phòng, chống và chiến thắng đại dịch COVID-19”. Thủ tướng kêu gọi các tầng lớp nhân dân tiếp tục phát huy truyền thống đoàn kết, tinh thần yêu nước, thương nòi, “lá lành đùm lá rách”, “mỗi người vì mọi người, mọi người vì mỗi người”; sẵn sàng hỗ trợ vượt qua khó khăn.\r\n\r\nPhát huy truyền thống lịch sử, văn hóa con người Việt Nam, hành động có trách nhiệm vì bản thân, gia đình, cộng đồng và xã hội, chấp hành tốt quy định của các cấp chính quyền, nhất là những nơi phong tỏa, cách ly, phải thực hiện nghiêm ngặt người cách ly với người, ai ở đâu thì ở đó để ngăn chặn nguồn lây, góp phần sớm đẩy lùi và chiến thắng dịch bệnh.\r\n\r\nĐoàn kết là một truyền thống và bài học cực kỳ quý báu của dân tộc Việt Nam, được hun đúc qua hàng nghìn năm lịch sử dựng nước và giữ nước. Từ khi ra đời và trong suốt quá trình lãnh đạo cách mạng, Đảng ta luôn luôn xác định “đoàn kết” là giá trị cốt lõi và “đại đoàn kết toàn dân tộc” là đường lối chiến lược, là cội nguồn sức mạnh, động lực chủ yếu của cách mạng Việt Nam.','2022-04-13 00:00:00',1,1,1),(51,'Tạo hình giống bất ngờ của diễn viên 10X đóng danh ca Thanh Thúy','Tạo hình giống bất ngờ của diễn viên 10X đóng danh ca Thanh Thúy',' Diễn viên trẻ Phạm Nhật Linh, sinh năm 2001 tại Huế sẽ vào vai danh ca Thanh Thúy trong bộ phim xoay quanh cuộc đời và âm nhạc Trịnh Công Sơn, trải dài từ những năm ông 20 đến 40 tuổi.\r\n\r\nNgay từ khi công bố hình ảnh đầu tiên vào 2 năm trước, cô đã gây ngỡ ngàng khi rất giống với khí chất của danh ca Thanh Thúy thập niên 60.\r\nMới đây, những hình ảnh của diễn viên 10X trong tạo hình Thanh Thúy tiếp tục nhận được sự chú ý.','2022-04-10 00:00:00',5,33,1),(52,'Trung tâm y tế Thị trấn Trường Sa cấp cứu ngư dân viêm ruột thừa cấp','VOV.VN - Trung tâm y tế Thị trấn Trường Sa, huyện Trường Sa, tỉnh Khánh Hòa đã phẫu thuật cấp cứu thành công cho bệnh nhân Trần Văn Lắm sinh năm 1979. Bệnh nhân bị viêm ruột thừa cấp, là lao động trên tàu cá.',' Ngày 12/4, khi đang khai thác hải sản trên biển, anh Trần Văn Lắm bị đau bụng nhiều ở vùng hố chậu phải. Sau 1 ngày tự dùng thuốc điều trị nhưng không khỏi, ngày 13/4, anh Lắm được các ngư dân trên tàu cá BTh 97566 TS đưa vào đảo Trường Sa cấp cứu.\r\nQua thăm khám và hội chẩn với Bệnh viện Quân y 175, Quân y của đảo kết luận: Bệnh nhân bị viêm ruột thừa cấp giờ thứ 17 và chỉ định phẫu thuật cấp cứu.\r\n\r\nBệnh nhân Trần Văn Lắm, 43 tuổi, quê huyện Phú Quý, tỉnh Bình Thuận, là thuyền viên trên tàu cá BTh 97566 TS, do anh Trần Văn Kiểm, sinh năm 1981 người cùng địa phương làm thuyền trưởng. Tàu xuất bến ngày 10/4 khai thác ở ngư trường Trường Sa.\r\n\r\nSau khi được các bác sĩ phẫu thuật kịp thời, sức khỏe của bệnh nhân Trần Văn Lắm đã ổn định và hiện đang lưu trú tại đảo để tiếp tục theo dõi và điều trị./.\r\n','2022-04-03 00:00:00',5,1,1),(53,'Giám sát thực hiện nghị quyết về dừng đầu tư điện hạt nhân Ninh Thuận','VOV.VN - Ngày 13/4, Đoàn công tác của Quốc hội do ông Nguyễn Đức Hải, Phó Chủ tịch Quốc hội làm trưởng đoàn cùng với UBND tỉnh Ninh Thuận tổ chức Hội nghị về giám sát 5 năm thực hiện Nghị quyết số 31 của Quốc hội về việc dừng thực hiện chủ trương đầu tư dự án điện hạt nhân Ninh Thuận (2016-2021).',' Ngày 25/11/2009, Quốc hội ban hành Nghị quyết số 41 về chủ trương đầu tư dự án điện hạt nhân Ninh Thuận. Tại kỳ họp thứ hai, ngày 22/11/2016, Quốc hội khóa XIV đã ban hành Nghị quyết số 31 về dừng thực hiện chủ trương đầu tư dự án điện hạt nhân Ninh Thuận.\r\n\r\nĐến ngày 31/8/2018, Chính phủ đã ban hành Nghị quyết số 115 về việc thực hiện một số cơ chế, chính sách đặc thù hỗ trợ tỉnh Ninh Thuận phát triển kinh tế, xã hội, ổn định sản xuất, đời sống nhân dân giai đoạn 2018-2023. Đồng thời UBND tỉnh Ninh Thuận trình phương án ổn định sản xuất, đời sống nhân dân và phát triển khu dân cư phù hợp tại vị trí trước đây quy hoạch xây dựng các Nhà máy điện hạt nhân Ninh Thuận 1 và 2.','2022-04-03 00:00:00',5,1,1),(64,'Moskva sinking: What really happened to the pride of Russias fleet?','(CNN)The Russian guided-missile cruiser Moskva rests deep beneath the Black Sea this morning.',' Ukraine claims that it hit Moskva with missiles, causing it to sink. Russia has insisted the reason for the sinking was a fire. On Friday, the United States supported Ukraine/s account, with a senior defense official saying that it believes that two Ukrainian Neptune missiles hit the Russian warship in the Black Sea.\r\nWhether the ship lies at the bottom of the sea as the victim of Ukrainian missiles, Russian incompetence, bad luck or a combination of all three remains disputed. What is certain, though, is that the biggest wartime loss of a naval ship in 40 years will raise troubling questions not only for Moscow, but for military planners around the world.\r\nWhat caused the sinking?\r\nThe ship sank off the coast of Ukraine in the Black Sea on Thursday. Ukraine says it hit the Moskva with anti-ship cruise missiles and that these sparked the fire that detonated the ammunition.','2022-04-12 00:00:00',8,33,1),(65,' US says three Russians offered congressman a free trip as part of a propaganda and disinformation campaign','(CNN)Federal prosecutors in New York on Thursday unsealed an indictment charging a member of Russia/s legislature and two of his staffers with orchestrating a propaganda and disinformation campaign targeting US lawmakers.',' Aleksandr Babakov, deputy chairman of the Russian State Duma, and his staffers Aleksandr Vorobev and Mikhail Plisyuk, were charged with conspiring to act in the US as an unregistered foreign agent, conspiring to violate US sanctions and conspiring to commit visa fraud.\r\nThe congressman, who was not identified, did not accept the invitation, the indictment said.\r\nProsecutors allege the men schemed to affect US policy toward Russia from 2012 to 2017 \"through staged events, paid propaganda, and the recruitment of at least one American citizen to do their bidding in unofficial capacities,\" according to the indictment.\r\nAlso in 2017, prosecutors say that Babakov requested a meeting with a congressman in Washington through the American citizen and Babakov and his staffers falsified their Visa applications by saying they were traveling separately and on vacation. The US placed the three men on the US sanctions list in 2017 so their visas were denied, and no meetings took place, prosecutors said. Babakov, a pro-Vladimir Putin lawmaker, was also sanctioned by the European Union for voting in favor of a Russian bill annexing Crimea in 2014.\r\nThe three men are based in Russia and remain at large, prosecutors said. The US Justice Department is seeking forfeiture of any property, vessels, aircraft used or traced to the proceeds obtained through the alleged crimes.\r\nThe Russians, the indictment alleges, used a nonprofit organization based in Russia, the Institute for International Integration Studies, as a front for their activities.','2022-04-07 00:00:00',8,33,1),(66,'Joe Biden numbers are collapsing among a group you really would not expect','(CNN) Young Americans have turned on Joe Biden.','<p><img alt=\"\" src=\"/zero/imagePost/images/277697971_408352597784173_505714882281533429_n.jpg\" style=\"height:1200px; width:1572px\" /></p>\r\n\r\n<p>That&#39;s the shocking finding of a&nbsp;<strong><em><a href=\"https://news.gallup.com/poll/391733/biden-job-approval-down-among-younger-generations.aspx\" target=\"_blank\">Gallup analysis of its polling</a></em></strong>&nbsp;over the breadth of Biden&#39;s term released this week.</p>\r\n\r\n<p>In the early days of Biden&#39;s presidency (from January 2021 to June 2021), an average of 6 in 10 adult members of Generation Z -- those born between 1997 and 2004 -- approved of the job Biden was doing. During the period spanning September 2021 to March 2022, that number had plummeted to an average of just 39%.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Among millennials -- those born between 1981 and 1996 -- the collapse is similarly stark. Biden&#39;s approval rating among that group stood at 60% in aggregated Gallup numbers in the first half of 2021, compared with 41% more recently.</p>\r\n\r\n<p>That loss in confidence among young people was, interestingly, not as steep among older age groups. Over that same period, Biden&#39;s approval ratings among baby boomers -- those born between 1946 and 1964 -- dipped by only 7 points. Among &quot;traditionalists&quot; -- those born before 1946 -- his approval rating was unchanged.</p>\r\n\r\n<p>Now, some of the discrepancy is because younger Americans were far more positive about Biden at the start of his presidency than older Americans. So there was just more room to fall.</p>\r\n\r\n<p>At the same time, it&#39;s clear in other surveys that there has been a significant lessening of enthusiasm for Biden among younger Americans. A&nbsp;<a href=\"https://poll.qu.edu/poll-release?releaseid=3843\" target=\"_blank\">Quinnipiac poll&nbsp;</a>released this week showed that just 21% of those aged 18 to 34 said they approved of the way the President was handling his job, while 58% disapproved.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>By comparison, 36% of Americans aged 35 to 49 and 35% of Americans aged 50 to 64 approved of Biden&#39;s job performance. Among Americans 65 and over, 48% said the same.</p>\r\n\r\n<p>What explains Biden&#39;s precipitous drop-off among young Americans? It&#39;s hard to pinpoint any one reason, but there&#39;s no question the delta between what young people expected out of the Biden presidency -- particularly when it came to dealing with Covid-19 -- and what they got is substantial.</p>\r\n','2022-04-14 00:00:00',8,33,1),(67,'Joe Biden numbers are collapsing among a group you really would not expect','(CNN) Young Americans have turned on Joe Biden.','<p>That&#39;s the shocking finding of a&nbsp;<strong><em><a href=\"https://news.gallup.com/poll/391733/biden-job-approval-down-among-younger-generations.aspx\" target=\"_blank\">Gallup analysis of its polling</a></em></strong>&nbsp;over the breadth of Biden&#39;s term released this week.</p>\r\n\r\n<p>In the early days of Biden&#39;s presidency (from January 2021 to June 2021), an average of 6 in 10 adult members of Generation Z -- those born between 1997 and 2004 -- approved of the job Biden was doing. During the period spanning September 2021 to March 2022, that number had plummeted to an average of just 39%.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Among millennials -- those born between 1981 and 1996 -- the collapse is similarly stark. Biden&#39;s approval rating among that group stood at 60% in aggregated Gallup numbers in the first half of 2021, compared with 41% more recently.</p>\r\n\r\n<p>That loss in confidence among young people was, interestingly, not as steep among older age groups. Over that same period, Biden&#39;s approval ratings among baby boomers -- those born between 1946 and 1964 -- dipped by only 7 points. Among &quot;traditionalists&quot; -- those born before 1946 -- his approval rating was unchanged.</p>\r\n\r\n<p>Now, some of the discrepancy is because younger Americans were far more positive about Biden at the start of his presidency than older Americans. So there was just more room to fall.</p>\r\n\r\n<p>At the same time, it&#39;s clear in other surveys that there has been a significant lessening of enthusiasm for Biden among younger Americans. A&nbsp;<a href=\"https://poll.qu.edu/poll-release?releaseid=3843\" target=\"_blank\">Quinnipiac poll&nbsp;</a>released this week showed that just 21% of those aged 18 to 34 said they approved of the way the President was handling his job, while 58% disapproved.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>By comparison, 36% of Americans aged 35 to 49 and 35% of Americans aged 50 to 64 approved of Biden&#39;s job performance. Among Americans 65 and over, 48% said the same.</p>\r\n\r\n<p>What explains Biden&#39;s precipitous drop-off among young Americans? It&#39;s hard to pinpoint any one reason, but there&#39;s no question the delta between what young people expected out of the Biden presidency -- particularly when it came to dealing with Covid-19 -- and what they got is substantial.</p>\r\n','2022-04-14 00:00:00',8,33,1),(68,'Joe Biden numbers are collapsing among a group you really would not expect','(CNN)Young Americans have turned on Joe Biden.','<p>That&#39;s the shocking finding of a&nbsp;<a href=\"https://news.gallup.com/poll/391733/biden-job-approval-down-among-younger-generations.aspx\" target=\"_blank\">Gallup analysis of its polling</a>&nbsp;over the breadth of Biden&#39;s term released this week.</p>\r\n\r\n<p>In the early days of Biden&#39;s presidency (from January 2021 to June 2021), an average of 6 in 10 adult members of Generation Z -- those born between 1997 and 2004 -- approved of the job Biden was doing. During the period spanning September 2021 to March 2022, that number had plummeted to an average of just 39%.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Among millennials -- those born between 1981 and 1996 -- the collapse is similarly stark. Biden&#39;s approval rating among that group stood at 60% in aggregated Gallup numbers in the first half of 2021, compared with 41% more recently.</p>\r\n\r\n<p>That loss in confidence among young people was, interestingly, not as steep among older age groups. Over that same period, Biden&#39;s approval ratings among baby boomers -- those born between 1946 and 1964 -- dipped by only 7 points. Among &quot;traditionalists&quot; -- those born before 1946 -- his approval rating was unchanged.</p>\r\n','2022-04-13 00:00:00',8,33,1),(73,'Dàn hoa hậu bùng nổ nhan sắc bên siêu xe','(NLĐO) - Lễ hội thời trang nhan sắc Việt vừa khai mạc tối qua, 16-4, \"lung linh\" với sự xuất hiện của dàn hoa hậu thi nhau khoe nhan sắc \"chặt chém\".','<p style=\"text-align:center\"><img alt=\"\" src=\"/zero/imagePost/images/luong-thuy-linh2-16501584035621370509989.jpg\" style=\"height:367px; width:550px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Hoa hậu Lương Th&ugrave;y Linh</em></p>\r\n\r\n<p>D&agrave;n hoa hậu khoe sắc b&ecirc;n si&ecirc;u xe tại sự kiện Vietnam Beauty Fashion Fest (Lễ hội thời trang nhan sắc Việt), diễn ra tối 16-4, thu h&uacute;t sự ch&uacute; &yacute; của c&ocirc;ng ch&uacute;ng. Loạt mỹ nh&acirc;n đ&igrave;nh đ&aacute;m &quot;đọ&quot; sắc cực gắt tại thảm đỏ của sự kiện gồm: Th&ugrave;y Ti&ecirc;n, Minh T&uacute;, Đỗ Mỹ Linh, Tiểu Vy, Lương Th&ugrave;y Linh... thu h&uacute;t sự quan t&acirc;m của đ&ocirc;ng đảo cộng đồng y&ecirc;u mến nhan sắc.&nbsp;</p>\r\n\r\n<p>Chương tr&igrave;nh nằm trong khu&ocirc;n khổ cuộc thi Miss World Vietnam 2022, do Tổng đạo diễn Ho&agrave;ng Nhật Nam s&aacute;ng lập v&agrave; kết hợp c&ugrave;ng v&ograve;ng thi Người đẹp Thời trang.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/zero/imagePost/images/hoa-hau-thuy-tien2-1650158448700997786139.jpg\" style=\"height:367px; width:550px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Hoa hậu Th&ugrave;y Ti&ecirc;n</em></p>\r\n\r\n<p style=\"text-align:center\"><em><img alt=\"\" src=\"/zero/imagePost/images/a-hau-ngoc-thao1-16501582383492072929401.jpg\" style=\"height:367px; width:550px\" /></em></p>\r\n\r\n<p style=\"text-align:center\"><em>&Aacute; hậu Ngọc Thảo</em></p>\r\n\r\n<p>Sự kiện Vietnam Beauty Fashion Fest sẽ tiếp tục diễn ra v&agrave;o tối nay, 17-4. Top 64 th&iacute; sinh v&ograve;ng Chung khảo to&agrave;n quốc sẽ tr&igrave;nh diễn những bộ sưu tập đến từ c&aacute;c nh&agrave; thiết kế L&ecirc; Ngọc L&acirc;m, Nguyễn Minh Tuấn, T&ugrave;ng Vũ, Phạm Đăng Anh Thư, V&otilde; Thanh Can, H&agrave; Thanh Việt. Từ đ&oacute; chọn ra c&ocirc; g&aacute;i xuất sắc nhất cho danh hiệu Người đẹp Thời trang, cũng như được đặc c&aacute;ch v&agrave;o top 20 chung cuộc.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/zero/imagePost/images/a-hau-kieu-loan2-16501582384441903785012.jpg\" style=\"height:825px; width:550px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>&Aacute; hậu Kiều Loan</em></p>\r\n','2022-04-16 00:00:00',4,33,1),(74,'Cháy lớn tại nhà 7 tầng treo biển massage, nhiều nữ nhân viên tháo chạy ra ngoài','(NLĐO)- Một đám cháy bốc lên từ căn nhà 7 tầng số 254 Đê La Thành (phường Thổ Quan, quận Đống Đa, Hà Nội) trưa 16-4 khiến nhiều người tháo chạy.','<p>Chiều 16-4, lực lượng chức năng đ&atilde; dập tắt đ&aacute;m ch&aacute;y tại căn nh&agrave; số 254 Đ&ecirc; La Th&agrave;nh, lphường Thổ Quan, quận Đống Đa, TP H&agrave; Nội.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"/zero/imagePost/images/2782131905458032439217912602510989148188856n-1650098956234240387666.jpg\" style=\"height:456px; width:684px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Căn nh&agrave; xảy ra ch&aacute;y treo biển massage, ng&acirc;m thuốc dao đỏ</em></p>\r\n\r\n<p>Theo th&ocirc;ng tin ban đầu, vụ hỏa hoạn xảy ra v&agrave;o khoảng 12 giờ 50 ph&uacute;t ng&agrave;y 16-4 tại căn nh&agrave; treo biển&nbsp;<a href=\"https://nld.com.vn/massage.html\" target=\"_blank\" title=\"massage\"><strong>massage</strong></a>, ng&acirc;m thuốc Dao đỏ.</p>\r\n\r\n<p>Theo ghi nhận, tại thời điểm xảy ra vụ ch&aacute;y, rất đ&ocirc;ng c&ocirc; g&aacute;i trẻ mặc đồng phục m&agrave;u đỏ th&aacute;o chạy ra ngo&agrave;i từ khu vực xảy ra ch&aacute;y.</p>\r\n\r\n<p>Đến khoảng 14 giờ, đ&aacute;m ch&aacute;y được dập tắt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hiện, lực lượng chức năng đang điều tra nguy&ecirc;n nh&acirc;n v&agrave; thống k&ecirc; thiệt hại trong vụ hoả hoạn n&agrave;y.</p>\r\n','2022-04-17 00:00:00',5,34,0);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` bigint NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Thể thao'),(2,'Công nghệ'),(3,'Sức khỏe'),(4,'Giải trí'),(5,'Đời sống'),(6,'Du lịch'),(7,'Kinh doanh'),(8,'Thế giới');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentsection`
--

DROP TABLE IF EXISTS `commentsection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commentsection` (
  `cm_id` bigint NOT NULL AUTO_INCREMENT,
  `content` longtext,
  `user_id` bigint DEFAULT NULL,
  `blog_id` bigint DEFAULT NULL,
  PRIMARY KEY (`cm_id`),
  KEY `fk_blog` (`blog_id`),
  KEY `fk_user` (`user_id`),
  CONSTRAINT `fk_blog` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`blog_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentsection`
--

LOCK TABLES `commentsection` WRITE;
/*!40000 ALTER TABLE `commentsection` DISABLE KEYS */;
INSERT INTO `commentsection` VALUES (19,'ssss',33,50),(20,'Hello',33,65),(21,'Hello',34,50),(22,'Hello\r\n',33,50);
/*!40000 ALTER TABLE `commentsection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fearture`
--

DROP TABLE IF EXISTS `fearture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fearture` (
  `id_fearture` int NOT NULL AUTO_INCREMENT,
  `name_Fe` varchar(255) DEFAULT NULL,
  `ct_Fe` varchar(255) DEFAULT NULL,
  `img_Fe` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_fearture`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fearture`
--

LOCK TABLES `fearture` WRITE;
/*!40000 ALTER TABLE `fearture` DISABLE KEYS */;
INSERT INTO `fearture` VALUES (1,'Best Attorneys','You can place Industrial content here or place Industrial content here or place kind of details',NULL),(2,'Fight For Justice','You can place Industrial content here or place Industrial content here or place kind of details',NULL),(3,'30 Years Experience','You can place Industrial content here or place Industrial content here or place kind of details',NULL),(4,'Low Cost For Case','You can place Industrial content here or place Industrial content here or place kind of details',NULL),(5,'Intelligent Lawyers','You can place Industrial content here or place Industrial content here or place kind of details',NULL),(6,'Best Case strategy','You can place Industrial content here or place Industrial content here or place kind of details',NULL);
/*!40000 ALTER TABLE `fearture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contact`
--

DROP TABLE IF EXISTS `tb_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contact`
--

LOCK TABLES `tb_contact` WRITE;
/*!40000 ALTER TABLE `tb_contact` DISABLE KEYS */;
INSERT INTO `tb_contact` VALUES (1,'Name','Email','Subject',''),(2,'Nguyen Toi','batoi1271.doe@gmail.com','AAAA','hihihi'),(3,'Nguyen Ba Toi','batoi1271.doe@gmail.com','HiepHoa','HiepHoa'),(4,'Nguyen Ba Toi','batoi1271.doe@gmail.com','HiepHoa','HiepHoa'),(5,'Nguyen Ba Toi','batoi1271.doe@gmail.com','HiepHoa','HiepHoa');
/*!40000 ALTER TABLE `tb_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `user_id` bigint NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phoneNumber` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `role` int DEFAULT NULL,
  `bio` longtext,
  `job` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Mau Huy','81dc9bdb52d04dc20036dbd8313ed055','Huynguyenmau93@gmail.com','0968169542','av.jpg','Thanh Hóa','2001-03-01 00:00:00',1,'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!','CEO at Google'),(32,'admin','81dc9bdb52d04dc20036dbd8313ed055','admin@gmail.com','012345678','z3328913643203_73cb7ba748a22b0c943f1fed389aa335.jpg','Bac Giang','1970-01-01 00:00:00',2,'Hello','CEO'),(33,'Ba Toi','81dc9bdb52d04dc20036dbd8313ed055','batoi1271.doe@gmail.com','0977920301','108040036_637975253504408_4017837612898104443_n.jpg','Bac Giang','2001-12-07 00:00:00',1,'The most important of things is not money. The most important of things is you have great ideas, you find a group of the people who share the same ideas with you.','CEO at Google'),(34,'Ngo Tung','81dc9bdb52d04dc20036dbd8313ed055','dntung2409@gmail.com','','107876568_637975000171100_8783156770481376989_n.jpg','','1970-01-01 00:00:00',1,'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!','CEO at Google'),(35,'Gia Truong','81dc9bdb52d04dc20036dbd8313ed055','truong@gmail.com','','108942230_637975116837755_5631972767796405054_n.jpg','','1970-01-01 00:00:00',1,'','Ceo At Google'),(36,'dddd','8277e0910d750195b448797616e091ad','tung@gmail.com',NULL,'avatar.png',NULL,NULL,1,NULL,NULL),(37,'Thu Van','81dc9bdb52d04dc20036dbd8313ed055','thuvan@gmail.com',NULL,'avatar.png',NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `validate`
--

DROP TABLE IF EXISTS `validate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `validate` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `code` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `validate`
--

LOCK TABLES `validate` WRITE;
/*!40000 ALTER TABLE `validate` DISABLE KEYS */;
INSERT INTO `validate` VALUES (14,'k5f2yb','batoi1271.doe@gmail.com'),(15,'km9zob','dntung2409@gmail.com');
/*!40000 ALTER TABLE `validate` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-18 10:30:48
