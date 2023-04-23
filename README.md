# ttk-my-aac
A free and open-source Automatic Account Creator (AAC) written in PHP


<center>
<a href="https://www.tibiaking.com"><img src="https://user-images.githubusercontent.com/74227915/219124653-caccb04f-e858-4e81-b8be-c94ffbd3f276.png"/>
</center></a>


## Esse site foi desenvolvido pelo [Slawkens - OTSOFT](https://github.com/otsoft/myaac) e editado pela comunidade.
### Esta fork se baseia nesta [rev](https://github.com/otsoft/myaac/commit/f24fc75b12bb6a44a5f99c7b98da03223ad9f8bf)
### Lembre-se

Site muito seguro utilizado pela maioria dos otservers.

Foi desenvolvido com o intuito de funcionar perfeitamente com a maioria das versões 13+ da [Canary](https://github.com/tibiaking/canary)

E este repositório ira ajudar no desenvolvimento de sistemas, remoção de bugs e configurações.


## Novidades ?
> Mudou a imagem da sombra da caixa para css

> Botões alterados, imagem removida e adicionada por css

> Novos botões criados com base em cores (verde e vermelho)

> Carregamento de página adicionado, configurável em config.php

> Barra de status adicionada com redes sociais configuráveis

> Barra de status de slide e recolhimento adicionada, configurável em config.php

> Adicionado efeito de furto no menu

> Página de download do cliente criada, link configurável em config.php

> Calendário de eventos criado, obtendo informações diretamente de events.xml

> Char Bazaar com taxas configuráveis ​​em config.php

> Login alterado por e-mail

> Bootstrap 4.

> Config.php install 100% 
> 
> Config.Local.php install 100%

### Requirements

	- PHP 7.4 or later
	- MySQL database
    - Composer
	- PDO PHP Extension
	- XML PHP Extension
	- ZIP PHP Extension
	- (optional) mod_rewrite to use friendly_urls

### Installation

	Just decompress and untar the source (which you should have done by now,
	if you're reading this), into your webserver's document root.

	MyAAC needs proper permissions to handle files correctly.
	If you're using apache2, then your directory needs to have owner set to: www-data, you can do it by using following command:
		chown -R www-data.www-data /var/www/*
			(or any other path your MyAAC installation is located at..)

	  Note: Linux only
		If you're under linux use these commands to set proper permissions:
			chmod 660 config.local.php
			chmod 660 images/guilds
			chmod 660 images/houses
			chmod 660 images/gallery
			chmod -R 770 system/cache

	Visit http://your_domain/install (http://127.0.0.1/install) and follow instructions in the browser.

### CREDITS:
Slawkens, TibiaKing Team
