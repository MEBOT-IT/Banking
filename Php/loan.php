<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
    <link rel="shortcut icon" type="image/png" href="../images/FAVICON CROWN.png">
    <link rel="stylesheet" href="/css/loan.css">
    <link rel="stylesheet" href="/CSS/dark.css">
    <script src="/JS/dark.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
    <div class="container">
        <header>
            <i class="bi bi-brightness-high-fill" id="toggleDark"></i>

            <div class="nav">
                <a href="/Php/index.php">
                    <img src="../images/logo1.png" class="logo">
                </a>
                <div class="item">
                    <ul>
                        <li>
                            <a href="/php/account.php">Accounts</a>
                        </li>
                        <li>
                            <a href="#">Loans</a>
                        </li>
                        <li>
                            <a href="/php/card.php">Cards</a>
                        </li>
                        <li>
                            <a href="/php/insurance.php">Insurance</a>
                        </li>
                        <li>
                            <a href="/php/about.php">About Us</a>
                        </li>
                        <li>
                            <a href="/php/contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="loanhero">
            <div class="loanimg1">
                <img src="../images/loan-b.jpg" class="limg">
            </div>
            <div class="loancon">
                Loan amount up to Rs.40 lakh
            </div>
        </div>
        <div class="why">
            <div class="wtitle">
                <h1>Why Us?</h1>
            </div>
        </div>
        <div class="reasons">
            <div class="one">
                <img src="../images/payment-method.png" width="200px" height="200px">
                <p>Convenient payment options</p>
            </div>
            <div class="one">
                <img src="../images/payment-method (1).png" width="200px" height="200px">
                <p>Suits the need of every individual</p>
            </div>
            <div class="one">
                <img src="../images/contract.png" width="200px" height="200px">
                <p>Simplified documentation</p>
            </div>
            <div class="one">
                <img src="../images/percenticon.png" width="200px" height="200px">
                <p>Attractive interest rates</p>
            </div>
        </div>
        <div class="loan-calculator">
            <div class="top">
                <h2>Loan Calculator</h2>
                <div class="group">
                    <div class="input">
                        <div class="title">Monthly Salary:</div>
                        <input class="monthly-salary">
                    </div>
                    <div class="input">
                        <div class="title">Loan Amount:</div>
                        <input class="loan-amount">
                    </div>
    
                    <div class="input">
                        <div class="title">Fixed interest annually:</div>
                        <input class="fixed-interest">
                    </div>
    
                    <div class="input">
                        <div class="title">Loan repayment period (in years):</div>
                        <input class="loan-repayment">
                    </div>
    
                </div>
            </div>
            <div class="result">
                <div class="left">
                    <div class="deduction-percentage">
                        <h3>The percentage of the installment deducted from the monthly salary:</h3>
                        <div class="value"></div>
                    </div>
    
                    <div class="total-interest">
                        <h3>Total Interest:</h3>
                        <div class="value"></div>
                    </div>
    
                    <div class="total-paid">
                        <h3>Total paid:</h3>
                        <div class="value"></div>
                    </div>
    
                    <div class="monthly-installment">
                        <h3>Monthly Installment:</h3>
                        <div class="value"></div>
                    </div>
    
                    <button class="calculate-button" type="button">Calculate</button>
                </div>
                <div class="right">
                    
                    <canvas id="myChart" class="chart" style="width:100%;max-width:600px"></canvas> 
                    <button class="clear-button" type="button">Clear</button>
                </div>
            </div>
        </div>    
        <div class="proloan">
            <h2>LOANS WE ARE PROVIDING</h2>
            <h4>Explore our loan products designed for your unique needs</h4>
        </div>
        <div class="loantypes">
            <div class="loanimg">
                <img src="../images/perloan.jpg" width="300px" height="300px">
                <h2 class="loanname">Personal Loan</h2>
                <ul>
                    <li>Avail instant personal loan from Rs.30,000 to Rs.50,00,000</li>
                    <li>Attractive interest rates</li>
                </ul>
            </div>
            <div class="loanimg">
                <img src="../images/loanloc.jpg" width="300px" height="300px">
                <h2 class="loanname">Loan Branches</h2>
                <ul>
                    <li>Locate Crown's loan branches near you</li>
                    <li>Please visit the loan service branches if you have any questions about services on loan</li>
                </ul>
            </div>
            <div class="loanimg">
                <img src="../images/home loan.jpg" width="300px" height="300px">
                <h2 class="loanname">Home Loan</h2>
                <ul>
                    <li>Zero processing fees</li>
                    <li>Simplified Documentation</li>
                </ul>
            </div>
            <div class="loanimg">
                <img src="../images/car-loan.png" width="300px" height="300px">
                <h2 class="loanname">Car Loan</h2>
                <ul>
                    <li>Finance options for wide range of cars</li>
                    <li>Attractive interest rates</li>
                </ul>
            </div>
            <div class="loanimg">
                <img src="../images/eduloan.jpg" width="300px" height="300px">
                <h2 class="loanname">Education Loan</h2>
                <ul>
                    <li>Quick Approval</li>
                    <li>Minimal documentation</li>
                </ul>
            </div>
            <div class="loanimg">
                <img src="../images/gold.png" width="300px" height="300px">
                <h2 class="loanname">Gold Loan</h2>
                <ul>
                    <li>Instant loan</li>
                    <li>Utmost safety of your gold</li>
                </ul>
            </div>
        </div>
        <div class="contact">
            <div class="text">
                <h1 class="con-title">Contacts</h1>
            </div>
            <div class="main">
                <div class="box">
                    <img src="../images/mail icon.png" width="80px" height="80px">
                    <h1>Email </h1>
                    <p>crownbankingofficial@gmail.com</p>
                </div>
                <div class="box">
                    <img src="../images/icon8-location-50.png" width="80px" height="80px">
                    <h1>Office</h1>
                    <p>NO 833 E.V.R Periyar High Road<br>
                        Arumbakkam,<br>
                        Chennai 600 106, Tamil Nadu
                    </p>
                </div>
                <div class="box">
                    <img src="../images/icons8-phone-50.png" width="80px" height="80px">
                    <h1>Phone</h1>
                    <p>+91 9944758124</p>
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
          </footer>
    </div>
</body>
<script src="/JS/CrownBankLogin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="/JS/loancalc.js"></script>
</html>