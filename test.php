<?php

require_once __DIR__.'/diff.php';

$diffCls=new Diffnt();

$string1=<<<STRING1
Lumbinī (Nepali and Sanskrit: लुम्बिनी About this sound Listen (help·info), "the lovely") is a Buddhist pilgrimage site in the Rupandehi District of Nepal. It is the place where, according to Buddhist tradition, Queen Mayadevi gave birth to Siddhartha Gautama in 623 BCE.[1][2] Gautama, who achieved nirvana some time around 543 BCE,[3][4] became the Gautama Buddha and founded Buddhism after achieving Enlightenment.[5][6][7] Lumbini is one of many magnets for pilgrimage that sprang up in places pivotal to the life of Gautama Buddha; other notable pilgrimage sites include Kushinagar, Bodh Gaya and Sarnath.

Lumbini has a number of temples, including the Mayadevi Temple and several others which are still under construction. Many monuments, monasteries and a museum — the Lumbini International Research Institute — are also located within the holy site. Also located there is the Puskarini or Holy Pond where the Buddha's mother took the ritual dip prior to his birth and where he, too, had his first bath. At other sites near Lumbini, earlier Buddhas were, according to tradition, born, achieved ultimate Enlightenment and finally relinquished their earthly forms.
STRING1;


$string2=<<<STRING2
Lumbinī (Nepali and Sanskrit: लुम्बिनी About this sound Listen (help·info), "the lovely") is a Buddhist pilgrimage site in the Rupandehi District of Nepal. It is the place where, according to Buddhist tradition, Queen Mayadevi gave birth to Siddhartha Gautama in 623 BCE.[1][2] Gautama, who achieved nirvana some time around 543 BCE,[3][4] became the Gautama Buddha and founded Buddhism after achieving Enlightenment.[5][6][7] Lumbini is one of many magnets for pilgrimage that sprang up in places pivotal to the life of Gautama Buddha; other notable pilgrimage sites include Kushinagar, Bodh Gaya and Sarnath.

Lumbini has a number of temples, including the Mayadevi Temple and several others which are still under construction. Many monuments, monasteries and a museum — the Lumbini International Research Institute — are also located within the holy site. Also located there is the Puskarini or Holy Pond where the Buddha's mother took the ritual dip prior to his birth and where he, too, had his first bath. At other sites near Lumbini, earlier Buddhas were, according to tradition, born, achieved ultimate Enlightenment and finally relinquished their earthly forms.
STRING2;
$diffCls->diff($string1,$string2);
