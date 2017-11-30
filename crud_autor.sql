INSERT INTO AUTOR (NOME) VALUES({string});

SELECT ID FROM AUTOR WHERE Nome = {string};
# usar select para encontrar a id do autor a ser alterado
UPDATE AUTOR SET Nome={string} WHERE ID = {int};

delete from AUTOR where ID = {int};