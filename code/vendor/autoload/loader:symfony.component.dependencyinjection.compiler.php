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
  'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/CompilerPassInterface.php',
  'symfony\\component\\dependencyinjection\\compiler\\analyzeservicereferencespass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/AnalyzeServiceReferencesPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\repeatablepassinterface' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/RepeatablePassInterface.php',
  'symfony\\component\\dependencyinjection\\compiler\\repeatedpass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/RepeatedPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\removeprivatealiasespass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/RemovePrivateAliasesPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\checkexceptiononinvalidreferencebehaviorpass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/CheckExceptionOnInvalidReferenceBehaviorPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\resolvedefinitiontemplatespass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ResolveDefinitionTemplatesPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\resolveinvalidreferencespass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ResolveInvalidReferencesPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\replacealiasbyactualdefinitionpass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ReplaceAliasByActualDefinitionPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\inlineservicedefinitionspass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/InlineServiceDefinitionsPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\servicereferencegraph' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ServiceReferenceGraph.php',
  'symfony\\component\\dependencyinjection\\compiler\\passconfig' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/PassConfig.php',
  'symfony\\component\\dependencyinjection\\compiler\\checkdefinitionvaliditypass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/CheckDefinitionValidityPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\resolveparameterplaceholderspass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ResolveParameterPlaceHoldersPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\mergeextensionconfigurationpass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/MergeExtensionConfigurationPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\servicereferencegraphedge' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ServiceReferenceGraphEdge.php',
  'symfony\\component\\dependencyinjection\\compiler\\checkreferencevaliditypass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/CheckReferenceValidityPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\decoratorservicepass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/DecoratorServicePass.php',
  'symfony\\component\\dependencyinjection\\compiler\\removeabstractdefinitionspass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/RemoveAbstractDefinitionsPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\servicereferencegraphnode' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ServiceReferenceGraphNode.php',
  'symfony\\component\\dependencyinjection\\compiler\\compiler' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/Compiler.php',
  'symfony\\component\\dependencyinjection\\compiler\\checkcircularreferencespass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/CheckCircularReferencesPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\removeunuseddefinitionspass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/RemoveUnusedDefinitionsPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\resolvereferencestoaliasespass' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/ResolveReferencesToAliasesPass.php',
  'symfony\\component\\dependencyinjection\\compiler\\loggingformatter' => '/../symfony/dependency-injection/Symfony/Component/DependencyInjection/Compiler/LoggingFormatter.php',
);
    // }}}

    // deps {{{
    static $deps    = array (
  'symfony\\component\\dependencyinjection\\compiler\\analyzeservicereferencespass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\repeatablepassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\repeatablepassinterface' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\repeatedpass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\removeprivatealiasespass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\checkexceptiononinvalidreferencebehaviorpass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\resolvedefinitiontemplatespass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\resolveinvalidreferencespass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\replacealiasbyactualdefinitionpass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\inlineservicedefinitionspass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\repeatablepassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\checkdefinitionvaliditypass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\resolveparameterplaceholderspass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\mergeextensionconfigurationpass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\checkreferencevaliditypass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\decoratorservicepass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\removeabstractdefinitionspass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\checkcircularreferencespass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\removeunuseddefinitionspass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
      1 => 'interface_exists',
    ),
    1 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\repeatablepassinterface',
      1 => 'interface_exists',
    ),
  ),
  'symfony\\component\\dependencyinjection\\compiler\\resolvereferencestoaliasespass' => 
  array (
    0 => 
    array (
      0 => 'symfony\\component\\dependencyinjection\\compiler\\compilerpassinterface',
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