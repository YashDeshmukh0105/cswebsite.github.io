<?php include'header.php'?>
 
</head>
<body>
          
    
        <div class="main">
 <center>
<h2>CYBERWORLD CONFIGURATION</h2>
</center>
<table  width="1900" border="5" cellpadding="2" cellspacing="2">
  <tr>
 
    <th>SYSTEMNp</th>
     <th>Motherboard</th>
    <th>processor</th>
      <th>ram</th>
    <th>hdd</th>

     <th>moniter</th>
    <th>dvddrive</th>
    <th>Keyboard&Mouse</th>
  </tr>
  <?php
 foreach($sel as $selec)
 {
  $SYSTEMNp =  $selec->SYSTEMNp;
   $Motherboard=  $selec->Motherboard;
    $processor=  $selec->processor;
     $ram=  $selec->ram;
      $hdd=  $selec->hdd;
  
          $moniter=  $selec->moniter;
      $dvddrive=  $selec->dvddrive;
      $Keyboard=  $selec->Keyboard;
  ?>
  <tr>
  
    <td>{{$SYSTEMNp}}</td>
   
    <td>{{$Motherboard}}</td>
    <td>{{ $processor}}</td>
    
    <td>{{$ram}}</td>
    <td> {{$hdd}}</td>
  
    <td>{{$moniter}}</td>
    <td>{{$dvddrive}}</td>
    <td> {{$Keyboard}}</td>
  

   
  </tr>
  <?php
}
?>
 
</table>


      

    </div>

<?php include'footer.php'?>