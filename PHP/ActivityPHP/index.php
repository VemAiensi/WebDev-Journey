<!DOCTYPE html>
<head>
    <title>Employee's Payroll</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        body
        {
            padding: 40px;
        }
        .container-main{
            background-color: rgb(42, 32, 99);
            margin: auto;
            max-width: 700px;
            padding: 30px;
            border-radius: 30px;
            color: white;
        }

        .part{
            display:flex;
            background-color: black;
            justify-content: center;
            border-radius: 10px;
            margin: 10px 0;
        }

        .line{
            height: 2px;
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container-flex container-main">
        <div class="page-header text-center">
            <h1>EMPLOYEE'S PAYROLL</h1>
        </div>

        <form method="POST" action="paySlip.php">
            <div class="part">
                <span>Employee Details</span>
            </div>

            <div class="container-flex">
                <div class="form-group">
                    <label form="name">Employee ID</label>
                    <input type="text" name="empId" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">Last Name</label>
                    <input type="text" name="last" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">First Name</label>
                    <input type="text" name="first" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">MI.</label>
                    <input type="text" name="mi" class="form-control">
                </div>
            </div>

            <div class="part">
                <span>Payroll Details</span>
            </div>

            <div class="container-flex">
            
                <div class="form-group">
                    <label form="name">Basic</label>
                    <input type="number" name="basic" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">Incentive Pay</label>
                    <input type="number" name="incPay" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">House Rent Allowance</label>
                    <input type="number" name="hRent" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">Meal Allowance</label>
                    <input type="number" name="meal" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">Provident Fund</label>
                    <input type="number" name="provFund" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">Tax</label>
                    <input type="number" name="tax" class="form-control">
                </div>
                <div class="form-group">
                    <label form="name">Loan</label>
                    <input type="number" name="loan" class="form-control">
                </div>
            
                <input type="submit" value="submit" class="btn btn-success">
            
                <br>
            </form>
        </div>
    </div>
</body>
</html>