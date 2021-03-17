<?php
/**
 *
 * @category      module
 * @package       tags
 * @author        OXID eSales AG
 * @link          http://www.oxid-esales.com/
 * @copyright (C) OXID eSales AG 2003-2016
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.2';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oetags',
    'title'       => [
        'de' => 'OE Tags',
        'en' => 'OE Tags',
    ],
    'description' => [
        'de' => 'OE Tags Modul',
        'en' => 'OE Tags Module',
    ],
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '2.3.3',
    'author'      => 'OXID eSales AG',
    'url'         => 'http://www.oxid-esales.com/',
    'email'       => '',
    'extend'      => [
        'article_seo'         => 'oe/oetags/controllers/admin/oetagsArticleSeo',
        'article_main'        => 'oe/oetags/controllers/admin/oetagsArticleMain',
        'oxadminview'         => 'oe/oetags/controllers/admin/oetagsAdminView',
        'oxseoencoderarticle' => 'oe/oetags/models/oetagsSeoEncoderArticle',
        'details'             => 'oe/oetags/controllers/oetagsArticleDetailsController',
        'oxwarticledetails'   => 'oe/oetags/components/widgets/oetagsArticleDetailsWidget',
        'oxarticlelist'       => 'oe/oetags/models/oetagsArticleList',
        'oxsearch'            => 'oe/oetags/models/oetagsSearch',
        'oxviewconfig'        => 'oe/oetags/core/oetagsViewConfig',
        'oxutilscount'        => 'oe/oetags/core/oetagsUtilsCount',
        'oxlocator'           => 'oe/oetags/components/oetagsLocator',
        'oxarticle'           => 'oe/oetags/models/oetagsArticle',
        'oxcmp_basket'        => 'oe/oetags/components/oetagsBasketComponent',
        'oxcmp_categories'    => 'oe/oetags/components/oetagsCategoriesComponent',
    ],
    'files'       => [
        'oetagsitaglist'       => 'oe/oetags/core/contract/oetagsITagList.php',
        'oetagsmodule'         => 'oe/oetags/core/oetagsModule.php',
        'oetagsTag'            => 'oe/oetags/models/oetagsTag.php',
        'oetagsTagCloud'       => 'oe/oetags/models/oetagsTagCloud.php',
        'oetagsTagList'        => 'oe/oetags/models/oetagsTagList.php',
        'oetagsTagSet'         => 'oe/oetags/models/oetagsTagSet.php',
        'oetagsSeoEncoderTag'  => 'oe/oetags/models/oetagsSeoEncoderTag.php',
        'oetagsArticleTagList' => 'oe/oetags/models/oetagsArticleTagList.php',
        'oetagsTagCloudWidget' => 'oe/oetags/components/widgets/oetagsTagCloudWidget.php',
        'oetagsTagController'  => 'oe/oetags/controllers/oetagsTagController.php',
        'oetagsTagsController' => 'oe/oetags/controllers/oetagsTagsController.php',
    ],
    'templates'   => [
        'widget/sidebar/tags.tpl'       => 'oe/oetags/views/widgets/sidebar/tags.tpl',
        'page/details/inc/tags.tpl'     => 'oe/oetags/views/azure/tpl/page/details/inc/tags.tpl',
        'page/oetagstagscontroller.tpl' => 'oe/oetags/views/tpl/page/oetagstagscontroller.tpl',
    ],
    'blocks'      => [
        ['template' => 'layout/base.tpl', 'block' => 'base_style', 'file' => 'views/blocks/oetags_css.tpl'],

        //admin
        [
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_extended',
            'file'     => 'views/blocks/article_main_extended.tpl',
        ],
        [
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_extended_errorbox',
            'file'     => 'views/blocks/article_main_extended_errorbox.tpl',
        ],
        [
            'template' => 'object_seo.tpl',
            'block'    => 'object_seo_extended',
            'file'     => 'views/blocks/object_seo_extended.tpl',
        ],
        [
            'template' => 'object_seo.tpl',
            'block'    => 'object_seo_custreadonly',
            'file'     => 'views/blocks/object_seo_custreadonly.tpl',
        ],

        //azure
        [
            'theme'    => 'azure',
            'template' => 'layout/sidebar.tpl',
            'block'    => 'sidebar_tags',
            'file'     => 'views/blocks/azure/sidebar_tags.tpl',
        ],
        [
            'theme'    => 'azure',
            'template' => 'page/details/inc/tabs.tpl',
            'block'    => 'details_tabs_tags',
            'file'     => 'views/blocks/azure/details_tabs_tags.tpl',
        ],
        [
            'theme'    => 'azure',
            'template' => 'widget/sidebar/categorytree.tpl',
            'block'    => 'categorytree_extended',
            'file'     => 'views/blocks/azure/categorytree_tagcloud.tpl',
        ],
        [
            'theme'    => 'azure',
            'template' => 'page/oetagstagscontroller.tpl',
            'block'    => 'page_oetagscontroller',
            'file'     => 'views/blocks/azure/page_oetagscontroller.tpl',
        ],

        //flow
        [
            'theme'    => 'flow',
            'template' => 'layout/sidebar.tpl',
            'block'    => 'sidebar_tags',
            'file'     => 'views/blocks/flow/sidebar_tags.tpl',
        ],
        [
            'theme'    => 'flow',
            'template' => 'page/details/inc/tabs.tpl',
            'block'    => 'details_tabs_tags',
            'file'     => 'views/blocks/flow/details_tabs_tags.tpl',
        ],
        [
            'theme'    => 'flow',
            'template' => 'page/oetagstagscontroller.tpl',
            'block'    => 'page_oetagscontroller',
            'file'     => 'views/blocks/flow/page_oetagscontroller.tpl',
        ],

        //wave
        // no sidebar here
        [
            'theme'    => 'wave',
            'template' => 'page/details/inc/tabs.tpl',
            'block'    => 'details_tabs_tags',
            'file'     => 'views/blocks/wave/details_tabs_tags.tpl',
        ],
        [
            'theme'    => 'wave',
            'template' => 'page/oetagstagscontroller.tpl',
            'block'    => 'page_oetagscontroller',
            'file'     => 'views/blocks/wave/page_oetagscontroller.tpl',
        ],

        //moga
        // no sidebar here
        [
            'theme'    => 'moga',
            'template' => 'page/details/inc/tabs.tpl',
            'block'    => 'details_tabs_tags',
            'file'     => 'views/blocks/moga/details_tabs_tags.tpl',
        ],
        [
            'theme'    => 'moga',
            'template' => 'page/oetagstagscontroller.tpl',
            'block'    => 'page_oetagscontroller',
            'file'     => 'views/blocks/moga/page_oetagscontroller.tpl',
        ],

        //custom theme (note: structure needs to be as wave or make own tags module that overrides this module settings)
        [
            'template' => 'page/details/inc/tabs.tpl',
            'block'    => 'details_tabs_tags',
            'file'     => 'views/blocks/wave/details_tabs_tags.tpl',
        ],
        [
            'template' => 'page/oetagstagscontroller.tpl',
            'block'    => 'page_oetagscontroller',
            'file'     => 'views/blocks/wave/page_oetagscontroller.tpl',
        ],
    ],
    'settings'    => [
        ['group' => 'main', 'name' => 'oetagsShowTags', 'type' => 'bool', 'value' => '1'],
        ['group' => 'main', 'name' => 'oetagsAllowEdit', 'type' => 'bool', 'value' => '0'],
        ['group' => 'main', 'name' => 'oetagsSeparator', 'type' => 'str', 'value' => ','],
        ['group' => 'main', 'name' => 'oetagsUri', 'type' => 'str', 'value' => 'tag'],
        //enter seo url name option, how to multi lang?
        [
            'group' => 'main',
            'name'  => 'oetagsMetaDescription',
            'type'  => 'str',
            'value' => 'Tags Meta Description',
        ],
        ['group' => 'main', 'name' => 'oetagsMetaKeywords', 'type' => 'str', 'value' => 'keywords'],
    ],
    'events'      => [
        'onActivate'   => 'oetagsModule::onActivate',
        'onDeactivate' => 'oetagsModule::onDeactivate',
    ],
];
