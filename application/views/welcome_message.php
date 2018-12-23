
<?php $this->load->view("header");?>
  </td>
                    </tr>
    
        
            

    <tr>
     <td>
                            
    <div id="center_part" style="height: 400px">
        <div class="left_content" style="float: left; text-align: justify">
            <div style="clear: both; height: 10px;">
            </div>
            <p>
                It's an education game that creates fun. This fun story game lets you select
                best story title from multiple titles.<br>
                <br>
            </p>
            <p>
                Players learn the value of not only reading a story but also reviewin it.<br>
                <br>
            </p>
            <p>
                Invest your brain in this education game and win exciting prices. A best way to
                excercise your mind in healthy way.<br>
                <br>
            </p>
            <div style="clear: both; height: 5px;">
            </div>
            <div style="background-image: url(<?php echo base_url();?>assets/images/read_more_button.png); width: 110px; height: 34px;
                background-repeat: no-repeat; margin-left: 20%">
                <div class="read_more">
                    <a href="#" style="color: #FFFFFF">read more</a></div>
            </div>
            <div style="clear: both; height: 15px;">
            </div>
        </div>
        <div class="center_img" style="float: left">
            <div style="clear: both; height: 10px;">
            
            
            
             
              
            </div>
            <div>
                <img src="<?php echo base_url();?>assets/Luck%20India_%20Try%20Your%20Luck_files/center_img.jpg" alt="center_part_image" width="490px"></div>
        </div>
        <div class="right_content" style="float: left">
            <div id="ctl00_ContentPlaceHolder1_PopQGResult1_tblMain">
    <div style="clear: both; height: 10px;">
    </div>
    <div class="schedule_top_box">
        <div class="schedule_txt1" style="float:left">
            Quiz Game
        </div>
    </div>
    <div style="clear: both">
    </div>
    <div id="ctl00_ContentPlaceHolder1_PopQGResult1_trFunBall">
        	 <?php 
		 
		
$ctime = date('H:i:s', time());
$sno = 0;
		 $date = date("Y-m-d");?>
              <?php $this->db->where('date',$date);?>
	                    <?php $res1 = $this->db->get("result")->result();?>
	                    <?php foreach($res1 as $row):
	                    //echo $ctime;
	                   $fdate =  date('H:i:s', strtotime("-10 minute",strtotime($ctime)));
	                    $datatime=date('H:i:s', strtotime("0 minute",strtotime($row->to_time)));
	                    if($datatime<$fdate){?>  
	                   <?php $sno = $row->sno; ?>
	                   <?php } ?>
	                  	 <?php endforeach; ?> 
	                
	                  <?php	 if($sno > 0 ) {
	                  ?>
	                <?php $this->db->where('sno',$sno);?>
	                 <?php $res= $this->db->get("result")->row();?>
	                 
       <div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorFunBall_wrapper">
	<!-- 2.7.1 -->
	<div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorFunBall_Div" style="overflow: hidden; position: relative; height: 100px; width: 250px; zoom: 1;">
	<div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorFunBall_FrameContainer" style="position: relative; width: 250px; top: 0px; left: 0px;">
	<div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorFunBall_frame0" style="overflow: hidden; height: 100px; width: 250px;">
                <table cellpadding="0" cellspacing="0" width="100%" class="schedule_txt2">
                    <tbody><tr>
                        <td>
                            &nbsp;&nbsp;<span id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorFunBall_ctl01_lblGameNameFBDetail" style="color:#BFD238;font-size:20px;">Fun Quiz</span>
                            <div style="clear:both;height:5px"></div>
                            <span id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorFunBall_ctl01_lblEndHourFBDetail"><?php echo date('H:i',strtotime($res->from_time));?> TO <?php echo date('H:i',strtotime($res->to_time)); ?><br /><span class='hylite'>Result Title <?php echo $res->fun_title; ?></span> <br />(<?php echo $res->fun_detail; ?>)</span>
                            
                        </td>
                    </tr>
                </tbody></table>
            </div></div></div></div>
      
    </div>
    <hr color="#4f5559" size="1">
    <div id="ctl00_ContentPlaceHolder1_PopQGResult1_trLuckyBall">
        <div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorLuckyBall_wrapper">
	<!-- 2.7.1 --><div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorLuckyBall_Div" style="overflow: hidden; position: relative; height: 100px; width: 250px; zoom: 1;"><div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorLuckyBall_FrameContainer" style="position: relative; width: 250px; top: 0px; left: 0px;"><div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorLuckyBall_frame0" style="overflow: hidden; height: 100px; width: 250px;">
                <table cellpadding="0" cellspacing="0" width="100%" class="schedule_txt2" style="margin-top:0px">
                    <tbody><tr>
                        <td>
                            &nbsp;&nbsp;<span id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorLuckyBall_ctl01_lblGameNameLuckyBall" style="color:#BFD238;font-size:20px;">Lucky Quiz</span>
                            <div style="clear:both;height:5px"></div>
                            <span id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorLuckyBall_ctl01_lblStartHourLuckyBall"><?php echo date('H:i',strtotime($res->from_time));?> TO <?php echo date('H:i',strtotime($res->to_time)); ?><br /><span class='hylite'>Result Title <?php echo $res->lucky_title; ?></span> <br />(<?php echo $res->lucky_detail; ?>)</span>
                            
                        </td>
                    </tr>
                </tbody></table>
            </div></div></div></div>
    </div>
    <hr color="#4f5559" size="1">
    <div id="ctl00_ContentPlaceHolder1_PopQGResult1_trWonderBall">
        <div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorWonderBall_wrapper">
	<!-- 2.7.1 --><div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorWonderBall_Div" style="overflow: hidden; position: relative; height: 100px; width: 250px; zoom: 1;"><div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorWonderBall_FrameContainer" style="position: relative; width: 250px; top: 0px; left: 0px;"><div id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorWonderBall_frame0" style="overflow: hidden; height: 100px; width: 250px;">
                <table cellpadding="0" cellspacing="0" width="100%" class="schedule_txt2" style="margin-top:0px">
                    <tbody><tr>
                        <td>
                            &nbsp;&nbsp;<span id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorWonderBall_ctl01_lblGameNameWonderBall" style="color:#BFD238;font-size:20px;">Wonder Quiz</span>
                           <div style="clear:both;height:5px"></div>
                           <span id="ctl00_ContentPlaceHolder1_PopQGResult1_ProRotatorWonderBall_ctl01_lblStartHourWonderBall"><?php echo date('H:i',strtotime($res->from_time));?> TO <?php echo date('H:i',strtotime($res->to_time)); ?><br /><span class='hylite'>Result Title <?php echo $res->wonder_title; ?></span> <br />(<?php echo $res->wonder_detail; ?>)</span>
                            
                        </td>
                    </tr>
                </tbody></table>
            </div></div></div></div> 
    </div>
</div>
  <?php } else {?>
  
<?php } ?>
  
            
        </div>
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
        <a id="ctl00_Footer1_lnkBtnResult" href="#" style="color:#9F9E9E;">RESULT</a>
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
