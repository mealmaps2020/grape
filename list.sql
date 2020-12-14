SET SQL_SAFE_UPDATES = 0;



DROP DATABASE IF EXISTS restaurants;

CREATE DATABASE restaurants;

USE restaurants; 

CREATE TABLE booking
(
Restaurant VARCHAR(50) NOT NULL,
OpeningHours VARCHAR(25),
Phone VARCHAR(25),
Longitude VARCHAR(25),
Latitude VARCHAR(25),
PRIMARY KEY (Restaurant)
);




INSERT INTO booking
(Restaurant, OpeningHours, Phone, Latitude, Longitude)
VALUES
('Flanagans Bar and Restaurant', '09:00-22:00','01 873 1388', '53.3503° N', '6.2609° W'),
('Restaurant Patrick Guilbaud','12:30-14:00,19:00-22:00', '01 676 4192', '53.3384° N', '6.2530° W'),
('Yacht Bar and Restaurant', '12:00-23:30', '01 833 6364', '53.3617° N', '6.2151° W'),
('The Green Hen', '12:00-23:00', '01 670 7238', '53.3431° N', '6.2623° W'),
('Mulino Italian Restaurant', '12:00-22:00', '01 831 3636', '53.3792° N', '6.1764° W'),
('The Revolution', '09:00-22:00', '01 406 4104', '53.3120° N', '6.2751° W'),
('Nero XVII', '16:00-21:00', '01 850 0500', '53.3613° N', '6.2847° W'),
('Fayrouz Restaurant', '16:00-23:00', '01 556 0404', '53.3383° N', '6.2827° W'),
('Brass Onion Bistro', '09:30-21:30', '01 836 0780', '53.3757° N', '6.23982° W'),
('The Hudson Rooms Bistro', '09:00-14:00, 17:00-22:00', '01 563 8232', '53.3527° N', '6.3939° W'),
('Dall Italiano Restaurant Glasnevin', '10:00-22:00', '01 830 2549', '53.3660° N', '6.2719° W'),
('Chuan City', '16:30-23:30', '35314509032', '53.3242° N', '6.3290° W'),
('The White House', '10:00-00:30', '35318322323', '53.3980° N', '6.1271° W'),
('Siam Thai Restaurant', '12:00-23:00', '01 296 4500', '53.4520° N', '6.1534° W'),
('PHX Bistro', '11:30-22:00', '01 611 1161', '53.34675° N', '6.2815° W'),
('The Eden House', '08:30-23:00', '01 493 1492', '53.2812° N', '6.2760° W'),
('Burnells', '06:30-00:30', '01 866 1870', '53.4036° N', '6.1797° W'),
('The Vanilla Pod Carrickmines', '08:30-16:30', '01 294 5111', '53.2518° N', '6.1843° W'),
('Cornucopia Wholefoods Restaurant', '09:30-21:00', '01 677 7583', '53.3431° N', '6.2614° W'),
('Wrights Anglers Rest', '12:00-00:30', '01 820 4351', '53.3591° N', '6.3586° W'),
('Pandinis Restaurant', '15:00-21:00', '01 411 1111', '53.3143° N', '6.3922° W'),
('Wuff', '08:00-16:00, 17:00-23:00', '01 633 7959', '53.3475° N', '6.2825° W');

SELECT * FROM booking;