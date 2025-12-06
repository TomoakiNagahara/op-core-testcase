<?php
/**	op-core-testcase:/AppID.php
 *
 * 1. Check can get AppID
 * 2. Check duplicate registration of AppID
 *
 * @created    2021-10-20
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage testcase
 * @copyright  (C) 2021 Tomoaki Nagahara
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
D([
	'_APP_ID_'     => _APP_ID_,
	'OP::AppID()'  => OP::AppID(),
	'Env::AppID()' => Env::AppID(),
]);

//	Check if equal const and OP.
if( _APP_ID_ !== OP::AppID() ){
	throw new \Exception('_APP_ID_ and OP::AppID() do not match.');
}

//	Check if equal Env and OP.
if( Env::AppID() !== OP::AppID() ){
	throw new \Exception('Env::AppID() and OP::AppID() do not match.');
}

//	...
$test = [];

//	...
try {
	//	Get AppID.
	$test[__LINE__] = OP::AppID();
	//	Overwrite AppID.
	$test[__LINE__] = OP::AppID('testcase');

	//	Check if error.
	if( OP::Error()->Has() ){
		$test[__LINE__] = OP::Error()->Get()['message'];
		D($test);
		return;
	}

} catch ( \Throwable $e ){
	//	...
	$test[__LINE__] = $e->getMessage();

	//	...
	if( OP::Error()->Has() ){
		$test[__LINE__] = OP::Error()->Get()['message'];
	}else{
		/* CI is in used.
		Notice::Set("Feature of set AppID by argument will deprecated.");
		*/
	}

	//	...
	D($test);

	//	...
	return;
}

//	...
D($test);

//	...
OP::Error("Please correct can duplicate registration of AppID.");
