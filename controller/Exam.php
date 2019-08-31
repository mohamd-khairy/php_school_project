<?php

class Exam {

    private $template;
    private $exam;
    private $degree;



    public function __construct() {
        $this->template = new Template();
        $this->exam = new ExamModel();
        $this->degree=new DegreeModel();
        $this->valid = new Validation();
        
    }

    function indexAction() {

        $this->template->render("home");
    }

    function addAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->exam->e_date=$_POST['e_date'];
            $this->exam->e_degree=$_POST['e_degree'];
            $this->exam->e_details=$_POST['e_details'];
            $this->exam->e_time=$_POST['e_time'];
            $this->exam->m_id=$_POST['m_id'];
            if ($this->exam->insert()>=1) {
                $this->template->msg=1;
            }else{
                $this->template->msg=-1;
            }
        }
        $this->template->render("E/add");
    }
    function editAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->exam->e_date=$_POST['e_date'];
            $this->exam->e_degree=$_POST['e_degree'];
            $this->exam->e_details=$_POST['e_details'];
            $this->exam->e_time=$_POST['e_time'];
            $this->exam->m_id=$_POST['m_id'];
            
            if ($this->exam->update($_POST['e_id'])>=1) {
                $this->template->msg=1;
            }else{
                $this->template->msg=-1;
            }
        }
        $this->template->dataa=$this->exam->get_by_id($_GET['e_id']);
        $this->template->render("E/edit");
    }
    function listAction(){
        $this->template->render('E/list');
    }
    function deleteAction(){
        $this->exam->delete($_GET['e_id']);
        $this->degree->delete_exam($_GET['e_id']);
        $this->template->render('E/list');
    }

}

