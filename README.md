# Sistema de Cadastro de Usuários

Este é um sistema simples de cadastro de usuários desenvolvido em PHP e MySQL. Permite adicionar novos usuários, listar usuários existentes e deletar usuários do banco de dados.

## Configuração

1. Certifique-se de ter o PHP e o MySQL instalados em seu ambiente de desenvolvimento.

2. Clone este repositório para o diretório de sua escolha:

3. Crie um banco de dados MySQL chamado "crud" ou altere o valor da variável `$dbname` no arquivo `config.php` para o nome do seu banco de dados.

4. Importe o arquivo `usuarios.sql` no seu banco de dados para criar a tabela necessária. O arquivo `usuarios.sql` pode ser encontrado no diretório raiz do projeto.

**Nota:** Certifique-se de que seu servidor MySQL esteja em execução e você tenha as permissões necessárias para importar um arquivo SQL.

5. Abra o arquivo `config.php` e configure as informações de conexão do banco de dados (host, usuário, senha).
$host = 'seu-host';
$user = 'root';
$pass = '';
$dbname = 'crud';


6. Salve as alterações no arquivo `config.php`.

## Uso

1. Navegue até o diretório onde o projeto foi clonado em seu servidor web.

2. Para adicionar um novo usuário, acesse `novo-usuario.php` em seu navegador e preencha o formulário.

3. Para listar os usuários existentes, acesse `listar-usuario.php` em seu navegador.

4. Para deletar um usuário, clique no botão "Deletar" ao lado do usuário desejado na lista.

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema, tiver alguma ideia de melhoria ou quiser adicionar novos recursos, sinta-se à vontade.

