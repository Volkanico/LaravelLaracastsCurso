<?php 
//ruta composer.phar: C:\ProgramData\ComposerSetup\bin\composer.phar



//Per veure les rutes del projecte d'exemple generat anirem a routes/web.php
//La ruta definida a routes/web.php carrega la vista que es diu 'welcome' que esta a la ruta resources/views/welcome.blade.php
//Es pot modificar la vista directament i sortira el resultat amb una refresca al navegador
/*
PER RETORNAR UN JSON
Route::get ('/', function (){
    return ['foo' => 'bar'];
})
PER RETORNAR TEXT
Route::get ('/', function (){
    return 'Hello World';
})
*/

//Hem creat una nova vista que es diu OwnWelcome.blade.php amb la ruta /myblog
//Hem creat un nou fitxer css a public/app.css
//Hem creat un nou fitxer css a public/app.js
//Aquests dos fitxers es poden ficar dins una carpeta (css i/o js) i podem ficar els arxius dins
//Les planes de Views tenen acces directe als fitxers de public
//La plana posts fa una redireccio amb les routes web.php i un link als h1
?>
