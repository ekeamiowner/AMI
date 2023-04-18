# Funckionális specifikáció

## 1.Áttekintés
Ez a weboldal az Annales Mathematicae et Informaticae hivatalos honlapja, amely az Eszterházy Károly Egyetem Matematika és Informatika Intézetének nemzetközi folyóirata (Eger, Magyarország), amelyet a Líceum University Press ad ki. A folyóirat nyitott a matematika és a számítástechnika tudományos publikációi előtt, ahol a számelmélet, a csoportelmélet, a konstruktív és számítógéppel segített geometria, valamint a programozási nyelvek elméleti és gyakorlati szempontjai különös hangsúlyt kapnak. Célunk, hogy kényelmes platformot biztosítsunk a felhasználóink számára. Saját fiókjuk lesz, és a munkáikat publikálhatják a weboldalunkon. Minden felhasználónak ingyenes fiókja lesz, és nagyon szép felhasználói felületen küldhetik be és tekinthetik meg cikkeiket. Minden ingyenes, és mindenki publikálhat cikkeket. Szívesen várjuk a matematikai és számítástechnikai cikkeket. A tanulmányokat angol nyelven kell benyújtani a folyóiratra. Az Szerkesztőség csak új és még publikálatlan anyagokat fogad el.

## 2.Jelenlegi helyzet  

Az Annales Mathematicae et Informaticae – címének megfelelően – évente megjelenő periodika. Kivételes esetben (konferenciák special issue számaként) plusz egy kötet jelenhet meg. A publikációk kizárólagos nyelve az angol, a folyóirat saját LaTeX formátumot használ. A folyóirat szerkesztőbizottságát elismert nemzetközi, illetve hazai matematikusok és informatikusok alkotják. A folyóiratot az EKKE Matematikai és Informatikai Intézete szerkeszti és adja ki, nyomtatott és online formában (ez utóbbi 1997-től elérhető). Online elérése ingyenes mind a publikálók, mind az olvasók szempontjából (úgynevezett „gold open access" folyóirat). A folyóirat elvben a matematika és az informatika bármely területéről fogad be kéziratokat, de kiemeltként kezeli az Intézetben folyó kutatások területeit (pl. számelmélet, csoportelmélet, számítógéppel segített geometriai tervezés, programozási nyelvek). A folyóirat módszertani publikációknak is helyet ad mindkét szakterületen. A folyóiratot több releváns tudományos adatbázis indexeli: Clarivate Analytics (korábban Thomson Reuters), Scopus, Zentralblatt für Mathematik, MathSciNet, EBSCO. A módszertani cikkeket a MathEduc adatbázis referálja. A folyóirat az MTMT-ben jelenleg Q2-es besorolású.

## 3.Követelménylista
| Modul  | ID  | Név |  Verzió | Magyarázat |
|---|---|---|---|---|
| Jogosultságok  | K1  | Bejlentkezés | 1.0  | A felhasználó be tud jelentkezni az e-mail címével és jelszavával. Ha az egyik (vagy mindkettő) helytelen, akkor hibaüzenet jelenik meg a felhasználó számára.  |
| Jogosultságok | K2 | Regisztráció |  1.0 | A felhasználónak meg kell adnia egy felhasználónevet, e-mail címet és jelszót. Ha valamelyik hiányzik a követelmények közül, akkor a felhasználó figyelmeztetést kap a problémáról. |
| Jogosultságok | K3 | Felhasználói rang |  1.0 | - Adminisztrátor: cikkellenőrzés, hozzáférés az adminisztrátori panelhez<br> |
| | | | |  Felhasználó: cikkek létrehozása, felhasználói adatok módosítása<br> |
| | | | | - Vendég: regisztráció, bejelentkezés |
| Módosítás | K4 | felhasználói adat módosítás |  1.0 | A felhasználóknak lehetőségük van megváltoztatni a felhasználónevüket és jelszavukat. Ha a felhasználó a jelszavát akarja megváltoztatni, akkor meg kell adnia az ÚJ jelszót, annak ellenőrzését és az eredeti jelszót. |
| Módosítás | K5 | Elfelejtett jelszó |  1.0 | Ha a felhasználó elfelejti a jelszavát, akkor lehetősége van visszaállítani a jelszavát, amelyet a regisztrált e-mail címére küldenek. |


## 4.Jelenlegi üzleti folyamatok modellje



## 5.Igényelt üzleti folyamatok modellje



## 6. Használati esetek
- Ez a fejezet leírja pl. melyik felhasználó milyen funkciókat tud használni. 
- Példa: “ADMIN: Az ADMIN beléphet mindegyik más szerepkörbe, hogy az hibamentes működését ellenőrizhesse. Az Admin(ok) feladata a rendszer problémamentes működése. Ez egyben jár azzal, hogy az egész rendszerhez van hozzáférésük. Az Admin(ok)nak hozzá kell tudni férniük a felhasználók listájához, ahol mindent átváltoztathatnak egy felhasználó profilján. Tudniuk kell a felhasználók jogosultságait, szerepkörét, jelszavát, és felhasználónevét módosítani. Továbbá képesnek kell lenniük arra, hogy felhasználókat vegyenek fel rendszerbe és, hogy rakjanak le belőle. Fontos, hogy ők is képesek feladatok létrehozni, mint a tanárok. Képesek üzenetet küldeni az összes felhasználónak, valamint globális üzeneteket, amelyet mindenki megkap egyszerre. A Diák jegyeit csak ők tudják módosítani, miután a Tanár adott neki.”


## 7. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket



## 8. Képernyőtervek



## 9. Forgatókönyv
- A forgatókönyvek a rendszer egy-egy tipikus felhasználását mutatják be. A forgatókönyvnek általában van egy célja, például egy iktató rendszerben: Levél érkeztetése, címzett értesítése, dokumentumtárba helyezés. A forgatókönyv bemutatja, milyen funkciókat kell használni, milyen sorrendben a kívánt cél elérése érdekében. Ilyen értelem egy telepítési útmutatóhoz hasonlítanak.
- Példa: “Szereplők: Futási időben három szereplő figyelhető meg. Az első szereplő maga a futó alkalmazás. (weben/androidon) Bejelentkezve kilehet választani a kívánt játékot. Megjelenik a timer a segítségek, és a játékos feladat. Ezzel van interakcióban a második szereplő, maga a felhasználó, aki kitölti a tesztet, úgy hogy az időn ne lépjen túl, és ha szüksége van akkor igénybe veheti a segítségek egyikét. A harmadik szereplő egy web-service, ami a tesztekhez szükséges adatokat szolgáltatja az alkalmazásnak egy adatbázisból.”


## 10. Funkció, követelmény megfeleltetés



## 11. Fogalomszótár

- A fogalomszótár a dokumentációban megemlített idegen esetleg
nem egyértelmű jelentésű szavak / szakszavak pontos
meghatározását írja le.
- Példa: “[web-service]:különböző programnyelveken írt és különböző
platformokon futó szoftveralkalmazások interneten keresztül történő
adatcseréjére használt vebszolgáltatások.
[multiplatform]: több környezetben futtatható alkalmazás.
[main menu]: A fő menü, amely a weboldal indulásakor megjelenik.
