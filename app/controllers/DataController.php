<?php

class DataController extends ControllerBase
{

    public function indexAction()
    {
    	$pegawai = Pegawai::find();
    	$this->view->pegawai = $pegawai;
    }

    public function createAction()
    {
    	$pegawai = new Pegawai();
    	$pegawai->nama_pegawai = $this->request->getPost("nama-pegawai");
    	$pegawai->email_pegawai = $this->request->getPost("email-pegawai");

    	if (!$pegawai->save()) {

    		$this->flash->danger('Gagal Menambah Pegawai');

    		// Forward to the index action
    		return $this->dispatcher->forward(
	            [
	                'action' => 'index'
	            ]
        	);

        	// Make a full HTTP redirection
        	// return $this->response->redirect('contact/index');
   			// $message = "Gagal Menambah Pegawai!";
			// echo "<script type='text/javascript'>alert('$message');</script>";
    	}
    	else {

    		$this->flash->success('Berhasil Menambah Pegawai');

    		// Forward to the index action
    		return $this->dispatcher->forward(
	            [
	                'action' => 'index'
	            ]
        	);

        	// Make a full HTTP redirection
        	// return $this->response->redirect('contact/index');
   			//$message = "Berhasil Menambah Pegawai!";
			// echo "<script type='text/javascript'>alert('$message');</script>";
    	}    	
    }

    public function updateAction($id) {
    	
    	$pegawai = Pegawai::findFirstByidPegawai($id);
    	$pegawai->nama_pegawai = $this->request->getPost("nama-pegawai");
    	$pegawai->email_pegawai = $this->request->getPost("email-pegawai");

    	if(!$pegawai->save()){

   			return $this->dispatcher->forward(
                [
                    'action' => 'index'
                ]
            );

    	} else {

    		return $this->dispatcher->forward(
                [
                    'action' => 'index'
                ]
            );

    	}
    }

    public function deleteAction($id) {

        $pegawai = Pegawai::findFirstByidPegawai($id);

        if(!$pegawai->delete()){

            $message = "Gagal Menghapus Pegawai!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return $this->dispatcher->forward(
                [
                    'action' => 'index'
                ]
            );

        } else {
            $message = "Berhasil Menghapus Pegawai!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            return $this->dispatcher->forward(
                [
                    'action' => 'index'
                ]
            );
        }

    }


}

