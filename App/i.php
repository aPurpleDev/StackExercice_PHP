<?php

class I implements Iterator{

  public $position;

    public function __construct($position)
    {
    $this->position = $position;
    }

    function current () : mixed
    {
      return $this->position;
    }

    function key () : scalar
    {
      return $this->position;
    }

    function next () : void
    {
      ++$this->position;
    }

    function rewind () : void
    {
      $this->position = 0;
    }

    function valid () : bool
    {
      return isset($this->position);
    }
}

?>
