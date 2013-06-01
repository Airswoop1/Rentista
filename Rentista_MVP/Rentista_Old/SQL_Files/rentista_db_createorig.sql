create table prospect
	(
		p_id int unsigned not null auto_increment primary key,
		g_id int unsigned,
		firstname char(50) not null,
		lastname char(50) not null,
		email varchar(50) not null,
		phone varchar(15),
		ID_File_Loc varchar(30), 
		BankStatement1_File_Loc varchar(30),
		BankStatement2_File_Loc varchar(30),
		EmploymentLetter_File_Loc varchar(30),
		PayStub_File_Loc varchar(30),
		References_File_Loc varchar(30),
		W2_File_Loc varchar(30),
		Registration_Flag varchar(3)
	);

create table broker
	(
		b_id int unsigned not null auto_increment primary key,
		firstname char(50) not null,
		lastname char(50) not null,
		email varchar(50) not null,
		phone varchar(15),
		brokerage char(50)		
	);

create table brokerages
	(
		brokerage char(50) not null,
		address varchar(50),
		email varchar(50),
		phone varchar(15)
		);
create table broker_brokerages
	(
		brokerage char(50),
		b_id int unsigned
		);

create table transaction
	(
		g_id int unsigned not null,
		b_id int unsigned not null,
		property varchar(100),
		unit varchar(15),
		city varchar(20),
		application_file_loc varchar(30) 
		);

create table approvals
	(
		p_id int unsigned not null,
		b_id int unsigned not null,
		ID tinyint unsigned,
		BS1 tinyint unsigned,
		BS2 tinyint unsigned,
		EMP tinyint unsigned,
		PS tinyint unsigned,
		Ref tinyint unsigned,
		W2 tinyint unsigned
		);
