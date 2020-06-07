<?php
function get_input($type,$name,$value) {

    $output = '';


    switch($type):

        case "":

        break;

    endswitch;

}


function set_accordian($id,$args,$multiselectable="true"){
    $firsttime = "true";
    $show = "show";
    $output = '
            <div id="'.$id.'" role="tablist" aria-multiselectable="'.$multiselectable.'">
                <div class="block block-bordered block-rounded mb-2">';
                foreach($args as $index => $content):
                   $output .='<div class="block-header" role="tab" id="'.$id.'_h'.$index.'">
                        <a class="font-w600" data-toggle="collapse" data-parent="#'.$id.'" href="#'.$id.'_q'.$index.'" aria-expanded="'.$firsttime.'" aria-controls="'.$id.'_q'.$index.'">'.$content['header'].'</a>
                    </div>
                    <div id="'.$id.'_q'.$index.'" class="collapse '.$show.'" role="tabpanel" aria-labelledby="'.$id.'_h'.$index.'" data-parent="#'.$id.'">
                        <div class="block-content">
                        '.$content['body'].'
                        </div>
                    </div>
                ';
                $firsttime = "false";
                $show = '';
                endforeach;
                
           $output .='</div></div></div>';


    return $output;

}
