Kedves <?=$user_name?>!<br><br>

Múlt heti levelünkben írtunk a hétre meghirdetett ingyenes termékfeltöltési akcióról.
<?php if ($uploads < $necessary){?>
	E szerint <?=  App_Helper_Format::dateToMonth($date)?> <?=date("d", strtotime($date))?>-án szombaton <?=$reward?> terméket tölthetsz fel ingyenesen a Meska, Alkotók boltja vagy Ízporta oldalaira, amennyiben a hétfőtől péntekig terjedő időszakban legalább 5 termékkel bővíted kínálatodat.<br><br>
	Örömmel látjuk, hogy az akció kezdete óta a Te boltodba is felkerült <?=$uploads?> darab új termék. <strong>Amennyiben péntek éjfélig feltöltesz még legalább <?=$necessary-$uploads?> terméket, Te is jogosulttá válsz arra, hogy a holnapi nap folyamán díjmentesen tölthess fel további <?=$reward?> terméket!</strong> Az akció nem csak az új termékekre, hanem a korábban eladott vagy lejárt termékek újraaktiválására is érvényes!
<?php } else {?>
	<strong>A mai napon tehát <?=$reward?> terméket ingyenesen tölthetsz fel</strong> a Meskára, az Alkotók boltjára vagy az Ízportára. Ez nem csak az új termékekre, hanem a korábban eladott vagy lejárt termékek újraaktiválására is érvényes!<br><br>
	Várjuk termékeidet sok szeretettel!<br><br>
<?php } ?>

Minden jót, további örömteli munkát, sikeres meskázást kívánunk,<br><br>

Üdvözlettel,<br><br>

A Meska csapata<br><br>
