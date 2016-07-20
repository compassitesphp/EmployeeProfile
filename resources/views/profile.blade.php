<!DOCTYPE HTML>
<html xmlns:th="http://www.thymeleaf.org">
    <head>

        <title>form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="stylesheet"
              href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script
        src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>

        <!-- <form action="#" th:action="@{/greeting1}" th:object="${greeting}" method="post">
        <p>Id: <input type="text" th:field="*{id}" /></p>
        <p>Message: <input type="text" th:field="*{content}" /></p>
        <p><input type="submit" value="Submit" /> <input type="reset" value="Reset" /></p>
    </form> -->


        <div class="container">

            <form role="form">

                <form class="form-horizontal" role="form">
                    <!-- <div class="form-group">
                            <label for="usr">Id</label> <input type="number"
                                    class="form-control" id="usr" required>
                    </div> -->
                    <div class="form-group">
                        <label for="usr">FirstName:</label> <input type="text"
                                                                   class="form-control" id="usr" required>
                    </div>
                    <div class="form-group">
                        <label for="usr">LastName:</label> <input type="text"
                                                                  class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label> <input type="email"
                                                                 class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mob">MobileNo:</label> <input type="mobileNo"
                                                                  class="form-control" id="mob" required>
                    </div>
                    <div class="container">
                        <form role="form">
                            <div class="form-group">
                                <label for="add">Address:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="doj">D.O.J:</label> <input type="doj"
                                                               class="form-control" id="doj" required>
                    </div>
                    <div class="form-group">
                        <label for="desg">Current Designation:</label> <input type="desg"
                                                                              class="form-control" id="desg" required>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="dropdown">

                                <label for="sel1">Departments:</label> <select class="form-control"
                                                                               id="sel1">
                                    <option>1. PHP</option>
                                    <option>2. Java</option>
                                    <option>3. UI design</option>
                                    <option>4. Android</option>
                                    <option>5. .Net</option>
                                    <option>4. Testingn</option>
                                </select> <br>

                            </div>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox">PHP<br></label>
                        <label><input type="checkbox">Java</label>
                        <label><input type="checkbox">C</label>
                        <label><input type="checkbox">C#</label>
                        <label><input type="checkbox">MySql</label>
                        <label><input type="checkbox">HTML</label>
                        <label><input type="checkbox">CSS</label>
                        <label><input type="checkbox">JavaScript</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
        </div>
    </body>
</html>