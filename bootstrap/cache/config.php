<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:6KOf5Uk3ih8ZMj8z8UMnV9HShjVQbcwClZ10djmD4cQ=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'InfyOm\\Generator\\InfyOmGeneratorServiceProvider',
      23 => 'InfyOm\\AdminLTETemplates\\AdminLTETemplatesServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
        'hash' => false,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/Users/mac/Web Development/Web/dev/escrow/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'database' => 
  array (
    'default' => 'pgsql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'escrow',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'escrow',
        'username' => 'postgres',
        'password' => 'postgres',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '5432',
        'database' => 'escrow',
        'username' => 'postgres',
        'password' => 'postgres',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => 'localhost',
        'port' => '1433',
        'database' => 'escrow',
        'username' => 'postgres',
        'password' => 'postgres',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/Users/mac/Web Development/Web/dev/escrow/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/Users/mac/Web Development/Web/dev/escrow/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'infyom' => 
  array (
    'laravel_generator' => 
    array (
      'path' => 
      array (
        'migration' => '/Users/mac/Web Development/Web/dev/escrow/database/migrations/',
        'model' => '/Users/mac/Web Development/Web/dev/escrow/app/Models/',
        'datatables' => '/Users/mac/Web Development/Web/dev/escrow/app/DataTables/',
        'repository' => '/Users/mac/Web Development/Web/dev/escrow/app/Repositories/',
        'routes' => '/Users/mac/Web Development/Web/dev/escrow/routes/web.php',
        'api_routes' => '/Users/mac/Web Development/Web/dev/escrow/routes/api.php',
        'request' => '/Users/mac/Web Development/Web/dev/escrow/app/Http/Requests/',
        'api_request' => '/Users/mac/Web Development/Web/dev/escrow/app/Http/Requests/',
        'controller' => '/Users/mac/Web Development/Web/dev/escrow/app/Http/Controllers/',
        'api_controller' => '/Users/mac/Web Development/Web/dev/escrow/app/Http/Controllers/',
        'test_trait' => '/Users/mac/Web Development/Web/dev/escrow/tests/Traits/',
        'repository_test' => '/Users/mac/Web Development/Web/dev/escrow/tests/Repositories/',
        'api_test' => '/Users/mac/Web Development/Web/dev/escrow/tests/APIs/',
        'tests' => '/Users/mac/Web Development/Web/dev/escrow/tests/',
        'views' => '/Users/mac/Web Development/Web/dev/escrow/resources/views/',
        'schema_files' => '/Users/mac/Web Development/Web/dev/escrow/resources/model_schemas/',
        'templates_dir' => '/Users/mac/Web Development/Web/dev/escrow/resources/infyom/infyom-generator-templates/',
        'modelJs' => '/Users/mac/Web Development/Web/dev/escrow/resources/assets/js/models/',
      ),
      'namespace' => 
      array (
        'model' => 'App\\Models',
        'datatables' => 'App\\DataTables',
        'repository' => 'App\\Repositories',
        'controller' => 'App\\Http\\Controllers',
        'api_controller' => 'App\\Http\\Controllers',
        'request' => 'App\\Http\\Requests',
        'api_request' => 'App\\Http\\Requests',
        'test_trait' => 'Tests\\Traits',
        'repository_test' => 'Tests\\Repositories',
        'api_test' => 'Tests\\APIs',
        'tests' => 'Tests',
      ),
      'templates' => 'adminlte-templates',
      'model_extend_class' => 'Eloquent',
      'api_prefix' => 'api',
      'api_version' => 'v1',
      'options' => 
      array (
        'softDelete' => true,
        'tables_searchable_default' => true,
        'excluded_fields' => 
        array (
          0 => 'id',
        ),
      ),
      'prefixes' => 
      array (
        'route' => '',
        'path' => '',
        'view' => '',
        'public' => '',
      ),
      'add_on' => 
      array (
        'swagger' => true,
        'tests' => true,
        'datatables' => false,
        'menu' => 
        array (
          'enabled' => true,
          'menu_file' => 'layouts/menu.blade.php',
        ),
      ),
      'timestamps' => 
      array (
        'enabled' => true,
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'deleted_at' => 'deleted_at',
      ),
      'ignore_model_prefix' => false,
      'from_table' => 
      array (
        'doctrine_mappings' => 
        array (
        ),
      ),
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/Users/mac/Web Development/Web/dev/escrow/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/Users/mac/Web Development/Web/dev/escrow/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mailtrap.io',
    'port' => '2525',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => NULL,
    'username' => NULL,
    'password' => NULL,
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/Users/mac/Web Development/Web/dev/escrow/resources/views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'pgsql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/Users/mac/Web Development/Web/dev/escrow/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/Users/mac/Web Development/Web/dev/escrow/resources/views',
    ),
    'compiled' => '/Users/mac/Web Development/Web/dev/escrow/storage/framework/views',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'passport' => 
  array (
    'private_key' => NULL,
    'public_key' => NULL,
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'repository' => 
  array (
    'pagination' => 
    array (
      'limit' => 15,
    ),
    'fractal' => 
    array (
      'params' => 
      array (
        'include' => 'include',
      ),
      'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
    ),
    'cache' => 
    array (
      'enabled' => false,
      'minutes' => 30,
      'repository' => 'cache',
      'clean' => 
      array (
        'enabled' => true,
        'on' => 
        array (
          'create' => true,
          'update' => true,
          'delete' => true,
        ),
      ),
      'params' => 
      array (
        'skipCache' => 'skipCache',
      ),
      'allowed' => 
      array (
        'only' => NULL,
        'except' => NULL,
      ),
    ),
    'criteria' => 
    array (
      'acceptedConditions' => 
      array (
        0 => '=',
        1 => 'like',
      ),
      'params' => 
      array (
        'search' => 'search',
        'searchFields' => 'searchFields',
        'filter' => 'filter',
        'orderBy' => 'orderBy',
        'sortedBy' => 'sortedBy',
        'with' => 'with',
        'searchJoin' => 'searchJoin',
      ),
    ),
    'generator' => 
    array (
      'basePath' => '/Users/mac/Web Development/Web/dev/escrow/app',
      'rootNamespace' => 'App\\',
      'stubsOverridePath' => '/Users/mac/Web Development/Web/dev/escrow/app',
      'paths' => 
      array (
        'models' => 'Entities',
        'repositories' => 'Repositories',
        'interfaces' => 'Repositories',
        'transformers' => 'Transformers',
        'presenters' => 'Presenters',
        'validators' => 'Validators',
        'controllers' => 'Http/Controllers',
        'provider' => 'RepositoryServiceProvider',
        'criteria' => 'Criteria',
      ),
    ),
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
