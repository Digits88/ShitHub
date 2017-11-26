<?php
function get_snippet_by_id($db, $id) {
    if(!is_numeric($id)) {
        throw new Exception('Snippet ID must be numerical!');
    }
    $stmt = $db->prepare("SELECT * FROM snippets WHERE id=:id");
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $result = $stmt->execute();
    $row = $result->fetchArray();
    if(count($row) == 0) {
        throw new Exception('Snippet with ID '.$id.' not found!');
    }
    $filename = "../data/snippet" . $row["ID"] . ".snip";
    if(!file_exists($filename)) {
        throw new Exception('For Snippet with ID '.$id.' were no Datafile found!');
    }
    $snippet_content = file_get_contents($filename);
    return [
        "title" => $row["Title"],
        "content" => $snippet_content,
        "description" => $row["Description"],
        "tags" => $row["tags"],
        "language" => $row["Language"]
    ];
}

function save_new_snippet($db, $title, $content, $description, $language, $tags) {
    $stmt = $db->prepare("INSERT INTO snippets (title, description, language) VALUES (:title, :description, :lang)");
    $stmt->bindValue(":title", $title, SQLITE3_TEXT);
    $stmt->bindValue(":description", $description, SQLITE3_TEXT);
    $stmt->bindValue(":lang", $language, SQLITE3_TEXT);
    //$stmt->bindValue(":tags", $tags, SQLITE3_TEXT);
    $result = $stmt->execute();
    $stmt->close();
    $id = $db->lastInsertRowid();
    $filename = "../data/snippet".$id.".snip";
    file_put_contents($filename, $content);
    
    return $id;
}

//$dbfile = '../shithub_database.db';

//$sqlite = new SQLite3($dbfile);

//$sqlite->exec("DELETE FROM snippets");
//$sqlite->exec("VACUUM");
//$sqlite->exec("UPDATE sqlite_sequence SET seq = (SELECT MAX(ID) FROM snippets) WHERE name=\"snippets\"")

//$id = (save_new_snippet($sqlite, "Hallo Welt", "print(\"Hallo Welt\")", "Gibt Hallo Welt aus",  "Python"));
//var_dump(get_snippet_by_id($sqlite, $id));

?>