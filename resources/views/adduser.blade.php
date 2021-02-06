<html>
<head>
<title>Register New User</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>
            button {
                background-color: white;
                color: #233554;
                border-radius: 40px;
                margin: auto;
                display: block;
                float: right;
            }

            label{
                color: #233554;
            }

            option{
                color: #233554;
            }

            form{
                margin-left: auto;
                margin-right: auto;
                border: 2px;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 40px;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
            }

            .text-my-own-color {
                color: #233554 !important; 
            }

            a:hover {
                text-decoration: none;
            }

            a:active {
                text-decoration: none;
            }

            .btn-primary {
                background-color: #233554 !important;
                color: white !important; 
                border-color: white !important;
                border-radius: 40px !important;
            }

            .btn-secondary {
                background-color: white !important;
                color: #233554 !important; 
                border-color: #233554 !important;
                border-radius: 40px !important;
            }
        </style>  
</head>

<body>
<h1 style="text-align: center; color:#233554">Customer Relationship Management System</h1>
        <h2 style="text-align: center; color:#233554">Register New User</h2>
        <hr style="background-color:#233554; height: 5px">
        <br>
        <div class="container">

            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
            <form method="POST" action="/save" id="myform">
                @csrf
                <label for="Name" ><b>Name : </b></label>
                <input type="text" name="Name" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter name here">
                <br>
                <label for="Emp ID" ><b>Emp ID : </b></label>
                <input type="text" name="EmpID" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter employee ID here">
                <br>
                <label for="Emp ID" ><b>Username : </b></label>
                <input type="text" name="Username" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter user name here">
                <br>
                <label for="Emp ID" ><b>Password : </b></label>
                <input type="password" name="Password" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter password here">
                <br>
                <label for="Mobile Number" ><b>Mobile Number : </b></label>
                <input type="text" name="Mobile_Number" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter contact number here">
                <br>
                <label for="Email" ><b>Email : </b></label>
                <input type="text" name="Email" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter email  here">
                <br>
                <label for="Address" ><b>Address : </b></label>
                <input type="text" name="Address" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter address here">
                <br>
                <label for="Added By" ><b>Added By : </b></label>
                <input type="text" name="Added_by" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter added by name here">
                <br>
                <label for="RoleID" ><b>Role ID : </b></label>
                <input type="text" name="Role_ID" required style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" placeholder="Enter role ID name here">
                <br>
                
                <label for="Position"><b>Position : </b></label>
                <select  name="Position" style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" >
                    <option value="Customer Care Person">Customer Care Person</option>
                    <option value="Service Person">Service Person</option>
                    <option value="Quotation Team Member">Quotation Member</option>
                    <option value="Follow Up Person">Follow Up Person</option>
                    <option value="Admin">Admin</option>
                </select>
                <br>
                <label for="Status"><b>Status : </b></label>
                <select  name="status" style="background: #ffffff; margin: 5px 0 22px 0; border: none; padding: 10px; width: 100%" >
                    <option value="Active">Active</option>
                    <option value="Leave">Leave</option>
                </select>
                <br>
                <br>
                <div class="btn-group float-right" role="group">
                <button type="button" data-toggle="modal" data-target="#exampleModal" >Add Employee</button>
                </div>
                <div class="btn-group float-right mr-2 " role="group">
                <button type="submit" ><a href="/View-User" class="text-my-own-color">Cancel</a></button>
                </div>
                
            </form>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color:#233554">
                        You are going to add new employee. Do you want to continue ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="myform" class="btn btn-primary">Continue</button>
                    </div>
                </div>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
