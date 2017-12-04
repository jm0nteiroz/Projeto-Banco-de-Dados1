INSERT INTO FORMATO (Nome) VALUES({string});

SELECT ID FROM FORMATO WHERE Nome = {string};
# usar select para encontrar a id do formato a ser alterado
UPDATE FORMATO SET Nome={string} WHERE ID = {int};

delete from FORMATO where ID = {int};