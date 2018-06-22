<div class="x_panelhold" style="min-height:600px; height: auto;">
    <div class="x_title">
        <h2>Task Report</h2>  <a href="<?php echo base_url() ?>task" id="send"  class="btn btn-success" style="float:right;">Search</a>
         <?php
    if ($entityFeilds != FALSE) {
        if (!empty($entityFeilds)) {
            $task_field = json_decode($entityFeilds);
        } else {
            $task_field = array();
        }
    } else {
        $task_field = array();
    }
    ?>
    <?php $k = 1; ?>
<table id="tasklist" class="table table-striped table-bordered nowrap x_panel tasklistviews" style="width:100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Task Name</th>
                <th>Task Type</th>
                <th>Field Engineer</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Address</th>
                <th>Date Logged</th>
                 <?php
                    if (isset($result[0]['customFields'])) {
                        if (!empty($result[0]['customFields'])) {
                            foreach ($result[0]['customFields'] as $key => $value) {
                                echo "<th>" . $key . "</th>";
                            }
                        }
                    }
                    ?>                
                <th>FSE Checklist</th>
                <th>FSE Comments</th>
                <th>FSE Reason</th>
                <th>FSE Feedback</th>
                <th>Customer Sign</th>
                <th>Start Trip</th>
                <th>End Trip</th>
                <th>Travel Time</th>
                <th>Start Work</th>
                <th>End Work</th>
                <th>Repair Time</th>
                <th>Travel KM</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
            
        </thead>
        <tbody>
             <?php
                $i = 1;
                foreach ($result AS $r) {
                    ?>
             <tr class="row_show_<?php echo $k ?>"  id="row_show_<?php echo $k ?>"  onclick="taskdetail(this,'row_show_<?php echo $k.''.$k ?>','<?php echo $r['id']; ?>','<?php echo $i; ?>','<?php echo $r['task_type_id']; ?>')">
                        <td><?php echo $i++ ?></td>
                        <td id="taskname"><?php echo $r['task_name']; ?></td>
                        <td><?php echo $r['task_type']; ?></td>
                        <td><?php echo $r['fse_name']; ?></td>
                        <td><?php echo $r['status_type']; ?></td>
                        <td><?php echo $r['priority_type']; ?></td>
                        <td><?php echo $r['task_address']; ?></td>
                        <td><?php echo $r['start_date']; ?></td>


                        <td><?php echo $r['fse_checklist']; ?></td>
                        <td><?php echo $r['fse_task_comments']; ?></td>
                        <td><?php echo $r['fse_reason']; ?></td>
                        <td><?php echo $r['fse_feedback']; ?></td>
                        <td> <?php if ($r['customer_sign'] != NULL) { ?>
                                <img alt="" src="<?php echo $r['customer_sign']; ?>" style="height:100px; width:100px">
                            <?php } ?>
                        </td>
                        <td><?php echo $r['start_time']; ?></td>
                        <td><?php echo $r['reached_time']; ?></td>
                        <td><?php echo $r['total_travel_time']; ?></td>
                        <td><?php echo $r['start_to_work_time']; ?></td>
                        <td><?php echo $r['Work_completed_time']; ?></td>
                        <td><?php echo $r['total_worked_time']; ?></td>
                        <td><?php echo $r['geo_km']; ?></td>
                        <td><?php echo $r['created_date']; ?></td>
                        <td>
                            <form action="<?php echo base_url(); ?>updateTask" method="post">
                                <input type="hidden" value="<?php echo $r['id']; ?>" name="edit_id"  /> 
                                <input type="hidden" value="<?php echo $r['task_type_id']; ?>" name="task_type_id"  /> 
                                <input type="hidden" value="<?php echo $r['fse_id']; ?>" name="fse_id"  />
                                <input type="hidden" value="<?php echo $r['status_id']; ?>" name="status_id"  />  
                                <input type="hidden" value="<?php echo $r['task_location']; ?>" name="task_location"  /> 
                                <button class="fa fa-edit" name="edit" title="Edit" value="edit"></button>
                                <button class="fa fa-tasks" name="updateView" title="Update" value="updateView"></button>
                                <button class="fa fa-trash" name="delete" value="delete" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"></button>
                            </form>
                        </td>
                    </tr>
         <?php } ?>
        </tfoot>
    </table>
    </div>
</div>
<script>
    $(document).ready(function() {
//    var table = $('#tasklist').DataTable( {
//        responsive: false
//    } );
// 
//    new $.fn.dataTable.FixedHeader( table );
} );

$(document).ready(function() {
    $('#tasklist').DataTable( {
         //responsive: false
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    //   
//new $.fn.dataTable.FixedHeader( table );
} );
</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.4/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.2/js/responsive.bootstrap.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<script>
    function gmap(container,id,taskid) {
      // alert(taskid); alert(id); 
       var modal = document.getElementById('myModal');
        $.ajax({
            url: "<?php echo base_url() . 'TaskController/loadmap'; ?>",
            method: 'POST',
            //cache: false,
           data: {id: id,taskid:taskid },
            success: function (resp) {                
                  modal.style.display = "block";
                 $('#mapdataview').append(resp);
                
            }
        });

    }

function taskdetail(currentrow,container,id,rnum,tasktypeid) {
                    $("#"+container).remove();
         $.ajax({ 
      url: "<?php echo base_url() . 'TaskController/taskdetail'; ?>",
      method: 'POST',
      //cache: false,
      data: { id: id,tasktypeid:tasktypeid,container:container} ,
      success: function (resp) {    
          $(currentrow).after(resp);         
      }
    });
  }
</script>

<script>
var modal = document.getElementById('myModal');
var span = document.getElementsByClassName("close")[0];
function closepopup() {
    var modal = document.getElementById('myModal');
     $('#mapdataview').html('');
    modal.style.display = "none";
    
}

</script>

<div id="myModal" class="modal">
  <div class="modal-content" >
      <span class="close" onclick="closepopup()">&times;</span>
    <div id="mapdataview"></div>
    
  </div>
</div>

<style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

