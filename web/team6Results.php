<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>Scripture Resources</h1>
</head>
<body>
    <h1>Scriptures List</h1>
​
        <?php
        //db connection
             try
             {
               $dbUrl = getenv('DATABASE_URL');
             
               $dbOpts = parse_url($dbUrl);
             
               $dbHost = $dbOpts["host"];
               $dbPort = $dbOpts["port"];
               $dbUser = $dbOpts["user"];
               $dbPassword = $dbOpts["pass"];
               $dbName = ltrim($dbOpts["path"],'/');
             
               $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
             
               $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             }
             catch (PDOException $ex)
             {
               echo 'Error!: ' . $ex->getMessage();
               die();
             }

             //scripture list
            try
            {
                $statement = $db->prepare('SELECT id, book, chapter, verse, content FROM scripture');
                $statement->execute();
                // Go through each result
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {
                    echo '<p>';
                    echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
                    echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
                    echo '<br />';
                    echo 'Topics: ';
                    // get the topics now for this scripture
                    $stmtTopics = $db->prepare('SELECT name FROM topic t'
                        . ' INNER JOIN scripture_topic st ON st.topicId = t.id'
                        . ' WHERE st.scriptureId = :scriptureId');
                    $stmtTopics->bindValue(':scriptureId', $row['id']);
                    $stmtTopics->execute();
                    // Go through each topic in the result
                    while ($topicRow = $stmtTopics->fetch(PDO::FETCH_ASSOC))
                    {
                        echo $topicRow['name'] . ' ';
                    }
                    echo '</p>';
                }
            }
            catch (PDOException $ex)
            {
                echo "Error with DB. Details: $ex";
                die();
            }
        ?>

       
​
</body>
</html>