<?php
error_reporting: -1;
ini_set('display_errors', 1);

/*
 
 */
$rev_next = "";
$rev_hot = "";

$dbfile = 'shithub_database.db';
$sqlite = new SQLite3($dbfile);
$stmt = $sqlite ->prepare("SELECT * FROM snippets WHERE (SELECT COUNT(*) FROM ratings WHERE id=snippets.id) < 3 ORDER BY id");
$result = $stmt->execute();

$i = 1;
while($row = $result->fetchArray()) {
    $rev_next .= <<<HTML
    <tr>
<th scope="row">$i</th>
<td>{$row['Title']}</td>
<td><a href='#!'><button class='btn btn-primary'>Los</button></a></td>
</tr>
HTML;
    $i++;
}


$rev_hot = "";

$dbfile = 'shithub_database.db';
$sqlite = new SQLite3($dbfile);
$stmt = $sqlite ->prepare("SELECT * FROM snippets WHERE ((SELECT MAX(Safety_Score) FROM ratings WHERE id=snippets.id) - (SELECT MIN(Safety_Score) FROM ratings WHERE id=snippets.id)) < 5 ORDER BY id");
$result = $stmt->execute();

$i = 1;
while($row = $result->fetchArray()) {
    $rev_hot .= <<<HTML
    <tr>
<th scope="row">$i</th>
<td>{$row['Title']}</td>
<td><a href='#!'><button class='btn btn-primary'>Los</button></a></td>
</tr>
HTML;
    $i++;
}
?>