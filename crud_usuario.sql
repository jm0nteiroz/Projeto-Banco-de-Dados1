INSERT INTO USUARIO (ID, email, senha) VALUES({string}, {string}, {string});

UPDATE USUARIO SET senha={string} WHERE ID = {string};
UPDATE USUARIO SET email={string} WHERE ID = {string};

delete from USUARIO where ID = {string};