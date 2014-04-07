<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = '127.0.0.1';
$options['db_port'] = '3306';
$options['db_passwd'] = 'DaSJyRWRg7';
$options['db_name'] = 'drupalrecsportsv';
$options['db_user'] = 'drupalrecsportsv';
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.14',
      'description' => 'This platform is running Drupal 7.14',
    ),
  ),
  'profiles' => 
  array (
    'aggregator' => 
    array (
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/aggregator/tests/aggregator_test.module',
      'name' => 'aggregator_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator module tests',
        'description' => 'Support module for aggregator related testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'block_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/block/tests/block_test.module',
      'name' => 'block_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block test',
        'description' => 'Provides test blocks.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.14',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'list_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/list/tests/list_test.module',
      'name' => 'list_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List test',
        'description' => 'Support module for the List module tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/tests/field_test.module',
      'name' => 'field_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field API Test',
        'description' => 'Support module for the Field API tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'files' => 
        array (
          0 => 'field_test.entity.inc',
        ),
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'field_permissions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'field_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'file_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/file/tests/file_module_test.module',
      'name' => 'file_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Provides hooks for testing File module functionality.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'image_module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/image/tests/image_module_test.module',
      'name' => 'image_module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Provides hook implementations for testing Image module functionality.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'image_module_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'locale_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/locale/tests/locale_test.module',
      'name' => 'locale_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale Test',
        'description' => 'Support module for the locale layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7013',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node_access_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/tests/node_access_test.module',
      'name' => 'node_access_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module access tests',
        'description' => 'Support module for node permission testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/tests/node_test.module',
      'name' => 'node_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module tests',
        'description' => 'Support module for node related testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'node_test_exception' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/tests/node_test_exception.module',
      'name' => 'node_test_exception',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node module exception tests',
        'description' => 'Support module for node related exception testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.14',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'openid_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/openid/tests/openid_test.module',
      'name' => 'openid_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID dummy provider',
        'description' => 'OpenID provider used for testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'profile.test',
        ),
        'configure' => 'admin/config/people/profile',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'rdf_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/rdf/tests/rdf_test.module',
      'name' => 'rdf_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF module tests',
        'description' => 'Support module for RDF module testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'search_embedded_form' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/search/tests/search_embedded_form.module',
      'name' => 'search_embedded_form',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search embedded form',
        'description' => 'Support module for search module testing of embedded forms.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'search_extra_type' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/search/tests/search_extra_type.module',
      'name' => 'search_extra_type',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Test search type',
        'description' => 'Support module for search module testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/bootstrap.test',
          6 => 'tests/cache.test',
          7 => 'tests/common.test',
          8 => 'tests/database_test.test',
          9 => 'tests/entity_crud_hook_test.test',
          10 => 'tests/entity_query.test',
          11 => 'tests/error.test',
          12 => 'tests/file.test',
          13 => 'tests/filetransfer.test',
          14 => 'tests/form.test',
          15 => 'tests/graph.test',
          16 => 'tests/image.test',
          17 => 'tests/lock.test',
          18 => 'tests/mail.test',
          19 => 'tests/menu.test',
          20 => 'tests/module.test',
          21 => 'tests/pager.test',
          22 => 'tests/password.test',
          23 => 'tests/path.test',
          24 => 'tests/registry.test',
          25 => 'tests/schema.test',
          26 => 'tests/session.test',
          27 => 'tests/tablesort.test',
          28 => 'tests/theme.test',
          29 => 'tests/unicode.test',
          30 => 'tests/update.test',
          31 => 'tests/xmlrpc.test',
          32 => 'tests/upgrade/upgrade.test',
          33 => 'tests/upgrade/upgrade.comment.test',
          34 => 'tests/upgrade/update.field.test',
          35 => 'tests/upgrade/upgrade.filter.test',
          36 => 'tests/upgrade/upgrade.forum.test',
          37 => 'tests/upgrade/upgrade.locale.test',
          38 => 'tests/upgrade/upgrade.menu.test',
          39 => 'tests/upgrade/upgrade.node.test',
          40 => 'tests/upgrade/upgrade.taxonomy.test',
          41 => 'tests/upgrade/upgrade.trigger.test',
          42 => 'tests/upgrade/upgrade.translatable.test',
          43 => 'tests/upgrade/update.trigger.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/update.user.test',
          46 => 'tests/upgrade/upgrade.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'actions_loop_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/actions_loop_test.module',
      'name' => 'actions_loop_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions loop test',
        'description' => 'Support module for action loop testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ajax_forms_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/ajax_forms_test.module',
      'name' => 'ajax_forms_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX form test mock module',
        'description' => 'Test for AJAX form calls.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ajax_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/ajax_test.module',
      'name' => 'ajax_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AJAX Test',
        'description' => 'Support module for AJAX framework tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'batch_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/batch_test.module',
      'name' => 'batch_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Batch API test',
        'description' => 'Support module for Batch API tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'common_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/common_test.module',
      'name' => 'common_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test',
        'description' => 'Support module for Common tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'common_test.css',
          ),
          'print' => 
          array (
            0 => 'common_test.print.css',
          ),
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'common_test_cron_helper' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/common_test_cron_helper.module',
      'name' => 'common_test_cron_helper',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Common Test Cron Helper',
        'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'database_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/database_test.module',
      'name' => 'database_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Test',
        'description' => 'Support module for Database layer tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'drupal_system_listing_compatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
      'name' => 'drupal_system_listing_compatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing compatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'drupal_system_listing_incompatible_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
      'name' => 'drupal_system_listing_incompatible_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Drupal system listing incompatible test',
        'description' => 'Support module for testing the drupal_system_listing function.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'entity_cache_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/entity_cache_test.module',
      'name' => 'entity_cache_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test',
        'description' => 'Support module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'entity_cache_test_dependency',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'entity_cache_test_dependency' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/entity_cache_test_dependency.module',
      'name' => 'entity_cache_test_dependency',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity cache test dependency',
        'description' => 'Support dependency module for testing entity cache.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'entity_crud_hook_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/entity_crud_hook_test.module',
      'name' => 'entity_crud_hook_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity CRUD Hooks Test',
        'description' => 'Support module for CRUD hook tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'error_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/error_test.module',
      'name' => 'error_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Error test',
        'description' => 'Support module for error and exception testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'file_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/file_test.module',
      'name' => 'file_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File test',
        'description' => 'Support module for file handling tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'file_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'filter_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/filter_test.module',
      'name' => 'filter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter test module',
        'description' => 'Tests filter hooks and functions.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'form_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/form_test.module',
      'name' => 'form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'FormAPI Test',
        'description' => 'Support module for Form API tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'image_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/image_test.module',
      'name' => 'image_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image test',
        'description' => 'Support module for image toolkit tests.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'menu_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/menu_test.module',
      'name' => 'menu_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook menu tests',
        'description' => 'Support module for menu hook testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'module_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/module_test.module',
      'name' => 'module_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module test',
        'description' => 'Support module for module system testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'path_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/path_test.module',
      'name' => 'path_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hook path tests',
        'description' => 'Support module for path hook testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'requirements1_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/requirements1_test.module',
      'name' => 'requirements1_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 1 Test',
        'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'requirements2_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/requirements2_test.module',
      'name' => 'requirements2_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Requirements 2 Test',
        'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
        'dependencies' => 
        array (
          0 => 'requirements1_test',
          1 => 'comment',
        ),
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'session_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/session_test.module',
      'name' => 'session_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Session test',
        'description' => 'Support module for session data testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_dependencies_test.module',
      'name' => 'system_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System dependency test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => '_missing_dependency',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_core_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
      'name' => 'system_incompatible_core_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_core_version_test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_core_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_core_version_test.module',
      'name' => 'system_incompatible_core_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible core version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '5.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_module_version_dependencies_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
      'name' => 'system_incompatible_module_version_dependencies_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version dependencies test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'system_incompatible_module_version_test (>2.0)',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_incompatible_module_version_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_module_version_test.module',
      'name' => 'system_incompatible_module_version_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System incompatible module version test',
        'description' => 'Support module for testing system dependencies.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_test.module',
      'name' => 'system_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System test',
        'description' => 'Support module for system testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system_test.module',
        ),
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'taxonomy_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/taxonomy_test.module',
      'name' => 'taxonomy_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy test module',
        'description' => '"Tests functions and hooks not used in core".',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'theme_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/theme_test.module',
      'name' => 'theme_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Theme test',
        'description' => 'Support module for theme system testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_script_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_script_test.module',
      'name' => 'update_script_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update script test',
        'description' => 'Support module for update script testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test_1' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_test_1.module',
      'name' => 'update_test_1',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test_2' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_test_2.module',
      'name' => 'update_test_2',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test_3' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_test_3.module',
      'name' => 'update_test_3',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'url_alter_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/url_alter_test.module',
      'name' => 'url_alter_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Url_alter tests',
        'description' => 'A support modules for url_alter hook testing.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'xmlrpc_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/xmlrpc_test.module',
      'name' => 'xmlrpc_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'XML-RPC Test',
        'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7073',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'translation_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/translation/tests/translation_test.module',
      'name' => 'translation_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content Translation Test',
        'description' => 'Support module for the content translation tests.',
        'core' => '7.x',
        'package' => 'Testing',
        'version' => '7.14',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'trigger_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/trigger/tests/trigger_test.module',
      'name' => 'trigger_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger Test',
        'description' => 'Support module for Trigger tests.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'aaa_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/aaa_update_test.module',
      'name' => 'aaa_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AAA Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'bbb_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/bbb_update_test.module',
      'name' => 'bbb_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'BBB Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'ccc_update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/ccc_update_test.module',
      'name' => 'ccc_update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CCC Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.14',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/update_test.module',
      'name' => 'update_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update test',
        'description' => 'Support module for update module testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.14',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'user_form_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/user/tests/user_form_test.module',
      'name' => 'user_form_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User module form tests',
        'description' => 'Support module for user form testing.',
        'package' => 'Testing',
        'version' => '7.14',
        'core' => '7.x',
        'hidden' => true,
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7018',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'aggregator' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'standard' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/profiles/standard/standard.profile',
      'name' => 'standard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1000',
      'info' => 
      array (
        'name' => 'Standard',
        'description' => 'Install with commonly used features pre-configured.',
        'version' => '7.14',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'color',
          2 => 'comment',
          3 => 'contextual',
          4 => 'dashboard',
          5 => 'help',
          6 => 'image',
          7 => 'list',
          8 => 'menu',
          9 => 'number',
          10 => 'options',
          11 => 'path',
          12 => 'taxonomy',
          13 => 'dblog',
          14 => 'search',
          15 => 'shortcut',
          16 => 'toolbar',
          17 => 'overlay',
          18 => 'field_ui',
          19 => 'file',
          20 => 'rdf',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'addthis' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'addthis',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'addtoany' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/addtoany/addtoany.module',
      'name' => 'addtoany',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'AddToAny',
        'description' => 'Helps readers share, bookmark, and email your articles and pages using any service, such as Facebook, Twitter, Delicious, Digg, and over 100 more using the <a href=\'http://www.addtoany.com/\' target=\'_blank\'>AddToAny</a> widget.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'addtoany.module',
          1 => 'addtoany.css',
          2 => 'addtoany.admin.inc',
          3 => 'views/addtoany_handler_field_addtoany_link.inc',
          4 => 'views/addtoany.views.inc',
        ),
        'configure' => 'admin/config/system/addtoany',
        'version' => '7.x-3.1',
        'project' => 'addtoany',
        'datestamp' => '1299485766',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'addtoany',
      'version' => '7.x-3.1',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7303',
      'weight' => '100',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'advanced_help' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/advanced_help/advanced_help.module',
      'name' => 'advanced_help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help',
        'description' => 'Allow advanced help and documentation.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'advanced_help.module',
          1 => 'advanced_help.install',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'advanced_help',
        'datestamp' => '1295293901',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'advanced_help',
      'version' => '7.x-1.0-beta1',
    ),
    'help_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/advanced_help/help_example/help_example.module',
      'name' => 'help_example',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Advanced help example',
        'description' => 'A example help module to demonstrate the advanced help module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'advanced_help',
        ),
        'files' => 
        array (
          0 => 'help_example.module',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'advanced_help',
        'datestamp' => '1295293901',
        'php' => '5.2.4',
      ),
      'project' => 'advanced_help',
      'version' => '7.x-1.0-beta1',
    ),
    'calendar' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/calendar/calendar.module',
      'name' => 'calendar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Calendar',
        'description' => 'Views plugin to display views containing dates as Calendars.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'date_views',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'calendar.install',
          1 => 'calendar.module',
          2 => 'includes/calendar.inc',
          3 => 'includes/calendar.views.inc',
          4 => 'includes/calendar.views_default.inc',
          5 => 'includes/calendar_plugin_display_attachment.inc',
          6 => 'includes/calendar_plugin_display_block.inc',
          7 => 'includes/calendar_plugin_display_page.inc',
          8 => 'includes/calendar_plugin_style.inc',
          9 => 'includes/calendar_view_plugin_style.inc',
          10 => 'theme/calendar-datebox.tpl.php',
          11 => 'theme/calendar-day-node.tpl.php',
          12 => 'theme/calendar-day.tpl.php',
          13 => 'theme/calendar-main.tpl.php',
          14 => 'theme/calendar-month-multiple-node.tpl.php',
          15 => 'theme/calendar-month-node.tpl.php',
          16 => 'theme/calendar-month.tpl.php',
          17 => 'theme/calendar-week-multiple-node.tpl.php',
          18 => 'theme/calendar-week-node.tpl.php',
          19 => 'theme/calendar-week.tpl.php',
          20 => 'theme/calendar-year.tpl.php',
        ),
        'version' => '7.x-2.0-alpha1',
        'project' => 'calendar',
        'datestamp' => '1303818714',
        'php' => '5.2.4',
      ),
      'project' => 'calendar',
      'version' => '7.x-2.0-alpha1',
    ),
    'calendar_ical' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/calendar/calendar_ical/calendar_ical.module',
      'name' => 'calendar_ical',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6000',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Calendar iCal',
        'description' => 'Adds ical functionality to Calendar views.',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'date_api',
          2 => 'date_views',
          3 => 'calendar',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'calendar-view-ical.tpl.php',
          1 => 'calendar_ical.install',
          2 => 'calendar_ical.module',
          3 => 'calendar_ical.views.inc',
          4 => 'calendar_ical_admin.inc',
          5 => 'calendar_plugin_display_ical.inc',
          6 => 'calendar_plugin_style_ical.inc',
          7 => 'theme.inc',
        ),
        'version' => '7.x-2.0-alpha1',
        'project' => 'calendar',
        'datestamp' => '1303818714',
        'php' => '5.2.4',
      ),
      'project' => 'calendar',
      'version' => '7.x-2.0-alpha1',
    ),
    'calendar_multiday' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/calendar/calendar_multiday/calendar_multiday.module',
      'name' => 'calendar_multiday',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Calendar Multiday',
        'description' => 'Use the calendar multiday display as an alternative to the standard display. (BETA version)',
        'dependencies' => 
        array (
          0 => 'calendar',
          1 => 'views',
        ),
        'core' => '7.x',
        'package' => 'Date/Time',
        'files' => 
        array (
          0 => 'calendar_multiday.install',
          1 => 'calendar_multiday.module',
          2 => 'includes/calendar.inc',
          3 => 'theme/calendar-datebox.tpl.php',
          4 => 'theme/calendar-day-node.tpl.php',
          5 => 'theme/calendar-day.tpl.php',
          6 => 'theme/calendar-main.tpl.php',
          7 => 'theme/calendar-month-multiple-node.tpl.php',
          8 => 'theme/calendar-month-node.tpl.php',
          9 => 'theme/calendar-month.tpl.php',
          10 => 'theme/calendar-week-multiple-node.tpl.php',
          11 => 'theme/calendar-week-node.tpl.php',
          12 => 'theme/calendar-week.tpl.php',
          13 => 'theme/calendar-year.tpl.php',
          14 => 'theme/calendar-day-overlap.tpl.php',
          15 => 'theme/calendar-week-overlap.tpl.php',
          16 => 'theme/calendar-month-col.tpl.php',
          17 => 'theme/calendar-month-row.tpl.php',
        ),
        'version' => '7.x-2.0-alpha1',
        'project' => 'calendar',
        'datestamp' => '1303818714',
        'php' => '5.2.4',
      ),
      'project' => 'calendar',
      'version' => '7.x-2.0-alpha1',
    ),
    'captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/captcha/captcha.module',
      'name' => 'captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAPTCHA',
        'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
        'package' => 'Spam control',
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha',
        'files' => 
        array (
          0 => 'captcha.module',
          1 => 'captcha.inc',
          2 => 'captcha.admin.inc',
          3 => 'captcha.install',
          4 => 'captcha.test',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'captcha',
        'datestamp' => '1303939314',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'captcha',
      'version' => '7.x-1.0-alpha3',
    ),
    'image_captcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/captcha/image_captcha/image_captcha.module',
      'name' => 'image_captcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image CAPTCHA',
        'description' => 'Provides an image based CAPTCHA.',
        'package' => 'Spam control',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/people/captcha/image_captcha',
        'files' => 
        array (
          0 => 'image_captcha.install',
          1 => 'image_captcha.module',
          2 => 'image_captcha.admin.inc',
          3 => 'image_captcha.user.inc',
        ),
        'version' => '7.x-1.0-alpha3',
        'project' => 'captcha',
        'datestamp' => '1303939314',
        'php' => '5.2.4',
      ),
      'project' => 'captcha',
      'version' => '7.x-1.0-alpha3',
    ),
    'cas' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/cas/cas.module',
      'name' => 'cas',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAS',
        'package' => 'Central Authentication Service',
        'core' => '7.x',
        'description' => 'Provides single sign-on Central Authentication Services (CAS)',
        'configure' => 'admin/config/people/cas',
        'files' => 
        array (
          0 => 'cas.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'cas',
        'datestamp' => '1305570716',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'cas',
      'version' => '7.x-1.0',
    ),
    'cas_server' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/cas/cas_server.module',
      'name' => 'cas_server',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAS Server',
        'package' => 'Central Authentication Service',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'cas_servier.module',
        ),
        'description' => 'Provides protocol compliant CAS Server',
        'version' => '7.x-1.0',
        'project' => 'cas',
        'datestamp' => '1305570716',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'cas',
      'version' => '7.x-1.0',
    ),
    'cas_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/cas/tests/cas_test.module',
      'name' => 'cas_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'CAS module tests',
        'description' => 'Support module for CAS testing.',
        'package' => 'Testing',
        'core' => '7.x',
        'hidden' => true,
        'version' => '7.x-1.0',
        'project' => 'cas',
        'datestamp' => '1305570716',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'cas',
      'version' => '7.x-1.0',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6007',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/math-expr.inc',
          2 => 'includes/stylizer.inc',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'ctools_plugin_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/tests/ctools_plugin_test.module',
      'name' => 'ctools_plugin_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools plugins test',
        'description' => 'Provides hooks for testing ctools plugins.',
        'package' => 'Chaos tool suite',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'ctools.plugins.test',
          1 => 'object_cache.test',
        ),
        'hidden' => true,
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'ctools',
        'datestamp' => '1306885315',
        'php' => '5.2.4',
      ),
      'project' => 'ctools',
      'version' => '7.x-1.0-beta1',
    ),
    'custom_formatters' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/custom_formatters/custom_formatters.module',
      'name' => 'custom_formatters',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom Formatters',
        'description' => 'Allows users to easily define custom CCK Formatters.',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'field',
        ),
        'package' => 'Fields',
        'configure' => 'admin/structure/formatters',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'engines/php.inc',
          1 => 'engines/token.inc',
          2 => 'includes/contextual.inc',
          3 => 'includes/ctools.inc',
          4 => 'includes/custom_formatters.admin.inc',
          5 => 'includes/custom_formatters.inc',
          6 => 'includes/features.inc',
          7 => 'includes/field.inc',
          8 => 'includes/help.inc',
          9 => 'includes/insert.inc',
          10 => 'includes/system.inc',
          11 => 'includes/token.inc',
          12 => 'plugins/export_ui/custom_formatters.inc',
          13 => 'plugins/export_ui/custom_formatters_ui.class.php',
          14 => 'custom_formatters.module',
        ),
        'version' => '7.x-2.0',
        'project' => 'custom_formatters',
        'datestamp' => '1309465916',
        'php' => '5.2.4',
      ),
      'project' => 'custom_formatters',
      'version' => '7.x-2.0',
    ),
    'date' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date.module',
      'name' => 'date',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date',
        'description' => 'Makes date/time fields available.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date_admin.inc',
          1 => 'date_content_generate.inc',
          2 => 'date_elements.inc',
          3 => 'date.install',
          4 => 'date.module',
          5 => 'date.theme',
          6 => 'date.tokens.inc',
          7 => 'date.views.inc',
          8 => 'tests/date_api.test',
          9 => 'tests/date.test',
          10 => 'tests/date_field.test',
          11 => 'tests/date_validation.test',
          12 => 'tests/date_timezone.test',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_all_day' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_all_day/date_all_day.module',
      'name' => 'date_all_day',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date All Day',
        'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'date_all_day.module',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_api' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_api/date_api.module',
      'name' => 'date_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date API',
        'description' => 'A Date API that can be used by other modules.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_api.module',
          1 => 'date_api_elements.inc',
          2 => 'date_api_ical.inc',
          3 => 'date_api_sql.inc',
          4 => 'date_api.admin.inc',
          5 => 'date_api.install',
          6 => 'theme/theme.inc',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'dependencies' => 
        array (
        ),
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_context' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_context/date_context.module',
      'name' => 'date_context',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Context',
        'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
        'package' => 'Date/Time',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'context',
        ),
        'files' => 
        array (
          0 => 'date_context.module',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_migrate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_migrate/date_migrate.module',
      'name' => 'date_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Migration',
        'description' => 'Provides support for importing into date fields with the Migrate module.',
        'core' => '7.x',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'migrate',
          1 => 'date',
        ),
        'files' => 
        array (
          0 => 'date.migrate.inc',
          1 => 'date_migrate.test',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_migrate_example' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
      'name' => 'date_migrate_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
          1 => 'date_repeat',
          2 => 'date_repeat_field',
          3 => 'date_migrate',
          4 => 'features',
          5 => 'migrate',
        ),
        'description' => 'Examples of migrating with the Date module',
        'features' => 
        array (
          'field' => 
          array (
            0 => 'node-date_migrate_example-body',
            1 => 'node-date_migrate_example-field_date',
            2 => 'node-date_migrate_example-field_date_range',
            3 => 'node-date_migrate_example-field_date_repeat',
            4 => 'node-date_migrate_example-field_datestamp',
            5 => 'node-date_migrate_example-field_datestamp_range',
            6 => 'node-date_migrate_example-field_datetime',
            7 => 'node-date_migrate_example-field_datetime_range',
          ),
          'node' => 
          array (
            0 => 'date_migrate_example',
          ),
        ),
        'files' => 
        array (
          0 => 'date_migrate_example.migrate.inc',
        ),
        'name' => 'Date Migration Example',
        'package' => 'Features',
        'project' => 'date',
        'version' => '7.x-2.0-rc1',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_popup' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_popup/date_popup.module',
      'name' => 'date_popup',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Popup',
        'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/config/content/date_popup',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'themes/datepicker.1.7.css',
          ),
        ),
        'files' => 
        array (
          0 => 'date_popup.module',
          1 => 'date_popup.install',
          2 => 'date_popup.js',
          3 => 'themes/calendar.css',
          4 => 'themes/datepicker.css',
          5 => 'themes/timeentry.css',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_repeat' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_repeat/date_repeat.module',
      'name' => 'date_repeat',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Date Repeat API',
        'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
        'dependencies' => 
        array (
          0 => 'date_api',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date_repeat_calc.inc',
          1 => 'date_repeat_form.inc',
          2 => 'date_repeat.install',
          3 => 'date_repeat.module',
          4 => 'tests/date_repeat.test',
          5 => 'tests/date_repeat_form.test',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_repeat_field' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
      'name' => 'date_repeat_field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Repeat Field',
        'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'date',
          2 => 'date_repeat',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'date_repeat_field.css',
          ),
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'date_repeat_field.module',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_tools' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_tools/date_tools.module',
      'name' => 'date_tools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Tools',
        'description' => 'Tools to import and auto-create dates and calendars.',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'package' => 'Date/Time',
        'core' => '7.x',
        'configure' => 'admin/structure/date',
        'files' => 
        array (
          0 => 'date_tools.module',
          1 => 'tests/date_tools.test',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
        'php' => '5.2.4',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'date_views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_views/date_views.module',
      'name' => 'date_views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Date Views',
        'description' => 'Views integration for date fields and date functionality.',
        'package' => 'Date/Time',
        'dependencies' => 
        array (
          0 => 'date_api',
          1 => 'views',
        ),
        'core' => '7.x',
        'php' => '5.2',
        'files' => 
        array (
          0 => 'date_views.module',
          1 => 'includes/date_views_argument_handler.inc',
          2 => 'includes/date_views_argument_handler_simple.inc',
          3 => 'includes/date_views_fields.inc',
          4 => 'includes/date_views_filter_handler.inc',
          5 => 'includes/date_views_filter_handler_simple.inc',
          6 => 'includes/date_views.views_default.inc',
          7 => 'includes/date_views.views.inc',
          8 => 'includes/date_views_plugin_pager.inc',
          9 => 'theme/theme.inc',
          10 => 'theme/date-views-pager.tpl.php',
          11 => 'theme/date-valarm.tpl.php',
          12 => 'theme/date-vcalendar.tpl.php',
          13 => 'theme/date-vevent.tpl.php',
          14 => 'theme/date-views-filter-form.tpl.php',
        ),
        'version' => '7.x-2.0-rc1',
        'project' => 'date',
        'datestamp' => '1324415138',
      ),
      'project' => 'date',
      'version' => '7.x-2.0-rc1',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7003',
      'weight' => '88',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'devel',
        ),
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.2',
        'project' => 'devel',
        'datestamp' => '1311355316',
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.2',
    ),
    'performance' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/performance/performance.module',
      'name' => 'performance',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Performance Logging',
        'description' => 'Logs detailed and/or summary page generation time and memory consumption for page requests.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.0',
        'project' => 'devel',
        'datestamp' => '1294172175',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'devel',
      'version' => '7.x-1.0',
    ),
    'email' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/email/email.module',
      'name' => 'email',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Email',
        'description' => 'Defines an email field type.',
        'core' => '7.x',
        'package' => 'Fields',
        'files' => 
        array (
          0 => 'email.module',
          1 => 'email.install',
        ),
        'version' => '7.x-1.0-beta1',
        'project' => 'email',
        'datestamp' => '1295529409',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'email',
      'version' => '7.x-1.0-beta1',
    ),
    'fblikebutton' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fblikebutton/fblikebutton.module',
      'name' => 'fblikebutton',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Facebook Like Button',
        'description' => 'Adds a configurable <em>Like</em> button for Facebook to each selected node type, as well as a configurable block with a <em>Like</em> box in it.',
        'core' => '7.x',
        'configure' => 'admin/config/fblikebutton',
        'version' => '7.x-1.2',
        'project' => 'fblikebutton',
        'datestamp' => '1307959015',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'fblikebutton',
      'version' => '7.x-1.2',
    ),
    'imagefield_crop' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagefield_crop/imagefield_crop.module',
      'name' => 'imagefield_crop',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image crop',
        'description' => 'Add cropping ability to images using javascript',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'image',
        ),
        'files' => 
        array (
          0 => 'imagefield_crop.module',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'imagefield_crop',
        'datestamp' => '1308010890',
        'php' => '5.2.4',
      ),
      'project' => 'imagefield_crop',
      'version' => '7.x-1.x-dev',
    ),
    'imagepicker' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'imagepicker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7100',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version dependent and shared usage of external libraries.',
        'core' => '7.x',
        'version' => '7.x-1.0',
        'project' => 'libraries',
        'datestamp' => '1296096156',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'libraries',
      'version' => '7.x-1.0',
    ),
    'masquerade' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/masquerade/masquerade.module',
      'name' => 'masquerade',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '-10',
      'info' => 
      array (
        'name' => 'Masquerade',
        'description' => 'This module allows permitted users to masquerade as other users.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'masquerade.test',
        ),
        'configure' => 'admin/config/people/masquerade',
        'version' => '7.x-1.0-rc3',
        'project' => 'masquerade',
        'datestamp' => '1300939868',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'masquerade',
      'version' => '7.x-1.0-rc3',
    ),
    'media' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'media',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7014',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'media_internet' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'media_internet',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'media_gallery' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'media_gallery',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7007',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'menu_block' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/menu_block/menu_block.module',
      'name' => 'menu_block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7202',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block',
        'description' => 'Provides configurable blocks of menu items.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'files' => 
        array (
          0 => 'menu_block.module',
          1 => 'menu_block.admin.inc',
          2 => 'menu_block.book.inc',
          3 => 'menu_block.follow.inc',
          4 => 'menu_block.pages.inc',
          5 => 'menu_block.sort.inc',
          6 => 'menu_block.install',
        ),
        '# files' => 
        array (
          0 => 'plugins/content_types/menu_tree/menu_tree.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block',
        'version' => '7.x-2.2',
        'project' => 'menu_block',
        'datestamp' => '1299683174',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.2',
    ),
    'menu_block_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/menu_block/menu_block_export.module',
      'name' => 'menu_block_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu Block Export',
        'description' => 'Provides export interface for Menu block module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'menu_block',
        ),
        'files' => 
        array (
          0 => 'menu_block_export.module',
          1 => 'menu_block_export.admin.inc',
        ),
        'configure' => 'admin/config/user-interface/menu-block/export',
        'version' => '7.x-2.2',
        'project' => 'menu_block',
        'datestamp' => '1299683174',
        'php' => '5.2.4',
      ),
      'project' => 'menu_block',
      'version' => '7.x-2.2',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-1.4',
        'project' => 'module_filter',
        'datestamp' => '1299525068',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'module_filter',
      'version' => '7.x-1.4',
    ),
    'mollom' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/mollom/mollom.module',
      'name' => 'mollom',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom',
        'description' => 'Protects forms against spam.',
        'core' => '7.x',
        'configure' => 'admin/config/content/mollom',
        'scripts' => 
        array (
          0 => 'mollom.js',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'mollom.css',
          ),
        ),
        'files' => 
        array (
          0 => 'mollom.module',
          1 => 'mollom.admin.inc',
          2 => 'mollom.pages.inc',
          3 => 'mollom.install',
          4 => 'tests/mollom.test',
        ),
        'version' => '7.x-1.0',
        'project' => 'mollom',
        'datestamp' => '1294772829',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'mollom',
      'version' => '7.x-1.0',
    ),
    'mollom_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/mollom/tests/mollom_test.module',
      'name' => 'mollom_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Mollom Test',
        'description' => 'Testing module for Mollom functionality. Do not enable.',
        'core' => '7.x',
        'package' => 'Testing',
        'hidden' => true,
        'files' => 
        array (
          0 => 'mollom_test.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'mollom',
        'datestamp' => '1294772829',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'mollom',
      'version' => '7.x-1.0',
    ),
    'multiform' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'multiform',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'panels',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6310',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_mini' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'panels_mini',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6303',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'panels_node' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'panels_node',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '11',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'pathauto' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/pathauto/pathauto.module',
      'name' => 'pathauto',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'Pathauto',
        'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
        'dependencies' => 
        array (
          0 => 'path',
          1 => 'token',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'pathauto.test',
        ),
        'configure' => 'admin/config/search/path/patterns',
        'recommends' => 
        array (
          0 => 'redirect',
        ),
        'version' => '7.x-1.0-rc2',
        'project' => 'pathauto',
        'datestamp' => '1308241021',
        'php' => '5.2.4',
      ),
      'project' => 'pathauto',
      'version' => '7.x-1.0-rc2',
    ),
    'permission_select' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/permission_select/permission_select.module',
      'name' => 'permission_select',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Permission Select',
        'description' => 'Gives select all/deselect all options on the permissions section of the Drupal admin.',
        'package' => 'Administration',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'permission_select.module',
        ),
        'version' => '7.x-1.1',
        'project' => 'permission_select',
        'datestamp' => '1242606933',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'permission_select',
      'version' => '7.x-1.1',
    ),
    'recaptcha' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/recaptcha/recaptcha.module',
      'name' => 'recaptcha',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'reCAPTCHA',
        'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
        'dependencies' => 
        array (
          0 => 'captcha',
        ),
        'package' => 'Spam control',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'recaptcha.admin.inc',
          1 => 'recaptcha.module',
          2 => 'recaptcha.install',
        ),
        'version' => '7.x-1.7',
        'project' => 'recaptcha',
        'datestamp' => '1304527616',
        'php' => '5.2.4',
      ),
      'project' => 'recaptcha',
      'version' => '7.x-1.7',
    ),
    'recaptcha_mailhide' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/recaptcha/recaptcha_mailhide.module',
      'name' => 'recaptcha_mailhide',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'reCAPTCHA Mailhide',
        'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
        'package' => 'Spam control',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'recaptcha_mailhide.module',
        ),
        'version' => '7.x-1.7',
        'project' => 'recaptcha',
        'datestamp' => '1304527616',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'recaptcha',
      'version' => '7.x-1.7',
    ),
    'node_reference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/references/node_reference/node_reference.module',
      'name' => 'node_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node Reference',
        'description' => 'Defines a field type for referencing one node from another.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'files' => 
        array (
          0 => 'node_reference.test',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'references',
        'datestamp' => '1305236816',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.0-beta3',
    ),
    'references' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/references/references.module',
      'name' => 'references',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'References',
        'description' => 'Defines common base features for the various reference field types.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'views/references_handler_relationship.inc',
          1 => 'views/references_handler_argument.inc',
          2 => 'views/references_plugin_display.inc',
          3 => 'views/references_plugin_style.inc',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'references',
        'datestamp' => '1305236816',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.0-beta3',
    ),
    'user_reference' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/references/user_reference/user_reference.module',
      'name' => 'user_reference',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User Reference',
        'description' => 'Defines a field type for referencing a user from a node.',
        'package' => 'Fields',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'references',
          2 => 'options',
        ),
        'version' => '7.x-2.0-beta3',
        'project' => 'references',
        'datestamp' => '1305236816',
        'php' => '5.2.4',
      ),
      'project' => 'references',
      'version' => '7.x-2.0-beta3',
    ),
    'robotstxt' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/robotstxt/robotstxt.module',
      'name' => 'robotstxt',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'robots.txt',
        'description' => 'Generates the robots.txt file dynamically and gives you the chance to edit it, on a per-site basis, from the web UI.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'robotstxt.module',
          1 => 'robotstxt.admin.inc',
          2 => 'robotstxt.install',
        ),
        'configure' => 'admin/config/search/robotstxt',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'scheduler' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'scheduler',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'social_share' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'social_share',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'status_lights' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/status_lights/status_lights.module',
      'name' => 'status_lights',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Status Lights',
        'description' => 'Provides customizable status light indicators',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'date',
        ),
        'files' => 
        array (
          0 => 'status_lights.module',
          1 => 'status_lights.install',
          2 => 'status_lights_admin.inc',
        ),
        'package' => 'VT Rec Sports',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'file_styles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'file_styles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7206',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'styles_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'styles_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7204',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'styles' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'styles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7214',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'themekey' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'themekey',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7101',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'themekey_debug' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'themekey_debug',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'token_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/token/tests/token_test.module',
      'name' => 'token_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token Test',
        'description' => 'Testing module for token functionality.',
        'package' => 'Testing',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token_test.module',
        ),
        'hidden' => true,
        'version' => '7.x-1.0-beta2',
        'project' => 'token',
        'datestamp' => '1305833216',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-beta2',
    ),
    'token' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/token/token.module',
      'name' => 'token',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Token',
        'description' => 'Provides a user interface for the Token API and some missing core tokens.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'token.module',
          1 => 'token.install',
          2 => 'token.tokens.inc',
          3 => 'token.pages.inc',
          4 => 'token.test',
        ),
        'version' => '7.x-1.0-beta2',
        'project' => 'token',
        'datestamp' => '1305833216',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'token',
      'version' => '7.x-1.0-beta2',
    ),
    'token_actions' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'token_actions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'userprotect' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'userprotect',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/tests/views_test.module',
      'name' => 'views_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Test',
        'description' => 'Test module for Views.',
        'package' => 'Views',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'hidden' => true,
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_text.inc',
          2 => 'handlers/views_handler_area_view.inc',
          3 => 'handlers/views_handler_argument.inc',
          4 => 'handlers/views_handler_argument_date.inc',
          5 => 'handlers/views_handler_argument_formula.inc',
          6 => 'handlers/views_handler_argument_many_to_one.inc',
          7 => 'handlers/views_handler_argument_null.inc',
          8 => 'handlers/views_handler_argument_numeric.inc',
          9 => 'handlers/views_handler_argument_string.inc',
          10 => 'handlers/views_handler_argument_group_by_numeric.inc',
          11 => 'handlers/views_handler_field.inc',
          12 => 'handlers/views_handler_field_counter.inc',
          13 => 'handlers/views_handler_field_group_by_numeric.inc',
          14 => 'handlers/views_handler_field_boolean.inc',
          15 => 'handlers/views_handler_field_custom.inc',
          16 => 'handlers/views_handler_field_date.inc',
          17 => 'handlers/views_handler_field_markup.inc',
          18 => 'handlers/views_handler_field_math.inc',
          19 => 'handlers/views_handler_field_numeric.inc',
          20 => 'handlers/views_handler_field_prerender_list.inc',
          21 => 'handlers/views_handler_field_serialized.inc',
          22 => 'handlers/views_handler_field_url.inc',
          23 => 'handlers/views_handler_filter.inc',
          24 => 'handlers/views_handler_filter_group_by_numeric.inc',
          25 => 'handlers/views_handler_filter_boolean_operator.inc',
          26 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          27 => 'handlers/views_handler_filter_date.inc',
          28 => 'handlers/views_handler_filter_equality.inc',
          29 => 'handlers/views_handler_filter_in_operator.inc',
          30 => 'handlers/views_handler_filter_many_to_one.inc',
          31 => 'handlers/views_handler_filter_numeric.inc',
          32 => 'handlers/views_handler_filter_string.inc',
          33 => 'handlers/views_handler_relationship.inc',
          34 => 'handlers/views_handler_sort.inc',
          35 => 'handlers/views_handler_sort_group_by_numeric.inc',
          36 => 'handlers/views_handler_sort_date.inc',
          37 => 'handlers/views_handler_sort_formula.inc',
          38 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          39 => 'handlers/views_handler_sort_random.inc',
          40 => 'includes/base.inc',
          41 => 'includes/handlers.inc',
          42 => 'includes/plugins.inc',
          43 => 'includes/tabs.inc',
          44 => 'includes/view.inc',
          45 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          46 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          47 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          48 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          49 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          50 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          51 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          52 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          53 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          54 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          55 => 'modules/comment/views_handler_field_comment.inc',
          56 => 'modules/comment/views_handler_field_comment_depth.inc',
          57 => 'modules/comment/views_handler_field_comment_link.inc',
          58 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          59 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          60 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          61 => 'modules/comment/views_handler_field_comment_node_link.inc',
          62 => 'modules/comment/views_handler_field_comment_username.inc',
          63 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          64 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          65 => 'modules/comment/views_handler_field_node_comment.inc',
          66 => 'modules/comment/views_handler_field_node_new_comments.inc',
          67 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          68 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          69 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          70 => 'modules/comment/views_handler_filter_node_comment.inc',
          71 => 'modules/comment/views_handler_sort_comment_thread.inc',
          72 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          73 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          74 => 'modules/comment/views_plugin_row_comment_rss.inc',
          75 => 'modules/comment/views_plugin_row_comment_view.inc',
          76 => 'modules/contact/views_handler_field_contact_link.inc',
          77 => 'modules/field/views_handler_field_field.inc',
          78 => 'modules/field/views_handler_filter_field_list.inc',
          79 => 'modules/filter/views_handler_field_filter_format_name.inc',
          80 => 'modules/locale/views_handler_argument_locale_group.inc',
          81 => 'modules/locale/views_handler_argument_locale_language.inc',
          82 => 'modules/locale/views_handler_field_locale_group.inc',
          83 => 'modules/locale/views_handler_field_locale_language.inc',
          84 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          85 => 'modules/locale/views_handler_filter_locale_group.inc',
          86 => 'modules/locale/views_handler_filter_locale_language.inc',
          87 => 'modules/locale/views_handler_filter_locale_version.inc',
          88 => 'modules/node/views_handler_argument_dates_various.inc',
          89 => 'modules/node/views_handler_argument_node_language.inc',
          90 => 'modules/node/views_handler_argument_node_nid.inc',
          91 => 'modules/node/views_handler_argument_node_type.inc',
          92 => 'modules/node/views_handler_argument_node_vid.inc',
          93 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          94 => 'modules/node/views_handler_field_node.inc',
          95 => 'modules/node/views_handler_field_node_link.inc',
          96 => 'modules/node/views_handler_field_node_link_delete.inc',
          97 => 'modules/node/views_handler_field_node_link_edit.inc',
          98 => 'modules/node/views_handler_field_node_revision.inc',
          99 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          100 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          101 => 'modules/node/views_handler_field_node_path.inc',
          102 => 'modules/node/views_handler_field_node_type.inc',
          103 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          104 => 'modules/node/views_handler_filter_node_access.inc',
          105 => 'modules/node/views_handler_filter_node_status.inc',
          106 => 'modules/node/views_handler_filter_node_type.inc',
          107 => 'modules/node/views_plugin_argument_default_node.inc',
          108 => 'modules/node/views_plugin_argument_validate_node.inc',
          109 => 'modules/node/views_plugin_row_node_rss.inc',
          110 => 'modules/node/views_plugin_row_node_view.inc',
          111 => 'modules/profile/views_handler_field_profile_date.inc',
          112 => 'modules/profile/views_handler_field_profile_list.inc',
          113 => 'modules/profile/views_handler_filter_profile_selection.inc',
          114 => 'modules/search/views_handler_argument_search.inc',
          115 => 'modules/search/views_handler_field_search_score.inc',
          116 => 'modules/search/views_handler_filter_search.inc',
          117 => 'modules/search/views_handler_sort_search_score.inc',
          118 => 'modules/search/views_plugin_row_search_view.inc',
          119 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          120 => 'modules/system/views_handler_argument_file_fid.inc',
          121 => 'modules/system/views_handler_field_file.inc',
          122 => 'modules/system/views_handler_field_file_extension.inc',
          123 => 'modules/system/views_handler_field_file_filemime.inc',
          124 => 'modules/system/views_handler_field_file_uri.inc',
          125 => 'modules/system/views_handler_field_file_status.inc',
          126 => 'modules/system/views_handler_filter_file_status.inc',
          127 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          128 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          129 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          130 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          131 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          132 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          133 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          134 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          135 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          136 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          137 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          138 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          139 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          140 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          141 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          142 => 'modules/system/views_handler_filter_system_type.inc',
          143 => 'modules/translation/views_handler_argument_node_tnid.inc',
          144 => 'modules/translation/views_handler_field_node_language.inc',
          145 => 'modules/translation/views_handler_field_node_link_translate.inc',
          146 => 'modules/translation/views_handler_field_node_translation_link.inc',
          147 => 'modules/translation/views_handler_filter_node_language.inc',
          148 => 'modules/translation/views_handler_filter_node_tnid.inc',
          149 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          150 => 'modules/translation/views_handler_relationship_translation.inc',
          151 => 'modules/upload/views_handler_field_upload_description.inc',
          152 => 'modules/upload/views_handler_field_upload_fid.inc',
          153 => 'modules/upload/views_handler_filter_upload_fid.inc',
          154 => 'modules/user/views_handler_argument_user_uid.inc',
          155 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          156 => 'modules/user/views_handler_field_user.inc',
          157 => 'modules/user/views_handler_field_user_language.inc',
          158 => 'modules/user/views_handler_field_user_link.inc',
          159 => 'modules/user/views_handler_field_user_link_cancel.inc',
          160 => 'modules/user/views_handler_field_user_link_delete.inc',
          161 => 'modules/user/views_handler_field_user_link_edit.inc',
          162 => 'modules/user/views_handler_field_user_mail.inc',
          163 => 'modules/user/views_handler_field_user_name.inc',
          164 => 'modules/user/views_handler_field_user_picture.inc',
          165 => 'modules/user/views_handler_field_user_roles.inc',
          166 => 'modules/user/views_handler_filter_user_current.inc',
          167 => 'modules/user/views_handler_filter_user_name.inc',
          168 => 'modules/user/views_handler_filter_user_roles.inc',
          169 => 'modules/user/views_plugin_argument_default_current_user.inc',
          170 => 'modules/user/views_plugin_argument_default_user.inc',
          171 => 'modules/user/views_plugin_argument_validate_user.inc',
          172 => 'plugins/views_plugin_access.inc',
          173 => 'plugins/views_plugin_access_none.inc',
          174 => 'plugins/views_plugin_access_perm.inc',
          175 => 'plugins/views_plugin_access_role.inc',
          176 => 'plugins/views_plugin_argument_default.inc',
          177 => 'plugins/views_plugin_argument_default_php.inc',
          178 => 'plugins/views_plugin_argument_default_fixed.inc',
          179 => 'plugins/views_plugin_argument_validate.inc',
          180 => 'plugins/views_plugin_argument_validate_numeric.inc',
          181 => 'plugins/views_plugin_argument_validate_php.inc',
          182 => 'plugins/views_plugin_cache.inc',
          183 => 'plugins/views_plugin_cache_none.inc',
          184 => 'plugins/views_plugin_cache_time.inc',
          185 => 'plugins/views_plugin_display.inc',
          186 => 'plugins/views_plugin_display_attachment.inc',
          187 => 'plugins/views_plugin_display_block.inc',
          188 => 'plugins/views_plugin_display_default.inc',
          189 => 'plugins/views_plugin_display_feed.inc',
          190 => 'plugins/views_plugin_exposed_form_basic.inc',
          191 => 'plugins/views_plugin_exposed_form.inc',
          192 => 'plugins/views_plugin_exposed_form_input_required.inc',
          193 => 'plugins/views_plugin_display_page.inc',
          194 => 'plugins/views_plugin_localization_core.inc',
          195 => 'plugins/views_plugin_localization.inc',
          196 => 'plugins/views_plugin_localization_none.inc',
          197 => 'plugins/views_plugin_pager.inc',
          198 => 'plugins/views_plugin_pager_full.inc',
          199 => 'plugins/views_plugin_pager_mini.inc',
          200 => 'plugins/views_plugin_pager_none.inc',
          201 => 'plugins/views_plugin_pager_some.inc',
          202 => 'plugins/views_plugin_query.inc',
          203 => 'plugins/views_plugin_query_default.inc',
          204 => 'plugins/views_plugin_row.inc',
          205 => 'plugins/views_plugin_row_fields.inc',
          206 => 'plugins/views_plugin_style.inc',
          207 => 'plugins/views_plugin_style_default.inc',
          208 => 'plugins/views_plugin_style_grid.inc',
          209 => 'plugins/views_plugin_style_list.inc',
          210 => 'plugins/views_plugin_style_jump_menu.inc',
          211 => 'plugins/views_plugin_style_rss.inc',
          212 => 'plugins/views_plugin_style_summary.inc',
          213 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          214 => 'plugins/views_plugin_style_summary_unformatted.inc',
          215 => 'plugins/views_plugin_style_table.inc',
          216 => 'tests/handlers/views_handler_area_text.test',
          217 => 'tests/handlers/views_handler_argument_null.test',
          218 => 'tests/handlers/views_handler_field_boolean.test',
          219 => 'tests/handlers/views_handler_field_custom.test',
          220 => 'tests/handlers/views_handler_field_counter.test',
          221 => 'tests/handlers/views_handler_field_date.test',
          222 => 'tests/handlers/views_handler_field_file_size.test',
          223 => 'tests/handlers/views_handler_field_math.test',
          224 => 'tests/handlers/views_handler_field_url.test',
          225 => 'tests/handlers/views_handler_field_xss.test',
          226 => 'tests/handlers/views_handler_filter_date.test',
          227 => 'tests/handlers/views_handler_filter_equality.test',
          228 => 'tests/handlers/views_handler_filter_in_operator.test',
          229 => 'tests/handlers/views_handler_filter_numeric.test',
          230 => 'tests/handlers/views_handler_filter_string.test',
          231 => 'tests/handlers/views_handler_sort_random.test',
          232 => 'tests/handlers/views_handler_sort_date.test',
          233 => 'tests/handlers/views_handler_sort.test',
          234 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          235 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          236 => 'tests/views_access.test',
          237 => 'tests/views_analyze.test',
          238 => 'tests/views_basic.test',
          239 => 'tests/views_argument_default.test',
          240 => 'tests/views_argument_validator.test',
          241 => 'tests/views_exposed_form.test',
          242 => 'tests/views_glossary.test',
          243 => 'tests/views_groupby.test',
          244 => 'tests/views_handlers.test',
          245 => 'tests/views_module.test',
          246 => 'tests/views_pager.test',
          247 => 'tests/views_plugin_localization_test.inc',
          248 => 'tests/views_translatable.test',
          249 => 'tests/views_query.test',
          250 => 'tests/views_test.views_default.inc',
          251 => 'tests/user/views_user_argument_default.test',
          252 => 'tests/user/views_user_argument_validate.test',
          253 => 'tests/views_cache.test',
          254 => 'tests/views_view.test',
          255 => 'tests/views_ui.test',
        ),
        'version' => NULL,
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_export' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/views_export/views_export.module',
      'name' => 'views_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views exporter',
        'description' => 'Allows exporting multiple views at once.',
        'package' => 'Views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'core' => '7.x',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_random_seed' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14',
      'name' => 'views_random_seed',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'dependencies' => 
        array (
        ),
        'description' => '',
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'views_slideshow_cycle' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
      'name' => 'views_slideshow_cycle',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow: Cycle',
        'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
        'dependencies' => 
        array (
          0 => 'views_slideshow',
          1 => 'libraries',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow_cycle.module',
          1 => 'views_slideshow_cycle.views_slideshow.inc',
          2 => 'theme/views_slideshow_cycle.theme.inc',
        ),
        'version' => '7.x-3.0-alpha1',
        'project' => 'views_slideshow',
        'datestamp' => '1299893769',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.0-alpha1',
    ),
    'views_slideshow' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_slideshow/views_slideshow.module',
      'name' => 'views_slideshow',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Slideshow',
        'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'views_slideshow.module',
          1 => 'theme/views_slideshow.theme.inc',
          2 => 'views_slideshow.views.inc',
          3 => 'views_slideshow_plugin_style_slideshow.inc',
        ),
        'version' => '7.x-3.0-alpha1',
        'project' => 'views_slideshow',
        'datestamp' => '1299893769',
        'php' => '5.2.4',
      ),
      'project' => 'views_slideshow',
      'version' => '7.x-3.0-alpha1',
    ),
    'webform' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/webform/webform.module',
      'name' => 'webform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7311',
      'weight' => '-1',
      'info' => 
      array (
        'name' => 'Webform',
        'description' => 'Enables the creation of forms and questionnaires.',
        'core' => '7.x',
        'package' => 'Webform',
        'configure' => 'admin/config/content/webform',
        'files' => 
        array (
          0 => 'includes/webform.export.inc',
          1 => 'views/webform_handler_field_form_body.inc',
          2 => 'views/webform_handler_field_is_draft.inc',
          3 => 'views/webform_handler_field_node_link_edit.inc',
          4 => 'views/webform_handler_field_node_link_results.inc',
          5 => 'views/webform_handler_field_submission_count.inc',
          6 => 'views/webform_handler_field_submission_link.inc',
          7 => 'views/webform_handler_filter_is_draft.inc',
          8 => 'views/webform.views.inc',
          9 => 'tests/components.test',
          10 => 'tests/permissions.test',
          11 => 'tests/submission.test',
          12 => 'tests/webform.test',
        ),
        'version' => '7.x-3.11',
        'project' => 'webform',
        'datestamp' => '1305758218',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'webform',
      'version' => '7.x-3.11',
    ),
    'workbench' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/workbench/workbench.module',
      'name' => 'workbench',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench',
        'description' => 'Workbench editorial suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/settings',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'version' => '7.x-1.0-beta6',
        'project' => 'workbench',
        'datestamp' => '1308177720',
        'php' => '5.2.4',
      ),
      'project' => 'workbench',
      'version' => '7.x-1.0-beta6',
    ),
    'workbench_access' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/workbench_access/workbench_access.module',
      'name' => 'workbench_access',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Workbench Access',
        'description' => 'Extensible editorial access for the Workbench suite.',
        'package' => 'Workbench',
        'core' => '7.x',
        'configure' => 'admin/config/workbench/access',
        'dependencies' => 
        array (
          0 => 'taxonomy',
        ),
        'files' => 
        array (
          0 => 'includes/workbench_access_handler_field_edit_node.inc',
          1 => 'includes/workbench_access_handler_field_section.inc',
          2 => 'includes/workbench_access_handler_filter_access.inc',
          3 => 'includes/workbench_access_handler_sort_section.inc',
          4 => 'tests/workbench_access.test',
        ),
        'version' => '7.x-1.0-beta7',
        'project' => 'workbench_access',
        'datestamp' => '1310068328',
        'php' => '5.2.4',
      ),
      'project' => 'workbench_access',
      'version' => '7.x-1.0-beta7',
    ),
    'wysiwyg_test' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/wysiwyg/tests/wysiwyg_test.module',
      'name' => 'wysiwyg_test',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg testing',
        'description' => 'Tests Wysiwyg module functionality. Do not enable.',
        'core' => '7.x',
        'package' => 'Testing',
        'hidden' => true,
        'dependencies' => 
        array (
          0 => 'wysiwyg',
        ),
        'files' => 
        array (
          0 => 'wysiwyg_test.module',
        ),
        'version' => '7.x-2.1',
        'project' => 'wysiwyg',
        'datestamp' => '1308450722',
        'php' => '5.2.4',
      ),
      'project' => 'wysiwyg',
      'version' => '7.x-2.1',
    ),
    'wysiwyg' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/wysiwyg/wysiwyg.module',
      'name' => 'wysiwyg',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7200',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Wysiwyg',
        'description' => 'Allows to edit content with client-side editors.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/content/wysiwyg',
        'files' => 
        array (
          0 => 'wysiwyg.module',
          1 => 'tests/wysiwyg.test',
        ),
        'version' => '7.x-2.1',
        'project' => 'wysiwyg',
        'datestamp' => '1308450722',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'wysiwyg',
      'version' => '7.x-2.1',
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/platforms/drupal-7.14/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.14',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1335997555',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'project' => 'drupal',
      'version' => '7.14',
    ),
  ),
);
$options['site_ip_addresses'] = array (
  '@server_master' => '198.82.152.219',
);
$options['installed'] = true;
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
