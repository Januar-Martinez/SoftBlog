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
insert into Usuarios values (1, 'Juanito Martinez', 'juanito123@softblog.com', md5(123456));