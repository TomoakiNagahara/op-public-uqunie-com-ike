<?php
/**	op-public-ikebukuro:/webpack/index.php
 *
 * @created    2026-05-22
 * @license    Apache-2.0
 * @package    op-public-ikebukuro
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//  ...
$args = OP()->Unit()->Router()->Args();
$ext = $args[0];
OP()->Unit()->WebPack()->Auto("./{$ext}/");
OP()->MIME($ext);
OP()->Unit()->WebPack()->Output($ext);
