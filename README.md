# Volantes_Loteria

**Sites:**

● Site Usuário:

    Receber Números do Servidor
    Enviar Dados (data,hora,nome,e-mail,números escolhidos)

    No Banco de dados 

CREATE DATABASE gerador_de_volantes;

USE gerador_de_volantes;

create table PESSOAS(ID_CLIENTE int not null key auto_increment,NOME char(30),email char(30),NUMEROSESCOLHIDOS float(30),atad float(12),AROH float(12));

create table NUMERO_DE_XML(NUMEROSDOXML DECIMAL); 


● Login:

    Com JavaScript verifica a senha

● Envio de XML:

    UM ARQUIVO PHP recebe o arquivo e coloca eles como números e coloca números.

● Clientes Feitos:

    Mostrar pessoas, ordenados com nome e-mail númerosescolhidos e datas com PHP
