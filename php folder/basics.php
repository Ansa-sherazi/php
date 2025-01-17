<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
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
  

  ?>
 
</body>
</html>