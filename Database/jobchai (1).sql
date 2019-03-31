-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 04:35 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobchai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `userId` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`userId`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `applicant_info`
--

CREATE TABLE `applicant_info` (
  `applicantId` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastName` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `mobile` varchar(12) COLLATE utf8_bin NOT NULL,
  `gender` varchar(20) COLLATE utf8_bin NOT NULL,
  `birthDate` varchar(50) COLLATE utf8_bin NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL,
  `state` varchar(100) COLLATE utf8_bin NOT NULL,
  `postCode` int(10) NOT NULL,
  `country` varchar(50) COLLATE utf8_bin NOT NULL,
  `lastDegree` varchar(100) COLLATE utf8_bin NOT NULL,
  `program` varchar(50) COLLATE utf8_bin NOT NULL,
  `institutionName` varchar(100) COLLATE utf8_bin NOT NULL,
  `cgpa` varchar(10) COLLATE utf8_bin NOT NULL,
  `cgpaScale` int(2) NOT NULL,
  `lastOrganization` varchar(100) COLLATE utf8_bin NOT NULL,
  `position` varchar(50) COLLATE utf8_bin NOT NULL,
  `experties` varchar(100) COLLATE utf8_bin NOT NULL,
  `experience` varchar(30) COLLATE utf8_bin NOT NULL,
  `companyAddress` varchar(200) COLLATE utf8_bin NOT NULL,
  `careerObjective` text COLLATE utf8_bin NOT NULL,
  `jobID` int(100) NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `applicant_info`
--

INSERT INTO `applicant_info` (`applicantId`, `firstName`, `lastName`, `email`, `mobile`, `gender`, `birthDate`, `address`, `city`, `state`, `postCode`, `country`, `lastDegree`, `program`, `institutionName`, `cgpa`, `cgpaScale`, `lastOrganization`, `position`, `experties`, `experience`, `companyAddress`, `careerObjective`, `jobID`, `updatedAt`) VALUES
(1, 'Mintu', 'Ahmed', 'mintu@gmail.com', '01748084106', 'Male', '02/16/1994', 'Modina Market', 'Sylhet', 'sylhet', 3300, 'Bangladesh', 'Undergraduate', 'Computer Science', 'Leading University', '3.25', 4, 'StarLab', '', '', '', '', 'hope', 1, '2019-01-09 19:57:25'),
(2, 'Mamun', 'Khan', 'mamun@gmail.com', '01784523695', 'Male', '02/16/1994', 'Modina Market', 'Sylhet', 'sylhet', 3300, 'Bangladesh', '', 'Computer Science & Engineering', 'Leading University', '3.5', 4, 'StarLab', 'Intern', 'HTML,CSS,Bootstrap', '2years', 'Modina Market', 'Career objective or resume objective acts as the pitch of your resume. It mentions the goal and objective of your career. Even though it is not a strict requirement to include a resume objective in your resume, a well-written objective can help you catch the attention of the recruiter.', 3, '2019-01-09 19:57:38'),
(3, 'Rashed', 'Khan', 'rased@gmail.com', '1784523695', 'Male', '02/16/1994', 'Modina Market', 'Sylhet', 'sylhet', 3300, 'Bangladesh', '', 'Computer Science', 'Leading University', '3.00', 4, 'TeamFly', 'Software Engineer', 'HTML,CSS,Bootstrap', '2years', 'Modina Market', 'To make use of my interpersonal skills to achieve goals of a company that focuses on customer satisfaction and customer experience.', 4, '2019-01-09 18:42:34'),
(4, 'Salek', 'Khan', 'salek@gmail.com', '1784523695', 'Male', '02/16/1994', 'Modina Market', 'Sylhet', 'sylhet', 3300, 'Bangladesh', '', 'Computer Science', 'Leading University', '3.50', 4, 'TeamFly', 'Software Engineer', 'HTML,CSS,Bootstrap', '1 Year', 'Modina Market', 'Highly motivated individual and a certified digital marketer with strong SEO and SEM skills, attention to detail, and a solid online marketing background looking to obtain a position of SEO Specialist with XYZ company', 5, '2019-01-09 19:57:52'),
(5, 'Momin', 'Khan', 'momin@gmail.com', '1784523695', 'Male', '02/16/1994', 'Modina Market', 'Sylhet', 'sylhet', 3300, 'Bangladesh', '', 'Computer Science', 'Metropolitan University', '3.25', 4, 'TeamFly', 'Software Engineer', 'HTML,CSS,Bootstrap', '1 Year', 'Modina Market', 'Highly motivated individual and a certified digital marketer with strong SEO and SEM skills, attention to detail, and a solid online marketing background looking to obtain a position of SEO Specialist with XYZ company', 1, '2019-01-09 19:58:01'),
(6, 'Shakib', 'Al Mamun', 'shakib@gmail.com', '01765236985', 'Male', '01/29/2019', 'Zindabazar', 'Sylhet', 'sylhet', 3300, 'Bangladesh', '', 'Computer Science & Engineering', 'Leading University', '3.25', 4, 'SJ Innovation', 'Intern', 'HTML,CSS,Bootstrap', '1 year', 'Modina Market', 'Employee objectives are performance targets that are agreed between an organization and an employee for a year, half-year or quarter. They are typically designed to be specific, measurable, achievable, relevant and time-bound. The following are illustrative examples', 6, '2019-01-10 07:01:59'),
(7, 'Zami', 'Haque', 'zami@gmail.com', '01742365986', 'Male', '02/16/1994', 'Zindabazar', 'Sylhet', 'sylhet', 3300, 'Bangladesh', '', 'Computer Science & Engineering', 'Leading University', '3.50', 4, 'SJ Innovation', 'Software Engineer', 'HTML,CSS,Bootstrap', '0-3 years', 'Zindabazar', 'Hello My career Testing', 4, '2019-01-12 15:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `job_info`
--

CREATE TABLE `job_info` (
  `jobId` int(11) NOT NULL,
  `companyName` varchar(100) COLLATE utf8_bin NOT NULL,
  `companyType` varchar(50) COLLATE utf8_bin NOT NULL,
  `concernName` varchar(100) COLLATE utf8_bin NOT NULL,
  `concernPosition` varchar(50) COLLATE utf8_bin NOT NULL,
  `concernEmail` varchar(100) COLLATE utf8_bin NOT NULL,
  `concernNumber` varchar(12) COLLATE utf8_bin NOT NULL,
  `jobTitle` varchar(50) COLLATE utf8_bin NOT NULL,
  `jobCategory` varchar(300) COLLATE utf8_bin NOT NULL,
  `salary` varchar(100) COLLATE utf8_bin NOT NULL,
  `deadline` varchar(30) COLLATE utf8_bin NOT NULL,
  `jobType` varchar(50) COLLATE utf8_bin NOT NULL,
  `experience` varchar(20) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(50) COLLATE utf8_bin NOT NULL,
  `jobLocation` varchar(100) COLLATE utf8_bin NOT NULL,
  `jobDescription` text COLLATE utf8_bin NOT NULL,
  `status` int(5) NOT NULL,
  `updatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `job_info`
--

INSERT INTO `job_info` (`jobId`, `companyName`, `companyType`, `concernName`, `concernPosition`, `concernEmail`, `concernNumber`, `jobTitle`, `jobCategory`, `salary`, `deadline`, `jobType`, `experience`, `qualification`, `jobLocation`, `jobDescription`, `status`, `updatedAt`) VALUES
(1, 'StarLab', 'Software', 'Rasel Ahmed', 'Manager', 'starlab@gmail.com', '01445415236', 'Sr. Software Engineer', 'Software', '50000', '01/20/2019', 'Full Time', '1 year', 'Undergraduate', 'Sylhet', 'Hello Hoey Banny', 1, '2019-01-09 19:59:22'),
(2, 'StarLab', 'Software', 'Rasel Ahmed', 'Manager', 'starlab@gmail.com', '01748084106', 'Intern', 'Software', '5000', '01/21/2019', 'Full Time', '0-1 Year', 'Undergraduate', 'Sylhet', 'Freshers', 1, '2019-01-09 19:59:00'),
(3, 'Kamala Vander Mega Bazaar', 'Production', 'Saiful Islam', 'CEO', 'saiful@gmail.com', '01716325697', 'Customer Relationship Officer-Female', 'Software', 'Nagotiateable', '01/23/2019', 'Full Time', '0-3 years', 'Undergraduate', 'Sylhet', 'Company Info:\r\nKamala Vander is one of the oldest company in Sylhet. It has been assume that it launched on 1885 however its activities has started before. We are proudly doing bisiness from that time without compromising quality & trust. We belive Kamala Vander is a name that you can trust.\r\nResponsibility\r\n1. Candidate must operate in showroom.\r\n\r\n2. Visit different organizations/Corporate for creating new clients. \r\n\r\n3. Submit data and management report on time. \r\n\r\n4. Any other assigned tasks given by management.\r\n\r\nAdditional Details\r\n1) Smart, Pleasant personality. \r\n\r\n2) Only Females are allowed to apply.\r\n\r\n3)  Working Time 10:30am to 9pm.\r\n', 1, '2019-01-09 17:53:24'),
(4, 'Shaheen School & College', 'Education', 'Rajon Das', 'Principle', 'mail@saheenschool.com', '01748084116', 'Assistant Teacher- Mathematics', 'Education', 'Nagotiateable', '01/23/2019', 'Full Time', '0-3 years', 'Undergraduate', 'Sylhet', 'Responsibility\r\n1. To conduct classes; preparing notes and lecture sheets. \r\n\r\n2. Take of class tests. \r\n\r\n3. Check exam papers; monitor student discipline. \r\n\r\n4. Perform any other work assigned by management.\r\n\r\nAdditional Details\r\n- Hard working. \r\n\r\n- Team player. \r\n\r\n- Male/Female candidates are encouraged to apply.', 1, '2019-01-08 17:17:34'),
(5, 'Dream Merchant', 'Software', 'Ruman Ahmed', 'CEO', 'ruman@gmail.com', '01716325598', 'PHP Developer', 'Software', '20000', '01/31/2019', 'Full Time', '0-3 years', 'Postgraduate', 'Dhaka', 'Responsibility\r\nA PHP Developer is required with excellent knowledge in Javascript, CSS and HTML. \r\n\r\nThis job also requires the person to be highly analytical with good problem-solving skills.\r\n\r\n \r\n\r\nAdditional Details\r\n- Team Working Ability.\r\n\r\n- Good English Writing and Speaking Skills.', 1, '2019-01-08 18:57:08'),
(6, 'Almas Hotel', 'Production', 'Almas Ahmed', 'Manager', 'almas@gmail.com', '01722335469', 'Manager', 'Production', 'Nagotiateable', '01/31/2019', 'Full Time', '1 year', 'Undergraduate', 'Bogra', 'A job description or JD is a document that describes the general tasks, or other related duties, and responsibilities of a position. It may specify the functionary to whom the position reports, specifications such as the qualifications or skills needed by the person in the job', 1, '2019-01-10 06:34:50'),
(7, 'Mamun Software ', 'Software', 'Mamun Ahmed', 'CEO', 'shakib@gmail.com', '01765236985', 'Sr. Software Engineer', 'Software', '20000', '01/31/2019', 'Part Time', '1 Year', 'Undergraduate', 'Moymensing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 1, '2019-01-12 15:29:08'),
(8, 'SJ Innovation', 'Software', 'Shakib Al Mamun', 'CEO', 'shakib@gmail.com', '01765236985', 'Sr. Software Engineer', 'Software', 'Nagotiateable', '01/31/2019', 'Full Time', '1 Year', 'Undergraduate', 'Rajshahi', 'Hello', 0, '2019-01-12 15:28:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `applicant_info`
--
ALTER TABLE `applicant_info`
  ADD PRIMARY KEY (`applicantId`);

--
-- Indexes for table `job_info`
--
ALTER TABLE `job_info`
  ADD PRIMARY KEY (`jobId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicant_info`
--
ALTER TABLE `applicant_info`
  MODIFY `applicantId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_info`
--
ALTER TABLE `job_info`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
