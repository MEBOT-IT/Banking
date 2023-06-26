<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fund Transfer -  Crown Bank</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/CSS/fund.css">
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
                        <a href="/php/billpayment.php">Bill payments and recharge</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button>Transfer</button>
                        <div class="sub">
                        <a href="#">Fund Transfer</a>
                        </div>
                    </div>
                    <div class="logout">
                        <a href=""><img src="../images/logout.png" id="logoutBtn"></a>
                        <script src="../JS/logout.js"></script>
                    </div>
                </div>           
            </div>
        </header>
        <div class="mainimg">
            <a href="/php/transferform.php"> Transfer Now </a>
        </div>
        <div class="navi">
            <ul>
                <li><a href="#imps">IMPS</a></li>
                <li><a href="#neft"> NEFT</a></li>
                <li><a href="#upi">UPI</a></li>
            </ul>
        </div>
        <div class="imps" style="background-color: white;" id="imps">
            <div class="explain">
            <h2>IMPS</h2>
            <P>IMPS (Immediate Payment Service) is a digital payment system used in India that enables 
             instant money transfer between bank accounts. With IMPS, you can transfer funds 24/7, even on 
              weekends and holidays. It allows you to send money using various modes such as mobile number, 
               bank account number and IFSC code, or Aadhaar number. The money is transferred instantly 
                and can be accessed immediately by the recipient. IMPS is a safe and secure way to
                 transfer funds as it uses two-factor authentication and encryption to ensure the safety of
                  transactions. It is commonly used for making small value transactions such as paying bills,
                   transferring money to friends and family, and for online shopping. IMPS is a fast and convenient 
                    way to transfer money across different banks in India.</P>
                    <a href="https://www.npci.org.in/what-we-do/imps/product-overview" id="more">Know More</a>
            </div> 
            <div class="impsimg">
                <img src="../images/Hand holding phone with digital wallet service and sending money.jpg" alt="">
            </div>
        </div>
        <div class="neft" style="background-color: #f3f3f3;"  id="neft">
            <div class="explain">
            <h2>NEFT</h2>
            <P>NEFT (National Electronic Funds Transfer) is a payment system used in India to transfer funds 
                 between bank accounts electronically. It allows individuals and businesses to transfer money 
                 from one bank account to another in a safe and secure manner. With NEFT, the funds are 
                  transferred in batches, and the transactions are settled in hourly intervals throughout the day, 
                   which means that it can take up to a few hours for the money to be credited to the recipient's 
                                       account. NEFT is commonly used for making high-value transactions such as payment of bills,
                     loans, or for sending money to family and friends. It is a reliable and cost-effective method for
                      transferring money across different banks in India.</P>
                    <a href="https://paytm.com/blog/money-transfer/neft/what-is-neft/" id="more">Know More</a>
            </div> 
            <div class="neftimg">
             <img src="../images/6617.jpg" alt="">
            </div>
        </div>
        <div class="upi" id="upi">
            <div class="explain">
            <h2>UPI</h2>
            <P>UPI (Unified Payments Interface) is a digital payments system that allows people in India to 
            transfer money between bank accounts instantly and securely using a mobile phone. With UPI, 
            you can send and receive money using a virtual payment address (VPA), which is like an email ID 
             for your bank account. You can also use UPI to pay bills, make online purchases, and check your 
             account balance, all through a single mobile app. UPI has become a popular payment method in 
             India due to its convenience, speed, and low transaction fees.</P>
             <a href="https://www.npci.org.in/what-we-do/upi/product-overview" id="more">Know More</a>
            </div> 
            <div class="upiimg">
                <img src="../images/151914-OUR8OJ-83.jpg" alt="">
            </div>    
        </div>
        <div class="boxing">
            <h1 style="text-align: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;padding: 5px ;margin-left: 30px;">Discover Our Bank Products</h1><br>
            <div class="boxin">
                <div class="box1">
                    <div class="iconpay">
                        <img src="../images/icons8-paid-bill-50.png" alt="">
                    </div>
                    <p class="heading">Fund Transfer</p><br>
                    <p>
                        Transfer Your Amounts instantly with Crown
                    </p>
                    <div class="boxbut">
                        <Button class="fbtn">Know More</Button>
                    </div> 
                </div>
                <div class="box2">
                    <div class="iconpay">
                        <img src="../images/icons8-bhim-upi-50.png" alt="">
                    </div>
                    <p class="heading">UPI</p>
                    <p>Send or Receive Payments Instantly and Securly</p>
                    <div class="boxbut">
                        <button class="sbtn">Know More</Button>
                    </div>
                </div>
                <div class="box3">
                <div class="iconpay">
                        <img src="../images/icons8-tax-50.png" alt="">
                </div> 
                    <p class="heading">Tax Payments</p>
                    <p>Tax pay made very easier withus</p>
                    <div class="boxbut">
                        <Button class="tbtn">Know More</Button>
                    </div>
                </div>
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
      <script src="/JS/logout.js"></script>          
</body>
</html>