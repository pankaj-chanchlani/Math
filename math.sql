-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2016 at 01:34 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `math`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `topic` varchar(30) NOT NULL,
  `content` mediumtext NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `topic`, `content`, `visible`) VALUES
(1, 'lnlnlnk', 'Stright Lines', 'updated content 1vhc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE IF NOT EXISTS `hits` (
  `page` char(100) NOT NULL DEFAULT '',
  `count` int(15) DEFAULT NULL,
  PRIMARY KEY (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`page`, `count`) VALUES
('/math/contact.php', 160),
('/math/index.php', 325);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(30) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `datetime` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `ip_address`, `user_agent`, `datetime`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebK', '2015/12/12 07:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ques` varchar(300) NOT NULL,
  `op1` varchar(50) NOT NULL,
  `op2` varchar(50) NOT NULL,
  `op3` varchar(50) NOT NULL,
  `op4` varchar(50) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `correct` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `ques`, `op1`, `op2`, `op3`, `op4`, `cat`, `correct`, `star`) VALUES
(1, 'The equation whose roots are opposite in sign to those of the equation `x^2 - 3x - 4 = 0` is\r\ngiven by', '`4x^2 - 3x + 1 = 0`', '`x^2 + 3x - 4 = 0`', '`x^2 + 3x + 4 = 0`', 'none of these', 'Quadratic Equation', 2, 1),
(2, 'The locus of the point, which moves such that its distance from (1, -2, 2) is unity, is', '`x^2 + y^2 + z^2 - 2x + 4y - 4z + 8 = 0`', '`x^2 + y^2 + z^2 - 2x - 4y - 4z + 8 = 0`', '`x^2 + y^2 + z^2 + 2x + 4y - 4z + 8 = 0`', '` x^2 + y^2 + z^2 - 2x + 4y + 4z + 8 = 0`', '3D Geometry', 1, 2),
(3, 'The angle between the lines whose direction ratios are 1, 1, 2; `sqrt(3) - 1`,` - sqrt(3) -1`, 4 is', '`cos^-1(1/65)`', '`pi/6`', '`pi/3`', '`pi/4`', '3D Geometry', 3, 1),
(4, 'The plane passing through the point (a, b, c) and parallel to the plane x + y + z = 0 is', 'x + y + z = a + b + c', 'x + y + z + (a + b + c) = 0', 'x + y + z + abc = 0', ' ax + by + cz = 0', '3D Geometry', 1, 1),
(5, 'The equation of line through the point (1, 2, 3) parallel to line `(x-1)/2=(y+1)/-3=(z+10)/8` are', '`(x-1)/2=(y-2)/-3=(z-3)/8`', '`(x-1)/1=(y-2)/2=(z-3)/3`', '`(x-4)/1=(y+1)/2=(z+10)/3`', 'none of these', '3D Geometry', 1, 1),
(6, 'The value of k, so that the lines `(x-1)/-3=(y-2)/(2k)=(z-3)/2 , (x-1)/(3k)=(y-5)/1=(z-6)/-5 ` are perpendicular to each other is..', '`-10/7`', '`-8/7`', '`-6/7`', '1', '3D Geometry', 1, 1),
(7, 'The angle between a line with direction ratios 2:2:1 and a line joining (3,1,4,) to (7,2,12)', '`cos^-1(2/3)`', '`cos^-1(3/2)`', '`tan^-1(2/3)`', 'none of these', '3D Geometry', 1, 1),
(8, 'The equation of a plane which passes through (2, -3, 1) and is normal to the line joining the\npoints (3, 4, -1) and (2, -1, 5) is given by', '` x + 5y - 6z + 19 = 0`', '`x - 5y + 6z -19 = 0`', '`x + 5y + 6z +19 = 0`', '`x - 5y - 6z - 19 = 0`', '3D Geometry', 1, 1),
(9, 'Direction cosines of the line joining the points (0, 0, 0) and (a, a, a) are', '`1/sqrt(2),1/sqrt(2),1/sqrt(2)`', '`1,1,1`', '`1/sqrt(3),1/sqrt(3),1/sqrt(3)`', 'none of these', '3D Geometry', 3, 1),
(10, 'The length of perpendicular from the point (-1, 2,-2)) on the line`(x-1)/2=(y-2)/-3=(z+2)/4` is', '`sqrt(29)`', '`sqrt(6)`', '`sqrt(21)`', 'none of these', '3D Geometry', 4, 1),
(11, 'Two lines not lying in the same plane are called', 'parallel', ' coincident', 'intersecting', 'skew', '3D Geometry', 4, 1),
(12, 'The distance of the point (x, y, z) from the x - y plane is', 'x', '|y|', '3', '|z|', '3D Geometry', 4, 1),
(13, 'A point (x, y, z) moves parallel to x - axis. Which of three variables x, y, z remains fixed?', 'x and y', 'y and z', 'z and x', 'none of these', '3D Geometry', 2, 1),
(14, 'Let P =(-2, 3, 5), Q = (1, 2, 3), R = (7, 0, -1) then Q divides PR', 'externally in the ratio 1 : 2', 'internally in the ratio 1 : 2', 'externally in the ratio 3 : 5', 'internally in the ratio 1: 3', '3D Geometry', 2, 1),
(15, 'The xy plane divides the line segment joining (1, 2, 3) and (-3, 4, -5) internally in the ratio', ' 3 : 5', '3:4', '4:3', 'none of these', '3D Geometry', 1, 1),
(16, 'The direction cosines of the joining (1, -1, 1) and (-1, 1, 1) are', '`<1/sqrt(2),-1/sqrt(2),0>`', '<`sqrt(2),-sqrt(2),0`>', '`<1/2,-1/2,0>`', '`<2,-2,0>`', '3D Geometry', 1, 1),
(17, 'Two lines with direction cosines\n`< l_1 ,m_1 ,n_1 > and < l_2 ,m_2 ,n_2 >`are at right angles iff', '`l_1l_2+m_1m_2+n_1n_2=0`', '`l_1=l_2,m_1=m_2,n_1=n_2`', '`l_1l_2=m_1m_2=n_1n_2`', 'none of these', '3D Geometry', 1, 1),
(18, 'The foot of perpendicular from `alpha,beta,gamma` on x -axis is', '`(alpha,0,0)`', '`(0,beta,0)`', '`(0,0,gamma)`', '`(0,0,0)`', '3D Geometry', 1, 1),
(19, 'The direction cosines of a line equally inclined to the positive direction of axes are', '`<1,1,1>`', '`1/sqrt(3),1/sqrt(3),1/sqrt(3)`', '`1/sqrt(2),1/sqrt(2),1/sqrt(2)`', 'none of these', '3D Geometry', 2, 1),
(20, 'A plane meets the co-ordinate axes at P, Q and R such that the centroid of the triangle is\r\n(1, 1, 1). The equation of plane is,', 'x+y+z=3', ' x + y + z = 9', ' x + y + z = 1', ' x + y + z = 1/3', '3D Geometry', 1, 1),
(21, 'A plane meets the axes in P, Q and R such that centroid of the triangle PQR is (1, 2, 3). The\r\nequation of the plane is', '6x + 3y + 2z = 6', '6x +3 y + 2z = 12', '6x + 3y + 2z = 1', '6x + 3y + 2z = 18', '3D Geometry', 4, 2),
(22, 'The direction cosines of a normal to the plane 2x - 3y - 6z + 14 = 0 are', '`(2/7),(-3/7),(-6/7)`', '`(2/7),(3/7),(6/7)`', '`(-2/7),(-3/7),(-6/7)`', 'none of these', '3D Geometry', 1, 1),
(23, 'The equation of the plane whose intercept on the axes are thrice as long as those made by\nthe plane 2x - 3y + 6z - 11 = 0 is', ' 6x - 9y + 18z - 11 = 0', ' 2x - 3y + 6z + 33 = 0', ' 2x - 3y + 6z = 33', 'none of these', '3D Geometry', 3, 1),
(24, 'The angle between the planes 2x - y + z = 6 and x + y + 2z = 7 is', '`pi/4`', '`pi/6`', '`pi/3`', '`pi/2`', '3D Geometry', 3, 1),
(25, 'The angle between the lines x = 1, y = 2 and y + 1 = 0 and z = 0 is', '`0`', '`pi/4`', '`pi/3`', '`pi/2`', '3D Geometry', 4, 1),
(26, 'A plane meets the coordinates axes at A, B, C such that the centroid of the triangle is\r\n(3, 3, 3). The equation of the plane is', 'x + y + z = 3', 'x + y + z = 9', '3x + 3y + 3z = 1', '9x + 9y + 9z = 1', '3D Geometry', 2, 2),
(27, 'The equation of the plane through the intersection of the planes x - 2y + 3z - 4 = 0,\n2x - 3y + 4z - 5 = 0 and perpendicular to the plane x + y + z - 1 = 0 is', 'x - y + 2 = 0', 'x - z + 2 = 0', 'y - z + 2 = 0', 'z - x + 2 = 0', '3D Geometry', 2, 2),
(28, 'The coordinates of the point of intersection of the line `(x+1)/1=(y+3)/3=(z-+2)/-2` with the plane\r\n3x+4y+5z=5 are ', ' (5, 15, âˆ’14)', ' (3, 4, 5)', '(1, 3, âˆ’2)', ' (3, 12, âˆ’10)', '3D Geometry', 1, 2),
(29, 'The angle between the line `(x+1)/3=(y-1)/2=(z-2)/4`\n\nand the plane 2x + y -\n3z + 4 = 0 is', '`cos^-1(-4/sqrt(406))`', '`sin^-1(-4/sqrt(406))`', '`30^@`', 'none of these', '3D Geometry', 2, 2),
(30, 'The angle between the lines whose direction cosines satisfy the equations l + m + n = 0,\r\n`l^2 + m^2 - n^2 = 0` is given by', '`(2pi)/3`', '`pi/6`', '`(5pi)/6`', '`pi/3`', '3D Geometry', 4, 2),
(31, 'The angle between the line `(x-2)/2=(y+1)/-1=(z-3)/2` and the plane  3x + 6y - 2z + 5 = 0 is', '`cos^-1(4/21)`', '`sin^-1(-4/21)`', '`sin^-1(6/21)`', '`sin^-1(4/21)`', '3D Geometry', 2, 2),
(32, 'Shortest distance between lines\r\n`(x-6)/1=(y-2)/-2=(z-2)/2` and `(x+4)/3=(y)/-2=(z+1)/-2` is', '108', '9', '27', 'none of these', '3D Geometry', 2, 2),
(33, 'The acute angle between the plane 5x - 4y + 7z-13 = 0 and the y-axis is given by', '`sin^-1(5/sqrt(90))`', '`sin^-1(-4/sqrt(90))`', '`sin^-1(7/sqrt(90))`', '`sin^-1(4/sqrt(90))`', '3D Geometry', 4, 2),
(34, 'The planes x + y - z = 0, y + z - x = 0, z + x - y = 0 meet', ' in a line', 'taken two at a time in parallel lines', ' in a unique point', 'none of these', '3D Geometry', 3, 1),
(35, 'The graph of the equation `x^2 + y^2 = 0` in the three dimensional space is', 'z axis', '(0,0) point', 'y-z plane', 'x-y plane', '3D Geometry', 4, 2),
(36, 'A line making angles `45^@ and 60^@` with the positive directions of the x - axis and y - axis\nrespectively, makes with the positive direction of z -axis an angle of', '`60^@`', '`120^@`', 'both A and B', 'Neither A nor B', '3D Geometry', 3, 2),
(37, 'The angle between two diagonals of a cube is', '`cos^-1(1/sqrt(2))`', '`cos^-1(1/sqrt(3))`', '`cos^-1(1/3)`', '`cos^-1(sqrt(3)/2)`', '3D Geometry', 2, 2),
(38, 'If a line makes angles `alpha, beta, gamma` with the axes, then `cos2alpha + cos2beta + cos2gamma` =?', '-1', '1', '2', '-2', '3D Geometry', 1, 2),
(39, 'The equation (x - 1) . (x - 2) = 0 in three dimensional space is represented by', ' a pair of straight line', ' a pair of parallel planes', 'a pair of intersecting planes', 'a sphere', '3D Geometry', 2, 2),
(40, ' The equation of the plane containing the line 2x + z - 4 = 0 and 2y + z = 0 and passing\r\nthrough the point (2, 1, -1) is', 'x + y - z = 4', 'x - y - z = 2', 'x + y + z +2= 0', 'x + y + z = 2', '3D Geometry', 4, 1),
(41, 'The locus of xy + yz = 0 is, in 3D', ' a pair of straight lines', 'a pair of parallel lines', ' a pair of parallel planes', 'a pair of intersecting planes', '3D Geometry', 4, 1),
(42, 'The lines 6x = 3y = 2z and `(x-1)/-2=(y-2)/-4=(z-3)/-6` are', 'parallel', 'skew', 'intersecting', 'coincident', '3D Geometry', 4, 1),
(43, 'the line `(x-x_1)/0=(y-y_1)/1=(z-z_1)/2` is', 'parallel to x  axis', 'perpendicular to x  axis', 'perpendicular to YOZ plane', 'none of these', '3D Geometry', 2, 3),
(44, 'For the line l : `(x-1)/3=(y+1)/2=(z-3)/-1` and plane  P : x - 2y - z = 0 ; of the following assertions,\r\nthe one/s which is/are true :-', 'l lies on P', 'l is parallel to P', 'l is perpendicular to P', 'none of these', '3D Geometry', 0, 5),
(45, 'The coordinates of the point of intersection of the line `(x-6)/-1=(y+1)/0=(z+3)/4` and the plane x+y-z=3 are', '(2,1,0)', '(7,-1,-7)', '(1, 2, âˆ’6)', '(5,-1,1)', '3D Geometry', 4, 2),
(46, 'The Cartesian equation of the plane perpendicular to the line, `(x-1)/2=(y-3)/-1=(z-4)/2` and passing through the origin is ', ' 2x - y + 2z - 7 = 0', '2x + y + 2z = 0', '2x - y + 2z = 0', '2x - y - z = 0', '3D Geometry', 3, 1),
(47, 'The length of projection of the segment joining (x1 , y1 , z1 ) and (x2 , y2 , z2 ) on the line \r\n`(x-alpha)/l=(y-beta)/m=(z-gamma)/n` is ', '`|l(x_2-x_1)+m(y_2-y_1)+n(z_2-z_1)`', '`|alpha(x_2-x_1)+beta(y_2-y_1)+gamma(z_2-z_1)`', '`|(x_2-x_1)/l+(y_2-y_1)/m+(z_2-z_1)/n`', 'none of these', '3D Geometry', 1, 3),
(48, ' The shortest distance between the lines\n`(x-1)/2=(y-2)/3=(z-3)/4` and `(x-2)/3=(y-3)/4=(z-5)/5`\n\nis', '`1/6`', '`1/sqrt(6)`', '`1/sqrt3`', '`1/3`', '3D Geometry', 2, 3),
(49, 'The equation of the plane through the point (-­1, 2, 0) and parallel to the lines `(x)/3=(y+1)/0=(z-2)/-1`\nand \n`(x-1)/1=(2y+1)/2=(z+1)/-1` is', ' 2x + 3y + 6z - 4 = 0', 'x - 2y + 3z + 5 = 0', ' x + y - 3z+ 1 = 0', 'x + y + 3z = 1', '3D Geometry', 4, 2),
(50, 'The distance of the plane through (1, 1, 1) and perpendicular to the line `(x-1)/3=(y-1)/0=(z-1)/4`\r\n\r\nfrom the origin is', '`3/4`', '`4/3`', '`7/5`', '`1`', '3D Geometry', 3, 1),
(51, 'The distance of the plane through (1, 1, 1) and perpendicular to the line `(x-1)/3=(y-1)/0=(z-1)/4`\r\n\r\nfrom the origin is', '`3/4`', '`4/3`', '`7/5`', '`1`', '3D Geometry', 3, 1),
(52, 'The reflection of the point (2, -1, 3) in the plane 3x - 2y - z = 9 is', '`26/7,15/7,17/7`', '`26/7,-15/7,17/7`', '`15/7,26/7,-17/7`', '`26/7,17/7,-15/7`', '3D Geometry', 2, 3),
(53, 'The coordinates of the foot of perpendicular from the point A (1, 1, 1) on the line joining the\r\npoints B (1, 4, 6) and C (5, 4, 4) are', '(3,4,5)', '(4,5,3)', '(3,-4,5)', '(-3,-4,5)', '3D Geometry', 1, 1),
(54, 'The equation of the right bisecting plane of the segment joining the points (a, a, a) and\n(-a, -a, -a) ; `a !=0` is', 'x+y+z=a', 'x + y + z = 3a', 'x + y + z = 0', 'x + y + z +a= 0', '3D Geometry', 3, 2),
(55, 'The angle between the plane 3x + 4y = 0 and the line `x^2 + y^2 = 0` is', '`0^@`', '`30^@`', '`60^@`', '`90^@`', '3D Geometry', 1, 2),
(56, ' The equation of the plane through intersection of planes x + 2y + 3z = 4 and 2x + y - z = -5\r\nand perpendicular to the plane 5x + 3y + 6z + 8 = 0 is', ' 7x - 2y + 3z + 81', ' 23y + 14x - 9z + 48 = 0', '23x + 14y - 9z + 48 = 0', ' 51x + 15y - 50z + 173 = 0', '3D Geometry', 4, 2),
(57, 'The equation of the plane passing through the intersection of planes x + 2y + 3z + 4 = 0 and\r\n4x + 3y + 2z + 1 = 0 and the origin is', '3x + 2y + z + 1 = 0', '3x + 2y + z = 0', '2x + 3y + z = 0', 'x + y + z = 0', '3D Geometry', 2, 2),
(58, 'If the plane x + y -z = 4 is rotated through `90^@` about the line of intersection with the plane\r\nx + y + 2z = 4 then equation of the plane in its new position is', ' 5x + y + 4z + 20 = 0', ' 5x + y + 4z = 20', ' x + 5y + 4z = 20', 'none of these', '3D Geometry', 2, 1),
(59, 'The equation of the plane passing through the line of intersection of the planes\r\n4x - 5y - 4z = 1 and 2x + y + 2z = 8 and the point (2, 1, 3) is', '32x - 5y + 8z = 83', '32x + 5y - 8z = 83', ' 32x - 5y + 8z + 83 = 0', 'none of these', '3D Geometry', 1, 1),
(60, 'The equation of the plane passing through the points (2, 1, 2) and (1, 3, -2) and parallel to\r\nx axis is', 'x+2y=4', '2y + x + z = 4', 'x + y + z = 4', '2y + z = 4', '3D Geometry', 4, 1),
(61, 'The equation of the plane passing through the point (-3, -3, 1) and is normal to the line\r\njoining the points (2, 6, 1) and (1, 3, 0) is', 'x + 3y + z + 11 = 0', 'x + y + 3z + 11 = 0', '3x + y + z = 11', 'none of these', '3D Geometry', 1, 1),
(62, 'If a point moves so that the sum of the squares of its distances from the six faces of a cube\r\nhaving length of each edge 2 units is 46 units, then the distance of the point from (1,1, 1) is', ' a variable', 'a constant equal to 7 units', 'a constant equal to 4 units', 'a constant equal to 49 units', '3D Geometry', 2, 1),
(63, 'Planes are drawn parallel to the coordinate planes through the points (1, 2, 3) and\r\n(3, -4, -5). The length of the edges of the parallelepiped so found, are', '4,6,8', '3,4,5', '2,4,5', '2,6,8', '3D Geometry', 4, 1),
(64, 'The length of a line segment whose projections on the coï€­ordinate axes are 6, -3, 2, is', '7', '6', '5', '4', '3D Geometry', 1, 1),
(65, 'The direction cosines of a line segment whose projections on the co-ordinate axes are\r\n6, -3, 2, are', '`(-6/7,-3/7,2/7)`', '`(-6/7,3/7,2/7)`', '`(6/7,-3/7,-2/7)`', 'none of these', '3D Geometry', 1, 1),
(66, 'If P, Q, R, S are (3, 6, 4), (2, 5, 2), (6, 4, 4) , (0, 2, 1) respectively then the projection of PQ\r\non RS is', '2 units', '4 units', '6 units', '8 units', '3D Geometry', 1, 1),
(67, 'Area common to the curves `y = x^3 and y = sqrt(x)` is', '`5/12`', '`5/6`', '`5/8`', 'none of these', 'Area Under Curve', 1, 1),
(68, 'The area bounded by the parabola `y^2 = x`, straight line y = 4 and y-axis is', '`64/3`', '`16/3`', '`7sqrt(2)`', 'none of these', 'Area Under Curve', 1, 1),
(69, 'The area bounded by the curves y = |x| - 1 and y = - |x| + 1 is', '`1`', '`2`', '`2sqrt(2)`', '`4`', 'Area Under Curve', 2, 1),
(70, 'The area bounded by the curve y = sin x and the x-axis , for 0 <= x <= 2`pi` is', '2 sq units', '1 sq units', '6 sq units', '4 sq units', 'Area Under Curve', 4, 1),
(71, 'The area enclosed by y = ln(x), its normal at (1, 0) and y-axis is', '`/2`', '`3/2`', 'not defined', 'none of these', 'Area Under Curve', 2, 1),
(72, 'The area bounded by y â€“1 = |x|, y =0 and |x| = `1/2` will be', '`3/4`', '`3/2`', '`5/4`', 'none of these', 'Area Under Curve', 3, 1),
(73, 'The area bounded by the parabola `y^2 = 4x` and its latus rectum is', '`1`', '`3/4`', '`8/3`', 'none of these', 'Area Under Curve', 3, 1),
(74, 'The area of the region bounded by y = |x-1| and y = 1 is', '`1/2`', '`1`', '`2`', 'none of these', 'Area Under Curve', 2, 1),
(75, 'The area of the region bounded by the parabola `y = x^2-3x with y <= 0 is', '`3`', '`-3`', '`-9/2`', '`9/2`', 'Area Under Curve', 4, 1),
(76, 'The area of the smaller region bounded by the circle `x^2+y^2 = 1 `and |y| = x+1 is', '`(pi/4)-1/2`', '`(pi/2)-1`', '`pi/2`', '`(pi/2)+1`', 'Area Under Curve', 1, 1),
(77, 'The area bounded by the curves `|x| + |y| >=1 and x^2 + y^2 <= 1 `is', '`2 sq units`', '`pi sq units` ', '`pi-2 sq units`', '`pi+2 sq units`', 'Area Under Curve', 3, 1),
(78, 'If the area bounded by the curve , y =f(x), the lines x=1, x = b and the x-axis is (b-1)\r\n`cos (3b + 4), b > 1, then f(x)` is', '`(x-5)sin (3x+4)`', '`(x-1) sin (x+1)+ (x+1) cos (x-1)`', '`cos(3x+4) â€“3(x-1)sin(3x+4)`', '`(x-5)cos(3x+4)`', 'Area Under Curve', 3, 1),
(79, 'The area of region that is completely bounded by the graph of `f(x) = 2x â€“ 1 and g(x) = x^2 - 4`\r\nis', '`3`', '`20/3`', '`32/3`', 'none of these', 'Area Under Curve', 3, 1),
(80, 'The area bounded by the curves `y^2 =4+x and x + 2y = 4`, is', '`9`', '`18`', '`72`', '`36`', 'Area Under Curve', 4, 1),
(81, 'The area of the region bounded by the curve `y =x^2-2x and y = x` is', '`9/2`', '`7/2`', '`11/2`', 'none of these', 'Area Under Curve', 1, 1),
(82, 'The total area enclosed by  y=|x|,|x|=1 and y = 0, is', '`1`', '`2`', '`3`', '`4`', 'Area Under Curve', 1, 1),
(83, 'The area of the region bounded by the function `f(x) =x^3 , the x-axis and the lines x = -1\r\nand x = 1` is', '`1/4`', '`1/3`', '`1/8`', '`1/2`', 'Area Under Curve', 4, 1),
(84, 'The area of the region bounded by the curve `y = x and y =2 -(x-2)^2` is', '`1/3`', '`1/6`', '`1/9`', 'none of these', 'Area Under Curve', 4, 1),
(85, 'The area bounded by the axes and the curve y =|x-2| is', '`1`', '`2`', '`4`', 'none of these', 'Area Under Curve', 2, 1),
(86, 'Area bounded by the curves `y = x^2 + 2, y = -x, x = 0 and x = 1` is', '`17/2`', '`17/6`', '`19/6`', '`13/6`', 'Area Under Curve', 2, 1),
(87, 'The area bounded between the curves `x = y^2 and x = 3 - 2y^2` is', '`2`', '`3`', '`4`', '`1`', 'Area Under Curve', 1, 2),
(88, 'Area bounded by the curve `ay = 3(a^2 -x^2)` and the x-axis is', '`a^2`', '`2a^2`', '`3a^2`', '`4a^2`', 'Area Under Curve', 4, 1),
(89, 'Area bounded by the curves `x^2 = y and y = x + 2` and x-axis is', '`9/2`', '`5/3`', '`5/6`', '`7/6`', 'Area Under Curve', 0, 1),
(90, 'If `A_m represents the area bounded by the curve y = ln (x^m), the x-axis and the lines x= 1\r\nand x= e, then A_m+ mA_(m-1)` is', '`m`', '`m^2`', '`m^2/2`', '`m^2-1`', 'Area Under Curve', 2, 1),
(91, 'The area bounded by the curves y = lnx, y = |ln x| and the y-axis is', '`3`', '`2`', '`4`', '`8`', 'Area Under Curve', 2, 1),
(92, 'If area bounded by `y = f(x), the coordinate axes and the line x = a is given by ae^a, then\r\nf(x) `is', '`+-e^x(x+1)`', '`e^x`', '`xe^x`', '`x(e^x)+1`', 'Area Under Curve', 1, 1),
(93, 'The area common to `y^2 = x and x^2 = y` is', '`1`', '`2/3`', '`1/3`', 'none of these', 'Area Under Curve', 3, 1),
(94, 'The area bounded by y = |x-1| and y = 3 -|x| is', '`2`', '`3`', '`4`', '`1`', 'Area Under Curve', 3, 1),
(95, 'The area cut off from the parabola `4y=3x^2 by the straight line 2y=3x+12 `is', '25 sq units', '27 sq units', '36 sq units', '16 sq units', 'Area Under Curve', 2, 1),
(96, 'The area bounded by the curve `y = x^2+ 2x+1`, the tangent at (1, 4) and the y-axis is', '`1`', '`1/2`', '`1/3`', '`1/4`', 'Area Under Curve', 3, 1),
(97, 'The area bounded by y = lnx, the x-axis and the ordinates x = 0 and x = 1 is', '`1`', '`3/2`', '`-1`', 'none of these', 'Area Under Curve', 1, 1),
(98, 'The area bounded by the straight lines y = 0, x + y â€“ 2 = 0 and the straight line which equally\r\ndivides the common area included between the curves `y = x^2 and y =sqrt(x)` is equal to', '1 sq unit', '2 sq units', '3 sq units', 'none of these', 'Area Under Curve', 1, 1),
(99, 'The area of the smaller region bounded by the circle `x^2+ y^2 =1 and the lines |y| =x + 1` is:', '`pi/2-1/2`', '`pi/2-1`', '`pi/2`', '`pi/2+1`', 'Area Under Curve', 2, 1),
(100, 'The area of the region bounded by `1-y^2=|x| and |x|+|y|=1` is', '`1/3`', '`4/3`', '`2/3`', '`8/3`', 'Area Under Curve', 3, 1),
(101, 'Area enclosed by the curve |x-2|+|y+1|=1 is', '`2/15`', '`4/15`', '`2`', '`4`', 'Area Under Curve', 3, 1),
(102, 'If the area bounded by a continuous function `y = f(x)`, co-ordinate axes and the line x = a,\r\nwhere `a  epsilon R^+`, is equal to `ae^a` , then one such function can be', '`e^x(x+1)`', '`-e^x(x+1)`', '`e^x`', 'none of these', 'Area Under Curve', 1, 1),
(103, 'Value of the parameter â€˜aâ€™ such that the area bounded by `y=a^2x^2+ax+1`, co-ordinate axes\r\nand the line x = 1, attains the least value, is', '`-1/4`', '`-3/4`', '`-1/2`', 'none of these', 'Area Under Curve', 2, 1),
(104, 'The area bounded by `y=xe^|x|` and lines |x|=1,y=0 is,', '`4`', '`6`', '`1`', '`2`', 'Area Under Curve', 4, 1),
(105, 'The slope of the tangent to a curve y = f(x) at (x, f(x)) is 2x + 1. If the curve passes through\r\nthe point (1, 2), then the area of the region bounded by the curve, the x-axis and the line x =1 is:', '`1/6`', '`6`', '`5/6`', '`6/5`', 'Area Under Curve', 3, 1),
(106, 'The area enclosed in the region `x^2/a^2+y^2/b^2<=1 and \r\n\r\nx^2/a^2+y^2/b^2>=1` is', '`(piab)/4-(ab)/2`', '`(piab)/4`', '`(piab)`', 'none of these', 'Area Under Curve', 1, 1),
(107, 'The area of the loop of the curve `x^2 = y^2(1-y)` is', '`2/15`', '`15/14`', '`4/15`', '`8/15`', 'Area Under Curve', 3, 1),
(108, ' The area common to the region determined by `y>=sqrt(x)` , and `x^2+y^2 < 2` has the value', '`pi-2`', '`2pi-1`', '`3pi-sqrt(2)/3`', 'none of these', 'Area Under Curve', 4, 1),
(109, 'The area of the region for which `0< y< 3 â€“2x-x^2` and x> 0 is', '`int_1^3 (3-2x-x^2)dx`', '`int_0^3 (3-2x-x^2)dx`', '`int_0^1 (3-2x-x^2)dx`', '`int_-1^3 (2-2x-x^2)dx`', 'Area Under Curve', 3, 1),
(110, 'The area enclosed between the curves `y = sin^2x and y = cos^2x` in the interval `0<=x<=pi` is', '`2`', '`1/2`', '`1`', 'none of these', 'Area Under Curve', 2, 1),
(111, 'The area between the curves `y = xe^x and y = x e^-x` and the line x = 1 is', '`2e`', '`e`', '`2/e`', '`1/e`', 'Area Under Curve', 3, 1),
(112, 'If `A_n` is the area bounded by `y = (1-x^2)^n` and coordinate axes, `n  epsilon N`, then', '`A_n=A_(n-1)`', '`A_n<A_(n-1)`', '`A_n>A_(n-1)`', '`A_n=2A_(n-1)`', 'Area Under Curve', 2, 1),
(113, 'Let `f(x)=min{(x+1),sqrt(1-x)}`, then area bounded by f(x) and x-axis is:', '`1/6`', '`5/6`', '`7/6`', '`11/6`', 'Area Under Curve', 3, 1),
(114, 'Let `f(x)=({ (x^2 ;x<0),(x ;x>=0))`\r\nArea bounded by the curve y = f(x), y = 0 and `x = +- 3a is (9\r\na)/2`\r\n, then a =', '`1- or 1/2 `', '`1 or -1/2`', '`1 or 1/2`', 'none of these', 'Area Under Curve', 1, 1),
(115, 'The interval [a, b] such that the value of `int_a^b (2+x-x^2)dx`\r\n is max,is', '`[-2,1]`', '`[-2,-1]`', '`[1,2]`', '`[-1,2]`', 'Area Under Curve', 4, 1),
(116, 'If A(n) represents the area bounded by the curve y = n lnx, where `n  epsilon N` and n > 1, the x-axis\r\nand the lines x = 1 and x= e, then the value of A(n) + n A(n - 1) is equal to', '`n^2/(e+1)`', '`n^2/(e-1)`', '`n^2`', '`e.x^2`', 'Area Under Curve', 3, 1),
(117, 'Area of the region which consists of all the points satisfying the conditions `|x-y|+|x+y|<=8`\r\nand `xy >= 2`, is equal to:', '2(9-ln8) sq units', '4(7-ln2) sq units', '4(9-ln8) sq units', '4(7-ln8) sq units', 'Area Under Curve', 4, 1),
(118, 'A point â€˜Pâ€™ moves in xy - plane in such a way that [|x|]+[|y|]=1, where [ . ] denotes the\r\nG.I .F. Area of the region representing all possible positions of the point â€˜Pâ€™ is equal to', '8 sq units', '4 sq units', '16 sq units', '`2sqrt(2)` sq units', 'Area Under Curve', 1, 1),
(119, 'Area of the region bounded by `sqrt(2)<=2|x+y|<=2sqrt(2)` and the axes is', '`3/8`', '`3/2`', '`3/4`', 'none of these', 'Area Under Curve', 3, 1),
(120, 'The area of the smaller region in which the curve y=`[(x^2)/100+x/50]`,where [ . ] denotes G.I.F.,\r\ndivides the circle `(x-2)^2+(y+1)^2=4` is equal to', '`(2pi-3sqrt3)/3`', '`(3sqrt3-pi)/3`', '`(5pi-3sqrt3)/3`', '`(4pi-3sqrt3)/3`', 'Area Under Curve', 4, 1),
(121, ' Area bounded by the curve \n`y = e^(x^2)` , x-axis and the lines x = 1, x = 2 is given to be equal to ''a''\nsq. units. Area bounded by the curve `y = sqrt(ln(x))` , y-axis and the lines y = e and `y =e^4` is', '`2e^4-e-a`', '`e^4-e-a`', '`2e^4-2e-a`', '`2e^4-e-2a`', 'Area Under Curve', 1, 1),
(122, 'Area bounded by the curves `y=e^x , y=2x-x^2` and the line x = 0, x = 1 is equal to', '`(3e-2)/3`', '`(4e-5)/4`', '`(4e-7)/4`', '`(3e-5)/3`', 'Area Under Curve', 4, 1),
(123, 'Consider a triangle OAB formed by the points O = (0, 0), A = (2, 0), B = (1,`sqrt( 3)`). P(x, y) is an\narbitrary interior point of the triangle, moving in such a way that\n`d(P,OA)+d(P,AB)+d(P,OB)=sqrt(3)`,where `d(P, OA), d(P, AB) and d(P, OB)` represent the\ndistance of â€˜Pâ€™ from the sides OA,', '`2sqrt(3)`', '`sqrt6`', '`sqrt3`', 'none of these', 'Area Under Curve', 3, 1),
(124, 'Let `f(x) = ax^2+bx+c , where a  epsilon R^+ and b^2 - 4ac<0`. Area bounded by y f(x) , x-axis\r\nand the lines x = 0, x = 1 is equal to', '`1/6(3f(1)+f(-1)+2f(0))`', '`1/12(5f(1)+f(-1)+8f(0))`', '`1/6(3f(1)-f(-1)+2f(0))`', '`1/12(5f(1)-f(-1)+8f(0))`', 'Area Under Curve', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `email`) VALUES
('ravi', 'pankajcha', '50041', 'ravichanchlani47@gmail.com'),
('pankaj', 'pankaj', '50041', 'ravichanchlani48@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
