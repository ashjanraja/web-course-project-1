<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      #t{color: blue;}
      h1{text-align: center}
    </style>
    
  </head>
  <body>
    <h1>تم استقبال بياناتك بنجاح</h1>
    <hr>
    <br><br>

      Hi  <span id="t"><?php echo $_POST['Firstname']; ?>.</span>Think you for registering one of our
      course you have added Java <strong>Java script</strong><br>to your course list.


</br></br></br>
      <table border="2">
        <tr>
          <td>Firstname</td>
          <td>LastName</td>
          <td>Email</td>
          <td>Course</td>
        </tr>
        <tr>
          <td style="color:blue;"><?php echo $_POST['Firstname']; ?></td>
          <td style="color:blue;"><?php echo $_POST['Lastname']; ?></td>
          <td style="color:blue;"><?php echo $_POST['Email']; ?></td>
          <td style="color:blue;">Java Script</td>
        </tr>


           
           
      </table>
  </br><br>
<b>
تم تطوير هذا النشاط من الطالبة :</b>
<b style="color:blue;">
أشجان عبدالرحيم رجا
</b>
  </body>
</html>