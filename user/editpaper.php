<?
require_once "../connect_db.php";
require_once "validate_user.php";
require_once "../web_function.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<link href="../admin/stylesheets.css" rel="stylesheet" type="text/css" />
<title>TIIM Conference 2010</title>

<style type="text/css">
<!--
a:link {
	text-decoration: none;
	color: #333333;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #0099FF;
}
a:active {
	text-decoration: none;
}
.style1 {	color: #9C0000;
	font-weight: bold;
}
-->
</style>

<script language="JavaScript" type="text/javascript">

function iconfirmdel(in_url){
				if( confirm("Do you want to Delete?") ){   
						document.location =in_url; 
					 }
}

//edit paper
 function addNewRow1() {

    if (this.table1 == null) {
        this.table1 = document.getElementById("invoice1");
    }
    var index = this.table1.rows.length; // n //o-n-1

    var row = this.table1.insertRow(index);

     if(index%2==0) row.bgColor="#DEDBDE";
     else  row.bgColor="white";
		
     row.identity = index;
     //alert(index);
	 if(index < 26){
    var td0 = row.insertCell(0);
    td0.innerHTML = " <img src='../images/del.gif' onClick='removeRow1("+index+")' class='cursor'>";
	/*
    var td1 = row.insertCell(1);
    td1.innerHTML = "<input type='text' name='accountId_"+ index + "'  id='accountId" + index + "'  onBlur='autoCheck("+index+")'> ";
	*/
    var td2 = row.insertCell(1);
    //td2.innerHTML = "<input type='text' name='accountName[]" + "'  id='accountName" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	td2.innerHTML = "<select id='title1'"+index+" name='title1[]' class='text'><option value='0'>-</option><option value='1'>Mr.</option>              <option value='2'>Ms.</option><option value='3'>Mrs.</option><option value='4'>Dr.</option></select>";
	
	 var td3 = row.insertCell(2);		
	 td3.innerHTML = "<input type='text' name='FirstName1[]" + "'  id='FirstName1" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	 
	 var td4 = row.insertCell(3);		
	 td4.innerHTML = "<input type='text' name='LastName1[]" + "'  id='LastName1" + index + "' value = '' size='16' maxlength='80' class='text'/>";
	 
	 var td5 = row.insertCell(4);		
	 td5.innerHTML = "<input type='text' name='email1[]" + "'  id='email1" + index + "' value = '' size='15' maxlength='80' class='text'/>";
	 
	 var td6 = row.insertCell(5);		
	 td6.innerHTML = "<input type='text' name='Telephone1[]" + "'  id='Telephone1" + index + "' value = '' size='10' maxlength='80' class='text'/>";
	 var td6 = row.insertCell(6);		
	 td6.innerHTML = "<input type='text' name='Institution_co1[]" + "'  id='Institution_co1" + index + "' value = '' size='10' maxlength='80' class='text'/>"; 
	 var td6 = row.insertCell(7);		
	 td6.innerHTML = "<input type='text' name='Country_co1[]" + "'  id='Country_co1" + index + "' value = '' size='10' maxlength='80' class='text'/>"; 
	 
	  
	
    /*
	var td3 = row.insertCell(3);
    td3.innerHTML = "<input type='text' name='accountTotal"+ index + "'  id='accountTotal" + index + "' class='i' onKeyPress='return(currencyFormat(this,\",\",\".\",event))'  onBlur='sumAmount()' style=\"text-align:right\" /> <input type='hidden' name='accountTotal_"+ index + "'  id='accountTotal_" + index + "'/>";
	*/
	}else{
		alert("You can't add more.");
	}
}

function removeRow1(index) {
     if(index==1){
         this.table1.deleteRow(1);
     }

    for(var i = 0; i < this.table1.rows.length; i++) {
        if(index == this.table1.rows[i].identity){
            this.table1.deleteRow(i);
        }
    }
}
//end edit paper
function validate_form(form) {
if(form.des.value == "") {
		alert("Please input Paper Name !");
		form.des.focus();
		return false;
	}		
	else if(form.ins.value=="") {
		alert("Please input Description !") ;
		form.ins.focus() ;
		return false ;
	}
	else if(form.institution.value=="") {
		alert("Please input Institution !") ;
		form.institution.focus() ;
		return false ;
	}
else 
return true ;
}	
</script>
</head>

<body> 
  <table width="410" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td width="187" align="center"></td>
      <td width="188" align="left"><h1 ><span class="style1">Edit Your  Papers</span></h1></td>
    </tr>
</table>  
 
      <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
	   <form action="editpaper.php" method="post" enctype="multipart/form-data" name="editpaper" id="editpaper" onsubmit="return validate_form (this);">
	  <?
  $sql1 = " SELECT * FROM tiim_paper WHERE project_name = '".$papercode."'";
	$result1 = @mysql_query($sql1) or die(mysql_error());
	$row1 = mysql_fetch_assoc($result1); ?>
      <tr>
        <td><table width="95%" border="0" cellpadding="0" cellspacing="0" align="center" class="admin_table">
           
            <tr>
              <td>Register Name</td>
              <td bordercolor="#D6D3CE"><? echo $username;?></td>
            </tr>
            <tr>
              <td>Paper Code </td>
              <td><label>
                <input type="text" name="project2" id="project2"  value="<? echo $row1['project_name']; ?>" readonly="" />
              </label></td>
            </tr>
            <tr>
              <td>Paper Title </td>
              <td><label>
                <textarea name="des" id="des" cols="45" rows="5"  ><? echo $row1['description']; ?></textarea>
              </label></td>
            </tr>
            <tr>
              <td>Presenter</td>
              <td><label>
                <input name="ins" type="text" id="ins" value="<? echo $row1['institution']; ?>" />
              </label></td>
            </tr>
            <!--
    <tr>
      <td>Abstract Document</td>
      <td><label>
        <input type="file" name="abstract_file" id="abstract_file" />
      </label></td>
    </tr>
    <tr>
      <td>Full Paper</td>
      <td><label>
        <input type="file" name="full_paper" id="full_paper" />
      </label></td>
    </tr>
	-->
            <?	
		$sql5 = " SELECT * FROM tiim_co_author  WHERE ref_id = '".$row1['id']."'";		
		$result5 = @mysql_query($sql5) or die(mysql_error());	
		if(@mysql_num_rows($result5)>0){
	
		
		 ?>
            <tr>
              <td></td>
              <td><input type="submit" name="pa" id="pa" value="Save Change"   onclick="return confirm('Are you confirm your information?')" /></td>
              <input name="papercode" type="hidden" id="papercode" size="25" value="<? echo $row1['project_name']; ?>" />
              <input name="id" type="hidden" id="papercode" size="25" value="<? echo $row1['id']; ?>" />
            </tr>              
              <td colspan="2">Edit Co-Author			  
                <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                    <tr >
                      <td width="6%"  align="center" bgcolor="#DEDBDE">action</td>
                      <th width="30%"  align="center" bgcolor="#DEDBDE">Co Authors </th>
					    <th width="18%"  align="center" bgcolor="#DEDBDE">Institution</th>
                      <th width="18%"  align="center" bgcolor="#DEDBDE">Country</th>
                      <th width="28%"  align="center" bgcolor="#DEDBDE">Email</th>
					 
                   <!--   <th width="23%"  align="center" bgcolor="#DEDBDE">Telphone</th> -->
                    </tr>
                    <?	while ($row5 = @mysql_fetch_assoc($result5)) {	 ?>
                    <tr>
                      <? 
					  $idco=$row5['id']; 	
					  	?>
                      <td width="6%" align="center">
					  <?
	
//echo  "<a href=\"javascript:;\"onclick=\"window.open('edit.php?id=$idco&papercode=$papercode','show','toolbar=0,location=0,directories=0,status=0,menubar=0,resizeable=0,scrollbars=0 ,height=400,width=480');\"><img src='../images/edit.png' ></a> ";
?>		

 <a href="javascript:;" 
 onclick="window.open('edit.php?id= <? echo $idco ;?>&papercode=<? echo $papercode; ?>','_blank','toolbar=0,location=0,directories=0,status=0,menubar=0,resizeable=0,scrollbars=0 ,height=400,width=480');
   return false;"><img src='../images/edit.png' alt="Edit"></a>&nbsp;&nbsp;
   
 <a href="javascript:iconfirmdel('del.php?del_co=1&id= <? echo $idco?>')"> <img src='../images/trash_16.png' border="0"  align="absmiddle" alt="Delete"></a> 
 <!--<a href="javascript:iconfirmdel('del.php?del_co=1&id= <?$idco?>&papercode=<?$papercode ?>')"> <img src='../images/trash_16.png' border="0"  align="absmiddle" alt="Delete"></a> -->
   
   <?
  //echo "<td align=\"center\"><a href=\"javascript:iconfirmdel('del.php?abs=1&id=".$row2['id']."&ref_id=".$row2['ref_id']."')\"><img src=\"../images/trash_16.png\" border=\"0\" align=\"absmiddle\" alt=\"Delete\"></a></td>";
   ?>  
   
   </td>
                     <?  
			  $title=$row5[title];
			  if($title==1){ $title="Mr.";}
			  elseif($title==2){$title="Ms.";}
			  elseif($title==3){$title="Mrs.";}
			  elseif($title==4){$title="Dr.";}
			  elseif($title==0){$title="";}
			  else{echo "";}
			  
			  ?>
                      <td><? echo $title."".$row5['firstname']."    ".$row5['lastname']; ?></td>
					   <td><? echo $row5['institution_co']; ?></td>
					    <td><? echo $row5['country_co']; ?></td>
                      <td><? echo $row5['email']; ?></td>
                     <!-- <td><? echo $row5['telephone']; ?></td> -->
                    </tr>
                    <? }?>
                </table></td>
            </tr>
            <? }?>          
            <tr>
              <td colspan="2">Co-Author
			  <table width="100%" id="invoice1" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
                  <tr class="lmnbg">
                    <td>&nbsp;</td>
                    <th width="12%"  align="center" bgcolor="#DEDBDE">Title</th>
                    <th width="24%"  align="center" bgcolor="#DEDBDE">Firstname</th>
                    <th width="24%"  align="center" bgcolor="#DEDBDE">Lastname</th>
					 <th width="24%"  align="center" bgcolor="#DEDBDE">Institution</th>
                      <th width="24%"  align="center" bgcolor="#DEDBDE">Country</th>
                    <th width="23%"  align="center" bgcolor="#DEDBDE">Email</th>
                  <!--  <th width="14%"  align="center" bgcolor="#DEDBDE">Telphone</th> -->
                  </tr>
                  <tr class="lmnbg">
                    <td width="3%"><img src="../images/add.gif" onclick="addNewRow1()" class="cursor" /></td>
                    <td colspan="5" class="bwhite">Description of the data set</td>
                    <!--<td width="19%" align="center">ACCOUNT_CODE</td>-->
                    <!--<td width="200" align="center">TOTAL</td>-->
                  </tr>
                  <tr bgcolor="white">
                    <td ><!--<input type=button value=Del class=button_ onclick=removeRow(1)>-->
                        <!--<img src="../images/del.gif" onclick="removeRow(1)" class="cursor" /> --></td>
                    <td><select id="title1" name="title1[]" class="text">
                        <option value="0">-</option>
                        <option value="1">Mr.</option>
                        <option value="2">Ms.</option>
                        <option value="3">Mrs.</option>
                        <option value="4">Dr.</option>
                      </select>                    </td>
                    <td><input type="text" id="FirstName1[]" name="FirstName1[]" size="16" maxlength="80" class="text"/></td>
                    <td><input type="text" id="LastName1[]" name="LastName1[]" size="16" maxlength="80" class="text"/></td>
					<td><input type="text" id="Institution_co1[]" name="Institution_co1[]" size="16" maxlength="80" class="text"/></td>
                    <td><input type="text" id="Country_co1[]" name="Country_co1[]" size="16" maxlength="80" class="text"/></td>
                    <td><input type="text" id="email1[]" name="email1[]" size="15" maxlength="80" class="text"/></td>
                <!--    <td><input type="text" id="Telephone1[]" name="Telephone1[]" size="10" maxlength="80" class="text"/></td> -->
                  </tr>
              </table></td>
            </tr>
            
            <tr>
              <td></td>
              <td><input type="submit" name="co" id="co" value="Save Co-Author"   onclick="return confirm('Are you confirm your information?')" /></td>
              <input name="papercode" type="hidden" id="papercode" size="25" value="<? echo $row1['project_name']; ?>" />
              <input name="id" type="hidden" id="papercode" size="25" value="<? echo $row1['id']; ?>" />
            </tr>
			<!-- <td>&nbsp;</td>
        <td>&nbsp;</td> -->
	<!-- 130153 <td><hr /></td> -->
	
		
		
		
			<tr>
		<!-- 130153 <td ><span class="style1">Add Your change new Papers</span></td> -->
			  
		</tr>
		<tr>
   <!--   <td>To upload new version of abstract</td>
      <td><label>
        <input type="file" name="abstract_file" id="abstract_file" />
      </label></td> -->
    </tr>
    <!--  <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr> -->
      <tr>
        <td>&nbsp;</td>
   <!-- 130153 <td><input type="submit" name="abstract" id="button3" value="Update" onclick="return confirm('Are you confirm your information?')"  /></td> -->
		  <input name="papercode" type="hidden" id="papercode" size="25" value="<? echo $row1['project_name']; ?>" />
              <input name="id" type="hidden" id="papercode" size="25" value="<? echo $row1['id']; ?>" />
      </tr>
	<!-- ////////////////////////// -->
	  
	  
	  
	  
        </table></td>
      </tr>  </form>
	<!-- ////////////////////////// -->
	
	  <? //update paper	  
	   if($pa){ 	
		$sql = "UPDATE tiim_paper SET description='$des',institution='$ins' WHERE id ='$id' ";
		$result = @mysql_query($sql) or die(mysql_error());
		echo "<script>window.close()</script>"; ?>
	    <script>opener.location.reload()</script>  
	<?	} ?>
	
	<? //insert co-author
	if($co){		
	$ref_id = $id;
$count = count($title1); 
   for($i=0;$i<$count;$i++){
	$sql = " INSERT INTO tiim_co_author (ref_id,title,firstname,lastname,institution_co,country_co,telephone,email) 
	VALUES (";
					$sql .= " '".$ref_id."'";
					$sql .= ",'".$title1[$i]."'";
					$sql .= ",'".trim($FirstName1[$i])."'";
					$sql .= ",'".trim($LastName1[$i])."'";
					$sql .= ",'".trim($Institution_co1[$i])."'";
					$sql .= ",'".trim($Country_co1[$i])."'";			
					$sql .= ",'".trim($Telephone1[$i])."'";
					$sql .= ",'".trim($email1[$i])."'";							
					$sql .= ")";				
				$result = mysql_query($sql) or die(mysql_error());	
				 echo "<script>window.close()</script>"; ?>	
					
	    <script>opener.location.reload()</script>  
				sendMail_co_author(trim($email1[$i]),trim($FirstName1[$i]),trim($LastName1[$i]));			
	<?		 } 
	
	} ?>	
	
	<!-- ////////////////////////////////////////// -->
	<?  
	/*
	//ref_id = '".$row1['id']."'";		
	$time=date("Y-m-d H:i:s");
	$paper_id= " '".$row1['id']."'";

if($abstract){
	//echo $paper_id;
	$sql = "UPDATE tiim_abstract_paper SET abstract='$abstract_file',date='$time' WHERE id='".$id."' AND ref_id= '".$row1['id']."'";	
		// UPDATE `tiim_abstract_paper` SET `abstract` = 'TIIM 2010 Editors Panel List_v4.doc.1270555036',`date` = '2010-01-13 15:57:30' 
  $sql .= " '".$paper_id."'";
		 if (is_uploaded_file($_FILES['abstract_file']['tmp_name'])) 			
                	$sql .= ",'".$_FILES["abstract_file"]["name"].'.'.($time)."'";
						  $sql .= ",'".$time."'";
						$result = @mysql_query($sql) or die(mysql_error());
	/*$sql = " INSERT INTO tiim_abstract_paper(ref_id,abstract,date) VALUES (";
                $sql .= " '".$paper_id."'";
                if (is_uploaded_file($_FILES['abstract_file']['tmp_name'])) 			
                		$sql .= ",'".$_FILES["abstract_file"]["name"].'.'.mkdir ($time)."'";
				else 	$sql .= ",'' ";
                $sql .= ",'".$time."'";
                $sql .= ",'Received'";							
                $sql .= ")";
	$result = mysql_query($sql) or die(mysql_error());		
		

	$path = 'uploads/'.$username.'/';
	
					if((@opendir($path)))
							//mkdir ($path, 0777);
	
	$path = 'uploads/'.$username.'/'.$paper_id;
	
				if((@opendir($path)))
				//mkdir ($path, 0777);
		
	$path = 'uploads/'.$username.'/'.$paper_id.'/abstract/';
	
			if((@opendir($path)))
			//mkdir ($path, 0777);
				
	
	$uploads_dir = 'uploads/'.$username.'/'.$paper_id.'/abstract';
	
	
	
	if (is_uploaded_file($_FILES['abstract_file']['tmp_name'])) {
			$tmp_name = $_FILES["abstract_file"]["tmp_name"];
			$name = $_FILES["abstract_file"]["name"].'.'.mktime($time);
			move_uploaded_file($tmp_name, "$uploads_dir/$name") or die("ERROR: Can not upload abstract file.");
			//sendMail_paper_upload($to,$project,$institution,$date,$abstract,$full_paper,$status,$payment,$fname,$lname )
			echo '<p>Abstract file upload success.</p>';
	}
	
}	
*/
?>
	<!-- //////////////////////////////////////// -->
    </table>

</body>
</html>
