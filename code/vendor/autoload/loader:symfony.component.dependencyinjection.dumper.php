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
  'symfony\\component\\dependencyinjection\\dumper\\xmldumper' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Dumper/XmlDumper.php',
  'symfony\\component\\dependencyinjection\\dumper\\dumper' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Dumper/Dumper.php',
  'symfony\\component\\dependencyinjection\\dumper\\yamldumper' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Dumper/YamlDumper.php',
  'symfony\\component\\dependencyinjection\\dumper\\dumperinterface' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Dumper/DumperInterface.php',
  'symfony\\component\\dependencyinjection\\dumper\\phpdumper' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Dumper/PhpDumper.php',
  'symfony\\component\\dependencyinjection\\dumper\\graphvizdumper' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Dumper/GraphvizDumper.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\dependencyinjection\\dumper\\xmldumper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumperinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumper',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\dumper\\dumper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumperinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\dumper\\yamldumper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumperinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumper',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\dumper\\phpdumper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumperinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumper',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\dumper\\graphvizdumper' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumperinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\dumper\\dumper',
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
