# Chartjs Query Consultor

[![LWS](https://i.imgur.com/6WstVLQ.png)](mailto:andersonbelderrama@gmail.com)



Este Chartjs foi desenvolvido para facilmente converter em graficos em chartjs as querys de SQL. 

  - Roda facilmente em ambiente XAMPP/WAAMP
  - Facilmente de ser personalizado
  - Conexão de banco de dados diretamente no index

# Instalação

- Faça o Downloado do Servidor XAMPP com PHP 7.4.*
```sh 
https://www.apachefriends.org/xampp-files/7.4.13/xampp-windows-x64-7.4.13-1-VC15-installer.exe
```
- A instalação é simplismente "Next>Next>Finish"
- Após instalação do XAMPP, copie este a pasta deste projeto para:
```sh
C:\xampp\htdocs
```
- Ambiente quase pronto, vamos mover os driver sqlsrv para a pasta do PHP:

php_pdo_sqlsrv_74_ts_x64.dll
php_pdo_sqlsrv_74_ts_x64.dll
- DE:
```sh
C:\xampp\htdocs\chartjs-query\sqldriver
```
- PARA:
```sh
C:\xampp\php\ext
```
- Agora, vamos substituir o arquivo de configuração do php:

php.init
- DE:
```sh
C:\xampp\htdocs\chartjs-query\sqldriver
```
- PARA:
```sh
C:\xampp\php
```
- Para finalizar, vamos instalar o ODBC para que o PHP se comunique com bancos MSSQL remotos, execute:
```sh
C:\xampp\htdocs\chartjs-query\sqldriver\msodbcsql.msi
```
- Instalação também é simples "Next>>Next>Finish"


# Usando

  - Procure o inicializador do XAMPP no sua area de trabalho ou menu iniciar e execute o mesmo.
  - Após aberto clique em "START" referente a o serviço do "APACHE"
  - Pronto :), acesse o sequinte endereço no seu navegador
```sh
http://localhost/chartjs-query
```
- As instruções de como utilizar o mesmo esta descrito na pagina inicial(index.php)



License
----

MIT


**Free Software, Hell Yeah!**
