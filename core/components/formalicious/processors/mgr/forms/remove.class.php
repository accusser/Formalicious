<?php

/**
 * Formalicious
 *
 * Copyright 2019 by Sterc <modx@sterc.nl>
 */

class FormaliciousFormRemoveProcessor extends modObjectRemoveProcessor {
    /**
     * @access public.
     * @var String.
     */
    public $classKey = 'FormaliciousForm';
    /**
     * @access public.
     * @var Array.
     */
    public $languageTopics = ['formalicious:default'];

    /**
     * @access public.
     * @var String.
     */
    public $objectType = 'formalicious.form';

    /**
     * @access public.
     * @return Mixed.
     */
    public function initialize()
    {
        $this->modx->getService('formalicious', 'Formalicious', $this->modx->getOption('formalicious.core_path', null, $this->modx->getOption('core_path') . 'components/formalicious/') . 'model/formalicious/');

        return parent::initialize();
    }

    /**
     * @access public.
     * @return Mixed.
     */
    public function afterRemove()
    {
        foreach ($this->object->getMany('Steps') as $step) {
            foreach ($step->getMany('Fields') as $field) {
                foreach ($field->getMany('Answers') as $anwer) {
                    $anwer->remove();
                }

                $field->remove();
            }

            $step->remove();
        }

        return parent::afterRemove();
    }
}

return 'FormaliciousFormRemoveProcessor';
