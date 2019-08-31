<?php

class Student {

    private $template;
    private $student;
    private $book;
    private $degree;
    private $material;

    public function __construct() {
        $this->template = new Template();
        $this->student = new StudentModel();
        $this->book = new BookModel();
        $this->material=new MaterialModel();
        $this->valid = new Validation();
        $this->degree=new DegreeModel();
    }

    function indexAction() {

        $this->template->render("home");
    }

    function addAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->student->s_name = $_POST['s_name'];
            $this->student->s_phone = $_POST['s_phone'];
            $this->student->s_address = $_POST['s_address'];
            $this->student->s_details = $_POST['s_details'];
            if ($this->student->insert() >= 1) {
                $this->template->msg = 1;
            } else {
                $this->template->msg = -1;
            }
        }
        $this->template->render("S/student");
    }

    function editAction() {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->student->s_name = $_POST['s_name'];
            $this->student->s_phone = $_POST['s_phone'];
            $this->student->s_address = $_POST['s_address'];
            $this->student->s_details = $_POST['s_details'];
            if ($this->student->update($_POST['s_id']) >= 1) {
                $this->template->msg = 1;
            } else {
                $this->template->msg = -1;
            }
        }
        $this->template->data = $this->student->get_by_id($_GET['s_id']);
        $this->template->render('s/edit');
    }

    function listAction() {
        $this->template->render("s/list");
    }

    function deleteAction() {
        $this->student->delete($_GET['s_id']);
        $this->book->deletestudent($_GET['s_id']);
        $this->degree->delete_student($_GET['s_id']);
        $this->template->render('s/list');
    }

}
