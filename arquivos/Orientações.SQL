/*Sites: 

_Usuário

○NUMEROSESCOLHODOS recebe números do servidor é os coloca nos botões;

● Recebe NOME, E-MAIL e NUMEROSESCOLHIDOS. Manda para servidor, armazenando em PESSOAS;

_Administrador

●Recebe um arquivo XML, tira os números no XML e mandar para servidor;

Mostrar pessoas, ordenados com nome e-mail númerosescolhidos e datas;

_ Database
*/

CREATE DATABASE gerador_de_volantes;

USE gerador_de_volantes;

create table PESSOAS(ID_CLIENTE int not null key auto_increment,NOME char(30),email char(30),NUMEROSESCOLHIDOS float(30));

create table NUMERO_DE_XML(NUMEROSDOXML DECIMAL);