# Funckionális specifikáció

## 1.Áttekintés



## 2.Jelenlegi helyzet  



## 3.Követelménylista
| Modul  | ID  | Name |  Version | Explanation |
|---|---|---|---|---|
| Permission  | K1  | Login | 1.0  | The user can login with his E-mail and Password. If one of them is(or both are) incorrect then an error will pop up for the user.  |
| Permission | K2 | Register |  1.0 | The user have to give a username, e-mail address and a password. If one of them is missing from the requirement, the user will be alerted about the problem. |
| Permission | K3 | User rang |  1.0 | - Admin : Article reviewing, acces to the Admin panel |
| | | | | - User : create articles, user modification |
| | | | | - Guest : register, login |
| Modify | K4 | user modification |  1.0 | Users have an option to change their username and password. If the user wants to change the password then he has to write the NEW password, the verification of the new one and the old password. |
| Modify | K5 | Elfelejtett jelszó |  1.0 | If the user forgets his password he has an option to reset his password which will be sent to his registered E-mail address. |


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
