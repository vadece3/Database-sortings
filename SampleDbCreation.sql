--
--	DATABASE : library_db
--	Date: Jan 04 2021
-- 	Author: Daniel Moune
-- 	Email : moune.daniel@ictuniversity.edu.cm
--

-- Drop the library Database if it exists
drop database if exists library_db;

-- Drop the library Database user admin
drop user if exists 'library_db'@'localhost';

-- Create the library Database if it does not exists
create database if not exists library_db;

use library_db;

-- Create the library Database user admin
create user 'library_db'@'localhost' identified by 'Qwerty(123456789)';
grant all on library_db to 'library_db'@'localhost';

--	Creates the table of Students
create table if not exists student(
	matricule varchar(10) not null,
	name varchar(200) not null,
	phone_nbr integer(10) not null,
	email varchar(200),
	primary key (matricule)
);

--	Creates the table of books
create table if not exists book(
	isbn varchar(15) not null,
	title varchar(200) not null,
	author varchar(200) not null,
	publication_year integer(4) not null,
	primary key (isbn)
);

--	Creates the table for the relationship that
-- 	represent records of students borrowing books
create table if not exists student_book(
	id integer(15) not null auto_increment,
	student_matricule varchar(200) not null,
	book_isbn varchar(200) not null,
	date_of_issue date not null,
	date_of_return date not null,
	primary key (id),
	foreign key (student_matricule) references student (matricule),
	foreign key (book_isbn) references book (isbn)
);
