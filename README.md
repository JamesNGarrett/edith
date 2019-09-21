# edith
data dashboard skeleton

# Helpers

## PfData

Description: A class static methods to filter and or transform strings and arrays to other formats. No state, no dependencies.  Prejudices towards minimal common use functions. Generally assumes Latin alphabet only. Unless otherwise noted, the functions take a single argument

### Methods

String Transform

* toSnake
* toKebab
* toCamel
* toPascal
* toTitle

String Filters

* filterAlphaNumeric
* filterAlphaNumericAndHyphen
* filterAlphaNumericAndUnderscores
* filterText // String All Html Tags while keeping linebreaks
* encodeText // Encode All Html Tags while keeping linebreaks
* filterCommaSeparatedNumbers

String Modifiers

* extractFirstBetween($str,$start,$end)

