
<?php



// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        'My new content',
        'fluidstyled_newcontentelement',
        'your-icon-identifier',
    ],
    'textmedia',
    'after'
);


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['fluidstyled_newcontentelement'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
       --palette--;;general,


       header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header,
       subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel,


       image;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
       bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
    
       starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
       endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,

       

    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
       --palette--;;hidden,*
       --palette--;;access,
 ',
'columnsOverrides' => [
 'bodytext' => [
    'config' => [
       'enableRichtext' => true,
       'richtextConfiguration' => 'default',
    ],
 ],
],
];


///////////////////////////////////// add CE footer Teaser

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        'CE Footer Teaser',
        'fluidstyled_footerteaser',
        'your-icon-identifier',
    ],
    'textmedia',
    'after'
);


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['fluidstyled_footerteaser'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
       --palette--;;general,


       media;LLL:EXT:fluidstyled/Resources/Private/Language/locallang_ttc.xlf:media,
       image;LLL:EXT:fluidstyled/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
       header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header,
       subheader;LLL:EXT:fluidstyled/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel,

       header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
    
       starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
       endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,

       

    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
       --palette--;;hidden,*
       --palette--;;access,
 ',
'columnsOverrides' => [
 'bodytext' => [
    'config' => [
       'enableRichtext' => true,
       'richtextConfiguration' => 'default',
    ],
    
 ],
],
];
//////////////////////////////////////////////////// image teaser



///////////////////////////////////// add CE footer Teaser

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
    [
        'CE Image Teaser',
        'fluidstyled_imageteaser',
        'your-icon-identifier',
    ],
    'textmedia',
    'after'
);


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['fluidstyled_imageteaser'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
       --palette--;;general,

       image;LLL:EXT:fluidstyled/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
       bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,

    

       

    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
       --palette--;;hidden,*
       --palette--;;access,
 ',
 



];
////////////////////////////////////////////////////////////////////
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
   'tt_content',
   'CType',
   [
       'My new Content for teaser',
       'my_extension_my_slider',
       'my-slider',
   ],
   'textmedia',
   'after'
);

$temporaryColumns = Array(
   "color" => Array(
       'label' => 'Choose color',
       'config' => Array(
           'type' => 'input',
           'renderType' => 'colorpicker',
           'size' => 10
       )
   )
   ,
   'contentimage' => array(
      'exclude' => 0,
      'label' => 'Image Teaser',
      'config' => [
          'type' => 'inline',
          'foreign_table' => 'contentimage',
          'foreign_field' => 'parent_uid',
          'foreign_sortby' => 'sorting',
          'appearance' => array(
              'collapseAll' => 1,
              'useSortable' => 1,
              'newRecordLinkPosition' => 'top',
//		        'showSynchronizationLink' => 1,
//                'showRemovedLocalizationRecords' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1
          ),
          'behaviour' => array(
//                'localizeChildrenAtParentLocalization' => 1
//                'allowLanguageSynchronization' => 1,
          )
      ]
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$temporaryColumns);


// 'image' => [
//    'exclude' => 0,
//    'label' => 'Image Teaser',
//    'config' => [
//        'type' => 'file',
//    ],
// ],
//   'link' => [
//    'exclude' => 0,
//    'label' => 'Text',
//    'config' => [
//        'type' => 'link',
//    ],
// ],


//commentaire tca image teaser
// $GLOBALS['TCA']['tt_content']['types']['my_extension_my_slider'] = [
//    'showitem' => '
//       --palette--;;,image;Image Teaser,
//       color,
//       bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
//       header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,



//    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
//    --palette--;;hidden,*
//    --palette--;;access,
//    ',
   
$GLOBALS['TCA']['tt_content']['types']['my_extension_my_slider'] = [
   'showitem' => '
   --palette--;,
   contentimage '
 


];









// ];

////////////////////////////////////////////////// 
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
//    array(
//       'LLL:EXT:your_extension_key/Resources/Private/Language/locallang.xlf:header_with_title.title',
//       'header_with_title',
//       'EXT:your_extension_key/Resources/Public/Icons/ContentElements/header_with_title.svg'
//    ),
//    'CType',
//    'your_extension_key'
// );



// $GLOBALS['TCA']['tt_content']['types']['header_with_title'] = array(
//    'showitem' => '
//    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
//    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
//    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,

//    --div--;LLL:EXT:your_extension_key/Resources/Private/Language/locallang.xlf:foundation_slider_title.tab,
//    --palette--;--linebreak--,slider_settings_relation,
//    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
//    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
//    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
//    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
//    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
//    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended',
//  );
//  $originalSliderContent = $GLOBALS['TCA']['tt_content'];
//  $overridesForSliderContent = [
//    'ctrl' => [
//      'typeicon_classes' => [
//        'header_with_title' => 'HeaderWithTitle',
//      ]
//    ]
//  ];
//  $GLOBALS['TCA']['tt_content'] = array_merge_recursive($originalSliderContent, $overridesForSliderContent);
//  $foundationSliderOptions = array(
//    'slider_settings_relation' => [
//      'exclude' => 1,
//      'label' => 'LLL:EXT:fluidstyled/Resources/Private/Language/locallang.xlf:foundation_slider_description',
//      'config' => [
//        'type' => 'inline',
//        'foreign_table' => 'foundation_zurb_slidersettings',
//        'maxitems' => 1,
//        'appearance' => [
//            'collapseAll' => 0,
//            'levelLinksPosition' => 'top',
//            'showSynchronizationLink' => 1,
//            'showPossibleLocalizationRecords' => 1,
//            'showAllLocalizationLink' => 1
//        ],
//      ],
//    ],
//  );
//  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$foundationSliderOptions);