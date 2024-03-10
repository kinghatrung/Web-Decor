<?php
    class AdminView{

        public function getPageAdmin(){
            require_once './Templates/admin.html';
        }

        public function getPageNhanVien(){
			
            require_once './Templates/ql_nhanvien.html';
		}

        public function getPageSanPham(){
			require_once './Templates/ql_sanpham.html'; 
		}

        public function getPageKTS(){
			require_once './Templates/ql_nhathietke.html';
		}

        public function getPageTK(){
		    require_once './Templates/admin.html';
		}
    }
?>