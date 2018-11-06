create database electronicartists;
use electronicartists;


create table country(
	country_id int (3) Not null AUTO_INCREMENT,
    PRIMARY KEY(country_id),
country_name varchar(17)

);

INSERT INTO country VALUES
(country_id,'Germany'),
(country_id,'Netherlands'),
(country_id,'United Kingdom'),
(country_id,'Belgium'),
(country_id,'Sweden'),
(country_id,'Italy');


create table label(
	label_id int (3) Not null AUTO_INCREMENT,
    PRIMARY KEY(label_id),
    label_name varchar(17),
	country_id int(3), 
    FOREIGN KEY  (country_id) REFERENCES country(country_id)


);


INSERT INTO label VALUES
(label_id,'Klockworks',1),
(label_id,'Ostgut Ton',1),
(label_id,'Hardwax',1),
(label_id,'Soma',3),
(label_id,'Drumcode',5),
(label_id,'Second State',1);




CREATE TABLE artist(
	artist_id int(3) Not null AUTO_INCREMENT,
    PRIMARY KEY(artist_id),
	artist_name varchar(17),
    	artist_plays int (8),
    	country_id int(3), 
    FOREIGN KEY  (country_id) REFERENCES country(country_id),
	artist_pic varchar(500)
  
    );
    
 INSERT INTO artist VALUES
(artist_id,'Ben Klock',700678,1,'https://d31fr2pwly4c4s.cloudfront.net/a/c/6/994769_0_ben-klock-seth-troxler_400.jpg'),
(artist_id,'Sven Vath',567700,1,'https://pbs.twimg.com/profile_images/869929032019791872/53_n99WT_400x400.jpg'),
(artist_id,'Rebekah',308452,3,'https://i.scdn.co/image/82865adc96bc2b981ec021022c433aa90d069b79'),
(artist_id,'Amelie Lens',1500801,4,'https://pbs.twimg.com/profile_images/753255086663622656/mrlfy2Bu_400x400.jpg'),
(artist_id,'Pan-Pot',701780,1,'https://pbs.twimg.com/profile_images/862310918029537280/cQt7B7yl.jpg'),
(artist_id,'Slam',900001,3,'https://partyflock.nl/ov/images/artist/798_1196x1196_444771/Slam.jpg'),
(artist_id,'Adam Beyer',2015747,5,'https://pbs.twimg.com/profile_images/874670018935566338/MKW-rqlX_400x400.jpg'),
(artist_id,'Joris Voorn',89000,2,'https://i1.sndcdn.com/avatars-000346996214-t97p3k-t500x500.jpg'),
(artist_id,'Joseph Capriati',1203109,6,'https://pbs.twimg.com/profile_images/978365948800524292/sNOqPdyT_400x400.jpg'),
(artist_id,'Emmanuel',150608,6,'http://musicreactions.com/wp-content/uploads/2018/02/emmanuel.jpg');   
    



create table tracks(
	track_id int (3) Not null AUTO_INCREMENT,
    PRIMARY KEY(track_id),
    track_name varchar(17),
	track_plays int (8),
	label_id int(3), 
    FOREIGN KEY  (label_id) REFERENCES label(label_id),
	artist_id  int(3), 
    FOREIGN KEY (artist_id)  REFERENCES artist(artist_id)

);




INSERT INTO tracks VALUES
(track_id,'Subzero',2000000,2,1),
(track_id,'Pulse',40000,2,1),
(track_id,'Code Black',1000000,4,3),
(track_id,'The Riddle',200000,4,3),
(track_id,'Fear Paralysis',150000,4,3),
(track_id,'Thirteen',750000,4,3),
(track_id,'Later That Day',40000,4,3),
(track_id,'In Silence',1500000,5,4),
(track_id,'Drift',4000,6,4),
(track_id,'Stay With Me',75000,6,4),
(track_id,'Weltlinie',34000,6,5),
(track_id,'Ritual of Life',900000,2,2),
(track_id,'Clap Your Hands',555000,4,6),
(track_id,'Lose Your Mind',1900000,5,7),
(track_id,'Ringo',100000,6,8),
(track_id,'Limits',90000,1,9);




