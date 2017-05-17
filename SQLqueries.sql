CREATE TABLE dlukas_moto (
	id integer PRIMARY KEY AUTO_INCREMENT, 
	mudel varchar (100),
	omadused varchar(10000),
	hind varchar(500),
	pilt varchar(200)
)

INSERT INTO dlukas_moto (mudel, omadused, hind, pilt) VALUES 
('Cross', ' Võimsus 50 - 650cc, kerge ja äge, saab metsas hüppama ja võistlusel osaleda ', ' Uus alates 8000, kasutatud alates 2000 ', 'motopics/cross.jpg'),
('Cruiser', ' Võimas mootor, raske, soobib maantel sõitmiseks ja linnas oled nähtav ', ' Uus alates 10000, hea kasutatud saab osta alates 4000 ', 'motopics/cruiser.jpg'),
('Enduro', ' Suure pöördemomentiga mootor, saab sõita nii linnas kui ka maantel ja metsateedel. Mugav istmeasend, töökindel konstruktsioon ', ' Uus alates 8000, kasutatud alates 2000', 'motopics/enduro.jpg' ),
('Naked', ' Kõige levinumad motorattad, soovitav esimesena rattana. Lihtne juhtimine ja silmapaistav vaade ',' Uus alates 7000, kasutatud alates 1000 ', 'motopics/naked.jpg' ),
('Sport', ' Tahad tundma ennast rakeetina? Siis võta sport bike! Aga pea meeles: et sellega ohutu sõitma on vaja palju harjutama! ', 'Uus alates 9000, kasutatud alates 1500', 'motopics/sport.jpg'),
('Touring', 'Kui meeldivad pikkad reisid - võta touring. See on raske, hästi hoiab teed ja kõige mugavam motorattas ', 'Uus alates 12000, kasutatud alates 3000', 'motopics/touring.jpg')

