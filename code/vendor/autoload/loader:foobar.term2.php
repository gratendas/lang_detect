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
  'foobar\\term2\\yyy1' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy2' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy3' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy4' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy5' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy6' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy7' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy8' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy9' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
  'foobar\\term2\\yyy20' => '/../crodas/autoloader/tests/fixtures/multiple/bar.php',
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