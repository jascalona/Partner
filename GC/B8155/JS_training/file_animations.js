//FUNCTION ANIMATION BLOCK

function animation_tray1(){
    document.getElementById('animation2').style.display = 'none';
    document.getElementById('animation3').style.display = 'none';
    document.getElementById('animation4').style.display = 'none';
    document.getElementById('animation1').style.display = 'block';
   
}

function animation_tray2(){
    document.getElementById('animation1').style.display = 'none';
    document.getElementById('animation3').style.display = 'none';
    document.getElementById('animation4').style.display = 'none';
    document.getElementById('animation2').style.display = 'block';
   
}

function animation_tray1_exit2(){
    document.getElementById('animation1').style.display = 'none';
    document.getElementById('animation2').style.display = 'none';
    document.getElementById('animation4').style.display = 'none';
    document.getElementById('animation3').style.display = 'block';
   
}

function animation_tray2_exit_2(){
    document.getElementById('animation1').style.display = 'none';
    document.getElementById('animation2').style.display = 'none';
    document.getElementById('animation3').style.display = 'none';
    document.getElementById('animation4').style.display = 'block'; 
}

//Recorrido bypass
function bypass_tray_to_exit1(){
    document.getElementById('animation6').style.display = 'none'; 
    document.getElementById('animation7').style.display = 'none'; 
    document.getElementById('animation5').style.display = 'block'; 
}

function bypass_tray_to_exit2(){
    document.getElementById('animation5').style.display = 'none'; 
    document.getElementById('animation7').style.display = 'none'; 
    document.getElementById('animation6').style.display = 'block'; 
}

function bypass_tray_to_left_side_output_tray(){
    document.getElementById('animation5').style.display = 'none'; 
    document.getElementById('animation6').style.display = 'none'; 
    document.getElementById('animation7').style.display = 'block'; 
}

//Retiro de atascos

function DADF_jam_at_exit(){
    document.getElementById('animation9').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'none'; 
    document.getElementById('animation11').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'none'; 
    document.getElementById('animation8').style.display = 'block'; 
}

function DADF_jam_at_exit_chute(){
    document.getElementById('animation8').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'none'; 
    document.getElementById('animation11').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'none'; 
    document.getElementById('animation9').style.display = 'block'; 
}

function DADF_jam_under_top_cover(){
    document.getElementById('animation8').style.display = 'none'; 
    document.getElementById('animation9').style.display = 'none'; 
    document.getElementById('animation11').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'block'; 
}

function jam_at_fuser(){
    document.getElementById('animation8').style.display = 'none'; 
    document.getElementById('animation9').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'none';
    document.getElementById('animation11').style.display = 'block';  
}

function jam_in_exit_gate(){
    document.getElementById('animation8').style.display = 'none'; 
    document.getElementById('animation9').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'none'; 
    document.getElementById('animation11').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'block'; 
}

function jam_in_duplexer(){
    document.getElementById('animation8').style.display = 'none'; 
    document.getElementById('animation9').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'none'; 
    document.getElementById('animation11').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'block'; 
}

function jam_at_output_of_tray_3(){
    document.getElementById('animation8').style.display = 'none'; 
    document.getElementById('animation9').style.display = 'none'; 
    document.getElementById('animation10').style.display = 'none'; 
    document.getElementById('animation11').style.display = 'none'; 
    document.getElementById('animation12').style.display = 'none'; 
    document.getElementById('animation13').style.display = 'none'; 
    document.getElementById('animation14').style.display = 'block'; 
}


//Animaciones for Videos
function video_fuser(){
    document.getElementById('animation_video1').style.display = 'block';
}

function feed_roller(){
    document.getElementById('img_feed_roller').style.display = 'none';
    document.getElementById('animation_video2').style.display = 'block';
}

function drum_cartridges(){
    document.getElementById('img_drum').style.display = 'none';
    document.getElementById('animation_video3').style.display = 'block';
}

function kit_dadf_250(){
    document.getElementById('img_DADF').style.display = 'none';
    document.getElementById('DADF_130').style.display = 'none';
    document.getElementById('DADF_250').style.display = 'block';
}

function kit_dadf_130(){
    document.getElementById('img_DADF').style.display = 'none';
    document.getElementById('DADF_250').style.display = 'none';
    document.getElementById('DADF_130').style.display = 'block';
}


function faul_history(){
    document.getElementById('img_faul_history').style.display = 'none';
    document.getElementById('faul_history_v').style.display = 'block';
}

