<?php
class StrUtils {

    private $str;

    public function __construct($str){
        $this->setStr($str);
    }

    // Bold
    public function bold($str){
        $this->setStr($str);
        echo "<div><b>".$this->getStr()."</b></div><br>";
    }

    // Italic
    public function italic($str){
        $this->setStr($str);
        echo "<div><i>".$this->getStr()."</i></div><br>";
    }

    // Underline
    public function underline($str){
        $this->setStr($str);
        echo "<div><u>".$this->getStr()."</u></div><br>";
    }

    // Capitalize
    public function capitalize($str){
        $this->setStr(strtoupper($str));
        echo "<div>". $this->getStr(). "</div><br>";
    }

    // Uglify
    public function uglify($str){
        $this->setStr(strtoupper($str));
        echo "<div><b><i><u>".$this->getStr()."</u></i></b></div><br>";
    }

    // Str Get
    public function getStr(): string
    {
        return $this->str;
    }
    // Str Set
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

}