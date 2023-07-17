-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 06:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pitch_name` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `adult` int(15) NOT NULL,
  `child` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`id`, `name`, `email`, `phone`, `pitch_name`, `checkin`, `checkout`, `adult`, `child`) VALUES
(1, 'mg kyaw min', 'mhks221@gmail.com', '092231314', 'Wood Mountain Road Campground', '2023-07-01', '2023-07-04', 5, 2),
(2, 'Min Kaung sett', 'moneumpunk44@gmail.com', '097483647', 'Northern Nights Campground and RV', '2023-07-08', '2023-07-11', 7, 3),
(3, 'phyo phyo', 'phyo@gmail.com', '08112478', 'Newbridge Country Park', '2023-07-01', '2023-07-03', 3, 0),
(4, 'Hla Hla', 'hlahla34@gmail.com', '09682832100', 'Fossil Valley RV Park', '2023-06-13', '2023-06-15', 4, 1),
(5, 'John Smith', 'john@gmail.com', '+959756165549', 'Northern Nights Campground and RV', '2023-06-19', '2023-06-28', 7, 1),
(6, 'Jenny X', 'jenny@gmail.com', '0124445661', 'Camping Marelago', '2023-07-11', '2023-07-14', 4, 0),
(7, 'Aung Aung', 'aungaung@gmail.com', '0968212389', 'Sivinos Camping Boutique', '2023-07-26', '2023-07-28', 2, 2),
(8, 'Hsu Mon Aung', 'hsumonaung!@gmail.com', '+959756165549', 'Newbridge Country Park', '2023-07-08', '2023-07-10', 6, 4),
(9, 'Mya Mya', 'myamya33@gmail.com', '017843413', 'Collierhall Farm', '2023-07-10', '2023-07-13', 4, 1),
(10, 'Tun Aung', 'tuntun23@gmail.com', '01889453', 'Collierhall Farm', '2023-05-30', '2023-06-02', 5, 2),
(11, 'mg kaung', 'mgkaung933@gmail.com', '09682832100', 'Northern Nights Campground and RV', '2023-07-11', '2023-07-17', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `last_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `email`, `message`, `last_name`) VALUES
(3, 'Alice', 'aungaung@gmail.com', 'Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium. Sit ornare mollitia tenetur, aptent.', 'J'),
(4, 'John', 'john1223@gmail.com', 'Hipcamp is a growing community of good-natured people and the most comprehensive resource for unique outdoor stays', 'Smith'),
(5, 'Min', 'minmin123@gmial.com', 'Mosquitoes were rife no spraying and we got bitten to bits , despite using mosquito repellant s had to stay in caravan and it spoilt our holiday.', 'Min'),
(6, 'Hsu May', 'hsumay@gmail.com', 'Super Campingplatz, gepflegt und der Strand ist auch in Ordnung.\r\nDer Pool ist super', 'Aung'),
(7, 'Hla', 'james221@gmail.com', 'Hello!', 'Min');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `count` int(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`count`, `id`) VALUES
(12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `leisure` text NOT NULL,
  `amenities` text NOT NULL,
  `groups` text NOT NULL,
  `rules` text NOT NULL,
  `LA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `leisure`, `amenities`, `groups`, `rules`, `LA`) VALUES
(1, 'None.', 'Bath available , Car parking by pitch/unit.', 'Family friendly\n, Motorcycle friendly\n, Single-sex groups welcome\n, Student groups welcome.', 'Barbecue provided\n, Barbecues allowed\n,\nCampfires allowed', 'Best come set for action: the area around Fayetteville (West Virginia) is gaining a bit of a rep as a hub for outdoor activities. As well as those rafting trips, companies within a half-hour drive can hook you up with days of rock climbing, river fishing and horse riding, and there are some fab mountain bike trails at Arrowhead Bike Farm (15 minutes’ drive).\r\n<br><br>\r\nHiking types have plenty of options too: trails both leisurely and more demanding run through the Summit Bechtel Reserve (five minutes’ drive) and Babcock State Park (half an hour). Folks with a head for heights can zoom through the forest canopy on ziplines or sign up for guided walks on the maintenance catwalk of the New River Gorge Bridge, 20 minutes away – the views are pretty sweet from 876 feet up in the air (and you’ll be strapped into a safety harness to ensure you can appreciate them without excess panic).\r\n<br><br>\r\nTime to take it easy… scoot up to Summersville Lake (half an hour) for fishing, swimming and boating, or wander around Fayetteville, taking in the Historic District and public art installations as you go, and picking up treats at the farmers’ market.'),
(3, 'Evening entertainment.', 'Car parking by pitch/unit , Disabled facilities , Food shop , Free wifi , Pick-up from public transport.', 'Family friendly\r\n,\r\nMotorcycle friendly\r\n,\r\nSingle-sex groups welcome\r\n,\r\nStudent groups welcome', 'Barbecues allowed\r\n,\r\nCampfires allowed\r\n, Dogs allowed.\r\n', 'Get ready to hit the river – it’s a mere 15-minute drive to Copper Center, where expert guides can take you out in search of the prized red salmon and king salmon that swim in the Copper River and other nearby waterways.\r\n<br><br>\r\nIf you’d rather watch the river action, keep your eyes out for traditional fish wheels ploughing the waters; on the other hand, if you want to get properly stuck in with the waters, sign up for rafting trips from Copper Center.\r\n<br><br>\r\nHikers and cyclists have miles and miles (and miles and miles) of trails to explore in the Wrangell-St. Elias National Park & Preserve. There’s potential to get lost in the park’s 13 million acres, so stop off at the visitor centre (10 minutes’ drive from Northern Nights) for route maps and the latest trail updates. Once you’ve seen it up close, get an epic overview of some of the scenery (glaciers and all) on a flightseeing trip with Copper Valley Air Day Tours (five minutes’ drive).'),
(4, 'None.', 'Car parking by pitch/unit , Disabled facilities , Free wifi , Launderette.', 'Family friendly , Motorcycle friendly.', '\r\nBarbecues allowed , Commercial vehicles allowed , Dogs allowed.', 'History ancient and modern is all around here: start off at the Utah Field House of Natural History State Park Museum five minutes\' drive away for prehistory-themed interactive exhibits and activities, in a geology hall, anthropology hall, natural history hall and dinosaur garden. Then zip forward a few million years with a look around the Uintah County Heritage Museum and its exhibitions showcasing Native American artefacts, alongside art displays, a gallery and a gift shop.\r\n<br><br>\r\nA must-see is the 200,000-acre Dinosaur National Monument, 15 miles away on the border between Utah and Colorado where the Green and Yampa rivers meet. Delve into the area\'s rock formations to see the countless dinosaur fossils and footprints, ancient stone carvings and cave paintings only discovered in the early 20th century.\r\n<br><br>\r\nFor outdoor days, the green forests, cascading rivers and emerald lakes of the Flaming Gorge National Recreation Area are within 45 minutes\' drive. Make your way to the 91-mile Flaming Gorge Reservoir for water-based activities from waterskiing and jetskiing to boating and houseboating. Fishing is another popular pastime at Flaming Gorge, where special regulations ensure the waters\' brown and rainbow trout stocks remain in full flow.'),
(5, 'Fishing.', 'Food shop\r\n,\r\nFree wifi\r\n,\r\nIce pack freezing\r\n,\r\nInternet access', 'D. of E. welcome\r\n,\r\nFamily friendly', 'Barbecues allowed\r\n,\r\nCampfires allowed\r\n,\r\nNo dogs allowed', 'This is top walking country with many paths passing close to the site; the site staff are true experts in where to wander nearby and are happy to share their top tips.\r\n\r\nTo explore further, drive half an hour to the Grey Mare’s Tail Nature Reserve and Trail, through wildlife haven moorlands to a fab waterfall, and stopping off (recommend the tipsters at Ettrick Valley) for a wander round St Mary’s Loch on the way back. Fishing types can try their luck (with permits) on the waters there and seek trout and grayling on the Ettrick.\r\n<br>\r\nIf bikes are more your bag, Glentress and Innerleithen (both 40 minutes away) are part of the 7Stanes network of mountain biking centres, with bike hire and trails for all levels of ability and nerve. If you’re bringing a bike with you, the Ettrick Valley folks will keep it locked up safely in their store.\r\n<br>\r\nThe Scottish Borders are big on history too, what with William Wallace being made guardian of the Scots at Selkirk (30 minutes) and Sir Walter Scott settling down at Abbotsford (40 minutes). The ruined abbeys of Melrose, Dryburgh and Jedburgh are all within a 50-minute drive and it\'s about an hour to Floors and Hermitage castles.'),
(6, 'None.', 'Collierhall Farm , Free wifi , Launderette , Shower available\r\n,\r\nToilet block', 'Family friendly\r\n,\r\nMotorcycle friendly\r\n,\r\nSingle-sex groups welcome', 'Barbecue provided\r\n,\r\nBarbecues allowed', 'Local attractions and activities include:\n<br>\n- Cairn Lodge services: five minutes\' drive\n<br>\n- Douglas Castle: 10 minutes\n<br>\n- Lanark: 15 minutes\n<br>\n- Tinto Hill: 20 minutes\n<br>\n- Museum of Lead Mining: 30 minutes\n<br>\n- Glasgow: 35 minutes\n<br>\n- Edinburgh: an hour\n<br>\n- Ayr: an hour.'),
(7, 'Fishing , Games room.', 'Composting toilet\r\n,\r\nDisabled facilities\r\n,\r\nDog park ,\r\nFree wifi\r\n,\r\nIce pack freezing', 'Family friendly\r\n,\r\nMotorcycle friendly', 'Barbecue provided\r\n,\r\nBarbecues allowed', 'Dumfries (10 minutes’ drive) was the birthplace of Robbie Burns in 1759; see displays on the life of Scotland’s favourite poet, as well as portraits and period rooms, at the Robert Burns House, or read more about his life and times at the Robert Burns Centre, an 18th-century watermill sitting on the banks of the River Nith. There’s more on his backstory at Robert Burns Ellisland Farm (five minutes), a sprawling homestead where he once farmed.\r\n<br><br>\r\nSpectacular Drumlanrig Castle and Gardens (20 minutes) makes a great day out for all the family, with its stellar art collection, woodland walks and adventure playground. For more Scottish heritage, stop by the moated remains of medieval Caerlaverock Castle (25 minutes), or have a nose around impressive cloisters of 13th-century Sweetheart Abbey (20 minutes) in New Abbey.\r\n<br><br>\r\nIf you prefer to do your exploring on foot, amble up to the 60-foot waterfall in Grey Mare’s Tail Nature Reserve (50 minutes), or pack a picnic and hike to Loch Trool and Bruce’s Stone – commemorating Robert the Bruce’s victory over the English in 1307 – in Galloway Forest Park (half an hour).'),
(12, 'Fishing', 'Car parking by pitch/unit , Launderette , Pick-up from public transport\r\n,\r\nPortable toilet', 'Family friendly\r\n,\r\nMotorcycle friendly', 'Commercial vehicles allowed\r\n,\r\nDogs allowed\r\n,\r\nDogs allowed all year', 'Yorkshire folk are rightly proud of \'God\'s Own Country\' – it\'s home to some of the finest historic houses, coast and countryside around. If you want to keep things local, head out to Kirkham Abbey (15 minutes\' drive) to visit the ruins of the priory or for waterside strolls along the Derwent river.\r\n<br><br>\r\nLike to be beside the seaside? Of course you do, and luckily this area has plenty of options to choose from. If you fancy venturing to Whitby\'s harbour and beaches, drive to Pickering (25 minutes) and hitch a ride on a steam train for a stonkingly scenic journey over the North York Moors. Bempton Cliffs Seabird Centre (an hour away) is a rather wilder beauty spot – this nature hub is home to about a quarter of a million nesting seabirds (so be sure to pack your binoculars).\r\n<br><br>\r\nArt, architecture and landscaped grounds can all be rather moreish, so check out other historic houses in the area, like Nunnington Hall (20 minutes), Duncombe Park (25 minutes), Sledmere House (30 minutes) and Beningbrough Hall (40 minutes), if you fancy a change of scene on your blue-blooded escapades.'),
(13, 'None.', 'Car parking by pitch/unit , Disabled facilities , Launderette Public telephone. ', 'D. of E. welcome\r\n,\r\nFamily friendly\r\n,\r\nMotorcycle friendly\r\n,\r\nRallies welcome', 'Dogs allowed\r\n,\r\nDogs allowed all year', 'There’s simply masses to do in the Forest of Dean and the Wye Valley – from adventurous outings to cultural visits. Get the kids up and active with a visit to Go Ape Beechenhurst (15 minutes’ drive) for Segway tours and zooming down zipwires, and head for the Forest of Dean Adventure Park Bracelands Site (five minutes) for jumping around on ropes, climbing towers and practising archery. Or maybe you fancy kayaking down the River Wye from Wyedean (15 minutes)?\r\n<br><br>\r\nFor less strenuous days out, have an amble around the mossy woodland trails at Puzzlewood (10 minutes), or get your culture fix at National Trust-owned Westbury Court Garden (25 minutes), with delightful formal plantings around an ornamental lake.\r\n<br><br>\r\nLunchtime? Pack a picnic and eat it at Symonds Yat Rock (five minutes) while enjoying the view of the River Wye winding through its gorge. Prefer a pub? The renowned half-timbered Saracens Head Inn (15 minutes) sits on the river bank and is a great place to stop for lunch or a glass of something chilled. And to say you’ve been to Wales, hop across the border to Monmouth (20 minutes) and tour its castle and military museum.'),
(15, 'Evening entertainment , Outdoor swimming pool\r\n,\r\nPlay area', 'Bath available\r\n, \r\nCar parking by pitch/unit , Disabled facilities , Launderette', 'Family friendly\r\n,\r\nMotorcycle friendly', 'Barbecues allowed, Dogs allowed.', 'Lady’s Mile is a site for the sea and sand fans, as it’s only a mile from two beaches where you can surf, swim, sail or just laze and sunbathe.\r\n<br><br>\r\nGolf, fishing, horse riding and tennis are all nearby, or you could indulge in a spot of culture and wander around the nearby National Trust properties A la Ronde and Compton Castle.\r\n<br><br>\r\nWant something a little more likely to appeal to the kids? Pack them in the car and take them off to Crealy Great Adventure Park a short drive away, where they can go gaga on the rides or go wild in the indoor jungle.\r\n<br><br>\r\nThey’ll also enjoy seeing the famous black swans along the River Dawlish, bumping along on the seafront railway, or just sticking close to the beach resort with its pirate-themed mini golf, go-karting, amusements and rides.'),
(16, 'On-site restaurant/cafe\r\n,\r\nOutdoor swimming pool\r\n,\r\nPlay area\r\n,\r\nTV room\r\n,\r\nTake away', 'Car parking by pitch/unit , Disabled facilities , Food shop\r\n,\r\nFree wifi', 'Family friendly\r\n,\r\nMotorcycle friendly\r\n,\r\nSingle-sex groups welcome\r\n,\r\nStudent groups welcome', 'Dogs allowed.', 'Most folk staying at Camping Fusina Tourist Village quite rightly come to view fab Venice – its Grand Canal, its art and architecture and its Piazza San Marco among many more – and its islands such as Murano, Burano, Torcello and Lido. The entire city as well as its lagoon are a World Heritage Site, so lace up your comfy shoes and prepare for lots of sightseeing.\r\n<br><br>\r\nAlso famed in the region are the 200 or so Palladian Villas of the Riviera del Brenta/Brenta Riviera, once homes of the Venetian aristocracy who built their villas along the waterfront: book a Burchiello boat tour to see them between March and October.\r\n<br><br>\r\nAnd… one could stay here for weeks what with the many more things to see and do in and around Venezia, but if you\'re pushed for time, recommended options nearby include Padoa and Treviso, both a 20-minute drive away; and the town of Abano Terme ten kilometres south west of Padua, known Europe-wide for its hot springs and mud baths.'),
(17, 'Bar or club house\r\n,\r\nCycle hire , Watersports', 'Drying room\r\n,\r\nFood shop\r\n,\r\nFree wifi', 'Family friendly.', 'Barbecues allowed.', 'Lake Garda is a marvellous sight, and where better to take in its splendid vistas than from the shores of a private island? Isola del Garda, open between March and October, can be reached only by boat (regular services leave 20 minutes\' drive away from base). The crossing is scenic in itself, but once ashore there\'s an elegant neo-gothic villa to explore. If Isola del Garda\'s early 20th-century architecture inspires you, continue on to Vittoriale d’Italia (half an hour) and its Art Deco house and gardens.\r\n<br><br>\r\nFor a kid-pleasing jaunt, Gardaland (35 minutes) has a smashing theme park and aquarium. If you fancy keeping things classy (and why not – this site is called \'boutique\' for a reason), there\'s a golf course 10 minutes away and Avanzi winery (10 minutes\' drive) organises regular tastings and tours to see the wine barrels that are stored in old underground tunnels.\r\n<br><br>\r\nOutside the immediate local area, swing by Sirmione, a town perched on a lakeside peninsula (don\'t miss the castle ramparts that extend out into the water). Beyond the lakes, Verona is 50 minutes away by road, and pleasant little Cremona is an hour. Venice is a little further afield at an hour and 45 minutes.'),
(18, 'Cycle hire\r\n,\r\nEvening entertainment', 'Car parking by pitch/unit , Disabled facilities .', 'Family friendly\r\n,\r\nMotorcycle friendly', 'Barbecues allowed , No dogs allowed.', 'Sporting Club Altanea, next to the site, has two tennis courts, two beach volleyball courts, a basketball, badminton and volleyball court and several five- and seven-a-side football pitches.\r\n<br><br>\r\nPra’ delle Torri golf club, a kilometre away, is an 18-hole course bordering the beach, welcoming beginners, amateurs and professionals to its driving range and greens. It has professional coaches and runs a busy schedule of competitions.\r\n<br><br>\r\nYou could also rent a motorboat from Lido Altanea to explore the lagoon and sea, or take a guided boat trip from Caorle to visit the casoni (fishermen\'s huts) around the lagoon, and see these famed and traditional buildings made from reeds and wood.\r\n<br><br>\r\nAcquafollie waterpark in Caorle has a network of waterslides and runs activities for kids in the summer.\r\n<br><br>\r\nVenice can be reached by bus or boat and has loads of world-famed attractions including the Grand Canal, the Doge\'s Palace and St Mark\'s Square.');

-- --------------------------------------------------------

--
-- Table structure for table `pitch_info`
--

CREATE TABLE `pitch_info` (
  `id` int(11) NOT NULL,
  `pitch_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `general` text NOT NULL,
  `location` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pitch_info`
--

INSERT INTO `pitch_info` (`id`, `pitch_name`, `address`, `general`, `location`, `country`, `photo`, `remark`) VALUES
(1, 'Wood Mountain Road Campground ', '231 Wood Mountain Road, Glen Jean, West Virginia, USA', 'Hilltop site on the edge of the Summit Bechtel Reserve A 15-minute drive from downtown Fayetteville Rafting trips organised on site; lots of outdoor activities close by.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.2676105549585!2d-81.1631075399993!3d37.924178189774295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884e94cb6cb5538f%3A0x78dfbc6afb83e093!2sWest%20Virginia%20Adventures!5e0!3m2!1smy!2smm!4v1685326083241!5m2!1smy!2smm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', 'USA', 'photo/c1.jpg', NULL),
(3, 'Northern Nights Campground and RV Park', 'Milepost 188.7, Glenn Highway, Glennallen, Alaska, USA', 'Alaska Native-owned campground in Glennallen, with spectacular views Sociable free dessert nights around the campfire weekly in summer 10 minutes\' drive from the Wrangell-St. Elias National Park & Preserve.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2219.661388572557!2d-145.48781666904983!3d62.107306064455145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x56b58f64b4978ebd%3A0x3cb28cc48498e75!2sNorthern%20Nights%20Campground-Rv!5e0!3m2!1smy!2smm!4v1685326734027!5m2!1smy!2smm', 'USA', 'photo/c9.webp', NULL),
(4, 'Fossil Valley RV Park', '999 West Highway 40, Vernal, Utah, USA', 'Peaceful park surrounded by prehistoric and Paleolithic attractions Flaming Gorge National Recreation Area within 45 minutes\' drive Within walking distance of Vernal\'s restaurants, shops and museums.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1518.0297485676329!2d-109.54630375207208!3d40.45182009933961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874562154849287b%3A0xe0dc58922a4ba7f7!2sFossil%20Valley%20RV%20Park!5e0!3m2!1smy!2smm!4v1685326830430!5m2!1smy!2smm', 'USA', 'photo/c3.webp', NULL),
(5, 'Ettrick Valley Yurts', 'Newburgh Farm Steading, Kirkhope, Selkirk, Scottish Borders, Scotland', 'Luxury site with stream and hill views in the Scottish Borders Fishing from site; 40 minutes\' drive to 7Stanes mountain biking Shop on site; two pubs with food within a 15-minute drive.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1344.743212525575!2d-3.0723893831173585!3d55.46999703015876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48878a8c1964ef41%3A0x150cfb7148aa0ed2!2sEttrick%20Valley%20Yurts!5e0!3m2!1smy!2smm!4v1685326872666!5m2!1smy!2smm', 'Scotland', 'photo/c4.webp', NULL),
(6, 'Collierhall Farm', 'Douglas Water, Rigside, Lanark, Lanarkshire, Scotland', 'Peaceful farm setting with great views and nearby motorway access Five minutes\' drive from Cairn Lodge services; Lanark 15 minutes Pretty views over the countryside; shop within half a mile.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2254.275417195541!2d-3.79005672381081!3d55.59722020396464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4888056fc38f2e35%3A0x40bf890559c317b8!2sCollierhall%20Farm%20Caravan%20Site!5e0!3m2!1smy!2smm!4v1685326971827!5m2!1smy!2smm', 'Scotland', 'photo/c5.webp', NULL),
(7, 'Newbridge Country Park', 'Glasgow Road, Dumfries, Dumfries and Galloway, Scotland', 'Quiet, family-friendly holiday park 10 minutes’ drive from Dumfries New Abbey or Drumlanrig Castle and Gardens 20 minutes’ drive Modern showers; shop five minutes’ walk away.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1168992.4396544802!2d-5.0156114552704665!3d55.09246579999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4862b5ac353819dd%3A0x80ce24400233b338!2sNewbridge%20Country%20Park!5e0!3m2!1smy!2smm!4v1685327022881!5m2!1smy!2smm', 'Scotland', 'photo/c6.webp', NULL),
(12, 'Castle Howard Lakeside Holiday Park', 'Coneysthorpe, North Yorkshire, England, YO60 7DD', 'Well-maintained site with views over Castle Howard\'s Great Lake A 15-minute walk to Castle Howard; 15 minutes\' drive to Kirkham Abbey Fishing and dog-walking area on site; close to a café and farm shop.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1653.0231756107187!2d-0.9140491257980249!3d54.13175135218263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487ed46723c39f3d%3A0x49695b7540676ab!2sCastle%20Howard%20Lakeside%20Holiday%20Park!5e0!3m2!1smy!2smm!4v1685669770475!5m2!1smy!2smm', 'England', 'photo/england.webp', NULL),
(13, 'Bracelands Campsite', 'Bracelands Drive, Coleford, Gloucestershire, England', 'Family-friendly Gloucestershire campsite overlooking the Wye Valley Five minutes’ drive to Symonds Yat; Go Ape Beechenhurst 15 minutes Forest of Dean walks from the site; shops and pubs five minutes’ drive.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2466.540768105633!2d-2.641725770637736!3d51.81455128821961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4871ba0347c6a40b%3A0x90f0ea2a0b71b02d!2sBracelands%20Campsite!5e0!3m2!1smy!2smm!4v1685669994795!5m2!1smy!2smm', 'England', 'photo/england2.webp', NULL),
(15, 'Lady\'s Mile Holiday Park', 'Exeter Road, Dawlish, Devon, England', 'Award-winning family park close to Dawlish Warren Indoor and outdoor pool, adventure playground, soft play, gym, sauna Well-maintained shower and loo blocks.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5065.551857832498!2d-3.460604204142509!3d50.594117929919385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486d0a3783e26839%3A0xb5de490c9d5770cf!2sLady&#39;s%20Mile%20Holiday%20Park!5e0!3m2!1smy!2smm!4v1685670201777!5m2!1smy!2smm', 'England', 'photo/england4.jpg', NULL),
(16, 'Camping Fusina Tourist Village', 'Via Moranzani 93, Fusina, Venice, Venice, Italy', 'Friendly site overlooking the city of Venice A 15-minute ferry journey to St Mark\'s Square Marina, bar, restaurant, supermarket and multilingual staff on site.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2354.9229934974323!2d12.25447886814757!3d45.419599174772316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477eb0c3b8745051%3A0xd5c1d54d0f531b9d!2sCamping%20Fusina!5e0!3m2!1smy!2smm!4v1685670441841!5m2!1smy!2smm', 'Italy', 'photo/c2.jpg', NULL),
(17, 'Sivinos Camping Boutique', 'Punta, Via San Sivino, Manerba del Garda, Brescia, Italy', 'Peaceful site on the shores of Lake Garda, with direct beach access Two kilometres from Moniga del Garda; 40 minutes\' drive from Sirmione Restaurant-pizzeria and bar on site; more food within walking distance.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.9116353415743!2d10.554904374981117!3d45.53198372679191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781924b702904c3%3A0x77057bbda6176e9f!2sSivinos%20Camping%20Boutique!5e0!3m2!1smy!2smm!4v1685670563067!5m2!1smy!2smm', 'Italy', 'photo/italy2.webp', NULL),
(18, 'Camping Marelago', 'Viale dei Cigli 18, Caorle, Venice, Italy', 'A 100-metre stroll from a sandy beach; 60 kilometres from Venice Tennis, volleyball and football at sports club next door Pool, play area, bar and shop.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15347.976206633875!2d12.816225013090786!3d45.5771491377947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477bf0bf110c5dc7%3A0xdaffa8285b1a451e!2sCamping%20Marelago!5e0!3m2!1smy!2smm!4v1685670758864!5m2!1smy!2smm', 'Italy', 'photo/italy3.webp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rate` int(10) NOT NULL,
  `liked` text NOT NULL,
  `disliked` text NOT NULL,
  `site` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `rate`, `liked`, `disliked`, `site`) VALUES
(1, 'Alex', 'alex@gmail.com', 5, 'Easy. Easy to check in, easy to find a great spot. Was just the campsite that I wanted. Great spot to watch see an amazing sky filled with stars. Would recommend this small site for anyone and families too.', '- -', 'Wood Mountain Road Campground'),
(3, 'mg kyaw', 'mhkyaw1@gmail.com', 6, 'It was nice if you want to camp in thw town of Glenallen. I booked on line and still had to pay another 23 and some.change. Yes it has wifi ( if you could get on it) and yes it had showers but it wasn\'t worth.the nearly 50.00 I payed. It\'s a good place to stop but I wouldn\'t stay more than one night. Too many people and you can hear the highway traffic. I was just hoping for something more out of the way.', 'Online booking fee on top of paying for the site when I got there.', 'Northern Nights Campground and RV Park'),
(4, 'James', 'james221@gmail.com', 8, 'Clean facility, friendly staff, efficient check in. Wi-Fi worked well. No campfires, so no smoke at night. Trees provide nice shade. Level campsite.', 'Road noise is pretty loud throughout the night', 'Fossil Valley RV Park'),
(5, 'min sett', 'monmin44@gmail.com', 9, 'Friendly welcome, cleanliness of yurt, all bedding supplied, logs/firefighters for burner. Lots of nice touches.', 'Nothing.', 'Ettrick Valley Yurts'),
(6, 'Hsu Mon', 'hsumon11@gmail.com', 7, 'Quiet site at the rear of farm buildings. No other tents present when we camped. Electric shower was welcomed plus the loo/shower room was large. Good communication from the owners prior to our arrival. Wifi.', 'Very basic campsite. Only the one shower room/loo but think we were the only ones using it as only a couple of motorhomes there at the same time. Didn\'t see anyone from the farm whilst we were there. Would welcome an honesty shop of some description as we were hiking and not easily able to get supplies.', 'Collierhall Farm'),
(7, 'Min Min', 'minmin123@gmial.com', 6, 'Clean and well kept site with friendly staff. Level pitch with easy access. Good location for touring the area.', 'The shower and toilet facilities are not sufficient for the number of pitches. There is 1 toilet and shower room combined close to the pitches and this is off the games room, which is not ideal for any privacy. There was also a male and female toilet/shower close to the entrance which is quite a way from the pitches.', 'Newbridge Country Park'),
(12, 'M-Ro', 'mro22@gmail.com', 10, 'great facilities, excellent location, friendly atmosphere. Plenty of room, hot showers.\r\nOnly stayed 1 night but would have loved to increase the stay if i could. The kids loved walking the dogs around the lake. Will definitely book again.', 'none. Fantastic time had.', 'Castle Howard Lakeside Holiday Park'),
(13, 'Aye Aye', 'ayeaye112@gmailcom', 8, 'The location was beautiful. Lots of trees and greenery. The site was clean and spacious. The staff where amazing. Super helpful, informative, approachable and visible. The facilities though basic, where always clean, close by and in good repair. Pets were well controlled. Am scared of dogs. I will definitely be visiting again.', 'They were no clear sign posts for guidance around the site and outside of it. Not much activities to engage in on site.', 'Bracelands Campsite'),
(15, 'Hla Hla', 'hla9922@gmail.com', 10, 'Warmest of welcomes, friendly and helpful staff.\r\nIncredible entertainment team who are amazing with children!\r\nExtremely clean pitches, toilets and showers are immaculate.\r\nAll amenities you could possibly need on your doorstep.\r\nGreat variety of pitches to suit own individual needs.', '- -', 'Lady\'s Mile Holiday Park'),
(16, 'phyo phyo', 'phyo@gmail.com', 4, 'This site is good for the water taxi journey to Venice for the day, which seems to be what most motorists did. Short stay only recommended.', 'This site is good for the water taxi journey to Venice for the day, which seems to be what most motorists did. Short stay only recommended.', 'Camping Fusina Tourist Village'),
(17, 'Jordan', 'jordan@gmail.com', 10, 'All of it fantastic view of the lake the pitch was stunning the Facilities were absolutely A1 the best site I have stayed at.', '--', 'Sivinos Camping Boutique'),
(18, 'Chri', 'chri009@gmail.com', 7, 'Access to beach toilets showers were very clean shop very nice staff very nice.', 'Mosquitoes were rife no spraying and we got bitten to bits , despite using mosquito repellant s had to stay in caravan and it spoilt our holiday no k.', 'Camping Marelago');

-- --------------------------------------------------------

--
-- Table structure for table `rssfeed`
--

CREATE TABLE `rssfeed` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rssfeed`
--

INSERT INTO `rssfeed` (`id`, `title`, `description`, `link`) VALUES
(1, 'Camping Site Entry', 'This is entry form for new camping site.', 'http://localhost/camping_sites/pitch_form.php'),
(2, 'Review Form', 'This is review form.', 'http://localhost/camping_sites/reviewform.php'),
(3, 'Camping list ', 'This is camping list information.', 'http://localhost/camping_sites/camping_list.php'),
(4, 'Contact Form', 'This is contact form for the contact.', 'http://localhost/camping_sites/contactus.php'),
(5, 'Booking Form', 'This is booking form for booking camping site.', 'http://localhost/camping_sites/book.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `username`, `password`, `country`, `remark`) VALUES
(1, 'Aye', 'Aye', 'ayeaye@gmail.com', 'aye', '1234', 'USA', NULL),
(2, 'kyaw', 'min', 'mhks221@gmail.com', 'Min', '11111', 'Myanmar', NULL),
(3, 'Min', 'sett', 'moneumpunk44@gmail.com', 'sett', '2222', 'United Kingdom', NULL),
(4, 'Hsu', 'Aung', 'hsumonaung!@gmail.com', 'hsu', '3322', 'Switzerland', NULL),
(5, 'John', 'Smith', 'john@gmail.com', 'smith', '1122', 'Australia', NULL),
(6, 'jenny', 'x', 'jennyx@gmail.com', 'jenny', '4455', 'Egypt', NULL),
(7, 'min', 'sett', 'monmin44@gmail.com', 'sett12', '1112', 'Malaysia', NULL),
(8, 'Admin', 'Admin', 'campingworld@gmail.com', 'admin', '6828', 'Myanmar', NULL),
(9, 'Aung', 'Aung', 'aungaung@gmail.com', 'aung12', '12345', 'Myanmar', NULL),
(10, 'Phyo', 'Zaw', 'phyo@gmail.com', 'phyo', '22222', 'Belize', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitedip`
--

CREATE TABLE `visitedip` (
  `ip` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `visitedip`
--

INSERT INTO `visitedip` (`ip`, `id`) VALUES
('::1', 1),
('192.168.10.123', 2),
('192.168.10.1', 3),
('192.168.10.2', 4),
('192.168.10.5', 5),
('192.168.10.6', 6),
('192.168.1.6', 7),
('192.168.4.6', 8),
('192.168.1.1', 9),
('192.168.1.3', 10),
('192.168.1.5', 11),
('192.168.1.72', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pitch_info`
--
ALTER TABLE `pitch_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rssfeed`
--
ALTER TABLE `rssfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitedip`
--
ALTER TABLE `visitedip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pitch_info`
--
ALTER TABLE `pitch_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rssfeed`
--
ALTER TABLE `rssfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitedip`
--
ALTER TABLE `visitedip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
