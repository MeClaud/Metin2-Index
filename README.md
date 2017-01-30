# Metin2 Index
### Introducere
Am găsit acest index pe internet și am decis să îl încerc. Designul este creat de [Flying Men](http://flying-men.de/).
![Preview](https://meclaud.github.io/assets/screenshots/m2index1.png)
### Instalare
#### 1. Descărcați proiectul și plasati toate fișierele în rădacina siteului
 În cazul în care aveți un website deja instalat in rădăcina sitului, ve-ți fi nevoit, pentru a evita conflictele, să-l mutați într-un director nou creat.
 
 În directorul intitulat `PSD original` aveți fișierul PSD folosit de mine pentru a crea acest website.
#### 2. Intrati în directorul `inc` și configurați fișierul `config.json` astfel
```json
{
	"svname": "Aries2", <- Numele serverului
	"svslogan": "Scoate PVP-ul din tine!", <- Sloganul din titlu
	"ytembedcode": "JKX4zVXfGU8", <- Codul videoclipului de pe youtube
	"homepage-url": "#homepage", <- Adresa url catre prima pagina a websiteului
	"forum-url": "#forum", <- Adresa url a forumului
	"svip": "127.0.0.1", <- Adresa IP a serverului
	"mysql": 3306, <- Portul mysql (implicit 3306)
	"login": 3306, <- Portul pentru login
	"server1": 3306, <- Portul pentru serverul 1 (sau ch1)
	"server2": 3306 <- Portul pentru serverul 2 (sau ch2)
}
```
Modificați imaginile din directorul `img` după propriul plac.

Am lăsat în directorul `img` încă două backgrounduri pe care puteți să le încercați.
