<?php
namespace app\models;

class KnowledgeBase
{
    private $data = [
        'Тема 1' => [
            'Подтема 1.1' => 'Некий текст, привязанный к Подтеме 1.1',
            'Подтема 1.2' => 'Некий текст, привязанный к Подтеме 1.2',
            'Подтема 1.3' => 'Некий текст, привязанный к Подтеме 1.3',
        ],
        'Тема 2' => [
            'Подтема 2.1' => 'Некий текст, привязанный к Подтеме 2.1',
            'Подтема 2.2' => 'Некий текст, привязанный к Подтеме 2.2',
            'Подтема 2.3' => 'Некий текст, привязанный к Подтеме 2.3',
        ],
    ];

    public function getThemes()
    {
        return array_keys($this->data);
    }

    public function getSubthemes($theme)
    {
        return isset($this->data[$theme]) ? array_keys($this->data[$theme]) : [];
    }

    public function getContent($theme, $subtheme)
    {
        return $this->data[$theme][$subtheme] ?? '';
    }
}

