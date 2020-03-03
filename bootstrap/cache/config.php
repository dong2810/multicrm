<?php return array (
  'activitylog' => 
  array (
    'enabled' => true,
    'delete_records_older_than_days' => 365,
    'default_log_name' => 'default',
    'default_auth_driver' => NULL,
    'subject_returns_soft_deleted_models' => false,
    'activity_model' => 'Spatie\\Activitylog\\Models\\Activity',
    'table_name' => 'activity_log',
  ),
  'app' => 
  array (
    'name' => '^Multicrm - Multi-Company CRM',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost:8000',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:xqoEjBXIK98jJ/385ZWsUADsjKECqvltUuM6l0j64V8=',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'log_level' => 'debug',
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
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\EventServiceProvider',
      25 => 'App\\Providers\\RouteServiceProvider',
      26 => 'Eusonlito\\LaravelPacker\\PackerServiceProvider',
      27 => 'Krucas\\Settings\\Providers\\SettingsServiceProvider',
      28 => 'Yajra\\DataTables\\DataTablesServiceProvider',
      29 => 'Collective\\Html\\HtmlServiceProvider',
      30 => 'Vinkla\\Hashids\\HashidsServiceProvider',
      31 => 'Proengsoft\\JsValidation\\JsValidationServiceProvider',
      32 => 'Kris\\LaravelFormBuilder\\FormBuilderServiceProvider',
      33 => 'App\\Providers\\MacroServiceProvider',
      34 => 'Laravolt\\Avatar\\ServiceProvider',
      35 => 'Cog\\Laravel\\Ownership\\Providers\\OwnershipServiceProvider',
      36 => 'Arrilot\\Widgets\\ServiceProvider',
      37 => 'Bnb\\Laravel\\Attachments\\AttachmentsServiceProvider',
      38 => 'Laracasts\\Utilities\\JavaScript\\JavaScriptServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
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
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Packer' => 'Eusonlito\\LaravelPacker\\Facade',
      'Settings' => 'Krucas\\Settings\\Facades\\Settings',
      'Datatables' => 'Yajra\\DataTables\\Facades\\DataTables',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Menu' => 'Spatie\\Menu\\Laravel\\Facades\\Menu',
      'Hashids' => 'Vinkla\\Hashids\\Facades\\Hashids',
      'JsValidator' => 'Proengsoft\\JsValidation\\Facades\\JsValidatorFacade',
      'FormBuilder' => 'Kris\\LaravelFormBuilder\\Facades\\FormBuilder',
      'Avatar' => 'Laravolt\\Avatar\\Facade',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Widget' => 'Arrilot\\Widgets\\Facade',
      'AsyncWidget' => 'Arrilot\\Widgets\\AsyncFacade',
      'JavaScript' => 'Laracasts\\Utilities\\JavaScript\\JavaScriptFacade',
    ),
  ),
  'attachments' => 
  array (
    'routes' => 
    array (
      'publish' => true,
      'prefix' => 'attachments',
      'middleware' => 'web',
      'pattern' => '/{id}/{name}',
      'shared_pattern' => '/shared/{token}',
      'dropzone' => 
      array (
        'upload_pattern' => '/dropzone',
        'delete_pattern' => '/dropzone/{id}',
      ),
    ),
    'attachment_model' => 'Bnb\\Laravel\\Attachments\\Attachment',
    'uuid_provider' => 'uuid_v4_base36',
    'behaviors' => 
    array (
      'cascade_delete' => true,
      'dropzone_check_csrf' => true,
    ),
    'attributes' => 
    array (
      0 => 'title',
      1 => 'description',
      2 => 'key',
      3 => 'disk',
      4 => 'group',
      5 => 'company_id',
    ),
    'dropzone_attributes' => 
    array (
      0 => 'uuid',
      1 => 'url',
      2 => 'filename',
      3 => 'filetype',
      4 => 'filesize',
      5 => 'title',
      6 => 'description',
      7 => 'key',
      8 => 'group',
    ),
    'storage_directory' => 
    array (
      'prefix' => 'attachments',
    ),
    'database' => 
    array (
      'connection' => NULL,
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
        'driver' => 'jwt',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\Platform\\User\\Entities\\User',
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
  'bap' => 
  array (
    'version' => '3.1.5',
    'allow_registration' => true,
    'file_upload_types' => 'jpe?g|png|pdf|zip|rar|doc?x',
    'file_upload_laravel_validation' => 'jpg,jpeg,png,pdf,zip,rar,doc,docx',
    'allowe_file_types_message' => 'Jpg, Jpeg, Png, Pdf, Zip, Rar, Doc, Docx',
    'validate_fk_on_soft_delete' => true,
    'xss_protection_available_html_tags' => '<p><b><strike><blockquote><h1><h2><h3><h4><sup><sub><br><strong><i>',
    'google_ga' => '',
    'global_search' => false,
    'install_demo_data' => false,
    'demo' => false,
    'demo_login' => 'admin@laravel-bap.com',
    'demo_pass' => 'admin',
    'demo_company_1' => 'norman@laravel-bap.com',
    'demo_company_pass_1' => 'admin',
    'demo_company_2' => 'ada@laravel-bap.com',
    'demo_company_pass_2' => 'admin',
    'clean_platform' => false,
    'comment_notification_enabled' => true,
    'attachment_notification_enabled' => true,
    'record_assigned_notification_enabled' => true,
    'gravatar_resize_width' => 150,
    'gravatar_resize_height' => 150,
    'gravatar_display_size' => 80,
    'gravatar_seo' => true,
    'gravatar_seo_contact_name' => true,
    'gravatar_seo_contact_keywords' => true,
    'gravatar_default_preview' => 'wavatar',
    'gravatar_local_cache' => true,
    'tags_allow_add_new' => true,
    'preloader_type' => 'none',
    'defer_datatable' => '0',
    'disableCountTo' => true,
    'login_logo' => '/bap/logo/multicrm_logo_2.png',
    'register_img' => '/bg/login/register.png',
    'email_test' => '',
    'force_ssl' => false,
    'auth_bg' => '/bg/login/573249.jpg',
    'favicon' => 'bap/images/favicon.png',
    'vectors' => true,
    'GOOGLE_RECAPTCHA_KEY' => '',
    'GOOGLE_RECAPTCHA_SECRET' => '',
    'stripe_public_key' => '',
    'stripe_secret_key' => '',
    'show_register_gif' => true,
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
          'cluster' => '',
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
        'path' => 'D:\\project\\multicrm\\multicrm\\storage\\framework/cache/data',
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
        'connection' => 'default',
      ),
    ),
    'prefix' => 'multicrm_multi_company_crm_cache',
  ),
  'charts' => 
  array (
    'default_library' => 'Chartjs',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'D:\\project\\multicrm\\multicrm\\database\\multicrm',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'multicrm',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => 'InnoDB',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'multicrm',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'multicrm',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'datatables' => 
  array (
    'search' => 
    array (
      'smart' => true,
      'multi_term' => true,
      'case_insensitive' => true,
      'use_wildcards' => false,
    ),
    'index_column' => 'DT_Row_Index',
    'engines' => 
    array (
      'eloquent' => 'Yajra\\DataTables\\EloquentDataTable',
      'query' => 'Yajra\\DataTables\\QueryDataTable',
      'collection' => 'Yajra\\DataTables\\CollectionDataTable',
    ),
    'builders' => 
    array (
      'Illuminate\\Database\\Eloquent\\Relations\\Relation' => 'eloquent',
      'Illuminate\\Database\\Eloquent\\Builder' => 'eloquent',
      'Illuminate\\Database\\Query\\Builder' => 'query',
      'Illuminate\\Support\\Collection' => 'collection',
    ),
    'nulls_last_sql' => '%s %s NULLS LAST',
    'error' => NULL,
    'columns' => 
    array (
      'excess' => 
      array (
        0 => 'rn',
        1 => 'row_num',
      ),
      'escape' => '*',
      'raw' => 
      array (
        0 => 'action',
      ),
      'blacklist' => 
      array (
        0 => 'password',
        1 => 'remember_token',
      ),
      'whitelist' => '*',
    ),
    'json' => 
    array (
      'header' => 
      array (
      ),
      'options' => 0,
    ),
    'max_display_text_size' => 30,
  ),
  'datatables-buttons' => 
  array (
    'namespace' => 
    array (
      'base' => 'DataTables',
      'model' => '',
    ),
    'pdf_generator' => 'snappy',
    'snappy' => 
    array (
      'options' => 
      array (
        'no-outline' => true,
        'margin-left' => '0',
        'margin-right' => '0',
        'margin-top' => '10mm',
        'margin-bottom' => '10mm',
      ),
      'orientation' => 'landscape',
    ),
    'parameters' => 
    array (
      'order' => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 'desc',
        ),
      ),
      'buttons' => 
      array (
        0 => 'create',
        1 => 'export',
        2 => 'print',
        3 => 'reset',
        4 => 'reload',
      ),
    ),
    'generator' => 
    array (
      'columns' => 'id,add your columns,created_at,updated_at',
      'buttons' => 'create,export,print,reset,reload',
      'dom' => 'Bfrtip',
    ),
  ),
  'datatables-fractal' => 
  array (
    'includes' => 'include',
    'serializer' => 'League\\Fractal\\Serializer\\DataArraySerializer',
  ),
  'datatables-html' => 
  array (
    'table' => 
    array (
      'class' => 'table',
      'id' => 'dataTableBuilder',
    ),
    'callback' => 
    array (
      0 => '$',
      1 => '$.',
      2 => 'function',
    ),
    'script' => 'datatables::script',
    'editor' => 'datatables::editor',
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'except' => 
    array (
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => 'D:\\project\\multicrm\\multicrm\\storage\\debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => true,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  'excel' => 
  array (
    'exports' => 
    array (
      'chunk_size' => 1000,
      'temp_path' => 'C:\\Users\\Admin\\AppData\\Local\\Temp',
      'pre_calculate_formulas' => false,
      'csv' => 
      array (
        'delimiter' => ';',
        'enclosure' => '"',
        'line_ending' => '
',
        'use_bom' => false,
        'include_separator_line' => false,
        'excel_compatibility' => false,
      ),
    ),
    'imports' => 
    array (
      'read_only' => true,
      'heading_row' => 
      array (
        'formatter' => 'slug',
      ),
    ),
    'extension_detector' => 
    array (
      'xlsx' => 'Xlsx',
      'xlsm' => 'Xlsx',
      'xltx' => 'Xlsx',
      'xltm' => 'Xlsx',
      'xls' => 'Xls',
      'xlt' => 'Xls',
      'ods' => 'Ods',
      'ots' => 'Ods',
      'slk' => 'Slk',
      'xml' => 'Xml',
      'gnumeric' => 'Gnumeric',
      'htm' => 'Html',
      'html' => 'Html',
      'csv' => 'Csv',
      'txt' => 'Csv',
      'tsv' => 'Csv',
      'pdf' => 'Dompdf',
    ),
    'value_binder' => 
    array (
      'default' => 'Maatwebsite\\Excel\\DefaultValueBinder',
    ),
    'transactions' => 
    array (
      'handler' => 'db',
    ),
    'temporary_files' => 
    array (
      'local_path' => 'C:\\Users\\Admin\\AppData\\Local\\Temp',
      'remote_disk' => NULL,
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
        'root' => 'D:\\project\\multicrm\\multicrm\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'D:\\project\\multicrm\\multicrm\\storage\\app/public',
        'url' => 'http://localhost:8000/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
      ),
    ),
  ),
  'fullcalendar' => 
  array (
    'include_scripts' => false,
    'enable_gcal' => false,
  ),
  'hashids' => 
  array (
    'default' => 'main',
    'connections' => 
    array (
      'main' => 
      array (
        'salt' => '3kopkop4kk4odkk',
        'length' => '4',
      ),
      'alternative' => 
      array (
        'salt' => 'your-salt-string',
        'length' => 'your-length-integer',
      ),
    ),
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper',
    'format' => 'php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => true,
    'write_model_magic_where' => true,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => 'D:\\project\\multicrm\\multicrm/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
      1 => 'Modules',
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
      'Log' => 
      array (
        'debug' => 'Monolog\\Logger::addDebug',
        'info' => 'Monolog\\Logger::addInfo',
        'notice' => 'Monolog\\Logger::addNotice',
        'warning' => 'Monolog\\Logger::addWarning',
        'error' => 'Monolog\\Logger::addError',
        'critical' => 'Monolog\\Logger::addCritical',
        'alert' => 'Monolog\\Logger::addAlert',
        'emergency' => 'Monolog\\Logger::addEmergency',
      ),
    ),
    'interfaces' => 
    array (
    ),
    'custom_db_types' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
    'include_class_docblocks' => false,
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'installer' => 
  array (
    'core' => 
    array (
      'minPhpVersion' => '7.1.0',
    ),
    'final' => 
    array (
      'key' => true,
      'publish' => false,
    ),
    'requirements' => 
    array (
      'php' => 
      array (
        0 => 'openssl',
        1 => 'pdo',
        2 => 'mbstring',
        3 => 'tokenizer',
        4 => 'JSON',
        5 => 'cURL',
        6 => 'DOM',
        7 => 'bcmath',
        8 => 'gd',
      ),
      'apache' => 
      array (
        0 => 'mod_rewrite',
      ),
    ),
    'permissions' => 
    array (
      'storage/framework/' => '775',
      'storage/logs/' => '775',
      'bootstrap/cache/' => '775',
    ),
    'environment' => 
    array (
      'form' => 
      array (
        'rules' => 
        array (
          'app_name' => 'required|string|max:50',
          'environment' => 'required|string|max:50',
          'environment_custom' => 'required_if:environment,other|max:50',
          'app_debug' => 'required',
          'app_log_level' => 'required|string|max:50',
          'app_url' => 'required|url',
          'database_connection' => 'required|string|max:50',
          'database_hostname' => 'required|string|max:50',
          'database_port' => 'required|numeric',
          'database_name' => 'required|string|max:50',
          'database_username' => 'required|string|max:50',
          'database_password' => 'required|string|max:50',
          'broadcast_driver' => 'required|string|max:50',
          'cache_driver' => 'required|string|max:50',
          'session_driver' => 'required|string|max:50',
          'queue_driver' => 'required|string|max:50',
          'redis_hostname' => 'string|max:50|nullable',
          'redis_password' => 'string|max:50|nullable',
          'redis_port' => 'numeric|nullable',
          'mail_driver' => 'string|nullable|max:50',
          'mail_host' => 'string|nullable|max:50',
          'mail_port' => 'string|nullable|max:50',
          'mail_username' => 'string|nullable|max:50',
          'mail_password' => 'string|nullable|max:50',
          'mail_encryption' => 'string|nullable|max:50',
          'pusher_app_id' => 'max:50|nullable',
          'pusher_app_key' => 'max:50|nullable',
          'pusher_app_secret' => 'max:50|nullable',
        ),
      ),
    ),
    'installed' => 
    array (
      'redirectOptions' => 
      array (
        'route' => 
        array (
          'name' => 'welcome',
          'data' => 
          array (
          ),
        ),
        'abort' => 
        array (
          'type' => '404',
        ),
        'dump' => 
        array (
          'data' => 'Dumping a not found message.',
        ),
      ),
    ),
    'installedAlreadyAction' => '',
    'updaterEnabled' => 'true',
  ),
  'javascript' => 
  array (
    'bind_js_vars_to_this_view' => 'partial.bottom_js',
    'js_namespace' => 'BAP',
  ),
  'jsvalidation' => 
  array (
    'view' => 'jsvalidation::bootstrap',
    'form_selector' => 'form',
    'focus_on_error' => true,
    'duration_animate' => 1000,
    'disable_remote_validation' => false,
    'remote_validation_field' => '_jsvalidation',
  ),
  'jwt' => 
  array (
    'secret' => '',
    'keys' => 
    array (
      'public' => NULL,
      'private' => NULL,
      'passphrase' => NULL,
    ),
    'ttl' => 1440,
    'refresh_ttl' => 20160,
    'algo' => 'HS256',
    'required_claims' => 
    array (
      0 => 'iss',
      1 => 'iat',
      2 => 'exp',
      3 => 'nbf',
      4 => 'sub',
      5 => 'jti',
    ),
    'persistent_claims' => 
    array (
    ),
    'lock_subject' => true,
    'leeway' => 0,
    'blacklist_enabled' => true,
    'blacklist_grace_period' => 0,
    'decrypt_cookies' => false,
    'providers' => 
    array (
      'user' => 'Tymon\\JWTAuth\\Providers\\User\\EloquentUserAdapter',
      'jwt' => 'Tymon\\JWTAuth\\Providers\\JWT\\Namshi',
      'auth' => 'Tymon\\JWTAuth\\Providers\\Auth\\Illuminate',
      'storage' => 'Tymon\\JWTAuth\\Providers\\Storage\\Illuminate',
    ),
    'user' => 'Modules\\Platform\\User\\Entities\\User',
    'identifier' => 'id',
  ),
  'landlord' => 
  array (
    'default_tenant_columns' => 
    array (
      0 => 'company_id',
    ),
  ),
  'laravel-database-emails' => 
  array (
    'attempts' => 3,
    'encrypt' => false,
    'testing' => 
    array (
      'email' => 'hello@laravel-bap.com',
      'enabled' => false,
    ),
    'limit' => 20,
  ),
  'laravel-form-builder' => 
  array (
    'defaults' => 
    array (
      'wrapper_class' => 'form-group form-float',
      'wrapper_error_class' => 'has-error',
      'label_class' => 'form-label',
      'field_class' => 'form-control',
      'help_block_class' => 'help-block',
      'error_class' => 'text-danger',
      'required_class' => 'required',
      'checkbox' => 
      array (
        'wrapper_class' => 'form group form-float checkbox-wrapper',
        'field_class' => 'filled-in',
      ),
      'file' => 
      array (
        'wrapper_class' => 'form-group form-float form-file',
        'label_class' => 'form-label',
        'field_class' => 'form-control',
      ),
      'dateType' => 
      array (
        'wrapper_class' => 'form-group form-float',
        'label_class' => 'form-label',
        'field_class' => 'form-control datepicker',
      ),
      'dateTimeType' => 
      array (
        'wrapper_class' => 'form-group form-float',
        'label_class' => 'form-label',
        'field_class' => 'form-control datetimepicker',
      ),
    ),
    'form' => 'laravel-form-builder::form',
    'text' => 'laravel-form-builder::text',
    'textarea' => 'laravel-form-builder::textarea',
    'button' => 'laravel-form-builder::button',
    'buttongroup' => 'laravel-form-builder::buttongroup',
    'radio' => 'laravel-form-builder::radio',
    'checkbox' => 'laravel-form-builder::checkbox',
    'select' => 'laravel-form-builder::select',
    'choice' => 'laravel-form-builder::choice',
    'repeated' => 'laravel-form-builder::repeated',
    'child_form' => 'laravel-form-builder::child_form',
    'collection' => 'laravel-form-builder::collection',
    'static' => 'laravel-form-builder::static',
    'template_prefix' => '',
    'default_namespace' => '',
    'custom_fields' => 
    array (
      'switch' => 'Modules\\Platform\\Core\\Fields\\SwitchType',
      'dateType' => 'Modules\\Platform\\Core\\Fields\\DateType',
      'dateTimeType' => 'Modules\\Platform\\Core\\Fields\\DateTimeType',
      'manyToOne' => 'Modules\\Platform\\Core\\Fields\\ManyToOneType',
      'simpleColorPicker' => 'Modules\\Platform\\Core\\Fields\\SimpleColorPicker',
      'tags' => 'Modules\\Platform\\Core\\Fields\\TagsType',
      'wyswig' => 'Modules\\Platform\\Core\\Fields\\WyswigType',
    ),
  ),
  'laravel-widgets' => 
  array (
    'use_jquery_for_ajax_calls' => false,
    'route_middleware' => 
    array (
    ),
    'widget_stub' => 'vendor/arrilot/laravel-widgets/src/Console/stubs/widget.stub',
    'widget_plain_stub' => 'vendor/arrilot/laravel-widgets/src/Console/stubs/widget_plain.stub',
  ),
  'laravel_google_translate' => 
  array (
    'google_translate_api_key' => NULL,
    'trans_functions' => 
    array (
      0 => 'trans',
      1 => 'trans_choice',
      2 => 'Lang::get',
      3 => 'Lang::choice',
      4 => 'Lang::trans',
      5 => 'Lang::transChoice',
      6 => '@lang',
      7 => '@choice',
      8 => '__',
      9 => '$trans.get',
      10 => '$t',
    ),
  ),
  'laravolt' => 
  array (
    'avatar' => 
    array (
      'driver' => 'gd',
      'generator' => 'Laravolt\\Avatar\\Generator\\DefaultGenerator',
      'ascii' => false,
      'shape' => 'circle',
      'width' => 100,
      'height' => 100,
      'chars' => 2,
      'fontSize' => 48,
      'uppercase' => false,
      'fonts' => 
      array (
        0 => 'D:\\project\\multicrm\\multicrm\\config\\laravolt/../fonts/OpenSans-Bold.ttf',
        1 => 'D:\\project\\multicrm\\multicrm\\config\\laravolt/../fonts/rockwell.ttf',
      ),
      'foregrounds' => 
      array (
        0 => '#FFFFFF',
      ),
      'backgrounds' => 
      array (
        0 => '#f44336',
        1 => '#E91E63',
        2 => '#9C27B0',
        3 => '#673AB7',
        4 => '#3F51B5',
        5 => '#2196F3',
        6 => '#03A9F4',
        7 => '#00BCD4',
        8 => '#009688',
        9 => '#4CAF50',
        10 => '#8BC34A',
        11 => '#CDDC39',
        12 => '#FFC107',
        13 => '#FF9800',
        14 => '#FF5722',
      ),
      'border' => 
      array (
        'size' => 1,
        'color' => 'foreground',
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
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'D:\\project\\multicrm\\multicrm\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'D:\\project\\multicrm\\multicrm\\storage\\logs/laravel.log',
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
      'address' => '',
      'name' => '^multicrm',
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
        0 => 'D:\\project\\multicrm\\multicrm\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'D:\\project\\multicrm\\multicrm/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'start' => 'start.php',
        'routes' => 'Http/routes.php',
        'views/index' => 'Resources/views/index.blade.php',
        'views/master' => 'Resources/views/layouts/master.blade.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
      ),
      'replacements' => 
      array (
        'start' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'ROUTES_LOCATION',
        ),
        'routes' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'views/index' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'views/master' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
        ),
      ),
    ),
    'paths' => 
    array (
      'modules' => 'D:\\project\\multicrm\\multicrm\\Modules',
      'assets' => 'D:\\project\\multicrm\\multicrm\\public\\modules',
      'migration' => 'D:\\project\\multicrm\\multicrm\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => true,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => true,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Entities',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => true,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => true,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => true,
        ),
        'test' => 
        array (
          'path' => 'Tests',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => false,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => false,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'scan' => 
    array (
      'enabled' => true,
      'paths' => 
      array (
        0 => 'D:\\project\\multicrm\\multicrm\\vendor/*/*',
        1 => 'D:\\project\\multicrm\\multicrm\\Modules/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'Laravel BAP',
      'author' => 
      array (
        'name' => 'Laravel BAP - Business Application Platform',
        'email' => 'code@laravel-bap.com',
      ),
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => false,
      'files' => 'register',
    ),
  ),
  'packer' => 
  array (
    'environment' => '',
    'ignore_environments' => 
    array (
      0 => 'local',
    ),
    'public_path' => 'D:\\project\\multicrm\\multicrm\\public',
    'asset' => 'http://localhost:8000',
    'cache_folder' => '/storage/cache/',
    'check_timestamps' => true,
    'css_minify' => false,
    'js_minify' => false,
    'images_fake' => true,
    'quality' => 85,
  ),
  'paypal' => 
  array (
    'mode' => '',
    'sandbox' => 
    array (
      'username' => '',
      'password' => '',
      'secret' => '',
      'certificate' => '',
      'app_id' => 'APP-80W284485P519543T',
    ),
    'live' => 
    array (
      'username' => '',
      'password' => '',
      'secret' => '',
      'certificate' => '',
      'app_id' => '',
    ),
    'payment_action' => 'Sale',
    'currency' => 'USD',
    'billing_type' => 'MerchantInitiatedBilling',
    'notify_url' => '',
    'locale' => '',
    'validate_ssl' => false,
  ),
  'permission' => 
  array (
    'models' => 
    array (
      'permission' => 'Spatie\\Permission\\Models\\Permission',
      'role' => 'Modules\\Platform\\User\\Entities\\Role',
    ),
    'table_names' => 
    array (
      'roles' => 'roles',
      'permissions' => 'permissions',
      'model_has_permissions' => 'model_has_permissions',
      'model_has_roles' => 'model_has_roles',
      'role_has_permissions' => 'role_has_permissions',
    ),
    'column_names' => 
    array (
      'model_morph_key' => 'model_id',
    ),
    'display_permission_in_exception' => false,
    'cache' => 
    array (
      'expiration_time' => 
      DateInterval::__set_state(array(
         'y' => 0,
         'm' => 0,
         'd' => 0,
         'h' => 24,
         'i' => 0,
         's' => 0,
         'f' => 0.0,
         'weekday' => 0,
         'weekday_behavior' => 0,
         'first_last_day_of' => 0,
         'invert' => 0,
         'days' => false,
         'special_type' => 0,
         'special_amount' => 0,
         'have_weekday_relative' => 0,
         'have_special_relative' => 0,
      )),
      'key' => 'spatie.permission.cache',
      'model_key' => 'name',
      'store' => 'default',
    ),
    'cache_expiration_time' => 1440,
    'log_registration_exception' => true,
  ),
  'purifier' => 
  array (
    'encoding' => 'UTF-8',
    'finalize' => true,
    'cachePath' => 'D:\\project\\multicrm\\multicrm\\storage\\app/purifier',
    'cacheFileMode' => 493,
    'settings' => 
    array (
      'default' => 
      array (
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'div,b,strong,i,em,u,a[href|title],ul,ol,li,p[style],br,span[style],img[width|height|alt|src]',
        'CSS.AllowedProperties' => 'font,font-size,font-weight,font-style,font-family,text-decoration,padding-left,color,background-color,text-align',
        'AutoFormat.AutoParagraph' => true,
        'AutoFormat.RemoveEmpty' => true,
      ),
      'test' => 
      array (
        'Attr.EnableID' => 'true',
      ),
      'youtube' => 
      array (
        'HTML.SafeIframe' => 'true',
        'URI.SafeIframeRegexp' => '%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%',
      ),
      'custom_definition' => 
      array (
        'id' => 'html5-definitions',
        'rev' => 1,
        'debug' => false,
        'elements' => 
        array (
          0 => 
          array (
            0 => 'section',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          1 => 
          array (
            0 => 'nav',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          2 => 
          array (
            0 => 'article',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          3 => 
          array (
            0 => 'aside',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          4 => 
          array (
            0 => 'header',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          5 => 
          array (
            0 => 'footer',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          6 => 
          array (
            0 => 'address',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
          ),
          7 => 
          array (
            0 => 'hgroup',
            1 => 'Block',
            2 => 'Required: h1 | h2 | h3 | h4 | h5 | h6',
            3 => 'Common',
          ),
          8 => 
          array (
            0 => 'figure',
            1 => 'Block',
            2 => 'Optional: (figcaption, Flow) | (Flow, figcaption) | Flow',
            3 => 'Common',
          ),
          9 => 
          array (
            0 => 'figcaption',
            1 => 'Inline',
            2 => 'Flow',
            3 => 'Common',
          ),
          10 => 
          array (
            0 => 'video',
            1 => 'Block',
            2 => 'Optional: (source, Flow) | (Flow, source) | Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
              'width' => 'Length',
              'height' => 'Length',
              'poster' => 'URI',
              'preload' => 'Enum#auto,metadata,none',
              'controls' => 'Bool',
            ),
          ),
          11 => 
          array (
            0 => 'source',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'src' => 'URI',
              'type' => 'Text',
            ),
          ),
          12 => 
          array (
            0 => 's',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          13 => 
          array (
            0 => 'var',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          14 => 
          array (
            0 => 'sub',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          15 => 
          array (
            0 => 'sup',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          16 => 
          array (
            0 => 'mark',
            1 => 'Inline',
            2 => 'Inline',
            3 => 'Common',
          ),
          17 => 
          array (
            0 => 'wbr',
            1 => 'Inline',
            2 => 'Empty',
            3 => 'Core',
          ),
          18 => 
          array (
            0 => 'ins',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
          19 => 
          array (
            0 => 'del',
            1 => 'Block',
            2 => 'Flow',
            3 => 'Common',
            4 => 
            array (
              'cite' => 'URI',
              'datetime' => 'CDATA',
            ),
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            0 => 'iframe',
            1 => 'allowfullscreen',
            2 => 'Bool',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'height',
            2 => 'Text',
          ),
          2 => 
          array (
            0 => 'td',
            1 => 'border',
            2 => 'Text',
          ),
          3 => 
          array (
            0 => 'th',
            1 => 'border',
            2 => 'Text',
          ),
          4 => 
          array (
            0 => 'tr',
            1 => 'width',
            2 => 'Text',
          ),
          5 => 
          array (
            0 => 'tr',
            1 => 'height',
            2 => 'Text',
          ),
          6 => 
          array (
            0 => 'tr',
            1 => 'border',
            2 => 'Text',
          ),
        ),
      ),
      'custom_attributes' => 
      array (
        0 => 
        array (
          0 => 'a',
          1 => 'target',
          2 => 'Enum#_blank,_self,_target,_top',
        ),
      ),
      'custom_elements' => 
      array (
        0 => 
        array (
          0 => 'u',
          1 => 'Inline',
          2 => 'Inline',
          3 => 'Common',
        ),
      ),
    ),
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
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
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
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
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
      'enabled' => true,
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
      'basePath' => 'D:\\project\\multicrm\\multicrm\\app',
      'rootNamespace' => 'App\\',
      'stubsOverridePath' => 'D:\\project\\multicrm\\multicrm\\app',
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
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'twitter' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/auth/twitter/callback',
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/auth/facebook/callback',
    ),
    'github' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/auth/github/callback',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/auth/google/callback',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'D:\\project\\multicrm\\multicrm\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'multicrm_multi_company_crm_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'settings' => 
  array (
    'name' => 'Settings',
    'permissions' => 
    array (
      0 => 'settings.access',
      1 => 'company.settings',
      2 => 'advanced_view.manage_public',
    ),
    'default' => 'database',
    'cache' => true,
    'encryption' => false,
    'events' => true,
    'repositories' => 
    array (
      'database' => 
      array (
        'driver' => 'database',
        'connection' => 'mysql',
        'table' => 'settings',
      ),
    ),
    'key_generator' => 'Krucas\\Settings\\KeyGenerators\\KeyGenerator',
    'context_serializer' => 'Krucas\\Settings\\ContextSerializers\\ContextSerializer',
    'value_serializer' => 'Krucas\\Settings\\ValueSerializers\\ValueSerializer',
    'override' => 
    array (
    ),
  ),
  'snappy' => 
  array (
    'pdf' => 
    array (
      'enabled' => true,
      'binary' => 'D:\\project\\multicrm\\multicrm\\vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64',
      'timeout' => false,
      'options' => 
      array (
      ),
      'env' => 
      array (
      ),
    ),
    'image' => 
    array (
      'enabled' => true,
      'binary' => 'D:\\project\\multicrm\\multicrm\\vendor/h4cc/wkhtmltoimage-amd64/bin/wkhtmltoimage-amd64',
      'timeout' => false,
      'options' => 
      array (
      ),
      'env' => 
      array (
      ),
    ),
  ),
  'tags' => 
  array (
    'slugger' => 'str_slug',
  ),
  'throttle' => 
  array (
    'driver' => NULL,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => 
    array (
      0 => '192.168.1.10',
    ),
    'headers' => 
    array (
      0 => 30,
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'D:\\project\\multicrm\\multicrm\\resources\\views',
    ),
    'compiled' => 'D:\\project\\multicrm\\multicrm\\storage\\framework\\views',
  ),
  'laravel-model-caching' => 
  array (
    'cache-prefix' => '',
    'disabled' => false,
    'store' => NULL,
  ),
  'accounts' => 
  array (
    'name' => 'Accounts',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'marketing',
      1 => 'accounts.settings',
      2 => 'accounts.browse',
      3 => 'accounts.create',
      4 => 'accounts.update',
      5 => 'accounts.destroy',
    ),
  ),
  'account' => 
  array (
    'name' => 'Account',
  ),
  'sentemails' => 
  array (
    'name' => 'SentEmails',
    'entity_private_access' => false,
    'email_list_cache_time' => 15,
    'permissions' => 
    array (
      0 => 'sentemails.settings',
      1 => 'sentemails.browse',
      2 => 'sentemails.create',
      3 => 'sentemails.update',
      4 => 'sentemails.destroy',
    ),
  ),
  'servicecontracts' => 
  array (
    'name' => 'ServiceContracts',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'servicecontracts.settings',
      1 => 'servicecontracts.browse',
      2 => 'servicecontracts.create',
      3 => 'servicecontracts.update',
      4 => 'servicecontracts.destroy',
    ),
  ),
  'subscription' => 
  array (
    'name' => 'Subscription',
  ),
  'testimonials' => 
  array (
    'name' => 'Testimonials',
    'entity_private_access' => false,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'testimonials.settings',
      1 => 'testimonials.browse',
      2 => 'testimonials.create',
      3 => 'testimonials.update',
      4 => 'testimonials.destroy',
    ),
  ),
  'tickets' => 
  array (
    'name' => 'Tickets',
    'entity_private_access' => true,
    'advanced_views' => true,
    'qrcode_in_print' => true,
    'permissions' => 
    array (
      0 => 'support',
      1 => 'tickets.settings',
      2 => 'tickets.browse',
      3 => 'tickets.create',
      4 => 'tickets.update',
      5 => 'tickets.destroy',
    ),
  ),
  'vendors' => 
  array (
    'name' => 'Vendors',
    'entity_private_access' => false,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'vendors.settings',
      1 => 'vendors.browse',
      2 => 'vendors.create',
      3 => 'vendors.update',
      4 => 'vendors.destroy',
    ),
  ),
  'announcement' => 
  array (
    'name' => 'Announcement',
  ),
  'products' => 
  array (
    'name' => 'Products',
    'entity_private_access' => false,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'products.settings',
      1 => 'products.browse',
      2 => 'products.create',
      3 => 'products.update',
      4 => 'products.destroy',
    ),
  ),
  'codegenerator' => 
  array (
    'name' => 'CodeGenerator',
  ),
  'companies' => 
  array (
    'name' => 'Companies',
  ),
  'core' => 
  array (
    'name' => 'Core',
  ),
  'menumanager' => 
  array (
    'name' => 'MenuManager',
  ),
  'notifications' => 
  array (
    'name' => 'Notifications',
  ),
  'quotes' => 
  array (
    'name' => 'Quotes',
    'entity_private_access' => true,
    'default_quantity' => 1,
    'show_product_image' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'quotes.settings',
      1 => 'quotes.browse',
      2 => 'quotes.create',
      3 => 'quotes.update',
      4 => 'quotes.destroy',
    ),
  ),
  'payments' => 
  array (
    'name' => 'Payments',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'others',
      1 => 'payments.settings',
      2 => 'payments.browse',
      3 => 'payments.create',
      4 => 'payments.update',
      5 => 'payments.destroy',
    ),
  ),
  'api' => 
  array (
    'name' => 'Api',
    'entity_private_access' => true,
    'saas' => 
    array (
      'defaultRole' => 'company_manager',
    ),
  ),
  'contactrequests' => 
  array (
    'name' => 'ContactRequests',
    'entity_private_access' => false,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'contactrequests.settings',
      1 => 'contactrequests.browse',
      2 => 'contactrequests.create',
      3 => 'contactrequests.update',
      4 => 'contactrequests.destroy',
    ),
  ),
  'assets' => 
  array (
    'name' => 'Assets',
    'entity_private_access' => false,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'inventory',
      1 => 'assets.settings',
      2 => 'assets.browse',
      3 => 'assets.create',
      4 => 'assets.update',
      5 => 'assets.destroy',
    ),
  ),
  'calendar' => 
  array (
    'name' => 'Calendar',
    'entity_private_access' => true,
    'slotDuration' => '00:15:00',
    'snapDuration' => '00:15:00',
    'permissions' => 
    array (
      0 => 'calendar',
      1 => 'calendar.settings',
      2 => 'calendar.browse',
      3 => 'calendar.create',
      4 => 'calendar.update',
      5 => 'calendar.destroy',
      6 => 'event.browse',
      7 => 'event.create',
      8 => 'event.update',
      9 => 'event.destroy',
    ),
  ),
  'calls' => 
  array (
    'name' => 'Calls',
    'entity_private_access' => false,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'activity',
      1 => 'calls.settings',
      2 => 'calls.browse',
      3 => 'calls.create',
      4 => 'calls.update',
      5 => 'calls.destroy',
    ),
  ),
  'campaigns' => 
  array (
    'name' => 'Campaigns',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'campaigns.settings',
      1 => 'campaigns.browse',
      2 => 'campaigns.create',
      3 => 'campaigns.update',
      4 => 'campaigns.destroy',
    ),
  ),
  'contactemails' => 
  array (
    'name' => 'ContactEmails',
    'entity_private_access' => false,
  ),
  'contactmailinglists' => 
  array (
    'name' => 'ContactMailinglists',
    'entity_private_access' => false,
    'permissions' => 
    array (
      0 => 'contactmailinglists.settings',
      1 => 'contactmailinglists.browse',
      2 => 'contactmailinglists.create',
      3 => 'contactmailinglists.update',
      4 => 'contactmailinglists.destroy',
    ),
  ),
  'contactwebsites' => 
  array (
    'name' => 'ContactWebsites',
    'entity_private_access' => false,
  ),
  'orders' => 
  array (
    'name' => 'Orders',
    'entity_private_access' => false,
    'default_quantity' => 1,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'orders.settings',
      1 => 'orders.browse',
      2 => 'orders.create',
      3 => 'orders.update',
      4 => 'orders.destroy',
    ),
  ),
  'contacts' => 
  array (
    'name' => 'Contacts',
    'entity_private_access' => true,
    'advanced_views' => true,
    'profile_picture_path' => 'storage/files/contact_profile/',
    'public_profile_picture_path' => 'files/contact_profile/',
    'permissions' => 
    array (
      0 => 'contacts.settings',
      1 => 'contacts.browse',
      2 => 'contacts.create',
      3 => 'contacts.update',
      4 => 'contacts.destroy',
    ),
  ),
  'dashboard' => 
  array (
    'name' => 'Dashboard',
    'income_vs_expense_default' => 'usd',
  ),
  'deals' => 
  array (
    'name' => 'Deals',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'sales',
      1 => 'deals.settings',
      2 => 'deals.browse',
      3 => 'deals.create',
      4 => 'deals.update',
      5 => 'deals.destroy',
    ),
  ),
  'documents' => 
  array (
    'name' => 'Documents',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'documents.settings',
      1 => 'documents.browse',
      2 => 'documents.create',
      3 => 'documents.update',
      4 => 'documents.destroy',
    ),
  ),
  'invoices' => 
  array (
    'name' => 'Invoices',
    'entity_private_access' => false,
    'default_quantity' => 1,
    'advanced_views' => true,
    'qrcode_in_print' => true,
    'permissions' => 
    array (
      0 => 'invoices.settings',
      1 => 'invoices.browse',
      2 => 'invoices.create',
      3 => 'invoices.update',
      4 => 'invoices.destroy',
    ),
  ),
  'leademails' => 
  array (
    'name' => 'LeadEmails',
    'entity_private_access' => false,
  ),
  'leads' => 
  array (
    'name' => 'Leads',
    'entity_private_access' => true,
    'advanced_views' => true,
    'permissions' => 
    array (
      0 => 'leads.settings',
      1 => 'leads.browse',
      2 => 'leads.create',
      3 => 'leads.update',
      4 => 'leads.destroy',
    ),
  ),
  'user' => 
  array (
    'name' => 'User',
  ),
);
