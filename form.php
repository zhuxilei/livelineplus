<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
    crossorigin="anonymous">

    <title>Form</title>
    <style>
        form{
            width:80%;
        }
        </style>
</head>
<body>
<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4 mb-4">Symptom Check</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->

	<div class="container">

		<form action="form_confirmation.php" method="POST">

			<div class="form-group row">
				<label for="username-id" class="col-sm-3 col-form-label text-sm-right">Name: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="username-id" name="username">
					<small id="username-error" class="invalid-feedback">Username is required.</small>
				</div>
			</div> <!-- .form-group -->



			<div class="form-group row">
				<label for="county-id" class="col-sm-3 col-form-label text-sm-right">Current County You Are In: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="county-id" name="county">
				</div>
            </div> <!-- .form-group -->

            <div class="form-group row">
                    Are you a confirmed patient :    
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" name="confirmed">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" name="confirmed">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>

            </div>


            <div class="form-group row">
                    Have you been in close contact with confirmed patient? :  <span class="text-danger">*</span>  
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" name="close_contact">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" name="close_contact">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>

            </div>

            <div class="form-group row">
                    Do you have the symptoms listed below? :   <span class="text-danger">*</span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" name="symptom">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" name="symptom">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                <ul>
                    <li>Fever or chills</li>
                    <li>Cough</li>
                    <li>Shortness of breath or difficulty breathing</li>
                    <li>Fatigue</li>
                    <li>Muscle or body aches</li>
                    <li>Headache</li>
                    <li>Sore throat</li>
                    <li>Congestion or runny nose</li>
                    <li>Nausea or vomiting</li>
                    <li>Diarrhea</li>
                </ul>

            </div>

            <div class="form-group row">
				<label for="temp-id" class="col-sm-3 col-form-label text-sm-right">Current Body Temperature: <span class="text-danger">*</span></label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="temp-id" name="temp">
				</div>
			</div> <!-- .form-group -->	


        

            

			<div class="row">
				<div class="ml-auto col-sm-9">
					<span class="text-danger font-italic">* Required</span>
				</div>
			</div> <!-- .form-group -->

			<div class="form-group row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 mt-3">
					<button type="submit" class="btn btn-primary">Register</button>
					<a href="home.php" role="button" class="btn btn-light">Cancel</a>
				</div>
			</div> <!-- .form-group -->

			<div class="row">
				<div class="col-sm-9 ml-sm-auto">
					<a href="login.php">Already have an account</a>
				</div>
			</div> <!-- .row -->

		</form>
	</div> <!-- .container -->
	
	<div id="footer">
	
    </div>



    
</body>
</html>