                <div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            	<div class="panel-heading clearfix">
                                    <h4 class="panel-title">Manage Result</h4>
                                </div>
                            	<div class="panel-body">
                            		<div class="row">
	                            		<div class="col-md-12">
			                            	<?php if($this->uri->segment(3) == "edit"):?>
			                            	<?php $this->db->where("sno",$this->uri->segment(4));?>
			                            	<?php $deta = $this->db->get("result")->row();?>
			                                   <form class="form-horizontal" action="<?php echo base_url()?>apanelForms/editResult" method="post">
			                                        <div class="form-group">
			                                            <label class="col-sm-2 control-label"><strong>Fun Result</strong></label>
			                                            <div class="col-sm-4">
			                                            	<input type="hidden" value="<?php echo $this->uri->segment(4);?>" name="sno" >
			                                                <input type="text" class="form-control" value="<?php echo $deta->fun_title; ?>" id="input-Default" name="fun_title" >
			                                             </div>
			                                             <label for="input-Default" class="col-sm-2 control-label"><strong>Wonder Result</strong></label>
			                                            <div class="col-sm-4">
			                                               <input type="text" class="form-control" value="<?php echo $deta->wonder_title; ?>" id="input-Default" name="wonder_title" >
			                                            </div>
			                                            
			                                        </div>
			                                        <div class="form-group">
			                                            
			                                             <label for="input-Default" class="col-sm-2 control-label"><strong>Lucky Result</strong></label>
			                                            <div class="col-sm-4">
			                                               <input type="text" class="form-control" value="<?php echo $deta->lucky_title; ?>" id="input-Default" name="lucky_title" >
			                                            </div>
			                                          
			                                        </div>
			                                       
			                                        
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Save Edit Result </button>
			                                         </div>
			                                    </form>
			                                <?php else:?>
			                                	<form class="form-horizontal" action="<?php echo base_url()?>quiz/quizResult" method="post">
			                                	   
			                                	   <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Date</strong></label>
			                                            <div class="col-sm-2">
			                                                <input type="text" class="form-control" id="input-Default" name="date" value="<?php echo date('d-m-Y') ?>" readonly>
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>From Time</strong></label>
			                                            <div class="col-sm-2">
			                                               <input type="time" class="form-control" id="input-Default123" name="from_time" required>
			                                            </div>
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>To Time</strong></label>
			                                            <div class="col-sm-2">
			                                               <input type="time" class="form-control" id="input-Default123" name="to_time" required>
			                                            </div>
			                                        </div>
			                                        <hr />
			                                        <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Fun Quiz Title</strong></label>
			                                            <div class="col-sm-2">
			                                                <input type="text" class="form-control" id="input-Default" name="fun_title" required>
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Fun Quiz Detail</strong></label>
			                                            <div class="col-sm-6">
			                                                <input type="text" class="form-control" id="input-Default123" name="fun_detail" required>
			                                            </div>
			                                        </div>
			                                        <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Wonder Quiz Title</strong></label>
			                                            <div class="col-sm-2">
			                                                <input type="text" class="form-control" id="input-Default" name="wonder_title" required>
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Wonder Quiz Detail</strong></label>
			                                            <div class="col-sm-6">
			                                                <input type="text" class="form-control" id="input-Default123" name="wonder_detail" required>
			                                            </div>
			                                        </div>
			                                         <div class="form-group">
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Lucky Quiz Title</strong></label>
			                                            <div class="col-sm-2">
			                                                <input type="text" class="form-control" id="input-Default" name="lucky_title" required>
			                                            </div>
			                                      
			                                        
			                                            <label for="input-Default" class="col-sm-2 control-label"><strong>Lucky Quiz Detail</strong></label>
			                                            <div class="col-sm-6">
			                                                <input type="text" class="form-control" id="input-Default123" name="lucky_detail" required>
			                                            </div>
			                                        </div>
			                                         <div class="col-sm-offset-2 col-sm-10">
			                                            <button type="submit" class="btn btn-success">Save Result</button>
			                                         </div>
			                                    </form>
			                                <?php endif;?>
										</div>
									</div>
									<div class="row">
                            			<div class="col-md-12">
											<table class="table" style="width: 100%; cellspacing: 0;">
	                                        <thead>
	                                            <tr>
	                                                <th>#</th>
	                                                <th>From Time</th>
	                                                 <th>To Time</th>
	                                             <th>Date</th>
	                                                <th>Action</th>
	                                            </tr>
	                                        </thead>
	                                        <tbody>
	                                        	<?php $i = 1;?>
	                                        	<?php $date = date("Y-m-d");?>
	                                        	<?php $this->db->where('date',$date);?>
	                                        	<?php $res = $this->db->get("result")->result();?>
	                                        	<?php foreach($res as $row):?>
	                                            <tr>
	                                                <td>
	                                                	<?php echo $i; ?>
	                                                </td>
	                                                <td><?php echo $row->from_time; ?></td>
	                                                  <td><?php echo $row->to_time; ?></td>
	                                                 <td><?php echo $row->date; ?></td>
	                                                   
	                                                <td>
	                                                	<a href="<?php echo base_url();?>apanel/index/edit/<?php echo $row->sno;?>" class="btn btn-success">Edit</a>-----
	                                                <a href="<?php echo base_url();?>apanelForms/deleteResult/<?php echo $row->sno;?>" class="btn btn-danger">Delete</a>
	                                                </td>
	                                            </tr>
	                                            <?php $i++;?>
	                                            <?php endforeach;?>
	                                        </tbody>
	                                       </table>  
										</div>
                            		</div>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->