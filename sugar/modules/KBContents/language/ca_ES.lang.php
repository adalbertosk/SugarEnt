<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array (
    // Dashboard Names
    'LBL_KBCONTENTS_LIST_DASHBOARD' => 'Quadre de comandament del Llistat de la base de coneixement',
    'LBL_KBCONTENTS_RECORD_DASHBOARD' => 'Quadre de comandament del Registre de la base de coneixement',
    'LBL_KBCONTENTS_FOCUS_DRAWER_DASHBOARD' => 'Calaix centrat a la base de coneixement',

    'LBL_MODULE_NAME' => 'Knowledge Base',
    'LBL_MODULE_NAME_SINGULAR' => 'Article de la Knowledge Base',
    'LBL_MODULE_TITLE' => 'Article de la Knowledge Base',
    'LNK_NEW_ARTICLE' => 'Crear Article',
    'LNK_LIST_ARTICLES' => 'Veure articles',
    'LNK_KNOWLEDGE_BASE_ADMIN_MENU' => 'Configuració',
    'LBL_EDIT_LANGUAGES' => 'Editar llengües',
    'LBL_ADMIN_LABEL_LANGUAGES' => 'Llengües disponibles',
    'LBL_CONFIG_LANGUAGES_TITLE' => 'Llengües disponibles',
    'LBL_CONFIG_LANGUAGES_TEXT' => 'Configurar les llengües que s&#39;utilitzaran al mòdul Base de coneixement.',
    'LBL_CONFIG_LANGUAGES_LABEL_KEY' => 'Codi de llengüa',
    'LBL_CONFIG_LANGUAGES_LABEL_NAME' => 'Etiqueta de llengüa',
    'ERR_CONFIG_LANGUAGES_DUPLICATE' => 'No es poden afegir llengües amb el botó que duplica una existent.',
    'ERR_CONFIG_LANGUAGES_EMPTY_KEY' => 'The Language Code field is empty, please enter values before saving.',
    'ERR_CONFIG_LANGUAGES_EMPTY_VALUE' => 'The Language Label field is empty, please enter values before saving.',
    'LBL_SET_ITEM_PRIMARY' => 'Establir Valor com Primari',
    'LBL_ITEM_REMOVE' => 'Eliminar element',
    'LBL_ITEM_ADD' => 'Afegir element',
    'LBL_MODULE_ID'=> 'KBContents',
    'LBL_DOCUMENT_REVISION_ID' => 'ID de revisió',
    'LBL_DOCUMENT_REVISION' => 'Revisió',
    'LBL_NUMBER' => 'Número',
    'LBL_TEXT_BODY' => 'Cos',
    'LBL_LANG' => 'Idioma',
    'LBL_PUBLISH_DATE' => 'Data de Publicació',
    'LBL_EXP_DATE' => 'Data de Caducitat',
    'LBL_DOC_ID' => 'ID del document',
    'LBL_APPROVED' => 'Aprovat',
    'LBL_REVISION' => 'Revisió',
    'LBL_ACTIVE_REV' => 'Activar revisió',
    'LBL_IS_EXTERNAL' => 'Article extern',
    'LBL_KBDOCUMENT_ID' => 'ID de KBDocument',
    'LBL_KBDOCUMENTS' => 'KBDocuments',
    'LBL_KBDOCUMENT' => 'KBDocument',
    'LBL_KBARTICLE' => 'Article',
    'LBL_KBARTICLES' => 'Articles',
    'LBL_KBARTICLE_ID' => 'ID d&#39;article',
    'LBL_USEFUL' => 'Útil',
    'LBL_NOT_USEFUL' => 'Inútil',
    'LBL_RATING' => 'Rating',
    'LBL_VIEWED_COUNT' => 'Veure compte',
    'LBL_CATEGORIES' => 'Categories de Base de coneixements',
    'LBL_CATEGORY_NAME' => 'Categoria',
    'LBL_USEFULNESS' => 'Utilitat',
    'LBL_CATEGORY_ID' => 'ID de categoria',
    'LBL_KBSAPPROVERS' => 'Aprovadors',
    'LBL_KBSAPPROVER_ID' => 'Aprovat per',
    'LBL_KBSAPPROVER' => 'Aprovat per',
    'LBL_KBSCASES' => 'Casos',
    'LBL_KBSCASE_ID' => 'Cas relacionat',
    'LBL_KBSCASE' => 'Cas relacionat',
    'LBL_MORE_MOST_USEFUL_ARTICLES' => 'Articles de la base de coneixement més útils dels publicats...',
    'LBL_KBSLOCALIZATIONS' => 'Localitzacions',
    'LBL_LOCALIZATIONS_SUBPANEL_TITLE' => 'Localitzacions',
    'LBL_KBSREVISIONS' => 'Versions',
    'LBL_REVISIONS_SUBPANEL_TITLE' => 'Versions',
    'LBL_LISTVIEW_FILTER_ALL' => 'Tots els articles',
    'LBL_LISTVIEW_FILTER_MY' => 'Els meus articles',
    'LBL_CREATE_LOCALIZATION_BUTTON_LABEL' => 'Crear localització',
    'LBL_CREATE_REVISION_BUTTON_LABEL' => 'Crear revisió',
    'LBL_CANNOT_CREATE_LOCALIZATION' =>
        'No es pot crear una localització nova perquè existeix una versió de localització per a totes les llengües disponibles.',
    'LBL_SPECIFY_PUBLISH_DATE' => 'Schedule this article to be published by specifying the Publish Date. Do you wish to continue without updating a Publish Date?',
    'LBL_MODIFY_EXP_DATE_LOW' => 'La data de caducitat és anterior a la data de publicació. Voleu continuar sense modificar la data de caducitat?',
    'LBL_PANEL_INMORELESS' => 'Utilitat',
    'LBL_MORE_OTHER_LANGUAGES' => 'Més llengües...',
    'EXCEPTION_VOTE_USEFULNESS_NOT_AUTHORIZED' => 'No té autorització per votar la utilitat/no utilitat {moduleName}. Posi&#39;s en contacte amb el seu administrador si necessita accés.',
    'LNK_NEW_KBCONTENT_TEMPLATE' => 'Crear plantilla',
    'LNK_LIST_KBCONTENT_TEMPLATES' => 'Veure plantilles',
    'LNK_LIST_KBCATEGORIES' => 'Veure categories',
    'LBL_TEMPLATES' => 'Plantilles',
    'LBL_TEMPLATE' => 'Plantilla',
    'LBL_TEMPATE_LOAD_MESSAGE' => 'La plantilla sobreescriurà tot el contingut.' .
        ' Esteu segur de voler utilitzar aquesta plantilla?',
    'LNK_IMPORT_KBCONTENTS' => 'Importar articles',
    'LBL_DELETE_CONFIRMATION_LANGUAGE' => 'S&#39;eliminaran tots els documents amb aquesta llengua. Està segur de voler eliminar-la?',
    'LBL_CREATE_CATEGORY_PLACEHOLDER' => 'Premi Intro per crear o Esc per cancel·la',
    'LBL_KB_NOTIFICATION' => 'S&#39;ha publicat el document.',
    'LBL_KB_PUBLISHED_REQUEST' => 'li ha assignat un Document per aprovació i publicació.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'S&#39;ha tornat a canviar l&#39;estat del document a esborrany.',
    'LBL_OPERATOR_CONTAINING_THESE_WORDS' => 'que conté aquestes paraules',
    'LBL_OPERATOR_EXCLUDING_THESE_WORDS' => 'que exclogui aquestes paraules',
    'ERROR_EXP_DATE_LOW' => 'La data de caducitat no pot ser abans de la data de la publicació.',
    'ERROR_ACTIVE_DATE_APPROVE_REQUIRED' => 'L&#39;estat Aprovat necessita una data de publicació.',
    'ERROR_ACTIVE_DATE_LOW' => 'The Publish Date must occur on a later date than today&#39;s date.',
    'ERROR_ACTIVE_DATE_EMPTY' => 'La data de publicació està en blanc.',
    'LBL_RECORD_SAVED_SUCCESS' => 'Heu creat correctament el {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a>.', // use when a model is available
    'ERROR_IS_BEFORE' => 'Error. La data d&#39;aquest camp ha de ser posterior a la del camp {{this}}.',
    'TPL_SHOW_MORE_MODULE' => 'Més articles de {{module}}...',
    'LBL_LIST_FORM_TITLE' => 'Llista de Base de coneixement',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca a la Base de coneixement',
);
