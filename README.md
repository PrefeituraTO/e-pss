# e-PSS
Sistema de Cadastro e Inscrição de Processos Seletivos Simplificados da Prefeitura de [Teófilo Otoni]

Desenvolvido em [PHP] com banco de dados [MariaDB], utilizando [HTML 5] e [CSS 3],
Com [Bootstrap]+[FontAwesome]

e-PSS utiliza php-pdo para manipulação do banco de dados.

### Instalação
* Install on CentOS 7.3 >
	* PHP 5.4 >
		* (php-cli, php-pdo, php-mysql, php-common, php)
	* HTTPD 2.4.6 >
		* (httpd)
	* MARIADB 5.5 >
		* (mariadb-libs, mariadb-server, mariadb)
```bash
# yum install php-cli php-pdo php-mysql php-common php httpd mariadb-libs mariadb-server mariadb
```
* Install on Debian 8.0 >
	* PHP 5.4 >
		* (php-cli, php-pdo, php-mysql, php-common, php)
	* APACHE2 2.4.6 >
		* (apache2)
	* MARIADB 5.5 >
		* (mariadb-libs, mariadb-server, mariadb)
```bash
# apt install php-cli php-pdo php-mysql php-common php apache2 mariadb-libs mariadb-server mariadb
```

Create a vhost file on apache2/httpd with [template].

### Release Notes
* v1.0.1 
	* Signup User;
	* Forget Password;
	* Make subscription;
	* Fix Some Bugs.

### TO-DO
* Create a Mult PSS Page;
* Create Edit 'Cadastro' Page;

### Dev Team
* [Diego Neves]
* [Frankley Santos]

[Teófilo Otoni]:http://teofilootoni.mg.gov.br
[PHP]:https://php.net
[MariaDB]:https://mariadb.org
[HTML 5]:https://www.w3schools.com/html/html5_intro.asp
[CSS 3]:https://www.w3schools.com/css/css3_intro.asp
[Bootstrap]:http://getbootstrap.com
[FontAwesome]:http://fontawesome.io
[template]:https://github.com/PrefeituraTO/e-pss/blob/master/contrib/001-VHOST_Template.conf
[Diego Neves]:https://github.com/diegoaceneves
[Frankley Santos]:https://github.com/frankleysantos

