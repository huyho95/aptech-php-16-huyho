-- EXERCISE 1 : CREATE DATABASE NAME IS YOURNAME_NAMEOFYOURPROJECT;
CREATE DATABASE aptech_php_16_huyho;

-- DELETE --
-- EXERCISE 1 : Remove user who has id = 5
create table aptech_php_16_huyho.users(
id INT PRIMARY KEY auto_increment,
name varchar(50)
);
select * from aptech_php_16_huyho.users;
insert INTO aptech_php_16_huyho.users(id,name) Values ('1','HUY');
insert into aptech_php_16_huyho.users(name) values('HONG'),('HANH'),('HUONG'),('HUYEN');
delete from aptech_php_16_huyho.users
where id = '5';

-- PRIMARY KEY & AUTO INCREMENT --
-- EXERCISE 1 : Change Id of your User table to Primary Key and make it auto increment each insert data.
alter TABLE aptech_php_16_huyho.users
modify column id int not null;
drop table aptech_php_16_huyho.users;
-- EXERCISE 2 : Add more data in your table.
create table aptech_php_16_huyho.users(
lastName varchar(50), 
firstName varchar(50), 
email varchar(50), 
role int, 
state int, 
createdDate date
);
insert into aptech_php_16_huyho.users(lastName, firstName, email, role, state, createdDate) values('Anna', 'Christopher', 'annateacher@yahoo.com', 2, 1, NOW());

-- FOREIGN KEY --
-- EXERCISE 1 : Create table Role describe role of user in database and add some values.
CREATE TABLE aptech_php_16_huyho.apRole
(
    rId int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    rTitle varchar(255) NOT NULL UNIQUE,
    rState int DEFAULT 1
);
select * from aptech_php_16_huyho.apRole;
INSERT INTO aptech_php_16_huyho.apRole (rTitle)
VALUES ('Administrator'),('Copywriter');
-- EXERCISE 2 : 
-- Change column Email in User table to NOT NULL UNIQUE.
ALTER table aptech_php_16_huyho.users
modify column email varchar(255) NOT NULL unique; 
-- Set column Role in User table default to 2.(*)sao không hiện default
ALTER TABLE aptech_php_16_huyho.users
modify column role int default 2;
-- state default to 1
ALTER TABLE aptech_php_16_huyho.users
modify column state int default 1;
-- Set colum uCreatedDate default is moment create data. 
ALTER TABLE aptech_php_16_huyho.users
MODIFY COLUMN createdDate datetime DEFAULT NOW();
-- Add FOREIGN KEY Role to Role table.
ALTER TABLE aptech_php_16_huyho.users
ADD FOREIGN KEY (role) REFERENCES aptech_php_16_huyho.apRole(rId); 
-- Then add some new values, no need to insert into columns have default value.  
INSERT INTO aptech_php_16_huyho.users (lastName,firstName,email)
VALUES ('Ford','Henry','henry.ford@gmail.com');
select * from aptech_php_16_huyho.users;

-- DROP DATABASE --
DROP DATABASE aptech_php_16_huyho;

-- create table--
-- EXERCISE 1 : CREATE TABLE User;
create database aptech_php_16;
CREATE TABLE aptech_php_16.users
(
    id int,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) unique,
    created_at datetime,
    modified_at datetime,
    deleted_at datetime
) ;

-- DROP TABLE --
-- EXERCISE 1 : DROP TABLE Users, it's mean delete users table
drop table aptech_php_16.users;

-- ALTER TABLE --
-- EXERCISE 1 : Add column day of birth (dob) in users table.
create table aptech_php_16.users
(
	dob date
);
ALTER TABLE aptech_php_12.users 
ADD dob date; 
-- EXERCISE 2 : DROP column dob in users table;
ALTER TABLE aptech_php_16.users 
DROP COLUMN DOB; 

-- INSERT DATA --
-- EXERCISE 1 : Add 5 users in your table
drop table aptech_php_16.users;
create table aptech_php_16.users
(
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) unique,
    created_at int default 2,
    ustate int default 1,
    uCreatedDate datetime
);
alter table aptech_php_16.users
add id int auto_increment primary key;
INSERT INTO aptech_php_16.users
    (id,last_name, first_name, email, created_at,uState,uCreatedDate)
VALUES
    (1, 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1, 1, NOW()),
    (2, 'John', 'Cenna', 'cenna.john@hotmail.com', 2, 1, NOW()),
    (3, 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2, 1, NOW()),
    (4, 'Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1, 1, NOW()),
    (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2, 1, NOW());
select * from aptech_php_16.users;

-- SELECT --
create database aptech_php;
create table aptech_php.apUsers
(
	name varchar(50),
    uRole int,
    state int
);
insert into aptech_php.apUsers(name,uRole,state) values
	('huy','1', '1'),
    ('ha','3', '2'),
	('huy','2', '3');
-- EXERCISE 1 : Display all of user in your database.
SELECT * from aptech_php.apUsers;
-- EXERCISE 2 : Display list user role column.
select distinct uRole from aptech_php.apusers;
-- EXERCISE 3 : Display top 3 user in your database.
SELECT * FROM aptech_php.apUsers 
LIMIT 3; 
-- EXERCISE 4 : Display users who have role = 1 and state = 1;
SELECT * FROM aptech_php.apUsers
WHERE uRole = 1 and state = 1;  

-- WHERE --
-- EXERCISE 1 : Display users who have role = 1
SELECT *
FROM aptech_php.apUsers
WHERE uRole = 1;

-- UPDATE --
-- EXERCISE 1 : Set state = -1 for user who has Id = 4 ;
alter table aptech_php.apusers
add id int auto_increment primary key;
UPDATE aptech_php.apUsers
SET state = -1 
WHERE id = 4;

