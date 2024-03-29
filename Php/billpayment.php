<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payments and Recharge - Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/billpayment.css">
</head>
<body>
    <header>
        <div class="nav">
            <a href="/Php/index.php">
            <img src="../images/logo1.png" class="logo">
            </a>
            <div class="main">
                <div class="dropdown">
                    <button>Accounts</button>
                    <div class="sub">
                    <a href="/php/home1.php">Account Balance</a>
                    <a href="/php/summary1.php">Transactions</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button>Loans</button>
                    <div class="sub">
                    <a href="/php/personal.php">Personal Loan</a>
                    <a href="/php/homeloan.php">Home Loan</a>
                    <a href="/php/carloan.php">Car Loan</a>
                    <a href="/php/education.php">Education Loan</a>
                    <a href="/php/gold.php">Gold Loan</a>
                    <a href="/php/loanform.php">Loan Application form</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button>Bill Payment</button>
                    <div class="sub">
                    <a href="/php/billfirst.php">Payment</a>
                    <a href="/php/creditcard.php">Credit card bill payment</a>
                    <a href="#">Bill payments and recharge</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button>Transfer</button>
                    <div class="sub">
                    <a href="/php/fundtransfer.php">Fund Transfer</a>
                    </div>
                </div>
                <div class="logout">
                    <a href=""><img src="../images/logout.png" id="logoutBtn"></a>
                </div>
            </div>           
        </div>
    </header>
    <div class="imghead">   
             <img src="../images/billhead.jpg" width="100%" height="600px" style="object-fit: cover;">
         
            <h1>Streamline your bill payments</h1>
            <p>Easily make payments with features such as:</p>
            <p id="cont">Quick Pay | Auto Pay | FasTag Recharge | DTH Recharge | Mobile Recharge</p>
            <a href="/php/billpay.php">
                <button type="submit" id="btn">Pay Now</button>
            </a>
        
    </div>
    <div class="body">

        <div class="nav">
        
                <center><table cellspacing="70px">
                    <tr>
                        <td>
                            <a href="#billrecharge">
                            Overview
                        </a>
                        </td>
                        <td>
                            <a href="#keyfeatures">
                                 Key Features
                            </a>

                        </td>
                        <td>
                            <a href="#billers">
                                 Billers
                            </a>
                        </td>
                        <td>
                            <a href="#pay">
                                Bill Payments and Online Recharge
                            </a>
                        </td>
                    </tr>
                </table></center>
            
        </div>

        <div class="billpay" id="billrecharge">
            <h1 style="color: #003e7e;">Bill Payments and Recharge</h1>
            <p>Experience the convenience of timely bill payments with Crown Bank. Manage all your bill payments seamlessly 
                without any inconvenience. Pay for various services including electricity, gas, landline connection, and more,
                 with ease through our online payment portal.<span id=dots></span>
                </p>
                 <p>
                    <span id="more">Moreover, you can also recharge your DTH and mobile phone online with just a few clicks</span>

                </p>

                <button onclick="myFunction()" id="myBtn" style="color: #003e7e; background-color: white; border-color: white; 
                font-family: Roboto, sans-serif; font-weight:bolder;">Read more</button>
        </div>
        <div class="keyfeatures" id="keyfeatures">
            <h1 style="color: #003e7e; font-weight: bold;"><center>Key Features</center></h1>
            <center><p>Wave a goodbye to late bill payments as Our payment channels provide you with access to prevent late bill payments.</p></center>
        </div>
        <div class="icons">
            <table style="word-wrap: normal; ">
                <tr>
                    <td> 
                        <center><img src="../images/reminder.png" width="30px" height="30px"></center>
                        <p>Receive advance notifications to keep track of your online payment deadlines</p>
                    </td>
                    <td>
                        <center><img src="../images/intimation.png" width="30px" height="30px"></center>
                        <p>Receive notifications if any issues occur with your billers</p>
                    </td>
                    <td>
                        <center><img src="../images/guaranteed.png" width="30px" height="30px"></center>
                        <p>Ensure that your bill payments are completed promptly</p>
                    </td>
                   <!-- <td>
                        <center><img src="./bill-images/noti.png" width="30px" height="30px"></center>
                        <p>notifications when you receive a bill</p>
                    </td>-->
                    
                </tr>
         
            </table>
        </div>


            <div class="billercateg" id="billers" style="background-color: rgb(241, 236, 236);padding: 10px;">
            <center><h1 style="color: #003e7e; font-weight: bold;">Biller-Categories</h1></center>
            <div class="flex-container" style="margin-top: -0.5%;" >
                <div class="column column-1"> <center><img src="../images/billcard.jpg" width="250px" height="270px"></center></div>
                <div class="column column-2"> 
                    
                  
                     
                  <ul style="color: rgb(61, 60, 60);">
                    <li>Electricity</li>
                    <li>Mobile Postpaid</li>
                    <li> Landline</li>
                    <li>Piped Gas</li>
                    <li>Water</li>
                    <li>Broadband</li>
                    <li>Loan Repayment</li>
                    <li>Credit Card</li>
                    <li>FasTag</li>
                    <li>DTH Recharge</li>
                    <li>Mutual Fund</li>
                    <li>Insurance</li>
                    <li>Doante</li>
                    <li>Book a Cylinder</li>
                    <li>School/College Fees </li>
                    <li>Rental</li>
                    <li>Municipal Tax</li>
                    <li>Subscription</li>


                </ul>
                
                </div>
               
                
              </div>
             
           
            
        </div>
        <div class="apply">
        </div>

        <div class="billtypes">
            <h1 style="font-weight: bold;">Types of Billers</h1>
            <div class="text-box">
                <div class="header">
                  <span>Presentment Billers</span>
                  <span class="arrow" style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">▼</span>
                </div>
                
                <p class="content">These billers, directly bill and collect payments. The billers in question present the complete amount
                    
                    that is required to be paid, and for this category of billers, you have the option to enable autopay to pay off the
                     entire balance in a single transaction. Additionally, you can establish a payment cap for each biller, and if the bill
                      total surpasses this limit, you will be alerted immediately. <br><br> But there are restrictions, such as:<br><br>
                      
  
                          1. You cannot make part payments.<br>
  
                          2. You cannot make an online payment past the due date. However, you can make pre-payments.<br>
                         3. You cannot make a payment till the bill is presented for payment.<br>
               
                   
                    
                </p>
              </div>

        </div>

        
        <div class="billtypes">
            
            <div class="text-box">
                <div class="header">
                  <span>Payment Billers</span>
                  <span class="arrow" style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">▼</span>
                </div>
                
                <p class="content">If a bill is not presented by these billers, you have the option to either make unscheduled payments
                     or establish a payment plan specifying the payment amount, frequency, and schedule. 
                    We will not exceed the payment amounts allocated for each biller
               
                   
                    
                </p>
              </div>

        </div>
    



        <div class="flex-container" id="pay" style="margin-top: -0.5%;" >
            <div class="column column-1"> <center><img src="../images/recharge (2).jpg" width="280px" height="270px"></center></div>
            <div class="column column-3"> 
                
             <h1 style="font-size: x-large; color: rgb(71, 71, 71); margin-top: 50px;">
                Bill Payments and Online Recharge: Bill registration/AutoPay/Recharge
            </h1>
            <p>
                Get instant access to complete your DTH recharge, online mobile recharge, biller registration, Auto Pay, and more through our channels.
                 Recharge billers are prepaid service providers that require payment prior to using their services. You have the flexibility to log into
                  your account and recharge your DTH or mobile online with your preferred amount or select from various plans that we offer.
                 Additionally, you can set up Auto Pay and enjoy peace of mind, knowing that your bills will always be paid on time.
            </p>  
            </div>
          </div>
    </div>


    <div class="steps" style="background-color: rgb(231, 231, 231); padding: 10px; padding-bottom: 20px;">
        <p style="margin-left: 10%; margin-right: 10%; font-size: 20px; color: rgb(94, 93, 93); font-weight:bolder ;">Steps to Follow</p>
            
        <div class="text-box"  style="margin-left: 10%; margin-right: 10%; background-color: white;">
            <div class="header">
              <span>Bill Registration</span>
              <span class="arrow" style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">▼</span>
            </div>
            
            <p class="content" style="line-height: 40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; color: rgb(80, 80, 80);">Here's a simple guide to follow:<br>

                •  Log in to your Net/Mobile Banking account.<br>
                
                •  Navigate to the Pay section, select the relevant category, and choose whether to pay an existing or new biller.<br>
                
                •  Provide the necessary details and confirm the payment.<br>
                
                •  Once the payment is processed, the bill registration will be completed automatically.<br>
           
               
                
            </p>
        </div>
        <div class="text-box"  style="margin-left: 10%; margin-right: 10%; background-color: white;">
            <div class="header">
                <span>Mobile Recharge</span>
                <span class="arrow" style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">▼</span>
            </div>
        
            <p class="content" style="line-height: 40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; color: rgb(80, 80, 80);">Here's a simple guide to follow:<br>

                • Navigate to the Pay section.<br>

                • Select the category of the biller you want to pay.<br>
                
                • Choose to pay an existing biller or add a new one.<br>
                
                • Provide the necessary details and confirm the payment.<br>
                
                • Click on the option to enable auto pay.<br>
                
                • Once you have enabled auto bill payment, it will be activated for the biller you have selected.<br>

            </p>
        </div>


        <div class="text-box"  style="margin-left: 10%; margin-right: 10%; background-color: white;">
            <div class="header">
                <span>DTH Recharge</span>
                <span class="arrow" style="font-family: Verdana, Geneva, Tahoma, sans-serif; ">▼</span>
            </div>
        
            <p class="content" style="line-height: 40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; color: rgb(80, 80, 80);">Here's a simple guide to follow:<br>

                • Log in to your Net/Mobile banking account.<br>

                • Navigate to the Pay section.<br>
                
                • Click on the option for Recharge.<br>
                
                • Select the DTH service and the corresponding service provider.<br>
                
                • Enter your subscriber ID and other relevant details.<br>
                
                • Choose the amount you want to recharge with and proceed to pay.
            </p>
        </div>
    </div>
    <footer>
        <div class="foot">
            <div class="foot-mid">
                <div class="social-links">
                    <p class="soc-link">CONNECT WITH US ON</p>
                    <ul>
                        <li>
                            <a class="pic-link" href="https://www.facebook.com/">
                                <img src="../images/facebook.png" width="34">
                            </a>
                        </li>
                        <li>
                            <a class="pic-link" href="https://twitter.com/">
                                <img src="../images/twitter.png" width="34">
                            </a>
                        </li>
                        <li>
                            <a class="pic-link" href="https://www.youtube.com/">
                                <img src="../images/youtube.png" width="34">
                            </a>
                        </li>
                        <li>
                            <a class="pic-link" href="https://www.instagram.com/">
                                <img src="../images/instagram.png" width="34">
                            </a>
                        </li>
                        <li>
                            <a href="/php/disclaimer.php">
                                <p class="link">Disclaimer</p>
                            </a>
                        </li>
                        <li>
                            <a href="/php/privacy.php">
                                <p class="link">Privacy Policy</p>
                            </a>
                        </li>
                        <li>
                            <a href="/php/terms&conditions.php">
                                <p class="link">Terms & Conditions</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="foot-right">
                <P>Always use the customer care numbers displayed on Bank's official website.
                    Do not access unknown website links.
                </P>
            </div>
            <div class="copyright">
                <p class="copy">CopyRights &copy 2023 CrownBank <span class="copy1">|</span> <span>Right Bank Right Now</span> <span class="copy1">|</span>  All Rights Reserved </p>
            </div>
        </div>
      </footer>

    <script src="/JS/billpayment.js"></script>
    <script src="/JS/logout.js"></script>
</body>
</html>