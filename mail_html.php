<?php
/**	op-core-testcase:/mail_html.php
 *
 * @created    2025-07-25
 * @version    1.0
 * @package    op-core
 * @subpackage testcase
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
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
$from    = $request['from']    ?? 'root';
$reply   = $request['reply']   ?? $from;
$subject = $request['subject'] ?? 'Test of HTML mail';
$message = $request['message'] ?? "This is test mail.";

//	...
if( empty($to) ){
	//	...
	$uid = fileowner(__FILE__);
	$to  = posix_getpwuid($uid)['name'];
}

//	...
$message = <<<EOT
<html>
<head>
	<title>{$subject}</title>
</head>
<body>
	<h1>Hello!!</h1>
	<p>This is <strong>HTML format</strong> test mail.</p>
</body>
</html>
EOT;

//	...
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: {$from}\r\n";
$headers .= "Reply-To: {$reply}\r\n";

//	...
$io = mail($to, $subject, $message, $headers);
echo 'mail: ' . $io ? 'Successful':'Failed';
D($request);
