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
  'foobar\\term1\\xx1' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx2' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx3' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx4' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx5' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx6' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx7' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx8' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx9' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
  'foobar\\term1\\xx20' => '/../crodas/autoloader/tests/fixtures/multiple/foo.php',
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
