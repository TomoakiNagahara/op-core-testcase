<?php
/**	op-core:/testcase/session.php
 *
 * @created    2021-05-15
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage testcase
 * @copyright  (C) 2021 Tomoaki Nagahara
 */

/**	namespace
 *
 */
namespace OP;

//	...
$count = Session::Get('count', 0);
$count++;
Session::Set('count', $count);
?>
<section>
	<p>Count up : <?= $count ?></p>
</section>
