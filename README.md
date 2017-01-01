# Metin2 Index
### Introducere
Am gasit acest index pe internet si am decis sa il incerc. Designul este creat de [Flying Men](http://flying-men.de/).
![Preview](https://meclaud.github.io/assets/screenshots/m2index1.png)
### Instalare
1. Descarcati proiectul si plasati toate fisierele in radacina siteului
 In cazul in care aveti un website deja instalat in radacina sitului, ve-ti fi nevoit, pentru a evita conflictele, sa-l mutati intr-un director nou creat
 In folderul intitulat `PSD original` aveti fisierul PSD folosit de mine pentru a crea acest website
2. Intrati in directorul `inc` si configurati fisierul `config.json` astfel
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
3. Modificati imaginile din directorul `img` dupa propriul plac

Am lasat in directorul `img` inca doua backgrounduri pe care puteti sa le incercati.