 # ************************************************************
# 
# Host: localhost  
# Database: bookmark-db
# Generation Time: 2017 
# ************************************************************

 
# Dump of table bookmark
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookmark`;

CREATE TABLE `bookmark` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(64) NOT NULL DEFAULT '', 
  `url` char(128) NOT NULL DEFAULT '',
   
  `category_id` int(11) unsigned NOT NULL, 
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
   
);  


INSERT INTO bookmark (id  ,name,  url, category_id)
 VALUES
    (  1 , 'hostinger','https://cpanel.hostinger.co.il', 2),
	(  2 , 'jsfiddle','https://jsfiddle.net/', 10),
    (  3 , 'alternativet','http://alternativeto.net/software/codecademy/',1),
	(  4 , 'Youtube','https://www.youtube.com/watch?v=KffxeZtkXYs', 15),
	(  5 , 'Gemara markings','http://www.gemaramarkings.com/system.htm', 16),
	(  6 , 'Nasa Mars','https://photojournal.jpl.nasa.gov/targetFamily/mars', 18),
	(  7 , 'Youtube2mp4','http://youtubeinmp4.com/',1),
	(  8 , 'codepen','http://codepen.io',10),
    (  9 , 'ocr ',' https://www.newocr.com/',1),
    ( 10 , 'Web tools','https://www.browserling.com/tools/',1),
	( 11 , 'layoutit','http://www.layoutit.com/build', 10),
	( 12 , 'color','https://www.w3schools.com/colors/colors_picker.asp', 10),
	( 13 , 'bootstrap','https://www.bootply.com/new?visual=1#', 10),
	( 14 , 'Web Crawler','https://www.youtube.com/watch?v=nOBKMwL_1gs&list=PLBOh8f9FoHHjdsAWwUjKk-QOlmBw-0Bvr',11),
	( 15 , 'Photo edit','https://pixlr.com/editor/',1) ,
    ( 16 , 'Pandas','https://www.youtube.com/watch?v=6ohWS7J1hVA',7),
    ( 17 , 'Intro Data Sc','https://www.youtube.com/watch?v=uy1_hccQDSI&index=2&list=PLAwxTw4SYaPk41og7PER4HBpGciPw6n3x ',19);	
	  
	  
# Dump of table category 
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,   
  `name` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;


INSERT INTO category (id  ,name)
 VALUES
    (0 ,  'temp'),
 	(1 ,  'tools'),
 	(2 ,  'hosts'),
 	(3 ,  'painting'),
	(4 ,  'music'),
	(5 ,  'photo'),
	(6 ,  'literature'),
	(7 ,  'python'),
 	(8 ,  'javascript'),
	(9 ,  'java'),
 	(10 , 'html'),
	(11 , 'php'),
	(12 , 'blog'),
	(13 , 'history'),
    (14 , 'news'),
	(15 , 'youtube'),  
	(16 , 'jewish'),
	(17 , 'linux'),
	(18 , 'science'),
	(19 , 'Data Science'),
	(20 , 'dddd');
 