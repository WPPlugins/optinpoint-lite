<?php 
$theme['msg'] = htmlspecialchars_decode($theme['msg']);
$this->social=true;
?>
<style type="text/css">

.optinpoints {
background-color: #333;
<?php
    if(isset($theme["slider_canvas_c"])){
        echo 'background-color:'.$theme["slider_canvas_c"].';';
    }
    if(isset($theme["slider_bg_p"])){
        echo 'background-image:url("'.OPPOINT_PLUGIN_URL.'assets/'.$theme["slider_bg_p"].'.png");';
    }?>
}
.optinpoints-inner {
text-align: center;
background: #fff;
-webkit-border-radius:10px;
-moz-border-radius:10px;
border-radius:10px;
<?php
        if(isset($theme["bg_c"])){
            echo 'background:'.$theme["bg_c"].';';
        }?>
}

.optinpoints .optinpoint-leftpane{
display: inline-block;
<?php 
if(isset($theme["slider_dissoc"])){
echo 'display:none;';
}?>
}
.optinpoints form{
display: inline-block;
width: 80%;
}
.optinpoints .optinpoint-cont{
margin-top: 20px;
}
.optinpoints h3{
line-height: 34px;
margin: 40px 0 20px;
color: #454545;
font-size: 34px;
<?php 
if(isset($theme["heading_f"]['f'])){
    array_push($oppo_font, $theme["heading_f"]['f']);
echo 'font-family:'.$theme["heading_f"]['f'].';';
}
if(isset($theme["heading_f"]['s'])){
echo 'font-size:'.$theme["heading_f"]['s'].'px;';
}
if(isset($theme["heading_f"]['w'])){
echo 'font-weight:'.$theme["heading_f"]['w'].';';
}
if(isset($theme["heading_f"]['st'])){
echo 'font-style:'.$theme["heading_f"]['st'].';';
}
if(isset($theme["heading_fc"])){
echo 'color:'.$theme["heading_fc"].';';
}
?>
}
.optinpoints .optinpoint_para{
  margin-bottom: 10px;
}
.optinpoints .optinpoint_para,.optinpoints .optinpoint_para * {
  margin-bottom: 10px;
<?php if(isset($theme["msg_f"]['f'])){
    array_push($oppo_font, $theme["msg_f"]['f']);
echo 'font-family:'.$theme["msg_f"]['f'].';';
}if(isset($theme["msg_f"]['s'])){
echo 'font-size:'.$theme["msg_f"]['s'].'px;';
}?>
}

.optinpoints  .optinpoint-field{
position: relative;
width:90%;
margin: 0 auto 12px auto;
text-align: left;
<?php 
  if(isset($theme["tbox_w"])){
      echo 'width:'.$theme["tbox_w"].'px;';
  }
?>
}
.optinpoints .inputicon{
display: none;
}
.optinpoints .oppo-ficon .inputicon {
display: block;
width: 45px;
height: 45px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["tbox_h"])){
  echo 'width:'.$theme["tbox_h"].'px;';
  echo 'height:'.$theme["tbox_h"].'px;';
}
?>
}
.optinpoints .oppo-ficon input[type="text"],
.optinpoints .oppo-ficon input[type="text"] ~ .inputlabel{
  padding-left: 45px;
  <?php 
if(isset($theme["tbox_h"])){
  echo 'padding-left:'.$theme["tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["inico_c"]))? $theme["inico_c"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.optinpoints .oppo-ficon [oppofield="'.$f['id'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],30,$col).' no-repeat center}';
}
?>
.optinpoints .optinpoint-field textarea,
.optinpoints .optinpoint-field select,
.optinpoints input[type="text"]{
width: 100%;
height: 45px;
   -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
background: #f8fafa;
padding: 0 20px;
border: 1px solid #e4e9e9;
color: #353535;
font-size: 16px;
outline:0;
display: block;
<?php 
if(isset($theme["tbox_f"]['f'])){
    array_push($oppo_font, $theme["tbox_f"]['f']);
echo 'font-family:'.$theme["tbox_f"]['f'].';';
}
if(isset($theme["tbox_f"]['s'])){
echo 'font-size:'.$theme["tbox_f"]['s'].'px;';
}
if(isset($theme["tbox_f"]['w'])){
echo 'font-weight:'.$theme["tbox_f"]['w'].';';
}
if(isset($theme["tbox_f"]['st'])){
echo 'font-style:'.$theme["tbox_f"]['st'].';';
}
if(isset($theme["tbox_fc"])){
echo 'color:'.$theme["tbox_fc"].';';
}
if(isset($theme["tbox_bgc"])){
echo 'background:'.$theme["tbox_bgc"].';';
}
if(isset($theme["tbox_h"])){
echo 'height:'.$theme["tbox_h"].'px;';
}
if(isset($theme["tbox_bor"]) && isset($theme["tbox_borc"])){
echo ' border:'.$theme["tbox_bor"].'px solid '.$theme["tbox_borc"].';';
}
?>
}

.optinpoints .optinpoint-field.optinpoint-multidrop select{
  height: 100px;
}
.optinpoints .optinpoint-field.optinpoint-drop:before{
content: '';
width: 45px;
height: 45px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: <?=$this->getIcon('dd',16,'#000');?>;
<?php 
if(isset($theme["tbox_h"])){
  echo 'width:'.$theme["tbox_h"].'px;';
  echo 'height:'.$theme["tbox_h"].'px;';
}
?>
}
.optinpoints input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 45px;
color: rgba(0,0,0,0.6);
font-size: 16px;
font-weight:500;
padding: 0 20px;
white-space: nowrap;
<?php 
if(isset($theme["tbox_f"]['f'])){
    array_push($oppo_font, $theme["tbox_f"]['f']);
  echo 'font-family:'.str_replace("|ng","",$theme["tbox_f"]['f']).';';
}
if(isset($theme["tbox_f"]['s'])){
    echo 'font-size:'.$theme["tbox_f"]['s'].'px;';
}
if(isset($theme["tbox_f"]['w'])){
    echo 'font-weight:'.$theme["tbox_f"]['w'].';';
}
if(isset($theme["tbox_f"]['st'])){
    echo 'font-style:'.$theme["tbox_f"]['st'].';';
}
if(isset($theme["tbox_fc"])){
    echo 'color:'.$theme["tbox_fc"].';';
}
?>
}
.optinpoints input[type="text"]:valid + .inputlabel{
display: none;
}
.optinpoints select.oppoerror,
.optinpoints input[type="text"].oppoerror{
  border-color: red;
}
.optinpoints .optinpoint-check *,
.optinpoints .optinpoint-radio *{
<?php
if(isset($theme["check_f"]['f'])){
    array_push($oppo_font, $theme["check_f"]['f']);
  echo 'font-family:'.str_replace("|ng","",$theme["check_f"]['f']).';';
}
if(isset($theme["check_f"]['s'])){
    echo 'font-size:'.$theme["check_f"]['s'].'px;';
}
if(isset($theme["check_f"]['w'])){
    echo 'font-weight:'.$theme["check_f"]['w'].';';
}
if(isset($theme["check_f"]['st'])){
    echo 'font-style:'.$theme["check_f"]['st'].';';
}
if(isset($theme["check_fc"])){
    echo 'color:'.$theme["check_fc"].';';
}
?>
}
.optinpoints .optinpoint-item{
  <?php 
    $pline = 2;
    if(isset($pline))echo 'width:'.(100/$pline).'%;';
    ?>
  display: inline-block;
  vertical-align: top;
}
.optinpoints .optinpoint-item input {
  display: none;
}
.optinpoints .optinpoint-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  line-height: 24px;
  margin-right: 10px;
}

.optinpoints .optinpoint-item span:before,
.optinpoints .optinpoint-item span:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  top: 2px;
  position: absolute;
}
.optinpoints .optinpoint-item span:before {
box-shadow: 0 0 1px 1px #ccc;
background-color: #fafafa;
transition: all 0.3s ease-in-out;
border-radius: 3px;
<?php
  if(isset($theme["check_borc"])){
      echo 'border: 1px solid'.$theme["check_borc"].';';
  }
   if(isset($theme["check_c"]))echo 'background: '.$theme["check_c"].';';
?>
}
.optinpoints .optinpoint-item input[type='checkbox'] + span:before {
border-radius: 3px;
}
.optinpoints .optinpoint-item input[type='checkbox'] + span:hover:after, .optinpoints input[type='checkbox']:checked + span:after {
  content:'';
  background: no-repeat center;
background-image: <?php
        $tfi='ch6';
        
        $tfc='#000';
        if(isset($theme["check_ic"])){$tfc=$theme["check_ic"];}
        echo $this->getIcon($tfi,15,$tfc);?>;
}
.optinpoints .optinpoint-item input[type='checkbox']:not(:checked) + span:hover:after {
opacity: 0.5;
}
.optinpoints .optinpoint-item input[type='radio'] + span:before {
border-radius: 50%;
width: 16px;
height: 16px;
top: 4px;
}
.optinpoints input[type='radio']:checked + span:after {
background: <?php echo $tfc;?>;
width: 12px;
height: 12px;
top: 6px;
left: 2px;
border-radius: 50%;
}
.optinpoints .oppoinfierr{
  display: block;
  height: 12px;
  text-align: left;
  line-height: 12px;
  margin-bottom: -12px;
  font-size: 11px;
  color: red;
pointer-events: none;
  <?php
    if(isset($theme["status_f"]['f'])){
    array_push($oppo_font, $theme["status_f"]['f']);
      echo 'font-family:'.str_replace("|ng","",$theme["status_f"]['f']).';';
    }
    if(isset($theme["status_f"]['w'])){
        echo 'font-weight:'.$theme["status_f"]['w'].';';
    }
    if(isset($theme["status_f"]['st'])){
        echo 'font-style:'.$theme["status_f"]['st'].';';
    }
  ?>
}

.optinpoints .optinpoint-subs-button{
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
width: 90%;
margin: 0 auto;
padding: 0 22px;
color: #fff;
font-size: 22px;
border: 1px solid #3079ed;
background-color: #4d90fe;
height: 45px;
line-height: 45px;
text-align: center;
cursor: pointer;
margin-bottom: 10px;
position: relative;
<?php
if(isset($theme["button_f"]['f'])){
    array_push($oppo_font, $theme["button_f"]['f']);
echo 'font-family:'.$theme["button_f"]['f'].';';
}
if(isset($theme["button_f"]['s'])){
echo 'font-size:'.$theme["button_f"]['s'].'px;';
}
if(isset($theme["button_f"]['w'])){
echo 'font-weight:'.$theme["button_f"]['w'].';';
}
if(isset($theme["button_f"]['st'])){
echo 'font-style:'.$theme["button_f"]['st'].';';
}
if(isset($theme["button_fc"])){
echo 'color:'.$theme["button_fc"].';';
}
if(isset($theme["button_w"])){
echo 'width:'.$theme["button_w"].'px;';
}
if(isset($theme["button_h"])){
echo 'height:'.$theme["button_h"].'px;';
}
if(isset($theme["button_bc"])){
echo 'background-color:'.$theme["button_bc"].';';
}
else{ ?>
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
<?php }
if(isset($theme["button_br"])){
echo '-webkit-border-radius:'.$theme["button_br"].'px;';
echo '-moz-border-radius:'.$theme["button_br"].'px;';
echo '-ms-border-radius:'.$theme["button_br"].'px;';
echo '-o-border-radius:'.$theme["button_br"].'px;';
echo 'border-radius:'.$theme["button_br"].'px;';
}
if(isset($theme["button_bor"]) && isset($theme["button_borc"])){
echo ' border:'.$theme["button_bor"].'px solid '.$theme["button_borc"].';';
}
?>
}
.optinpoints .optinpoint-subs-button::before{
content: '<?php if(isset($theme['button'])) echo $theme['button'];else echo __( 'Subscribe', 'optinpoint' );?>';
<?php if(isset($theme["button_h"])){
echo 'line-height:'.$theme["button_h"].'px;';
} ?>
}
.optinpoints .optinpoint-subs-button:hover{
<?php if(isset($theme["button_fch"])){
echo 'color:'.$theme["button_fch"].';';
}    
if(isset($theme["button_bch"])){
echo 'background-color:'.$theme["button_bch"].';';
} else{ ?>
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
<?php }?>
}
.optinpoints .optinpoint-subs-button.subsicon:before{
padding-left: 45px;
  <?php 
  if(isset($theme["button_w"])){
      echo 'padding-left:'.$theme["button_h"].'px;';
  }
  ?>
}
.optinpoints .optinpoint-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["button_h"])){
      echo 'width:'.$theme["button_h"].'px;';
      echo 'height:'.$theme["button_h"].'px;';
  }
  if($theme["button_i"] != 'inone' && $theme["button_i"] != 'idef'){
    $col = ((isset($theme["button_fc"]))? $theme["button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["button_i"],30,$col).' no-repeat center;';
  }
  ?>
}
.optinpoints .optinpoint-social{
display: inline-block;
margin-bottom: 10px;
}
.optinpoints .optinpoint-social::before{
content: '<?php if(isset($theme['soc_head'])) echo $theme['soc_head'];else echo __( 'Subscribe with', 'optinpoint' );?>';
font-size: 20px;
line-height: 30px;
display: block;
<?php
if(isset($theme["soc_f"]['f'])){
    array_push($oppo_font, $theme["soc_f"]['f']);
echo 'font-family:'.$theme["soc_f"]['f'].';';
}
if(isset($theme["soc_f"]['s'])){
echo 'font-size:'.$theme["soc_f"]['s'].'px;';
}
if(isset($theme["soc_f"]['w'])){
echo 'font-weight:'.$theme["soc_f"]['w'].';';
}
if(isset($theme["soc_f"]['st'])){
echo 'font-style:'.$theme["soc_f"]['st'].';';
}
if(isset($theme["soc_fc"])){
echo 'color:'.$theme["soc_fc"].';';
}
?>
}

.optinpoints .optinpoint-social .optinpoint-soc{
width:40px;
height: 40px;
-webkit-border-radius: 50%;
-moz-box-border-radius: 50%;
-ms-border-radius: 50%;
-o-border-radius: 50%;
border-radius: 50%;
float: left;
margin: 5px;
cursor: pointer;
-webkit-transition: all 0.1s ease;
transition: all 0.1s ease;
-webkit-backface-visibility:hidden;
}
.optinpoints .optinpoint-social .optinpoint-soc:hover{
-webkit-transform:scale(1.1);
-ms-transform:scale(1.1);
transform:scale(1.1);
}
.optinpoints .optinpoint-social .optinpoint-soc::before{
display: block;
margin: 7px;
}

.optinpoints .optinpoint-social .optinpoint-soc.optinpoint-fb {
background: #2d609b;
<?php if(!isset($settings["fb_api"])){
echo 'display:none;';
}?>
}
.optinpoints .optinpoint-social .optinpoint-soc.optinpoint-fb::before {
content:<?php echo $this->getIcon('fb',25,'#fff');?>
}
.optinpoints .optinpoint-social .optinpoint-soc.optinpoint-gp {
background: #eb4026;
<?php if(!isset($settings["gp_api"])){
echo 'display:none;';
}?>
}
.optinpoints .optinpoint-social .optinpoint-soc.optinpoint-gp::before {
content: <?php echo $this->getIcon('gp',25,'#fff');?>
}
.optinpoints .optinpoint-social .optinpoint-soc.optinpoint-ms {
background: #00BCF2;
<?php if(!isset($settings["ms_api"])){
echo 'display:none;';
}?>
}
.optinpoints .optinpoint-social .optinpoint-soc.optinpoint-ms::before {
content: <?php echo $this->getIcon('ms',25,'#fff');?>
}
.optinpoints .optinpoint-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
}
.optinpoints .optinpoint-signal {
display: none;
}
.optinpoints-inner.signalshow .optinpoint-signal {
  display: inline-block;
}
.optinpoints .optinpoint-tag,
.optinpoints .optinpoint-tag *{
color:#000;
font-size: 10px;
<?php
        if(isset($theme["tag_f"]['f'])){
    array_push($oppo_font, $theme["tag_f"]['f']);
          echo 'font-family:'.$theme["tag_f"]['f'].';';
        }
        if(isset($theme["tag_f"]['s'])){
            echo 'font-size:'.$theme["tag_f"]['s'].'px;';
        }
        if(isset($theme["tag_f"]['w'])){
            echo 'font-weight:'.$theme["tag_f"]['w'].';';
        }
        if(isset($theme["tag_f"]['st'])){
            echo 'font-style:'.$theme["tag_f"]['st'].';';
        }
        if(isset($theme["tag_fc"])){
            echo 'color:'.$theme["tag_fc"].';';
        }
      ?>
}
.optinpoints .optinpoint-tag::before{

   content:<?php
        $tfs=10;
        if(isset($theme["tag_f"]['s'])){$tfs=$theme["tag_f"]['s'];}
        $tfc='#000';
        if(isset($theme["tag_fc"])){$tfc=$theme["tag_fc"];}
        echo $this->getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.optinpoints .optinpoint-feedback{
margin: -40px 0 22px;
position: relative;
font-size: 16px;
height: 16px;
<?php
if(isset($theme["status_f"]['f'])){
    array_push($oppo_font, $theme["status_f"]['f']);
echo 'font-family:'.$theme["status_f"]['f'].';';
}
if(isset($theme["status_f"]['s'])){
echo 'font-size:'.$theme["status_f"]['s'].'px;';
}
if(isset($theme["status_f"]['w'])){
echo 'font-weight:'.$theme["status_f"]['w'].';';
}
if(isset($theme["status_f"]['st'])){
echo 'font-style:'.$theme["status_f"]['st'].';';
}
if(isset($theme["status_fc"])){
echo 'color:'.$theme["status_fc"].';';
}
?>
}
.optinpoints .optinpoint-feedback.optinpoint-done{
margin: 40px;
height: auto;
}
.optinpoints-trig{	
top:40%;
margin: 0 3px;
display: block;
<?php
if(isset($theme["slider_trigger_top"])){
echo 'top:'.$theme["slider_trigger_top"].'%;';
}
?>
}
.optinpoints-trigi{ 
background: #0066CB;
width:50px;
height:50px;
-webkit-border-radius:1px;
-moz-border-radius:1px;
border-radius:1px;
<?php
if(isset($theme["slider_trigger_bg"])){
echo 'background:'.$theme["slider_trigger_bg"].';';
}?>
}
.optinpoints-trig.right .optinpoints-trigi{
-webkit-border-radius:1px;
-moz-border-radius:1px;
border-radius:1px;
}
.optinpoints-trig:hover .optinpoints-trigi{
-webkit-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
-moz-box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
box-shadow: inset 3px 2px 21px 5px rgba(0,0,0,0.2);
}
.optinpoints-trigi:before{	
<?php 
$ti='a04';
if(isset($theme["slider_trigger_i"])){
  if($theme["slider_trigger_i"] == 'inone')$ti='';
  else if($theme["slider_trigger_i"] != 'idef')$ti=$theme["slider_trigger_i"];
}
 ?> 
content:<?php echo $this->getIcon($ti,32,(isset($theme["slider_trigger_c"]))?$theme["slider_trigger_c"]:'#fff');?>;
height: 32px;
width: 32px;
display: block;
margin: 8px;
position: absolute;
}
#optinpoints-trig .optinpoints-trigh{
<?php
  if(isset($theme["slider_trigger_hider"]))
    echo 'display:block;';
?>
}
#optinpoints-trig .optinpoints-trigh:before{
<?php
  if(isset($theme["slider_trigger_hc"])){
    echo 'border-right-color: '.$theme["slider_trigger_hc"].';';
    echo 'border-left-color: '.$theme["slider_trigger_hc"].';';
  }
?>
}
</style>


<div id="optinpoints" class="scrollhide optinpointcss">
  <div class="optinpoints-cont">
  <div class="optinpoints-scroller">
    <div class="optinpoints-resp">
    <div class="optinpoints-inner oppointselector optinpoint-mainc">
<?php if(isset($theme['heading'])) echo '<h3>'.$theme['heading'].'</h3>';?>
<?php if(isset($theme['msg'])) echo '<div class="optinpoint_para">'.$theme['msg'].'</div>';?>
  <div class="optinpoint-cont">
	    <div class="optinpoint-leftpane">
            <div class="optinpoint-social">
                <div class="optinpoint-soc optinpoint-fb"></div>
                <div class="optinpoint-soc optinpoint-gp"></div>
                <div class="optinpoint-soc optinpoint-ms"></div>
            </div>
        </div>
	    <form action="" method="post" class="optinpoint-reset">
<input type="hidden" name="action" value="optinpoint_add_email_ajax"/>
<input type="hidden" name="oppoform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
  'icon' => false,
  'type' => 1
  );
$this->stfield($form['fields'],$set); 
?>
  <div class="optinpoint-subs-button<?php echo (isset($theme['button_i']) && $theme['button_i'] != 'inone' && $theme['button_i'] != 'idef')? ' subsicon' : '';?>"></div>
            <?php if(isset($theme['tag_en'])){
              if(isset($theme['tag'])) $tagtxt= $theme['tag'];
              else $tagtxt=__( 'Secure and Spam free...', 'optinpoint' );
              echo '<div class="optinpoint-tag">'.$tagtxt.'</div>';
              }?>
		    <div class="optinpoint-signalc"><div class="optinpoint-signal"><?php 
            echo $this->getSpin('7','optinpoints',isset($theme["spinner_c"])?$theme["spinner_c"]:'#000');?></div></div>
		</form>
    	<div class="optinpoint-feedback" oppoerr="gen"></div>
    </div>
	</div>	</div></div></div></div>
<div class="optinpoints-bg optinpointcss"></div>
<div class="optinpoints-overlay optinpointcss"></div>
<div id="optinpoints-trig" class="optinpointcss" <?php if(isset($settings['slider_trigger_scroll'])) echo 'class="scrollhide"';?>>
  <div class="optinpoints-trigc">
    <div class="optinpoints-trigi"></div>
    <div class="optinpoints-trigh"></div>
  </div>
</div>