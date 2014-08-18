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
  'ladybug\\tests\\environment\\clienvironmenttest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Environment/CliEnvironmentTest.php',
  'ladybug\\tests\\environment\\browserenvironmenttest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Environment/BrowserEnvironmentTest.php',
  'ladybug\\tests\\environment\\ajaxenvironmenttest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Environment/AjaxEnvironmentTest.php',
  'ladybug\\tests\\model\\variablewrappertest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Model/VariableWrapperTest.php',
  'ladybug\\tests\\theme\\themeresolvertest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/Theme/ThemeResolverTest.php',
  'ladybug\\tests\\dumpertest' => '/../raulfraile/ladybug/tests/Ladybug/Tests/DumperTest.php',
);
    // }}}


    if (isset($classes[$class])) {
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