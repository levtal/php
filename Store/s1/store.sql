SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--
CREATE TABLE IF NOT EXISTS transactions(
		 		 id int(11) NOT NULL auto_increment,
				 product_id_array varchar(255) NOT NULL,
		 		 payer_email varchar(255) NOT NULL,
				 first_name varchar(255) NOT NULL,
				 last_name varchar(255) NOT NULL,
				 payment_date varchar(255) NOT NULL,
				 mc_gross varchar(255) NOT NULL,
				 payment_currency varchar(255) NOT NULL,
		 		 txn_id varchar(255) NOT NULL,
				 receiver_email varchar(255) NOT NULL,
				 payment_type varchar(255) NOT NULL,
				 payment_status varchar(255) NOT NULL,
				 txn_type varchar(255) NOT NULL,
				 payer_status varchar(255) NOT NULL,
				 address_street varchar(255) NOT NULL,
				 address_city varchar(255) NOT NULL,
				 address_state varchar(255) NOT NULL,
				 address_zip varchar(255) NOT NULL,
				 address_country varchar(255) NOT NULL,
				 address_status varchar(255) NOT NULL,
				 notify_version varchar(255) NOT NULL,
				 verify_sign varchar(255) NOT NULL,
				 payer_id varchar(255) NOT NULL,
				 mc_currency varchar(255) NOT NULL,
				 mc_fee varchar(255) NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY txn_id (txn_id)
		 		 );  
 
  INSERT INTO `transactions` ( 
 id ,            product_id_array, payer_email,     first_name,
 last_name,      payment_date,     mc_gross,        payment_currency, 
 txn_id,         receiver_email,   payment_type,    payment_status ,
 txn_type,       payer_status,     address_street,  address_city,
 address_state,  address_zip ,     address_country, address_status, 
 notify_version, verify_sign ,     payer_id,        mc_currency,
  mc_fee)
  VALUES
(  12 ,                2,                    'paser@i832',      'mmm',
 'gmgm',           'mnoe',                 12,               'd',
  3,               'b@rev',               'fdd',             'fgfg',
 'txn_type',       'payer_status',        'address_street',  'address_city',
 'address_state',  'address_zip' ,        'address_country', 'address_status', 
 'notify_version', 'verify_sign' ,        'payer_id',        'mc_currency',
 'mc_fee');
 
  
 
 
 
 
-- Table structure for table `admins`
--
 CREATE TABLE IF NOT EXISTS admins (
	id int(11) NOT NULL auto_increment,
	username varchar(24) NOT NULL,
	password varchar(24) NOT NULL,
	last_log_date date NOT NULL,
	PRIMARY KEY (id),
	UNIQUE KEY username (username)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
				 
				 
 
--
-- Dumping data for table `admins`
 
 INSERT INTO admins (id, username, password,last_log_date)  
   VALUES
       ( 8, 'a', 'a',12); 
 
 CREATE TABLE IF NOT EXISTS products (
		 		 id int(11) NOT NULL auto_increment,
				 product_name varchar(255) NOT NULL,
		 		 price varchar(16) NOT NULL,
				 details text NOT NULL,
				 category varchar(16) NOT NULL,
				 subcategory varchar(16) NOT NULL,
		 		 date_added date NOT NULL,
		 		 image2 varchar(255),
				 PRIMARY KEY (id),
		 		 UNIQUE KEY product_name (product_name)
		 		 ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;
 
-- Dumping data for table `products`
--
 INSERT INTO `products` (`id`, `product_name`,
                         `price`, `details`, 
						 `category`, `subcategory`,
						 `date_added`,
						 `image2`)
 VALUES
(1,'Nighthawks', 
 900,'Paintings Oil on canvas',
 'cat1','sub333',
 '22',
'https://www.ibiblio.org/wm/paint/auth/hopper/street/hopper.nighthawks.jpg'),

(2,'Hopper self portret',
 8900,'self portret',
 'cat2','sub4',
 '12',
'https://www.ibiblio.org/wm/paint/auth/hopper/hopper.self-portrait.jpg'),

(3,'hopper drug-store',
 8900,'drug-store',
 'cat4','sub5',
 '17',
'https://www.ibiblio.org/wm/paint/auth/hopper/street/hopper.drug-store.jpg'),
 
 (2,'lighthouse-2',
 8900,'lighthouse-2',
 'cat2','sub4',
 '12',
' https://www.ibiblio.org/wm/paint/auth/hopper/landscapes/hopper.lighthouse-2-lights.jpg')
 
 ;

  