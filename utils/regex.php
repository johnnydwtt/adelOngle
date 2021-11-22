<?php
define('STRING_REGEX',"^[A-Za-z-éèêëàâäôöûüç' ]+$");

define('NUMBER_REGEX',"^[A-Za-z-éèêëàâäôöûüç' +[0-9]+$");

define('POSTAL_REGEX',"^[0-9]{5}+$");

define('MAIL_REGEX', "^[\w\.-]+@[\w-]+\.[A-Za-z]{2,6}$");

define('ADRESS_REGEX',"^[0-9{1,7}a-zA-ZàâæçéèêëîïôœùûüÿÀÂÆÇnÉÈÊËÎÏÔŒÙÛÜŸ -]+$");

define('PHONE_REGEX', "^[0]{1}[0-9]{9}$");

define('DATE_REGEX',"^\d{2}\/\d{2}\/\d{4}$");

define('REGEXP_STR_NO_NUMBER','^[A-Za-zéèêëàâäôöûüç\' ]+$');

define('REGEXP_DATE',"^\d{4}-\d{2}-\d{1,2}$");

define('REGEXP_PHONE', '^(\+33|0|0033)[1-9]((\-|\/|\.)?\d{2}){4}$');

define('REGEXP_HOUR',"^[0-2][0-3]:[0-5][0-9]$");
