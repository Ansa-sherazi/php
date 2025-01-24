<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Array
$students = array("Ali", "Ahmed", "Haris", "Owais", "Bilal", "Kashif", "Do nain", "Muneeb", "Shahzaib", "Talha", "Usman", "Waqas", "Zain", "Zohaib", "Zubair");
echo "<pre>";
print_r($students);
echo "</pre>";

//foreach
foreach($students as $key => $value){
    echo "$key: $value . <br>";
}
//associative arry 
$employee=[
    "Name" =>"ali",
    "Age" => 25,
    "Desigination" =>"web developer",
    "salary" => 50000

];


//echo $employee["Desigination"];

echo "<pre>";
print_r($employee);
echo "</pre>";


//foreach
foreach($employee as $key => $value){
    echo "$key:$value.<br>";
}

//multidimentional arry 

$points=[
    ["ansa",23,],
    ["hafsa",22],
    ["maheen",24],
    ["noor",25]
];

//echo $points[3][1];

// echo "<pre>";
// Print_r($points);
// echo"</pre>";





foreach ($points as $key => $value) {
    echo "Name: " . $value[0] . ", Age: " . $value[1] ."<br>";
}



$marks=[
  "Ali" =>[
      "Maths" =>80,
      "English" =>70,
      "Urdu" =>75
  ],
  "Ahmed" =>[
      "Maths" =>85,
      "English" =>75,
      "Urdu" =>70
  ],
  "Haris" =>[
      "Maths" =>90,
      "English" =>80,
      "Urdu" =>85
  ],
  "Owais" =>[
      "Maths" =>95,
      "English" =>85,
      "Urdu" =>80
  ],
];

echo '<h2 style="text-align: center;">Student Marks Table</h2>';

echo '<table border="1" style="width: 50%; margin: 0 auto; text-align: center;">';
echo '<tr>';
echo '<th>Student Name</th>';
echo '<th>Maths</th>';
echo '<th>English</th>';
echo '<th>Urdu</th>';
echo '</tr>';

foreach ($marks as $student => $subjects) {
    echo '<tr>';
    echo '<td>' . $student . '</td>';
    foreach ($subjects as $subject => $mark) {
        echo '<td>' . $mark . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
$employee=[
    ["Name"=>"Ali","Age"=>25,"Designation"=>"webdeveloper","salary"=>50000],
    ["Name"=>"Ahmed","Age"=>35,"Designation"=>"graphic","salary"=>50000],
    ["Name"=>"Ali","Age"=>45,"Designation"=>"webdeveloper","salary"=>50000],
    ["Name"=>"Ali","Age"=>66,"Designation"=>"webdeveloper","salary"=>50000],
    ["Name"=>"Ali","Age"=>75,"Designation"=>"webdeveloper","salary"=>50000]
];
echo '<h2 style="text-align: center;">employee Table</h2>';
echo '<table border="1" style="width: 50%; margin: 0 auto; text-align: center;">';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Age</th>';
echo '<th>Desigination</th>';
echo '<th>salary</th>';
echo '</tr>';
foreach($employee as $Fish =>$Full){
    echo'<tr>';
    echo'<td>'.$Fish.'</td>';
}
echo '</table>';
?>


</body>
</html>