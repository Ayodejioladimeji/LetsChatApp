function showTime() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    var session = "AM";

    if (h == 0) {
        h = 12;
    }

    if (h > 12) {
        h = h - 12;
        session = "PM";
    }

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + "" + session;
    document.getElementById("Myclock").innerHTML = time;
    document.getElementById("Myclock").textContent = time;

    setTimeout(showTime, 1000);
}

showTime();


// Show todays date
const dateElement = document.getElementById("date");

const options = { weekday: "long", month: "short", day: "numeric" };
const today = new Date();

dateElement.innerHTML = today.toLocaleDateString("en-US", options);



        
        // $(document).ready(function(){
        //     $('#message_form').on('submit', function(event){
        //         event.preventDefault();
        //         if($('#title').val() != ''){
        //             var formData = $(this).serialize();
                     
        //             $.ajax({
        //                 url:'home_connection.php',
        //                 method:'POST',
        //                 data:formData,
        //                 success:function(data){
        //                     alert(data);
        //                 }
        //             });
        //         }
        //         else{
        //             alert('error fields');
        //         }
        //     });
        // });


