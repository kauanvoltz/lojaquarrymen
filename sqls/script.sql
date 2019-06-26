CREATE TABLE usuarios(id int unsigned not null AUTO_INCREMENT, nome VARCHAR(100) not null , email varchar(70) not null, senha varchar(50) not null, constraint pk_usuarioid primary KEY (id));
CREATE TABLE categorias(id int unsigned not null AUTO_INCREMENT, nome varchar(200) not null, constraint uc_nome UNIQUE (nome), constraint pk_categoriaid primary KEY (id));
CREATE TABLE produtos(id int unsigned not null AUTO_INCREMENT, titulo VARCHAR (50) not null, caminhoImagem varchar(70) not null, descricao varchar(400) not null, preco decimal(8,2) not null, categoria_id int not null, constraint pk_produtoid primary KEY (id)) ENGINE = innodb;
alter table produtos add constraint fk_categoriaproduto foreign KEY (categoria_id) references categorias(id);
CREATE TABLE permissoes (id int unsigned not null AUTO_INCREMENT,titulo varchar(200) not null,CONSTRAINT pk_permissaoid primary KEY (id))
CREATE TABLE usuariopermissao (usuario_id int not null DEFAULT 0,permissao_id int not null DEFAULT 0, constraint pk_usuariopermissaoid primary KEY (usuario_id,permissao_id),CONSTRAINT fk_usuariopermissao_usuario FOREIGN key (usuario_id) REFERENCES  usuarios (id), CONSTRAINT fk_usuariopermissao_permissao FOREIGN key (permissao_id) REFERENCES permissoes (id));

SELECT * FROM `usuarios` WHERE email = "kauan.voltz@gmail.com";
SELECT * FROM `permissoes` WHERE titulo = "admin";
SELECT * FROM `usuariopermissao` WHERE permissao_id= 1 AND usuario_id=1;

SELECT * from usuarios
inner JOIN usuariopermissao on usuariopermissao.id = usuario_id
inner join permissoes on permissoes.id = usuariopermissao.permissao_id
WHERE permissoes.titulo = "admin" and usuarios.email = "kauan.voltz@gmail.com"

SELECT produtos.*,categorias.nome as categoria from produtos
inner join categorias on categorias.id=categoria_id