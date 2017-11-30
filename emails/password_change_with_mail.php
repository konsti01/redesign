Kedves <?= $guest ? 'Meskázó' : $user_name ?>!

Üzenetet küldtél <?= App_Helper_Domain::hungarize($_domain, true) ?> rendszerén keresztül, azonban az üzenet küldésénél nem ehhez az e-mailhez tartozó jelszót adtad meg, ezért üzenetedet még nem továbbítottuk a címzett részére.

<strong>A jelszómódosítás megerősítéséhez és az üzenet elküldéséhez</strong> kérjük kattints az alábbi linkre:

<a href="<?=App_Controller::$_urlPrefixStatic?>/ModPass/change_password/<?= $url_hash ?>"><?=App_Controller::$_urlPrefixStatic?>/ModPass/change_password/<?= $url_hash ?></a>

A megadott link 20 percig él és csak egyszer használható fel.

<strong>Amennyiben üzenetküldés közben csak elírtad jelszavadat</strong> és jelszómódosítás nélkül szeretnéd elküldeni az üzenetet, kattints erre a linkre: <a href="<?=App_Controller::$_urlPrefixStatic?>/AnonymConversation/send/<?= $url_hash ?>"><?=App_Controller::$_urlPrefixStatic?>/AnonymConversation/send/<?= $url_hash ?></a>

Ha nem Te kérted a jelszóváltoztatást, és nem kezdeményeztél üzenetküldést <?= App_Helper_Domain::hungarize($_domain, true, 'n') ?>, kérjük hagyd figyelmen kívül levelünket!

Üdvözlettel

A Meska csapata