-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 09, 2013 at 06:41 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edulink`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `menu_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES
(1, 1, 'Introduction', 1, 1, 'Edulink Network is a British organization based in London, United Kingdom. We are ideally placed to assist those thinking of, or already, studying in the UK. We support a broad range of students from Europe, the Asian sub-continent, South Americas, Africa and South East Asia. We empower learners to succeed. We assist international students regardless of nationality and help you in seeking out and making the most out of study abroad opportunities.\r\n\r\n<b>Our Vision</b>\r\nOur Vision is to accommodate prospective students with remarkable and dedicated service at an affordable price. Today in this fast progressing world and with rapid globalization studying in a foreign country is the best way to develop international exposure which not only helps you to get acquainted with cultures but also in preparing for the challenges and opportunities of the global world. An international degree can help you in achieving both personal and professional goals.\r\n\r\n<b>Our Strength</b>\r\nOur biggest strength is our team comprising of well informed and devoted senior consultants who understand the needs of the students as well as their parents or sponsors.'),
(2, 1, 'Directors Message', 2, 1, 'I have started my career in the field of education by starting my own college but very soon I realized the reason why so many international students feel lost and unable to realize their dreams is not because of institutions, all institutes public or private must fulfill certain requirements to be operational, so quality of education is not an issue when coming abroad it''s the improper guidance they receive from their immigration consultants. Some force the students to bend their requirements so he could retain the client other simply just don''t have the ample knowledge of immigration process. In 2007 I founded Global Student with an aim to bridge the gap between institution and the international students and provide accurate information to the people who wish to earn foreign education.\r\n\r\nWe have an excellent track record with one of the highest success rates for student visas for different countries. Students from across the world have benefited from our experience and expertise. We have so far provided opportunities for hundreds of students from around the globe to migrate and settle in the most developed countries of the world and enjoy their living standard.\r\n\r\nAt Edulink Network we are proud to have a team of professionals who have lived, studied or worked abroad and have a valuable hand on experience of going through admission, visa and settlement process. With personal experience and up-to-date knowledge of latest immigration rules they can understand the student''s confusions and reluctance and address the issues without compromising on student''s wishes and goals.\r\n\r\nI assure you at Edulink Network our dedicated team will help you in realizing your dreams.'),
(3, 1, 'Why Choose Us', 3, 1, 'Just pick up a newspaper in any part of the world or visit a nearest commercial zone and you will find hundreds of billboards promising you the future you dream about. So what makes Edulink Network different from all the other organizations?\r\nProfessional Staff\r\n\r\nEdulink Network is not just another immigration consulting firm it is a platform for international students which help them in realizing their dream of quality education across the globe. At Global Student our well experienced staff will guide the prospective students through the admission as well as the visa process for their desired destination. Our team of advisors is well qualified and has detailed knowledge of end-to end admission and immigration process with successful results. Instead of building a relationship of consultant and student we tend to form a team with the student which reduces the communication gap and build an environment of trust which results in the benefit of students in achieving their goals to build up their career.\r\nDedicated Team\r\n\r\nInstead of following a retail market concept where an untrained salesman is screaming at top of his lungs the well-rehearsed script we tend to give our students more dedicated and professional support. We assure our students that when they are working with Edulink Network they get their information from qualified and experienced advisors because we understand our wrong advice can result in not only the financial loss but would most probably jeopardize the career of an individual.\r\n\r\nAt Edulink Network we tend to develop a personal relationship with our clients we understand their confusions and risk and try to make the whole process as smooth as possible. We advise our students about all the available choices and clearly describe the pros and cons so they can make prompt and well informed decision.\r\n\r\n<b>International Linkages</b>\r\nOur team at Edulink Network provides valuable information to students on all available options. Global Student has a vast network of universities across the globe. Students who are interested to study abroad can approach Edulink Network for their bright future. The long list of public and private funded higher education institutions show their faith in our services and hundreds of students across the globe who have been facilitated by our team is the true testament to our commitment. Our team is well aware of immigration rules and with long list of international linkages we provide our students the best possible route for their better future.\r\n'),
(4, 1, 'Testimonials', 4, 1, '<blockquote><span>"They are absolutely brilliant at what they do" -M.Shaheer (BSCS student)</span> </blockquote></span>        \r\n\r\n<blockquote><span>"I literally owe my career to them" -Yasir Ali (BSCS student)</span></blockquote>'),
(5, 2, 'Admissions', 1, 1, 'Getting admissions in overseas universities or colleges is quite complicated now-a-days. We guide our students through the entire admission process right from course selection to the acceptance letter. We give special attention to your application, highlighting the areas essential for a well-presented, error free application. We know exact requirements and prerequisites required to secure a place and help you match the required admission requirements. Admission criteria varies widely among countries even universities, every university has their own variables they consider when processing an admission application. Factors that are universal among the universities include previous academic record, work experience and level of English Language.\r\n\r\nWe forward your application package to the selected institutions and do our best to get you enrolled in your selected course. Edulink Network work meticulously with the university authorities during the admission process and deliver the information needed by university in coordination with the student. Once your place is secured, we can guide you through the immigration process and help you deal with all the complexities of visa process.\r\n\r\nAdmission applications can be processed at any time of the year for most courses. However, for certain distinguished universities it is advisable to submit your application as early as possible.\r\n\r\nUniversities usually have specific application deadlines. Get in touch with us and we will be pleased to advise you about these.'),
(6, 2, 'University Selection', 2, 1, 'What should I study further? Will it be a rewarding career? What will be the career progression? Will this field be as demanding as today when I will graduate? Will I be stuck in the profession I have no interest in? These are the questions that arouse in almost every mind after completing high school. At Global Student our career counselors not only understand the dilemma but are also well informed and trained to give student proper guidance they need. We help prospective in finding their natural craving and provide them with proper information regarding the chosen field like market demand for the profession, career diversity and above all future prospects.\r\n\r\nChoosing an area of interest for higher education is a huge decision, both financially and emotionally. Most students base their decisions on their parents will or seeing that this field is in demand at the time of admission. Both of these attitude result in professional disaster. Most students who choose the field just to please their parents feel stuck. Professional career is long and hard commitment and usually a person doesn''t get second chances so natural tendency and general interest is a huge factor in choosing a career path. It is mandatory to have right guidance, adequate time and sincere effort in order to make the right decision.\r\n\r\nGlobal Student has a trained staff, which provides help to identify the professional goals, enabling the student to take a wiser academic decision, and gives Personal Guidance to help choose courses that perfectly fit their Career or Personal Goals.\r\n\r\nGet in touch with us today and we will help you explore your professional nature.'),
(7, 2, 'Admission Guidance', 3, 1, 'Every year hundreds and thousands of students apply to international universities for admission. Since you are not only competing against your fellow students from you home country but also against the whole world which leads to high level of competition. Universities and colleges have developed various variables which help them in making student selection on merit and streamlined. Good news is if a student prepares his admission application skillfully he can manipulate results in his/her favor. Unlike third world academics are not the only selection criteria in western universities, they evaluate your application as a whole not just a part of it. Your extracurricular activities, your score in English Language Test and the personal statement can substitute for whatever you lack in academics.\r\n\r\nWe give special attention to your application, highlighting the areas essential for a well-presented, error free application. We assist our students with References and the ''all-important'' Statement of Purpose. Most students think that providing references and writing Statement of purpose is not all that important, only academics will play vital role. Contrary to popular belief reference letters and statement of purpose are examined with great attention and play a very crucial role in any student''s admission.\r\n\r\nEdulink Network will guide all the students with possible tips on writing Statement of Purpose the to-do''s and not to-do''s list will be given to student for better awareness. Once a student write his/her first draft instead of forwarding it to university/college our counselor will review it and give the student pointers on how to make it more precise and persuasive. Once satisfied only than it will be forwarded to the admission office so that positive results can be expected. Similarly, our counselor will advise you on recommendation letters from your teachers or past employers stating your character, work history, and or/academic history.\r\n\r\nRelying just on your academics and leaving out all other variables is one of the biggest mistake number of students make every year don''t be the victim of insufficient information contact us today and we will give you proper admission guidance.'),
(8, 2, 'Scholarship Guidance', 4, 1, 'One thing is certain overseas education is expensive and not everyone can afford it but good news is almost all universities and colleges have some sort of scholarships for international students. It is very nerve racking knowing you have exceptional academics and vivid extracurricular track but due to financial constraints can''t afford to have a quality education. Contrary to popular belief that scholarships are offered to local students actually more that 40% of scholarships at any university/college are merit based and are awarded regardless of nationality and race. Now getting the scholarship is quite tricky. Scholarship is a free ride and free rides don''t come easy. For most universities/colleges generally students have to apply for scholarship separately. Scholarship application usually includes number of essays on how you stand out of the crowd, why should the scholarship be awarded to you etc.\r\n\r\nEdulink Network has qualified counselors who will assist you in fulfilling the requirements as well as in completing you scholarship form. Another misunderstanding among international students is applying for scholarship will reduce their chances of admission. Not only does the admission applications and scholarship applications are evaluated separately but also by a separate departments and admission department never discriminate on if you have funding for your education or not.\r\n\r\nContact us now to see if you can fulfill criteria for an overseas scholarship.'),
(9, 2, 'Visa Assistance', 5, 1, 'Each and every country has a different process and check list to file a visa. Edulink Network guides you with proper information based on country to country. Without a successful student visa application, no amount of time and effort spent on identifying the correct course/location will help you achieve your goal of studying abroad. Edulink Network is expert in guiding you through the visa application process.\r\n\r\nNow the question is why so many students are rejected for student visa, even if they appear to have adequate financial means, admission letter and even English Language Certificate? The answer is lack of understanding of visa process. Having a huge chunk of money doesn''t guarantee you the visa, complete financial documents and sufficient evidence of financial capability of the student or their sponsor is required. Global Student has more than five years of experience of guiding student visa applications. This experience allows our staff to give a thorough examination of all documents supplied by a student and point out areas within the supporting documents where a student may be vulnerable to rejection and show a student how to present their application in a favorable light.\r\n\r\nWe are committed to helping our students for their visa interviews through mock sessions, one-on-one counseling that clarifies their doubts and erases some of the mistakes they tend to make as each student thinks and speaks differently. As a consultancy that takes care of all such miniscule details, we make a note of each and every point while interviewing students and evaluate their profile for number of times before deciding upon filing the documentation. We believe in briefing each student in person, helping each student do his/her best in the Visa Consulate Interview.'),
(11, 4, 'Our Offices', 1, 1, '\r\n<b>Head Office in UK:</b>\r\nEdulink Network Ltd\r\nSuit 403, WIGHAM HOUSE\r\nWakering Road\r\nBarking, Essex, London\r\nPost Code: IG118QN\r\np: 0207 9938207\r\nm: 0741 2876127\r\nm: 0745 0283138\r\ne: info@edulinknetwork.com\r\nRegional Offices:\r\n\r\n\r\n<b>India:</b>\r\nEdulink Network Ltd\r\n2110/2111 Faseel Road, ASAF\r\nAli Road (Behind Delhi Stock Exchange)\r\nNew Delhi â€“ 110002\r\nIndia\r\nP: 23254692 / 23262601\r\nm: 9818751801\r\nContact Person: Mohammed Ibrahim\r\ne: ibrahim@edulinknetwork.com');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `menu_name`, `position`, `visible`) VALUES
(1, 'About', 1, 1),
(2, 'Services', 2, 1),
(3, 'Events', 3, 1),
(4, 'Contact Us', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `hashed_password` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`) VALUES
(1, 'shaheer', 'cfe6fc24a301ac286db0857db91b64b79c160e50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
