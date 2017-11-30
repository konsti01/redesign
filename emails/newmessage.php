Kedves <?=$username?>!

Belső üzeneted érkezett <?=App_Helper_Domain::hungarize($_domain, true)?>.hu oldalán az alábbi felhasználótól: <?=$fromuser == '' ? 'admin' : $fromuser ?>.
Kattints a következő linkre, ha meg akarod tekinteni az üzenetet:

<?=App_Controller::$_urlPrefixStatic?>/Conversations

Üdvözlettel,

A Meska.hu csapata