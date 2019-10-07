<?php
class Lophoc
{
    #Begin properties
    var $STT;
    var $tuNam;
    var $denNam;
    var $Lop;
    var $noiHoc;
    var $thaoTac;
    #end properties
    #Construct function
    function __construct($STT,$tuNam, $denNam,  $Lop, $noiHoc, $thaoTac)
    {
        $this->STT= $STT;
        $this->tuNam = $tuNam;
        $this->denNam=$denNam;
        $this->Lop = $Lop;
        $this->noiHoc = $noiHoc;
        $this->thaoTac=$thaoTac;
    }
    #Member function
    function display()
    {
    

        echo "Price: " . $this->price . "<br>";
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}