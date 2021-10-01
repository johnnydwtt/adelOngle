<?php
define('STRING_REGEX',"^[A-Za-z-éèêëàâäôöûüç' ]+$");
define('NUMBER_REGEX',"^[A-Za-z-éèêëàâäôöûüç' +[0-9]+$");
define('POSTAL_REGEX',"^[0-9]{5}+$");
define('MAIL_REGEX', "^[\w\.-]+@[\w-]+\.[A-Za-z]{2,6}$");
define('ADRESS_REGEX',"^[0-9{1,7}a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ -]+$");
define('PHONE_REGEX', "^[0]{1}[0-9]{9}$");
define('DATE_REGEX',"^\d{2}/d{2}/d{4}$");
define('PASSWORD_REGEX',"^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$");
