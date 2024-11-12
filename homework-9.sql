DROP DATABASE IF EXISTS homework_9;

CREATE DATABASE `homework_9`;

USE homework_9;

CREATE TABLE `library`
(
    `id`   int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    primary key (`id`)
);

CREATE TABLE `books`
(
    `id`   int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    primary key (`id`)    
);

CREATE TABLE `libraryBook`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `libraryID` int(11) NOT NULL,
    `bookID`    int(11) NOT NULL,
    primary key (`id`)
);

insert into library (id, name)
values (1, 'Queens Library');
insert into library (id, name)
values (2, 'Flushing Library');
insert into library (id, name)
values (3, 'Midtown Library');

insert into books (id, name)
values (123, 'Beartown');
insert into books (id, name)
values (378, 'Buffy the Vampire Slayer');
insert into books (id, name)
values (546, 'The Great Gatsby');

insert into libraryBook (libraryID, bookID)
values (2, 123);
insert into libraryBook (libraryID, bookID)
values (2, 378);
insert into libraryBook (libraryID, bookID)
values (3, 546);

select * 
from library 
where id=1;

select * 
from books 
where name like '%the%';

select * 
from books 
order by name ASC;

select books.name 
from books 
join libraryBook on books.id = libraryBook.bookID;

update books 
set name = 'Moby Dick' 
where id = 546;

delete from books 
where id = 546;