<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Node having data, left and right
 */
class Node
{
    public $data;
    public $left = null;
    public $right = null;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __toString()
    {
        return $this->data;
    }
}
