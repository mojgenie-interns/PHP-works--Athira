<?php
class CircularGrid {
    public $n;
    public $data; 
    public $currentRow;
    public $currentCol;

    public function __construct($n) {
        $this->n = $n;
        $this->data = array_fill(0, $n, array_fill(0, $n, 0));
        $this->currentRow = 0;
        $this->currentCol = intval($n / 2);  // Start in the middle of the top row
    }

    public function moveUp() {
        $this->currentRow = ($this->currentRow - 1 + $this->n) % $this->n;
    }

    public function moveDown() {
        $this->currentRow = ($this->currentRow + 1) % $this->n;
    }

    public function moveLeft() {
        $this->currentCol = ($this->currentCol - 1 + $this->n) % $this->n;
    }

    public function moveRight() {
        $this->currentCol = ($this->currentCol + 1) % $this->n;
    }

    public function set($value) {
        $this->data[$this->currentRow][$this->currentCol] = $value;
    }

    public function isOccupied($row, $col) {
        return $this->data[$row][$col] != 0;
    }

    public function getCurrentPosition() {
        return [$this->currentRow, $this->currentCol];
    }

    
}
interface GridDisplayInterface {
    public function display(CircularGrid $grid);
}
class ConsoleDispaly implements GridDisplayInterface
{
    public function 
}