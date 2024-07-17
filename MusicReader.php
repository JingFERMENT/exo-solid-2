<?php

class MusicReader
{
    // this property is only accessible in this class
    private $musicType;

    // this concept is named "type declaration"
    // it means that the parameter must be an instance of the class "MusicType"
    // this concept is included not only for the direct instance 
    // but also for all the classes inherited from 'MusicType"
    public function __construct(MusicType $musicType)
    {
        $this->musicType = $musicType;
    }

    public function listen()
    {
        return $this->musicType->listen();
    }
}
