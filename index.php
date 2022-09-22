<!DOCTYPE html>
<html>
  <head>
    <title>Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 10px 0 #cc0052; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/f1cf9a9068f4bfbdbd9758c45db79203579a3561.jpeg"); background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input, select {
      width: calc(100% - 10px);
      padding: 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, input:hover::placeholder {
      color: #cc0052;
      }
      .item input:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #cc0052;
      color: #cc0052;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #cc0052;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #ff0066;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .contact-item .item {
      width: calc(50% - 8px);
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item input {
      width: calc(100% - 12px);
      }
      }
    </style>
  </head>
  <body>

    <div class="testbox">
      <form action="includes/buydata.inc.php" method="POST">
        <div class="banner">
          <h1>Buy data</h1>
        </div>
        <div class="contact-item">

        </div>
        <div class="item">
          <p>Network</p>
          <select name="network">
            <option>--------</option>
            <option value="1">MTN</option>
            <option value="2">Glo</option>
            <option value="3">Airtel</option>
            <option value="4">9Mobile</option>
          </select>
        </div>
        <div class="item">
          <p>Data Plan</p>
          <select name="dataplan">
            <option>--------</option>
            <option value="258">MTN CORPORATE GIFTING ₦5250 15.0 GB 30 DAYS VALIDITY</option>
            <option value="259">MTN CORPORATE GIFTING ₦3500 10.0 GB 30 DAYS VALIDITY</option>
            <option value="260">MTN CORPORATE GIFTING ₦180  250.0 MB  30 DAYS VALIDITY</option>
          </select>
        </div>
        <div class="item">
          <p>Mobile Number</p>
          <input type="text" name="numb"/>
        </div>
          <div class="item">
          <p>Amount</p>
          <input type="text" name="amount"/>
        </div>

        </div>
        
        <div class="btn-block">
          <button type="submit" name="buy-data">buy now!</button>
        </div>
      </form>

 <?php 
/*
if (!isset($_POST['buy-data'])){
  exit();
}else{
  $signupCheck = $_GET['signup'];

  if ($signupCheck == 'empty'){
    echo "You did not fill in all field!";
    exit();
    }
    elseif($signupCheck == 'char'){
      echo "You input invalid character!";
      exit();
    }
    elseif($signupCheck == 'invalidemail'){
      echo "You input invalid E-mail!";
      exit();
    }
    elseif($signupCheck == 'success'){
      echo "You signup successfully!";
      exit();
    }
  }
  */
?>

    </div>
  </body>
</html>