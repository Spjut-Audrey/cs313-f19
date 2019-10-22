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
​
    <?php
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

       try {
        $book = $_POST['book'];
        $chapter = $_POST['chapter'];
        $verse = $_POST['verse'];
        $content = $_POST['content'];
        $topicId = $_POST['topics'];

        $query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
        
        $statement = $db->prepare($query);

        $statement->bindValue(':book', $book);
        $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->bindValue(':content', $content);
        
        $statement->execute();

        foreach ($topicIds as $topicId)
            {
                echo "ScriptureId: $scriptureId, topicId: $topicId";
                $statement = $db->prepare('INSERT INTO scripture_topic(scriptureId, topicId) VALUES(:scriptureId, :topicId)');
                $statement->bindValue(':scriptureId', $scriptureId);
                $statement->bindValue(':topicId', $topicId);
                $statement->execute();
            }
        }
        catch (Exception $ex)
        {
            // Please be aware that you don't want to output the Exception message in
            // a production environment
            echo "Error with DB. Details: $ex";
            die();
        }
        // finally, redirect them to a new page to actually show the topics
        header("Location: team6Action.php");

        die(); 

​
       foreach ($db->query('SELECT book, chapter, verse, content FROM Scriptures') as $row)
       {
         echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . ' - ' . '</strong>' . '"' . $row['content'] . '"' . '<br>'; 
       }
    ?> 
​
</body>
</html>