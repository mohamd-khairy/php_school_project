<?php

class Book {

    private $template;
    private $book;
    private $degree;

    public function __construct() {
        $this->template = new Template();
        $this->book = new BookModel();
        $this->degree=new DegreeModel();
        $this->valid = new Validation();
    }

    function indexAction() {

        $this->template->render("home");
    }

    function addAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->book->s_id = $_POST['s_id'];
            $this->book->m_id = $_POST['m_id'];
            $this->book->b_pay = $_POST['b_pay'];
            $this->book->b_date = $_POST['b_date'];
            $this->book->b_details = $_POST['b_details'];
            if ($this->book->insert() >= 1) {
                $this->template->msg = 1;
            } else {
                $this->template->msg = -1;
            }
        }
        $this->template->render("B/book");
    }

    function editAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->book->s_id = $_POST['s_id'];
            $this->book->m_id = $_POST['m_id'];
            $this->book->b_pay = $_POST['b_pay'];
            $this->book->b_date = $_POST['b_date'];
            $this->book->b_details = $_POST['b_details'];
            if ($this->book->update($_POST['b_id']) >= 1) {
                $this->template->msg = 1;
            } else {
                $this->template->msg = -1;
            }
        }
        $this->template->dataa = $this->book->get_by_id($_GET['b_id']);
        $this->template->render("B/edit");
    }

    function listAction() {
        $this->template->render('b/list');
    }

    function deleteAction() {
        $id=  BookModel::get_student__id($_GET['b_id']);
        $this->book->delete($_GET['b_id']);
        $this->degree->delete_student($id->s_id);
        $this->template->render('b/list');
    }

}
