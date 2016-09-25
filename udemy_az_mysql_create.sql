CREATE TABLE `ud_courses` (
	`id` int(11) NOT NULL,
	`title` varchar(255) NOT NULL,
	`headline` varchar(255) NOT NULL,
	`description` TEXT NOT NULL,
	`created_time` TIMESTAMP NOT NULL,
	`subcategory_id` int(3) NOT NULL,
	`createdby_id` int(6) NOT NULL,
	`slug_url` varchar(255) NOT NULL,
	`lang_id` int(2) NOT NULL,
	`level_id` int(2) NOT NULL,
	`image` varchar(255) NOT NULL,
	`status` bool NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `students` (
	`id` int(11) NOT NULL,
	`name` varchar(50) NOT NULL,
	`surname` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL UNIQUE,
	`password` varchar(16) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `levels` (
	`id` int(2) NOT NULL,
	`level` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `languages` (
	`id` int(2) NOT NULL,
	`language` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `teachers` (
	`id` int(6) NOT NULL,
	`name` varchar(50) NOT NULL,
	`surname` varchar(50) NOT NULL,
	`age` int(3) NOT NULL,
	`job_title` varchar(50) NOT NULL,
	`bigraphy` TEXT NOT NULL,
	`email` varchar(50) NOT NULL UNIQUE,
	`facebook_link` varchar(50) NOT NULL UNIQUE,
	`linkedin_link` varchar(50) NOT NULL,
	`twitter_link` varchar(50) NOT NULL UNIQUE,
	`website_link` varchar(50) NOT NULL,
	`youtube_link` varchar(50) NOT NULL,
	`profil_image` varchar(50) NOT NULL,
	`password` varchar(16) NOT NULL,
	`phone_number` varchar(16) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `lectures` (
	`id` int(11) NOT NULL,
	`section_id` int(11) NOT NULL,
	`order` int(10) NOT NULL,
	`lecture_name` varchar(100) NOT NULL,
	`lecture_link` varchar(100) NOT NULL,
	`lecure_text` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `subcategories` (
	`id` int(3) NOT NULL,
	`sb_ct_name` varchar(30) NOT NULL,
	`sb_ct_url` varchar(50) NOT NULL,
	`ct_id` int(2) NOT NULL,
	`sb_ct_icon` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` int(2) NOT NULL,
	`ct_name` varchar(30) NOT NULL,
	`ct_url` varchar(50) NOT NULL,
	`ct_icon` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `watchings` (
	`id` int(11) NOT NULL,
	`course_id` int(11) NOT NULL,
	`student_id` int(11) NOT NULL,
	`geting_cr_time` TIMESTAMP NOT NULL,
	`cr_rating` int(1) NOT NULL,
	`cr_feedback` TEXT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Questions_Answers` (
	`id` int(11) NOT NULL,
	`lecture_id` int(11) NOT NULL,
	`user_id` int(11) NOT NULL,
	`title` varchar(255) NOT NULL,
	`text` TEXT NOT NULL,
	`parent_id` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `sections` (
	`id` int(11) NOT NULL,
	`order` int(10) NOT NULL,
	`section_name` varchar(100) NOT NULL,
	`course_id` int(11) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `ud_courses` ADD CONSTRAINT `ud_courses_fk0` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories`(`id`);

ALTER TABLE `ud_courses` ADD CONSTRAINT `ud_courses_fk1` FOREIGN KEY (`createdby_id`) REFERENCES `teachers`(`id`);

ALTER TABLE `ud_courses` ADD CONSTRAINT `ud_courses_fk2` FOREIGN KEY (`lang_id`) REFERENCES `languages`(`id`);

ALTER TABLE `ud_courses` ADD CONSTRAINT `ud_courses_fk3` FOREIGN KEY (`level_id`) REFERENCES `levels`(`id`);

ALTER TABLE `lectures` ADD CONSTRAINT `lectures_fk0` FOREIGN KEY (`section_id`) REFERENCES `sections`(`id`);

ALTER TABLE `subcategories` ADD CONSTRAINT `subcategories_fk0` FOREIGN KEY (`ct_id`) REFERENCES `categories`(`id`);

ALTER TABLE `watchings` ADD CONSTRAINT `watchings_fk0` FOREIGN KEY (`course_id`) REFERENCES `ud_courses`(`id`);

ALTER TABLE `watchings` ADD CONSTRAINT `watchings_fk1` FOREIGN KEY (`student_id`) REFERENCES `students`(`id`);

ALTER TABLE `Questions_Answers` ADD CONSTRAINT `Questions_Answers_fk0` FOREIGN KEY (`lecture_id`) REFERENCES `lectures`(`id`);

ALTER TABLE `Questions_Answers` ADD CONSTRAINT `Questions_Answers_fk1` FOREIGN KEY (`user_id`) REFERENCES `students`(`id`);

ALTER TABLE `Questions_Answers` ADD CONSTRAINT `Questions_Answers_fk2` FOREIGN KEY (`parent_id`) REFERENCES `Questions_Answers`(`id`);

ALTER TABLE `sections` ADD CONSTRAINT `sections_fk0` FOREIGN KEY (`course_id`) REFERENCES `ud_courses`(`id`);

