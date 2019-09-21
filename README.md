# edith
data dashboard skeleton

# Helpers

## PfData

Description: A class static methods to filter and or transform strings and arrays to other formats. No state, no dependencies.  Prejudiced towards minimal common use functions, extend for more app specific methods. Generally assumes Latin alphabet only. Unless otherwise noted, the functions take a single argument either string or array as appropriate.

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
* filterText  -> strip all Html tags while keeping linebreaks
* encodeText  -> encode all Html Tags while keeping linebreaks
* filterCommaSeparatedNumbers

String Modifiers

* extractFirstBetween($str,$start,$end)  -> returns false if either start or end isn't found

