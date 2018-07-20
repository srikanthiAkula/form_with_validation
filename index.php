<html>
<head>
</head>
<body>
<form name="request_demo" id="request_demo">
          <span class="rsmessage"></span>
          <table class="table table-responsive">
          	<tr>
            	<td>Name</td>
            	<td><input type="text" name="fullname" value="" placeholder="Name" class="form-control" /></td>
            </tr>
            <tr>
            	<td>Corporation</td>
            	<td><input type="text" name="corporation" value="" placeholder="Corporation" class="form-control" /></td>
            </tr>
            <tr>
            	<td>No of Business Units</td>
            	<td><input type="text" value="" name="business_units" placeholder="No of Business Units" class="form-control" /></td>
            </tr>
            <tr>
            	<td>Demo Time</td>
                <td> <div class="input-group date date-time" id="datetimepicker3">
                    <input type='text' class="form-control" name="demo_time"/>
                    <span class="input-group-addon">
                        <span class="fa fa-clock-o"></span>
                    </span>
                </div>
                <div class="input-group date date-time" id='datetimepicker1'>
                    <input type='text' class="form-control" name="demo_date"/>
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
                </td>
            </tr>
            <tr>
            	<td>Corporate Email</td>
            	<td><input type="email" name="email" value="" placeholder="Corporate Email" class="form-control" /></td>
            </tr>
            <tr>
            	<td>Phone</td>
            	<td><input type="text" name="phone" value="" placeholder="Phone" class="form-control" /></td>
            </tr>
            <tr>
            	<td colspan="2" align="right"><button type="submit" class="btn btn-submit buzz-out">Submit</button></td>
            </tr>
          </table>
          </form>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    $(function () {
       $("form[name='request_demo']").validate({
          // Specify validation rules
          rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            fullname: "required",
            corporation: "required",
            email: {
              required: true,
              // Specify that email should be validated
              // by the built-in "email" rule
              email: true
            },
            phone: {
              required: true,
              minlength: 10
            }
          },
          // Specify validation error messages
          messages: {
            fullname: "Please enter your Name",
            corporation: "Please enter your Corporation",
            phone: {
              required: "Please provide phone number",
              minlength: "Invalid Number"
            },
            email: "Please enter a valid email address"
          },
          // Make sure the form is submitted to the destination defined
          // in the "action" attribute of the form when valid
          submitHandler: function(form) {
            var url="http://staffing.nimbleaccounting.com/staffing-beta/ajax_request_demo.php";
            jQuery.ajax({type:"POST",url:url,data:jQuery("#request_demo").serialize(),success:function(data){
              if(data==1){
                jQuery(".rsmessage").fadeIn();
                jQuery(".rsmessage").html("<span class='success-msg'>Thank you for the Request. We will contact you shortly.</span>");
                $("#request_demo")[0].reset();
              }
              else {
                jQuery(".rsmessage").fadeIn();
                jQuery(".rsmessage").html("<span class='error-msg'>Request failed. Please, send an email to <a href='mailto:sales@nimbleaccounting.com'>sales@nimbleaccounting.com</a></span>");
                $("#request_demo")[0].reset();
              }
            }});
            //form.submit();
          }
        });
    });
</script>
