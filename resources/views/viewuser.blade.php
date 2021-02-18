<html>
    <head>
        <title>View Employee Details</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  color: #233554;
  margin-left: auto;
  margin-right: auto;
}

td, th {
  border: 2px solid #233554;
  text-align: left;
  padding: 8px;
}

td:nth-child(1) {
    text-align: center;
}

tr:nth-child(even) {
  background-color: #233554;
  color: white; 
}

th{
    text-align: center;
}

button {
    background-color: white;
    color: #233554;
    border-radius: 40px;
    margin: auto;
    display: block;
    font-weight: bold;
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
      <h1 style="text-align: center; color:#233554 ">Customer Relationship Management System</h1>
      <h2 style="text-align: center; color:#233554">View and Update Employee Details</h2>
      <hr style="background-color:#233554; height: 5px">
      <br>

      <div class="container">
      <form method="post" id="myform1" action="">
        <table>
          <tr>
            <th >Emp ID</th>
            <th >Name</th>
            <th>User name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Address</th>
            <th >Position</th>
            <th >Role ID</th>
            <th >Added By</th>
            <th >Status</th>
            <th>Action</th>
          </tr>
          <tbody>
          @foreach($employees as $employee)
            <tr>
            <input type="hidden" class="delete_value" value="{{$employee->EmpID}}">
            <td>{{$employee['EmpID']}}</td>
            <td>{{$employee['Name']}}</td>
            <td>{{$employee['User_Name']}}</td>
            <td>{{$employee['Password']}}</td>
            <td>{{$employee['Email']}}</td>
            <td>{{$employee['MobileNo']}}</td>
            <td>{{$employee['Address']}}</td>
            <td>{{$employee['EmpType']}}</td>
            <td>{{$employee['RoleID']}}</td>
            <td>{{$employee['Added_By']}}</td>
            <td>{{$employee['Status']}}</td>
            <td>
                <div class="btn-group" role="group">
                 <button type="button" data-toggle="modal" data-target="#exampleModal1" >Delete</button>
                </div>

                <div class="btn-group" role="group">
                  <button type="button" data-toggle="modal" data-target="#exampleModal2" >Update</button>
                </div>
            </td>      
        </tr>
        @endforeach
        </tbody>
        </table>
        </form >
       
      </div>

      
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1" style="color:#233554">Delete Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color:#233554">
                        You are going to delete Emp ID {{$employee->EmpID}}. Do you want to continue ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-primary" form="myform1"><a href="/deleteUser/{{$employee['EmpID']}}" >Continue</a></button>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:#233554">Update Alert</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color:#233554">
                        You are going to update the progress of Emp ID {{$employee->EmpID}} . Do you want to continue ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="myform1" class="btn btn-primary"><a href="/updateUser/{{$employee['EmpID']}}" >Update</a></button>
                    </div>
                </div>
            </div>
        </div>
       
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>