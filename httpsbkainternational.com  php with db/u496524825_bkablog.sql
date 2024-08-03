-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2024 at 08:48 AM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_bkablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `keyword` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `metadata` text NOT NULL,
  `image` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `keyword`, `title`, `message`, `metadata`, `image`, `slug`) VALUES
(62, 'Banana Powder Exporters in Belgium', 'Banana Powder Exporters in Belgium', '<a href=\"https://bkainternational.com/\">Banana powder Exporters in Belgium</a> source their raw materials from the best banana producing worldwide, ensuring top-notch quality. They utilize advanced drying and processing techniques to retain the natural flavor, and nutritional content of the bananas. this meticulous approach has made Belgian banana powder a preferred choice for use in smoothies, use for baby food, baked goods, and health supplements. what sets Belgian exporters apart is their commitment to sustainability and stringent quality control measures. They adhere to international standards, providing products that are organic, non-GMO, and free from additives. This dedication not only meets the growing consumer demand for clean, healthy ingredients but also supports sustainable farming practices.', 'Banana Powder Exporters in Belgium is provide good quality product which is better for your health you can increase the immunity of body with powder qwickly \r\n\r\n\r\n\r\n\r\n\r\n', '', 'powder-in-belgium'),
(63, 'Banana Powder Exporters in Canada', 'Banana Powder Exporters in Canada', '<a href=\"https://bkainternational.com/\">Banana Powder Exporters in Canada</a> is a yellow tinted translucent powder and it will leave a warm cast on use. Translucent powder is supposed to set your makeup without being visible. Compact is usually tinted and should be used to set your creams in your shade. I prefer tinted loose powder to compact as it gives me more freedom to apply in the way I like it. Banana Powder Exporters in Canada offers a wealth of options known for their reliability, quality, and ethical practices. Partnering with Belgian banana powder exporters ensures a steady supply of premium product backed by country reputation so choose better company for import your banana powder who is deliver the consignment on time in your country', 'Banana Powder Exporters in Canada In your country,  you want Supply banana powder in May be in excess quantity and earning money Bkainternational Available \r\n', '', 'powder-in-canada'),
(64, 'Spinach Powder Exporters in Austria', 'Spinach Powder Exporters in Austria', 'Austria is gaining recognition for its high-quality agricultural products, and spinach powder is no exception. <a href=\"https://bkainternational.com/spinach-powder.html\">Spinach powder Exporters in Austria</a> are renowned for their commitment to excellence, ensuring that their products meet stringent international standards. The nutrient-rich spinach grown in Austria is carefully processed to retain its vibrant green color and nutritional value, making it a sought-after ingredient in health supplements, smoothies, and culinary applications worldwide. Austrian exporters prioritize sustainable farming practices, ensuring that the spinach is free from harmful pesticides and chemicals. With a focus on quality and sustainability, spinach powder exporters in Austria are establishing a strong presence in the global market. They offer a reliable supply chain, timely deliveries, and competitive pricing, making them the preferred choice for businesses seeking premium spinach powder. Whether for health-conscious consumers or food manufacturers, Austrian spinach powder exporters are the ideal partners for high-quality, nutrient-dense spinach powder.', 'introduction of our product Spinach Powder Exporters in Austria , Spinach Powder use to make make supplements to weight loss and reduce your body calories etc .\r\n', '', 'spinach-in-austria'),
(67, 'Spinach Powder Exporters in Sweden', 'Spinach Powder Exporters in Sweden', 'Spinach powder, catering to the growing global demand for natural and nutritious food products. known for its rich nutrient profile and versatility, is gaining popularity in various culinary and health applications.  <a href=\"https://bkainternational.com/spinach-powder.html\">Spinach Powder Exporters in Sweden</a> renowned for their high-quality standards, sustainable farming practices, and advanced processing  for manufacturers and consumers seeking premium ingredients. The commitment to quality and sustainability positions Sweden as a leading exporter in the global spinach powder market. retains its vibrant color, essential vitamins, and minerals, making it a preferred choice for health-conscious consumers worldwide. \r\n\r\n', 'Spinach Powder Exporters in Sweden offer best natural Spinach powder product  which is increase your immunity and reduce your body fat and calories  easily.\r\n', '', 'powder-in-sweden'),
(68, 'Beetroot Powder Exporters in United Kingdom ', 'Beetroot Powder Exporters in United Kingdom ', 'Looking for reliable <a href=\"https://bkainternational.com/beetroot-powder.html\">Beetroot Powder Exporters in United Kingdom</a> The UK boasts several top-tier suppliers known for their high-quality beetroot powder, made from 100% pure, organic beetroots. These exporters ensure that their products meet stringent quality standards, providing a rich source of vitamins, minerals, and antioxidants. Ideal for enhancing smoothies, soups, and health drinks, beetroot powder from the UK is gaining popularity for its nutritional benefits and vibrant color. Whether you are a retailer or a health-conscious consumer, partnering with these trusted exporters guarantees access to premium beetroot powder. Choose UK exporters for their commitment to quality, sustainability, and customer satisfaction.', 'Beetroot powder is often advertised as a superfood , Beetroot Powder Exporters in United Kingdom best country . you can Make  juice also with Beetroot Powder ,\r\n', '', 'beetroot-in-united kingdom '),
(69, 'Beetroot Powder Exporters in Thailand', 'Beetroot Powder Exporters in Thailand', '<a href=\"https://bkainternational.com/beetroot-powder.html\">Beetroot Powder Exporters in Thailand</a>  juice have been associated with numerous health benefits, including improved blood flow, lower blood pressure, and increased exercise performance. beetroots are delicious raw but more frequently cooked or pickled. beetroot are providing high fiber minerals and vitamins you can not get easily this drink in your country, iron has many important functions in your body. It’s necessary for the transport of oxygen in red blood cells. beetroot powder can manage your blood pressure also in up and down and mange they can manage,\r\n<b>Brain Benefit :</b>Particularly, beets have been shown to improve blood flow to the frontal lobe of the brain, an area associated with higher level thinking like decision making and working memory', 'Beetroot Powder Exporters in Thailand Beetroot Powder is best powder to make like liquid product can add color and nutrition to many foods and drink makes,\r\n', '', 'beetroot-in-thailand'),
(70, 'Moringa Powder Exporters in Vietnam', 'Moringa Powder Exporters in Vietnam', 'Prevention of cancer, macular degeneration and cystic fibrosis: Moringa contains 46 types of antioxidants, especially vitamin C and vitamin A. These are extremely important antioxidants for human health. These antioxidants help neutralize the destructive effects of free radicals, <a href=\"https://bkainternational.com/moringa-powder.html\">Moringa Powder Exporters in Vietnam</a> thereby protecting us from cancer and degenerative diseases like macular degeneration and cystic fibrosis. good for muscles, cartilage, bones, skin and blood: Moringa leaves are rich in amino acids. It contains 18 amino acids, including 8 essential amino acids (isoleucine, leucine, lysine, methionine, phenylalanine, threonine, tryptophan, valine) so this plant contains a \"perfect\" protein and is a very rare plant in the plant world.', 'Moringa Powder Exporters in Vietnam this powder use to make medicine you can use this powder that will keep many months without refrigeration, need contact us\r\n', '', 'moringa-in-vietnam'),
(71, 'Moringa Powder Exporters in France', 'Moringa Powder Exporters in France', 'Consuming moringa powder is proven to be safe, even at higher levels. Daily dosage should be limited to the equivalent of 70 grams of moringa leaves per day or 11 teaspoons of moringa powder, <a href=\"https://bkainternational.com/moringa-powder.html\">Moringa Powder Exporters in France</a> in this powder no bad side effects have linked to high doses of flavonoids from plant-based food. moringa tree is native to the south of the Himalayan Mountains in northern India and grown around the world. It is widely used as food and medicine, moringa powder we can store for long time without refrigerator this powder use for so many medicine like asthma, skin cancer much more', 'Discover high Quality service in of Moringa Powder Exporters in France choose best website our dealer who is provide your product timely,  bkainternational', '', 'moringa-in-france'),
(72, 'Moringa Powder Exporters in USA', 'Moringa Powder Exporters in USA', 'Looking for premium <a href=\"https://bkainternational.com/moringa-powder.html\">Moringa Powder Exporters in USA</a> ? At Bkainternational we specialize in providing high-quality Moringa powder to clients across the country. Sourced from the finest Moringa farms, our powder is rich in nutrients and perfect for a variety of applications, including dietary supplements and natural health products. With a commitment to quality and sustainability, we ensure that our Moringa powder meets the highest standards and is delivered with reliability and efficiency. Whether your Source a business seeking a dependable supplier or looking to enhance your product offerings, we are your trusted partner for top-notch Moringa powder in the USA. Contact us today to learn more about our exporting services.', 'Moringa Powder Exporters in USA Moringa powder is very famous all over the world. this moringa  powder can use for make all type expensive product and medicine\r\n', '', 'moringa-in-usa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
