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
  'ladybug\\renderer\\rendererresolverinterface' => '/../raulfraile/ladybug/src/Ladybug/Renderer/RendererResolverInterface.php',
  'ladybug\\renderer\\twig\\extension\\baseextension' => '/../raulfraile/ladybug/src/Ladybug/Renderer/Twig/Extension/BaseExtension.php',
  'ladybug\\renderer\\twig\\extension\\consoleextension' => '/../raulfraile/ladybug/src/Ladybug/Renderer/Twig/Extension/ConsoleExtension.php',
  'ladybug\\renderer\\twig\\extension\\textextension' => '/../raulfraile/ladybug/src/Ladybug/Renderer/Twig/Extension/TextExtension.php',
  'ladybug\\renderer\\abstractrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/AbstractRenderer.php',
  'ladybug\\renderer\\rendererinterface' => '/../raulfraile/ladybug/src/Ladybug/Renderer/RendererInterface.php',
  'ladybug\\renderer\\htmlrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/HtmlRenderer.php',
  'ladybug\\renderer\\abstracttemplatingrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/AbstractTemplatingRenderer.php',
  'ladybug\\renderer\\textrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/TextRenderer.php',
  'ladybug\\renderer\\abstractserializingrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/AbstractSerializingRenderer.php',
  'ladybug\\renderer\\xmlrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/XmlRenderer.php',
  'ladybug\\renderer\\jsonrenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/JsonRenderer.php',
  'ladybug\\renderer\\consolerenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/ConsoleRenderer.php',
  'ladybug\\renderer\\phprenderer' => '/../raulfraile/ladybug/src/Ladybug/Renderer/PhpRenderer.php',
  'ladybug\\renderer\\rendererresolver' => '/../raulfraile/ladybug/src/Ladybug/Renderer/RendererResolver.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'ladybug\\renderer\\twig\\extension\\consoleextension' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\twig\\extension\\baseextension',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\twig\\extension\\textextension' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\twig\\extension\\baseextension',
      1 => 'class_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\twig\\extension\\consoleextension',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\abstractrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
  ),
  'ladybug\\renderer\\htmlrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\renderer\\abstracttemplatingrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\abstracttemplatingrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\textrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\renderer\\abstracttemplatingrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\abstractserializingrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\xmlrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\renderer\\abstractserializingrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\jsonrenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\renderer\\abstractserializingrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\consolerenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
    2 => 
    array (
      0 => 'ladybug\\renderer\\abstracttemplatingrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\phprenderer' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'ladybug\\renderer\\abstractrenderer',
      1 => 'class_exists',
    ),
  ),
  'ladybug\\renderer\\rendererresolver' => 
  array (
    0 => 
    array (
      0 => 'ladybug\\renderer\\rendererresolverinterface',
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
