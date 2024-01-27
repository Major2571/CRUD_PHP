# Sistema CRUD em PHP
Este é um sistema simples de CRUD (Create, Read, Update, Delete) em PHP que permite gerenciar usuários em um banco de dados.

### Funcionalidades

-   **Criar Usuário**: Adicione novos usuários ao sistema fornecendo informações como e-mail, nome, sobrenome, telefone e data de nascimento;
-   **Visualizar Usuários**: Veja todos os usuários cadastrados em uma tabela;
-   **Editar Usuário**: Atualize as informações de um usuário existente;
-   **Excluir Usuário**: Remova usuários do sistema.

## Estrutura do Projeto

-   **app/controllers**: Controladores PHP que lidam com as requisições do usuário.
-   **app/models**: Modelos PHP que interagem com o banco de dados.
-   **app/config**: Arquivos de configuração, como conexão com o banco de dados.
-   **public/assets**: Arquivos acessíveis publicamente, como CSS e JavaScript.
-   **public/views**: Arquivos de visualização HTML onde os usuários interagem com a aplicação.

## Tecnologias Utilizadas
![PHP](https://img.shields.io/badge/php-0D1117.svg?logo=php&logoColor=777BB4&labelColor=0D1117&style=for-the-badge)&nbsp;&nbsp;
![MySQL](https://img.shields.io/badge/mysql-0D1117.svg?logo=mysql&logoColor=white&labelColor=0D1117&style=for-the-badge)&nbsp;&nbsp;
![JavaScript](https://img.shields.io/badge/JavaScript-0D1117?logo=javascript&logoColor=F7DF1E&labelColor=0D1117&style=for-the-badge)&nbsp;&nbsp;
![CSS3](https://img.shields.io/badge/css3-0D1117.svg?logo=css3&logoColor=1572B6&labelColor=0D1117&style=for-the-badge)&nbsp;&nbsp;

## Como Executar

Para executar este projeto em seu ambiente local, siga estas etapas:

1.  **Clone o Repositório:**

	```
		git clone https://github.com/Major2571/CRUD_PHP.git
	```
    
2.  **Importe o Banco de Dados:**
    - Importe o arquivo SQL fornecido (`dbcrud_php.sql`) para criar o banco de dados e a tabela necessária.
 
3.  **Configure o Ambiente:**
    - Verifique e atualize, se necessário, as credenciais do banco de dados no arquivo de configuração (`app/config/DBConnection.php`).

4.  **Inicie o Servidor PHP:**
    - Navegue até o diretório do projeto e inicie o servidor PHP localmente:

    ```
    	cd seu-projeto
    ```
    ```
    	php -S localhost:8000
    ```

5.  **Acesse a Aplicação:**
    
    -   Abra seu navegador da web e visite a URL local correspondente: http://localhost:8000
        
6.  **Interaja com o Sistema:**
    -   Agora você pode criar, visualizar, editar e excluir usuários usando a interface do sistema.

Certifique-se de ter o ambiente PHP configurado e um servidor MySQL (ou outro banco de dados compatível com PHP) instalado e em execução em seu sistema antes de iniciar o projeto.


## Screenshots

### Tela Inicial:
![image](https://github.com/Major2571/CRUD_PHP/assets/99849455/9a9880cc-b958-49c5-b99e-de986d3d8a54)

### Formulário de Cadastro
![image](https://github.com/Major2571/CRUD_PHP/assets/99849455/221c51d9-b6fa-41c8-8358-92b700f6fb24)

### Formulário de Edição
![image](https://github.com/Major2571/CRUD_PHP/assets/99849455/f12b94d4-d86b-4a85-9389-5162c165fb64)



