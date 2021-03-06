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
  'symfony\\component\\config\\filelocatorinterface' => '/../symfony/config/Symfony/Component/Config/FileLocatorInterface.php',
  'symfony\\component\\config\\util\\xmlutils' => '/../symfony/config/Symfony/Component/Config/Util/XmlUtils.php',
  'symfony\\component\\config\\exception\\fileloaderimportcircularreferenceexception' => '/../symfony/config/Symfony/Component/Config/Exception/FileLoaderImportCircularReferenceException.php',
  'symfony\\component\\config\\exception\\fileloaderloadexception' => '/../symfony/config/Symfony/Component/Config/Exception/FileLoaderLoadException.php',
  'symfony\\component\\config\\configcache' => '/../symfony/config/Symfony/Component/Config/ConfigCache.php',
  'symfony\\component\\config\\resource\\resourceinterface' => '/../symfony/config/Symfony/Component/Config/Resource/ResourceInterface.php',
  'symfony\\component\\config\\resource\\directoryresource' => '/../symfony/config/Symfony/Component/Config/Resource/DirectoryResource.php',
  'symfony\\component\\config\\resource\\fileresource' => '/../symfony/config/Symfony/Component/Config/Resource/FileResource.php',
  'symfony\\component\\config\\filelocator' => '/../symfony/config/Symfony/Component/Config/FileLocator.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\config\\exception\\fileloaderimportcircularreferenceexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\exception\\fileloaderloadexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\config\\resource\\directoryresource' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\resource\\resourceinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\config\\resource\\fileresource' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\resource\\resourceinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\config\\filelocator' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\config\\filelocatorinterface',
      1 => 'interface_exists',
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
