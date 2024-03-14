<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'dodecastudio/craft-blurhash' => 
  array (
    'class' => 'dodecastudio\\blurhash\\BlurHash',
    'basePath' => $vendorDir . '/dodecastudio/craft-blurhash/src',
    'handle' => 'blur-hash',
    'aliases' => 
    array (
      '@dodecastudio/blurhash' => $vendorDir . '/dodecastudio/craft-blurhash/src',
    ),
    'name' => 'BlurHash',
    'version' => '2.0.5',
    'description' => 'Render a BlurHash from a given image.',
    'developer' => 'Dodeca Studio',
    'developerUrl' => 'https://dodeca.studio',
    'documentationUrl' => 'https://github.com/dodecastudio/craft-blurhash/blob/main/README.md',
    'changelogUrl' => 'https://github.com/dodecastudio/craft-blurhash/blob/main/CHANGELOG.md',
    'components' => 
    array (
      'services' => 'dodecastudio\\blurhash\\services\\BlurHashService',
    ),
  ),
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '3.7.1',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor/blob/master/README.md',
  ),
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => '4.2.1',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/seo/blob/v3/README.md',
  ),
  'nystudio107/craft-typogrify' => 
  array (
    'class' => 'nystudio107\\typogrify\\Typogrify',
    'basePath' => $vendorDir . '/nystudio107/craft-typogrify/src',
    'handle' => 'typogrify',
    'aliases' => 
    array (
      '@nystudio107/typogrify' => $vendorDir . '/nystudio107/craft-typogrify/src',
    ),
    'name' => 'Typogrify',
    'version' => '4.0.1',
    'description' => 'Typogrify prettifies your web typography by preventing ugly quotes and \'widows\' and more',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com/',
    'documentationUrl' => 'https://nystudio107.com/docs/typogrify/',
  ),
  'nystudio107/craft-vite' => 
  array (
    'class' => 'nystudio107\\vite\\Vite',
    'basePath' => $vendorDir . '/nystudio107/craft-vite/src',
    'handle' => 'vite',
    'aliases' => 
    array (
      '@nystudio107/vite' => $vendorDir . '/nystudio107/craft-vite/src',
    ),
    'name' => 'Vite',
    'version' => '4.0.8',
    'description' => 'Allows the use of the Vite.js next generation frontend tooling with Craft CMS',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/docs/vite/',
    'changelogUrl' => 'https://raw.githubusercontent.com/nystudio107/craft-vite/v4/CHANGELOG.md',
  ),
  'sebastianlenz/linkfield' => 
  array (
    'class' => 'lenz\\linkfield\\Plugin',
    'basePath' => $vendorDir . '/sebastianlenz/linkfield/src',
    'handle' => 'typedlinkfield',
    'aliases' => 
    array (
      '@lenz/linkfield' => $vendorDir . '/sebastianlenz/linkfield/src',
    ),
    'name' => 'Typed link field',
    'version' => '2.1.5',
    'description' => 'A Craft field type for selecting links',
    'developer' => 'Sebastian Lenz',
    'developerUrl' => 'https://github.com/sebastian-lenz/',
  ),
  'verbb/expanded-singles' => 
  array (
    'class' => 'verbb\\expandedsingles\\ExpandedSingles',
    'basePath' => $vendorDir . '/verbb/expanded-singles/src',
    'handle' => 'expanded-singles',
    'aliases' => 
    array (
      '@verbb/expandedsingles' => $vendorDir . '/verbb/expanded-singles/src',
    ),
    'name' => 'Expanded Singles',
    'version' => '2.0.5',
    'description' => 'Alters the Entries Index sidebar to list all Singles, rather than grouping them under a \'Singles\' link.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/expanded-singles',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/expanded-singles/craft-4/CHANGELOG.md',
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '3.0.8',
    'description' => 'Manage your fields and field groups with ease.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/field-manager',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-4/CHANGELOG.md',
  ),
  'spicyweb/craft-neo' => 
  array (
    'class' => 'benf\\neo\\Plugin',
    'basePath' => $vendorDir . '/spicyweb/craft-neo/src',
    'handle' => 'neo',
    'aliases' => 
    array (
      '@benf/neo' => $vendorDir . '/spicyweb/craft-neo/src',
    ),
    'name' => 'Neo',
    'version' => '3.9.11',
    'schemaVersion' => '3.6.2',
    'description' => 'A Matrix-like field type that uses existing fields',
    'developer' => 'Spicy Web',
    'developerUrl' => 'https://github.com/spicywebau',
    'documentationUrl' => 'https://github.com/spicywebau/craft-neo/blob/3.9.11/README.md',
    'changelogUrl' => 'https://github.com/spicywebau/craft-neo/blob/3.x/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/spicywebau/craft-neo/archive/refs/tags/3.9.11.zip',
  ),
  'verbb/cp-nav' => 
  array (
    'class' => 'verbb\\cpnav\\CpNav',
    'basePath' => $vendorDir . '/verbb/cp-nav/src',
    'handle' => 'cp-nav',
    'aliases' => 
    array (
      '@verbb/cpnav' => $vendorDir . '/verbb/cp-nav/src',
    ),
    'name' => 'Control Panel Nav',
    'version' => '4.0.11',
    'description' => 'Manage the Craft Control Panel navigation.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/cp-nav',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/cp-nav/craft-4/CHANGELOG.md',
  ),
  'verbb/hyper' => 
  array (
    'class' => 'verbb\\hyper\\Hyper',
    'basePath' => $vendorDir . '/verbb/hyper/src',
    'handle' => 'hyper',
    'aliases' => 
    array (
      '@verbb/hyper' => $vendorDir . '/verbb/hyper/src',
    ),
    'name' => 'Hyper',
    'version' => '1.1.16',
    'description' => 'A user-friendly links field for Craft.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/hyper',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/hyper/craft-4/CHANGELOG.md',
  ),
);
