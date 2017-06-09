# ajax-php-forum
simple Ajax PHP forum

Teszteléshez telepítsd a XAMPP webserver csomagot!

A phpmyadmin-ban hozz létre egy "phpforum" nevű adatbázist.
Ebben az adatbázisban egy "messages" elnevezésű táblát, három oszloppal ("id","username","messages","currentdate").
"id" oszlop paraméterei:        tipus:  int
                                AUTO_INCREMENT és nem nullától kezdi a számolást.

"username" oszlop paraméterei:  típus:  varchar(10)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                                
"messages" oszlop paraméterei:  típus:  varchar(50)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                            
"currentdate" oszlop paraméterei: típus: datetime
                                
                                
