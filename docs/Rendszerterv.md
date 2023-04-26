## Rendszerterv

## 1. A rendszer célja
- Leírja hogy mit szeretne megoldani a rendszer.
- Példa: “A rendszer célja, hogy a felhasználó játékos körülmények között tud
tanulni, különböző feladatokat megoldani. A felhasználó pontszámokat kap
arról, hogyan sikerült megoldania a feladatokat. Fontos, hogy a felhasználó
könnyen el tudjon igazodni a felületeken ezért minimalista felhasználói
felületet kap a program. A tanár szerepkörrel rendelkező felhasználók
feltölthetnek feladatsorokat az adatbázisba. A rendszer használható
Androidos eszközökön, alkalmazás formájában, valamint webes felületen is
elérhető. A rendszer az adatokat egy Web Service segítségével kapja az
adatbázisból. Mivel az alkalmazást csak webes felületen, és Android
alkalmazásban szeretnénk elérhetővé tenni, nem célunk hogy más, például
IOS operációs rendszerrel rendelkező eszközön fusson. A felhasználó a
feladatsorok megoldása után pontszámokat kap. Teljesítményét a toplistán is
megtekintheti.”

## 2. Projektterv
- Leírja a szerepköröket, kik vannak a csapatban és min dolgoznak. Ide
kerül az ütemterv és általában mérföldköveket tartalmaz.
- Példa: ”
Projektszerepkörök, felelőségek:
Scrum master: Dr. Tajti Tibor Gábor
Product owner: Dr. Tajti Tibor Gábor
Projektmunkások és felelőségek:
Backend munkálatok: (csapat tagjai)
Feladatuk az adatok tárolásához szükséges adatszerkezetek kialakítása,
funkciók létrehozása, a különböző platformok kiszolgálása adatokkal.

## 4. Követelmények 


## 6. Fizikai környezet

- Az alkalmazás web platformra, hordozható
eszközökre(okostelefonok,táblagépek) készül, reszponzivitás figyelembevételével.
- Nincsenek megvásárolt komponenseink.
- Fejlesztői eszközök:
  - VS Code
  - PHP Storm
  - Notepad++
  - MySQL Workbench
  - XAMPP

## 8. Architekturális terv

## 11. Tesztterv

- Példa:” A tesztelések célja a rendszer és komponensei funkcionalitásának
teljes vizsgálata, ellenőrzése, a rendszer által megvalósított üzleti
szolgáltatások verifikálása.
Tesztelési eljárások
  ### Alfa teszt:

    A teszt elsődleges célja: az eddig meglévő funkcióknak a különböző
    böngészőkkel, és androidokkal való kompatibilitásának tesztelése. A tesztet a
    fejlesztők végzik.
    Az eljárás sikeres, ha különböző böngészőkben és különböző androidokon is
    megfelelően működnek a különböző funkciók. A teszt időtartama egy hét.
  
  ### Beta teszt:
     - Ezt a tesztet nem a fejlesztők végzik.
      - Tesztelendő böngészők:
        - Opera
         - Firefox
         - Google Chrome
         - Safari
        - Edge
 
    - Tesztelendő android rendszerek:
     - 6.0.0(minimum), vagy újabbak

  ### Tesztelendő kijelző méretek:
    - 1280x720 (minimum)
    - 1366x768
    - 1920x1080

    - A teszt időtartama kb. egy hét.
    - A tesztelés alatt a tesztelő felhasználók visszajelzéseket küldhetnek a
    fejlesztőknek, probléma/hiba felmerülése esetén.
    - Ha hiba lép fel, a fejlesztők kijavítják a lehető leghamarabb. Sok hiba esetén
    a tesztelés ideje elhúzódhat plusz egy héttel.

  ### Tesztelendő funkciók


    - Android
       - Login felület:

    - A login/regisztrációs felület elrendezésének ellenőrzése:
      -  Elvárt működés: 
         a funkcionális specifikációban szereplő képernyőtervnek megfelelően kell
         kinéznie, a képernyő méretétől függetlenül.
     - Regisztrációs felület:
         A meghívást követően regisztrációs felületnek elérhetőnek kell lennie a
         kezdőképernyőn a bejelentkezési lehetőség mellett. Amennyiben a
         felhasználó még nincs regisztrálva az itt található gombra kattintva kell
          átirányítani a regisztrációs felületre. Ezen felületen a megfelelő adatok
          megadása mellett a megerősítés gombra kattintva a felhasználó
          regisztrációjának a funkcionális specifikációban leírtak szerint végbe kell
          mennie, majd elérhetővé kell tenni a bejelentkezést a felhasználó számára.

    - Hibás regisztrációs adatok megadásakor hibaüzenetet kell kapjon a
    felhasználó.”
