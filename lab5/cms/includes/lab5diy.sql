use albumTable; 
select * from albumInfo;

INSERT INTO albums(albumID, albumName, artist, releaseDate, numTracks)
VALUES
(1, "The Black Album","Metallica", "1991-01-01", 12);


INSERT INTO albumInfo( albumName, artist, releaseDate, numTracks)
VALUES
( "Ten", "Pearl Jam", "1991-01-01", 11);
INSERT INTO albumInfo(albumName, artist, releaseDate, numTracks)
VALUES
( "Blood Sugar Sex Magik", "Red Hot Chili Peppers", "1991-01-01",17); 
select * from albumInfo;
INSERT INTO albumInfo(albumName, artist, releaseDate, numTracks)
VALUES
("Nevermind", "Nirvana", "1991-01-01", 13);
select * from albumInfo;

INSERT INTO albumInfo( albumName, artist, releaseDate, numTracks)
values("Badmotorfinger", "Soundgarden", "1991-01-01", 12);
