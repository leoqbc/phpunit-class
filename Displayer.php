<?php
namespace App;

class Displayer
{
    protected $content;

    public function __construct(iterable $data, ContentType $content)
    {
        $this->content = $content;
        $this->content->parse($data);
    }

    public function show()
    {
        return $this->content->getString();
    }
}