$(document).on("ready", function(){
    // enable jQuery datepicker
    $( "#start_date" ).datepicker();

    // Clear form data
    $("#clear_button").on("click", function(){
        $("#employee_form input").val("");
    });

    $("#employee_form").on("submit", function(e){
        e.preventDefault();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var start_date = $("#start_date").val();

        var postData = {
            'first_name' : first_name,
            'last_name' : last_name,
            'start_date' : start_date
        };

        $.post('/main/form_data', postData, function(data){
            //This should be JSON preferably. but can't get it to work on jsfiddle
            //Depending on what your controller returns you can change the action
            // if (data == 'PASS') {
            //     alert('login pased');
            // } else {
            //     alert('login failed');
            // }
            console.log(data);

            $('.modal').modal('show') 
        });

        // Returns successful data submission message when the entered information is stored in database.
        // var dataString = 'first_name='+ first_name + '&last_name='+ last_name + '&start_date='+ start_date;

        // if(first_name==''||last_name==''||start_date=='')
        // {
        //     alert("Please Fill All Fields");
        // }
        // else
        // {
        //     // AJAX Code To Submit Form.
        //     $.ajax({
        //         type: "POST",
        //         url: "form_data",
        //         data: dataString,
        //         cache: false,
        //         success: function(result){
        //             alert(result);
        //         }
        //     });
        // }
        return false;
    });

})
