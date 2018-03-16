<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'cornford/googlmapper' => 
  array (
    'providers' => 
    array (
      0 => 'Cornford\\Googlmapper\\MapperServiceProvider',
    ),
    'aliases' => 
    array (
      'Mapper' => 'Cornford\\Googlmapper\\Facades\\MapperFacade',
    ),
  ),
);