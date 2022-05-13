<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">

<meta> 

<style>
/* Header */
.header {
  
  overflow: hidden;
  background-color: #04047c;
  padding: 20px 10px;
  margin-bottom: 2%;
  
}

/* header links */
.header a {
  float: left;
  color: rgb(23, 190, 255);
  text-align: center;
  padding: none;
  text-decoration: none;
  font-size: 20px;
  line-height: 25px;
  border-radius: 4px;
}


.header a.logo {
  font-size: 25px;
  font-weight: bold;
  padding-right: 4px;
}

/* responsiv */
.header a:hover {
  background-color: rgb(248, 36, 255);
  color: black;
  padding: none;
}

/* active  */
.header a.active {
  background-color: red ;
  color: red;
  
  
}

a:visited {
  color: rgb(23, 190, 255);

}

.header-right {
  float: right;
  padding: 20px;
  
}
.header-right a {
margin-right: 100px;
padding: 4px;
}

.body {
  background-color: rgb(60, 0, 88);
}
.main-content {
    width: 60%;
   
    background-color: #04047c;
    flex-direction: column;
    display: flex;
    margin: auto;
  
}

.text-erbjudadenfordig{
    size: 50px;
    font-size: 200%;
    color: rgb(248, 36, 255);
    background-color: #04047c;
   margin: auto; 
   padding: 2%;
   
  }

  .imgreaspel {
    height: 100%;
    width: 100%; 
    margin: auto;
   
  }

  .reaspel  {
  
    margin: 3%;
    position: relative;
    box-shadow: 10px;
  }

  
  .Reafördig {
    display: flex;
    flex-direction: row;
    background-color: #04047c;
    padding: none; 
    
    
  }

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
 
}
</style>

<title>Page Title</title>
</head>
<body class="body">
<div class="header">
  <a href="index.php" class="logo"><img src="img/logo.png"> </a>

  <div class="header-right">
    <a href="games.php">GAMES</a>
    <a href="Login.php">Log In</a>
    <a href="register.php">Sign Up</a>
    <a href="Shoppingcart">Shoppingcart</a>
  </div>
</div>

