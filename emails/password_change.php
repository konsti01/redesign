Kedves <?= $guest ? 'Meskázó' : $user_name ?>!

Jelszómódosítást kértél <?= App_Helper_Domain::hungarize($_domain, true) ?> felületén.

Új jelszó megadásához kérjük kattints az alábbi linkre:

<a href="<?=App_Controller::$_urlPrefixStatic?>/ModPass/change_password/<?= $url_hash ?>"><?=App_Controller::$_urlPrefixStatic?>/ModPass/change_password/<?= $url_hash ?></a>

A megadott link 20 percig él és csak egyszer használható fel.

Ha nem Te kérted a jelszóváltoztatást, kérjük hagyd figyelmen kívül levelünket!

Üdvözlettel

A Meska csapata