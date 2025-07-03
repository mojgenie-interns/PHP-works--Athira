<?php 

function getPlayer() {
    echo "\n Welcome to the Hunting Game!\n";
    $name = readline("Enter your name: ");
    echo "\n Welcome, $name!\n";
    return $name;
}


function enterForest() {
    $choice = readline("Do you want to enter the forest for hunting? (Y/N): ");
    if (strtoupper($choice) !== 'Y') {
        echo " You chose not to enter. Goodbye!\n";
        exit;
    }
    echo " You entered the forest. Let’s begin!\n";
}

function chooseWeapon() {
    $weapon = readline("Choose your weapon (Gun or Knife): ");
    $weapon = strtolower($weapon);

    if ($weapon === 'gun' || $weapon === 'knife') {
        echo " You chose: $weapon\n";
        return $weapon;
    } else {
        echo " Invalid choice. Defaulting to Knife.\n";
        return 'knife';
    }
}

function deer($playerName) {
    echo "\n A graceful deer grazes peacefully...\n";
    $shoot = readline("Do you want to shoot it? (Y/N): ");

    if (strtoupper($shoot) === 'Y') {
        echo " Boom! The deer collapsed. You win this round, $playerName!\n";
        return 1; // Win point
    } else {
        echo " The deer heard you and ran away.\n";
        return 0;
    }
}

function tiger($weapon) {
    echo "\n A tiger appears and locks eyes with you...\n";
    $action = readline("Do you want to 'Hide' or 'Face' it?: ");
    $action = strtolower($action);

    if ($action === 'hide') {
        echo " You hide behind a tree. The tiger walks away.\n";
    } elseif ($action === 'face') {
        if ($weapon === 'gun') {
            echo "You shoot in the air! The tiger flees.\n";
        } else {
            echo " A knife won't save you... You get attacked.\n";
        }
    } else {
        echo "You froze. The tiger attacks before you move.\n";
    }
    return 0;
}




function handleEncounter($playerName, $weapon) {
    echo "\n You hear a sound in the forest...\n";
    $choice = readline("Do you want to check the sound  or  Go  another direction ? (Y/N): ");

    if (strtoupper($choice) === 'Y') {
        return deer($playerName); 
    } else {
        return tiger($weapon); 
    }
}


function playGame() {
    $score = 0;
    $playerName = getPlayer();
    enterForest();
    $weapon = chooseWeapon();

    while (true) {
        $score += handleEncounter($playerName, $weapon);

        $again = readline("\n Do you want to continue hunting? (Y/N): ");
        if (strtoupper($again) !== 'Y') {
            break;



        }
    }

    echo "\n Game Over, $playerName! Your total score: $score\n";
}


playGame();

#not completed 
#new game

//  function flatEscape()
//  {
//      $var = readline("Enter Your Name \n");
//      echo "\n Hey $var welcome to the Flat Escape Game!!!";
//      echo "\n Hello $var ,$var trapped in 15th floor of Noyal Flat";
//      echo "\n you need to escape the floor go to the lift in this floor there 
//         is a task to do \n";
//     $enter = readline("You see the lift 'y' or 'n':");
//     if ($enter == 'y')
//     {
//         echo "\n Task ::: in this floor there is  a toy  you need to find the toy in 15 minute 
//         and place the toy in  a red circle infront of you!!!!!!!OK $var Good Luck!";
//     }
//     elseif($enter == 'n')
//     {
//         echo"\n Go  Straightt!! you find the lift";
//     }
    
   
//  }flatEscape();

//  function 




