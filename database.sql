-- =====================================================
-- TNPC Website (E:\tnpc_website) - Database
-- DB name: tnpc_e  (alag DB taaki purani site ko touch na ho)
-- Import: phpMyAdmin -> naya DB "tnpc_e" banao -> Import -> ye file
-- Logins (role wala form: PHP/login.php):
--   Admin   : admin / admin123
--   Teacher : teacher / teacher123
--   Student : student / student123
-- Users table logins: rahul@example.com / student123 (student)
-- =====================================================

CREATE DATABASE IF NOT EXISTS `tnpc_e` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tnpc_e`;

-- Role login tables (PHP/check_login.php: SELECT * FROM <role> WHERE username)
CREATE TABLE IF NOT EXISTS `admin` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(100) NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `student` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(50) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(100) NULL
) ENGINE=InnoDB;

-- Users master (student/teacher_login_process.php)
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `role` ENUM('admin','teacher','student') NOT NULL,
  `enrollment_no` VARCHAR(20) NULL UNIQUE,
  `email` VARCHAR(100) NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(100) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Student profile (STUDENT pages)
CREATE TABLE IF NOT EXISTS `students` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NULL,
  `enrollment_no` VARCHAR(20) NULL,
  `course` VARCHAR(50) NULL,
  `semester` INT NULL
) ENGINE=InnoDB;

-- Courses (PHP/index.php: SELECT * FROM courses ORDER BY id)
CREATE TABLE IF NOT EXISTS `courses` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `short_name` VARCHAR(10) NULL,
  `duration` VARCHAR(50) NULL,
  `description` TEXT NULL,
  `features` TEXT NULL,
  `icon_class` VARCHAR(50) NULL,
  `overlay_class` VARCHAR(20) NULL,
  `link` VARCHAR(100) NULL,
  `image` VARCHAR(255) NULL
) ENGINE=InnoDB;

-- Inquiries (PHP/inquiry_submit.php + save_inquiry.php + Admin dashboard)
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NULL,
  `email` VARCHAR(100) NULL,
  `city` VARCHAR(100) NULL,
  `course` VARCHAR(50) NULL,
  `qualification` VARCHAR(100) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- News (PHP/index.php + Admin/news_*.php)
CREATE TABLE IF NOT EXISTS `news` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(200) NOT NULL,
  `description` TEXT NULL,
  `image` VARCHAR(255) NULL,
  `link` VARCHAR(255) NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Student support tables (STUDENT/view_marks, view_attendance, materials)
CREATE TABLE IF NOT EXISTS `marks` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `enrollment_no` VARCHAR(20) NOT NULL,
  `subject` VARCHAR(100) NOT NULL,
  `marks` INT NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `enrollment_no` VARCHAR(20) NOT NULL,
  `att_date` DATE NOT NULL,
  `status` VARCHAR(10) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `materials` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `course` VARCHAR(50) NULL,
  `title` VARCHAR(200) NOT NULL,
  `file` VARCHAR(255) NULL
) ENGINE=InnoDB;

-- ---------------- SAMPLE DATA ----------------
-- admin / admin123
INSERT IGNORE INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$crt2.zQKWku4o6NOQXQjOeMILY.8Y1tQjs0LLNT/MbzxVVHUY2gym');

-- teacher / teacher123
INSERT IGNORE INTO `teacher` (`id`, `username`, `password`, `name`) VALUES
(1, 'teacher', '$2y$10$F6fJ5uJAz3Fdxkpo9Eij8.PhH/64LUCQHCFwR0m/6t2gOdPK/8m4e', 'Demo Teacher');

-- student / student123
INSERT IGNORE INTO `student` (`id`, `username`, `password`, `name`) VALUES
(1, 'student', '$2y$10$wfG5ihEpdgSSCFgohXFIEuu55Q25hiewiWZ4eXfO79D54J3iddK5i', 'Demo Student');

-- users master (email logins, password = role123 hashed)
INSERT IGNORE INTO `users` (`id`, `role`, `enrollment_no`, `email`, `password`, `name`) VALUES
(1, 'admin', NULL, 'admin@tnpc.edu.in', '$2y$10$crt2.zQKWku4o6NOQXQjOeMILY.8Y1tQjs0LLNT/MbzxVVHUY2gym', 'Administrator'),
(2, 'teacher', 'T001', 'teacher@tnpc.edu.in', '$2y$10$F6fJ5uJAz3Fdxkpo9Eij8.PhH/64LUCQHCFwR0m/6t2gOdPK/8m4e', 'Demo Teacher'),
(3, 'student', 'S001', 'rahul@example.com', '$2y$10$wfG5ihEpdgSSCFgohXFIEuu55Q25hiewiWZ4eXfO79D54J3iddK5i', 'Rahul Patel');

INSERT IGNORE INTO `students` (`id`, `user_id`, `enrollment_no`, `course`, `semester`) VALUES
(1, 3, 'S001', 'BCA', 1);

INSERT IGNORE INTO `courses` (`id`, `name`, `short_name`, `duration`, `description`, `features`, `icon_class`, `overlay_class`, `link`, `image`) VALUES
(1, 'Bachelor of Computer Applications', 'BCA', '3 Years', 'Programming, web development, database and networking with practical labs and projects.', 'Programming in C,Web Development,DBMS,Python & Java', 'bi-laptop', 'bca', 'bca.php', 'bca_course.jpg'),
(2, 'Bachelor of Business Administration', 'BBA', '3 Years', 'Management, marketing, finance and HR with case-study learning and internships.', 'Management,Marketing,Finance,HR & Entrepreneurship', 'bi-briefcase', 'bba', 'bba.php', 'bba_course.jpg');

INSERT IGNORE INTO `news` (`id`, `title`, `description`, `image`, `link`) VALUES
(1, 'Admissions Open 2026-27', 'BCA and BBA admissions are open. GCAS registration is free from the college.', 'admission_open.jpg', '#'),
(2, 'Campus Placement Drive', 'Top companies visiting campus. Final year students must register with the placement cell.', '2.jpg', '#'),
(3, 'Annual Tech Fest 2026', 'Coding, hackathon and business plan competitions. A grand success event.', '3.jpg', '#'),
(4, 'Seminar & Workshop Series', 'Industry expert sessions every month for BCA and BBA students.', '4.jpg', '#');

INSERT IGNORE INTO `inquiries` (`name`, `phone`, `email`, `city`, `course`, `qualification`) VALUES
('Test Student', '9876543210', 'test@example.com', 'Mehsana', 'BCA', '12th Pass');

INSERT IGNORE INTO `marks` (`enrollment_no`, `subject`, `marks`) VALUES
('S001', 'Programming in C', 85),
('S001', 'Web Fundamentals', 78);

INSERT IGNORE INTO `attendance` (`enrollment_no`, `att_date`, `status`) VALUES
('S001', '2026-09-10', 'Present'),
('S001', '2026-09-11', 'Present'),
('S001', '2026-09-12', 'Absent');

INSERT IGNORE INTO `materials` (`course`, `title`, `file`) VALUES
('BCA', 'BCA Semester 1 Syllabus', NULL),
('BBA', 'BBA Semester 1 Syllabus', NULL),
('BCA', 'Programming in C - Notes', NULL);
