"use strict";

(function (){
    var detonationTimer = 5;
    var interval = 1000;  //1000 milliseconds = 1 second

    // TODO: This function needs to be called once every second
    function updateTimer()
    {
        if (detonationTimer == 0) {
            alert('EXTERMINATE!');
            document.body.innerHTML = '';
        } else if (detonationTimer > 0) {
            document.getElementById('timer').innerHTML = detonationTimer;
        }
        detonationTimer--;
    }

    // TODO: When this function runs, it needs to
    // cancel the interval/timeout for updateTimer()
    function defuseTheBOM()
    {
        clearInterval(intervalId);
    }

    var intervalId = setInterval(updateTimer, interval);

    // Don't modify anything below this line!
    //
    // This causes the defuseTheBOM() function to be called
    // when the "defuser" button is clicked.
    // We will learn about events in the DOM lessons
    var defuser = document.getElementById('defuser');
    defuser.addEventListener('click', defuseTheBOM, false);
})();