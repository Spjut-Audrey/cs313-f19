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
        $topic_id = $_POST['topics'];

        $query = 'INSERT INTO scriptures(book, chapter, verse, content) VALUES(:book, :chapter, :verse, :content)';
        
        $statement = $db->prepare($query);

        $statement->bindValue(':book', $book);
        $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->bindValue(':content', $content);
        
        $statement->execute();

        $scripture_id = $db->lastInsertId("scriptures_scripture_id_seq");

        foreach ($topic_ids as $topic_id)
            {
                echo "Scripture_id: $scripture_id, topic_id: $topic_id";
                $statement = $db->prepare('INSERT INTO link(scripture_id, topic_id) VALUES(:scripture_id, :topic_id)');
                $statement->bindValue(':scripture_id', $scripture_id);
                $statement->bindValue(':topic_id', $topic_id);
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
        header("Location: team6Results.php");

        die(); 
    ?> 
​
</body>
</html>