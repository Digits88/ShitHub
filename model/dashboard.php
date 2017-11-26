<?php

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
$stmt = $sqlite ->prepare("SELECT * FROM (SELECT * FROM snippets JOIN (SELECT MAX(ratings.Safety_Score) - MIN(ratings.Safety_Score) AS diff, ratings.Snippet_ID FROM ratings GROUP BY ratings.Snippet_ID) as 'data' ON data.Snippet_ID = snippets.ID) WHERE diff > 5");
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
