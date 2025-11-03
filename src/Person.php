<?php
namespace Hidenari\ComposerTwo;

class Person
{
    private $name = 'taro';

    public function getName(): string
    {
        return $this->name;
    }
}