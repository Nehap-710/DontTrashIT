-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 08:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donttrashit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'NehaP', 'nehapattankar101@gmail.com', 'admin710');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `comment`, `post_id`, `created_at`) VALUES
(1, 3, 'This is awesome', 1, '2022-05-02 12:11:22'),
(2, 4, 'Fabulous!!!', 2, '2022-05-02 12:11:22'),
(3, 4, 'Wonderfull', 2, '2022-05-02 12:11:22'),
(4, 1, 'Wonderfull!!', 3, '2022-05-02 12:33:53'),
(5, 5, 'Great Very Insightful!!', 5, '2022-05-03 16:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `post_id`, `image`) VALUES
(1, 1, '3.png'),
(2, 2, '2.png'),
(3, 3, '4.png'),
(4, 4, '1.png'),
(5, 4, '12.png'),
(6, 5, '10.png'),
(7, 5, '6.png'),
(8, 6, '6.png'),
(9, 0, 'plastic_blog.png'),
(10, 8, 'plastic_blog.png'),
(11, 9, '8.png'),
(12, 10, '11.png'),
(13, 10, '12.png'),
(14, 11, '7.png');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `user_id`) VALUES
(1, 'Plastic Ban in the United Kingdom', 'I was standing at a river, holding a black trash bag looking around for any spots of land that did not have trash. I was attending a trash clean-up and was picking up trash in a certain area where no green land or blue water was seen. There were only colors of plastics gleaming in the sunlight. That got me thinking: what can we do without plastic? We need plastic to drink smoothies, eat pasta, and lots of other things we do daily. The UK government is trying to reduce plastics used by reducing litter and environmental impacts. So, they banned plastic straws, drink stirrers, and cotton buds from the sale and use from April 2020. I think this was the right thing to do because of oceans and water that are covered with plastic and other types of trash. This plastic can harm wildlife in ways we can’t imagine. Instead of plastic utensils, we can use paper straws, reusable cloth bags, and biodegradable stirrers. We need to limit the amount of plastic we toss into the oceans. I hope that we can all implement a plastic ban in our cities and work with each other to make this happen.\r\n\r\n\r\n\r\n\r\n', '2022-05-02 07:50:48', 2),
(2, 'The Guardian switched to biodegradable wrapping', 'The famous newspaper, The Guardian, has been using biodegradable wrapping instead of plastic wrapping. They had used materials like potato starch and other biodegradable materials. Potato starch is used in recipes and in wallpaper adhesive. I think that this is awesome because all companies should be using this material to replace our plastic, for example in sealed fruit bags and grocery bags in our local stores. This would turn around the plastic problem around if all the plastic-making companies produce this compound.\r\nTons of plastic are used every week. Many cities are banning plastic, so we need to change the plastics we use because it can harm the environment in a very severe way. We should all be committed to reducing our reliance on plastic', '2022-05-02 07:50:48', 1),
(3, 'Peek Into the Life of a Fish', 'Imagine you are a clown fish that goes by the name of Nemo. You are hungry, and you flap your flippers to move through the water. Then, Nemo(you) see a ship white object, and you swim to it. When you put it in your mouth, you don’t know it yet, but it is a bottle cap. Later, when you are studied, scientists see loads of plastic filling your stomach.\r\nOcean plastics, get caught up in currents and circulate the globe, but the plastic swirling in the Great Lakes has nowhere to go so it “fills up” the lakes. This material usually comes from nearby sources. The chunks break down into microplastics and build up in Cleveland and Chicago’s shoes.\r\nThe tiny plastics travel through a fish’s digestive tract within two days, but most of the time, plastic almost always gets stuck inside the fish’s body. Microplastics appear to function like other small particles, about the size of sand particles and can look like fish food for decades. This plastic we use, it is stuck in our environment. We need to cut our plastic use way back and become more aware of what we recycle and what we buy.', '2022-05-02 08:15:42', 2),
(4, 'The Problem With Plastics and Our Oceans', 'We use tons of plastic. It is in everything, from packaging to foam cushions, to the dashboard of the car. An enormous amount of it ends up in the ocean. Plastic is made of toxic chemicals like phthalates (pronounced as thah-lates), flame retardants, bisphenol A (BPA). As the plastic breaks down more toxins adhere. Floating toxic microplastics are often ingested by marine life, which is then consumed by us.\r\nYou can refuse to use single-use plastics in May and beyond.\r\nAudit your consumption\r\nNot just the days or weeks before July, any time of the year is the best time to audit your plastic consumption. Look at the items you regularly purchase. Look at the items around in your room, in your home, on your work desk. Look at the items that use the most plastics. Do a life cycle assessment of these items. Is there something that you can buy in bulk? Is there an alternative to those plastics?\r\nResearch for alternatives\r\nWe have heard it zillion times by now — use reusable shopping bags, cutlery, coffee cups, bottles, straws, kitchen towels, menstrual cups, dryer balls, lunch boxes, and so on. The question to ask yourself here is — Have I chosen to use a reusable version of the items I use every day? If not, then why have I not? Find out the local stores promoting zero waste, ethical and sustainable products, sustainable packaging options, Bring Your Own Containers (BYOC) program.\r\n* I carry my containers to Bulkbarn and refill them.\r\nRemember to Refuse\r\nWhen the cashier at a grocery store asks you for the number of plastic bags you need, say None! (Remember to go prepared with reusable bags). When you order a drink in a restaurant, refuse the plastic straw. When you are at home and you order food online, refuse the cutlery.\r\n* For the first two days, my tiffin service lady packed my meals in a single-use plastic container. Thereupon, I called her up to explain my reasons to refuse the single-use plastics. Now my meals come in reusable lunch boxes.\r\nStart the conversation\r\nTalk about #PlasticFreeJuly with your partner, children, parents, friends, neighbours, colleagues. Tell your grocery store cashier about it. Post it on your social media accounts. Start a conversation.\r\nRemember new habits take time to establish\r\nIt takes a while to establish new habits. You cannot go from zero to a hundred in a day or a week. Take one step at a time. Sometimes it can be frustrating. Be proud of yourself. The key to lasting habits is focusing on creating a new identity first — identify yourself as a person who chooses to live a sustainable lifestyle or any tag that comforts and motivates you. Essential is for you to stay committed to the path.\r\n', '2022-05-02 08:15:42', 1),
(5, 'Plastic Pollution and Our Environment', 'Plastic usage has become a major problem. It’s a massive understatement to just talk about plastic pollution and not talk about the benefits it has brought us. To put things in perspective, plastics save lives daily by providing safe and clean drinking water in bottles, and in the form of airbags, incubators, and helmets.\r\nPlastics help reduce fuel consumption and subsequent pollution from cars and airplanes, by reducing weight when used, as compared to legacy materials. Plastics have saved the wildlife, as, before its use, piano keys or billiard balls were made of elephant ivory. Plastics also help increase the shelf life of fresh food providing nourishment to billions of humans and reducing food resource stress on societies.\r\nThe fact is, we cannot stop using plastics as there literally isn’t an alternative which is lighter, easy to mass-produce, and comparatively stronger pound to pound. It is arguably one invention that helped humanity reach modernity faster. The problem with plastics is mostly centered around the disposal. Plastics, since they are produced from oil and natural gas, have a tough time breaking down in the natural environment. It can take as long as 400 years for a plastic litter to break down in nature.\r\nPlastics Are Everywhere, And That’s A Problem\r\nThe global output of plastics stood at a staggering 359 million tonnes in 2018 as compared to 1.5 million tonnes in 1950. 8.3 billion tonnes of plastic products have been produced since 1950, out of which almost 6.3 billion tonnes ended up as waste. Only 9% has been recycled, 12% was incinerated and 79% ended up in landfills and nature. It is worth noting that the beauty of this material is that almost all plastic produced can be recycled. But currently, as you see by the numbers, it’s clearly not recycled.\r\nA portion of the plastics discarded in landfills makes its way to the oceans where it gets broken up into smaller pieces called microplastics due to natural elements like sunlight and ocean current. It then gets eaten by the fishes and follows its way up the food chain to humans. It is now understood that microplastics are present everywhere. Literally from the highest point on Mount Everest to the deepest spot in the Mariana trench. By 2050 there will be more plastics in the ocean than the fishes.\r\n90% of the bottled waters and 70% of tap water contain microplastics. This particular fact should bring seriousness to the picture. This means that at least 70% of us are drinking water contaminated with microplastics. There are serious health concerns associated with it. Microplastics act as magnets for toxic elements while in the environment and nature. The implications are still not known entirely, one thing is for sure that it causes hormonal changes in humans and is really harmful.\r\nThe plastic waste crisis stems from two major problems, abundant single-use plastics and a low percentage of recycling. 50% of the entire plastic production is of single-use plastics. That’s roughly 180 million tonnes of plastic products we use only once every year. And, we don’t even recycle one-tenth of the plastics we produce.\r\nJust by cutting down on the usage of single-use plastics like bags and bottles, there can be a massive reduction in the global plastic waste footprint. Use bags made out of reusable and natural materials. But if you can’t do that, make sure your plastic waste is being disposed of responsibly to get recycled. That way whatever plastic you use, be it single-use or otherwise stands a better chance of getting used again in the form of new plastic products.\r\nPlastic Hurts The Growth Of Communities\r\nYes, you read it right. Plastic waste is directly hurting communities around the globe. From causing massive amounts of pollution in rivers rendering shortage of fresh water for daily use; to causing a steady reduction of tourist arrivals to coastal communities where tourism is a major source of revenue. Not to mention the health hazards caused due to waste collection and the spread of diseases like malaria. The excess waste in rivers is also credited with the annual flooding of regions close to it, destroying livelihoods and wealth.\r\nThailand is probably a startling example of such problems. The Mekong river which flows through several countries including Thailand is estimated to be one of the most polluted rivers in the world. Mostly because of the 40,000 tonnes of plastic it carries to the oceans every year. It has caused a plastic waste nightmare in the communities surrounding it.\r\nThe Mekong isn’t the only river colluded with plastic waste. Rivers around the world have the same problem to varying degrees. Organizations like TerraCycle Global Foundation and Plastic Pollution Coalition are working with governments and local communities in clearing the waterways from plastic pollution and in creating awareness. The source of the problem is ultimately poor waste disposal practices in the communities. For comparison, Japan uses a far greater amount of plastics yearly as compared to Thailand, but due to better waste disposal programs and recycling, the global footprint of Japan in plastic pollution is far less. This again emphasizes the difference responsible disposal of plastics can have.\r\n\r\nOceans and marine life are facing greater life-threatening problems due to plastic pollution\r\nPlastic Harms the Environment and the Wildlife\r\nWell, this is widely known that plastic pollution hurts not only us but also the environment and the wildlife in it. Especially the ecosystems in the oceans and seas. Marine life has been the worst hit by the plastic waste crisis.\r\nAlmost 8 million tonnes of plastic escapes into our oceans causing all sorts of problems. From directly endangering marine life as fishes ingest microplastics causing starvation and death; to eroding coral reefs and ecosystems as large piles of it block sunlight and oxygen from reaching the bottom. Around 600 species of marine life are estimated to be affected by this problem. And almost 90% of the world’s seabirds have fragments of plastic in their stomachs, compared to 5% in 1960.\r\nIt is the clearest evidence of plastics moving up the food chain eventually reaching our plates as well. In an absurd event, huge mountains of plastic waste washed into the sea are, for the first time, creating trash islands off of the shore disrupting marine life and ecosystems altogether. Millions of animals die every year because of it. This includes land-based animals like elephants, hyenas, zebras, tigers, camels, cattle, and other large mammals.\r\nAlong with all these, the majority of plastic waste which goes into landfills is steadily increasing the toxicity and fragments of plastic on the topsoil. Organizations like Ocean Conservancy, Surfrider Foundation, and Oceana are working steadily towards preserving ocean ecosystems and reducing human impact. A healthy marine ecosystem is essential in many ways from food to economies and businesses which depend on it like fishing. Without a healthy marine ecosystem, the general environment gets affected causing problems not only in the waters but on land and in the air too.\r\nThe Future Is Hopeful Though\r\nEven though we’ve been late in recognizing these problems, there are increasing reasons to be hopeful about the future. Technology and human effort have shown considerable headway in tackling this global crisis.\r\nFrom the invention of biodegradable bags alternatives derived from food waste and natural oils which look like traditional plastic bags; to the discovery of bacteria that readily decompose plastics in a matter of days; and mycelium based plastic alternatives which are derived out of nature; technology is shifting gears to accelerate a resolution to these problems.\r\nSweden is a great example of a community that has put greater emphasis on recycling. Swedish communities recycled 46% of the plastic waste as compared to the 30% they had targeted for the year. Not only this, but they are also pioneers in recycling other types of daily use items like glass and paper as well. The credit of this revolution goes to policy changes and subsequent behavioral changes about waste disposal within the community.\r\nThere are solutions out there, all we need to do is reach out and incorporate them into our lives. But the process starts with awareness and grows through sustainable changes. Let’s make sure that we do our bit.\r\nReuse. Recycle.\r\n', '2022-05-02 08:19:09', 1),
(6, 'Why is plastic pollution so harmful?', '“The real story (of plastic) starts as soon as oil and gas are extracted from the ground and continues long after plastic waste enters the ocean and other ecosystems. Not only is plastic production a major source of greenhouse-gas emissions; it also releases a wide range of other chemicals into the environment, much of which ends up in creeks, rivers, oceans, our lungs and stomachs.”\r\nWe listed the high-level takeaways on the solutions to our plastic obsession.\r\n1. Disposing of plastics carefully.\r\n2. Consideration of other materials, rather than plastic.\r\n3. Encourage manufacturers and their supply chains to change their distribution and delivery systems towards refillable and reusable systems, or at least biodegradable packing and packaging.\r\n4. Better waste-collection and processing systems.', '2022-05-02 08:19:09', 2),
(8, 'More Recycling Won\'t Solve Plastic Pollution', 'The only thing worse than being lied to is not knowing you’re being lied to. It’s true that plastic pollution is a huge problem, of planetary proportions. And it’s true we could all do more to reduce our plastic footprint. The lie is that blame for the plastic problem is wasteful consumers and that changing our individual habits will fix it.\r\n\r\nRecycling plastic is to saving the Earth what hammering a nail is to halting a falling skyscraper. You struggle to find a place to do it and feel pleased when you succeed. But your effort is wholly inadequate and distracts from the real problem of why the building is collapsing in the first place. The real problem is that single-use plastic—the very idea of producing plastic items like grocery bags, which we use for an average of 12 minutes but can persist in the environment for half a millennium—is an incredibly reckless abuse of technology. Encouraging individuals to recycle more will never solve the problem of a massive production of single-use plastic that should have been avoided in the first place.\r\n\r\nAs an ecologist and evolutionary biologist, I have had a disturbing window into the accumulating literature on the hazards of plastic pollution. Scientists have long recognized that plastics biodegrade slowly, if at all, and pose multiple threats to wildlife through entanglement and consumption. More recent reports highlight dangers posed by absorption of toxic chemicals in the water and by plastic odors that mimic some species’ natural food.', '2022-05-03 06:43:22', 1),
(9, 'Plastic Pollution: The Human Crisis', 'While many of us might be familiar with the environmental impacts of plastic pollution, there’s still another part of the problem that needs to be addressed: its effects on humans. The negative consequences of this problem are most clearly seen in developing countries.\r\n\r\nThere is a huge disparity between the situation in developed and developing countries (Source). Let’s look at an example: for every 30 seconds in the UK, there is enough plastic waste generated to fill 2 double-decker buses. On the other hand, in developing countries, there’s enough plastic waste generated to fill 30 double-decker buses (Source).\r\n\r\nAs it turns out, there is a strong correlation between poverty and plastic pollution. In fact, over 70% of plastic waste that enters the oceans comes from developing countries in Asia (Source).\r\n', '2022-05-03 16:52:12', 5),
(10, 'The world just took a step toward ending plastic pollution. Now let’s seize the moment.', 'We’ve all seen shocking images of beaches choked with plastic litter, turtles eating plastic bags or marine mammals entangled in discarded plastic fishing gear. Almost every marine species is affected by plastic in some way. But just as shocking is the plastic pollution we can’t see: in some regions, including the Mediterranean, the East China and Yellow seas, and the Arctic, concentrations of tiny microplastics have already exceeded thresholds beyond which significant ecological risks occur.\r\n\r\nAnd if we don’t act now, the problem will only get worse. Plastic production is expected to more than double by 2040, which could mean the amount of plastic debris in the oceans quadrupling by 2050. By compounding other risks like climate change and overfishing, unchecked plastic pollution will drive extinctions and ecosystem collapse.\r\n\r\nNo single country can solve this global crisis alone. But a legally binding global treaty could make a huge difference, by establishing ambitious goals and a robust framework for achieving them.\r\n\r\nHaving common rules and regulations, harmonized standards and clear definitions will create a level playing field and ensure every country and every business comes on board. It’s an opportunity to offer positive incentives for those nations that take action to eliminate plastic pollution, and to hold to account those that don’t.\r\n\r\nTo tackle pollution effectively, the treaty needs to incorporate the full life cycle of plastics. Of course we need better waste management to stop plastic leaking into nature. But we also need to reduce the amount of virgin plastic produced and used, which means addressing everything from product design to consumer habits. A global plastics treaty can play an important role in accelerating the shift to a circular economy.\r\n\r\nIt’s also important that a global treaty respects the rights of the informal waste sector. Up to 20 million people work as waste pickers, and they’re responsible for more than half of all plastic recycling globally. The global treaty is an opportunity to support and build on this vital work.\r\n\r\nThe UNEA’s resolution is a major step toward turning a global treaty into reality, but it is only the start. We need to seize the momentum and keep pushing for urgent action. Every day that we delay, more plastic enters the ocean — where it will stay for hundreds or even thousands of years.\r\n\r\nAt WWF, we’ll continue to support ongoing negotiations for a strong, ambitious, legally binding treaty. Importantly, we’ll be supporting governments from the developing world to make sure their perspectives are heard and incorporated into any agreement. And we’ll continue to work with progressive businesses to build the case for a strong treaty that delivers on the goal of a circular economy.\r\n\r\nWe’ll also keep reminding governments how much this issue matters to our world and to everyone who cares for it. In this, we’re grateful to all of you who have supported our campaign so far. Each and every one of you should be proud of what you’ve achieved.\r\n\r\nNow let’s turn the tide on plastic pollution, once and for all.', '2022-05-03 17:03:31', 5);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `result_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `result` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `result_date`, `result`, `user_id`) VALUES
(1, '2022-05-03 08:51:40', 'More than required Harmfull Plastic Usage', 2),
(2, '2022-05-03 08:52:38', 'Less Harmful Plastic Usage', 1),
(3, '2022-05-03 17:16:24', 'Less Harmful Plastic Usage', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `email`, `password`, `contact`, `dt`) VALUES
(1, 'Neha Pattankar', 'nehapattankar@gmail.com', 'Pid19208', '9619838858', '0000-00-00 00:00:00'),
(2, 'Tripti Nayak', 'triptinayak@gmail.com', 'TripNeha', '8850031378', '0000-00-00 00:00:00'),
(3, 'Kartik Parmar', 'kartikparmar@gmail.com', 'kartik12', '9324676465', '2022-05-02 13:44:39'),
(4, 'Lian Sequira', 'lians1208@gmail.com', 'LianNeha', '9321537058', '2022-05-02 13:44:39'),
(5, 'Vinay Pattankar', 'vinaypattankar@gmail.com', 'NehaVinu', '9321537058', '2022-05-03 22:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
