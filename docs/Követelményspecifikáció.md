# Követelményspecifikáció

## 1. Áttekintés
Az oldal célja, hogy lehetőséget biztosítson a különböző matematikai munkák, kutatások közzétételéhez.
Abban az esetben, ha valaki hajlandó megosztani a munkáját vagy úgy gondolja, hogy ezzel segíthet másoknak, akkor az AMI (Annales Mathematicae ET Informaticae) egy tökéletes módja ennek.
A hozzáféréshez mindössze egy regisztációra van szüksége.
A regisztráció után a weboldal az ön által megadott felhasználónév mellé egy jelszót generál, amelyet az első belépést követően meg kell változtatnia.
Amennyiben megszeretné osztani a munkáját rendkívül egyszerűen feltöltheti PDF formátumban.
Ezek után meg kell várnia, míg a szerkesztőség elbírálja, hogy elfogadja majd közzéteszi a cikkét/munkáját vagy elutasítja azt és archiválja.



## 2. Jelenlegi helyzet
Az Annales Mathematicae et Informaticae – címének megfelelően – évente megjelenő periodika. Az Annales Mathematicae et Informaticae annak inditatásából jött létre, hogy az újonnan megjelenő publikációkat, folyóiratokat összegyűjtse és könnyedén biztosítja az érdeklődők felé a hozzáférést. A folyóirat szerkesztőbizottságát elismert nemzetközi, illetve hazai matematikusok és informatikusok alkotják. Ezáltal a folyóiratra csak és kizárolag ellenőrzött módon lehetséges a publikálás. A folyóiratot az EKKE Matematikai és Informatikai Intézete szerkeszti és adja ki, nyomtatott és online formában (ez utóbbi 1997-től elérhető). Online elérése ingyenes mind a publikálók, mind az olvasók szempontjából.



## 3. Vágyálom rendszer
Az AMI célja egy olyan rendszer, ami kölcsönös elégedettséget biztosít mind a publikáló, mind az olvasó közönség számára.
A feltöltő, a munkáját egy olyan helyen oszthatja meg, amely nem csak egy álatalános széleskörű népszerűségnek örvendhet, hanem eléri az adott témában érdekelt személyeket is.
Az olvasó szemszögéből pedig egy olyan értékes cikk fórumot képvisel, amely lehetőséget biztosít a szakterület kutatására vagy tartalmának elsajátítására.
A szerző munkájának feltöltése javát szolgálja a felhasználó-barát elrendezés és az egyértelmű kritériumok, minthogy a cikkek PDF kiterjesztésben szerepeljenek.
Céljaink közé tartozik az is, hogy a cikkeket elbíráló bizottság részére kiépített felület minnél inkább reszponzív, letisztult legyen, hogy munkájukat nagyban elősegítse a hatékony elbírálásban.
Ehhez kapcsolódóan elengedhetetlenek a különböző visszaigazoló státuszok a szerkesztés helyzetéről, továbbá beépített alapvető szempontok, amely alapján a bíráló érvényesíti esetlegesen elutasítja az adott cikket.
A fejlődés, valamint a naprakészség szempontjából szeretnék tartani a lépést az új technikai változásokkal. Éppen ezért a háttérben futó keretrendszer minél inkább frissebb verizójával halad tovább a rendszerünk.



## 4. Funkcionális követelmények
Mielőtt bármit is csinálnánk, be kell jelentkezni, de ha még nincs fiókja, akkor szüksége lesz egy regisztrációra. Az első bejelentkezés után meg kell változtatnia a jelszavát, mert a regisztráció után az automatikusan generált jelszó csak az első alkalomra biztosít lehetőséget.

A bejelentkezés oldal (Login page):

- A felhasználó E-mail és Jelszó segítségével tud bejelentkezni az oldalra. 

A regisztráció oldala (Register page):

- A regisztrálás az oldalon egyértelműen történik. Email és felhasználónév megadásával, az emailben kapott generált jelszóval tud bejelentkezni, amelyet az első belépés után meg kell változtatni.

A főoldal (The main page):

- Bejelentkezés után megjelenő főoldal, tartalmi szempontból a legfrissebb kötet jelenik meg és a hozzá tartozó cikkek. A cikkek egy slide-ban jelennek meg, amelyet jobbra és balra lehet mozgatni.



A kiadások oldala (The volume index page):

- A kötetek megjelennek kártyaszerű felsorolásban, több oldalra felbontva. Egy kötetet kiválasztva megjelennek a hozzá tartozó cikkek felsorolás szerűen..

A cikkek oldala (The article index page):

- Minden cikket megjelenít több oldalra felbontva, melyek között tudunk lépkedni, vagy szűrhetünk egy kötet cikkjeire cím, szerző(k) alapján.

A beküldés oldala (The submussion page (create & edit form)):
  
- Ezen az oldalon lehet új publikációkat feltölteni, vagy egy már feltöltött publikációkat módosítani. Ehhez szükséges az oldalon regisztrált felhasználónak lenni.

Az rólunk oldal (The about us page):

- Az oldalon a fejléc alatt megjelenik egy rövid leírás az oldalról, illetve a szerkesztőség tagjairól láthatunk információkat.


## 5. Rendszerre vonatkozó törvények, szabványok, ajánlások
### Törvények
- Az Európai Parlament És A Tanács (EU) 2016/679 rendelete

- Az információs önrendelkezési jogról és az információszabadságról szóló 2011. évi CXII. törvény 4.§ (1) és (2) bekezdései

- Az 1999. évi LXXVI. törvény a szerzői jogról az I. fejezet 1.§ szerint

### Rendszerszabványok, ajánlások
- A web felület szabványos eszközökkel készüljön a Laravel (9) keretrendszer segítségével
    - PHP (backend)
    - HTML, CSS (frontend és design)
    - Javascript (backend, frontend)
    - MySQL (adatbázis) 
- A képek jpg/jpeg/png/gif formátumúak lehetnek
- A felhasználókat azonosító weboldalak esetében szükséges jogszabályokat be kell tartani: GDPR, illetve a fent megnevezett törvények
- Mindenképp biztosítsa a rendszer az elkezdett, de valamilyen okból félbeszakadt cikkek feltöltésének/vizsgálatának folytatását
- Legnépszerűbb böngészők támogatása (Chrome, Firefox, Edge, Opera, Safari)

- Git Kanban (Kanban-tábla)
- Discord, email, személyes megbeszélések, interjúk (kommunikáció)
- Github (a kóddal való együttműködés)
- Visual Studio Code vagy PhpStorm (a kódoláshoz használt IDE)
- Sublime Text vagy egyéb szöveg- és forráskód-szerkesztő (a dokumentáció kidolgozásához, markdown kiterjesztésű formátumban)
- Uizard prototype vagy egyéb UI Mockup eszközök (a képernyőtervekhez)



## 6. Jelenlegi üzleti folyamatok modellje
Manapság már mindenki szeretné a leghamarabb megtudni, elolvasni, elsők között értesülni az újonnan megjelenő hírekről, információkról. A mi esetünkben ez nem más, mint publikációk és folyóiratok. Emiatt az indítattásból van szükség a mi projektünkre, ami online formában is elérhető. A folyóiratok fontos szerepet töltenek be az információáramlásban és a tudományos kutatásban, ezért az idő az kulcsfontosságú. Számos területen és tudományágban a legújabb kutatási eredmények és fejlemények megismeréséhez elengedhetetlenek. A projektünk lehetővé teszi az információk terjesztését a tudományos közösség és a szélesebb olvasóközönség számára. A mai felgyorsult világ és a technika hihetetlen mértékű fejlődése miatt szinte elengedhetetlennek tartjuk, a már meglévő klasszikus és néhol idejét múlt módszerekkel működő oldalunk felfrissítését, rekonstrukcióját.
Célunk, hogy az Annales Mathematicae et Informaticae, röviden AMI oldalát egy a mai weboldalakhoz hasonló korszerű megoldásokkal és modern kivitelezéssel tudjuk működtetni.
Az oldal reformálásából fakadóan úgy hisszük, hogy mind a szerzők és mind a szerkesztő munkatársak munkáját megkönnyíthetjük és ezzel ösztönözhetjük további eredményes tevékenységekre.
Megvalósítási tervünk aktuális státszuában a jelenleg üzemelő oldalunk továbbfejlesztett Laravel 7-es verziójából tartanánk meg a jól működő könnyen átemelhető komponenseket és egészítenénk ki az új,
számtalan lehetőséggel bíró Laravel 9 által kínált módszerekkel.



## 7. Igényelt üzleti folyamatok
![Kövspec - 7. Igényelt üzleti folyamatok](https://cdn.discordapp.com/attachments/323508728508710913/1108853759783743580/image.png)



## 8. Követelménylista
| Modul | ID | Név | v. | Kifejtés |
|---|---|---|---|---|
| Jogosultság | K1 | Bejelentkezési felület | 1.0 | A felhasználó a User ID (email címe) és jelszava segítségével bejelentkezhet. Ha a megadott user id vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap. |
| Jogosultság | K2 | Regisztráció | 1.0 | A felhasználó a user id (email címe), valamint a keresztnevének megadásával és egy CAPTCHA "Nem vagyok robot" verifikációjával regisztrálja magát. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót. A jelszó a regisztrációt követő emailben megkapott automatikusan legenerált, amelyet csak az első bejelentkezéshez használthat, azt követően megváltoztatásra kényszerül. |
| Jogosultság | K3 | Kijelentkezés | 1.0 | A bejelentkezett felhasználók a kijelentkezés gombra kattintva kitudnak jelentkezni, amely a bejelentkező felületre irányíja őket. |
| Feltöltés | K4 | Cikk feltöltése | 1.0 | Megjelenik a feltöltésre szolgáló felület, ahol a menüpontok kitöltésével kezdheti meg munkája publikálását. |
| Feltöltés | K4.1 | Cikk feltöltése menüpontok | 1.0 | A felületen meg kell adni a szerzők számát, ebből kifolyólag a teljes nevüket. Majd a cikk címét és csatolni a PDF fájlt. Meg kell jelölni a cikk típusát, amelyek a kutatási, módszertani, vagy (Formális módszerek az informatikában) című különszámhoz készült tanulmányok egyike lehet. Végül megjelölhet olyan személyeket, akiket ajánlana a cikkje elbírálásához. |
| Módosítás | K5 | Jelszó módosítás | 1.0 | A jelszava megváltoztatásához a kritériumoknak megfelelően meg kell adnia egy új jelszót, majd ezt megismételni. |
| Módosítás | K6 | Adatlap módosítás | 1.0 | Az adatlapján lehetősége van további információk megadására, valamint változatatni azokat az adott mezők kitöltésének megfelelően. |
| Keresés | K7 | Folyóírat keresés | 1.0 | Lehetősége van keresni megadott kulcsszavak alapján, amelyek meglétét személyre szabhatóan választja ki, hogy pontosan hol szerepeljen a megadott szó (szerző/cím/bárhol). |
| Főoldal | K8 | Főoldal (Contents) | 1.0 | Itt jelenik meg tartalmi szempontból a legfrissebb kötet és a hozzátartozó cikkek. |
| Szerkesztő bizottság | K9 | (Editorial board) | 1.0 | A szerkesztőség tagjairól olvashatunk |
| Elbírálás | K10 | Szerkesztői nézet | 1.0 | A bírálóbizottság itt hagyja jóvá vagy utasítja el az adott cikket. | 



## 9. Riportok
- Létezik az úgynevezett szabad riport amelyben igazából csak azt a
kérdést tesszük fel, hogy hogyan kellene működnie az új rendszernek. A
másik típus az irányított amely inkább egy rövid válaszokra épülő
kérdőívnek tűnhet.


## 10. Fogalomtár
- Perodika: folyóirat


