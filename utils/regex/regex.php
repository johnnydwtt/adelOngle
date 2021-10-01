<?php
define('STRING_REGEX',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('NUMBER_REGEX',"^[A-Za-z-éèêëàâäôöûüç' +[0-9]+$");
define('POSTAL_REGEX',"^[0-9]{5}+$");
define('MAIL_REGEX', "^[\w\.-]+@[\w-]+\.[A-Za-z]{2,6}$");
define('ADRESS_REGEX',"^[0-9{1,7}a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ -]+$");
define('PHONE_REGEX', "^[0]{1}[0-9]{9}$");
define('DATE_REGEX',"^\d{2}\/\d{2}\/\d{4}$");
define('DATEH_REGEX',"(?=\d)(?:(?:1[6-9]|[2-9]\d)?\d\d([-.\/])(?:1[012]|0?[1-9])\1(?:31(?<!.(?:0[2469]|11))|(?:30|29)(?<!.02)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$");
define('PASSWORD_REGEX',"^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$");
