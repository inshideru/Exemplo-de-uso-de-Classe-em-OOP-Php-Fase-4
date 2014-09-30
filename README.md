# Orientação a Objetos em PHP - Fase 3

* Estudo de Orientação a Objetos com Php - Exemplo bem simples com a criação de uma classe Cliente.
* Foram adicionados 20 Objetos das classes Pessoa Físisca e Pessoa Jurídica a um array.
* Este array é utilizado para exibir uma lista de clientes e ao clicar no nome do cliente abre uma páginas com os dados do mesmo.

### Class Autoloader
* Foi utilizado o padrão PSR-0 para o autoloader

### Testes
* Executar php -S localhost:8000 -t public_html na raiz do projeto para iniciar o servidor buit-in do php já com redirecionamento para a pasta pública

### Recursos utilizados
* Bootswatch Flatly Theme para boostrap - http://bootswatch.com/flatly/
* Roteamento com verificação de arquivos e validação
* Configuração do servidor para redirecionar todas as requests para index.php (.htacces)

### Classes
* Classe Pai Cliente criada somente com atributos
* Classe filha Pessoa Física
* Classe filha Pessoa Jurídica
* Interface para definir grau de importância
* Interface para definir endereço de cobrança

### Páginas
* Lista de clientes com botões para ver em ordem crescente e descrescente
* Visualização individual dos dados do cliente