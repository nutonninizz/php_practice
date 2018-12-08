<?php
    class Information
    {
        private $name;
        private $surname;
        private $province;
        function __construct($request)
        {
            $this->name = $request['name'];
            $this->surname =$request['surname'];
            $this->province = $request['province'];
        }
        public function getName()
        {
            return $this->name;
        }

        public function getSurname()
        {
            return $this->surname;
        }

        public function getProvince()
        {
            return $this->province;
        }

        public function toString()
        {
            return $this->name."<br>".$this->surname."<br>".$this->province; 
        }

        public function insert(){
            // Do something
        }
    }
?>