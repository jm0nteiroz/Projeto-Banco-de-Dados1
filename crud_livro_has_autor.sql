INSERT INTO LIVRO_has_AUTOR (ISBN, Autor) VALUES ({int}, {int});

#encontrar autores do livro
SELECT Autor FROM LIVRO_has_AUTOR WHERE ISBN = {string};
#encontrar livros do autor
SELECT ISBN FROM LIVRO_has_AUTOR WHERE Autor = {string};


UPDATE LIVRO_has_AUTOR SET Autor={int} WHERE ISBN = {int};

delete from LIVRO_has_AUTOR where ISBN = {int};