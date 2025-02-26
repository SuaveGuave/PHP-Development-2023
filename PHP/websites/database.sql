-- MariaDB dump 10.19  Distrib 10.5.19-MariaDB, for Linux (x86_64)
--
-- Host: mysql    Database: CSY2089
-- ------------------------------------------------------
-- Server version	11.2.2-MariaDB-1:11.2.2+maria~ubu2204

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `CSY2089`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `CSY2089` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `CSY2089`;

--
-- Table structure for table `admin_accounts`
--

DROP TABLE IF EXISTS `admin_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `display_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_accounts`
--

LOCK TABLES `admin_accounts` WRITE;
/*!40000 ALTER TABLE `admin_accounts` DISABLE KEYS */;
INSERT INTO `admin_accounts` VALUES (1,'admin1','$2y$10$s8f43sNsi9OWa4/LlmLz5.fl5bEK9hQZkGlIES1AOTXoSAkilHx4e','John');
/*!40000 ALTER TABLE `admin_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`category`),
  UNIQUE KEY `category_UNIQUE` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (''),('Computer'),('Gaming'),('Phone'),('TV');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(12) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `product_details` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `manufacturer` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'SmartView 4K Ultra HD TV','Immerse yourself in stunning visuals with the SmartView 4K Ultra HD TV. This sleek and slim television features cutting-edge technology for crystal-clear images and vibrant colors. With smart connectivity, enjoy streaming your favorite shows and movies seamlessly.',899.99,'TV','2024-01-20 00:00:00','SmartView'),(2,'CinemaMaster Pro 120-inch Projection TV','Transform your living room into a private cinema with the CinemaMaster Pro 120-inch Projection TV. Boasting 4K resolution and HDR support, this projector delivers an unparalleled cinematic experience. The integrated sound system completes the package for an immersive movie night at home.',1499.99,'TV','2024-01-22 00:00:00','CineMaster'),(3,'Gamer\'s Haven 55-inch Gaming TV','Elevate your gaming experience with the Gamer\'s Haven 55-inch Gaming TV. Featuring a high refresh rate, low input lag, and HDR support, this TV is designed for serious gamers. Immerse yourself in fast-paced action with vivid visuals and responsive controls.',799.99,'TV','2023-06-15 00:00:00','Gamer\'s Heaven'),(4,'SlimEdge 32-inch LED TV','The SlimEdge 32-inch LED TV combines style and functionality in a compact design. Ideal for smaller spaces, this TV delivers crisp HD resolution and energy-efficient LED technology. Perfect for bedrooms, kitchens, or any room where space is a premium.',249.99,'TV','2022-09-05 00:00:00','SlimEdge'),(5,'HealthView 40-inch Fitness TV','Stay fit and entertained simultaneously with the HealthView 40-inch Fitness TV. This innovative TV comes with built-in workout programs, health tracking features, and compatibility with fitness apps. Achieve your fitness goals while enjoying your favorite shows or streaming workout videos.',349.99,'TV','2020-01-11 00:00:00','HealthhView'),(6,'TechHub 65-inch QLED Smart TV','Experience the pinnacle of visual technology with the TechHub 65-inch QLED Smart TV. Quantum Dot technology brings colors to life, and the Smart TV capabilities ensure access to a world of entertainment options. Immerse yourself in a stunning visual and audio experience.',1199.99,'TV','2022-03-25 00:00:00','TechHub'),(7,'PortableVue 15-inch Travel TV','Take your entertainment on the go with the PortableVue 15-inch Travel TV. This compact and lightweight TV is perfect for road trips, camping, or hotel stays. It features built-in rechargeable batteries, a variety of input options, and a durable design for on-the-move entertainment.',179.99,'TV','2019-06-19 00:00:00','PortableVUe'),(8,'SoundSync 50-inch Soundbar TV Combo','Upgrade your home entertainment setup with the SoundSync 50-inch Soundbar TV Combo. This package includes a high-quality 50-inch TV paired with a premium soundbar for a cinematic audio-visual experience. Enjoy rich sound and stunning visuals in one sleek package.',1099.99,'TV','2018-09-20 00:00:00','SoundSync'),(9,'EcoVision 42-inch Solar-Powered TV','Embrace sustainability with the EcoVision 42-inch Solar-Powered TV. This eco-friendly TV harnesses solar energy for power, reducing your carbon footprint. With full HD resolution and smart features, it\'s the perfect blend of technology and environmental consciousness.',699.99,'TV','2017-10-05 00:00:00','EcoVision'),(10,'DesignArt 75-inch Frame TV','Elevate your living space with the DesignArt 75-inch Frame TV. When turned off, this TV seamlessly transforms into a piece of art, blending into your decor. When on, enjoy stunning visuals with 8K resolution and smart features for a complete home entertainment experience.',2499.99,'TV','2021-04-19 00:00:00','DesignArt'),(11,'QuantumEdge Pro Laptop','Experience unparalleled computing speed and efficiency with the QuantumEdge Pro Laptop. Powered by cutting-edge quantum processors, this sleek and lightweight laptop ensures lightning-fast performance for all your tasks, from gaming to professional applications.',1999.99,'Computer','2014-07-05 00:00:00','QuantumEdge'),(12,'EcoSync Smart Desktop','The EcoSync Smart Desktop is not just a computer; it\'s a sustainable computing solution. Designed with energy-efficient components and eco-friendly materials, this desktop provides high-performance computing while minimizing environmental impact.',1299.99,'Computer','2020-09-30 00:00:00','EcoSync'),(13,'NeuralLink VR Workstation','Immerse yourself in a new dimension of productivity with the NeuralLink VR Workstation. This virtual reality computer is optimized for creative professionals, offering a virtual workspace where you can manipulate and interact with your projects like never before.',2499.99,'Computer','2024-01-10 00:00:00','NeuralLink'),(14,'BioScan Secure Laptop','Ensure the highest level of security for your data with the BioScan Secure Laptop. This advanced laptop features biometric authentication and a built-in fingerprint scanner, providing a secure and convenient way to protect your sensitive information.',1799.99,'Computer','2023-08-19 00:00:00','BioScan'),(15,'NanoEdge Ultra-Portable PC','Experience portability without compromising power with the NanoEdge Ultra-Portable PC. This mini PC packs a punch with its high-performance specifications, making it the perfect on-the-go computing solution for professionals and enthusiasts.',899.99,'Computer','2021-02-20 00:00:00','NanoEdge'),(16,'AeroGlow Gaming Rig','Elevate your gaming experience with the AeroGlow Gaming Rig. Featuring customizable RGB lighting and top-tier gaming components, this desktop is designed to deliver smooth and immersive gaming sessions with stunning visuals and high frame rates.',2299.99,'Computer','2020-05-19 00:00:00','AeroGlow'),(17,'SolarEdge Solar-Powered Tablet','Embrace sustainability with the SolarEdge Solar-Powered Tablet. This innovative tablet harnesses solar energy through a built-in solar panel, ensuring longer battery life and reducing your dependence on traditional charging methods.',699.99,'Computer','2019-07-20 00:00:00','SolarEdge'),(18,'SynthWave Music Production Station','Unleash your musical creativity with the SynthWave Music Production Station. This specialized computer is tailored for music producers, featuring powerful processors and audio interfaces to deliver a seamless and efficient music production experience.',1499.99,'Computer','2018-11-20 00:00:00','SynthWave'),(19,'InnoVision 3D Graphics Workstation','Dive into the world of 3D graphics and design with the InnoVision 3D Graphics Workstation. Equipped with high-end graphics cards and rendering capabilities, this workstation is ideal for architects, animators, and designers seeking uncompromised performance.',3499.99,'Computer','2018-12-27 00:00:00','InnoVision'),(20,'HealthGuard Wellness Monitor','Prioritize your well-being with the HealthGuard Wellness Monitor. This computer comes with integrated health monitoring features, including posture correction reminders, eye strain reduction settings, and ergonomic design, promoting a healthier computing experience.',1199.99,'Computer','2020-08-01 00:00:00','HealthGuard'),(21,'QuantumX Pro Plus','The QuantumX Pro Plus is a flagship smartphone that redefines mobile computing. With an ultra-responsive quantum processor, stunning AMOLED display, and a versatile camera system, this phone is your gateway to a seamless and immersive digital experience.',1199.99,'Phone','2022-09-09 00:00:00','QuantumX'),(22,'EcoMobile Green Edition','Make a sustainable choice with the EcoMobile Green Edition. Crafted from recycled materials and featuring energy-efficient components, this eco-friendly smartphone combines style with environmental consciousness, offering a guilt-free mobile experience.',899.99,'Phone','2024-03-23 00:00:00','EcoMobile'),(23,'XperienceVR Virtual Reality Phone','Step into the world of virtual reality with the XperienceVR Virtual Reality Phone. This cutting-edge device blurs the lines between the digital and physical worlds, providing an immersive VR experience right from your pocket.',1299.99,'Phone','2021-02-02 00:00:00','XperienceVR'),(24,'BioSecure Biometric Phone','Safeguard your personal information with the BioSecure Biometric Phone. Unlock your device with a fingerprint or facial scan for enhanced security, and enjoy a sleek design and advanced features that prioritize your privacy.',1099.99,'Phone','2022-06-20 00:00:00','BioSecure'),(25,'UltraSlim Infinity Display','The UltraSlim Infinity Display phone boasts a bezel-less design that maximizes your viewing experience. With a slim profile and vibrant OLED screen, this phone is perfect for multimedia enthusiasts who crave a visually stunning device.',999.99,'Phone','2023-08-19 00:00:00','UltraSlim'),(26,'GamerX Pro Gaming Phone','Elevate your mobile gaming experience with the GamerX Pro Gaming Phone. Packed with a high-refresh-rate display, dedicated gaming controls, and advanced cooling technology, this phone is designed to meet the demands of mobile gamers.',1499.99,'Phone','2020-08-28 00:00:00','GamerX'),(27,'SolarCharge Sunbeam Edition','Stay connected with the SolarCharge Sunbeam Edition. This innovative phone features a solar-charging panel, allowing you to harness the power of the sun and keep your device charged, even in the great outdoors.',899.99,'Phone','2017-04-27 00:00:00','SolarCharge'),(28,'StudioPro Photography Phone','Unleash your inner photographer with the StudioPro Photography Phone. Boasting a professional-grade camera system with advanced optics and imaging capabilities, this phone is a must-have for photography enthusiasts.',1199.99,'Phone','2019-06-16 00:00:00','StudioPro'),(29,'FashionFocus Style Phone','Express your style with the FashionFocus Style Phone. Featuring a sleek and stylish design, this phone not only keeps you connected but also complements your fashion-forward lifestyle.',799.99,'Phone','2024-01-19 00:00:00','FashionFocus'),(30,'WellnessWave Health Monitor','Prioritize your health with the WellnessWave Health Monitor phone. Equipped with sensors for monitoring vital signs, sleep patterns, and activity levels, this phone helps you stay on top of your well-being in a connected world.',1299.99,'Phone','2023-12-12 00:00:00','WellnessWave'),(31,'HyperStrike Pro Gaming Laptop','Unleash the power of gaming with the HyperStrike Pro Gaming Laptop. Featuring a high-refresh-rate display, customizable RGB keyboard, and top-tier graphics, this laptop delivers an immersive gaming experience on the go.',2299.99,'Gaming','2022-07-15 00:00:00','HyperStrike'),(32,'QuantumCore VR Gaming Console','Dive into the virtual realm with the QuantumCore VR Gaming Console. This futuristic console supports virtual reality gaming at its finest, with advanced graphics and a comprehensive library of VR titles.',499.99,'Gaming','2020-11-28 00:00:00','QuantumCore'),(33,'ThunderBlade RGB Mechanical Keyboard','Elevate your gaming setup with the ThunderBlade RGB Mechanical Keyboard. Featuring customizable mechanical switches, RGB lighting, and programmable macros, this keyboard enhances your gaming performance and style.',149.99,'Gaming','2018-04-03 00:00:00','ThunderBlade'),(34,'XtremeForce Wireless Gaming Mouse','Cut the cord and unleash precision with the XtremeForce Wireless Gaming Mouse. Designed for responsiveness and accuracy, this gaming mouse ensures a lag-free experience for competitive gamers.',79.99,'Gaming','2016-09-22 00:00:00','XtremeForce'),(35,'Supernova Elite Gaming Headset','Immerse yourself in stellar audio quality with the Supernova Elite Gaming Headset. Featuring 7.1 surround sound, customizable EQ settings, and a comfortable design, this headset takes your gaming audio to new heights.',129.99,'Gaming','2019-12-10 00:00:00','Supernova'),(36,'BlitzForce Pro Gaming Monitor','Dominate the battlefield with the BlitzForce Pro Gaming Monitor. Boasting a high refresh rate and low response time, this monitor delivers smooth visuals and minimal input lag for a competitive edge.',499.99,'Gaming','2021-02-18 00:00:00','BlitzForce'),(37,'LunarStorm RGB Gaming Desk','Level up your gaming space with the LunarStorm RGB Gaming Desk. This ergonomic desk features customizable RGB lighting, cable management solutions, and ample space for your gaming setup.',349.99,'Gaming','2017-08-07 00:00:00','LunarStorm'),(38,'NovaGrip Pro Controller','Gain precise control with the NovaGrip Pro Controller. Designed for professional gamers, this controller features customizable buttons, trigger stops, and ergonomic grips for extended gaming sessions.',89.99,'Gaming','2015-10-20 00:00:00','NovaGrip'),(39,'CosmicRift Augmented Reality Glasses','Step into the future of gaming with the CosmicRift Augmented Reality Glasses. Blending the digital and physical worlds, these AR glasses provide an immersive gaming experience like never before.',799.99,'Gaming','2023-06-05 00:00:00','CosmicRift'),(40,'TitaniumForce Gaming PC','Unleash gaming supremacy with the TitaniumForce Gaming PC. Equipped with high-end components, liquid cooling, and RGB lighting, this gaming PC is a powerhouse for running the latest AAA titles at maximum settings.',2999.99,'Gaming','2024-09-12 00:00:00','TitaniumForce');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question_id` int(12) NOT NULL AUTO_INCREMENT,
  `product_id` int(12) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `answered` char(1) DEFAULT 'N',
  `asker_name` varchar(45) DEFAULT NULL,
  `date_asked` datetime DEFAULT NULL,
  `answerer_name` varchar(45) DEFAULT NULL,
  `asker_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,40,'Does this computer come with a keyboard and mouse?','No, unfortunately this computer does not come with it\'s own keyboard and mouse. They will need to be purchased separately.','Y','John','2024-01-16 00:00:00','John',NULL),(2,40,'Does this computer come with a wifi card?','Yes, this computer does come installed with a wifi card.','Y','James','2024-01-12 00:00:00','John',NULL),(8,13,'What kind of graphics card is this computer utilising?','This computer is using a Zotac RTX 3070','Y','Joe','2024-01-16 15:45:29','John',NULL),(11,40,'Does the BIOS come up to date?','We make sure to test and update the BIOS whenever we send out our devices, however if an update has been released between the time we send it out and it arrives with you, you will need to update it yourself.','Y','Charlie','2024-01-24 17:54:12','John',1),(12,29,'Does this phone come with a charger?',NULL,'N','Charlie','2024-01-24 17:59:55',NULL,1);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `display_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_accounts`
--

LOCK TABLES `user_accounts` WRITE;
/*!40000 ALTER TABLE `user_accounts` DISABLE KEYS */;
INSERT INTO `user_accounts` VALUES (1,'user1','$2y$10$6Gs69UvGbv7HOOjRfdAsH.ubDkAmQKVegjZ/vatep6tRHuo1dtxK.','Charlie');
/*!40000 ALTER TABLE `user_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'CSY2089'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-24 18:15:55
