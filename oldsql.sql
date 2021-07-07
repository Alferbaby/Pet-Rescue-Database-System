CREATE TABLE Adopter(
ID INTEGER PRIMARY KEY,
Last_Name Char(100),
First_Name Char(100),
Address Char(100),
PhoneNumber Char(20)
);
CREATE TABLE AdoptedPet(
ChipID INTEGER PRIMARY KEY,
Name Char(100),
Age INTEGER,
Description Char(200),
AID INTEGER,
FOREIGN KEY (AID) REFERENCES Adopter(ID) ON DELETE SET NULL  ON UPDATE CASCADE
);
CREATE TABLE Species(
Name Char(30),
Breed Char(30),
Primary key(Name, Breed)
);
CREATE TABLE Dog(
Name Char(30) NOT NULL,
Breed Char(30) NOT NULL,
PRIMARY KEY (Name,Breed),
FOREIGN KEY (Name,Breed) REFERENCES Species(Name,Breed) ON DELETE CASCADE ON UPDATE NO ACTION
);
CREATE TABLE Cat(
Name Char(30) NOT NULL,
Breed Char(30) NOT NULL,
PRIMARY KEY (Name,Breed),
FOREIGN KEY (Name,Breed) REFERENCES Species(Name,Breed) ON DELETE CASCADE ON UPDATE NO ACTION
);
CREATE TABLE OTHER(
Name Char(30) NOT NULL,
Breed Char(30) NOT NULL,
Feature Char(100),
PRIMARY KEY (Name,Breed),
FOREIGN KEY (Name,Breed) REFERENCES Species(Name,Breed) ON DELETE CASCADE ON UPDATE NO ACTION
);
CREATE TABLE Pet_IsOf(
ChipID INTEGER PRIMARY KEY,
SName Char(100) NOT NULL,
SBreed Char(100) NOT NULL,
FOREIGN KEY (SName, SBreed) REFERENCES Species (Name,Breed)ON DELETE NO ACTION ON UPDATE CASCADE
);
CREATE TABLE Pet(
ChipID INTEGER PRIMARY KEY,
Name Char(100),
Age INTEGER,
Mybool boolean not null default 0,
Description Char(40)
);


CREATE TABLE postalCode_City_Province(
PostalCode Char(20) PRIMARY KEY,
Province Char(100),
City Char(100)
);
CREATE TABLE Date_DailyRescue(
Date DATE PRIMARY KEY,
Daily_Rescue_Amount INTEGER
);

CREATE TABLE RescueEvent(
Location Char(100) NOT NULL,
PostalCode Char(20) NOT NULL,
Date DATE NOT NULL,
Description Char(200),
PRIMARY KEY(Location,PostalCode,Date),
FOREIGN KEY (PostalCode) REFERENCES postalCode_City_Province(PostalCode) ON DELETE NO ACTION ON UPDATE CASCADE,
FOREIGN KEY (Date) REFERENCES Date_DailyRescue(Date) ON DELETE NO ACTION
ON UPDATE CASCADE
);

CREATE TABLE Staff(
SID INTEGER PRIMARY KEY,
Last_Name Char(100),
First_Name Char(100)
);
CREATE TABLE SupervisedRecord(
ARID INTEGER PRIMARY KEY,
Begin_Date DATE,
End_Date DATE,
Description Char(200),
SID INTEGER,
FOREIGN KEY (SID) REFERENCES Staff (SID) ON DELETE NO ACTION ON UPDATE
CASCADE
);
CREATE TABLE EmergencyContact_IsAsscociated(
Name Char(100),
AID INTEGER,
phoneNumber Char(40),
PRIMARY KEY (NAME,AID),
FOREIGN KEY (AID) REFERENCES Adopter(ID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Vet (
VID INTEGER PRIMARY KEY,
Name Char(100),
Specialization Char(100)
);
CREATE TABLE PetHas_MedicalRecord (
MID INTEGER PRIMARY KEY,
Description Char(200),
Vaccine_status Char(100),
Sterilization_status Char(100),
ChipID INTEGER,
FOREIGN KEY (ChipID) REFERENCES Pet(ChipID) ON DELETE CASCADE ON UPDATE
CASCADE
);
CREATE TABLE AdoptionRecords_with(
ARID INTEGER PRIMARY KEY,
ID INTEGER,
Begin_Date DATE,
End_date DATE,
Description Char(100),
FOREIGN KEY (ID) REFERENCES Adopter(ID) ON DELETE SET NULL ON UPDATE
CASCADE
);
CREATE TABLE AdoptionRecord_isAssociatedWith(
ARID INTEGER PRIMARY KEY,
PID INTEGER NOT NULL,
Begin_Date DATE,
End_date DATE,
Description Char(100),
FOREIGN KEY (PID) REFERENCES Pet(ChipID) ON DELETE Set NULL ON UPDATE CASCADE
);
CREATE TABLE MedicalRecord_manage(
MID INTEGER PRIMARY KEY,
VID INTEGER NOT NULL,
Description Char(100),
Vaccine_status Char(100),
Sterilization_status Char(100),
FOREIGN KEY (VID) REFERENCES Vet(VID) ON DELETE NO ACTION ON UPDATE CASCADE
);
CREATE TABLE Pet_Include(
ChipID INTEGER PRIMARY KEY,
Name Char(100),
Age INTEGER,
Description Char(200),
Location Char(40),
PostalCode Char(40),
Date DATE,
FOREIGN KEY (Location,PostalCode,Date) REFERENCES RescueEvent (Location,PostalCode,Date) ON DELETE NO ACTION ON UPDATE CASCADE
);


INSERT INTO Adopter(ID, Last_Name, First_Name, Address,PhoneNumber)
VALUES (1,'Wang','Sam','7780 lansdowne road,Richmond,BC', '7783186578');
INSERT INTO Adopter(ID, Last_Name, First_Name, Address,PhoneNumber)
VALUES (2,'Anna','James','2075 West Mall, Vancouver, BC','7783185634');
INSERT INTO Adopter(ID, Last_Name, First_Name, Address,PhoneNumber)
VALUES (3,'Xie','Heluo','3333 University Way,Kelowna, BC','7783189986');
INSERT INTO Adopter(ID, Last_Name, First_Name, Address,PhoneNumber)
VALUES (4,'Lin','Helen','1935 Lower Mall, Vancouver', '6047216653');
INSERT INTO Adopter(ID, Last_Name, First_Name, Address,PhoneNumber)
VALUES (5,'Ji','Victory','7388 Kingsway,Burnaby,BC', '7789189888');

INSERT INTO AdoptedPet(ChipID, Name, Age,Description,AID)
VALUES (1, 'Happy',3, 'be alone', 1 );
INSERT INTO AdoptedPet(ChipID, Name, Age,Description,AID)
VALUES (2, 'Bebe ', 4 , 'aggressive ', 2 );
INSERT INTO AdoptedPet(ChipID, Name, Age,Description,AID)
VALUES (3, 'Molly ', 5, 'smart ', 3 );
INSERT INTO AdoptedPet(ChipID, Name, Age,Description,AID)
VALUES (4, 'Bob', 2, 'friendly ', 4 );
INSERT INTO AdoptedPet(ChipID, Name, Age,Description,AID)
VALUES (5, 'Mac', 7 , 'aggressive', 5);

INSERT INTO Species(Name, Breed)
VALUES('Dog', 'Welsh Corgi');
INSERT INTO Species(Name, Breed)
VALUES('Dog', 'Chihuahua');
INSERT INTO Species(Name, Breed)
VALUES('Dog', 'Shiba');
INSERT INTO Species(Name, Breed)
VALUES('Dog', 'Poodle');
INSERT INTO Species(Name, Breed)
VALUES('Dog', 'Labrador');
INSERT INTO Species(Name, Breed)
VALUES('Cat', 'Ragdoll');
INSERT INTO Species(Name, Breed)
VALUES('Cat', 'British Shorthair');
INSERT INTO Species(Name, Breed)
VALUES('Cat', 'Birman');
INSERT INTO Species(Name, Breed)
VALUES('Cat', 'American Shorthair');
INSERT INTO Species(Name, Breed)
VALUES('Cat', 'Somali');
INSERT INTO Species(Name, Breed)
VALUES('Other', 'Amazon Parrot');
INSERT INTO Species(Name, Breed)
VALUES('Other', 'Caiman Lizard');
INSERT INTO Species(Name, Breed)
VALUES('Other', 'Syrian Hamster');

INSERT INTO Dog(Name, Breed)
VALUES('Dog', 'Welsh Corgi');
INSERT INTO Dog(Name, Breed)
VALUES('Dog', 'Chihuahua');
INSERT INTO Dog(Name, Breed)
VALUES('Dog', 'Shiba');
INSERT INTO Dog(Name, Breed)
VALUES('Dog', 'Poodle');
INSERT INTO Dog(Name, Breed)
VALUES('Dog', 'Labrador');

INSERT INTO Cat(Name, Breed)
VALUES('Cat', 'Ragdoll');
INSERT INTO Cat(Name, Breed)
VALUES('Cat', 'British Shorthair');
INSERT INTO Cat(Name, Breed)
VALUES('Cat', 'Birman');
INSERT INTO Cat(Name, Breed)
VALUES('Cat', 'American Shorthair');
INSERT INTO Cat(Name, Breed)
VALUES('Cat', 'Somali');

INSERT INTO Other(Name, Breed,Feature)
VALUES('Other', 'Amazon Parrot' , 'Have a remarkable ability to mimic human speech.' );
INSERT INTO Other(Name, Breed,Feature)
VALUES('Other', 'Caiman Lizard' , 'Smart and learn quickly.' );
INSERT INTO Other(Name, Breed,Feature)
VALUES('Other', 'Syrian Hamster' , 'Pocket Pets.' );


INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES( 1, 'Dog' , 'Chihuahua' );
INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES(2 , 'Dog' , 'Welsh Corgi' );
INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES(3 , 'Cat' , 'Ragdoll' );
INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES( 4, 'Cat' , 'Birman' );
INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES( 5, 'Other' , 'Amazon Parrot' );
INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES( 6, 'Cat' , 'Somali' );
INSERT INTO Pet_IsOf(ChipID, SName, SBreed)
VALUES( 7, 'Other' , 'Syrian Hamster' );


INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (1, 'Happy',3, 1,'be alone' );
INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (2, 'Bebe', 4 , 1,'aggressive');
INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (3, 'Molly', 5, 1,'smart' );
INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (4, 'Bob', 2, 1,'friendly');
INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (5, 'Mac', 7 , 1,'aggressive');
INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (6, 'Apple', 3 , 0,'aggressive');
INSERT INTO Pet(ChipID, Name, Age, Mybool,Description)
VALUES (7, 'Pie', 2 , 0,'aggressive');


INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'V6T1W1', 'BC' , 'Vancouver');
INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'M5S1A1', 'ONT' , 'Toronto');
INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'H3A0G4', 'QC' , 'Montral');
INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'H3G1M8', 'QC' , 'Montral');
INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'V5A1S6', 'BC' , 'Burnaby');
INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'K9A1S6', 'BC' , 'Kelowna');
INSERT INTO postalCode_City_Province(PostalCode, Province, City)
VALUES ( 'V0A3T6', 'BC' , 'Richmond');


INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-11',2);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-12',3);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-13',5);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-14',2);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-15',4);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-16',1);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-17',2);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-18',1);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-19',1);
INSERT INTO Date_DailyRescue(Date, Daily_Rescue_Amount)
VALUES ('2020-01-20',1);


INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-11', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-12', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-13', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-14', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-15', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-16', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-17', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-18', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-19', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'V6T1W1', '2020-01-20', 'No additional info');

INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-11', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-13', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-14', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-15', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-16', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-17', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-18', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-19', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '2329 West Mall', 'M5S1A1', '2020-01-20', 'No additional info');

INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '27 King‘s College Cir', 'M5S1A1', '2020-01-12', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '845 Rue Sherbrooke Ouest', 'H3A0G4', '2020-01-13', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '1455 Boulevard de Maisonneuve O','H3G1M8', '2020-01-14','No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '1455 Boulevard de Maisonneuve O','H3G1M8', '2020-01-15','No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '8888 University Dr', 'V5A1S6', '2020-01-16', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '8888 University Dr', 'V5A1S6', '2020-01-17', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '1455 Boulevard de Maisonneuve O','K9A1S6', '2020-01-17','No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '6688 University St', 'K9A1S6', '2020-01-18', 'No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '1355 Boulevard de Maisonneuve O','V0A3T6', '2020-01-19','No additional info');
INSERT INTO RescueEvent(Location,PostalCode, Date, Description)
VALUES ( '9127 University Dr', 'V0A3T6', '2020-01-20', 'No additional info');

INSERT INTO Staff(SID, Last_Name, First_Name)
VALUES( 1, 'Christiane', 'Amanpour');
INSERT INTO Staff(SID, Last_Name, First_Name)
VALUES( 2, 'Hannah', 'Arendt' );
INSERT INTO Staff(SID, Last_Name, First_Name)
VALUES( 3, 'Russell', 'Baker' );
INSERT INTO Staff(SID, Last_Name, First_Name)
VALUES( 4, 'James', 'Baldwin' );
INSERT INTO Staff(SID, Last_Name, First_Name)
VALUES( 5, 'Meyer', 'Berger' );


INSERT INTO SupervisedRecord(ARID, Begin_Date, End_Date, Description,SID)
VALUES (1, '2021-04-21', NULL, 'not Finished', 1);
INSERT INTO SupervisedRecord(ARID, Begin_Date, End_Date, Description,SID)
VALUES (2, '2021-04-22', NULL, 'not Finished', 2);
INSERT INTO SupervisedRecord(ARID, Begin_Date, End_Date, Description,SID)
VALUES (3, '2021-04-23', NULL, 'not Finished', 3) ;
INSERT INTO SupervisedRecord(ARID, Begin_Date, End_Date, Description,SID)
VALUES (4, '2021-04-24', NULL, 'not Finished', 4);
INSERT INTO SupervisedRecord(ARID, Begin_Date, End_Date, Description,SID)
VALUES (5, '2021-04-25', NULL, 'not Finished', 5);

INSERT INTO EmergencyContact_IsAsscociated( Name,AID ,phoneNumber)
VALUES('Emily' , 2, 6048322201);
INSERT INTO EmergencyContact_IsAsscociated( Name,AID ,phoneNumber)
VALUES('April' , 1, 6037224211);
INSERT INTO EmergencyContact_IsAsscociated( Name,AID ,phoneNumber)
VALUES('Justin' , 3, 6076223221);
INSERT INTO EmergencyContact_IsAsscociated( Name,AID ,phoneNumber)
VALUES('Bill' , 4, 60282234856);
INSERT INTO EmergencyContact_IsAsscociated( Name,AID ,phoneNumber)
VALUES('Mandy' ,5 , 6091324413);
INSERT INTO EmergencyContact_IsAsscociated( Name,AID ,phoneNumber)
VALUES('Lily' ,5 , 6291392413);


INSERT INTO Vet (VID, Name, Specialization)
VALUES(1 , 'Lin', 'Surgery');
INSERT INTO Vet (VID, Name, Specialization)
VALUES(2 , 'Lynya', 'Internal Medicine');
INSERT INTO Vet (VID, Name, Specialization)
VALUES(3 , 'Jasmine', 'Surgery');
INSERT INTO Vet (VID, Name, Specialization)
VALUES(4 , 'Aladdin', 'Emergency Treatment');
INSERT INTO Vet (VID, Name, Specialization)
VALUES(5 ,'Bily' , 'Emergency Treatment');



INSERT INTO PetHas_MedicalRecord(MID, Description,Vaccine_status,Sterilization_status,ChipID)
VALUES( 1, 'Yes', 'Yes', 'Yes', 1);
INSERT INTO PetHas_MedicalRecord(MID, Description,Vaccine_status,Sterilization_status,ChipID)
VALUES(2, 'Yes', 'No', 'No',2);
INSERT INTO PetHas_MedicalRecord(MID, Description,Vaccine_status,Sterilization_status,ChipID)
VALUES(3, 'Yes', 'No', 'Yes',3);
INSERT INTO PetHas_MedicalRecord(MID, Description,Vaccine_status,Sterilization_status,ChipID)
VALUES(4 , 'No', 'Yes', 'No',4);
INSERT INTO PetHas_MedicalRecord(MID, Description,Vaccine_status,Sterilization_status,ChipID)
VALUES(5 , 'Yes', 'Yes', 'No',5);




INSERT INTO AdoptionRecords_with(ARID,ID,Begin_Date,End_date,Description)
VALUES (1, 1 , '2021-04-21',NULL, 'Wang adopted Dog');
INSERT INTO AdoptionRecords_with(ARID,ID,Begin_Date,End_date,Description)
VALUES (2, 2 , '2021-04-22',NULL, 'Anna adopted Dog');
INSERT INTO AdoptionRecords_with(ARID,ID,Begin_Date,End_date,Description)
VALUES (3, 3 , '2021-04-23',NULL, 'Xie adopted Cat');
INSERT INTO AdoptionRecords_with(ARID,ID,Begin_Date,End_date,Description)
VALUES (4, 4 , '2021-04-24',NULL, 'Lin adopted Cat');
INSERT INTO AdoptionRecords_with(ARID,ID,Begin_Date,End_date,Description)
VALUES (5, 5 , '2021-04-25',NULL, 'Ji adopted Other');


INSERT INTO AdoptionRecord_isAssociatedWith(ARID,PID,Begin_Date,End_date,Description)
VALUES (1, 1 , '2021-04-21',NULL, 'Wang adopted Dog');
INSERT INTO AdoptionRecord_isAssociatedWith(ARID,PID,Begin_Date,End_date,Description)
VALUES (2, 2 , '2021-04-22',NULL, 'Anna adopted Dog');
INSERT INTO AdoptionRecord_isAssociatedWith(ARID,PID,Begin_Date,End_date,Description)
VALUES (3, 3 , '2021-04-23',NULL, 'Xie adopted Cat');
INSERT INTO AdoptionRecord_isAssociatedWith(ARID,PID,Begin_Date,End_date,Description)
VALUES (4, 4 , '2021-04-24',NULL, 'Lin adopted Cat');
INSERT INTO AdoptionRecord_isAssociatedWith(ARID,PID,Begin_Date,End_date,Description)
VALUES (5, 5 , '2021-04-25',NULL, 'Ji adopted Other');




INSERT INTO MedicalRecord_manage(MID,VID, Description, Vaccine_status,Sterilization_status)
VALUES( 1, 1, 'Yes', 'Yes', 'Yes');
INSERT INTO MedicalRecord_manage(MID,VID, Description, Vaccine_status,Sterilization_status)
VALUES(2 , 2 , 'Yes', 'No', 'No');
INSERT INTO MedicalRecord_manage(MID,VID, Description, Vaccine_status,Sterilization_status)
VALUES(3 , 3 , 'Yes', 'No', 'Yes');
INSERT INTO MedicalRecord_manage(MID,VID, Description, Vaccine_status,Sterilization_status)
VALUES(4 , 4 , 'No', 'Yes', 'No');
INSERT INTO MedicalRecord_manage(MID,VID, Description, Vaccine_status,Sterilization_status)
VALUES(5 , 5 , 'Yes', 'Yes', 'No');



INSERT INTO Pet_Include(ChipID, Name, Age, Description,Location,Date,PostalCode)
VALUES(1, 'Happy',3, ' be alone', '2329 West Mall', '2020-01-11' , 'V6T1W1');
INSERT INTO Pet_Include(ChipID, Name, Age, Description,Location,Date,PostalCode)
VALUES( 2, 'Bebe', 4, 'aggressive', '27 King‘s College Cir', '2020-01-12', 'M5S1A1');
INSERT INTO Pet_Include(ChipID, Name, Age, Description,Location,Date,PostalCode)
VALUES(3, 'Molly', 5, 'smart' , '845 Rue Sherbrooke Ouest', '2020-01-13','H3A0G4');

INSERT INTO Pet_Include(ChipID, Name, Age, Description,Location,Date,PostalCode)
VALUES(4, 'Bob', 2, 'friendly', '1455 Boulevard de Maisonneuve O','2020-01-14', 'H3G1M8');

INSERT INTO Pet_Include(ChipID, Name, Age, Description,Location,Date,PostalCode)
VALUES(5, 'Mac', 7 , 'aggressive','1455 Boulevard de Maisonneuve O', '2020-01-15', 'H3G1M8');



