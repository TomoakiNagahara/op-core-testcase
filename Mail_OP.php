<?php
/**	op-core-testcase:/Mail_OP.php
 *
 * @created    2025-07-27
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

//	...
$request = OP::Request();
$to      = $request['to']      ??  null;
$subject = $request['subject'] ?? 'Test of HTML mail';
$message = $request['message'] ?? "This is test mail.";

//	...
if( empty($to) ){
	//	...
	$uid = fileowner(__FILE__);
	$to  = posix_getpwuid($uid)['name'];
}

//	...
$headers = [
	'cc'  => 'root',
	'bcc' => 'root',
];

//	...
$io = OP::Mail($to, $subject, $message, $headers);
D($io);

//	...
$headers['mime'] = 'text/html';
$message = "<h1>{$subject}</h1><p>{$message}</p>";
$io = OP::Mail($to, $subject, $message, $headers);
D($io, $to, $subject, $message, $headers);
