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
        $this->currentCol = intval($n / 2); // Start at middle 
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

    public function setPosition($row, $col) {
        $this->currentRow = $row;
        $this->currentCol = $col;
    }

    public function getData() {
        return $this->data;
    }
}

// Interface to display the grid
interface GridDisplayInterface {
    public function display(CircularGrid $grid);
}

//console display class
class ConsoleDisplay implements GridDisplayInterface {
    public function display(CircularGrid $grid) {
        $data = $grid->getData();
        foreach ($data as $row) {
            foreach ($row as $cell) {
                echo str_pad($cell, 4, " ", STR_PAD_LEFT);
            }
            echo PHP_EOL;
        }
    }
}

 
class MagicSquare {
    private $n;
    private $grid;

    public function __construct($n) {
        if ($n % 2 == 0) {
            throw new Exception("Only odd numbers are supported.");
        }
        $this->n = $n;
        $this->grid = new CircularGrid($n);
    }

    public function generate() {
        for ($num = 1; $num <= $this->n * $this->n; $num++) {
            $this->grid->set($num);
            list($prevRow, $prevCol) = $this->grid->getCurrentPosition();

            $this->grid->moveUp();
            $this->grid->moveRight();

            list($newRow, $newCol) = $this->grid->getCurrentPosition();
            if ($this->grid->isOccupied($newRow, $newCol)) {
                $this->grid->setPosition($prevRow, $prevCol);
                $this->grid->moveDown();
            }
        }
    }

    public function getMagicSum() {
        return ($this->n * ($this->n * $this->n + 1)) / 2;  //magic sum
    }

    public function isMagic() {
        $data = $this->grid->getData();
        $target = $this->getMagicSum();

        // Check rows and columns
        for ($i = 0; $i < $this->n; $i++) {
            $rowSum = array_sum($data[$i]);
            $colSum = array_sum(array_column($data, $i));
            if ($rowSum != $target || $colSum != $target) return false;
        }

        // Check diagonals
        $diag1 = 0;
        $diag2 = 0;
        for ($i = 0; $i < $this->n; $i++) {
            $diag1 += $data[$i][$i];
            $diag2 += $data[$i][$this->n - $i - 1];
        }

        return $diag1 == $target && $diag2 == $target;
    }

    public function display(GridDisplayInterface $display) {
        $display->display($this->grid);
    }
}



try {
    $n = readline("enter a odd number"); 
    $magic = new MagicSquare($n);
    $magic->generate();

    echo "Magic Sum: " . $magic->getMagicSum() . "\n";

    if ($magic->isMagic()) {
        echo "This is a valid magic square." . "\n";
    } else {
        echo "Invalid magic square." ;
    }

    echo "Magic Square:\n";
    $magic->display(new ConsoleDisplay());

 
} catch (Exception $e) {
    echo "Error: " ;
}
?>
   

