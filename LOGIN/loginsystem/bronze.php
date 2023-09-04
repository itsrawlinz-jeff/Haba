<?php
 session_start();
 require_once('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Haba Match Request</title>
    <!--Css Link  put after title  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!--Script Link  put befor end of </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>



    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<center>
    <h1> <b>FILL FORM TO REQUEST MATCH</b> </h1>
    <h2> <b>(BRONZE MEMBERSHIP PLAN)</b> </h2>

</center>

<body style="background-color:  #ffff99 ;color:black">

    <div class="container">
        <form name="match" class="" action="diamondaction.php" method="post">
            <div class="form-group pt-3">
                <label for="fullname">Your name</label>
                <input type="text" name="fullname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email address (Format: enquiries@habadatingclub.com)</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <?php 
    $query ="SELECT country_name ,phone_code FROM countries";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
                <label for="contact" style="color:red">Pick Your Country</label>

                <select class="custom-select" name="country" id="inputGroupSelect01">
                    <option>Select Country</option>
                    <?php 
                    foreach ($options as $option) {
                    ?>
                    <option>(+<?php echo $option['phone_code']; ?>) <?php echo $option['country_name']; ?> </option>
                    <?php 
                         }
                    ?>
                </select>
                <!-- <input type="contact" name="contact" value="+" class="form-control"> -->
            </div>
            <div class="form-group">
                <label for="contact" style="color:red">Mobile Number </label>
                <input name="contact" type="text" class="form-control mb-2 inptFielsd" id="phone"
                    placeholder="Phone Number" />
                <!-- <input type="contact" name="contact" value="+" class="form-control"> -->
            </div>
            <div class="form-group">
                <label for="datepicker-invalid">Your Date Of Birth (Format: DD/MM/YYYY)</label>

                <!--<b-form-datepicker id="datepicker-valid" :state="true"></b-form-datepicker>-->
                <input type="date" name="dob" id="dob" value="" />
                <!--<input type="date" name="dob" class="form-control">-->
            </div>
            <label for="gender">Your Gender (Format: Male/Female)</label>

            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Your Gender</label>
                </div>
                <select class="custom-select" name="gender" id="inputGroupSelect01">
                    <option name="gender" selected>Choose...</option>
                    <option name="gender" value="Male">Male</option>
                    <option name="gender" value="Female">Female</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="gender">Your Gender (Format: Male/Female)</label>
                <br>
                <label for="gender"> <b>Male</b> </label>
                <input type="checkbox" name="gender" value="Male">
                <label for="gender"> <b>Female</b></label>
                <input type="checkbox" name="gender" value="Female">

            </div> -->
            <label for="gender">Your Preferred partner PGender (Searching For)</label>

            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Searching For</label>
                </div>
                <select name="pgender" class="custom-select" id="inputGroupSelect01">
                    <option name="pgender" selected>Choose...</option>
                    <option name="pgender" value="Male">Male</option>
                    <option name="pgender" value="Female">Female</option>
                </select>
            </div>
            <!-- <div class="form-group">
                <label for="pgender">Searching For (Format: Male/Female)</label>
                <br>
                <label for="pgender"> <b>Male</b> </label>
                <input type="checkbox" name="pgender" value="Male">
                <label for="pgender"> <b>Female</b></label>
                <input type="checkbox" name="pgender" value="Female">
            </div> -->
            <label for="rstatus">Your Relationship Status (Format: Single/Married/Divorced)</label>


            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Relastionship Status</label>
                </div>
                <select class="custom-select" name="rstatus" id="inputGroupSelect01">
                    <option name="rstatus" selected>Choose...</option>
                    <option name="rstatus" value="Single">Single</option>
                    <option name="rstatus" value="Married">Married</option>
                    <option name="rstatus" value="Divorced">Divorced </option>

                </select>
            </div>
            <label for="smoke">Do You Smoke? </label>

            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Do You Smoke?</label>
                </div>
                <select class="custom-select" name="smoke" id="inputGroupSelect01">
                    <option name="smoke" selected>Choose...</option>
                    <option name="smoke" value="Never">Never</option>
                    <option name="smoke" value="Moderately">Moderately</option>
                    <option name="smoke" value="Regularly">Regulary </option>

                </select>
            </div>

            <label for="drink">Do You Drink? </label>
            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Do You Drink?</label>
                </div>
                <select class="custom-select" name="drink" id="inputGroupSelect01">
                    <option name="drink" selected>Choose...</option>
                    <option name="drink" value="Never">Never</option>
                    <option name="drink" value="Moderately">Moderately</option>
                    <option name="drink" value="Regularly">Regulary </option>


                </select>
            </div>
            <label for="drink">Should Your Partner Do You Drink? </label>
            <div class="input-group mb-3">
                <br>

                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Should Your Match Drink?</label>
                </div>
                <select class="custom-select" name="pdrink" id="inputGroupSelect01">
                    <option name="pdrink" selected>Choose...</option>
                    <option name="pdrink" value="Never">Never</option>
                    <option name="pdrink" value="Moderately">Moderately</option>
                    <option name="pdrink" value="Regulary">Regulary </option>
                    <option name="pdrink" value="No Preference">No Preference </option>


                </select>
            </div>



            <div class="form-group">
                <label for="income">Whats Your Income Bracket (Check One Box)</label><br>
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Income Bracket</label>
                </div>
                <select class="custom-select" name="income" id="inputGroupSelect01">
                    <option name="income" selected>Choose...</option>
                    <option name="income" value="Never">Less than 25,000</option>
                    <option name="income" value="Moderately">$5000 to $10000</option>
                    <option name="income" value="$20001 to $35000">$20001 to $35000</option>
                    <option name="income" value="$35001 to $50001">$35001 to $50001 </option>
                    <option name="pdrink" value="$50001 and above">$50001 and above </option>


                </select>
            </div>


            <div class="form-group">
                <label for="partnerminage">Required Partner Age Bracket
                </label>
                <div class="input-group mb-3">
                    <br>

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">I Want Between Age</label>
                    </div>
                    <select class="custom-select" name="partnerage" id="inputGroupSelect01">
                        <option name="partnerage" selected>Choose...</option>
                        <option name="partnerage" selected>No Preference</option>
                        <option name="partnerage" value="18-25">18-25</option>
                        <option name="partnerage" value="26-30">26-30</option>
                        <option name="partnerage" value="41-50">41-50 </option>
                        <option name="partnerage" value="51-60">51-60 </option>
                        <option name="partnerage" value="61-70">61-70 </option>
                        <option name="partnerage" value="71-80">71-80 </option>
                        <option name="partnerage" value="80 And Above">80 And Above </option>



                    </select>
                </div>
            </div>
            <!-- <div class="form-group">
                    <label for="partnermaxage">Req Partner Max Age (Format:50/No Preference)</label>
                    <input type="text" name="partnermaxage" class="form-control">
                </div> -->
            <div class="form-group">
                <label for="chronic">Do You Have Any Chronic Illness? </label>
                <div class="input-group mb-3">
                    <br>

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Any Chronic Illness?</label>
                    </div>
                    <select class="custom-select" name="chronic" inputGroupSelect01">
                        <option name=" chronic " selected>Choose...</option>
                        <option name=" chronic" value=" Yes,i have Chronic Illness">Yes,i have Chronic Illness</option>
                        <option name=" chronic" value=" Yes,i have Chronic Illness">No i dont have Chronic Illness
                        </option>


                    </select>
                </div>

            </div>
            <div class="form-group">
                <label for="chronic">Choose Haba Service <a href="https://habadatingclub.com/packages.php">Click Here To
                        View Haba Membership</a></label>
                <div class="input-group mb-3">
                    <br>

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Membership </label>
                    </div>
                    <select class="custom-select" name="membership" inputGroupSelect01">
                        <option name=" membership " selected>Choose...</option>
                        <option name="membership " value=" Membership For Men">Membership For Men</option>
                        <option name="membership " value=" Membership For Women">Membership For Women</option>
                        <option name="membership " value="Black And White Dating">Black And White Dating</option>
                        <option name="membership " value="VIP And LUxury Dating">VIP And LUxury Dating</option>
                        <option name="membership " value=" 1">Safari Dating Membership</option>
                        <option name=" membership " value="Safari Dating Membership">New Town Guide And EScort
                            Membership</option>


                    </select>
                </div>

            </div>
            <div class="form-group">
                <label for="chronic">Your Haba Package Plan
                </label>
                <div class="input-group mb-3">
                    <br>

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Subscription Plan</label>
                    </div>
                    <select class="custom-select" name="plan" inputGroupSelect01" readonly>
                        <!-- <option name=" plan " selected>Choose...</option> -->
                        <!-- <option name=" plan" value=" Haba Gold">Haba Gold $75</option> -->
                        <!-- <option name=" plan" value=" Haba Silver">Haba Platinum $150</option> -->
                        <option name="plan" value=" Haba Bronze" readonly>Haba Bronze $200</option>

                    </select>
                </div>

            </div>

            <p>
                <input type="submit" name="save" id="Submit"
                    onclick="window.location.href = 'https://habadatingclub.com/LOGIN/loginsystem/MPESA/diamondpay.php' type="submit"
                    class="btn btn-success" value="SUBMIT REQUEST" />


                <!-- <input type="submit" name="save" id="Submit" value="Submit"> -->
            </p>
    </div>

    </form>

    <!-- you need to include the shieldui css and js assets in order for the components to work -->
    <link rel="stylesheet" type="text/css"
        href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js">
    </script>
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

    <script type="text/javascript">
    jQuery(function($) {
        $("#exportButton").click(function() {
            // parse the HTML table element having an id=exportTable
            var dataSource = shield.DataSource.create({
                data: "#exportTable",
                schema: {
                    type: "table",
                    fields: {
                        Name: {
                            type: String
                        },
                        Age: {
                            type: Number
                        },
                        Email: {
                            type: String
                        }
                    }
                }
            });

            // when parsing is done, export the data to PDF
            dataSource.read().then(function(data) {
                var pdf = new shield.exp.PDFDocument({
                    author: "PrepBootstrap",
                    created: new Date()
                });

                pdf.addPage("a4", "portrait");

                pdf.table(
                    50,
                    50,
                    data,
                    [{
                            field: "Name",
                            title: "Person Name",
                            width: 200
                        },
                        {
                            field: "Age",
                            title: "Age",
                            width: 50
                        },
                        {
                            field: "Email",
                            title: "Email Address",
                            width: 200
                        }
                    ], {
                        margins: {
                            top: 50,
                            left: 50
                        }
                    }
                );

                pdf.saveAs({
                    fileName: "PrepBootstrapPDF"
                });
            });
        });
    });
    </script>

    <style>
    #exportButton {
        border-radius: 0;
    }
    </style>
    <script type="text/javascript">
    document.oncontextmenu = new Function("return false");
    </script>


    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        separateDialCode: true,
        customPlaceholder: function(
            selectedCountryPlaceholder,
            selectedCountryData
        ) {
            return "e.g. " + selectedCountryPlaceholder;
        },
    });
    </script>
    <!-- REQUIRED CDN  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
        crossorigin="anonymous"></script>


    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>