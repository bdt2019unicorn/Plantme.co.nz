function SetDateOfBirth()
{
    var dob = document.getElementById('dob');
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    
    if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 
    
    today = yyyy+'-'+mm+'-'+dd;
    dob.setAttribute("max", today);
    dob.value = today;
}

SetDateOfBirth(); 