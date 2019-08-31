<?php

class Degree {

    private $template;
    private $degree;

    public function __construct() {
        $this->template = new Template();
        $this->degree = new DegreeModel();
        $this->valid = new Validation();
    }

    function indexAction() {

        $this->template->render("home");
    }

    function chooseexamAction() {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $m_id = $_POST['m_id'];
            header("location:index.php?rt=Degree/add&m_id={$m_id}");
        }
        $this->template->render("D/choose");
    }

    function addAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->degree->e_id = $_POST['m_id'];
            $this->degree->d_degree = $_POST['d_degree'];
            $this->degree->s_id = $_POST['s_id'];
            if ($this->degree->insert() >= 1) {
                $this->template->msg = 1;
            } else {
                $this->template->msg = -1;
            }
        }
        $this->template->m_id = $_GET['m_id'];
        $this->template->render("D/add");
    }

    function editAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->degree->e_id = $_POST['m_id'];
            $this->degree->d_degree = $_POST['d_degree'];
            $this->degree->s_id = $_POST['s_id'];
            if ($this->degree->update($_POST['d_id']) >= 1) {
                $this->template->msg = 1;
            } else {
                $this->template->msg = -1;
            }
        }
        $this->template->dataa = $this->degree->get_by_id($_GET['d_id']);
        $this->template->render("D/edit");
    }

    function listAction() {
        $this->template->render('D/list');
    }

    function deleteAction() {
        $this->degree->delete($_GET['d_id']);
        $this->template->render('D/list');
    }

}
