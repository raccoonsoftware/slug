<?php
    /**
     * Created by PhpStorm.
     * User: mehmet
     * Date: 15.11.2015
     * Time: 16:10
     */

    namespace RaccoonSoftware\Slug\Facade;


    use Illuminate\Support\Facades\Facade;

    class Slug extends Facade
    {
        protected static function getFacadeAccessor() { return 'slug'; }

    }