

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="styles/project3Styles.php" rel="stylesheet">
    <title>Project 3</title>

    <script>
        //these are the arrays that hold the workoutNames
        let arrAbs = ["push-up","plank","sit-up","crunch"];
        let arrBack = ["deadlift","pull-up","inverted-row","bent-over-row"];
        let arrBiceps = ["barbell-curl","bar-cable-curl","incline-dumbell-curl","seated-dumbell-curl"];
        let arrForearm = ["wrist-roller","plate-pinch","towel-pull-up","fat-grip-biceps-curl"];
        let arrLeg = ["back-squat","front-squat","romanian-deadlift","lunge"];
        let arrShoulder = ["front-raise","push-press","reverse-cable-crossover","dumbell-lateral-raise"];
        let arrTriceps = ["diamond-push-up","kickbacks","dips","bar-pushdowns"];


        function displaySets()//this is called when you change the slider for sets to update depending on what the slider was set.
        {
            document.getElementById("setsValue").innerHTML = document.getElementById("numOfSets").value;
        }

        function workoutNames()//this function updates the workout names list when you change the bodypart
        {
            //If there is a drop down list present, remove it
            if(document.getElementById("workoutName") != null)
            {
                document.getElementById("workoutName").remove();
            }
            
            let select = document.createElement("select");//creates a select element
            select.id = "workoutName";
            select.name = "frmWorkoutName";

            //depending on what bodypart was selected this creates option statement and fills it with the predefined array in the beginning of the code
            if(document.getElementById("bodyPart").value == "abs")
                {
                    for(let i = 0; i < arrAbs.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value = arrAbs[i];
                            option.text = arrAbs[i];
                            select.appendChild(option);
                        }
                }
            else if(document.getElementById("bodyPart").value == "back")
                {
                    for(let i = 0; i <  arrBack.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value =  arrBack[i];
                            option.text =  arrBack[i];
                            select.appendChild(option);
                        }
                }

                else if(document.getElementById("bodyPart").value == "biceps")
                {
                    for(let i = 0; i <  arrBiceps.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value =  arrBiceps[i];
                            option.text =  arrBiceps[i];
                            select.appendChild(option);
                        }
                }

                else if(document.getElementById("bodyPart").value == "forearm")
                {
                    for(let i = 0; i <  arrForearm.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value =  arrForearm[i];
                            option.text =  arrForearm[i];
                            select.appendChild(option);
                        }
                }

                else if(document.getElementById("bodyPart").value == "leg")
                {
                    for(let i = 0; i <  arrLeg.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value =  arrLeg[i];
                            option.text =  arrLeg[i];
                            select.appendChild(option);
                        }
                }

                else if(document.getElementById("bodyPart").value == "shoulder")
                {
                    for(let i = 0; i <  arrShoulder.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value =  arrShoulder[i];
                            option.text =  arrShoulder[i];
                            select.appendChild(option);
                        }
                }

                else if(document.getElementById("bodyPart").value == "triceps")
                {
                    for(let i = 0; i <  arrTriceps.length; ++i)
                        {
                            let option = document.createElement("option");
                            option.value =  arrTriceps[i];
                            option.text =  arrTriceps[i];
                            select.appendChild(option);
                        }
                }
                document.getElementById("containerWorkoutNames").appendChild(select);//this slaps that newly created select statement onto a div 
        }

        function addWorkout()//This function puts the new workout name into the list
        {
            let newWorkout = prompt("What is the name of your workout?");
            newWorkout = newWorkout.toLowerCase();

            //replace spaces with a dash    
                newWorkout = newWorkout.replace(" ", "-");   
            
            //add newWorkout into the array
            if(document.getElementById("bodyPart").value == "abs")//these just verify what bodypart we have selected so that we add to the right bodypart
            {
                arrAbs.push(newWorkout);
                arrAbs.sort();
            }
            else if(document.getElementById("bodyPart").value == "back")
            {
                arrBack.push(newWorkout);
                arrBack.sort();
            }
            else if(document.getElementById("bodyPart").value == "biceps")
            {
                arrBiceps.push(newWorkout);
                arrBiceps.sort();
            }
            else if(document.getElementById("bodyPart").value == "forearm")
            {
                arrForearm.push(newWorkout);
                arrForearm.sort();
            }
            else if(document.getElementById("bodyPart").value == "leg")
            {
                arrLeg.push(newWorkout);
                arrLeg.sort();
            }
            else if(document.getElementById("bodyPart").value == "shoulder")
            {
                arrShoulder.push(newWorkout);
                arrShoulder.sort();
            }
            else if(document.getElementById("bodyPart").value == "triceps")
            {
                arrTriceps.push(newWorkout);
                arrTriceps.sort();
            }
            workoutNames();//got to update the list so we see the new name
        }

        function inputValidation()
        {
            let dateEntered = document.getElementById("dateOfWorkout").value;
            let repsNumber = document.getElementById("numOfReps").value;
            let todaysDate = new Date().toISOString().split('T')[0];
            
            //Validation for Reps
            if (repsNumber == " ")
            {
                alert("You must enter a number for Reps");
                return false;
            }
            else if(repsNumber < 1)
            {
                alert("You must do at least 1 rep");
                return false;
            }
           
            //Validation for the date

             else if(dateEntered == '')
            {
                alert("You have to enter a date");
                return false;
            }
           else if(dateEntered > todaysDate)
            {
                alert("Workout has not yet been done")
                return false;
            } 
            else
            {
                return true;
            }
        }

        function displayDB()
        {
            let bodyPart = <?php echo htmlspecialchars($arrWorkouts['bodyPart']) ?>;
            let workoutName = <?php echo htmlspecialchars($arrWorkouts['workoutName']) ?>;
            let numSets = <?php echo htmlspecialchars($arrWorkouts['numSets']) ?>;
            let numReps = <?php echo htmlspecialchars($arrWorkouts['numReps']) ?>;
            let workoutDate = <?php echo htmlspecialchars($arrWorkouts['workoutDate']) ?>;
        
            let fieldset = document.createElement("fieldset");
            fieldset.class="fieldsetStyle";

            let legend = document.createElement("legend");
            legend.value="Your Workouts";
            fieldset.appendChild(legend);

            <?php foreach($sqlArray as $arrWorkouts): ?>

                let div = document.createElement("div");
                div.id="listContainer";
                fieldset.appendChild(div);

                let ul = document.createElement("ul");
                div.appendChild(ul);

                let li = document.createElement("li");
                li.class = "workoutList";
                li.value = bodyPart;
                ul.appendChild(li);

                let li = document.createElement("li");
                li.class = "workoutList";
                li.value = workoutNames;
                ul.appendChild(li);
                
                let li = document.createElement("li");
                li.class = "workoutList";
                li.value = numSets;
                ul.appendChild(li);
                
                let li = document.createElement("li");
                li.class = "workoutList";
                li.value = numReps;
                ul.appendChild(li);
                
                let li = document.createElement("li");
                li.class = "workoutList";
                li.value = workoutDate;
                ul.appendChild(li);

            <?php endforeach ?>
            document.getElementById("dbContainer").appendChild(fieldset);
        }
    </script>

</head>
<body>
    
    <header>
        <h1>Workout Tracker</h1>
        <div id="headerBlock"></div>
    </header>
    <div id="divSpacer">
    <form action="Project3.php" method="post">
<!-- Body part being worked out -->
    <select id="bodyPart" name="frmBodyPart" onchange="workoutNames()">
        <option value="abs">abs</option>
        <option value="back">back</option>
        <option value="biceps">biceps</option>
        <option value="forearm">forearm</option>
        <option value="leg">leg</option>
        <option value="shoulder">shoulder</option>
        <option value="triceps">triceps</option>
    </select>
<!-- Drop down list for the workout name -->
    <div id="containerWorkoutNames"> 
        <select id="workoutName" name="frmWorkoutName">
            <option value="push-up">push-up</option>
            <option value="plank">plank</option>
            <option value="sit-up">sit-up</option>
            <option value="crunch">crunch</option>
        </select>  
    </div>
    <input type="button" value="Add a workout" onclick="addWorkout()">
<div id="centerDiv">
<div id="flexDiv">
    <fieldset class="fieldsetStyle">
        <legend>Sets</legend>
        <input type="range" id="numOfSets" name="frmNumOfSets" min="1" max="15" value="1" onchange="displaySets()"> 
        <p id="setsValue">1</p> <!-- this is the value that is updated by the displaySets function -->
    </fieldset>
    <fieldset class="fieldsetStyle">
        <legend>Reps</legend>
        <input type="number" id="numOfReps" name="frmNumOfReps" placeholder="1">
    </fieldset>
    <fieldset class="fieldsetStyle">
        <legend>Date</legend>
        <input type="date" value="today()" id="dateOfWorkout" name="frmDateOfWorkout">
    </fieldset>
    </div>
    </form>

    <input type="Submit" name="btnSubmit" class="button" onclick="return inputValidation()"><!-- this onclick allows for the validation to run and if it is false the onclick will not submit to the database-->
    <input type="button" name="btnDisplayDb" value="Display Workouts" class="button" onclick="document.getElementById('dbContainer').style.display = 'inline'">

    <div id="dbContainer">
    <fieldset class="fieldsetStyle">
        <legend>Your Workouts</legend>

        <?php foreach($sqlArray as $arrWorkouts): ?>
        <div id="listContainer">
        <ul>
         <li class="workoutList"><?php echo htmlspecialchars($arrWorkouts['bodyPart']) ?></li>
         <li class="workoutList"><?php echo htmlspecialchars($arrWorkouts['workoutName']) ?></li>
         <li class="workoutList"><?php echo htmlspecialchars($arrWorkouts['numSets']) ?></li>
         <li class="workoutList"><?php echo htmlspecialchars($arrWorkouts['numReps']) ?></li>
         <li class="workoutList"><?php echo htmlspecialchars($arrWorkouts['workoutDate']) ?></li>
         </ul>
         </div>

        <?php endforeach ?>
        </fieldset>
    </div>
    
</div>
</body>
</html>