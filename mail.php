<?php
/**	op-core-testcase:/mail.php
 *
 * @created    2025-07-25
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage testcase
 * @copyright  (C) 2025 Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

//	Check php.ini setting.
if( $sendmail_path = `php -i | grep sendmail_path` ){
	OP::Html($sendmail_path);
}else{
	OP::Error("sendmail_path is not set in php.ini.");
}

//	...
$request = OP::Request();
$to      = $request['to']      ??  null;
$from    = $request['from']    ?? 'root';
$subject = $request['subject'] ?? 'This is test mail';
$message = $request['message'] ?? "This is test mail.";

//	...
if( empty($to) ){
	//	...
	$uid = fileowner(__FILE__);
	$to  = posix_getpwuid($uid)['name'];
}

//	headers
$headers  = "From: {$from}\r\n";
$headers .= "Reply-To: noreply\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

//	...
$io = mail($to, $subject, $message, $headers);
echo 'mail: ' . $io ? 'Successful':'Failed';
D($request);
