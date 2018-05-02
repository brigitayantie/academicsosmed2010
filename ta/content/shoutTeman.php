 <span id='isishoutout'>
                     <? 
					 $status=$objTeman->GetStatus();
					 echo $status[isi]; 
                    
                     ?> 
                     </span>
                     <span id='waktushoutout'>
                     </span>
                     <input type="hidden" id='startwaktushoutout' value="<? echo $status[timestamp]; ?>" />
                    <br>
                    <textarea id="txtShoutOut" cols="44" rows="2" ></textarea>
                    <div  align="right" style="width:100%;">
                                            		<span class="art-button-wrapper">
                                            			<span class="l"> </span>
                                            			<span class="r"> </span>
                                            			<a class="art-button" href="javascript:ShoutIt();">Shout It</a>
                                            		</span>
                                            	</div>
                    
                    