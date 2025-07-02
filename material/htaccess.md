# Como podemos ter a URL limpa

1. # URL default
www.website.com/profile.php?user=acelso&idade=30

# Nome do Servidor
www.website.com
# Nome do arquivo
profile.php
# String de consulta
?
# Query String (Consulta da query)
user=acelso&idade=30

- Nota: A consulta da query ou query string contém as variaveis que precisamos para acessar uma informação espqcifica da página.

2. # URL clean 
www.website.com/profile/acelso/21

- Nota1: As URLs clean são mas limpas esteticamente e organizadas para o melhor entendimento das regras de POO.

- Nota2: Para o seu funcionamento preciamos criar um arquivo (.htaccess) para que seja feita a interpretação do código e arquivos. Ele sera o responsavel por redirecional todas as solicitações para o arquivo index.php, visivel na pasta publica.

** RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]

- Nota3: Cada solicitação passa pelo "index.php" 

# CODIGO ".htaccess":
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]

# O Funcionamento
- Após add o file .htaccess podemos verificar as informações globais do PHP
 
 echo "<pre>";
 print_r($_SERVER); //verificar as configurações globais DO php
 echo "</pre>";

# Conseguimos filtrar as configurações globais
Array
(
    [REDIRECT_MIBDIRS] => C:/xampp/php/extras/mibs
    [REDIRECT_MYSQL_HOME] => \xampp\mysql\bin
    [REDIRECT_OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf
    [REDIRECT_PHP_PEAR_SYSCONF_DIR] => \xampp\php
    [REDIRECT_PHPRC] => \xampp\php
    [REDIRECT_TMP] => \xampp\tmp
    [REDIRECT_STATUS] => 200
    [MIBDIRS] => C:/xampp/php/extras/mibs
    [MYSQL_HOME] => \xampp\mysql\bin
    [OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf
    [PHP_PEAR_SYSCONF_DIR] => \xampp\php
    [PHPRC] => \xampp\php
    [TMP] => \xampp\tmp
    [HTTP_HOST] => localhost
    [HTTP_CONNECTION] => keep-alive
    [HTTP_SEC_CH_UA] => "Not)A;Brand";v="8", "Chromium";v="138", "Microsoft Edge";v="138"
    [HTTP_SEC_CH_UA_MOBILE] => ?0
    [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
    [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
    [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0
    [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
    [HTTP_SEC_FETCH_SITE] => none
    [HTTP_SEC_FETCH_MODE] => navigate
    [HTTP_SEC_FETCH_USER] => ?1
    [HTTP_SEC_FETCH_DEST] => document
    [HTTP_ACCEPT_ENCODING] => gzip, deflate, br, zstd
    [HTTP_ACCEPT_LANGUAGE] => pt-PT,pt;q=0.9,pt-BR;q=0.8,en;q=0.7,en-US;q=0.6,en-GB;q=0.5
    [HTTP_COOKIE] => PHPSESSID=adk724ejcssj92bgp5r9l23m9a
    [PATH] => C:\Program Files (x86)\VMware\VMware Workstation\bin\;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\PuTTY\;C:\Program Files\Git\cmd;C:\Program Files\Docker\Docker\resources\bin;C:\Program Files\nodejs\;C:\Users\acels\AppData\Local\Microsoft\WindowsApps;C:\Users\acels\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\acels\AppData\Roaming\npm
    [SystemRoot] => C:\Windows
    [COMSPEC] => C:\Windows\system32\cmd.exe
    [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
    [WINDIR] => C:\Windows
    [SERVER_SIGNATURE] => 
Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30 Server at localhost Port 80


    [SERVER_SOFTWARE] => Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30
    [SERVER_NAME] => localhost
    [SERVER_ADDR] => ::1
    [SERVER_PORT] => 80
    [REMOTE_ADDR] => ::1
    [DOCUMENT_ROOT] => C:/xampp/htdocs
    [REQUEST_SCHEME] => http
    [CONTEXT_PREFIX] => 
    [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs
    [SERVER_ADMIN] => postmaster@localhost
    [SCRIPT_FILENAME] => C:/xampp/htdocs/htaccess/public/index.php
    [REMOTE_PORT] => 51430
    [REDIRECT_URL] => /htaccess/public/PERFIL
    [REDIRECT_QUERY_STRING] => url=PERFIL
    [GATEWAY_INTERFACE] => CGI/1.1
    [SERVER_PROTOCOL] => HTTP/1.1
    [REQUEST_METHOD] => GET
    [QUERY_STRING] => url=PERFIL
    [REQUEST_URI] => /htaccess/public/PERFIL
    [SCRIPT_NAME] => /htaccess/public/index.php
    [PHP_SELF] => /htaccess/public/index.php
    [REQUEST_TIME_FLOAT] => 1751463796.4896
    [REQUEST_TIME] => 1751463796

