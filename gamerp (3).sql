-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 08:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_list`
--

CREATE TABLE `buy_list` (
  `product_order_image` varchar(200) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `p_id` varchar(200) NOT NULL,
  `email_address` varchar(500) NOT NULL,
  `p_id_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_list`
--

INSERT INTO `buy_list` (`product_order_image`, `product_name`, `product_quantity`, `product_price`, `p_id`, `email_address`, `p_id_email`) VALUES
('/ogs/headphone/bengoo_cart.jpg', 'BENGOO G9000 Stereo Gaming Headset for PS4, PC, Xbox One Controller, Noise Cancelling Over Ear Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs for Laptop Mac Nintendo Switch Games', 1, 'RS 1,900/-', 'Bengoo G9000', 'abhaygavandi1000@gmail.com', 'Bengoo G9000_abhaygavandi1000@gmail.com'),
('/ogs/headphone/hyperx_cart.jpg', 'HyperX Cloud Stinger Gaming Headset - Lightweight Design - Flip to Mute Mic - Memory Foam Ear Pads - Built in Volume Controls - Works with PC, PS4, PS4 PRO, Xbox One, Xbox One S (HX-HSCS-BK/NA)', 1, 'RS 3,500/-', 'HYPERX HSCS-BK', 'abhaygavandi1000@gmail.com', 'HYPERX HSCS-BK_abhaygavandi1000@gmail.com'),
('/ogs/headphone/onikuma_cart.jpg', 'ONIKUMA Gaming Headset - Headset Gaming Headphone for PS4, Xbox One (Adapter Need), Nintendo Switch (Audio) PC Gaming Headset with Crystal Clear Sound, LED Lights & Noise-canceling Microphone (K5-N)', 1, 'RS 2,000/-', 'ONIKUMA K5-N', 'junaidsar17@gmail.com', 'ONIKUMA K5-N_junaidsar17@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `p_id_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_image`, `product_name`, `product_quantity`, `product_price`, `email_address`, `p_id_mail`) VALUES
('/ogs/headphone/bengoo_cart.jpg', 'BENGOO G9000 Stereo Gaming Headset for PS4, PC, Xbox One Controller, Noise Cancelling Over Ear Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs for Laptop Mac Nintendo Switch Games', 1, 'RS 1,900/-', 'abhaygavandi1000@gmail.com', 'Bengoo G9000_abhaygavandi1000@gmail.com'),
('/ogs/headphone/hyperx_cart.jpg', 'HyperX Cloud Stinger Gaming Headset - Lightweight Design - Flip to Mute Mic - Memory Foam Ear Pads - Built in Volume Controls - Works with PC, PS4, PS4 PRO, Xbox One, Xbox One S (HX-HSCS-BK/NA)', 1, 'RS 3,500/-', 'junaidsar17@gmail.com', 'HYPERX HSCS-BK_junaidsar17@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `username` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`username`, `email_address`, `password`, `mobile_no`, `address`, `balance`) VALUES
('admin', 'abhaygavandi1000@gmail.com', 'pass', 7506973094, 'Steel Authority of India Ltd.Ispat Bhavan,Lodhi Road,NEW DELHI - 110003', 0),
('areeb', 'areebahmad613@gmail.com', 'areeb', 8355991465, '', 0),
('s4shahil', 'shahshahil95@gmail.com', 'shahil', 8454952830, '', 0),
('jjcool17', 'junaidsar17@gmail.com', 'junaid', 8898589589, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `descriptor`
--

CREATE TABLE `descriptor` (
  `thumbnail_1` varchar(200) NOT NULL,
  `thumbnail_2` varchar(200) NOT NULL,
  `thumbnail_3` varchar(200) NOT NULL,
  `thumbnail_4` varchar(200) NOT NULL,
  `thumbnail_main_1` varchar(200) NOT NULL,
  `thumbnail_main_2` varchar(200) NOT NULL,
  `thumbnail_main_3` varchar(200) NOT NULL,
  `thumbnail_main_4` varchar(200) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description_1` varchar(500) NOT NULL,
  `description_2` varchar(500) NOT NULL,
  `description_3` varchar(500) NOT NULL,
  `description_4` varchar(500) NOT NULL,
  `description_5` varchar(500) NOT NULL,
  `product_cart_image` varchar(200) NOT NULL,
  `product_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descriptor`
--

INSERT INTO `descriptor` (`thumbnail_1`, `thumbnail_2`, `thumbnail_3`, `thumbnail_4`, `thumbnail_main_1`, `thumbnail_main_2`, `thumbnail_main_3`, `thumbnail_main_4`, `product_name`, `price`, `description_1`, `description_2`, `description_3`, `description_4`, `description_5`, `product_cart_image`, `product_id`) VALUES
('/ogs/headphone/bengoo_tb1.jpg', '/ogs/headphone/bengoo_tb2.jpg', '/ogs/headphone/bengoo_tb3.jpg', '/ogs/headphone/bengoo_tb4.jpg', '/ogs/headphone/bengoo_tb1_main.jpg', '/ogs/headphone/bengoo_tb2_main.jpg', '/ogs/headphone/bengoo_tb3_main.jpg', '/ogs/headphone/bengoo_tb4_main.jpg', 'BENGOO G9000 Stereo Gaming Headset for PS4, PC, Xbox One Controller, Noise Cancelling Over Ear Headphones with Mic, LED Light, Bass Surround, Soft Memory Earmuffs for Laptop Mac Nintendo Switch Games', 'RS 1,900/-', '[MULTI-PLATFORM COMPATIBLE]Support PlayStation 4, New Xbox One, PC, Nintendo 3DS, Laptop, PSP, Tablet, iPad, Computer, Mobile Phone. Please note you need an extra Microsoft Adapter (Not Included) when connect with an old version Xbox One controller.', '[SURROUNDING STEREO SUBWOOFER]Clear sound operating strong brass, splendid ambient noise isolation and high precision 40mm magnetic neodymium driver, acoustic positioning precision enhance the sensitivity of the speaker unit, bringing you vivid sound field, sound clarity, shock feeling sound. Perfect for various games like Halo 5 Guardians, Metal Gear Solid, Call of Duty, Star Wars Battlefront, Overwatch, World of Warcraft Legion, etc.', '[NOISE ISOLATING MICROPHONE]Headset integrated onmi-directional microphone can transmits high quality communication with its premium noise-concellng feature, can pick up sounds with great sensitivity and remove the noise, which enables you clearly deliver or receive messages while you are in a game. Long flexible mic design very convenient to adjust angle of the microphone.', '[GREAT HUMANIZED DESIGN]Superior comfortable and good air permeability protein over-ear pads, muti-points headbeam, acord with human body engineering specification can reduce hearing impairment and heat sweat.Skin friendly leather material for a longer period of wearing. Glaring LED lights desigend on the earcups to highlight game atmosphere.', '[EFFORTLESSLY VOLUME CONTROL]High tensile strength, anti-winding braided USB cable with rotary volume controller and key microphone mute effectively prevents the 49-inches long cable from twining and allows you to control the volume easily and mute the mic as effortless volume control one key mute.', '/ogs/headphone/bengoo_cart.jpg', 'Bengoo G9000'),
('/ogs/headphone/corsair_tb1.jpg', '/ogs/headphone/corsair_tb2.jpg', '/ogs/headphone/corsair_tb3.jpg', '/ogs/headphone/corsair_tb4.jpg', '/ogs/headphone/corsair_tb1_main.jpg', '/ogs/headphone/corsair_tb2_main.jpg', '/ogs/headphone/corsair_tb3_main.jpg', '/ogs/headphone/corsair_tb4_main.jpg', 'Corsair Void PRO Surround Gaming Headset - Dolby 7.1 Surround Sound Headphones for PC - Works with Xbox One, PS4, Nintendo Switch, iOS and Android - Carbon', 'RS 5,000/-', 'Microfiber mesh fabric and memory foam provide exceptional comfort.Legendary CORSAIR build quality ensures long term durability. Frequency Response - 100 Hz to 10 kHz\r\nCustom tuned 50mm neodymium speaker drivers bring the action to life with wide range and accuracy.Multi-platform compatible with PC, Xbox One*, PS4 and mobile devices. *May require Microsoft adapter sold separately.Optimized unidirectional microphone reduces ambient noise for enhanced voice quality', 'The VOID PRO RGB USB headset provides exceptional comfort, epic audio performance and legendary CORSAIR durability to deliver the ultimate gaming experience. Microfiber mesh fabric and memory foam ear cups let you play for hours while providing airflow and comfort. Enjoy the precision of custom tuned 50mm speaker drivers and an all new noise cancelling microphone for crystal clear communication. Genuine Dolby Headphone 7.1 surround sound creates immersive multi-channel audio.', 'The USB transceiver is strong enough that it\'s effective range is able to penetrate the walls and floors 2200 sq\' of my 2 story house without any problem. That said, building material in the SW of the US is less dense than say the NE or other area where brick or cinderblock is in heavy use, which I\'m told by some has impacted their range. However all 4 sources said they get a good 25\' even then, and one had the stand which with some effort let him place to provide coverage for his entire house.', 'The 7.1 surround sound is good, but not great. The software that controls a number of Corsair products allows you to save custom EQ settings to different profiles, fine tuning the simulated 7.1 surround sound. The software comes with 5 EQ presets that from testing various sources, I liked the Bass Boost most. ', 'the mic performs well, but how it sits and the care needed in handling it is my main reason for docking a star as it\'s a bit on the clunky side. It doesn\'t collapse and given its length and how it sits on the side you will have to treat this headset with care. ', '/ogs/headphone/corsair_cart.jpg', 'Corsair Void Pro'),
('/ogs/headphone/hyper_tb1.jpg', '/ogs/headphone/hyper_tb2.jpg', '/ogs/headphone/hyper_tb3.jpg', '/ogs/headphone/hyper_tb4.jpg', '/ogs/headphone/hyper_tb1_main.jpg', '/ogs/headphone/hyper_tb2_main.jpg', '/ogs/headphone/hyper_tb3_main.jpg', '/ogs/headphone/hyper_tb4_main.jpg', 'HyperX Cloud Stinger Gaming Headset - Lightweight Design - Flip to Mute Mic - Memory Foam Ear Pads - Built in Volume Controls - Works with PC, PS4, PS4 PRO, Xbox One, Xbox One S (HX-HSCS-BK/NA)', 'RS 3,500/-', 'Conveniently mute the microphone by flipping it vertically against the head. HyperX Cloud Stinger\'s built-in passive noise cancellation reduces background noise for clearer voice quality. The headset is certified by TeamSpeak and Discord, and compatible with other leading chat programs, including Skype, RaidCall and Ventrilo.', 'HyperX Cloud Stinger\'s ear cups rotate in a 90-degree angle to fit better around your neck, so you can play in comfort for hours.At just 275 grams, HyperX Cloud Stinger won\'t weight you down, making it ideal for prolonged gaming sessions.The 50mm drivers are parallel to the ear, to position sound directly into the ear for gaming-grade sound quality.', 'The entire body of the cloud stinger is made of plastic but still have a very solid and premium feel to them, the plastic doesn\'t creek when they flex like other headsets can. Most of the finish is a matte plastic with a few accents in gloss. There is leatherette padding inside of the headband which has a good amount of cushion. The headband has a nice and firm adjustable steel slider that clicks at each notch', 'HyperX Cloud Stinger is the ideal headset for gamers looking for lightweight comfort, superior sound quality and added convenience. At just 275 grams, it\'s comfortable on your neck and its ear cups rotate in a 90-degree angle for a better fit. Its 50mm directional drivers position sound directly into the ear for audio precision and gaming-grade sound quality. For ultimate comfort in prolonged gaming sessions, it features high-quality HyperX signature memory foam. ', 'HyperX Cloud Stinger is compatible with PC, Xbox One, PS4, Wii U and mobile devices and has a single 3.5mm stereo plug (4 pole) and PC extension cable with dual 3.5mm stereo and mic plugs. Enjoy the same comfort and enhanced audio experience on PC or console, or just plug into your mobile device and wear it on the go.', '/ogs/headphone/hyperx_cart.jpg', 'HYPERX HSCS-BK'),
('/ogs/headphone/logitech_tb1.jpg', '/ogs/headphone/logitech_tb2.jpg', '/ogs/headphone/logitech_tb3.jpg', '/ogs/headphone/logitech_tb4.jpg', '/ogs/headphone/logitech_tb1_main.jpg', '/ogs/headphone/logitech_tb2_main.jpg', '/ogs/headphone/logitech_tb3_main.jpg', '/ogs/headphone/logitech_tb4_main.jpg', 'Logitech G430 7.1 DTS Headphone: X and Dolby Surround Sound Gaming Headset for PC, Playstation 4  On-Cable Controls  Sports-Performance Ear Pads  Rotating Ear Cups  Light Weight Design', 'RS 3,000/-', 'DTS Headphone: X and Dolby 7.1 surround sound: Experience an immersive 360-degree sound field that lets you hear what you can\'t see.Built for comfort: Lightweight design and soft sport cloth ear cups with 90-degree swivel for maximum comfort and a personalized fit', 'Folding, noise-cancelling boom mic: Reduces background noise for clear voice pick up and rotates up and out of the way\r\nImpedance: 32 Ohms . On-cable sound controls: Volume dial and mute switch are close at hand for quick audio adjustments', 'Compatibility: Works with PS4 and Windows 10, Windows 8, Windows 7 or Windows Vista computers Headphone- Frequency response: 20Hz-20KHz. Microphone Pickup pattern: Cardioid (Unidirectional)-Frequency response: 50-20KHz. Please Note: Kindly refer the User Guide before use', 'urround Sound is very nice (requires use of included USB sound card) and really ups the immersion on games that support the surround sound.Microphone Quality is on par however for most programs you will need to have the microphone volume set in the operating system at 98 - 100 percent (much lower than that and voice detection starts falling off for most chat programs).', 'I\'m believe it is simply due to how wide my head is. The headband itself doesn\'t adjust to accommodate wider heads while the ear cups are adjustable to accommodate people with taller heads which I feel is where the flaw is in the design. In the attached images you can see where it broke and where it cracks. This stress point is most certainly caused by the poor construction at the joint.', '/ogs/headphone/logitech_cart.jpg', 'Logitech G430'),
('/ogs/headphone/onikuma_tb1.jpg', '/ogs/headphone/onikuma_tb2.jpg', '/ogs/headphone/onikuma_tb3.jpg', '/ogs/headphone/onikuma_tb4.jpg', '/ogs/headphone/onikuma_tb1_main.jpg', '/ogs/headphone/onikuma_tb2_main.jpg', '/ogs/headphone/onikuma_tb3_main.jpg', '/ogs/headphone/onikuma_tb4_main.jpg', 'ONIKUMA Gaming Headset - Headset Gaming Headphone for PS4, Xbox One (Adapter Need), Nintendo Switch (Audio) PC Gaming Headset with Crystal Clear Sound, LED Lights & Noise-canceling Microphone (K5-N)', 'RS 2,000/-', 'TRULY IMMERSIVE SOUND QUALITY TO ENHANCE YOUR GAMING EXPERIENCE. ONIKUMA game headset features 50mm diver, 16 Ohm impendance, 114dB +/- 3 dB at 1KHz sensitivity and 20HZ-20KHz frequency range. It does have a good wide sound-stage to pick out footsteps easier. It can add some immersiveness and improve your ability to track the direction sounds come from, from left to right. No matter in 1V1 or teamwork, you could enjoy surround sound with ONIKUMA gaming headphone.', 'SUPERIOR NOISE-CANCELING MICROPHONE WITH ADVANCED ANTI-STATIC DESIGN. ONIKUMA gaming headphone with cutting-edge anti-static design makes it possible to prevent your ear from current sound during battles. The noise-canceling microphone makes your words heard by your teammate clearly, leading to smooth in-game communication. From beginner to mediocre to top, in process of practice, practice and practice, ONIKUMA gaming headphone is always your companion in voice comms.', 'MEMORY FOAM EAR CUP WITH BIONIC PROTEIN CUSHION COAT FOR MAXIMUM COMFY. ONIKUMA gaming headset does not hurt your ear at all. It is comfortable even after wearing it for a long time. The over-ear design in order to better accommodate the massive audio driver and soft memory foam with bionic protein cushion coat ensure the headset to stay on your head without a hint of fatigue. Spending hours long gaming sessions is a reason you would not willing to miss ONIKUMA gaming headset.', 'ULTRA STRONG COMPATIBILITY. ONIKUMA gaming headset works on Nintendo Switch (audio), Nintendo New 3DS LL/3DS (audio), Nintendo 3DS LL/3DS (audio), Windows PC, Mac OS PC, iOS device, Android device, PS4, PS vita, PSP and Xbox One. Xbox One needs accessory to support. This headset is capable of various games. Practicing your aim, your movement, your spatial awareness, your ability to track ultimates; killing zombies, destroying the boss, this headset is the your BFF in game playing.', 'With 7.1 stunning surrounding sound effect, 4D virtual speaker displacement technology and telescopic microphone design, ONIKUMA gaming headset gives you a competitive advantage by allowing you to hear everything from nearby enemy footsteps to distant reloads. Improve your ability to track the sounds from different direction, from left to right.', '/ogs/headphone/onikuma_cart.jpg', 'ONIKUMA K5-N'),
('/ogs/headphone/razer_tb1.jpg', '/ogs/headphone/razer_tb2.jpg', '/ogs/headphone/razer_tb3.jpg', '/ogs/headphone/razer_tb4.jpg', '/ogs/headphone/razer_tb1_main.jpg', '/ogs/headphone/razer_tb2_main.jpg', '/ogs/headphone/razer_tb3_main.jpg', '/ogs/headphone/razer_tb4_main.jpg', 'Razer Kraken 7.1 V2: 7.1 Surround Sound - Retractable Noise-Cancelling Mic - Lightweight Aluminum Frame - Gaming Headset Works with PC, PS4, Xbox One, Switch, Mobile Devices - Black', 'RS 6,000/-', 'Built-in advanced 7.1 virtual surround sound engine enables the Razer Kraken 7.1 V2 to deliver positional audio with pinpoint accuracy. Made of Bauxite aluminum, the new and improved headband of the Razer Kraken 7.1 V2 is both lightweight and extremely flexible', 'Customize the surround sound to your listening preferences via Razer Synapse and know exactly where the enemy is coming from to strike with precision and secure your win Headphones-frequency response: 12 Hz – 28 kHz. Engineered to enable on-demand crystal-clear communication, the Razer Kraken 7.1 V2 features a fully-retractable microphone with active mic noise cancellation capability', 'The Razer Kraken 7.1 V2 features 50mm audio drivers custom tuned for balanced and crystal-clear in-game audio and communication, Cable length: 2 m / 6.6 ft. Impedance: 32 1 kHz\r\nOval ear cushions-Designed for full-ear coverage, perfect for long-wearing comfort. Sensitivity at 1 kHz- 123 dB. Drivers with neodymium magnets. Microphone available on PC Only', 'Customized OFC4NT copper core KLORED PVC wire. 5 times of strength makes it pulling-proof and thus durable.Xhmmer-4D scene simulates engine, you won\' t miss its exquisite craftsmanship and outstanding sound power.', 'The audio quality is perfect. Whether its a youtube video or the sounds of war in Battlefield 1, everything sounds crystal clear. Most importantly the bass is booming! The volume control is easy to use and percise.As a added bonus it comes with multiple adapters for other consoles and the like. These headsets are compatible with Xbox one, Ps4, Switch and gaming PCs.', '/ogs/headphone/razer_cart.jpg', 'Razer Kraken 7.1'),
('/ogs/headphone/sa807_tb1.jpg', '/ogs/headphone/sa807_tb2.jpg', '/ogs/headphone/sa807_tb3.jpg', '/ogs/headphone/sa807_tb4.jpg', '/ogs/headphone/sa807_tb1_main.jpg', '/ogs/headphone/sa807_tb2_main.jpg', '/ogs/headphone/sa807_tb3_main.jpg', '/ogs/headphone/sa807_tb4_main.jpg', 'SADES SA807 Gaming Headset Headphone Stereo Sound 3.5mm Wired with Mic for PC/New Xbox One/PS4', 'RS 1,400/-', 'Unique 3-pieces of padded headband and comfortable ear cushions guarantees hours of gaming comfort.Game-quality Stereo Sound: Capture the flying bullets, footsteps and all effects in games easily and deliver a clear, crisp and rich sound.', 'The omnidirectional condenser microphone can catch every detail speaking accurately when collecting sounds, it is much sensitive and much widely frequency response.Closed earcup design in SA807 Gaming Headset, covers your entire ear and cuts out external sound very effectively, and with none of the irritating \'seashell effect\' many headsets suffer.', 'Technical Specification: \r\n1.Loudhailer diameter:40mm(NdFeB) \r\n2.Frequency range: :20-20.000Hz \r\n3.Sensitivity:113+/-3dB at 1kHz \r\n4.Impedance:32 Ohm at 1khz \r\n5.Max Input power:30mW (maximum) \r\n6.Mic Dimension:6.0*5.0mm \r\n7.Plug:3.5mm \r\n8.Mic Sensitivity:-54dB +/- 3 dB \r\n9.Magnet size:15.5 x 2.0mm \r\n10.Cable length:Approx.2.2m \r\n11.Distortion: smaller than 5% THD ', 'Package included:\r\n1 x SADES SA-807 Gaming headset For PS4 new Xbox one \r\n1 x 3.5mm Headphone/Mic Splitter Cable For PC', 'you need extra Microsoft Adapter(Not including) when Connect to your old Xbox One controller. This item don\'t include the adapter for xbox 360 \r\nBefore apply the headset on your PS4, please test it with your cellphone to ensure it function well. PS4 setting', '/ogs/headphone/sades807_cart.jpg', 'Sades SA807'),
('/ogs/headphone/sa920_tb1.jpg', '/ogs/headphone/sa920_tb2.jpg', '/ogs/headphone/sa920_tb3.jpg', '/ogs/headphone/sa920_tb4.jpg', '/ogs/headphone/sa920_tb1_main.jpg', '/ogs/headphone/sa920_tb2_main.jpg', '/ogs/headphone/sa920_tb3_main.jpg', '/ogs/headphone/sa920_tb4_main.jpg', 'Sades SA920 3.5mm Wired Stereo Gaming Over Ear Headset with Microphone and Revolution Volume Control for Xbox One / Xbox 360 / PS4 / PC /Cell phones / iPad (Black/White)', 'RS 2,000/-', 'The stereo gaming headset with a 3.5mm connector audio input for PlayStation 4/Mobile Phone/Tablet PC/Laptop PC, a 2.5mm connector audio input for XBOX 360, and a 3.5mm 1 to 2 jack cable for desktop computer.', 'Acoustic positioning precision, it compatible with mac/ps4/newest xbox and so on,game telepresence is better. 40mm high flux neodymium iron boron/drive unit, effectively enhance the sensitivity of the speaker unit', 'Softness and good air permeability protein earmuffs, multi points presure head beam, accord with human body engineering specification.High tensile strength, anti winding braided line, with the designed specifically for gaming users and the design of the heart by wire.', 'Package :\r\n1x Sades SA920 Headset(White)\r\n1 x 3.5mm jack cable 1 to 2 \r\n1 x Xbox360 converntor \r\n1 x User Manual', 'After-sale service:\r\n1.One month return and one year warranty service in Smart@Purchase Shop.\r\n2.Your most satisfaction,our all goal.\r\nJust contact us if you have any problem,we will be here with you in any time.', '/ogs/headphone/sades920_cart.jpg', 'Sades SA920'),
('/ogs/headphone/vmoda_tb1.jpg', '/ogs/headphone/vmoda_tb2.jpg', '/ogs/headphone/vmoda_tb3.jpg', '/ogs/headphone/vmoda_tb4.jpg', '/ogs/headphone/vmoda_tb1_main.jpg', '/ogs/headphone/vmoda_tb2_main.jpg', '/ogs/headphone/vmoda_tb3_main.jpg', '/ogs/headphone/vmoda_tb4_main.jpg', 'V-MODA Crossfade M-80 Vocal On-Ear Noise-Isolating Metal Headphone (Shadow)', 'RS 9,000/-', 'On-Ear Headphones\r\nTrusted sound\r\nMilitary-level durability\r\nUltra compact design\r\nCustom color & laser engraving\r\nSix star service', 'Tuned and trusted by V-MODA\'s golden ears, editors, audiophiles, producers, and DJs on the forums and around the globe. Our M-Class series has won a record number of awards and is used by the world\'s top DJs.\r\nM-Class 40mm Dual-Diaphragm Drivers &ndash inner & outer rings deliver vibrant bass, vivid mids & vivacious highs without overlap\r\nPassive Noise Isolation cuts out noise\r\nObsessive Quality Control <2dB variance for strict sound consistency compared to most brands', 'Ultra Compact\r\n53% smaller than its over-ear siblings, small enough to make you think twice before grabbing your in-ears\r\nExoskeleton Case store your headphones and gear in the compact hard carry case\r\nCarabiner  clips inside or outside your bag\r\nHear, There, Everywear  perfect for commuting, travel, gym, office, or mobile music production\r\nV-STRAP System  easy to organize your cables, USB Flash Drive and Faders VIP tuned earplugs\r\n', 'SpeakEasy Mic Cable  tuned for voice recognition & calls in noisy places control works with all 3.5 mm smartphones & tables including Apple, Android, Kindle, Windows & Blackberry\r\nOptional BoomPro  a professional grade boom mic for gaming/Skype/Voice\r\n', 'Our Six Star concierge service goes above and beyond your expectations. V-MODA is founded upon customer quality, not quarterly earnings.\r\n2-Year Premier Warranty  more than double industry average\r\nImmortal Life Program  have no fear to use your headphones anywhere, with the V-MODA Immortal Life Program you get 50% off a replacement even if they are run over by a tank\r\n60 Day Test Drive  V-MODA is so confident the M-80 Vocal is a superior headphone, you have an unrivaled 60 day test drive guaran', '/ogs/headphone/vmoda_cart.jpg', 'V-MODA Crossfade M-80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_list`
--
ALTER TABLE `buy_list`
  ADD PRIMARY KEY (`p_id_email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id_mail`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`mobile_no`);

--
-- Indexes for table `descriptor`
--
ALTER TABLE `descriptor`
  ADD PRIMARY KEY (`product_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
