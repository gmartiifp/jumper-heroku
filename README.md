# jumper-heroku
Demo en phaser de mini-juego con personaje que salta en plataformas.
Usa la flechas de dirección para controlar al personaje saltador.
Escrito usando phaser v2.0.5  


### Demo original
El código orignal muestra a un personaje que debe ir subiendo por diferentes plataformas que se generan aleatoriamente en cada intento.
Tras cada salto el personaje debe de alcanzar la plataforma del siguiente nivel. Si falla en su intento volverá al inicio al nivel más inferior.

Codigo fuente original de [Jack Rugile](https://codepen.io/jackrugile) 
Demostración del fuente original: https://codepen.io/jackrugile/pen/fqHtn


### Cambios efectuados
  * Se añade un contador de numero de plataformas alcanzado
  * Se guarda el contador en una base de datos
  

### Claves para funcionar en Heroku y desarrollar en local
	* Instalar en local:
		- Git https://git-scm.com/downloads
		- GitHub Desktop (para los comodones) https://desktop.github.com/
		- php https://www.php.net/downloads.php (o xampp https://www.apachefriends.org/es/download.html en su defecto)
		- Composer https://getcomposer.org/download/
		- Heroku Cli https://devcenter.heroku.com/articles/heroku-cli#download-and-install
		- DBeaver https://dbeaver.io/download/
		
	* Definir framework/lenguaje PHP
	