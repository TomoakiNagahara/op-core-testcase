<?php
/**	op-core:/testcase/Time.php
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

?>
<section>
	<table class="separate">
		<?php if( OP()->Request('set') ): ?>
		<tr>
			<td><code>OP()->Time('2020-01-01 00:00:00')</code></td>
			<td><?= $time = OP()->Time('2020-01-01 00:00:00') ?> → </td>
			<td><?= date(_OP_DATE_TIME_, $time) ?></td>
			<td>Time is frozen</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td><code>OP()->Time()</code></td>
			<td><?= $time = OP()->Time() ?> → </td>
			<td><?= date(_OP_DATE_TIME_, $time) ?></td>
		</tr>
		<tr>
			<td><code>OP()->Time( utf: false )</code></td>
			<td><?= $time = OP()->Time( utc: false ) ?> → </td>
			<td><?= date(_OP_DATE_TIME_, $time) ?></td>
		</tr>
		<tr>
			<td><code>OP()->Time( utf: true )</code></td>
			<td><?= $time = OP()->Time( utc: true ) ?> → </td>
			<td><?= date(_OP_DATE_TIME_, $time) ?></td>
		</tr>
		<tr>
			<td><code>OP()->Time('2030-01-01 00:00:00')</code></td>
			<td><?= $time = OP()->Time('2030-01-01 00:00:00') ?> → </td>
			<td><?= date(_OP_DATE_TIME_, $time) ?></td>
			<td class="error"><?= OP()->Error()->Get()['message'] ?></td>
		</tr>
	</table>
	<div>
		<a href="?set=1">Set frozen time</a>
	</div>
</section>
