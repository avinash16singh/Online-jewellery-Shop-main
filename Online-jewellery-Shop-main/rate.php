<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <img src="designs/logo.jpg" alt="logo" width="150px">
    <ul>
      <li><a href="index.php">Home</a></li>


    </ul>
  </nav>

  <section class="ratetable">

    <table border="3">
      <tr>
        <th colspan="4">Rana Jewellery</th>
      </tr>
      <tr>
        <th colspan="4">Rates</th>
      </tr>
      <tr>
        <th colspan="4">Notes:1 tola=11.664 gm</th>
      </tr>
      <tr>
        <th>id</th>
        <th>Date</th>
        <th>Gold(Per Tola)</th>
        <th>Silver(Per Tola)</th>
      </tr>

      <tbody>
        <?php
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'project');

        $selectquery = "select * from rate";
        $query = mysqli_query($con, $selectquery);
        //  $data=mysqli_fetch_array($query);
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $data['Id']; ?> </td>
            <td><?php echo $data['Date']; ?> </td>
            <td><?php echo $data['Gold']; ?> </td>
            <td><?php echo $data['Silver']; ?> </td>


          </tr>
        <?php
        }
        ?>

    