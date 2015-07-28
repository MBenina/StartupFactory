<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
class Foo
{
    var $prop;

    function __construct($boo)
    {
        $this->prop = $boo;
    }

    function boo()
    {
        echo "<p> $this->prop </p>";
    }

    function printClassName(){
        echo $this->getName();
    }

    function getName(){
        return get_class($this);
    }
}
$myFirstObject = new Foo("This is Property");
$myFirstObject->boo(); //Output: This is Property
$FooObj = new Foo("Test");
$FooObj->printClassName();

?>
</body>
</html>