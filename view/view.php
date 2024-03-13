<?php
    class View{
        public function getPageHome(){
            include_once 'Templates/index.html';
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

        public function getPageForgot(){
            include_once 'Templates/fotgot_pass.html';
        }
    }
?>