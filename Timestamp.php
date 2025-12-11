<?php
/**	op-core:/testcase/Timestamp.php
 *
 * @created    2025-12-11
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage testcase
 * @copyright  (C) 2025 Tomoaki Nagahara
 */

/**	namespace
 *
 */
namespace OP;

//	...
if( OP()->Request('set') ){
	OP()->Time('2030-01-01 00:00:00');
}

?>
<section>
	<table>
		<tr>
			<td><code>Timestamp()</code></td>
			<td><?= OP()->Timestamp() ?></td>
		</tr>
		<tr>
			<td><code>Timestamp(utc:false)</code></td>
			<td><?= OP()->Timestamp(utc:false) ?></td>
		</tr>
		<tr>
			<td><code>Timestamp(utc:true)</code></td>
			<td><?= OP()->Timestamp(utc:true) ?></td>
		</tr>
		<tr>
			<td><code>Timestamp('+1 hour')</code></td>
			<td><?= OP()->Timestamp('+1 hour') ?></td>
		</tr>
		<tr>
			<td><code>Timestamp('-1 hour')</code></td>
			<td><?= OP()->Timestamp('-1 hour') ?></td>
		</tr>
		<tr>
			<td><code>Timestamp('1 month')</code></td>
			<td><?= OP()->Timestamp('1 month') ?></td>
		</tr>
		<tr>
			<td><code>Timestamp('1 year')</code></td>
			<td><?= OP()->Timestamp('1 year') ?></td>
		</tr>
	</table>
	<div>
		<a href="?set=1">Time frozen</a>
	</div>
</section>
