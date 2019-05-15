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