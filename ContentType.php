<?php
namespace App;

interface ContentType
{
    public function parse(iterable $data) : void;
    public function getString() : string;
}