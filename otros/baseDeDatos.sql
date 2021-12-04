drop database if exists SoftBlog;
create database SoftBlog;
use SoftBlog;
create table Usuarios(
idUsuario int,
nombre varchar(20),
Email varchar(70),
password varchar(32),
primary key(idUsuario)
);
create table pregunta(
idPregunta int,
pregunta varchar(500),
primary key(idPregunta)
);
create table respuesta(
idPregunta int,
idRespuesta int,
respuesta varchar(500),
foreign key(idPregunta) references pregunta(idPregunta)
);
insert into Usuarios values (1, 'Juanito Martinez', 'juanito123@softblog.com', md5(123456)),
							(2, 'Januar Martinez', 'januar19@softblog.com', md5(119323));