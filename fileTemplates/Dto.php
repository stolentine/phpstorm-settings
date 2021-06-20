<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use App\Support\Dto\DataTransferObject;

class ${NAME} extends DataTransferObject
{
}
