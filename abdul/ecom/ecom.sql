SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinetu_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'gabrial@gmail.com', 'pase ri223'),
(2, 'mnoel@yahoo.com', 'ragli 832');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `brands`
-- https://en.wikipedia.org/wiki/List_of_art_movements

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Albert Gleizes'),
(2, 'Maurice de Vlaminck'),
(3, 'LG'),
(4, 'Samsung'),
(5, 'Sony'),
(6, 'Toshiba'),
(7, 'Emile Munier');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Abstract art'),
(2, 'Fauvisme'),
(3, 'Mobiles'),
(4, 'Computers'),
(5, 'Banana'),
(6, 'iPhones'),
(7, 'Academic art');
-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(6, '120.56.62.88', 'Grsti Dtfd', 'rsti@gmail.com', 'walikhan', 'Pakistan', 'Karachi', '3243423', 'dfads', 'abdul-wali-ustaad1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `status` text NOT NULL,
  `order_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `invoice_no`, `status`, `order_date`) VALUES
(5, 8, 5, 1, 462643381, 'Completed', '0000-00-00'),
(6, 6, 5, 3, 481994459, 'Completed', '2014-07-21'),
(7, 9, 0, 1, 1545302558, 'Completed', '2014-07-23'),
(8, 5, 0, 2, 705705316, 'in Progress', '2014-08-08'),
(9, 7, 6, 1, 1935681132, 'in Progress', '2014-08-08'),
(10, 9, 6, 3, 1817786416, 'in Progress', '2014-08-08'),
(11, 5, 6, 2, 423122154, 'in Progress', '2014-08-08'),
(12, 8, 6, 4, 496641685, 'in Progress', '2014-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(100) NOT NULL AUTO_INCREMENT,
  `amount` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `amount`, `customer_id`, `product_id`, `trx_id`, `currency`, `payment_date`) VALUES
(1, 800, 5, 6, '31B07494JS505133P', 'USD', '0000-00-00'),
(2, 500, 5, 9, '18747053K31546734', 'USD', '0000-00-00'),
(3, 1000, 5, 9, '183154524M7953521', 'USD', '0000-00-00'),
(4, 900, 5, 5, '8L053110TE658224T', 'USD', '2014-07-21'),
(5, 450, 5, 8, '42M62596JN658381G', 'USD', '2014-07-21'),
(6, 600, 5, 6, '1FC71986FP579232R', 'USD', '2014-07-21'),
(7, 500, 0, 9, '0AH67056C64289013', 'USD', '2014-07-23'),
(8, 1800, 0, 5, '1F431738AY795223E', 'USD', '2014-08-08'),
(9, 250, 6, 7, '3G918931JL634141Y', 'USD', '2014-08-08'),
(10, 1500, 6, 9, '0BF7586175203573G', 'USD', '2014-08-08'),
(11, 1800, 6, 5, '7RS823437E828061K', 'USD', '2014-08-08'),
(12, 1800, 6, 8, '84J65197FN011600G', 'USD', '2014-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `image2` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`,`image2`,
 `product_keywords`) VALUES
(5, 2,2, 
'Paysage Orageux', 
900, 
'<p>Medium: Paintings, Oil on canvas
Size:   19.7 x 25.6 in. (50 x 65 cm.)
Size Notes:  29.5 x 35.4 in (with frame)
Movement:    Modern Art
Catalogue:    Hélène Bailly Gallery Inventory ;</p>', 
'Samsung-Galaxy-Tab-tablet.jpg',
' http://www.artnet.com/WebServices/images/ll1070199llgJ1jR3CfDrCWvaHBOAD/maurice-de-vlaminck-paysage-orageux.jpg ',
 'Samsung, Cameras, Special'),

 (6, 7, 7,
 'Au Temps des Fraise',
 200, 
 '<p>Currently only known through the line drawing that was used to illustrate the painting in the Salon catalogue.</p>', 
 'HTC-Google-Nexus-One-2.jpg',
'http://www.emilemunier.org/catalogimages//munier_1895_04_au_temps_des_fraises.jpg ', 'mobiles, new, gray'),

(7, 7, 7, 
  'May I Have One Too', 
  250,
   '<p>Oil on canvas...</p>',
'professional-video-camera.jpg',
'http://www.emilemunier.org/catalogimages/munier_1880_1_may_i_have_one_too.jpg ',
 'Family, nature, oil'),

(8, 1, 1, 
  'Bords de la Marne', 
  450,
   '<p>Museum of Fine Arts of Lyon</p>', 
   'nokia-windows-200-dollar-tabMuseum of Fine Arts of Lyonlet2-640x353.jpg',
   'https://upload.wikimedia.org/wikipedia/en/4/4a/Albert_Gleizes%2C_1909%2C_Bords_de_la_Marne%2C_oil_on_canvas%2C_54_x_65_cm%2C_Mus%C3%A9e_des_Beaux-Arts%2C_Lyon..jpg ',
    'Marne, Bords, oil'),
(9, 1, 2, 'Dell Pink Laptop', 500, '<p>this is a very nice <strong>laptop</strong> and I like it very much....</p>', '1.jpg',' ', 'dell, laptops, new, special'),
(10, 1, 1, 'HP Envy Laptop', 400, '<p>this is so much nice laptop..</p>', 'original.jpg',' ', 'dell, laptops, new, special');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;