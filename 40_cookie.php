<?php


setcookie('cookie_test', 'test_cookie');
setcookie('auth', 'OK', (time()  + (7 * 24 * 60 * 60))); //o time pega o tempo atual e soma com mais 5 segundos.
echo $_COOKIE['cookie_test'];