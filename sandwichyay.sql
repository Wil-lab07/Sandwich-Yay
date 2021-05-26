-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 09:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandwichyay`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `NamaMenu` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Harga` int(11) NOT NULL,
  `Kategori` varchar(25) NOT NULL,
  `Gambar` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `NamaMenu`, `Deskripsi`, `Harga`, `Kategori`, `Gambar`) VALUES
(1, 'Chick-fil-A Chicken Biscuit', 'A breakfast portion of our famous boneless breast of chicken, seasoned to perfection, hand-breaded, pressure cooked in 100% refined peanut oil and served on a buttermilk biscuit baked fresh at each Restaurant.', 26900, 'Breakfast', 'Chick-fil-A_Chicken_Biscuit.jpg'),
(2, 'Chick-n-Minis', 'Bite-sized Chick-fil-A Nuggets nestled in warm, mini yeast rolls that are lightly brushed with a honey butter spread.', 34900, 'Breakfast', 'Chick-n-Minis.jpg'),
(3, 'Egg White Grill', 'A breakfast portion of grilled chicken with a hint of citrus, served on a toasted multigrain English muffin with egg whites and American cheese.', 38500, 'Breakfast', 'Egg_White_Grill.jpg'),
(4, 'Bacon, Egg & Cheese Biscuit', 'Delicious strips of smoked applewood bacon along with folded egg and cheese served on a freshly baked buttermilk biscuit.', 30900, 'Breakfast', 'Bacon_Egg&Cheese_Biscuit.jpg'),
(5, 'Sausage, Egg & Cheese Biscuit', 'A tasty pork sausage patty along with a folded egg and cheese served on a freshly baked buttermilk biscuit.', 30900, 'Breakfast', 'Sausage_Egg_Cheese_Biscuit.jpg'),
(6, 'Buttered Biscuit', 'A delicious buttermilk biscuit baked fresh at each Restaurant. Served lightly buttered or plain.', 10900, 'Breakfast', 'Buttered_Biscuit.jpg'),
(7, 'Sunflower Multigrain Bagel', 'A toasted, multigrain bagel served plain or with cream cheese.', 20900, 'Breakfast', 'Sunflower_Multigrain_Bagel.jpg'),
(8, 'Hash Browns', 'Crispy potato medallions cooked in canola oil.', 11900, 'Breakfast', 'Hash_Browns.jpg'),
(9, 'Greek Yogurt Parfait', 'Creamy, organic vanilla bean Greek yogurt with fresh berries and your choice of toppings.', 37900, 'Breakfast', 'Greek_Yogurt_Parfait.jpg'),
(10, 'Fruit Cup', 'A nutritious fruit mix made with chopped pieces of red and green apples, mandarin orange segments, fresh strawberry slices, and blueberries, served chilled. Prepared fresh daily.', 31500, 'Breakfast', 'Fruit_Cup.jpg'),
(11, 'Chicken, Egg & Cheese Bagel', 'A breakfast portion of our famous boneless breast of chicken, served on a toasted sunflower multigrain bagel, along with a folded egg and American cheese.', 39900, 'Breakfast', 'Chicken_Egg&Cheese_Bagel.jpg'),
(12, 'Hash Brown Scramble Burrito', 'A hearty morning meal of sliced Chick-fil-A Nuggets, crispy Hash Browns, scrambled eggs and a blend of Monterey Jack and Cheddar cheeses. Made fresh each morning. Rolled in a warm flour tortilla. Served with Jalape?o Salsa.', 39500, 'Breakfast', 'Hash_Brown_Scramble_Burrito.jpg'),
(13, 'Hash Brown Scramble Bowl', 'A hearty morning meal of sliced Chick-fil-A Nuggets, crispy Hash Browns, scrambled eggs and a blend of Monterey Jack and Cheddar cheeses. Made fresh each morning. Served in a convenient bowl. Served with Jalape?o Salsa.', 39500, 'Breakfast', 'Hash_Brown_Scramble_Bowl.jpg'),
(14, 'English Muffin', 'Toasted multigrain English muffin.', 11900, 'Breakfast', 'English_Muffin.jpg'),
(15, 'Bacon, Egg & Cheese Muffin', 'Delicious strips of smoked applewood bacon, folded egg and American cheese served on a toasted multigrain English muffin.', 31900, 'Breakfast', 'Bacon_Egg_&_Cheese_Muffin.jpg'),
(16, 'Sausage, Egg & Cheese Muffin', 'Savory pork sausage, freshly prepared eggs and American cheese served on a toasted multigrain English muffin.', 31900, 'Breakfast', 'Sausage_Egg&Cheese_Muffin.jpg'),
(17, 'Chick-fil-A Chicken Sandwich', 'A boneless breast of chicken seasoned to perfection, freshly breaded, pressure cooked in 100% refined peanut oil and served on a toasted, buttered bun with dill pickle chips. Also available on a multigrain bun.', 37500, 'Entrees', 'Chick-fil-A-Chicken-Sandwich.jpg'),
(18, 'Chick-fil-A Deluxe Sandwich', 'A boneless breast of chicken seasoned to perfection, freshly breaded, pressure cooked in 100% refined peanut oil and served on a toasted, buttered bun with dill pickle chips, Green Leaf lettuce, tomato and American cheese. Also available on a multigrain bun.', 44500, 'Entrees', 'Chick-fil-A_Deluxe_Sandwich.jpg'),
(19, 'Spicy Chicken Sandwich', 'A boneless breast of chicken seasoned with a spicy blend of peppers, freshly breaded, pressure cooked in 100% refined peanut oil and served on a toasted, buttered bun with dill pickle chips. Also available on a multigrain bun. ', 39900, 'Entrees', 'Spicy_Chicken_Sandwich.jpg'),
(20, 'Spicy Deluxe Sandwich', 'A boneless breast of chicken seasoned with a spicy blend of peppers, hand-breaded, pressure cooked in 100% refined peanut oil and served on a toasted, buttered bun with dill pickle chips, Green Leaf lettuce, tomato and Pepper Jack Cheese. Gluten-free bun or multigrain bun also available at an additional cost.', 46900, 'Entrees', 'Spicy_Deluxe_Sandwich.jpg'),
(21, 'Grilled Chicken Sandwich', 'A lemon-herb marinated boneless breast of chicken, grilled for a tender and juicy backyard-smoky taste, served on a toasted Multigrain bun with Green Leaf lettuce and tomato. Pairs well with Honey Roasted BBQ sauce.', 51500, 'Entrees', 'Grilled_Chicken_Sandwich.jpg'),
(22, 'Chick-fil-A Grilled Chicken Club Sandwich', 'A lemon-herb marinated boneless breast of chicken, grilled for a tender and juicy backyard-smokey taste, served on a toasted Multigrain Brioche bun with Colby Jack cheese, applewood smoked bacon, Green Leaf lettuce and tomato. Pairs well with Honey Roasted BBQ Sauce.', 65500, 'Entrees', 'Chick-fil-A_Grilled_Chicken_Club_Sandwich.jpg'),
(23, 'Chick-fil-A Nuggets', 'Bite-sized pieces of boneless chicken breast, seasoned to perfection, freshly breaded and pressure cooked in 100% refined peanut oil. Available with choice of dipping sauce.', 38500, 'Entrees', 'Chick-fil-A_Nuggets.jpg'),
(24, 'Chick-n-Strips', 'Boneless chicken tenders seasoned to perfection, freshly breaded and pressure cooked in 100% refined peanut oil.', 41900, 'Entrees', 'Chick-n-Strips.jpg'),
(25, 'Chick-fil-A Cool Wrap', 'Sliced grilled chicken breast nestled in a fresh mix of Green Leaf lettuce with a blend of shredded Monterey Jack and Cheddar cheeses, tightly rolled in a flaxseed flour flat bread. Made fresh daily. Pairs well with Avocado Lime Ranch dressing.', 62900, 'Entrees', 'Chick-fil-A_Cool_Wrap.jpg'),
(26, 'Grilled Nuggets', 'Bite-sized pieces of freshly marinated boneless breast of chicken, grilled for a tender and juicy backyard-smoky taste. Available with guest\'s choice of dipping sauce.', 45900, 'Entrees', 'Grilled_Nuggets.jpg'),
(27, 'Grilled Spicy Deluxe', 'A boneless breast of chicken marinated with a blend of peppers and grilled for a tender and spicy taste, served on a toasted multigrain brioche bun with Colby Jack cheese, Green Leaf lettuce and tomato. Served with Cilantro Lime Sauce.', 54500, 'Entrees', 'Grilled_Spicy_Deluxe.jpg'),
(28, 'Spicy Southwest Salad', 'Slices of grilled spicy chicken breast served on a fresh bed of mixed greens, topped with grape tomatoes, a blend of Monterey Jack and Cheddar cheeses, and a zesty combination of roasted corn, black beans, poblano chiles, and red bell peppers. Made fresh daily. Served with Seasoned Tortilla Strips and Chili Lime Pepitas. Pairs well with Creamy Salsa dressing.', 81900, 'Salads', 'Spicy_Southwest_Salad.jpg'),
(29, 'Cobb Salad', 'Chick-fil-A Nuggets, freshly breaded and pressure-cooked, sliced and served on a fresh bed of mixed greens, topped with roasted corn kernels, a blend of shredded Monterey Jack and Cheddar cheeses, crumbled bacon, sliced hard-boiled egg and grape tomatoes. Made fresh daily. Served with Charred Tomato and Crispy Red Bell Peppers. Pairs well with Avocado Lime Ranch dressing.', 79900, 'Salads', 'Cobb_Salad.jpg'),
(30, 'Market Salad', 'Sliced grilled chicken breast served on a fresh bed of mixed greens, topped with crumbled blue cheese and a mix of red and green apples, strawberries and blueberries. Made fresh daily. Served with Harvest Nut Granola, Roasted Nut Blend and Light Balsamic Vinaigrette dressing (or guest\'s choice of dressing).', 81900, 'Salads', 'Market_Salad.jpg'),
(31, 'Chick-fil-A Waffle Potato Fries', 'Waffle-shaped potatoes with the skin. Cooked in canola oil until crispy outside and tender inside.', 19500, 'Sides', 'Chick-fil-A_Waffle_Potato_Fries.jpg'),
(32, 'Side Salad', 'A fresh bed of mixed greens, topped with a blend of shredded Monterey Jack and Cheddar cheeses and grape tomatoes. Made fresh daily. Served with Charred Tomato, Crispy Red Bell Peppers and guest\'s choice of dressing.', 31500, 'Sides', 'Side_Salad.jpg'),
(33, 'Chicken Noodle Soup', 'Shredded Chick-fil-A chicken breast, chopped carrots and celery with egg noodles in a hearty broth. Served with Saltine crackers.', 29500, 'Sides', 'Chicken_Noodle_Soup.jpg'),
(34, 'Chicken Tortilla Soup', 'Shredded chicken breast with navy and black beans in a white creamy soup base with a perfect blend of vegetables and spicy heat. Topped off with seasoned corn tortilla strips. Seasonal item only.', 41500, 'Sides', 'Chicken_Tortilla_Soup.jpg'),
(35, 'Greek Yogurt Parfait', 'Creamy, organic vanilla bean Greek yogurt with fresh berries and your choice of toppings.', 37900, 'Sides', 'Greek_Yogurt_Parfait.jpg'),
(36, 'Fruit Cup', 'A nutritious fruit mix made with chopped pieces of red and green apples, mandarin orange segments, fresh strawberry slices, and blueberries, served chilled. Prepared fresh daily.', 31500, 'Sides', 'Fruit_Cup.jpg'),
(37, 'Buddy Fruits Apple Sauce', 'Buddy Fruits brand applesauce is a 100% all natural combination of fresh apples, apple juice and cinnamon, blended smooth and served in a fun, squeezable 3.2 oz. child-size pouch.', 19900, 'Sides', 'Buddy_Fruits_Apple_Sauce.jpg'),
(38, 'Kale Crunch Side', 'A blend of Curly Kale and Green Cabbage tossed with an Apple Cider and Dijon Mustard vinaigrette, all topped off with salted, crunchy Roasted Almonds', 19500, 'Sides', 'Kale_Crunch_Side.jpg'),
(39, 'Mac & Cheese', 'A classic macaroni and cheese recipe featuring a special blend of cheeses including Parmesan, Cheddar, and Romano. Baked in-restaurant to form a crispy top layer of baked cheese.', 31500, 'Sides', 'Mac&Cheese.jpg'),
(40, 'Waffle Potato Chips', 'Kettle-cooked waffle cut potato chips lightly sprinkled with Sea Salt.', 17900, 'Sides', 'Waffle_Potato_Chips.jpg'),
(41, 'Nuggets Kid\'s Meal', 'Includes a 4-count or 6-count of Chick-fil-A Nuggets, a choice of a small Side Item (Cinnamon Apple Sauce, Waffle Potato FriesT, or Fruit Cup), milk or juice, and a special surprise.', 50900, 'Kid\'s Meals', 'Nuggets_Kids_Meal.jpg'),
(42, 'Chick-n-StripsT Kid\'s Meal', 'Includes a 1-count or 2-count of Chick-fil-A Chick-n-Strips, a choice of a small Side Item (Buddy Fruits Apple Sauce, Mac & Cheese, Chick-fil-A Waffle Potato Fries, or Fruit Cup), a kid\'s size drink and a prize.', 49900, 'Kid\'s Meals', 'Chick-n-Strips_Kids_Meal.jpg'),
(43, 'Grilled Nuggets Kid\'s Meal', 'Includes a 4-count or 6-count of Chick-fil-A Grilled Nuggets, a choice of a small Side Item (Buddy Fruits Apple Sauce, Mac & Cheese, Chick-fil-A Waffle Potato Fries, or Fruit Cup), a kid\'s size drink and a prize.', 56500, 'Kid\'s', 'Grilled_Nuggets_Kids_Meal.jpg'),
(44, 'Chocolate Milkshake', 'Our creamy Milkshakes are hand-spun the old-fashioned way each time and feature delicious Chick-fil-A Icedream dessert, topped with whipped cream and a cherry (except when served via delivery).', 32500, 'Treats', 'Chocolate_Milkshake.jpg'),
(45, 'Cookies & Cream Milkshake', 'Our creamy Milkshakes are hand-spun the old-fashioned way each time and feature delicious Chick-fil-A Icedream dessert, topped with whipped cream and a cherry (except when served via delivery).', 32500, 'Treats', 'Cookies&Cream_Milkshake.jpg'),
(46, 'Strawberry Milkshake', 'Our creamy Milkshakes are hand-spun the old-fashioned way each time and feature delicious Chick-fil-A Icedream dessert, topped with whipped cream and a cherry (except when served via delivery).', 32500, 'Treats', 'Strawberry_Milkshake.jpg'),
(47, 'Vanilla Milkshake', 'Our creamy Milkshakes are hand-spun the old-fashioned way each time and feature delicious Chick-fil-A Icedream dessert, topped with whipped cream and a cherry (except when served via delivery).', 32500, 'Treats', 'Vanilla_Milkshake.jpg'),
(48, 'Frosted Coffee', 'A hand-spun treat that combines a custom blend of cold-brewed coffee with our signature Icedream dessert.', 32500, 'Treats', 'Frosted_Coffee.jpg'),
(49, 'Frosted Lemonade', 'This refreshing treat is a hand-spun combination of Chick-fil-A Lemonade (or Diet Lemonade) and our signature Icedream dessert.', 32500, 'Treats', 'Frosted_Lemonade.jpg'),
(50, 'Chocolate Chunk Cookie', 'Cookies have both semi-sweet dark and milk chocolate chunks, along with wholesome oats.', 12900, 'Treats', 'Chocolate_Chunk_Cookie.jpg'),
(51, 'Freshly-Brewed Iced Tea Sweetened', 'Freshly-brewed each day from a blend of tea leaves. Available sweetened with real cane sugar.', 16900, 'Drinks', 'Freshly-Brewed_Iced_Tea_Sweetened.jpg'),
(52, 'Chick-fil-A Lemonade', 'Classic lemonade using three simple ingredients: real lemon juice-not from concentrate, cane sugar, and water. Diet Lemonade is sweetened with Splenda No Calorie Sweetener', 11900, 'Drinks', 'Chick-fil-A_Lemonade.jpg'),
(53, 'Coca-Cola', 'Fountain beverage. A product of The Coca-Cola Company.', 16900, 'Drinks', 'Coca-Cola.jpg'),
(54, 'Dr Pepper', 'Fountain beverage. Product of Keurig Dr Pepper, Inc.', 16900, 'Drinks', 'Dr_Pepper.jpg'),
(55, 'DASANI Bottled Water', 'Purified water that is carefully designed and enhanced with minerals for a pure, fresh taste. DASANI is a registered trademark of The Coca-Cola Company.', 17900, 'Drinks', 'DASANI_Bottled_Water.jpg'),
(56, 'Honest Kids Apple Juice', 'Honest Kids Apple Juice (juice box with straw).', 13900, 'Drinks', 'Honest_Kids_Apple_Juice.jpg'),
(57, 'Simply Orange', '100% pure-squeezed, pasteurized Orange Juice.', 24500, 'Drinks', 'Simply_Orange.jpg'),
(58, '1% Chocolate Milk', '', 13900, 'Drinks', 'Chocolate_Milk.jpg'),
(59, '1% White Milk', '', 13900, 'Drinks', 'White_Milk.jpg'),
(60, 'Coffee', 'Our specialty grade, farmer-direct coffee is a custom blend made from arabica beans grown at high altitudes. With tasting notes of smooth caramel and a nutty finish, our proprietary blend is created to be delicious on its own or to accommodate any cream and sugar preferences. Chick-fil-A Coffee is uniquely crafted to pair with our menu and is sourced by THRIVE Farmers, a farmer-direct coffee company that enriches the lives and communities of those who grow it. Available all day in Regular or Decaf.', 16900, 'Drinks', 'Coffee.jpg'),
(61, 'Iced Coffee', 'Handcrafted daily, made with a custom blend of cold-brewed coffee and 2% milk, sweetened with pure cane sugar and served over ice. Our coffee beans are sourced by THRIVE Farmers, a farmer-direct coffee company that enriches the lives and communities of those who grow it. Available all day in Original or Vanilla.', 26900, 'Drinks', 'Iced_Coffee.jpg'),
(62, 'Gallon Beverages', 'Gallon beverage filled with your choice of tea or lemonade', 105000, 'Drinks', 'Gallon_Beverages.jpg'),
(63, '5 lb Bag of Ice', '5 lb bag of ice cubes', 15000, 'Drinks', '5_lb_Bag_of_Ice.jpg'),
(64, 'Chick-fil-A Diet Lemonade', 'Classic lemonade using three simple ingredients: real lemon juice-not from concentrate, cane sugar, and water. Diet Lemonade is sweetened with Splenda No Calorie Sweetener.', 19900, 'Drinks', 'Chick-fil-A_Diet_Lemonade.jpg'),
(65, 'Freshly-Brewed Iced Tea Unsweetened', 'Freshly-brewed each day from a blend of tea leaves. Available unsweetened.', 16900, 'Drinks', 'Freshly-Brewed_Iced_Tea_Unsweetened.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `IDOrder` int(11) NOT NULL,
  `IDMenu` int(11) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`IDOrder`, `IDMenu`, `Qty`) VALUES
(77, 18, 1),
(78, 17, 1),
(79, 44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `IDCust` int(11) NOT NULL,
  `TransactionDate` date NOT NULL,
  `Total` int(11) NOT NULL,
  `Token` varchar(5) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `uniqueCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `IDCust`, `TransactionDate`, `Total`, `Token`, `Status`, `uniqueCode`) VALUES
(77, 28, '2021-03-14', 44500, 'xfqEk', 'Done', 'n50Qv'),
(78, 28, '2021-03-14', 37500, 'xfqEk', 'Done', 'mqV6T'),
(79, 29, '2021-03-14', 32500, '1ZFsn', 'Not Done', 'MTmc9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(75) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `BirthDate` date DEFAULT NULL,
  `Gender` varchar(25) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `LastName`, `Email`, `Password`, `BirthDate`, `Gender`, `Role`) VALUES
(27, 'William', 'Chandra', 'william.chandra@student.umn.ac.id', '$2y$10$vt5Hyzr/pncJzN.hKSViZeSSNgT7b0PxfdblWRShMj75J7TvwpapK', '2001-07-13', 'male', 2),
(28, 'Bryan', 'Kenneth', 'bryan.kenneth@student.umn.ac.id', '$2y$10$aJxPBWKA43nu58mwjTKSduIt/znh.Y6cKuo4q1IIuJh6aBPnw.Qb.', '1111-11-11', 'Male', 1),
(29, 'Jin', 'Sakai', 'jin_sakai07@gmail.com', '$2y$10$9NWfZfwx9Ija..wjcfBXYOOja5sXdw1Lu8lhubGgdpLWPly.mfWpK', '2001-12-07', 'Male', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `IDOrder` (`IDOrder`),
  ADD KEY `IDMenu` (`IDMenu`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCust` (`IDCust`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`IDOrder`) REFERENCES `orders` (`ID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`IDMenu`) REFERENCES `menu` (`ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`IDCust`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
