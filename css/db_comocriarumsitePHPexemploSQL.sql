CREATE TABLE tb_postagem( id_post int(5) PRIMARY KEY AUTO_INCREMENT, 
titulo varchar(60) NOT null, 
imagem varchar(60) NOT null, 
texto varchar(200) NOT null, 
url varchar(60) NOT null, 
dt date NOT null, 
hr time NOT null, 
page int(1) NOT null, 
id_user int(5) NOT null, 
FOREIGN KEY(id_user) REFERENCES tb_user(id_user) );

/*-----------------------------------------****------------------------------------------*/
INSERT INTO tb_user(nome, email, senha, lembrete, foto, nivel, dt, hr) VALUES 
('Winy Pasquareli','winy2000@gmail.com','1234','1234','lux.png',1,'2019-05-11','11:11:30'),
('Gabriel','g@gmail.com','222','222','ezio.png',2,'2019-05-13','13:30:21');

/*-----------------------------------------****------------------------------------------*/
SELECT nome,email FROM tb_user order by id_user DESC