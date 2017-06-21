# ajax-php-forum
simple Ajax PHP forum

Teszteléshez telepítsd a XAMPP webserver csomagot!

A phpmyadmin-ban hozz létre egy "phpforum" nevű adatbázist.
Ebben az adatbázisban egy "messages" elnevezésű táblát, három oszloppal ("id","username","messages","currentdate").
"id" oszlop paraméterei:        tipus:  int (11)
                                AUTO_INCREMENT és nem nullától kezdi a számolást.

"username" oszlop paraméterei:  típus:  varchar(10)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                                
"messages" oszlop paraméterei:  típus:  varchar(50)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                            
"currentdate" oszlop paraméterei: típus: datetime

Létre kell hozni egy "forum_users" nevű táblát is a Login-hoz.

"id" oszlop paraméterei:        tipus:  int (11)
                                AUTO_INCREMENT és nem nullától kezdi a számolást.

"user_name" oszlop paraméterei:  típus:  varchar(25)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                                
"user_password" oszlop paraméterei:  típus:  varchar(250)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                                
Regisztrációhoz:

"user_email" oszlop paraméterei:  típus:  varchar(50)
                                FONTOS!!! az ékezetes betűk miatt: illesztés: utf8_general_ci
                           


                                
                                
