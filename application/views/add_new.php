<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form_style.css">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <link rel="stylesheet" href="/resources/demos/style.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
 <script src="assets/form.js"></script>
</head>
<body class="container">
    <!-- Form that submits through ajax, saves data in db, and returns with success/failure, pop up modal with added data -->
    <div class="container" id="form_div">
        <h2>Form</h2>
        <form class="form-horizontal" id="employee_form">
            <div class="form-group">
                <label for="first_name" class="col-sm-3 col-sm-offset-2 control-label">First Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="first_name">
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-3 col-sm-offset-2 control-label">Last Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="last_name">
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="form-group">
                <label for="start_date" class="col-sm-3 col-sm-offset-2 control-label">Start Date</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="start_date">
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="form-group col-sm-4 col-sm-offset-8">
                <button type="button" id="clear_button" name="button">Clear</button>
                <button type="submit" name="button">Submit</button>
            </div>
        </form>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
