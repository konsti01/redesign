Kedves <?= $user_name ?>!

<?php if ($recurring) { ?>
<?php if ($limit == 0) { ?>
Szeretnénk tájékoztatni arról, hogy feltöltött egyenleged összege 0 Ft alá csökkent, ezért automatikus befizetést kezdeményeztünk a következő összeggel: <?= $recurring_amount ?> Ft.

A sikeres fizetés tényéről minden esetben a hagyományos bankkártyás fizetéssel megegyező csatornákon keresztül kapsz értesítést a Barion fizetési szolgáltatótól.

Ha a fizetés valamiért nem járna sikerrel, kérjük legkésőbb 14 napon belül gondoskodj egyenleged feltöltéséről, hogy termékeid megjelenése zavartalan legyen. A bankkártyás fizetés kezdeményezéséhez, vagy a banki átutaláshoz szükséges adatok megtekintéséhez, kérjük látogass el a Fiókom/Meska egyenlegem-számlázás menüpontba.
<?php } else { ?>
Szeretnénk felhívni a figyelmedet arra, hogy <b>feltöltött egyenleged összege <?=$limit?> Ft alá csökkent.</b>

Boltodban beállítottad az Ismétlődő fizetést, így ha egyenleged 0 Ft alá csökken, a Fiókom/Meska egyenlegem-számlázás menüben megadott összeggel automatikus befizetés kezdeményezünk, így további teendőd nincs.
<?php } ?>
<?php } else { ?>
<?php if ($limit == 0) { ?>
Szeretnénk felhívni a figyelmedet arra, hogy <b>feltöltött egyenleged összege <?=$limit?> Ft alá csökkent.</b>

Amennyiben szeretnéd, hogy boltod továbbra is aktív legyen, kérjük töltsd fel az egyenleged - ennek hiányában boltod 14 nap múlva inaktív státuszba kerül.
<?php } else { ?>
Szeretnénk felhívni a figyelmedet arra, hogy <b>feltöltött egyenleged összege <?=$limit?> Ft alá csökkent.</b>

Termékeid megjelenésének zavartalansága érdekében kérjük, gondoskodj egyenleged feltöltéséről!
<?php } ?>

Ha átutalással szeretnél fizetni, az utaláshoz szükséges információkat a Fiókom/Meska egyenlegem-számlázás menüpontjában találod:

<b>Minimális befizetés: 2 000 Ft</b>

<b>Fizetési mód: banki átutalás</b>

Meska bankszámla:

Kedvezményezett neve: Meska.hu Kft.
Bankadatok belföldi utaláshoz: 10100826-09987600-01001001 (Budapest bank)
Bankadatok nemzetközi utaláshoz: HU41101008260998760001001001
<b>Közlemény rovatba írandó szöveg: <?= $user_name ?></b>

<b>Ha a közlemény rovatba írandó szöveget nem pontosan adod meg, akkor utalásodat nem, vagy csak késve tudjuk beazonosítani. </b>

<b>Fontos megjegyzések a banki átutalásról:</b>
 - A Meska az átutalásokat a beérkezést követő 1 munkanapon (24 óra) belül írja jóvá.
 - Őrizd meg a banktól kapott kimutatásokat mindaddig, amíg biztosan nem látod, hogy a Meska bekönyvelte az átutalt összeget.
 - Helyi bankod eljárási módjától függően 1-2 munkanap is eltelhet, mire a Meska megkapja az átutalást.
 - Az utalás beérkezéséről értesítőt küldünk Meska belső üzenetben.
 - Ha az utalást követő 3. munkanapig sem kapsz értesítőt, kérjük vedd fel a kapcsolatot ügyfélszolgálatunkkal a Meska alsó láblécében található Kapcsolat menüponton keresztül.
 - Az utalás beérkezését követően befizetésedről elektronikus számlát állítunk ki, melyet feltöltünk a Fiókom/Meska egyenlegem-számlázás menüpontba.
<?php } ?>

Üdvözlettel

A Meska csapata
