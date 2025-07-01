<?php
/**	op-core-testcase:/Error.php
 *
 * @created    2025-06-23
 * @version    1.0
 * @package    op-core
 * @subpackage testcase
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

?>
[
	<a href="?no=1">1</a>
	<a href="?no=2">2</a>
	<a href="?no=3">3</a>
	<a href="?no=4">4</a>
]
<?php
//	...
switch( $_GET['no'] ?? null ){
	case 1:
		//	Exception: Expects at least 1 argument, 0 given
		md5();
		break;
	case 2:
		//	Exception: must be of type string, null given
		D();
		break;
	case 3:
		//	E_DEPRECATED: Passing null to parameter
		md5(null);
		break;
	case 4:
		D();
		break;
}
