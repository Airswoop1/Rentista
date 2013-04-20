insert into prospect  values
	('',1, 'Kevin', 'Miller', 'Airswoop1@gmail.com', '201-655-1789', null, null, null, null, null, null, null, null),
	('',1, 'Brian', 'Casey', 'Airswoop1@gmail.com', '215-321-4321', null, null, null, null, null, null, null, null),
	('',1, 'Matt', 'Cramer', 'Airswoop1@gmail.com', '345-234-2123', null, null, null, null, null, null, null, null),
	('',2, 'Kunal', 'Mehta', 'Airswoop1@gmail.com', '231-231-4321', null, null, null, null, null, null, null, null),
	('',2, 'Shiv', 'Sehgal', 'Airswoop1@gmail.com', '444-213-2345', null, null, null, null, null, null, null, null);

insert into broker values 
	('','Josh', 'Kwilecki', 'jkwilecki@town.com','432-234-5433', 'Town'),
	('','Al', 'Tal', 'atal@bestapartments.com','123-234-4567', 'Best Apartments');

insert into transaction values 
	(1, 1, '505 W 37th Street', '32H', 'Manhattan', '505app.pdf'),
	(2, 2, '202 E 33rd Street', '16J', 'Manhattan', '202E33rdSt.pdf');

insert into approvals values
	(1, 1, 0,0,0,0,0,0,0),
	(2, 1, 0,0,0,0,0,0,0),
	(3, 1, 0,0,0,0,0,0,0),
	(4, 2, 0,0,0,0,0,0,0),
	(5, 2, 0,0,0,0,0,0,0);

insert into brokerages values 
	('Town', '231 E 74th St. New York, NY', 'Airswoop1@gmail.com', '232-232-2323'),
	('Best Apartments', '444 Houston St. New York, NY', 'Airswoop1@gmail.com', '123-232-1234');

insert into broker_brokerages values 
	('Town', 1),
	('Best Apartments', 2);