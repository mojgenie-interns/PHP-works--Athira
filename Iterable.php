<?Php
$names =array("Athira\n","Mariya\n","Anagaha\n");
foreach ($names as $name){          //Foreach 
       echo "Name is $name\n ";
}


class Myfruits implements Iterator
{
    private $fruit = ["banana","kiwi","orange","apple"];
    private $position = 0;

    public function current(): mixed
    
    {
      return $this->fruit[$this->position] ; 
    }
    public function next(): void
    
    {
        $this->position++;
    }
    public function key(): mixed
   
    {
        return $this->position;
    }
    public function valid(): bool
    
    {
        return isset($this->fruit[$this->position]);
    }
    public function rewind(): void
    

    {
      $this->position=0;  
    }
}

$obj = new Myfruits();
foreach ($obj as $fruit ){
    echo "\nfruit is\n".$fruit;
}
