<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="p-2">
        <?php

use function PHPSTORM_META\type;

        define('PI', 3.14159);
        $user = "example_user";
        $password = "#Anuran123";
        $database = "example_database";
        $table = "todo_list";

        try {
            /* 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi 
            reiciendis illo teneturdignissimos libero est at, aliquid deleniti 
            quidem quis dolore non! Neque quas assumenda expedita non perspiciatis
            quos at, ullam, temporibus consequatur cum distinctio facere fugit 
            epellat voluptatem itaque eos delectus. Cupiditate porro mollitia 
            alias dolor necessitatibus omnis error.
            */
            // $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
            $db2 = new mysqli("127.0.0.1:3306", $user, $password, $database);
            echo "<h2 class='text-2xl font-bold'>TODO</h2>\n<ul class='m-3 list-disc'>";
            echo("\n");
            foreach ($db2->query("SELECT content FROM $table") as $row) {
                echo "<li>" . $row['content'] . "</li>";
            }
            echo "</ul>";
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        $a = 1^2;

        echo ("<p>".$a."</p>");
        echo(var_dump($a));
        echo("<br>");
        echo(var_dump(PI));

        $arr = array("Python", "C++", "Java", 1, 2, 3, 4, 5, 6);

        print "\n<ul class='list-disc px-3 m-3'>\n";
        foreach($arr as $element) {
            print "<li>".$element."</li>\n";
        }
        print("</ul>\n");

        function printOrdered($iterable, $needSummary = false) {
            if ($needSummary) {
                print("<br>".count($iterable)." elements present in the list. <br>\n");
            }
            print "\n<ol class='list-decimal px-3 m-3'>\n";
            $pos = -1;

            while (++$pos < count($iterable)) {
                print "<li>";
                if ($needSummary) {
                    print("Variable details: &nbsp;&nbsp;&nbsp;&nbsp;");
                    var_dump($iterable[$pos]);
                }
                print "<br>Variable content:&nbsp;&nbsp;&nbsp;&nbsp;".$iterable[$pos]."</li>\n";
                // ++$pos;
            }
            print("</ol>\n");
        }

        ?>
    </div>
</body>

</html>