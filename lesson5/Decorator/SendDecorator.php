<?php


abstract class SendDecorator implements ISend
{
    protected $content = null;

    public function __construct(ISend $content) {
        $this->content = $content;
    }
}