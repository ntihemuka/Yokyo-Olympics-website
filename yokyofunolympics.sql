-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 10:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yokyofunolympics`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `slot` datetime DEFAULT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `slot`, `published`, `created_at`) VALUES
(2, 28, 7, 'Take Boxing classes', '1590260617_men-fighting-in-the-ring-2581662.jpg', '&lt;p&gt;Take a boxing class by mike at the local&lt;/p&gt;&lt;p&gt;Guanjuu Gym&lt;/p&gt;', '2020-05-05 10:01:00', 1, '2020-05-04 14:28:24'),
(4, 28, 8, 'Explore Yokyo\'s breath taking sights', '1590260233_Sardinia_attr_11.jpg', '&lt;p&gt;The worlds best kept secrets&lt;/p&gt;', '2020-05-07 10:00:00', 1, '2020-05-04 14:30:42'),
(5, 28, 20, 'Learn The lost Art of Samurai', '1588599478_samurai.jpg', '&lt;p&gt;learn to fight man&lt;/p&gt;', '2020-01-04 00:00:00', 1, '2020-05-04 16:37:58'),
(6, 28, 20, 'learn to swim', '1588629623_person-swimming-on-body-of-water-863988.jpg', '&lt;p&gt;yum hum&lt;/p&gt;', '2020-07-04 00:00:00', 1, '2020-05-04 17:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `frequently_asked`
--

CREATE TABLE `frequently_asked` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frequently_asked`
--

INSERT INTO `frequently_asked` (`id`, `name`, `description`) VALUES
(1, 'Questions and answers', '<p>all the answeres</p>'),
(4, 'Yokyo Geographic location', '<p>yes it is</p>'),
(5, 'What are the Fun olympics', '<p>yes</p>'),
(6, 'Activities and Leisure', '<p>lots of things</p>'),
(7, ' Currency exchange', ''),
(8, 'Featured sports', '<p>what are they</p>'),
(9, 'Other', '<p>questions regarding any unspecific subject</p>');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(14, 28, 7, 'Rafael Gives Raul the shin', '1588532796_action-adult-athlete-athletes-598631 (2).jpg', '&lt;p&gt;The fight of our liveOn New Year\'s Eve TBS host one of their traditional end of year cards, headlined by Japanese star &lt;a href=&quot;https://www.asianboxing.info/kazuto-ioka.html&quot;&gt;&lt;strong&gt;Kazuto Ioka&lt;/strong&gt;&lt;/a&gt;, who defends his WBO Super Flyweight title against mandatory challenger &lt;strong&gt;Jeyvier Cintron&lt;/strong&gt;. That bout is on of 3 world title bouts on the card, with WBO Flyweight champion &lt;a href=&quot;https://www.asianboxing.info/kosei-tanaka.html&quot;&gt;&lt;strong&gt;Kosei Tanaka&lt;/strong&gt;&lt;/a&gt; defending his title against Chinese challenger &lt;strong&gt;Wulan Tuolehazi&lt;/strong&gt; and WBO female Super Flyweight champion &lt;strong&gt;Miyo Yoshida &lt;/strong&gt;defending her title against &lt;strong&gt;Li Ping Shi&lt;/strong&gt;. The poster is a pretty uninspired given the quality of the show, and it\'s a real shame that the poster didn\'t match up to the quality of the show.&lt;/p&gt;', 1, '2020-05-03 20:21:30'),
(15, 28, NULL, 'Tia Tumi for Gold Medal', '1588533207_Celebration.jpg', '&lt;p&gt;The &lt;strong&gt;CrossFit Games&lt;/strong&gt; are an annual athletic competition owned and operated by &lt;a href=&quot;https://en.wikipedia.org/wiki/CrossFit&quot;&gt;CrossFit, Inc.&lt;/a&gt; and currently sponsored by &lt;a href=&quot;https://en.wikipedia.org/wiki/Reebok&quot;&gt;Reebok&lt;/a&gt;. The competition has been held every summer since 2007. Athletes at the Games compete in workouts they learn about days, hours, or minutes beforehand. The workouts consist mostly of an assortment of standard aerobic, weightlifting, and gymnastics movements, as well as some additional surprise elements that are not part of the typical CrossFit regimen, such as &lt;a href=&quot;https://en.wikipedia.org/wiki/Obstacle_course&quot;&gt;obstacle courses&lt;/a&gt;, ocean swimming, softball throwing, or ascending a pegboard.Winners of the CrossFit Games earn the cash prizes and the title of &quot;Fittest on Earth.&quot;&lt;/p&gt;', 1, '2020-05-03 21:10:20'),
(17, 28, 10, 'John Kudrow cycles to victory', '1588533283_high-angle-view-of-people-on-bicycle-248547.jpg', '&lt;p&gt;&lt;strong&gt;Cycling&lt;/strong&gt;, also called &lt;strong&gt;bicycling&lt;/strong&gt; or &lt;strong&gt;biking&lt;/strong&gt;, is the use of &lt;a href=&quot;https://en.wikipedia.org/wiki/Bicycle&quot;&gt;bicycles&lt;/a&gt; for &lt;a href=&quot;https://en.wikipedia.org/wiki/Transport&quot;&gt;transport&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Recreation&quot;&gt;recreation&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Physical_exercise&quot;&gt;exercise&lt;/a&gt; or &lt;a href=&quot;https://en.wikipedia.org/wiki/Sport&quot;&gt;sport&lt;/a&gt;. People engaged in cycling are referred to as &quot;cyclists&quot;, &quot;bicyclists&quot;, or &quot;bikers&quot;. Apart from two-wheeled bicycles, &quot;cycling&quot; also includes the riding of &lt;a href=&quot;https://en.wikipedia.org/wiki/Unicycle&quot;&gt;unicycles&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Tricycle&quot;&gt;tricycles&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Quadracycle&quot;&gt;quadracycles&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Recumbent_bicycle&quot;&gt;recumbent&lt;/a&gt; and similar &lt;a href=&quot;https://en.wikipedia.org/wiki/Human-powered_transport&quot;&gt;human-powered vehicles&lt;/a&gt; cycles were introduced in the 19th century and now number approximately one billion worldwide.&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-5&quot;&gt;[5]&lt;/a&gt; They are the principal means of transportation in many parts of the world.Cycling is widely regarded as a very effective and efficient mode of transportation&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-6&quot;&gt;[6]&lt;/a&gt;&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-7&quot;&gt;[7]&lt;/a&gt; optimal for short to moderate distances.Bicycles provide numerous benefits in comparison with motor vehicles, including the sustained physical exercise involved in cycling, easier parking, increased maneuverability, and access to roads, &lt;a href=&quot;https://en.wikipedia.org/wiki/Bike_path&quot;&gt;bike paths&lt;/a&gt; and rural trails. Cycling also offers a reduced consumption of &lt;a href=&quot;https://en.wikipedia.org/wiki/Fossil_fuel&quot;&gt;fossil fuels&lt;/a&gt;, less &lt;a href=&quot;https://en.wikipedia.org/wiki/Air_pollution&quot;&gt;air&lt;/a&gt; or &lt;a href=&quot;https://en.wikipedia.org/wiki/Noise_pollution&quot;&gt;noise pollution&lt;/a&gt;, and much reduced &lt;a href=&quot;https://en.wikipedia.org/wiki/Traffic_congestion&quot;&gt;traffic congestion&lt;/a&gt;. These lead to less financial cost to the user as well as to society at large (negligible damage to roads, less road area required). By fitting bicycle racks on the front of buses, transit agencies can significantly increase the areas they can serve.&lt;/p&gt;&lt;p&gt;In addition, cycling provides a variety of health benefits. The World Health Organization (WHO) states that cycling can reduce the risk of cancers, heart disease, and diabetes that are prevalent in sedentary lifestyles.&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-WHO-9&quot;&gt;[9]&lt;/a&gt; Cycling on &lt;a href=&quot;https://en.wikipedia.org/wiki/Stationary_bicycle&quot;&gt;stationary bikes&lt;/a&gt; have also been used as part of rehabilitation for lower limb injuries, particularly after hip surgery.&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-:1-10&quot;&gt;[10]&lt;/a&gt; Individuals who cycle regularly have also reported mental health improvements, including less perceived stress and better vitality.&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-:2-11&quot;&gt;[11]&lt;/a&gt;&lt;/p&gt;&lt;p&gt;Among the disadvantages of cycling are the requirement of bicycles (excepting tricycles or quadracycles) to be balanced by the rider in order to remain upright, the reduced protection in crashes in comparison to motor vehicles,&lt;a href=&quot;https://en.wikipedia.org/wiki/Cycling#cite_note-12&quot;&gt;[12]&lt;/a&gt; often longer travel time (except in densely populated areas), vulnerability to weather conditions, difficulty in transporting passengers, and the fact that a basic level of fitness is required for cycling moderate to long distances&lt;/p&gt;', 1, '2020-05-03 21:14:12'),
(18, 28, 18, 'John Slater back with a vengeance', '1588531667_kelly-slater-broken-foot-x-rays.jpg', '&lt;p&gt;&lt;strong&gt;Surfing&lt;/strong&gt; is a &lt;a href=&quot;https://en.wikipedia.org/wiki/List_of_surface_water_sports&quot;&gt;surface water sport&lt;/a&gt; in which the wave rider, referred to as a surfer, rides on the forward part, or face, of a moving &lt;a href=&quot;https://en.wikipedia.org/wiki/Wind_wave&quot;&gt;wave&lt;/a&gt;, which usually carries the surfer towards the &lt;a href=&quot;https://en.wikipedia.org/wiki/Shore&quot;&gt;shore&lt;/a&gt;. Waves suitable for surfing are primarily found in the &lt;a href=&quot;https://en.wikipedia.org/wiki/Ocean&quot;&gt;ocean&lt;/a&gt;, but can also be found in &lt;a href=&quot;https://en.wikipedia.org/wiki/Lake_surfing&quot;&gt;lakes&lt;/a&gt; or &lt;a href=&quot;https://en.wikipedia.org/wiki/River_surfing&quot;&gt;rivers&lt;/a&gt; in the form of a &lt;a href=&quot;https://en.wikipedia.org/wiki/Standing_wave&quot;&gt;standing wave&lt;/a&gt; or &lt;a href=&quot;https://en.wikipedia.org/wiki/Tidal_bore&quot;&gt;tidal bore&lt;/a&gt;. However, surfers can also utilize artificial waves such as those from boat wakes and the waves created in artificial &lt;a href=&quot;https://en.wikipedia.org/wiki/Wave_pool&quot;&gt;wave pools&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;Mick Corbett at &lt;a href=&quot;https://en.wikipedia.org/wiki/Cowaramup_Bombora&quot;&gt;Cow Bombie&lt;/a&gt; in &lt;a href=&quot;https://en.wikipedia.org/wiki/Western_Australia&quot;&gt;Western Australia&lt;/a&gt;&lt;/p&gt;&lt;p&gt;The term &lt;i&gt;surfing&lt;/i&gt; refers to the act of riding a wave with a board, regardless of the stance used. There are several types of boards. The &lt;a href=&quot;https://en.wikipedia.org/wiki/Polynesian_culture&quot;&gt;native peoples of the Pacific&lt;/a&gt;, for instance, surfed waves on &lt;a href=&quot;https://en.wikipedia.org/wiki/Alaia&quot;&gt;alaia&lt;/a&gt;, paipo, and other such craft, and did so on their belly and knees. The modern-day definition of surfing, however, most often refers to a surfer riding a wave standing on a &lt;a href=&quot;https://en.wikipedia.org/wiki/Surfboard&quot;&gt;surfboard&lt;/a&gt;; this is also referred to as stand-up surfing.&lt;/p&gt;&lt;p&gt;Another prominent form of surfing is &lt;a href=&quot;https://en.wikipedia.org/wiki/Body_boarding&quot;&gt;body boarding&lt;/a&gt;, when a surfer rides the wave on a bodyboard, either lying on their belly, drop knee (one foot and one knee on the board), or sometimes even standing up on a body board. Other types of surfing include knee boarding, surf matting (riding inflatable mats), and using foils. &lt;a href=&quot;https://en.wikipedia.org/wiki/Body_surfing&quot;&gt;Body surfing&lt;/a&gt;, where the wave is surfed without a board, using the surfer\'s own body to catch and ride the wave, is very common and is considered by some to be the purest form of surfing. The closest form of body surfing using a board is a handboard which normally has one strap over it to fit one hand in.&lt;/p&gt;&lt;p&gt;Three major subdivisions within stand-up surfing are &lt;a href=&quot;https://en.wikipedia.org/wiki/Standup_paddleboarding&quot;&gt;stand-up paddling&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Surfboard#Long_board&quot;&gt;long boarding&lt;/a&gt; and &lt;a href=&quot;https://en.wikipedia.org/wiki/Surfboard#Short_board&quot;&gt;short boarding&lt;/a&gt; with several major differences including the board design and length, the riding style, and the kind of wave that is ridden.&lt;/p&gt;', 1, '2020-05-03 21:15:41'),
(19, 28, 18, 'I hope it don\'t POP!', '1590256400_group-of-people-having-fun-1305095.jpg', '&lt;p&gt;&quot;&lt;strong&gt;Baby Got Back&lt;/strong&gt;&quot; is a 1992 &lt;a href=&quot;https://en.wikipedia.org/wiki/Hip_hop&quot;&gt;hip hop&lt;/a&gt; song written and recorded by &lt;a href=&quot;https://en.wikipedia.org/wiki/United_States&quot;&gt;American&lt;/a&gt; rapper &lt;a href=&quot;https://en.wikipedia.org/wiki/Sir_Mix-a-Lot&quot;&gt;Sir Mix-a-Lot&lt;/a&gt;, which appeared on his album &lt;a href=&quot;https://en.wikipedia.org/wiki/Mack_Daddy&quot;&gt;&lt;i&gt;Mack Daddy&lt;/i&gt;&lt;/a&gt;. The song samples the 1986 &lt;a href=&quot;https://en.wikipedia.org/wiki/Detroit_techno&quot;&gt;Detroit techno&lt;/a&gt; single &quot;Technicolor&quot; by &lt;a href=&quot;https://en.wikipedia.org/wiki/Juan_Atkins&quot;&gt;Channel One&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;At the time of its original release, the song caused controversy with its outspoken and blatantly sexual lyrics about women, as well as specific references to the &lt;a href=&quot;https://en.wikipedia.org/wiki/Cultural_history_of_the_buttocks&quot;&gt;female buttocks&lt;/a&gt; which some people found objectionable. The song\'s music video was briefly banned by &lt;a href=&quot;https://en.wikipedia.org/wiki/MTV&quot;&gt;MTV&lt;/a&gt;.&lt;a href=&quot;https://en.wikipedia.org/wiki/Baby_Got_Back#cite_note-Songfacts-1&quot;&gt;[1]&lt;/a&gt;&lt;/p&gt;&lt;p&gt;It was the second best-selling song in the US in 1992, behind &lt;a href=&quot;https://en.wikipedia.org/wiki/Boyz_II_Men&quot;&gt;Boyz II Men&lt;/a&gt;\'s &quot;&lt;a href=&quot;https://en.wikipedia.org/wiki/End_of_the_Road_(Boyz_II_Men_song)&quot;&gt;End of the Road&lt;/a&gt;&quot;. In 2008, it was ranked number 17 on &lt;a href=&quot;https://en.wikipedia.org/wiki/VH1&quot;&gt;VH1&lt;/a&gt;\'s 100 Greatest Songs of Hip Hop.&lt;a href=&quot;https://en.wikipedia.org/wiki/Baby_Got_Back#cite_note-2&quot;&gt;[2]&lt;/a&gt;&lt;/p&gt;&lt;p&gt;The song debuted at number 75 on the &lt;a href=&quot;https://en.wikipedia.org/wiki/Billboard_Hot_100&quot;&gt;&lt;i&gt;Billboard&lt;/i&gt; Hot 100&lt;/a&gt; chart dated April 11, 1992 and hit number one twelve weeks later. The single spent five weeks at the top of the chart. thats true&lt;/p&gt;', 1, '2020-05-03 21:17:28'),
(21, 28, 12, 'Woman amazes world with earth shattering split?', '1588893572_healthy-person-woman-sport-4077.jpg', '&lt;p&gt;The common motif in those different parallels is that the wise judge announces an absurd procedure, which is reasonable in some perverse way: Splitting the baby, according to the principle of compromise; Or a tug war, in which one can possibly assume that the true mother will be motivated to pull harder. But this procedure is actually a concealed emotional test, designed to force each woman to decide whether her compassion to the baby overpowers her will to win.&lt;/p&gt;&lt;p&gt;There is indirect evidence that the story was widespread in ancient times in the western world too. A Greek &lt;a href=&quot;https://en.wikipedia.org/wiki/Papyrus&quot;&gt;papyrus&lt;/a&gt; fragment, dating from the beginning of the second century AD, includes a fragmented reference to an ancient legal case which is similar to the judgment of Solomon. The writer ascribes the story to Phliliskos of &lt;a href=&quot;https://en.wikipedia.org/wiki/Miletos&quot;&gt;Miletos&lt;/a&gt;, living in the fourth century BC. A &lt;a href=&quot;https://en.wikipedia.org/wiki/Fresco&quot;&gt;fresco&lt;/a&gt; found in the &quot;House of the Physician&quot; in &lt;a href=&quot;https://en.wikipedia.org/wiki/Pompeii&quot;&gt;Pompeii&lt;/a&gt; depicts &lt;a href=&quot;https://en.wikipedia.org/wiki/Pygmies&quot;&gt;pygmies&lt;/a&gt; introducing a scene similar to the biblical story. Some think that the fresco relates directly to the biblical story,while according to others it represents a parallel tradition.&lt;/p&gt;&lt;p&gt;Several suggestions for the genre of the biblical story have been raised, beyond its characterization as a folktale of a known type. &lt;a href=&quot;https://en.wikipedia.org/wiki/Edward_Lipinski_(orientalist)&quot;&gt;Edward Lipinski&lt;/a&gt; suggests that the story is an example of &quot;king\'s bench tales&quot;, a subgenre of the &lt;a href=&quot;https://en.wikipedia.org/wiki/Wisdom_literature&quot;&gt;wisdom literature&lt;/a&gt; to which he finds parallels in &lt;a href=&quot;https://en.wikipedia.org/wiki/Sumerian_literature&quot;&gt;Sumerian literature&lt;/a&gt;.&lt;/p&gt;&lt;p&gt;Scholars have pointed out that the story resembles the modern &lt;a href=&quot;https://en.wikipedia.org/wiki/Detective_fiction&quot;&gt;detective story&lt;/a&gt; genre. Both king Solomon and the reader are confronted with some kind of a juridical-detective riddle. &lt;a href=&quot;https://en.wikipedia.org/wiki/Meir_Sternberg&quot;&gt;Meir Sternberg&lt;/a&gt; notes that two genres merge in the story: A riddle and a test; The juridical dilemma, which is the riddle, also constitutes a test for the young king: If he will solve it he will be acknowledged to possess divine wisdom.Stuart Lasine classifies the story as a law-court riddle.&lt;a href=&quot;https://en.wikipedia.org/wiki/Judgment_of_Solomon#cite_note-16&quot;&gt;[16]&lt;/a&gt;&lt;/p&gt;', 1, '2020-05-04 22:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `frequent_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 1,
  `reply` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `frequent_id`, `title`, `body`, `published`, `reply`, `created_at`) VALUES
(12, 28, 1, 'how long will they last', '<p>hmm</p>', 1, 'they will last till the end of time', '2020-05-07 22:51:00'),
(27, 28, 1, 'covid and yokyo', 'will covid stop the fun olympics?', 1, 'it is most likely that yokyo 2020 will have to be stoped', '2020-05-08 02:22:23'),
(28, 33, 1, 'I need help!', 'Please help me find what I need', 1, NULL, '2020-05-17 14:00:31'),
(29, 35, 1, 'Who Lost', 'Who lost the boxing games ', 1, 'The olympics of Fun have no winners or loosers', '2020-05-17 16:12:41'),
(31, 28, 1, 'is tokyo same as yokyo', 'is it ', 1, 'no yokyo is not the same city.', '2020-05-20 22:24:02'),
(34, 37, 1, 'what should i wear at yokyo', 'is yokyo cold ? what should i wear', 1, NULL, '2020-05-23 16:55:50'),
(35, 28, 8, 'Is Yokyo an official Olympic site', 'is it or isnt it', 1, NULL, '2020-05-23 19:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `image`, `description`) VALUES
(7, 'Boxing', '1588636616_1_NIZ2rmu-_FJGnnj9D7ibig.jpeg', '<p>Boxing is a combat sport in which two people, usually wearing protective gloves, throw punches at each other for a predetermined amount of time in a boxing ring. Amateur boxing is both an Olympic and Commonwealth Games sport and is a standard fixture in most international games—it also has its own World Championships.</p>'),
(8, 'Fencing', '1588636890_06-08-2016-Fencing-Szasz-Hungary-thumbnail.webp', '<p>Fencing is a group of three related combat sports. The three disciplines in modern fencing are the foil, the épée, and the sabre; winning points are made through the weapon\'s contact with an opponent.</p>'),
(9, 'Skiing', '1588636971_st-moritz-skier.webp', '<p>Skiing is a means of transport using skis to glide on snow. Variations of purpose include basic transport, a recreational activity, or a competitive winter sport. Many types of competitive skiing events are recognized by the International Olympic Committee, and the International Ski Federation.&nbsp;</p>'),
(10, 'Cycling', '1588637079_cycling-home-products-1024x600px-1.jpg', '<p>Cycling, also called bicycling or biking, is the use of bicycles for transport, recreation, exercise or sport. People engaged in cycling are referred to as \"cyclists\", \"bicyclists\", or \"bikers\". love it</p>'),
(11, 'Full Marathon', '1588637892_nyc_marathon_runner_1050x700.jpg', '<p>The <strong>marathon</strong> is a long-distance race with an official distance of 42.195 kilometres (approximately 26 miles 385 yards), usually run as a road race. ... The <strong>marathon</strong> can be completed by running or with a run/walk strategy. There are also wheelchair divisions.</p>'),
(12, 'Sprinting', '1588637876_hamstring+navan+physio+meath+.jpg', '<p>Sprinting is running over a short distance in a limited period of time.It is used in many sports that incorporate running, typically as a way of quickly reaching a target or goal, or avoiding or catching an opponent.</p>'),
(16, 'Cross Fit', '1588638662_tia-clair-toomey-Crossfit.jpg', '<p>the fittest on earth</p>'),
(18, 'Swiming', '1588638788_person-swimming-on-body-of-water-863988.jpg', '<p>very dangerous</p>'),
(20, 'Free Swim', '1590256951_swimmers-on-body-water-3772419.jpg', '<p>Open water ocean swimming</p>'),
(28, 'Classes and Activities', '1590260325_Sardinia_attr_11.jpg', '<p>explore the local scene</p>');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `slot` date DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `name`, `activity_id`, `slot`, `timestamp`) VALUES
(32, 28, 'ntihemuka joel', 2, '2022-07-30', '2020-05-20 16:38:00'),
(35, 28, 'shimono', 6, '2020-07-04', '2020-05-20 17:54:41'),
(36, 28, 'joel', 6, '2020-07-04', '2020-05-20 17:57:29'),
(40, 28, 'Gary unsinker', 6, '2020-07-04', '2020-05-20 19:01:31'),
(41, 28, 'Pomerimus bush', 4, '2020-06-25', '2020-05-20 19:30:12'),
(42, 28, 'Mrs Trump', 6, '2020-07-04', '2020-05-23 12:32:58'),
(43, 28, 'Lau Mang', 4, '2020-06-25', '2020-05-23 12:33:57'),
(46, 37, 'yoyo madiba', 5, '2020-01-04', '2020-05-23 13:54:08'),
(47, 28, 'Marimar', 6, '0000-00-00', '2020-05-23 19:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(28, 1, 'Joel', 'joel@yokyo.com', '$2y$10$hR.9.7.2wNyDuGmywXjvS.djCMH5K1KxURZV7v52vVpMIXDYuve6m', '2020-05-03 08:46:20'),
(33, 0, 'Anna', 'annawright@westnairobischool.org', '$2y$10$DHGorGR5WWJFJokBpl59fOBJsbaF5xEppUA8d2a6lZOK6XkX.759e', '2020-05-17 10:47:40'),
(35, 0, 'Reuben', 'gitongareuben0@gmail.com', '$2y$10$I5Yld7SrG2fKwpnTMuB8r.Fgv86J38wfzWZG10PDOIRfoBdZl7wty', '2020-05-17 11:23:48'),
(37, 0, 'yoyo', 'yoyo@email.com', '$2y$10$RDigdsWkH6ywYeuiiCO5fOKz3jeMcsPns6G6or5qxXCCtYAdUSQkK', '2020-05-23 13:53:34'),
(42, 1, 'Dr Anna Bamboozle', 'amani.social@amaniafrica.org', '$2y$10$2NJE9bIXxnVI1u3qE2VF1uH5wIaVHc3HV/aJ35S5AseQqjxp3GdEa', '2020-05-23 17:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `topic_id`, `title`, `file`, `body`, `published`, `created_at`) VALUES
(1, 28, 12, 'The run of our life', '1590256325_production ID_3943396.mp4', '&lt;p&gt;run for the money and the things you need&lt;/p&gt;', 1, '2020-05-05 10:25:57'),
(2, 28, 12, 'The truth is the Truth', '1588681774_video (3).mp4', '&lt;p&gt;sports are my life man&lt;/p&gt;', 1, '2020-05-05 12:29:34'),
(3, 28, 9, 'sky is the yokyo', '1588681867_Close-up Skiing Footage.mp4', '&lt;p&gt;the world\'s fastes skkii lodge&lt;/p&gt;', 1, '2020-05-05 12:31:08'),
(4, 28, 20, 'Kayak at Yokyo city', '1588681941_Couple\'s Kayaking.mp4', '&lt;p&gt;this is about the love of all things kayak&lt;/p&gt;', 1, '2020-05-05 12:32:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `frequently_asked`
--
ALTER TABLE `frequently_asked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `question_id` (`frequent_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `frequently_asked`
--
ALTER TABLE `frequently_asked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `activities_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`frequent_id`) REFERENCES `frequently_asked` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `videos_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
