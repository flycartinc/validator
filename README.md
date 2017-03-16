# Flycart Validator for Herbert

Add the bellow piece of code in **plugin.php** to set $app in Facade

`if ( is_plugin_active(plugin_basename( __FILE__ )) ) {`
 `   $plugin = new \Herbert\Framework\Base\Plugin(plugin_dir_path( __FILE__ ));`
 `   $herbert->registerPlugin($plugin);`
 `   $app = $plugin->getContainer();`
 `   FlycartValidator\Facades\Facade::setFacadeApplication($app);`
`}`


Add the bellow piece of code in **herbert.config.php** to load FlycartHook service provider
`'providers' => array(`
 `       FlycartValidator\ValidationServiceProvider::class`
 `       )`
 
 # Flycart Validator Example 
 
**Validate single data**
 
$data = `\FlycartValidator\Facades\Validator::single($data, ['num', 'min:3'])`

**Validate multiple data**
 
$data = `\FlycartValidator\Facades\Validator::multiple($data, [
    'field-name' => ['alnum', 'min:5'],
    'email'      => ['email'],
    'age'        => ['num']
]);`

returns empty value for the key failed else the value as send.
