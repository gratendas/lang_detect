<?php
/**
 *  Autoloader function generated by crodas/Autoloader
 *
 *  https://github.com/crodas/Autoloader
 *
 *  This is a generated file, do not modify it.
 */

return function($class) {
    // classes {{{
    static $classes = array (
  'ladybug\\tests\\type\\nulltypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/NullTypeTest.php',
  'ladybug\\tests\\type\\stringtypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/StringTypeTest.php',
  'ladybug\\tests\\type\\objecttypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/ObjectTypeTest.php',
  'ladybug\\tests\\type\\foo' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/ObjectTypeTest.php',
  'ladybug\\tests\\type\\bar' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/ObjectTypeTest.php',
  'ladybug\\tests\\type\\factorytypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/FactoryTypeTest.php',
  'ladybug\\tests\\type\\floattypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/FloatTypeTest.php',
  'ladybug\\tests\\type\\resourcetypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/ResourceTypeTest.php',
  'ladybug\\tests\\type\\arraytypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/ArrayTypeTest.php',
  'ladybug\\tests\\type\\inttypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/IntTypeTest.php',
  'ladybug\\tests\\type\\booltypetest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Type/BoolTypeTest.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'ladybug\\tests\\type\\bar' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\tests\\type\\foo',
      1 => 'class_exists',
    ),
  ),
);
    // }}}

    if (isset($classes[$class])) {
        if (!empty($deps[$class])) {
            foreach ($deps[$class] as $zclass) {
                if (is_array($zclass)) {
                    if (!$zclass[1]($zclass[0], false)) {
                        require __DIR__  . $classes[$zclass[0]];
                    }
                } else if (!class_exists($zclass, false)) {
                    require __DIR__  . $classes[$zclass];
                }
            }
        }
        if (is_array($class)) {
            if (!$class[1]($class[0], false)) {
                require __DIR__  . $classes[$class[0]];
            }
        } else if (!class_exists($class, false)) {
            require __DIR__  . $classes[$class];
        }
        return true;
    }
};