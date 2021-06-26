/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 * #if (${STATIC} == "static")@return void #else @return ${CLASS_NAME}#end
 */
public ${STATIC} function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$${PARAM_NAME})#if (${STATIC} == "static"):void#else: ${CLASS_NAME}#end
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};

    return $this;
#end
}