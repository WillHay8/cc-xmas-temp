drop table currencyCloudXmas;
create table currencyCloudXmas(
id mediumint not null auto_increment,
fname varchar(255),
lname varchar(255),
email varchar(255),
score int,
charity varchar(255),
primary key (id));

insert into currencyCloudXmas (fname, lname, email, score, charity) values ('will', 'hay', 'williamfmhay@gmail.com', 3, 'oxfam');

select * from currencyCloudXmas;
