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
  'symfony\\component\\dependencyinjection\\exception\\outofboundsexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/OutOfBoundsException.php',
  'symfony\\component\\dependencyinjection\\exception\\exceptioninterface' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ExceptionInterface.php',
  'symfony\\component\\dependencyinjection\\exception\\inactivescopeexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/InactiveScopeException.php',
  'symfony\\component\\dependencyinjection\\exception\\runtimeexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/RuntimeException.php',
  'symfony\\component\\dependencyinjection\\exception\\scopecrossinginjectionexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ScopeCrossingInjectionException.php',
  'symfony\\component\\dependencyinjection\\exception\\parameternotfoundexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ParameterNotFoundException.php',
  'symfony\\component\\dependencyinjection\\exception\\invalidargumentexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/InvalidArgumentException.php',
  'symfony\\component\\dependencyinjection\\exception\\servicecircularreferenceexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ServiceCircularReferenceException.php',
  'symfony\\component\\dependencyinjection\\exception\\badmethodcallexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/BadMethodCallException.php',
  'symfony\\component\\dependencyinjection\\exception\\logicexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/LogicException.php',
  'symfony\\component\\dependencyinjection\\exception\\parametercircularreferenceexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ParameterCircularReferenceException.php',
  'symfony\\component\\dependencyinjection\\exception\\servicenotfoundexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ServiceNotFoundException.php',
  'symfony\\component\\dependencyinjection\\exception\\scopewideninginjectionexception' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Exception/ScopeWideningInjectionException.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\dependencyinjection\\exception\\outofboundsexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\inactivescopeexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\runtimeexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\runtimeexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\scopecrossinginjectionexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\runtimeexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\parameternotfoundexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\invalidargumentexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\invalidargumentexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\servicecircularreferenceexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\runtimeexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\badmethodcallexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\logicexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\parametercircularreferenceexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\runtimeexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\servicenotfoundexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\invalidargumentexception',
      1 => 'class_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\exception\\scopewideninginjectionexception' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\exceptioninterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\exception\\runtimeexception',
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
