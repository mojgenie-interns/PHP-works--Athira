
<?php
enum Mark: string {
    case X = 'X';
    case O = 'O';
    case EMPTY = ' ';
}

enum BoardState: string {
    case Playing =0 ;
    case X_Won =1;
    case O_Won =2;
    case Tie =3;
}

class Position {
    public int $row;
    public int $col;

    public function __construct(int $row, int $col) {
        $this->row = $row;
        $this->col = $col;
    }
}

class Cell {
    private Mark $mark = Mark::EMPTY;

    public function isEmpty(): bool {
        return $this->mark === Mark::EMPTY;
    }

    public function getMark(): Mark {
        return $this->mark;
    }

    public function setMark(Mark $mark): void {
        if (!$this->isEmpty()) {
            throw new Exception("Cell already filled!");
        }
        $this->mark = $mark;
    }
}

class Board {
    private array $grid;
    private int $size = 3;

    public function __construct() {
        $this->grid = [];
        for ($i = 0; $i < $this->size; $i++) {
            $this->grid[$i] = [];
            for ($j = 0; $j < $this->size; $j++) {
                $this->grid[$i][$j] = new Cell();
            }
        }
    }

    public function print(): void {
        echo "\n";
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo ' ' . $this->grid[$i][$j]->getMark()->value . ' ';
                if ($j < 2) echo '|';
            }
            echo "\n";
            if ($i < 2) echo "---*---*---\n";
        }
        echo "\n";
    }

    public function placeMark(Position $pos, Mark $mark): void {
        if ($pos->row < 0 || $pos->row > 2 || $pos->col < 0 || $pos->col > 2) {
            throw new Exception("Invalid position!");
        }
        $this->grid[$pos->row][$pos->col]->setMark($mark);
    }

    public function getState(): BoardState {
        for ($i = 0; $i < 3; $i++) {
            $row = array_map(fn($c) => $c->getMark(), $this->grid[$i]);
            $col = array_map(fn($r) => $r[$i]->getMark(), $this->grid);

            foreach ([$row, $col] as $line) {
                $values = array_map(fn($mark) => $mark->value, $line);
                if ($line[0] !== Mark::EMPTY && count(array_unique($values)) === 1)
 {
                    return $line[0] === Mark::X ? BoardState::X_Won : BoardState::O_Won;
                }
            }
        }

        $diags = [
            [$this->grid[0][0]->getMark(), $this->grid[1][1]->getMark(), $this->grid[2][2]->getMark()],
            [$this->grid[0][2]->getMark(), $this->grid[1][1]->getMark(), $this->grid[2][0]->getMark()]
        ];
        foreach ($diags as $d) {
            $values = array_map(fn($mark) => $mark->value, $d);
        if ($d[0] !== Mark::EMPTY && count(array_unique($values)) === 1)
 {
                return $d[0] === Mark::X ? BoardState::X_Won : BoardState::O_Won;
            }
        }

        foreach ($this->grid as $row) {
            foreach ($row as $cell) {
                if ($cell->isEmpty()) return BoardState::Playing;
            }
        }

        return BoardState::Tie;
    }
    
     public function getAvailablePositions(): array {
    $positions = [];

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($this->grid[$i][$j] === ' ') {
                $positions[] = [$i, $j]; 
            }
        }
    }

    return $positions;
}

    }


    

interface Player {
    public function getMark(): Mark;
    public function getName(): string;
    public function getMove(Board $board): Position;
}

class HumanPlayer implements Player {
    private string $name;
    private Mark $mark;

    public function __construct(string $name, Mark $mark) {
        $this->name = $name;
        $this->mark = $mark;
    }

    public function getMark(): Mark {
        return $this->mark;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMove(Board $board): Position {
        while (true) {
            $input = readline("{$this->name}'s move (row,col): ");
            if (preg_match('/^[0-2],[0-2]$/', $input)) {
                [$r, $c] = array_map('intval', explode(',', $input));
                return new Position($r, $c);
            }
            echo "Invalid input! .\n";
        }
    }
}

class WeaksBot implements Player {
    private string $name;
    private Mark $mark;

    public function __construct(string $name, Mark $mark) {
        $this->name = $name;
        $this->mark = $mark;
    }

    public function getMark(): Mark {
        return $this->mark;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMove(Board $board): Position {
        $choices = $board->getAvailablePositions();
        return $choices[array_rand($choices)];
    }
}



    
    

class Game {
    private Board $board;
    private Player $current;
    private Player $other;

    public function __construct(Player $p1, Player $p2) {
        $this->board = new Board();
        $this->current = $p1;
        $this->other = $p2;
    }

    public function start(): void {
        while (true) {
            $this->board->print();

            try {
                $move = $this->current->getMove($this->board);
                $this->board->placeMark($move, $this->current->getMark());
            } catch (Exception $e) {
                echo "Error: {$e->getMessage()}\n";
                continue;
            }

            $state = $this->board->getState();
            if ($state !== BoardState::Playing) {
                $this->board->print();
                if ($state === BoardState::X_Won) echo "Player X wins!\n";
                elseif ($state === BoardState::O_Won) echo "Player O wins!\n";
                else echo "It's a tie!\n";
                break;
            }

            $temp = $this->current;
            $this->current = $this->other;
            $this->other = $temp;
        }
    }
}

$player1 = new HumanPlayer("Athira", Mark::X);
#$bot = new RandomBot("Bot", Mark::O);
$player2 = new HumanPlayer("Mariya",Mark::O);
$game = new Game($player1, $player2);
$game->start();


