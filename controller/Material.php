<?php

class Material {

    private $template;
    private $material;
    private $book;
    private $exam;



    public function __construct() {
        $this->template = new Template();
        $this->material = new MaterialModel();
        $this->book=new BookModel();
        $this->valid = new Validation();
        $this->exam=new ExamModel();
        
    }

    function indexAction() {

        $this->template->render("home");
    }

    function addAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->material->m_name=$_POST['m_name'];
            $this->material->m_teacher=$_POST['m_teacher'];
            $this->material->m_money=$_POST['m_money'];
            $this->material->m_details=$_POST['m_details'];
            $this->material->m_primary=$_POST['m_primary'];
            if ($this->material->insert()>=1) {
                $this->template->msg=1;
            }else{
                $this->template->msg=-1;
            }
        }
        $this->template->render("M/material");
    }
    function editAction() {

        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            $this->material->m_name=$_POST['m_name'];
            $this->material->m_teacher=$_POST['m_teacher'];
            $this->material->m_money=$_POST['m_money'];
            $this->material->m_details=$_POST['m_details'];
            $this->material->m_primary=$_POST['m_primary'];
            if ($this->material->update($_POST['m_id'])>=1) {
                $this->template->msg=1;
            }else{
                $this->template->msg=-1;
            }
        }
        $this->template->data=$this->material->get_by_id($_GET['m_id']);
        $this->template->render("M/edit");
    }

    function listAction(){
        $this->template->render('m/list');
    }
     function deleteAction() {
        $this->material->delete($_GET['m_id']);
        $this->book->deletematerial($_GET['m_id']);
        $this->exam->delete_material_exam($_GET['m_id']);
        $this->template->render('m/list');
    }
}
