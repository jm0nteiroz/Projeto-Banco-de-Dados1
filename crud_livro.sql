select ID from EDITORA where Nome = {string};
select ID from FORMATO where Nome = {string};
select ID from CONDICAO where Nome = {string};



INSERT INTO LIVRO (ISBN, Titulo, Idioma, Editora, Formato, Condicao, DataCompra) VALUES({int}, {string}, {string}, {int}, {int}, {int}, {date});

SELECT ID FROM AUTOR WHERE ISBN = {string};
# usar select para encontrar a id do autor a ser alterado
UPDATE AUTOR SET Titulo={string} WHERE ISBN = {int};
UPDATE AUTOR SET Idioma={string} WHERE ISBN = {int};
UPDATE AUTOR SET Editora={int} WHERE ISBN = {int};
UPDATE AUTOR SET Formato={int} WHERE ISBN = {int};
UPDATE AUTOR SET Condicao={int} WHERE ISBN = {int};
UPDATE AUTOR SET DataCompra={date} WHERE ISBN = {int};

delete from AUTOR where ID = {int};

