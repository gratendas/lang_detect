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
  'ladybug\\tests\\plugin\\extra\\inspector\\object\\php\\splminheaptest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Object/Php/SplMinHeapTest.php',
  'ladybug\\tests\\plugin\\extra\\inspector\\object\\php\\splstacktest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Object/Php/SplStackTest.php',
  'ladybug\\tests\\plugin\\extra\\inspector\\object\\php\\splqueuetest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Object/Php/SplQueueTest.php',
  'ladybug\\tests\\plugin\\extra\\inspector\\object\\php\\splmaxheaptest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Object/Php/SplMaxHeapTest.php',
  'ladybug\\tests\\plugin\\extra\\inspector\\object\\php\\domdocumenttest' => '/../raulfraile/ladybug-themes/Ladybug/Plugin/Extra/Tests/Inspector/Object/Php/DOMDocumentTest.php',
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