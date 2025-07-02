<?php

$dataFile = "todo.json";

// Load 
function loadData() {
    global $dataFile;
    if (!file_exists($dataFile)) return [];
    return json_decode(file_get_contents($dataFile), true);
}

// Save 
function saveData($data) {
    global $dataFile;
    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT));
}

// Show all to-do lists
function displayLists($data) {
    echo "\n To-Do Lists \n";
    if (empty($data)) {
        echo "No lists found.\n";
        return;
    }
    foreach ($data as $index => $list) {
        echo "$index. {$list['title']}\n";
    }
}

// View tasks inside a list
function viewTasks($list) {
    echo "\nTasks in '{$list['title']}':\n";
    if (empty($list['tasks'])) {
        echo "No tasks.\n";
    } else {
        foreach ($list['tasks'] as $i => $task) {
            $status = $task['status'] === "completed" ? "[x]" : "[ ]";
            echo "$i. $status {$task['task_name']} ({$task['target_date']})\n";
        }
    }
}

// MAIN 
$data = loadData();

echo "\n    MAIN MENU \n";
echo "1. View To-Do Lists\n";
echo "2. Create New To-Do List\n";
echo "3. Delete a To-Do List\n";
$choice = readline("Choose (1-3): ");

if ($choice == 1) {
    displayLists($data);
    $id = readline("Enter list ID to manage tasks: ");
    if (!isset($data[$id])) {
        echo "Invalid list ID.\n";
        exit;
    }

    $list = &$data[$id];
    viewTasks($list);
    echo "\nOptions:\n";
    echo "1. Add Task\n";
    echo "2. Mark Task as Completed\n";
    echo "3. Delete Task\n";
    $taskOp = readline("Choose option (1-3): ");

    if ($taskOp == 1) {
        $taskName = readline("Enter task name: ");
        $targetDate = readline("Enter target date (yyyy-mm-dd): ");
        $list['tasks'][] = [
            "task_name" => $taskName,
            "created_date" => date("Y-m-d"),
            "target_date" => $targetDate,
            "completed_date" => "",
            "status" => "not completed"
        ];
        echo "Task added.\n";
    } elseif ($taskOp == 2) {
        $taskId = readline("Enter task ID to mark completed: ");
        if (isset($list['tasks'][$taskId])) {
            $list['tasks'][$taskId]['status'] = "completed";
            $list['tasks'][$taskId]['completed_date'] = date("Y-m-d");
            echo "Task marked as completed.\n";
        }
    } elseif ($taskOp == 3) {
        $taskId = readline("Enter task ID to delete: ");
        if (isset($list['tasks'][$taskId])) {
            array_splice($list['tasks'], $taskId, 1);
            echo "Task deleted.\n";
        }
    }

    saveData($data);

} elseif ($choice == 2) {
    $title = readline("Enter title for new list: ");
    $data[] = ["title" => $title, "tasks" => []];
    saveData($data);
    echo "List '$title' created.\n";

} elseif ($choice == 3) {
    displayLists($data);
    $id = readline("Enter list ID to delete: ");
    if (isset($data[$id])) {
        unset($data[$id]);
        $data = array_values($data); // reindex array
        saveData($data);
        echo "List deleted.\n";
    } else {
        echo "Invalid ID.\n";
    }

} else {
    echo "Invalid option.\n";
}






