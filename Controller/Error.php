<?php
    class Error extends Controllers{
        public function __construct()
        {
            parent::__construct();

        }
        public function notFound()
        {
            $this->views->getView($this, "error");
        }
    }
    $notFound = new Error();
    $notFound ->notFound();
    ?>
    
