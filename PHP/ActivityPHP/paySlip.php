<!DOCTYPE html>
<head>
    <title>Payroll Report</title>
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
        .container-main{
            background-color: rgb(173, 204, 194);
            margin: auto;
            max-width: 1000px;
            padding: 30px;
            border-radius: 30px;
            color: black;
            display:flex;
            flex-direction: column;
        }
        .inline{
            display: flex;
        }
        .header{
            font-size: large;
            font-weight: bold;
        }
        .desc{
            font-weight: bold;
            width: 200px;
            text-align: right;
            padding-right:  10px;
            margin: 3px 0;
            background-color: rgb(45, 64, 58);
            color: white;
            border-radius: 3px 0 0 3px;
        }

        .value{
            width: 100%;
            padding-left:  10px;
            margin: 3px 0;
            background-color: white;
            border-radius: 0 3px 3px 0;
        }

        .numInfo .desc{
            min-width: 170px;
            width: 20%;
        }

        .earnings .value{
            width: stretch;
            margin-right: 10px;
        }

        .half{
            width: 50%;
        }

        .netPay{
            font-size:22px;
            font-weight:bold;
        }

    </style>
</head>


<body>
    <br>
    <h1 class="page-header text-center">PAYROLL REPORT</h1>

    <?php
        //functions
        function add(array $nums){
            $sum = 0;
            foreach ($nums as $num){
                $sum = $sum + $num;
            }
            return $sum;
        }


        //variables
        $empId = $_POST['empId'];
        $empName = $_POST['first'] . " " . $_POST['mi'] . " " . $_POST['last'];
        $totalEarn = add(array($_POST['basic'], $_POST['incPay'], $_POST['hRent'], $_POST['meal']));
        $totalDeduc = add(array($_POST['provFund'], $_POST['tax'], $_POST['loan']));
        
        
        echo "
        <div class='container container-main'>
        <div>
            <span class='header'>Employee Details</span>
            <div class='inline'>
                <div class='desc'>Employee ID </div>
                <div class='value'>$empId</div>
            </div>
            <div class='inline'>
                <div class='desc'>Name: </div>
                <div class='value'>$empName</div>
            </div>
            <br>
        </div>

        <div class='inline numInfo'>
            <div class='half earnings'>
                <span class='header'>Earnings</span>
                <div class='inline'>
                    <div class='desc'>Basic:</div>
                    <div class='value'>" .$_POST['basic']."</div>
                </div>
                <div class='inline'>
                    <div class='desc'>Incentive Pay:</div>
                    <div class='value'>" .$_POST['incPay']. "</div>
                </div>
                <div class='inline'>
                    <div class='desc'>House Rent Allowance:</div>
                    <div class='value'>" .$_POST['hRent']. "</div>
                </div>
                <div class='inline'>
                    <div class='desc'>Meal Allowance:</div>
                    <div class='value'>" .$_POST['meal']. "</div>
                </div>
            </div>

            <div class='half'>
                <span class='header'>Deductions</span>
                <div class='inline'>
                    <div class='desc'>Provident Fund:</div>
                    <div class='value'>" .$_POST['provFund']. "</div>
                </div class='inline'>
                <div class='inline'>
                    <div class='desc'>Tax:</div>
                    <div class='value'>" .$_POST['tax']. "</div>
                </div>
                <div class='inline'> 
                    <div class='desc'>Loan:</div>
                    <div class='value'>" .$_POST['loan']. "</div>
                </div>
            </div>
        </div>
        <br>
        <div class='inline'>
            <div class='half earnings'>
                <span class='header'>Computations</span>
                <div class='inline'>
                    <div class='desc'>Total Earnings:</div>
                    <div class='value'>" .$totalEarn. "</div>
                </div class='inline'>
                <div class='inline'>
                    <div class='desc netPay'>Net Pay:</div>
                    <div class='value netPay'>" .$totalEarn-$totalDeduc. "</div>
                </div>
            </div>

            <div class='half'>
                <span class='header'><br></span>
                <div class='inline'>
                    <div class='desc'>Total Deductions:</div>
                    <div class='value'>" .$totalDeduc. "</div>
                </div class='inline'>

                <div>
                    <button class='btn btn-success' onclick='history.go(-1)'><span class='glyphicon glyphicon-share-alt'></span> GO BACK</button>
                </div>
            </div>
        </div>
    </div>
        
        ";

    ?>

</body>
</html>