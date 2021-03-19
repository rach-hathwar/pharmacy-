<?php
include("templates/header.php");
require_once "includes/functions.inc.php";
$errors= array('emptyInputs' =>'','success'=>'','nosuccess'=>'');
 
 if(isset($_GET["error"])){

 if($_GET["error"] =='emptyinput'){
  $errors['emptyInputs'] = 'Fill in all fields.';
 }
 else if($_GET["error"] =='none') {
   $errors['success'] = 'You have successfully added medicine location info!';
}
else{
     $errors['nosuccess'] = 'Could not successfully added medicine location info!';
}
}
?>
<div class="form-box" style="height:600px;">
	<h2>ADD MEDICINE LOCATION DETAILS</h2>
	<form action="includes/medicinelocation.inc.php" method="POST">
        <div class="error-text"><?php echo $errors['emptyInputs']; ?></div>
        <p>Medicine ID</p>
        <input type="text" name="medid" value=""/>
		<p>Medicine name</p>
		<input type="text" name="medname" value=""/>
		<p for=compartment>Compartment</p>
		<select name="cmptinfo" id="cmptSel" size="1">
        <option value="">Select compartment</option>
    </select>
    <br>
    <br>
      <p for="rack" >Rack Details</p> 
    <select name="rackinfo" id="rackSel" size="1">
        <option value="" >Please select compartment first</option>
    </select>
    <br><br>   
    <p for="shelf" >Shelf Details</p> 
    <select name="shelfnfo" id="shelfSel" size="1">
        <option value="">Please select rack first</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="SUBMIT"><h2>
</form>
<h2><?php echo $errors['success']; ?></h2>
<h2><?php echo $errors['nosuccess']; ?></h2>
    </div>
<button id="butn15" class="button1" style="margin: 700px 600px 60px; 
position:fixed; font-family:system-ui;" >Go Back</button>

<script type="text/javascript">
    document.getElementById("butn15").onclick = function () {
        location.href = "medlocinfo.php";
    };
</script>
  <script type="text/javascript">
    var compartmentObject = {
    "A": {
        "A-1": ["1","2","3","4","5"],
        "A-2": ["1","2","3","4","5"],
        "A-3": ["1","2","3","4","5"],
        "A-4": ["1","2","3","4","5"]
    },
    "B": {
        "B-1": ["1","2","3","4","5"],
        "B-2": ["1","2","3","4","5"],
        "B-3": ["1","2","3","4","5"],
        "B-4": ["1","2","3","4","5"]        
    },
     "C": {
        "C-1": ["1","2","3","4","5"],
        "C-2": ["1","2","3","4","5"],
        "C-3": ["1","2","3","4","5"],
        "C-4": ["1","2","3","4","5"]
    },
     "D": {
        "D-1": ["1","2","3","4","5"],
        "D-2": ["1","2","3","4","5"],
        "D-3": ["1","2","3","4","5"],
        "D-4": ["1","2","3","4","5"]
    },
     "E": {
        "E-1": ["1","2","3","4","5"],
        "E-2": ["1","2","3","4","5"],
        "E-3": ["1","2","3","4","5"],
        "E-4": ["1","2","3","4","5"]
    },
     "F": {
        "F-1": ["1","2","3","4","5"],
        "F-2": ["1","2","3","4","5"],
        "F-3": ["1","2","3","4","5"],
        "F-4": ["1","2","3","4","5"]
    }
}
window.onload = function () {
    var cmptSel = document.getElementById("cmptSel"),
        rackSel = document.getElementById("rackSel"),
        shelfSel = document.getElementById("shelfSel");
    for (var compartment in compartmentObject) {
        cmptSel.options[cmptSel.options.length] = new Option(compartment, compartment);
    }
    cmptSel.onchange = function () {
        rackSel.length = 1; // remove all options bar first
        shelfSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        for (var rack in compartmentObject[this.value]) {
            rackSel.options[rackSel.options.length] = new Option(rack, rack);
        }
    }
    cmptSel.onchange(); // reset in case page is reloaded
    rackSel.onchange = function () {
        shelfSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        var shelves = compartmentObject[cmptSel.value][this.value];
        for (var i = 0; i < shelves.length; i++) {
            shelfSel.options[shelfSel.options.length] = new Option(shelves[i], shelves[i]);
        }
    }
}
  </script>


<?php
include("templates/footer.php");
?>