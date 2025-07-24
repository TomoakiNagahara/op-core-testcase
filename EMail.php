<?php
/**	op-core-testcase:/EMail.php
 *
 * @created    2025-07-21
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
if(!$to = OP::Request('to') ){
	OP::Html('to is empty');
	return;
}

//	...


//	...
$mail = new EMail();
$from = $mail->GetLocalAddress();
$mail->From($from, 'From name');
$mail->To($to, 'To name');
$mail->Subject('This is test mail');
$mail->Content('Did you receive the email?');
$io = $mail->Send();
D($io, $to, $from);
