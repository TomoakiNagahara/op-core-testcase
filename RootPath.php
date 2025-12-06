<?php
/**	op-core-testcase:/RootPath.php
 *
 * @created    2025-07-04
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
D( RootPath() );

//	Checks if the app root is under the doc root.
$app = RootPath('app');
$doc = RootPath('doc');
if( strpos( $app, $doc) !== 0 ){
	OP::Error("The app root is not below the doc root: app={$app}, doc={$doc}");
}

//	Test the detection of error in the asset root path.
require_once(_ROOT_CORE_.'/function/ConvertURL-2.php');
D( ConvertURL(__DIR__) );
$error = OP::Error()->Get();
$message = $error['message'];
if( $message !== 'This path is the asset root path: '.__DIR__ ){
	OP::Error($message);
}
