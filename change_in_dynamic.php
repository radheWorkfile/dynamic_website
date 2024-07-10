
<!-- database change -->
ALTER TABLE `admin_menu` ADD `hero_section` INT(2) NOT NULL COMMENT '0 off| 1 on' AFTER `testimonial`;
<!--  -->

CREATE TABLE `admin_hero_section` (
  `id` int(2) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_id` int(2) NOT NULL,
  `child_submenu_id` int(2) NOT NULL,
 
  `text` text NOT NULL,
  `image` text NOT NULL,
  `button_url` text DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `button_color` varchar(50) DEFAULT NULL,
  `status` int(2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

<!--  -->
ALTER TABLE `admin_hero_section` CHANGE `id` `id` INT(2) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);
<!--  -->
ALTER TABLE `admin_hero_section` ADD `header` VARCHAR(50) NOT NULL AFTER `child_submenu_id`;

<!--  -->