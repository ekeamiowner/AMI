




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

## 5. Funkcionális terv
- Leírja a felhasználói szerepköröket, és hogy milyen feladatokat
tudnak csinálni.
- Rendszerszereplők:
  - Admin
  - Diák
- Rendszerhasználati esetek és lefutásaik:
  - ADMIN:
    - Beléphet bármilyen szereplőként teljes hozzáférése van a rendszerhez
    - A felhasználói adatokat látják, változtathatják
    - Felhasználó hozzáadására, törlésére van lehetőségük
    - Feladatlétrehozás mint a Tanárok
    - Diákok jegymódosítása
    - Üzenetküldés bárkinek vagy globálisan
    - Felhasználói adatok módosítása
    - Tesztek létrehozása, törlése, módosítása
    - Kvízek létrehozása, törlése, módosítása
  - DIÁK:
    - Képes kvízt kitölteni, aminek végén pontot szerez
    - Képes üzenetet küldeni más diákoknak, tanároknak vagy diákoknak
    - El tudja érni az órarendjét
    - Teszt felület elérése, ami egy kvízhez hasonló felület ahol eredményjegyet szerezhet a diák.
- Menü-hierarchiák:
  - BEJELENTKEZÉS
    - Bejelentkezés
    - Regisztráció
    - Help
  - MAIN MENÜ
    - Kvíz
    - Feladatlétrehozás (Tanároknak)
    - Órarend megtekintés (Diákoknak)
    - E-naplo elérése
    - Személyes adatok
    - Toplist
    - Kijelentkezés

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
## 12.Telepítési terv
- Androidos alkalmazás:
  - Töltse le az alkalmazást a Google áruházból, adja meg a szükséges
engedélyeket és telepítse a programot!
  - Amennyiben nem az áruházból kívánja telepíteni az alkalmazást, úgy
engedélyezze készülékén az úgynevezett "Harmadik féltől származó
tartalmakat" a beállításoknál!
  - Helyezze az ".apk" kiterjesztésű elemet a készülékére, majd futtassa
azt!
- Webes alkalmazás
  - A szoftver webes felületéhez csak egy ajánlott böngésző telepítése
szükséges (Google Chrome, Firefox, Opera, Safari), külön szoftver
nem kell hozzá. A webszerverre közvetlenül az internetről
kapcsolódnak rá a kliensek.

## 13.Karbantartási terv
Cél: Az alkalmazás folyamatosan üzemeltetése és karbantartása, mely
magában foglalja a programhibák elhárítását, a belső igények változása miatti
módosításokat, valamint a környezeti feltételek változása miatt
megfogalmazott program-, illetve állomány módosítási igényeket.
Ellenőrizni
kell, hogy a jövőben kiadott Android verziókkal kompatibilis-e az alkalmazás.
Idő elteltével új kategóriákat kell hozzáadni a játékhoz, hogy fent tartsuk az
érdeklődési szintet.
- Karbantartás:
  - Corrective Maintenance: A felhasználók által felfedezett és "user reportban"
elküldött hibák kijavítása.
  - Adaptive Maintenance: A program naprakészen tartása és finomhangolása.
  - Perfective Maintenance: A szoftver hosszútávú használata érdekében végzett
módosítások, új funkciók, a szoftver teljesítményének és működési
megbízhatóságának javítása.
  - Preventive Maintenance: Olyan problémák elhárítása, amelyek még nem
tűnnek fontosnak, de később komoly problémákat okozhatnak.

## 14. Adatbázis terv
  ![Adatbázis terv](https://github.com/ekeamiowner/AMI/blob/BenkeBal%C3%A1zs/docs/database_plan.png)
