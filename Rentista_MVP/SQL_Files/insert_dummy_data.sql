use RentistaMVP;

insert into prospect (g_id, firstname, lastname, email, phone, ID_File_Loc, BankStatement1_File_Loc, BankStatement2_File_Loc, EmploymentLetter_File_Loc, PayStub_File_Loc, References_File_Loc, W2_File_Loc, Additional_File_Loc) values
	(1, 'Brian', 'Casey', 'bbc211@gmail.com', '215-321-4321', null, null, null, null, null, null, null, null),
	(1, 'Matt', 'Cramer', 'matt.cramer@gmail.com', '345-234-2123', null, null, null, null, null, null, null, null),
	(2, 'Kunal', 'Mehta', 'kmehta@gmail.com', '231-231-4321', null, null, null, null, null, null, null, null),
	(2, 'Shiv', 'Sehgal', 'ssehgal@gmail.com', '444-213-2345', null, null, null, null, null, null, null, null);

insert into broker (firstname, lastname, email, phone, brokerage) values 
	('Josh', 'Kwilecki', 'jkwilecki@town.com','432-234-5433', 'Town'),
	('Al', 'Tal', 'atal@bestapartments.com','123-234-4567', 'Best Apartments');

insert into transaction (g_id, b_id, property, unit, city, application_file_loc) values 
	(1, 1, '505 W 37th Street', '32H', 'Manhattan', '505app.pdf'),
	(2, 2, '202 E 33rd Street', '16J', 'Manhattan', '202E33rdSt.pdf');
