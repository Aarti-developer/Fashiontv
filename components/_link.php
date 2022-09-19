
<?php
class Link{
    public $href;
    public $text;
    public $title;
    public $data;

    function __construct($href,$text, $title, $disabled=false)
    {
        $this->href = $href;
        $this->text = $text;
        $this->title = $title;
        $url = $_SERVER['REQUEST_URI'];
        if($href == $url){
            echo "<li class='nav-item' ".($disabled?"disabled":"") ."><a class='nav-link active' aria-current='page' data-hover='".$text."' href='".$href."' title='".$text."'>".$text."</a></li>";
        }
        else{
            echo "<li class='nav-item' ".($disabled?"disabled":"") ."><a class='nav-link' data-hover='".$text."' href='".$href."' title='".$title."'>".$text."</a></li>";
        }
    }
}
?>
