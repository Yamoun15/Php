<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/userMentalTest.css" />
    <script type="text/javascript" src="./resources/js/userMentalTest.js" defer></script>
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>



    <div class="container quizBox">
        <div class="quiz" id="quiz">
            <div>
                <p class="question"><b>1.Not being control or stop worrying.</b></p>
                <span><input type="radio" name="answer1" id="q1a1" value="Never">Never</span>
                <span><input type="radio" name="answer1" id="q1a2" value="severalDays">Sometimes</span>
                <span><input type="radio" name="answer1" id="q1a3" value="moreThanHlafTheDays">Often</span>
                <span><input type="radio" name="answer1" id="q1a4" value="nearlyEveryday">Very Often</span>
            </div>
            <div>
                <p class="question"><b>2.Unable to control anxiety.</b></p>
                <span><input type="radio" name="answer2" id="q2a1" value="Never">Never</span>
                <span><input type="radio" name="answer2" id="q2a2" value="severalDays">Sometimes</span>
                <span><input type="radio" name="answer2" id="q2a3" value="moreThanHlafTheDays">Often</span>
                <span><input type="radio" name="answer2" id="q2a4" value="nearlyEveryday">Very Often</span>
            </div>
            <div>
                <p class="question"><b>3.Trouble relaxing.</b></p>
                <span><input type="radio" name="answer3" id="q3a1" value="Never">Never</span>
                <span><input type="radio" name="answer3" id="q3a2" value="severalDays">Sometimes</span>
                <span><input type="radio" name="answer3" id="q3a3" value="moreThanHlafTheDays">Often</span>
                <span><input type="radio" name="answer3" id="q3a4" value="nearlyEveryday">Very Often</span>
            </div>
            <div>
                <p class="question"><b>4.Worrying too much about different things.</b></p>
                <span><input type="radio" name="answer4" id="q4a1" value="Never">Never</span>
                <span><input type="radio" name="answer4" id="q4a2" value="severalDays">Sometimes</span>
                <span><input type="radio" name="answer4" id="q4a3" value="moreThanHlafTheDays">Often</span>
                <span><input type="radio" name="answer4" id="q4a4" value="nearlyEveryday">Very Often</span>
            </div>
            <div>
                <p class="question"><b>5.Being so restless that it is hard to sit still.</b></p>
                <span><input type="radio" name="answer5" id="q5a1" value="Never">Never</span>
                <span><input type="radio" name="answer5" id="q5a2" value="severalDays">Sometimes</span>
                <span><input type="radio" name="answer5" id="q5a3" value="moreThanHlafTheDays">Often</span>
                <span><input type="radio" name="answer5" id="q5a4" value="nearlyEveryday">Very Often</span>
            </div>
            <div>
                <p class="question"><b>6.Becoming easily annoyed or irritable.</b></p>
                <span><input type="radio" name="answer6" id="q6a1" value="Never">Never</span>
                <span><input type="radio" name="answer6" id="q6a2" value="severalDays">Sometimes</span>
                <span><input type="radio" name="answer6" id="q6a3" value="moreThanHlafTheDays">Often</span>
                <span><input type="radio" name="answer6" id="q6a4" value="nearlyEveryday">Very Often</span>
            </div>
            <button id="submit" onclick="submit()">Submit</button>
        </div>
        <div id="result">
            <h5>Your Results</h5>
            <h3 id="resultCondition"></h3>
            <div id="resultConditionAnswer"></div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("./common/footer.php"); ?>

</body>

</html>