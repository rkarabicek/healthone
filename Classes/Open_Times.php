<?php
class Open_Times
{
    public $id;
    public $day;
    public $opening_time;
    public $closing_time;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}