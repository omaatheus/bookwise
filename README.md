# 📚 Bookwise

O **Bookwise** é uma aplicação desenvolvida em **PHP puro**, criada com o objetivo de **estudar e entender melhor os fundamentos do PHP** e aplicar na prática o padrão de **arquitetura MVC (Model-View-Controller)**.  

Durante o desenvolvimento, o projeto ajudou a compreender como o PHP lida com variáveis, funções nativas, escopo, sessões e manipulação de formulários, além de consolidar a base necessária para migrar futuramente para frameworks como o **Laravel**.

---

## 🧠 Sobre o Projeto

O **Bookwise** é um sistema simples para **gerenciar livros e avaliações**, contando também com um **módulo de autenticação** com **criptografia de senhas**.  

As principais funcionalidades incluem:

- 🧾 **Cadastro de livros** — inclusão de novos livros com título, autor, descrição e ano de lançamento.  
- ⭐ **Avaliações** — usuários autenticados podem avaliar livros e atribuir notas.  
- 🔐 **Autenticação** — sistema de login e registro com senhas armazenadas de forma segura via `password_hash()` e verificadas com `password_verify()`.  
- 🧱 **Arquitetura MVC** — separação clara entre **Model**, **View** e **Controller**, garantindo melhor organização e manutenibilidade do código.  

---

## ⚙️ Tecnologias Utilizadas

- **PHP 8+**
- **MySQL**
- **Docker** (para o container do banco de dados)
- **PDO (PHP Data Objects)** para manipulação de dados com segurança e prepared statements
- **HTML e CSS** (Tailwind opcional para o layout)

---

## 🔒 Segurança

O projeto foi estruturado com uma **pasta `public/`**, que contém o arquivo principal `index.php`.  
Essa abordagem garante que o servidor web **exponha apenas os arquivos públicos**, impedindo que usuários acessem diretamente pastas internas como `controllers`, `models` ou `views` pelo navegador.  

Assim, todas as requisições passam obrigatoriamente pelo `index.php`, que redireciona para os demais arquivos da aplicação de forma controlada.

---

## 🚀 Aprendizados

Durante o desenvolvimento do **Bookwise**, foi possível:

- Entender a fundo o funcionamento do PHP e suas principais funções nativas.  
- Compreender o fluxo de execução de uma aplicação baseada em **MVC**.  
- Trabalhar com **banco de dados MySQL** usando **PDO**.  
- Implementar **autenticação de usuários** com **hash de senhas**.  
- Adotar boas práticas de **segurança e organização de pastas**.  
- Ganhar base sólida para **evoluir para frameworks como o Laravel**.

