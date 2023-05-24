# Funckionális specifikáció

## 1.Áttekintés
A weboldal az Annales Mathematicae et Informaticae hivatalos honlapja, amely az Eszterházy Károly Egyetem Matematika és Informatika Intézetének nemzetközi folyóirata (Eger, Magyarország), amelyet a Líceum University Press ad ki. A folyóirat nyitott a matematika és a számítástechnika tudományos publikációi előtt, ahol a számelmélet, a csoportelmélet, a konstruktív és számítógéppel segített geometria, valamint a programozási nyelvek elméleti és gyakorlati szempontjai különös hangsúlyt kapnak. Célunk, hogy kényelmes platformot biztosítsunk a felhasználóink számára. Saját fiókjuk lesz, és a munkáikat publikálhatják a weboldalunkon. Modern és letisztult felhasználói felületen küldhetik be és tekinthetik meg cikkeiket. Minden ingyenes, és mindenki publikálhat cikkeket. Szívesen várjuk a matematikai és számítástechnikai cikkeket. A tanulmányokat angol nyelven kell benyújtani a folyóiratra. Az Szerkesztőség csak új és még publikálatlan anyagokat fogad el.

## 2.Jelenlegi helyzet  

Az Annales Mathematicae et Informaticae – címének megfelelően – évente megjelenő periodika. Kivételes esetben (konferenciák special issue számaként) plusz egy kötet jelenhet meg. A publikációk kizárólagos nyelve az angol, a folyóirat saját LaTeX formátumot használ. A folyóirat szerkesztőbizottságát elismert nemzetközi, illetve hazai matematikusok és informatikusok alkotják. A folyóiratot az EKKE Matematikai és Informatikai Intézete szerkeszti és adja ki, nyomtatott és online formában (ez utóbbi 1997-től elérhető). Online elérése ingyenes mind a publikálók, mind az olvasók szempontjából (úgynevezett „gold open access" folyóirat). A folyóirat elvben a matematika és az informatika bármely területéről fogad be kéziratokat, de kiemeltként kezeli az Intézetben folyó kutatások területeit (pl. számelmélet, csoportelmélet, számítógéppel segített geometriai tervezés, programozási nyelvek). A folyóirat módszertani publikációknak is helyet ad mindkét szakterületen. A folyóiratot több releváns tudományos adatbázis indexeli: Clarivate Analytics (korábban Thomson Reuters), Scopus, Zentralblatt für Mathematik, MathSciNet, EBSCO. A módszertani cikkeket a MathEduc adatbázis referálja. A folyóirat az MTMT-ben jelenleg Q2-es besorolású.

## 3.Követelménylista
| Modul  | ID  | Név |  Verzió | Magyarázat |
|---|---|---|---|---|
| Jogosultságok  | K1  | Bejlentkezés | 1.0  | A felhasználó be tud jelentkezni az e-mail címével és jelszavával. Ha az egyik (vagy mindkettő) helytelen, akkor hibaüzenet jelenik meg a felhasználó számára.  |
| Jogosultságok | K2 | Regisztráció |  1.0 | A felhasználónak meg kell adnia egy e-mail címet (felhasználónévként) és egy jelszót. Ha valamelyik hiányzik a követelmények közül, akkor a felhasználó figyelmeztetést kap a problémáról. |
| Jogosultságok | K3 | Felhasználói rang |  1.0 | - Adminisztrátor: cikkellenőrzés, hozzáférés az adminisztrátori panelhez<br> |
| | | | |  Felhasználó: cikkek létrehozása, felhasználói adatok módosítása<br> |
| | | | | - Vendég: regisztráció, bejelentkezés |
| Módosítás | K4 | felhasználói adat módosítás |  1.0 | Az adatlapján lehetősége van további információk megadására, valamint változatatni azokat az adott mezők kitöltésének megfelelően. |
| Módosítás | K5 | Elfelejtett jelszó |  1.0 | Ha a felhasználó elfelejti a jelszavát, akkor lehetősége van visszaállítani a jelszavát, amelyet a regisztrált e-mail címére küldenek. |


## 4.Jelenlegi üzleti folyamatok modellje
A mai világban már az idő nagyon sok mindent befolyásol. Manapság már mindenki szeretné a leghamarabb megtudni, elolvasni, elsők között értesülni az újonnan megjelenő hírekről, információkról. A mi esetünkben ez nem más, mint publikációk és folyóiratok. Emiatt az indítattásból van szükség a mi projektünkre, ami online formában is elérhető. A folyóiratok fontos szerepet töltenek be az információáramlásban és a tudományos kutatásban, ezért az idő az kulcsfontosságú. Számos területen és tudományágban a legújabb kutatási eredmények és fejlemények megismeréséhez elengedhetetlenek. A projektünk lehetővé teszi az információk terjesztését a tudományos közösség és a szélesebb olvasóközönség számára. Összességében a folyóiratok nélkülözhetetlenek a tudományos kutatás és az információáramlás szempontjából, és hozzájárulnak a tudományos közösség fejlődéséhez.


## 5.Igényelt üzleti folyamatok modellje
Azért hogy egyszerűbbé tegyük a téma iránt érdeklődők vagy(és) a publikálók helyzetét, létrehozunk egy weboldalt ami a mai kornak megfelelően helyt tud állni az elektronikai világban. A publikálóknak egyszerűbb lesz mert kényelmesen, bárhonnan feltudják tölteni a kivánt publikációkat, folyóiratokat. A weboldalra ingyenes a regisztráció, miután ezt elvégezzük, azután a bejelentkezést követően tudunk majd a böngészni a már kiadott, feltöltött publikációk, folyóiratok szerint. A weboldal könnyen kezelhető minden korosztály számára, akik a témák iránt érdeklődnek.


## 6. Használati esetek
- Ez a fejezet leírja pl. melyik felhasználó milyen funkciókat tud használni. 
- A ülönböző felhasználók szerepkörei:
  - Admin:
    - Összes szerepkör betöltéséhez jogosultsága van
    - Felhasználói adatokat változtathatja, látja
    - Adatbázis többi részéhez is hozzáférése van
    - Kvízeket hozhat létre
  - Diák:
    - Kvízeket kitölthet
    - Más diák felhasználókkal üzeneteket válthat
    - Saját órarendjét megtekintheti
    - Dokumentumokat tölthet fel
  - Tanár:
    - Kvízeket adhat ki
    - Saját maga által kiadott kvízekhez, dokumentumokhoz a többi felhasználóknak hozzáférését változtathatja  
    - Publikálhat
    - Publikációkat bírálhat
  - Nem regisztrált felhasználó:
    - Bizonyos (publikus) dokumentumokat megtekinthet
 - A fent említett szerepkörök (kivéve a nem regisztrált felhasználót) betöltéséhez belépés, egyes esetekben regisztráció is szükséges.

## 7. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket



## 8. Képernyőtervek



## 9. Forgatókönyv
- A forgatókönyvek a rendszer egy-egy tipikus felhasználását mutatják be. A forgatókönyvnek általában van egy célja, például egy iktató rendszerben: Levél érkeztetése, címzett értesítése, dokumentumtárba helyezés. A forgatókönyv bemutatja, milyen funkciókat kell használni, milyen sorrendben a kívánt cél elérése érdekében. Ilyen értelem egy telepítési útmutatóhoz hasonlítanak.
- Diák:
  - Belépés után meg tudja tekinteni a számára elérhetővé tett dokumentumokat. Ha éppen van kitöltendő kvíze, akkor azt ki tudja tölteni, majd arra pontot kap. Tanulmányi problémákkal kapcsolatban segítséget tud kérni a rendszer többi felhasználójától.
  - Szintén belépés után meg tudja tekinteni az órarendjét, más felhasználók tevékenységét, ezzel elősegítve a saját tanulmányait.
- Tanár:
  - Belépés után dokumentumot tölthet fel akár diákok, akár tanárok számára. Kolegáival egyeztethet a publikációkról, stb.
  - Kvízt tölthet fel a diákjainak, majd a kiltöltésekről eredményt kap. Ezekhez az eredményekhez a későbbiekben is hozzáférést kap. Bizonyos anyagokhoz időkeretes hozzáférést is biztosíthat felhasználóknak (beleértve a kvízeket).
  - Rendszer adminoknak üzenetet küldhet felmerülő problémák miatt.
- Admin:
  - Karbantartás vagy bármilyen megoldandó probléma megoldásához lép be. Hozzáfér az adatbázishoz valamint módosítási joga is van effelett. Az adatbázis tartalmának megváltoztatásával az esetlegesen felmerülő problémák jelentős része orvosolható, de ezenkívül frontendes problémákon is tud segíteni.
  - Ha a rendszert szeretné frissíteni, azt is tudja, mivel van jogosultsága mindenhez
  - Akár a tanárok által megosztott publikációkat is megtekintheti bejelentkezés után.    


## 10. Funkció, követelmény megfeleltetés



## 11. Fogalomszótár
- Reszponzív: a lehetőségekhez igazodó, rugalmasan alkalmazkodó. Reszponzív például az a weboldal, amely valamennyi eszközhöz és kijelzőmérethez rugalmasan alkalmazkodik és egyformán esztétikus és funkcionális.
- Keretrendszer: Önmagában közvetlenül nem használható, de bizonyos tipikus feladatok elvégzését nagy mértékben segítő, egységes módon megszerkesztett "építőkockákat" komponenseket tartalmazó halmaz. A keretrendszerek lényege, hogy a különböző alkalmazásokban leggyakrabban használt elemeket egyetlen helyre gyűjtik össze, és készen kínálják a fejlesztők valamint a programok számára, amelyek így rengeteg elvégzendő munkától mentesülnek.
- PHP: a PHP egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére.
- HTML: HyperText Markup Language, „hiperszöveges jelölőnyelv”) egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a W3C (World Wide Web Consortium) támogatásával.
-  CSS:  a CSS (Cascading Style Sheets, magyarul: „lépcsőzetes stíluslapok”) a számítástechnikában egy stílusleíró nyelv, mely a HTML vagy XHTML típusú strukturált dokumentumok megjelenését írja le.
- Javascript: a JavaScript programozási nyelv egy objektumorientált, prototípus-alapú szkriptnyelv, amelyet weboldalakon elterjedten használnak.
- MySQL: a MySQL egy többfelhasználós, többszálú, SQL-alapú relációs adatbázis-kezelő szerver.
- GDPR: a General Data Protection Regulation kezdőbetűiből képzett mozaikszó, magyarul általános adatvédelmi rendelet.
- Git Kanban: A kanban (magyarul „kártya”, „tábla”, „bizonylat”) a termelés vezérlésének a Pull-Prinzip (azaz húzó- vagy hívóelv) és kizárólag egy fogyasztási helyen fellépő igény kielégítésére koncentrál. A kanban rendszerben egy (kanban) mennyiség fogyása alapján irányítjuk a gyártást vagy beszerzést.
- Visual Studio Code vagy PhpStorm: a kódoláshoz használt integrált fejlesztési környezet
- Sublime Text: szövegszerkesztő
- Uizard prototype:  UI prototípuskészítő eszköz. Gyorsan lehet a segítségével prototípusokat tervezni. Gyors alkalmazás-, web- és UI prototípus készítésre is képes.
- CAPTCHA: Completely Automated Public Turing test to tell Computers and Humans Apart, aminek a jelentése „teljesen automatizált nyilvános Turing-teszt a számítógép és az ember megkülönböztetésére”
