
<?php $this->load->view("header");?>
  </td>
                    </tr>
    
        
            

    <tr>
     <td>
         	                         
    <div class="wrapper" style=" background-color: white">
         <form class="form-horizontal" action="<?php echo base_url()?>index.php/welcome/previousResult" method="post">
    <table cellpadding="0" cellspacing="10" width="100%">
                                <tr>
                                    <td align="right" style="width: 400px; padding-right: 10px" class="NormalText">
                                        Select Date:
                                    </td>
                                    <td style="width: 50px">
                                        <input name="previousDate" type="date" id="txtDate" class="NormalText" />
                                    </td>
                                    <td>
                                       
                                        
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                    </td>
                                    <td align="left" style="width: 50px">
                                        <input type="submit" name="btnSubmit" value="Submit" id="btnSubmit" />
                                    </td>
                                </tr>
                            </table>
                 </form>
          <table cellpadding="0" cellspacing="0" width="100%">
              
           <tr>
                        <td class="trHeight">
                        </td>
                    </tr>
                    <tr>
                        <td class="trHeight">
                        </td>
                    </tr>
                    <tr>
                        <td class="trHeight">
                        </td>
                    </tr>
                    <tr>
                        <td class="trHeight">
                        </td>
                    </tr>
                    
                    <tr>
                        <td valign="top" style="padding-left: 10px">
                            
	                    
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td>
                                        <div>
	<table cellspacing="0" rules="all" border="1" id="GridViewAllStory" style="width:100%;border-collapse:collapse;">
	  
		<tr>
			<th scope="col">
                                                        <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                                <td style="width: 110px" valign="bottom" class="NormalText">
                                                                    Time
                                                                </td>
                                                                <td valign="top">
                                                                    <table cellpadding="0" cellspacing="0" width="100%" class="NormalText">
                                                                        <tr>
                                                                            <td colspan="2" align="left" style="padding-left: 20px">
                                                                                Fun Quiz
                                                                                
                                                                                
                                                                                
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="trHeight">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="trHeight">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 50px; padding-left: 15px" align="left">
                                                                                Title No.
                                                                            </td>
                                                                            <td style="width: 200px" align="left">
                                                                                Option Detail
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                    </th>
                                                    <th scope="col">
                                                        <table cellpadding="0" cellspacing="0" width="100%" class="NormalText">
                                                            <tr>
                                                                <td colspan="2">
                                                                    Wonder Quiz
                                                                    
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="trHeight">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="trHeight">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 50px; padding-left: 5px" align="left">
                                                                    Title No.
                                                                </td>
                                                                <td style="width: 200px" align="left">
                                                                    Option Detail
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    <th scope="col">
                                                        <table cellpadding="0" cellspacing="0" width="100%" class="NormalText">
                                                            <tr>
                                                                <td colspan="2">
                                                                    Lucky Quiz
                                                                    
                                                                    
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="trHeight">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="trHeight">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 50px; padding-left: 5px" align="left">
                                                                    Title No.
                                                                </td>
                                                                <td style="width: 200px" align="left">
                                                                    Option Detail
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </th>
                                                    
		</tr>
		
		
		 <?php 
		 
        $date = date("Y-m-d"); ?>
	<?php	 $date1 = $this->input->post("previousDate");?>
	<?php	if(strtotime($date1) < strtotime($date)):
		 ?>
              <?php $this->db->where('date',$date1);?>
	                    <?php $res = $this->db->get("result")->result();?>
	                    <?php foreach($res as $row): ?>
	             
		<tr>
		   
                                                    <td align="center">
                                                      <table cellpadding="0" cellspacing="0" width="100%">
                                                            <tr>
                                                                <td style="width: 110px; border-right-style: solid; border-right-color: #000; border-right-width: 1px;
                                                                    padding-left: 5px; padding-right: 5px" class="NormalText">
                                                                    <span id="GridViewAllStory_ctl02_lblStartHour" class="NormalText"><?php echo date('H:i',strtotime($row->from_time)); ?></span>
                                                                    to
                                                                    <span id="GridViewAllStory_ctl02_lblEndHour" class="NormalText"><?php echo date('H:i',strtotime($row->to_time)); ?></span>
                                                                </td>
                                                                <td>
                                                                    <table id="GridViewAllStory_ctl02_tblAllEmpGrid" cellpadding="0" cellspacing="0" width="100%">
				<tr style="height: 80px">
					<td style="width: 50px; padding-left: 5px" align="left">
                                                                                
                                                                                
                                                                                <span id="GridViewAllStory_ctl02_lblResultDay" class="NormalText"><?php echo $row->fun_title; ?></span>
                                                                            </td>
					<td style="width: 200px" align="left">
                                                                                <span id="GridViewAllStory_ctl02_lblTitleName" class="NormalText"><?php echo $row->fun_detail; ?></span>
                                                                            </td>
				</tr>
				<tr>
					<td class="trHeight">
                                                                            </td>
				</tr>
			</table>
			
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    
                                                    <td align="center">
                                                        <table id="GridViewAllStoryWonderBall1_ctl02_tblAllEmpGrid" cellpadding="0" cellspacing="0" width="100%">
				<tr style="height: 80px">
					<td style="width: 50px; padding-left: 5px" align="left">
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    <span id="GridViewAllStoryWonderBall1_ctl02_lblResultDay" class="NormalText"><?php echo $row->wonder_title; ?></span>
                                                                </td>
					<td style="width: 200px" align="left">
                                                                    <span id="GridViewAllStoryWonderBall1_ctl02_lblTitleName" class="NormalText"><?php echo $row->wonder_detail; ?></span>
                                                                </td>
				</tr>
				<tr>
					<td class="trHeight">
                                                                </td>
				</tr>
			</table>
			
                                                    </td>
                                                    	<td align="center">
                                                        <table id="GridViewAllStoryLuckyBall1_ctl02_tblAllEmpGrid" cellpadding="0" cellspacing="0" width="100%">
				<tr style="height: 80px">
					<td style="width: 50px; padding-left: 5px" align="left">
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    <span id="GridViewAllStoryLuckyBall1_ctl02_lblResultDay" class="NormalText"><?php echo $row->lucky_title; ?></span>
                                                                </td>
					<td style="width: 200px" align="left">
                                                                    <span id="GridViewAllStoryLuckyBall1_ctl02_lblTitleName" class="NormalText"><?php echo $row->lucky_detail; ?></span>
                                                                </td>
				</tr>
				
				<tr>
					<td class="trHeight">
                                                                </td>
				</tr>
			
			</table>
			
                                                    </td>
                                                    
		</tr>
		 <?php endforeach;?> 
		 <?php else: ?>
		 <?php redirect(base_url()."index.php/welcome/result");?>
		 <?php endif; ?>
		
	</table>
</div>
                                    </td>
                                </tr>
                            </table>
                      
                        </td>
                       
                        
                    </tr>
                    <tr><td class="trHeight"></td></tr>
                    <tr><td class="trHeight"></td></tr>
                    <tr style="background-color:#000">
                        <td style="height: 10px" colspan="3">
                        </td>
                    </tr>  
        </table>          
        
            
    </div>
 </td>
                    </tr>


      

      <tr>
                        <td>
                            

<div style="clear: both; height: 10px;">
</div>
<div class="wrapper">
<div class="footer" >
    <div class="footer_txt">
        <a id="ctl00_Footer1_lnkBtnHome" href="<?php echo base_url();?>" style="color:#9F9E9E;">HOME</a>
    </div>
    <div class="footer_txt">
        <a id="ctl00_Footer1_lnkBtnRegister" href="#" style="color:#9F9E9E;">REGISTER</a>
    </div>
    <div class="footer_txt">
        <a id="ctl00_Footer1_lnkBtnAbout" href="#" style="color:#9F9E9E;">ABOUT</a>
    </div>
    <div class="footer_txt">
        <a id="ctl00_Footer1_lnkBtnResult" href="<?php echo base_url();?>index.php/welcome/result" style="color:#9F9E9E;">RESULT</a>
    </div>
    <div class="footer_txt">
        <a id="ctl00_Footer1_lnkBtnContact" href="#" style="color:#9F9E9E;">CONTACT</a>
    </div>
    <div id="ctl00_Footer1_divLogin" class="footer_txt">
        <a id="ctl00_Footer1_lnkBtnLogin" href="<?php echo base_url();?>" style="color:#9F9E9E;">LOGIN</a>
    </div>
    <div class="footer_txt">
        
    </div>
</div></div>
<div style="clear: both; height: 10px;">
</div>
<!--End of the footer -->


                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
    
    


<div id="window-resizer-tooltip" style="display: block;"><a href="#" title="Edit settings"></a><span class="tooltipTitle">Window size: </span><span class="tooltipWidth" id="winWidth">1280</span> x <span class="tooltipHeight" id="winHeight">994</span><br><span class="tooltipTitle">Viewport size: </span><span class="tooltipWidth" id="vpWidth">1280</span> x <span class="tooltipHeight" id="vpHeight">890</span></div>



</body>
</html>

 <!--   
<script type="text/javascript">
function load()
{
setTimeout("window.open('http://anandmay.co.in/index.php/welcome/result', '_self');", 7000);
}
</script>
<body onload="load()"> -->
