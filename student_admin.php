<?php
// student_admin.php

// Array to store students
$students = [];

// Add a student to the list.

    /**
     * Add a student to the list.
     *
     * @param array $students Reference to the students array.
     * @param string $name The name of the student.
     * @param int $id The ID of the student.
     * @param int $age The age of the student.
     * @param int $year The year of the student.
     * @param int $class The class of the student.
     * @param string $parent The name of the parent.
     * @return void
     */
 
function addStudent(&$students, $name, $id, $age, $year, $class, $parent) {
    $students[$id] = $name;
    $students[$id]['age'] = $age;
    $students[$id]['year'] = $year;
    $students[$id]['class'] = $class;
    $students[$id]['parent'] = $parent;
    echo "Student '$name' with ID $id added successfully.\n";
}

/**
 * Remove a student from the list.
 *
 * @param int $id The ID of the student to remove.
 * @return void
 */
function removeStudent(&$students, $id,): void {
    // Check if the student exists in the list
     if (isset($students[$id])) {
        $name = $students[$id]['name'];
        unset($students[$id]);
        echo "Student '$name' with ID $id removed successfully.\n";
    } else {
        echo "Student with ID $id does not exist.\n";
    }
    if (isset($students[$id])) {
        $name = $students[$id];
        unset($students[$id]);
        echo "Student '$name' with ID $id removed successfully.\n";
    } else {
        echo "Student with ID $id does not exist.\n";
    }
}

// Sample database of students
$students = [
    001 => 'John Doe',
    002 => 'Jane Smith',
    003 => 'Emily Johnson',
    004 => 'Hazel Morley',
    005 => 'Rowan Blake',
    006 => 'Oliver Finch',
    007 => 'Jude Winslow',
    008 => 'Phoebe Ashcroft',
];

// Display the initial list of students
echo "Initial list of students:\n";
foreach ($students as $id => $name) {
    echo "ID: $id, Name: $name\n";
}
