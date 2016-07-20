<!DOCTYPE html>
<html>
    <head>
        <title>Add department</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    </head>
    <body> 
        <div class='container'>
            <h2>Department List</h2>
            <table class='table table-bordered'>
                <thead>
                    <tr>

                        <th>Department Id</th>
                        <th>Department Name</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($response as $departmentData)
                    <tr>
                        <td> {{ $departmentData->id }} </td>
                        <td> {{ $departmentData->dept_name }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <div class='container'>
            <a href="/add">Add</a>
        </div>
            </body>
            </html>






            <!--
            <!DOCTYPE html>
            <html>
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                </head>
                <body>
            
                    <div class="container">
            
                        <h2>Departments</h2>
            
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Department
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Java</a></li>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">.Net</a></li>
                                <li><a href="#">UI design</a></li>
            
                            </ul>
                        </div>
                    </div>
            
                </body>
            </html>-->

