<?php

    class PersegiPanjang {
        private $p;
        private $l;

        function __construct($p,$l){
            $this->p = $p;
            $this->l = $l;
        }

        function getLuas() {
            return $this->p * $this->l;
        }

        function getKeliling() {
            return 2 * ($this->p + $this->l);
        }
    }

?>