<script>
    $(document).ready(function(){
                 $("#cont").addClass("active");
  
    });
</script>
<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Contact</a> </div>
    <h1>Contact </h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
 
      <div class="span12">
  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No</th>
                  <th>Subject</th>
                   <th>Date</th>
                   <th>Message</th>
                   
                </tr>
              </thead>
              <tbody>
-                                 <?php foreach($contact as $row){?>
         <tr >
                     
                                    <td > <?php echo $row['cont_name'] ?> </td>
                                    <td > <?php echo $row['cont_email'] ?> </td>
                                     <td > <?php echo $row['cont_phone'] ?> </td>
                                    <td > <?php echo $row['cont_subj'] ?> </td>
                                    <td > <?php echo $row['cont_date'] ?> </td>
                                    <td > <?php echo $row['cont_msg'] ?> </td>
               </tr>
               <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function doconfirm()
{
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
}
</script>