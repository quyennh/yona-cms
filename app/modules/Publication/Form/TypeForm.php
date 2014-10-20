<?php
/**
 * @copyright Copyright (c) 2011 - 2014 Oleksandr Torosh (http://wezoom.net)
 * @author Oleksandr Torosh <web@wezoom.net>
 */

namespace Publication\Form;

use Application\Form\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Publication\Model\Type;

class TypeForm extends Form
{

    public function initialize()
    {
        $this->add((new Text('title', array('required' => true)))->setLabel('Название'));
        $this->add((new Text('slug', array('required' => true, 'data-description' => 'Например: articles')))->setLabel('URL раздела'));
        $this->add((new Text('head_title'))->setLabel('Title'));
        $this->add((new Text('meta_description'))->setLabel('Meta-description'));
        $this->add((new Text('meta_keywords'))->setLabel('Meta-keywords'));
        $this->add((new Text('seo_text'))->setLabel('SEO-текст'));
        $this->add((new Text('limit'))->setDefault(10)->setLabel('Кол-во публикаций на странице'));
        $this->add((new Select('format', Type::$formats))->setLabel('Формат вывода публикаций'));

    }

} 