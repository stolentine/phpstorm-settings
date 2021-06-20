<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Spatie\Enum\Enum;

/**
 * @method static self value()
 */
class ${NAME} extends Enum
{
}
