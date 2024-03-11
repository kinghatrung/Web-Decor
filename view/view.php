<?php
    class View{
        public function getPageHome(){
            include_once 'Templates/index.html';
        }
        public function getPhongLamViec(){
            include_once 'Templates/phonglamviec.html';
        }
        public function getPhongKhach(){
            include_once 'Templates/phongkhach.html';
        }
        public function getPhongNgu(){
            include_once 'Templates/phongngu.html';
        }
        public function getPageLogin(){
            include_once 'Templates/login.html';
        }
        public function getPageRegister(){
            include_once 'Templates/sign-in.html';
        }
        public function getPageUser(){
            include_once 'Templates/user.html';
        }

        public function getPageAdmin(){
            include_once 'Templates/admin.html';
        }
    }
?>