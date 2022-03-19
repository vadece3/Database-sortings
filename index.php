<!DOCTYPE html>
<html>
  <head>


    <script>
function generateReportD(){
   document.forms['main'].action = 'print_date_records.php';
   document.forms['main'].submit();
}

function generateReportA(){
   document.forms['main'].action = 'print_most_expensive_records.php';
   document.forms['main'].submit();
}

function generateReportB(){
   document.forms['main'].action = 'print_total_amount_records.php';
   document.forms['main'].submit();
}

function generateReportC(){
   document.forms['main'].action = 'print_by_payment_option_records.php';
   document.forms['main'].submit();
}

function generateReportE(){
   document.forms['main'].action = 'print_by_destination_records.php';
   document.forms['main'].submit();
}
</script>


    <title>VIEW-TRAVELLING-RECORDS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>LOGIN TO VIEW YOUR TRAVELLING RECORDS</h1>
           <div> <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?></div>
          </div>
          <div class="panel-body">
            <form name="main" action="print_all_records.php" method="post">
              <div class="form-group">
                <label for="idnumber">ID-CARD NUMBER</label>
                <input
                  type="number"
                  class="form-control"
                  id="idnumber"
                  name="idnumber"
                />
              </div>
               
              <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
                  <button type="submit" name="submit_all" value="" class="btn btn-primary col-xs-4">PRINT_ALL</button>
                  <button type="button" name="submit_by_date" value="print_by_date" class="btn btn-primary col-xs-4" onclick="generateReportD();">PRINT_BY_DATE</button>
                   <button type="button" name="submit_by_cost" value="print_by_cost" class="btn btn-primary col-xs-4" onclick="generateReportA();">PRINT_BY_COST</button>
                    <button type="button" name="submit_total_amount" value="print_total_amount" class="btn btn-primary col-xs-4" onclick="generateReportB();">PRINT_TOTAL_AMOUNT</button>
              </div>
               <div class="form-group">
                  <label for="time">PRINT BY PAYMENT OPTION</label>
                  <SELECT type="text" class="form-control" id="paymentoption" name="paymentOption" >
                    <OPTION select hidden value="">SELECT PAYMENT OPTION</option>
                    <OPTION value="CASH" >CASH</OPTION>
                    <OPTION value="MOBILE" >MOBILE</OPTION>
      
                 </SELECT>
              </div>
              <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
               <button type="button" name="submit_payment_option" value="print_by_payment_option" class="btn btn-primary col-xs-4" onclick="generateReportC();">PRINT</button> 

              </div>

               <div class="form-group">
                  <label for="time">PRINT BY DESTINATION</label>
                  <SELECT type="text" class="form-control" id="destination" name="destination" >
                    <OPTION select hidden value="">SELECT DESTINATION</option>
                    <OPTION value="YAOUNDE" >YAOUNDE</OPTION>
                    <OPTION value="DOUALA" >DOUALA</OPTION>
      
                 </SELECT>
              </div>
              <div class="form-group summt-btns" style="display:flex; justify-content: space-around;">
               <button type="button" name="submit_destination_option" value="print_by_destination" class="btn btn-primary col-xs-4" onclick="generateReportE();">PRINT</button> 

              </div>

            </form>
          </div>
        </div>
      </div>
    </div> 
  </body>
</html>
