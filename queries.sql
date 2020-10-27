drop table if exists auto;
drop table if exists ember;
drop table if exists szerviz;

create table ember (
  id int(11) auto_increment not null primary key,
  nev varchar(32) not null,
  lakhely varchar(32),
  szuletes date not null
);

create table auto (
  id int(11) auto_increment not null primary key,
  marka varchar(128) not null,
  tipus varchar(128) not null,
  ar int(11) not null,
  ev date not null,
  muszaki int(11) not null,
  ember_id int(11) references ember(id)
);

create table szerviz (
  id int(11) auto_increment not null primary key,
  auto_id int(11) not null references auto(id),
  datum date not null
);

/* INSERTS */

insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (1, 'Renault', 'Fluence', 20.000, '2000.01.01', 1, 3);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (2, 'Opel', 'Meriva', 30.000, '2010.02.15', 1, 1);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (3, 'Skoda', 'Superb', 50.000, '2015.06.01', 1, 1);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (4, 'Opel', 'Astra', 25.000, '2005.12.03', 0, 2);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (5, 'Skoda', 'Fabia', 31.100, '2015.05.05', 1, 2);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (6, 'Volvo', 'S40', 42.010, '2012.07.30', 1, 5);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (7, 'Citroen', 'Picasso', 34.000, '2007.02.11', 0, NULL);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (8, 'Opel', 'Meriva', 29.000, '2010.11.19', 1, 1);
insert into auto (id, marka, tipus, ar, ev, muszaki, ember_id) values (9, 'Audi', 'A4', 25.000, '2010.11.19', 3, 1);

insert into ember (id, nev, lakhely, szuletes) values (1, 'Geza', 'Budapest', '1994.02.01');
insert into ember (id, nev, lakhely, szuletes) values (2, 'Istvan', 'Pecs', '1964.04.07');
insert into ember (id, nev, lakhely, szuletes) values (3, 'Gyozo', 'Gyor', '2000.12.12');
insert into ember (id, nev, lakhely, szuletes) values (4, 'Katalin', 'Kiskunfelegyhaza', '2001.07.07');
insert into ember (id, nev, lakhely, szuletes) values (5, 'Klara', NULL, '1995.05.30');
insert into ember (id, nev, lakhely, szuletes) values (6, 'Ilona', 'Miskolc', '1981.01.12');

insert into szerviz (id, auto_id, datum) values (1, 8, '2011.11.18');
insert into szerviz (id, auto_id, datum) values (2, 8, '2016.02.14');
insert into szerviz (id, auto_id, datum) values (3, 1, '2015.02.10');
insert into szerviz (id, auto_id, datum) values (4, 1, '2016.03.03');
insert into szerviz (id, auto_id, datum) values (5, 6, '2014.10.20');
insert into szerviz (id, auto_id, datum) values (6, 2, '2013.03.15');
insert into szerviz (id, auto_id, datum) values (7, 1, '2007.05.04');
insert into szerviz (id, auto_id, datum) values (8, 1, '2002.01.02');
insert into szerviz (id, auto_id, datum) values (9, 4, '2014.10.02');

/* TASK QUERIES */

select nev, lakhely from ember
left join auto on ember.id = auto.ember_id;

select * from auto
join ()
 on auto.id = szerviz.auto_id
where datediff(datum, ev) > 2;