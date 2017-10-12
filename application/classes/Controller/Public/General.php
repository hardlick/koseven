<?php

class Controller_Public_General extends Controller_Template {

    public $template = 'public/layout';

    public function action_index() {
        $v_view= View::factory('public/general/index');
        $this->template->SYSTEM_BODY = $v_view;
    }

}

// End Welcome
