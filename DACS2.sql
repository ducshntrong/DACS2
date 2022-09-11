CREATE TABLE `Role` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20)
);

CREATE TABLE `User` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `fullname` varchar(50),
  `email` varchar(150),
  `phone_number` varchar(20),
  `address` varchar(200),
  `password` varchar(32),
  `role_id` int,
  `created_at` datetime,
  `updated_at` datetime,
  `deleted` int
);

CREATE TABLE `Category` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100)
);

CREATE TABLE `Product` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `category_id` int,
  `title` varchar(250),
  `price` int,
  `discount` int,
  `size` varchar(20),
  `brabding` varchar(20),
  `type_product` varchar(30),
  `thumbnail` varchar(500),
  `description` longtext,
  `created_at` datetime,
  `updated_at` datetime,
  `deleted` int
);

CREATE TABLE `Galery` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int,
  `thumbnail` varchar(500)
);

CREATE TABLE `FeedBack` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `fullname` varchar(50),
  `email` varchar(250),
  `phone_number` varchar(20),
  `comment` varchar(1000),
  `created_at` datetime,
  `updated_at` datetime
);

CREATE TABLE `Checkout` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `fullname` varchar(50),
  `email` varchar(150),
  `phone_number` varchar(20),
  `address` varchar(200),
  `note` varchar(1000),
  `checkout_date` datetime,
  `status` int,
  `total_money` int
);

CREATE TABLE `Checkout_Details` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `checkout_id` int,
  `product_id` int,
  `price` int,
  `num` int,
  `total_money` int
);

ALTER TABLE `User` ADD FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

ALTER TABLE `Checkout_Details` ADD FOREIGN KEY (`checkout_id`) REFERENCES `Checkout` (`id`);

ALTER TABLE `Checkout_Details` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Galery` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Checkout` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);
