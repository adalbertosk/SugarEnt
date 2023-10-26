<?php
    $viewdefs['base']['layout']['reject_popup'] = array(
        'type' => 'simple',
        'components' => array(
            array(
                'layout' => array(
                    'type' => 'default',
                    'name' => 'reject_popup',
                    'components' => array(
                        array(
                            'layout' => array(
                                'type' => 'base',
                                'name' => 'main-pane',
                                'css_class' => 'main-pane span8',
                                'components' => array(
                                    array(
                                        'view' => 'reject_popup'
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    );