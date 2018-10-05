/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : localhost:3306
 Source Schema         : database1

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 13/09/2018 10:45:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for noidung
-- ----------------------------
DROP TABLE IF EXISTS `noidung`;
CREATE TABLE `noidung`  (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 72 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noidung
-- ----------------------------
INSERT INTO `noidung` VALUES (1, 'page1_tieude1', 'TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG TP.HCM www');
INSERT INTO `noidung` VALUES (2, 'page1_tieude2', 'TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG TP.HCM 222');
INSERT INTO `noidung` VALUES (3, 'page1_diachi', 'Địa chỉ: 81 Trần Quốc Thảo, phường 7, quận 3, TPHCM Hotline: 0901 38 90 39');
INSERT INTO `noidung` VALUES (4, 'page1_tel', 'Tel: (+84) 28 393 222 98 (+84) 28 393 222 97');
INSERT INTO `noidung` VALUES (6, 'page1_mail', 'Email: info@nttt.vn Website: www.nghethuattruyenthonghcm.vn');
INSERT INTO `noidung` VALUES (7, 'page2_tieude1', 'Nghệ thuật truyền thống Việt Nam222');
INSERT INTO `noidung` VALUES (8, 'page2_tieude2', 'là một kho tàng các di sản văn hóa phong phú và đa dạng.');
INSERT INTO `noidung` VALUES (9, 'page3_tieude1', 'LỜI MỞ ĐẦU');
INSERT INTO `noidung` VALUES (10, 'page3_content1', 'Trung tâm nghệ thuật truyền thống (trực thuộc Trung tâm đào tạo và thực nghiệm văn học nghệ thuật TP.HCM) được thành lập với mục tiêu gìn giữ, phát huy nền nghệ thuật truyền thống của Việt Nam, góp phần xây dựng một nền văn hóa tiên tiến đậm đà bản sắc dân tộc. <br>Với sứ mệnh đó, trung tâm tổ chức nhiều hình thức hoạt động như nghiên cứu - bảo tồn, đào tạo và nuôi dưỡng tài năng, đồng thời phổ biến những giá trị nghệ thuật tinh hoa đến với cộng đồng và bạn bè quốc tế.');
INSERT INTO `noidung` VALUES (11, 'page3_tieude2', 'ABOUT US');
INSERT INTO `noidung` VALUES (12, 'page3_content2', 'The Traditional Arts Center (under the HCMC Center for Literature and Arts) was established with the aim of preserving and promoting the traditional arts, contributing to the Vietnamese advanced boldly culture and national identity. With that mission, the center organizes various activities such as researching - preservation, training and nurture the talents as well as popularizing the elite artistic values to communities and international friends. ');
INSERT INTO `noidung` VALUES (13, 'page3_tieude3', 'HƯỚNG ĐI VÀ MỤC TIÊU PHẤN ĐẤU');
INSERT INTO `noidung` VALUES (14, 'page3_content3', 'Trung tâm nghệ thuật truyền thống (trực thuộc Trung tâm đào tạo và thực nghiệm văn học nghệ thuật TP.HCM) được thành lập với mục tiêu gìn giữ, phát huy nền nghệ thuật truyền thống của Việt Nam, góp phần xây dựng một nền văn hóa tiên tiến đậm đà bản sắc dân tộc.<br> Với sứ mệnh đó, trung tâm tổ chức nhiều hình thức hoạt động như nghiên cứu - bảo tồn, đào tạo và nuôi dưỡng tài năng, đồng thời phổ biến những giá trị nghệ thuật tinh hoa đến với cộng đồng và bạn bè quốc tế.');
INSERT INTO `noidung` VALUES (15, 'page3_tieude4', 'DIRECTION AND AIM ');
INSERT INTO `noidung` VALUES (16, 'page3_content4', 'Organizing traditional art programs - events in which contain valuable and aesthetic content to evoke the love of Vietnamese homeland and people.<br> Along with previous generations of artist, contributing to training and inspiring the young generation for their understanding and appreciation the heritage value of Vietnamese traditional arts.<br> Step by step forming the center for traditional art activities for Ho Chi Minh City and Southern region.');
INSERT INTO `noidung` VALUES (17, 'page4_content1', 'Bạn dùng gương để ngắm gương mặt mình;');
INSERT INTO `noidung` VALUES (18, 'page4_content2', 'bạn dùng nghệ thuật để ngắm tâm hồn mình.');
INSERT INTO `noidung` VALUES (19, 'page4_content3', 'You use a glass mirror to see your face; you use works of art to see your soul.');
INSERT INTO `noidung` VALUES (20, 'page5_tieude1', 'NGHIÊN CỨU BẢO TỒN CÁC LOẠI HÌNH NGHỆ THUẬT TRUYỀN THỐNG NAM BỘ ');
INSERT INTO `noidung` VALUES (21, 'page5_content1', '- Âm nhạc và sân khấu: Đờn ca tài tử; Cải Lương; Hát Bội; các thể loại hò; lý; Hát ru; đồng dao; Âm nhạc các dân tộc ít người của TPHCM và khu vực Nam bộ...<br> - Hội họa: Tranh lụa, điêu khắc gỗ, sơn mài… - Múa dân gian - Nhiếp ảnh Việt nam - Gốm sứ Nam Bộ \r\n\r\nNghệ thuật truyền thống là sản phẩm tinh thần gắn với cộng đồng hoặc cá nhân, thể hiện bản sắc của cộng đồng và không ngừng được tái tạo và lưu truyền từ thể hệ này sang thế hệ khác.<br> Nghệ thuật truyền thống được lưu giữ trong ký ức của con người nên có số phận lịch sử mong manh. Việc nghiên cứu để bảo tồn, bảo vệ và tìm hướng phát triển thích nghi trong môi trường mới là nhiệm vụ của mọi thế hệ của mỗi dân tộc. \r\n- Âm nhạc và sân khấu: Đờn ca tài tử; Cải Lương; Hát Bội; các thể loại hò; lý; Hát ru; đồng dao; Âm nhạc các dân tộc ít người của TPHCM và khu vực Nam bộ... <br>- Hội họa: Tranh lụa, điêu khắc gỗ, sơn mài… - Múa dân gian - Nhiếp ảnh Việt nam - Gốm sứ Nam Bộ  ');
INSERT INTO `noidung` VALUES (22, 'page5_tieude2', 'RESEARCHING AND PRESERVATION FORMS OF THE SOUTHERN ');
INSERT INTO `noidung` VALUES (23, 'page5_content2', 'Music and art of stage: Don Ca Tai Tu; Cai luong, Hat Boi; Ho, Ly, Lullaby; Dong Dao (Children folklore); Music of the ethnic minorities of Ho Chi Minh City and South ...<br> - Painting: silk painting, wood sculpture, lacquer… - Traditional Dance - Vietnamese Photography - Southern Ceramics <br>\r\n\r\nTraditional Arts are products of the community or individual spirit, presents the national identity and constantly reproduction through generations.<br> They are stored in human memories thus they have fragile historical fate. In the new period, researching for preservation, protecting and finding adaptive directions is the duty of every generation and nation. ');
INSERT INTO `noidung` VALUES (24, 'page6_tieude1', 'GIỚI THIỆU : VỀ TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG');
INSERT INTO `noidung` VALUES (25, 'page6_content1', 'Trung tâm nghệ thuật truyền thống Trực thuộc Trung tâm đào tạo và thực nghiệm Văn học nghệ thuật TPHCM nằm ở trung tâm quận 3, trong tòa nhà liên hiệp các hội văn học nghệ thuật tpHCM. <br>\r\nNghệ thuật truyền thống Việt Nam là một kho tàng các di sản văn hóa phong phú và đa dạng. Nhiều thể loại nghệ thuật như âm nhạc, kiến trúc, di sản thiên nhiên, di sản văn hóa của Việt Nam đã được thế giới công nhận. Tuy nhiên rất nhiều loại hình nghệ thuật qua thời gian và những biến đổi trong quá trình phát triển, du nhập những yếu tố văn hóa mới đã dần biến mất. Đời sống hiện đại hóa ngày nay khiến thế hệ trẻ dần như quên mất sự tồn tại các loại nghệ thuật truyền thống của dân tộc. Trước mắt Trung tâm NTTT sẽ tập trung khôi phục và phát triển theo các hướng sau: <br>\r\n1. Nghiên cứu bảo tồn các loại hình nghệ thuật truyền thống khu vực phía Nam. <br>\r\n2. Sinh hoạt, biểu diễn và tổ chức các sự kiện nghệ thuật truyền thống. <br>\r\n3. Đào tạo các loại hình nghệ ');
INSERT INTO `noidung` VALUES (26, 'page6_tieude2', 'GIỚI THIỆU : VỀ TRUNG TÂM NGHỆ THUẬT TRUYỀN THỐNG');
INSERT INTO `noidung` VALUES (27, 'page6_content2', 'Trung tâm nghệ thuật truyền thống Trực thuộc Trung tâm đào tạo và thực nghiệm Văn học nghệ thuật TPHCM nằm ở trung tâm quận 3, trong tòa nhà liên hiệp các hội văn học nghệ thuật tpHCM. <br>\r\nNghệ thuật truyền thống Việt Nam là một kho tàng các di sản văn hóa phong phú và đa dạng. Nhiều thể loại nghệ thuật như âm nhạc, kiến trúc, di sản thiên nhiên, di sản văn hóa của Việt Nam đã được thế giới công nhận. Tuy nhiên rất nhiều loại hình nghệ thuật qua thời gian và những biến đổi trong quá trình phát triển, du nhập những yếu tố văn hóa mới đã dần biến mất. Đời sống hiện đại hóa ngày nay khiến thế hệ trẻ dần như quên mất sự tồn tại các loại nghệ thuật truyền thống của dân tộc. Trước mắt Trung tâm NTTT sẽ tập trung khôi phục và phát triển theo các hướng sau: <br>\r\n1. Nghiên cứu bảo tồn các loại hình nghệ thuật truyền thống khu vực phía Nam. <br>\r\n2. Sinh hoạt, biểu diễn và tổ chức các sự kiện nghệ thuật truyền thống. <br>\r\n3. Đào tạo các loại hình nghệ ');
INSERT INTO `noidung` VALUES (28, 'page7_tieude1', 'SINH HOẠT, BIỂU DIỄN VÀ TỔ CHỨC CÁC SỰ KIỆN NGHỆ THUẬT TRUYỀN THỐNG: ');
INSERT INTO `noidung` VALUES (29, 'page7_content1', '- Âm nhạc và sân khấu: Đờn ca tài tử; Cải Lương; Hát Bội; các thể loại hò; lý; Hát ru; đồng dao; Âm nhạc các dân tộc ít người của TPHCM và khu vực Nam bộ...<br> - Hội họa: Tranh lụa, điêu khắc gỗ, sơn mài… - Múa dân gian - Nhiếp ảnh Việt nam - Gốm sứ Nam Bộ \r\n\r\nNghệ thuật truyền thống là sản phẩm tinh thần gắn với cộng đồng hoặc cá nhân, thể hiện bản sắc của cộng đồng và không ngừng được tái tạo và lưu truyền từ thể hệ này sang thế hệ khác. Nghệ thuật truyền thống được lưu giữ trong ký ức của con người nên có số phận lịch sử mong manh. Việc nghiên cứu để bảo tồn, bảo vệ và tìm hướng phát triển thích nghi trong môi trường mới là nhiệm vụ của mọi thế hệ của mỗi dân tộc. ');
INSERT INTO `noidung` VALUES (30, 'page7_tieude2', 'PERFORMING AND ORGANIZING EVENTS FOR TRADITIONAL ARTS ');
INSERT INTO `noidung` VALUES (31, 'page7_content2', 'Traditional Arts Performing is products of the community or individual spirit. So, we approach the public with traditional art performing activities.<br> Specifically, we will create favorable conditions, ideal facilities, experts and artisans for the following art performances: - Instrumental ensemble, traditional orchestra; - Music clubs for Don Ca Tai Tu, Ho, Ly, Lullaby, Dong Dao... - Contests, traditional arts exhibitions. ');
INSERT INTO `noidung` VALUES (32, 'page8_tieude1', 'ƯƠM MẦM');
INSERT INTO `noidung` VALUES (33, 'page8_tieude2', 'Seeding');
INSERT INTO `noidung` VALUES (34, 'page8_content1', 'Chúng tôi tâm niệm để bảo tồn được nền nghệ thuật truyền thống trước tiên phải nuôi dưỡng được những năng khiếu trẻ và ươm mầm để trở thành những nghệ sĩ tài năng và nhiệt huyết mãnh liệt. ');
INSERT INTO `noidung` VALUES (35, 'page8_content2', 'PERFORMING AND ORGANIZING EVENTS FOR TRADITIONAL ARTS');
INSERT INTO `noidung` VALUES (36, 'page8_tieude3', 'KẾT NỐI');
INSERT INTO `noidung` VALUES (37, 'page8_tieude4', 'Connection');
INSERT INTO `noidung` VALUES (38, 'page8_content3', 'Kết nối những tài năng nghệ thuật để cùng nhau giành trọn những khoảnh khắc sống, đam mê hết mình với những giá trị thời gian và lịch sử là một việc làm đầy ý nghĩa.  ');
INSERT INTO `noidung` VALUES (39, 'page8_content4', 'Connecting talented artistic together to capture the moments of life, enthuse with timeless values and history is a meaningful job. ');
INSERT INTO `noidung` VALUES (40, 'page8_tieude5', 'TRỌN VẸN');
INSERT INTO `noidung` VALUES (41, 'page8_tieude6', 'Entirety');
INSERT INTO `noidung` VALUES (42, 'page8_content5', 'Cảm xúc đọng lại sau cùng là sự trọn vẹn của một tác phẩm nghệ thuật. Điều đó là tâm niệm mà người nghệ sĩ luôn mong muốn đạt đến. ');
INSERT INTO `noidung` VALUES (43, 'page8_content6', 'The final touch is the wholeness of an art work and the most important goal that the artists try to reach.');
INSERT INTO `noidung` VALUES (44, 'page8_tieude7', 'THĂNG HOA');
INSERT INTO `noidung` VALUES (45, 'page8_tieude8', 'Sublimation');
INSERT INTO `noidung` VALUES (46, 'page8_content7', 'Để thăng hoa được tinh thần và giá trị dân tộc, chúng tôi mong muốn có nhiều buổi biểu diễn, giao lưu, triển lãm trong và ngoài nước. Khi ấy, những người nghệ sĩ, tác phẩm, chất liệu văn học đẹp đẽ mới có thể đến với đại đa số những\r\nngười yêu nghệ thuật. ');
INSERT INTO `noidung` VALUES (47, 'page8_content8', 'In order to sublimate the spirit and traditional values, we looking for many performances, exchanges, exhibitions at home and abroad. Then, the artists and the beautiful works, material literature could reach the majority of art lovers.');
INSERT INTO `noidung` VALUES (48, 'page9_tieude1', 'ĐÀO TẠO CÁC LOẠI HÌNH NGHỆ THUẬT TRUYỀN THỐNG: ');
INSERT INTO `noidung` VALUES (49, 'page9_content1', 'Công chúng không thể hiểu và hình thành tư duy về nghệ thuật truyền thống khi không được tiếp xúc thường xuyên hoặc chưa từng được tìm hiểu thông qua các kênh giáo dục, truyền thụ… Việc truyền dạy nghệ thuật truyền thống giờ đây cũng không hề dễ dàng nếu không nói gặp nhiều khó khăn từ hai phía người dạy và người học. Và chính vì lý do đó chúng tôi triển khai mô hình các lớp học biểu diễn về nghệ thuật truyền thống như : <br>\r\n- Âm nhạc: các lớp dạy nhạc cụ dân tộc, các lớp dạy hòa tấu nhạc dân tộc <br>\r\n- Sân khấu : Các lớp diễn suất <br>\r\n- Hội họa, điêu khắc: các lớp dạy vẽ tranh lụa, tranh thủy mạc, khắc gỗ; nắn tượng <br>\r\n- Múa: các lớp múa dân gian');
INSERT INTO `noidung` VALUES (50, 'page9_tieude2', 'TRAINING KINDS OF TRADITIONAL ARTS ');
INSERT INTO `noidung` VALUES (51, 'page9_content2', 'The public cannot understand and shape the traditional arts when they are not regularly exposed or has not been explored through educational channels. Teaching traditional arts is getting a lot of difficulties from both teacher and the learner. For that reason, we have developed a model of performing arts classes such as: <br>\r\n    - Music: ethnic instrument classes, ethnic instrument ensemble classes <br>\r\n    - Painting, sculpture: classes of silk paintings, watercolors, wood carving; sculpture <br>\r\n    - Dance: folk dance classes');
INSERT INTO `noidung` VALUES (69, 'qeweqw', 'eqweqwe');
INSERT INTO `noidung` VALUES (67, '434234', '23423423');
INSERT INTO `noidung` VALUES (64, '444', '444');
INSERT INTO `noidung` VALUES (65, '5555', '5555');
INSERT INTO `noidung` VALUES (70, 'menu_tieude1', 'ARTISE SCHOOL');
INSERT INTO `noidung` VALUES (66, '66644344', '66666644444');
INSERT INTO `noidung` VALUES (71, 'menu_tieude1', 'ARTISE SCHOOL 1111');

SET FOREIGN_KEY_CHECKS = 1;
