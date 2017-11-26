<?php
error_reporting: -1;
ini_set('display_errors',1);
function getRatingForId($id)
{
    if(!is_numeric($id))
    {
        throw new exception("The Id has to be a number!");
    }
    $sqlite = new SQLite3('../shithub_database.db');
    $stmt = $sqlite->prepare("SELECT * FROM Ratings WHERE Ratings_ID = :id");
    $stmt->bindValues(':id',$id,SQLITE3_INTEGER);
    $result = $stmt->execute();
    $res = $result->fetchArray();
    if(count($res) == 0)
    {
        throw new exception("Unable to find rating(ID: " . $id . ")\n");
    }
    return [
        "User_ID" => $res[0],
        "Snippet_ID" => $res[1],
        "Safety_Score" => $res[2],
        "Comment" => $res[3]
    ];   
}

function uploadRating($snipId)
{
    if(session_status() == 2 && $_SESSION['loggenIn'] == 1)
    {
        $secButton = (int)$_POST['security'];
        $cleanButton = (int)$_POST['cleanliness'];
        $secBox = $_POST['securitycomment'];
        $cleanBox = $_POST['cleanlinesscomment'];
        $miscBox = $_POST['misccomment'];
        $userId = $_SESSION['userID'];
    
        $sqlite = new SQLite3("../shithub_database.db");
        $stmt = $sqlite->prepare("INSERT INTO Ratings (userId,snipId,secScore,cleanScore,secComm,cleanComm,miscComm) VALUES(:userID,:snipID,:secScore,:cleanScore,:secComm,:cleanComm,:miscComm)");
        $stmt->bindValues(':userId',$userId,SQLITE3_NUM);
        $stmt->bindValues(':snipId',$snipId,SQLITE3_NUM);
        $stmt->bindValues(':secScore',$secButton,SQLITE3_NUM);
        $stmt->bindValues(':cleanScore',$cleanButton,SQLITE3_NUM);
        $stmt->bindValues(':secComm',$secBox,SQLITE3_TEXT);
        $stmt->bindValues(':cleanComm',$cleanBox,SQLITE3_TEXT);
        $stmt->bindValues(':miscComm',$miscBox,SQLITE3_TEXT);
        $result = $stmt->execute();
        $stmt->close();
        $sqlite->close();
    }
}
?>