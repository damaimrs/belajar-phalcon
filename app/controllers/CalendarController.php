<?php

class CalendarController extends ControllerBase
{

    public function indexAction()
    {
    	$pegawai = Pegawai::find();
		$this->view->pegawai = $pegawai;
    }

}

