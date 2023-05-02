create database Redlock;
use Redlock;
create table users (
    
    ID int primary key,
    Nama varchar (100) not null,
    Alamat varchar (100) not null,
    Jabatan varchar (100) not null

);
insert into users values 
(1, 'Antony', 'Bekasi', 'mahasiswa'),
(2, 'Sus', 'Bekasi', 'mahasiswa'),
(3, 'Engineer', 'Bekasi', 'mahasiswa');

