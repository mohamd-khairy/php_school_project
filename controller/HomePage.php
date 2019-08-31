<?php

class HomePage {

    private $template;
    

    public function __construct() {
        $this->template = new Template();
        $this->valid = new Validation();
       
    }

    function indexAction() {
    
            $this->template->render("home");
        
    }

    function loginAction() {
        session_start();
        if (isset($_SESSION['user_id'])) {
            header("location:index.php");
        } else {
            if (strtolower($_SERVER["REQUEST_METHOD"]) == 'post') {
                try {
                    $rules = array(
                        "user_name" => "checkempty|checktext",
                        "user_password" => "checkempty|checkstring",
                    );
                    if (!$this->valid->validate($_POST, $rules)) {
                        $this->template->msg = 1;
                    }
                    $u = $this->user->user_name = $_POST['user_name'];
                    $p = $this->user->user_password = md5($_POST['user_password']);
                    $dataa = UserModel::getuser($u, $p);
                    foreach ($dataa as $data) {
                        try {
                            if ($u == $data['user_name'] && $p == $data['user_password']) {
                                if ($data['role'] == 'admin' || $data['role'] == 'user') {
                                    session_start();
                                    $_SESSION['user_id'] = $data['user_id'];
                                    $_SESSION['user_name'] = $data['user_name'];
                                    header("location:index.php");
                                }
                            }
                        } catch (Exception $exe) {
                            echo $exe->getMessage();
                        }
                    }
                } catch (Exception $exc) {
                    $m = $exc->getMessage();
                    $this->template->m = $m;
                    $this->template->msg = -1;
                    $this->template->render("customer/add");
                }
            }
            $this->template->render("admin/login");
        }
    }

    function logoutAction() {
        session_start();
        //if (isset($_SESSION['user_id'])) {
        session_destroy();
        header("location:index.php?rt=HomePage/login");
        //  }
    }

}
