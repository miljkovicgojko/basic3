<?php

class TestController extends BaseController {

    public function showTest() 
    {
        return View::make('test');
    }
}
