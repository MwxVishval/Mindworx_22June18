
  <style>
    .wrapper {
        width: 90%;
        margin: 0 auto;
        background: #efefef;
        padding: 4%;
    }
    .wrapper hr {
        border-top: 1px solid #dadada;
    }

  
  </style>


<!-- Navbar -->


<!-- First Container -->
<div class="wrapper text-left">
    
   
  <div class="container mrb-20">
    <div class="navbar-header">
      
        <a href="#"><img src="../../assets/images/entitylogo.png" /></a>
    </div>
  
  </div>

       <hr/>
    <h3 class="mrb-20">Task report for task : <span><?php echo $taskdetail[0]['task_name'];?></span></h3>
    
       <hr/>
   
    <div class="row text-left mrb-20">
        <div class="col-md-4">
            <strong>Task Type:</strong><?php echo $tasktype[0]['task_type'];?> 
        </div>
        
         <div class="col-md-4">
             <strong>Task Status:</strong> <?php 
             switch ($taskdetail[0]['task_status']) {
                case 1:
                       echo 'Assigned'; 
                    break;
                case 2:
                    echo 'On Hold';
                    break;
                case 3:
                     echo 'Accepted'; 
                    break;
                case 4:
                    echo 'Resolved';
                    break;
                case 5:
                   echo 'In Progress';
                    break;
                case 6:
                    echo "Canceled";
                    break;
                case 7:
                  echo "Reject";
                    break;
                default:
                    echo "not fount task status";
                    } ?> 
        </div>
        
         <div class="col-md-4">
             <strong>Task Priority:</strong>
             <?php  
                switch ($taskdetail[0]['priority']) {
                    case 1:
                           echo 'Critical'; 
                        break;
                    case 2:
                        echo 'High';
                        break;
                    case 3:
                         echo 'Moderate'; 
                        break;
                    case 4:
                        echo 'Low';
                        break;
                    case 5:
                       echo 'Planing';
                        break;

                    default:
                        echo "not fount task priority";
                        }    
                    ?>
        </div>
        
    </div>

    
    <div class="row text-left mrb-20">
        <div class="col-md-6">
            <strong>Create date:</strong><?php echo $taskdetail[0]['created_date'];?> 
        </div>
        
         <div class="col-md-6">
             <strong>Assigned Date:</strong> <?php echo $taskdetail[0]['assign_date'];?>
        </div>
           
    </div>
    

     <div class="row text-left">
        <div class="col-md-6">
            <strong>Accepted Date:</strong><?php echo $taskdetail[0]['start_date'];?> 
        </div>
        
         <div class="col-md-6">
             <strong>Completed Date:</strong> <?php echo $taskdetail[0]['end_date'];?> 
        </div>
           
    </div>
        
    <hr/>
    
    
    <div class="row text-left mrb-20">
        <div class="col-md-6 ">
            <strong>Person assigned:</strong><?php echo $taskdetail[0]['fse_name']; ?>  
        </div>
         </div>
    <hr/>
    
      <div class="row text-left mrb-20">
          
          <div class="col-md-12 mrb-20">
              <strong>Task Operations:</strong> 
        </div>
          
        <div class="col-md-6 ">
            <strong>Travel Time:</strong> <?php $date_a = new DateTime('2010-10-20 08:10:00');
$date_b = new DateTime('2008-12-13 10:42:00');

$interval = date_diff($date_a,$date_b);

echo $interval->format('%h:%i:%s'); ?> 
        </div>
          
           <div class="col-md-6 ">
               <strong> Repair Time:</strong> XXXXXX
        </div>
         </div>
    
    <hr/>
    
    <div class="row text-left mrb-20">
        <div class="col-md-12 mrb-20">
            <strong>Task Location:</strong><?php echo $taskdetail[0]['task_address']; ?>   
        </div>
        
        <div class="col-md-12 ">
           <iframe src="https://www.google.com/maps/d/embed?mid=1bf4qwgGAMWSKS2N2GnGJRONqRTs" width="100%" height="280"></iframe>
        </div>
        
         </div>
    
    <hr/>
    
    
    <div class="row text-left mrb-20">
        <div class="col-md-12 mrb-20">
            <h4>Task information sent by Technician: </h4>
        </div>
        
        <div class="col-md-12 mrb-20">
            <strong>Task Title :</strong> XXXXXX
        </div>
        
        
        <div class="col-md-12 mrb-20">
            <strong>Field 2 : </strong>XXXXXX
        </div>
        
        <div class="col-md-12 mrb-20">
            <strong>Field 3 :</strong> XXXXXX
        </div>
        
        <div class="col-md-12 mrb-20">
            <strong>Field 4 :</strong> XXXXXX
        </div>
         </div>
    
    <hr/>
    
    
    <div class="row text-left mrb-20">
        <div class="col-md-12 mrb-20">
            <h4>Task Information updated by technician :</h4> 
        </div>
        
        <div class="col-md-12 mrb-20">
            <strong>Field 1 :</strong> XXXXXX
        </div>
        
        
        <div class="col-md-12 mrb-20">
          <strong>Field 2 :</strong> XXXXXX
        </div>
        
        <div class="col-md-12 mrb-20">
            <strong>Field 3 :</strong> XXXXXX
        </div>
        
        <div class="col-md-12 mrb-20">
           <strong>Field 4 :</strong> XXXXXX
        </div>
         </div>
    
    <hr/>
    
    
    <div class="row text-left mrb-20">
        <div class="col-md-12 mrb-20">
            <h4>Assets / parts loaded against task : </h4>
        </div>
        
        <div class="col-md-6 mrb-20">
            <strong>Asset 1 :</strong> XXXXXX
        </div>
        <div class="col-md-6 mrb-20">
            <strong>Used 1 :</strong> XXXXXX
        </div>
        <div class="col-md-6 mrb-20">
            <strong>Asset 2 :</strong> XXXXXX
        </div>
        <div class="col-md-6 mrb-20">
            <strong>Used 2 :</strong> XXXXXX
        </div>
        
        
       
         </div>
    
    <hr/>
    
     <div class="row text-left mrb-20">
        <div class="col-md-12 mrb-20">
            <h4> Attachments : </h4>
        </div>
        
        <div class="col-md-6 mrb-20">
          <img src="../../assets/images/attachments.png" />
        </div>
        <div class="col-md-6 mrb-20">
             <img src="../../assets/images/attachments.png" />
        </div>
        <div class="col-md-6 mrb-20">
             <img src="../../assets/images/attachments.png" /> 
        </div>
        <div class="col-md-6 mrb-20">
             <img src="../../assets/images/attachments.png" /> 
        </div>
        
        
       
         </div>
    
    <hr/>
    
     <div class="row text-left mrb-20">
        <div class="col-md-12 mrb-20">
            <h4> Customer Interaction : </h4>
        </div>
        
        <div class="col-md-12 mrb-20">
           Customer Signature : <br/>
          <img src="../../assets/images/attachments.png" />
        </div>
        
         <div class="col-md-12 mrb-20">
             <strong>Customer rating : </strong>XXXX
          
        </div>
         
         <div class="col-md-12 mrb-20">
             <strong> Customer comment :</strong> XXXX
          
        </div>
        
        
       
         </div>
    
    
    
    <!-- Footer -->
<div class="text-right">
  <img src="../../assets/images/bottom-logo.png" />
</div>
    
</div>

<!-- Second Container -->






