<?php

/**
 * Formalicious
 *
 * Copyright 2019 by Sterc <modx@sterc.nl>
 */

$xpdo_meta_map['FormaliciousField'] = array(
    'package'       => 'formalicious',
    'version'       => '1.0',
    'table'         => 'formalicious_fields',
    'extends'       => 'xPDOSimpleObject',
    'tableMeta'     => array(
        'engine'        => 'MyISAM'
    ),
    'fields'        => array(
        'id'            => '',
        'step_id'       => '',
        'title'         => '',
        'placeholder'   => '',
        'description'   => '',
        'directional'   => 0,
        'type'          => 0,
        'required'      => 0,
        'published'     => 1,
        'rank'          => '',
        'property'      => ''
    ),
    'fieldMeta'     => array(
        'step_id'       => array(
            'dbtype'        => 'int',
            'precision'     => '10',
            'phptype'       => 'integer',
            'null'          => false,
            'default'       => 0,
            'index'         => 'index'
        ),
        'title'         => array(
            'dbtype'        => 'varchar',
            'precision'     => '255',
            'phptype'       => 'string',
            'null'          => false,
            'default'       => ''
        ),
        'placeholder'   => array(
            'dbtype'        => 'varchar',
            'precision'     => '255',
            'phptype'       => 'string',
            'null'          => false,
            'default'       => ''
        ),
        'description'   => array(
            'dbtype'        => 'text',
            'phptype'       => 'string',
            'null'          => false,
            'default'       => ''
        ),
        'directional'   => array(
            'dbtype'        => 'tinyint',
            'precision'     => '1',
            'attributes'    => 'unsigned',
            'phptype'       => 'boolean',
            'null'          => false,
            'default'       => 0
        ),
        'type'          => array(
            'dbtype'        => 'int',
            'precision'     => '10',
            'phptype'       => 'integer',
            'null'          => false,
            'default'       => 0,
            'index'         => 'index'
        ),
        'required'      => array (
            'dbtype'        => 'tinyint',
            'precision'     => '1',
            'attributes'    => 'unsigned',
            'phptype'       => 'boolean',
            'null'          => false,
            'default'       => 0
        ),
        'published'     => array (
            'dbtype'        => 'tinyint',
            'precision'     => '1',
            'attributes'    => 'unsigned',
            'phptype'       => 'boolean',
            'null'          => false,
            'default'       => 0,
            'index'         => 'index',
        ),
        'rank'          => array(
            'dbtype'        => 'int',
            'precision'     => '10',
            'phptype'       => 'integer',
            'null'          => false,
            ),
        'property'      => array(
            'dbtype'        => 'varchar',
            'precision'     => '255',
            'phptype'       => 'string',
            'null'          => false,
            'default'       => ''
        )
    ),
    'indexes'       => array(
        'PRIMARY'       => array(
            'alias'         => 'PRIMARY',
            'primary'       => true,
            'unique'        => true,
            'columns'       => array(
                'id'            => array(
                    'collation'     => 'A',
                    'null'          => false
                )
            )
        ),
        'step_id'       => array(
            'alias'         => 'step_id',
            'primary'       => false,
            'unique'        => false,
            'type'          => 'BTREE',
            'columns'       => array(
                'step_id'       => array(
                    'length'        => '',
                    'collation'     => 'A',
                    'null'          => false
                )
            )
        ),
        'published'     => array(
            'alias'         => 'published',
            'primary'       => false,
            'unique'        => false,
            'type'          => 'BTREE',
            'columns'       => array(
                'published'     => array(
                    'length'        => '',
                    'collation'     => 'A',
                    'null'          => false
                )
            )
        ),
        'rank'      => array(
            'alias'     => 'rank',
            'primary'   => false,
            'unique'    => false,
            'type'      => 'BTREE',
            'columns'   => array(
                'rank'      => array(
                    'length'    => '',
                    'collation' => 'A',
                    'null'      => false
                )
            )
        )
    ),
    'composites'    => array(
        'Answers'       => array(
            'class'         => 'FormaliciousAnswer',
            'local'         => 'id',
            'foreign'       => 'field_id',
            'cardinality'   => 'many',
            'owner'         => 'local'
        )
    ),
    'aggregates'    => array(
        'Step'          => array(
            'class'         => 'FormaliciousStep',
            'local'         => 'step_id',
            'foreign'       => 'id',
            'cardinality'   => 'one',
            'owner'         => 'foreign'
        ),
        'Type'          => array(
            'class'         => 'FormaliciousFieldType',
            'local'         => 'type',
            'foreign'       => 'id',
            'cardinality'   => 'one',
            'owner'         => 'foreign'
        )
    )
);
