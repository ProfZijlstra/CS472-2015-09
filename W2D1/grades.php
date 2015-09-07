<!DOCTYPE html>
<html>
	<head>
		<title>Retrieve Grade</title>
                <style>
                    #b { font-weight: bold; }
                </style>
	</head>
	<body>
		<h1>Retrieve your grade</h1>

                <form action="submit.php" method="POST">
                    <p>Name: <input name="name" type="text" /></p>

                    <p>Student ID: <input type="text" name="sid" /></p>
                    
                    <p>
                        <select name="assignment">
                            <?php foreach (array(1, 2, 3, 4, 5, 6) as $day) : ?>
                            <option>W1D<?= $day?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>
                    
                    <p>Entry: 
                        <input id="a" type="radio" name="entry" value="2015-02" />
                        <label for="a">2015-02</label>
                        <input id="b" type="radio" name="entry" value="2015-05" />
                        <label for="b">2015-05</label>
                        <input id="c" type="radio" name="entry" value="2015-07" />
                        <label for="c">2015-07</label>

                        
                    </p>
                    
                    <p>
                        <input type="checkbox" name="honest" />Trust me! I'm honest!
                    </p>

                    <input type="submit" value="Get Grade!"/>
                </form>

	</body>
</html>
