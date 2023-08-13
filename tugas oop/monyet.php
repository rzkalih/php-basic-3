<?php
    require_once './animal.php';

    class Monyet extends Animal {
        public function yell() {
            return 'uuauauauua';
        }
        public function getLegs() {
            return 2;
        }
    }