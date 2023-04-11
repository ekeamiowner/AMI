# Követelményspecifikáció

## 1. Áttekintés
Az oldal célja, hogy lehetőséget biztosítson a különböző matematikai munkák, kutatások közzétételéhez.
Abban az esetben, ha valaki hajlandó megosztani a munkáját vagy úgy gondolja, hogy ezzel segíthet másoknak, akkor az AMI (Annales Mathematicae ET Informaticae) egy tökéletes módja ennek.
A hozzáféréshez egy regisztációra van szüksége, amit egy külön meghívóval érhet el.
A meghívó segítségével a weboldal az ön által megadott felhasználónév mellé egy jelszót generál, amelyet az első belépést követően meg kell változtatnia.
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
A mai felgyorsult világ és a technika hihetetlen mértékű fejlődése miatt szinte elengedhetetlennek tartjuk, a már meglévő klasszikus és néhol idejét múlt módszerekkel működő oldalunk felfrissítését, rekonstrukcióját.
Célunk, hogy az Annales Mathematicae et Informaticae, röviden AMI oldalát egy a mai weboldalakhoz hasonló korszerű megoldásokkal és modern kivitelezéssel tudjuk működtetni.
Az oldal reformálásából fakadóan úgy hisszük, hogy mind a szerzők és mind a szerkesztő munkatársak munkáját megkönnyíthetjük és ezzel ösztönözhetjük további eredményes tevékenységekre.
Megvalósítási tervünk aktuális státszuában a jelenleg üzemelő oldalunk továbbfejlesztett Laravel 7-es verziójából tartanánk meg a jól működő könnyen átemelhető komponenseket és egészítenénk ki az új,
számtalan lehetőséggel bíró Laravel 9 által kínált módszerekkel.



## 7. Igényelt üzleti folyamatok
![Kövspec - 7. Igényelt üzleti folyamatok](https://cdn.discordapp.com/attachments/323508728508710913/1095101365757423757/Kovspec_7_-_Igenyelt_uzleti_folyamatok.png)



## 8. Követelménylista



## 9. Riportok



## 10. Fogalomtár


