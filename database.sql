CREATE DATABASE music_application;

CREATE TABLE users(
    id int NOT null AUTO_INCREMENT,
   name varchar(255),
   email_id varchar(255),
   PASSWORD varchar(255),
   is_admin varchar (255)null,
   is_existingUser varchar (255) null,
   created_at timestamp,
   updated_at timestamp,
  	PRIMARY key (id)
);


CREATE TABLE artists(
    id int not null AUTO_INCREMENT,
   artists_name varchar(255),
   artists_image varchar(255),
   artist_description varchar(255),
   created_at timestamp,
   updated_at timestamp,
   PRIMARY KEY (id)
);

CREATE TABLE songs(
    id int not null AUTO_INCREMENT,
	song_name varchar(255),
    song_image varchar (255),
    song_path varchar (255),
    artists_id int not null,
    description varchar(255),
    created_at timestamp,
    updated_at timestamp,
    PRIMARY KEY (id),
    FOREIGN KEY (artists_id) REFERENCES artists (id)
);


SELECT * FROM `artists` WHERE artists_name = "ar" and id

SELECT * FROM `songs` WHERE song_name = "new song"

SELECT * FROM `songs` WHERE song_name = "new song"









INSERT INTO `users` (`id`, `name`, `email_id`, `PASSWORD`, `is_admin`, `is_existingUser`, `created_at`, `updated_at`) VALUES ('1', 'Sanjay', 'sanjay123@gmail.com', '12345678', '1', '0', current_timestamp(), '0000-00-00 00:00:00.000000');