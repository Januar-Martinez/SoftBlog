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
primary key(idPregunta,idRespuesta),
foreign key(idPregunta) references pregunta(idPregunta)
);
insert into pregunta values(1, '¿Qué es SoftBlog?');
insert into respuesta values(1,1, 'SoftBlog es un sitio web en el que se puede compartir el conocimento de la programación de software');