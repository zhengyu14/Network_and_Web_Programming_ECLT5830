<?php
// An array of user id's, names, and scores
$user_table = [
  [ 'id'=>1, 'name'=>"John Doe", 'score'=>6789 ],
  [ 'id'=>2, 'name'=>"Jane Dow", 'score'=>1234 ],
  [ 'id'=>3, 'name'=>"David Brown", 'score'=>9995 ],
  [ 'id'=>4, 'name'=>"Michael White", 'score'=>3789 ],
  [ 'id'=>5, 'name'=>"Dan Black", 'score'=>1000 ],
  [ 'id'=>6, 'name'=>"Marry Blue", 'score'=>555 ]
];

function getUserRecord($id) {
  global $user_table;

  // To lookup the score (in real application, this step could involve
  // querying a database or a web service)
  $N = count($user_table);
  for ($i = 0; $i < $N; $i++) {
    if ($user_table[$i]['id'] == $id) {
      return $user_table[$i];
    }
  }

  return null;
}
