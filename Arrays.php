<?php
class Hogwartstudents_List {
    
    protected $hogwartstudent_list = [];

    public function __construct($list){
        $this->hogwartstudent_list = $list;
    }

    public function displayHogwartsStudentList() : array {
        return $this->hogwartstudent_list;
    }

    public function addHogwarts(string $hogwartstudent_name) : void {
        array_push($this->hogwartstudent_list, $hogwartstudent_name);
    }

    public function lowerHogwarts(string $hogwartstudent_name) : void {
        array_splice($this->hogwartstudent_list, $hogwartstudent_name);
    }

    public function removeHogwarts(string $hogwartstudent_name) : void {
        array_shift($this->hogwartstudent_list);
    }

}

$hogwartstudents = new Hogwartstudents_List([
    'Albus Dumbledore',
    'Elijah Fernandez',
    'Harry Potter',
    'Lunna Lovegood',
    'Ron Weasly',
]);

$hogwartstudents->lowerHogwarts("3");
$hogwartstudents->addHogwarts("Dobby");
$hogwartstudents->removeHogwarts("Albus Dumbledore");




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <table border="1">
        <tr>
            <td colspan="2"><b>Hogwarts Student with Wands</b></td>
        </tr>
    <?php
    foreach($hogwartstudents-> displayHogwartsStudentList() as $character) {
        echo "<tr><td>" . $character . "</td></tr>";
    }
    ?>
    </table>
</body>
</html>
