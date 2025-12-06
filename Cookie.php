<?php
/**	op-core:/testcase/Cookie.php
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

/*  @var $init boolean */
$user_id = Cookie::UserID($init);

//	...
if( $init ){
	OP()->Error('UserID has not been saved.');
}

//	...
$key   = __FILE__.', '.__LINE__;
$count = Cookie::Get($key, 0);

//	...
if( empty($count) ){
	OP()->Error('Cookie has not been saved.');
}

//	...
$count++;
Cookie::Set($key, $count);

?>
<section class="markdown" data-translation="true">
The "Cookie" class
===

 The "Cookie" class is easy to save and get values from the "Cookie".
 The values saved by the "Cookie" class are encrypted. So can not be view and update on the user side.

```php
namespace OP;
Cookie::Set('foo', 'bar');
echo Cookie::Get('foo');
```

 The "Cookie" class can generate a unique ID.

```php
echo Cookie::UserID();
```
</section>

<section>
	<p>UserID : <?= $user_id ?> (Initialization? <?= $init ? 'true':'false' ?>)</p>
	<p>Count up : <?= $count ?></p>
</section>

<hr/>

<section>
<?php
//	...
$key    = __FILE__.', '.__LINE__;
$count  = OP()->Cookie()->Get($key, 0);
$count  = $count + 1;
$result = OP()->Cookie()->Set($key, $count);
D($count, $result);
?>
</section>
