<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

	// *** SMTP *** //

	require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'smtp.mail.ru';
		  const LOGIN = 'weisezahoy@mail.ru';
		  const PASS = 'eiMG0BC1MYVK8Ty4dDNk';
		  const PORT = '465';

		 //*** /SMTP *** //
   
    const SENDER = 'weisezahoy@mail.ru';
    const CATCHER = 'kengangenkay@yandex.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    