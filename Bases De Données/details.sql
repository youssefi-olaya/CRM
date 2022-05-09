drop database if exists details;
create database if not exists details;
use details;

create table projets(
    idprojets int(4) auto_increment primary key,
    nomprojets varchar(50),
    datedebut  date,
    etatprojet varchar(10)    
);


create table clients(
    idclients int(4) auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    civilite varchar(1),
    photo varchar(100),
    idprojets int(4)
);


create table utilisateur(
    iduser int(4) auto_increment primary key,
    login varchar(50),
    email varchar(255),
    role varchar(50),   -- admin ou visiteur
    etat int(1),        -- 1:activé 0:desactivé
    pwd varchar(255)
);


create table devis(
    iddevis int(4) auto_increment primary key,
    idprojets int(4),
    idclients int(4),
    montant int(4)
);


create table factures(
 idfacture int(4) auto_increment primary key,
 datefacture date,
 idprojets int(4),
 idclients int(4),
 iddevis int(4)
);


INSERT INTO projets (idprojets,nomprojets,datedebut ,etatprojet)  VALUES
	(1,'projet1','2022-03-23','en Cours..'),
	(2,'projet2','2022-04-23','en Cours..'),
	(3,'projet3','2022-04-23','terminer');

Alter table clients add constraint
    foreign key(idprojets) references  projets(idprojets);
Alter table  devis add constraint 
    foreign key(idprojets) references  projets(idprojets);
Alter table  devis add constraint 
    foreign key(idclients) references  clients(idclients);
Alter table  factures add constraint 
    foreign key(idprojets) references  projets(idprojets);
alter table  factures add constraint 
    foreign key(idclients) references  clients(idclients);
alter table  factures add constraint 
    foreign key(iddevis) references  devis(iddevis);


		
	
INSERT INTO utilisateur(login,email,role,etat,pwd) VALUES 
    ('admin','admin@gmail.com','ADMIN',1,md5('123')),
    ('user1','user1@gmail.com','VISITEUR',0,md5('123')),
    ('olaya youssefi','olayayoussefi@gmail.com','VISITEUR',0,md5('12345')),
    ('user2','user2@gmail.com','VISITEUR',1,md5('123'));

INSERT INTO clients(nom,prenom,civilite,photo,idprojets) VALUES
    ('SAADAOUI','MOHAMMED','M','Chrysantheme.jpg',1),
	('CHAABI','OMAR','M','Desert.jpg',2),
	('SALIM','RACHIDA','F','Hortensias.jpg',3),
	('FAOUZI','NABILA','F','Meduses.jpg',1),
	('ETTAOUSSI','KAMAL','M','Penguins.jpg',2),
	('EZZAKI','ABDELKARIM','M','Tulipes.jpg',3),
    
     ('SAADAOUI','MOHAMMED','M','Chrysantheme.jpg',1),
	('CHAABI','OMAR','M','Desert.jpg',2),
	('SALIM','RACHIDA','F','Hortensias.jpg',3),
	('FAOUZI','NABILA','F','Meduses.jpg',1),
	('ETTAOUSSI','KAMAL','M','Penguins.jpg',2),
	('EZZAKI','ABDELKARIM','M','Tulipes.jpg',3),

    ('SAADAOUI','MOHAMMED','M','Chrysantheme.jpg',1),
	('CHAABI','OMAR','M','Desert.jpg',2),
	('SALIM','RACHIDA','F','Hortensias.jpg',3),
	('FAOUZI','NABILA','F','Meduses.jpg',1),
	('ETTAOUSSI','KAMAL','M','Penguins.jpg',2),
	('EZZAKI','ABDELKARIM','M','Tulipes.jpg',3);


INSERT INTO devis(idprojets,idclients,montant ) VALUES 
    (1,1,56),
    (2,2,70),
    (3,3,23);
  
  INSERT INTO factures ( datefacture , idprojets ,idclients ,iddevis  ) VALUES 
    ('2022-03-02',1,1,1),
    ('2022-03-04',2,2,2),
    ('2022-03-05',3,3,3);

select * from projets ;
select idclients,nom,prenom,civilite,photo , nomprojets  from clients c,projets p where p.idprojets=c.idprojets;
select * from utilisateur;
select iddevis,nomprojets,nom,montant from devis d,projets p,clients c where c.idclients=d.idclients and p.idprojets=d.idprojets;



