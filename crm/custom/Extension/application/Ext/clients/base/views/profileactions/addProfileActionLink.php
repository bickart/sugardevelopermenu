<?php

$viewdefs['base']['view']['profileactions'][] = array(
    'route' => '#bwc/index.php?module=Administration&action=repair',
    'label' => 'LNK_QRR',
    'icon' => 'sicon-diagnostics',
    'acl_action' => 'studio',
    'acl_module' => 'Administration',
);

$viewdefs['base']['view']['profileactions'][] = array(
    'route' => '#bwc/index.php?module=ModuleBuilder&action=index&type=studio',
    'label' => 'LNK_STUDIO',
    'icon' => 'sicon-studio',
    'acl_action' => 'studio',
    'acl_module' => 'Administration',
);

$viewdefs['base']['view']['profileactions'][] = array(
    'route' => '#bwc/index.php?module=Administration&action=Upgrade',
    'label' => 'LBL_REPAIR',
    'icon' => 'sicon-repair',
    'acl_action' => 'studio',
    'acl_module' => 'Administration',
);