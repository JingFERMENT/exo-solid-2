<?php

// Abstract classes cannot be instantiated directly; 
// They are meant to be extended by other classes.

abstract class MusicType
{
    // protected property is only accessible within the class itself and by classes that inherit from it
    protected $filename;

    // the constructor is a special method that is called automatically 
    // when you create a new instance of the class 
    public function __construct($filename)
    {
        $this->filename = $filename;
    }
    // abstract method does not have a body.
    // class that extends from MusicType must implement this method.
    // in other words, the class that extends from MusicType must have its own version of 'listen' method.
    abstract public function listen();
}
