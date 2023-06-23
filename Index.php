<!DOCTYPE html PUBLIC>
<html lang="en">

<head>
        <title>PHP Test</title>
</head>

<body>
        <?php echo '<p>Hello World</p>'; ?>
        <?php $testVar = 100;
        $testVar *= 2;
        echo $testVar;
        ?>

      
        <form action="./Scripts/Php/welcome.php" method="post">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
        </form>
        <?php 
        echo rand();
        echo rand(1,10);
        echo $testVar;

        $colors = array('red', 'green', 'blue', 'yellow');

        print_r($colors);
        ?>
        <br>
        <?php
        echo $colors[2];
        $sasha = array(
                'name'=>'Sasha Greene',
                'age'=>'26',
                'job'=> 'Student',
        );

        echo $sasha['job'];


        $students = array(
                'joe'=>array(
                        'name'=>'joe casabona',
                        'age' =>34,
                        'year' => 1,
                ),
                'fred'=>array(
                        'name'=>'fred johnson',
                        'age' =>31,
                        'year' => 3,
                ),
                'cait'=>array(
                        'name'=>'cait irwin',
                        'age' =>32,
                        'year' => 2,
                ),
        );

        print_r( $students['cait']);


        ?>

      
<script type = "text/javascript" src="/Scripts/Javascript/jquery-3.7.0.js">
        <script type= "text/javascript" src="Scripts/Javascript/index.js">

</body>
</html >