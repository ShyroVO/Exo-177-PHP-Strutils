<?php
class StrUtils {

    private string $str;

    public function __construct($str){
        $this->setStr($str);
    }

    // STR
    public function getStr(): string
    {
        return $this->str;
    }

    public function setStr(string $str): void
    {
        $this->str = $str;
    }

}