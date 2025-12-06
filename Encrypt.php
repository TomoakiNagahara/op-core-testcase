<?php
/**	op-core-testcase:/Encrypt.php
 *
 * @created    2025-11-19
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage testcase
 * @copyright  (C) 2025 Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
$encrypt = OP()->Request('encrypt');
$decrypt = OP()->Request('decrypt');

//	...
if( $encrypt === null ){
	$encrypt = OP()->Session()->Get('encrypt');
}else{
	OP()->Session()->Set('encrypt', $encrypt);
}

//	...
if( $decrypt === null ){
	$decrypt = OP()->Session()->Get('decrypt');
}else{
	OP()->Session()->Set('decrypt', $decrypt);
}

?>
<style>
textarea {
	width: 100%;
	height: 10em;
}
textarea::placeholder {
	color: blue;
	opacity: 0.5;
	font-style: italic;
	font-weight: bold;
	margin-left: 0.5em;
}
</style>
<h1>Encrypt / Decrypt</h1>
<p>
	You can test encryption and decryption.
</p>
<h1>To encrypt</h1>
<form method="POST">
	<textarea name="encrypt" placeholder="Enter the string you want to encrypt."><?= $encrypt ?></textarea><br/>
	<button> Encrypt </button>
</form>
<?php if( $encrypt ): ?>
	<h2>Result</h2>
	<div class="border"><?= Encrypt::Enc($encrypt) ?></div>
<?php endif; ?>
<hr/>
<h1>To decrypt</h1>
<form method="POST">
	<textarea name="decrypt" placeholder="Enter the encrypted string and it will be decrypted."><?= $decrypt ?></textarea><br/>
	<button> Decrypt </button>
</form>
<?php if( $decrypt ): ?>
	<h2>Result</h2>
	<div class="border"><?= Encrypt::Dec($decrypt) ?></div>
<?php endif; ?>
