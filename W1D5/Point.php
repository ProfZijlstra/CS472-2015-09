<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Point
 *
 * @author mzijlstra
 */
class Point {
    private $x;
    private $y;
    
    public function Point($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    
    public function distance($p) {
        $dx = $this->x - $p->x;
        $dy = $this->y - $p->y;
        $distance = sqrt($dx*$dx + $dy*$dy);
        return $distance;
    }
    
    public function __toString() {
        return "Point($this->x, $this->y)";
    }
}
