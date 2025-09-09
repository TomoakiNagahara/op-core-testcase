<?php
/**	op-core:/testcase/cookie.php
 *
 * @created   2021-05-15
 * @version   1.0
 * @package   op-core
 * @author    Tomoaki Nagahara
 * @copyright Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/*  @var $init boolean */
$user_id = Cookie::UserID($init);

//	...
$key   = __FILE__.', '.__LINE__;
$count = Cookie::Get($key, 0);
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
