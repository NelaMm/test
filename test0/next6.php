<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #bbb;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ddd;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #228B22;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}


table td{
  height: 50px;
  width: 30px;
  padding:5px;
  text-align: center; /* center checkbox horizontally */
  vertical-align: middle; /* center checkbox vertically */
}

</style>
</head>


<?php
    ini_set("default_charset", "UTF-8");
    if(isset($_POST["next6"]))
    {?>
<div id=tst align=center>
  <h2>
<br>Označte původně zelená pole.<br>
</h2>

<form action="next7.php" method="post" name="next7">
  <table>
   <tr>
      <td>
        <label class="container">
          <input type="checkbox" name="answer1" value="1">
           <span class="checkmark"></span>
           </label>
      </td>
      <td>
        <label class="container">
          <input type="checkbox" name="answer2" value="1">
           <span class="checkmark"></span>
         </label>
      </td>
      <td>
        <label class="container">
          <input type="checkbox" name="answer3" value="-1">
           <span class="checkmark"></span>
         </label>
      </td>
    </tr>
    <tr>
      <td>
        <label class="container">
          <input type="checkbox" name="answer4" value="1">
           <span class="checkmark"></span>
         </label>
      </td>
       <td>
         <label class="container">
          <input type="checkbox" name="answer5"  value="-1">
           <span class="checkmark"></span>
         </label>
      </td>
      <td>
        <label class="container">
          <input type="checkbox" name="answer6" value="1">
           <span class="checkmark"></span>
         </label>
      </td>
    </tr>
    <tr>
      <td>
        <label class="container">
       <input type="checkbox" name="answer7" value="-1">
        <span class="checkmark"></span>
      </label>
   </td>
       <td>
         <label class="container">
        <input type="checkbox" name="answer8" value="-1">
         <span class="checkmark"></span>
       </label>
    </td>
      <td>
        <label class="container">
          <input type="checkbox" name="answer9" value="1">
           <span class="checkmark"></span>
         </label>
      </td>
    </tr>
  </table>



        <br><input type="submit" name="next7" value="Odpovědět" />
        </form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
