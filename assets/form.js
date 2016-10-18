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

            console.log(data);

            $('.modal').modal('show')
        });

        return false;
    });

})
