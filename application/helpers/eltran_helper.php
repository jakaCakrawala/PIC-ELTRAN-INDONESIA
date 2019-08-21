<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getContent($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Content_m');
    // Call a function of the model
    return $CI->Content_m->get_by(array('assets_id_chassis' => $id),true);
}

// 
function getPhotoDirection($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Direksi_m');
    // Call a function of the model
    return $CI->Direksi_m->get_by(array('id' => $id),true);
}

function getPhotoNews($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('news_m');
    // Call a function of the model
    return $CI->news_m->get_by(array('id' => $id),true);
}

function getBussineesLine($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Bussiness_line_m');
    // Call a function of the model
    return $CI->Bussiness_line_m->get_by(array('id' => $id),true);
}
function getCategoryBussineesLine($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('Bussiness_line_category_m');
    // Call a function of the model
    return $CI->Bussiness_line_category_m->get_by(array('id' => $id),true);
}


function CheckPersonelInvolveTeam($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('personel_team_m');
    $pisah_char = explode("&",$id);
        $id_tim = $pisah_char[0];
        $id_personel = $pisah_char[1];
    // Call a function of the model
    return count($CI->personel_team_m->get_by(array('Id_Personel' => $id_personel, 'Id_Tim'=> $id_tim)));
}


function getHakAksesPersonel($id=NULL)
    {
        $CI = get_instance();
        $CI->load->model('person_m');
        $CI->data['HakAkses'] = $CI->person_m->get_by(array('Personel_Id' =>$id),TRUE);
        if ($CI->data['HakAkses']->Personel_HakAkses == 1) {
            $ComboHakAkses ="<select class='form-control' name='Personel_HakAkses'>
                                                        <option selected value='1'>Direksi</option>
                                                        <option value='2'>Direksi</option>
                                                        <option value='3'>Personel</option>
                                                    </select>";
        } elseif ($CI->data['HakAkses']->Personel_HakAkses == 2) {
            $ComboHakAkses ="<select class='form-control' name='Personel_HakAkses'>
                                                        <option value='1'>Direksi</option>
                                                        <option selected value='2'>Proyek Manajer</option>
                                                        <option value='3'>Personel</option>
                                                    </select>";
        } else {
            $ComboHakAkses ="<select class='form-control' name='Personel_HakAkses'>
                                                        <option value='1'>Direksi</option>
                                                        <option value='2'>Proyek Manajer</option>
                                                        <option selected value='3'>Personel</option>
                                                    </select>";
        }

        return $ComboHakAkses;
    }

function getJenisTugasEdit($id=NULL)
{
    $CI = get_instance();
    $CI->load->model('tugas_m');
    $CI->data['JenisTugas'] = $CI->tugas_m->get_by(array('Tugas_Id' =>$id),TRUE);
    if ( $CI->data['JenisTugas']->Tugas_Jenis == 1) {
        $ComboJenisTugas = "<select class='form-control' name='Tugas_Jenis'>
                                                        <option selected value='1'>Program</option>
                                                        <option value='2'>Design</option>
                                                    </select>";
    } else{
        $ComboJenisTugas = "<select class='form-control' name='Tugas_Jenis'>
                                                        <option value='1'>Program</option>
                                                        <option selected value='2'>Design</option>
                                                    </select>";
    }
    return $ComboJenisTugas;
}

function getPrioritasTugasEdit($id=NULL)
{
    $CI = get_instance();
    $CI->load->model('tugas_m');
    $CI->data['PrioritasTugas'] = $CI->tugas_m->get_by(array('Tugas_Id' =>$id),TRUE);
    if ( $CI->data['PrioritasTugas']->Tugas_Prioritas == 1) {
        $ComboPrioritasTugas = "<select class='form-control' name='Tugas_Prioritas'>
                                                        <option selected value='1'>Important</option>
                                                        <option value='2'>Hurry</option>
                                                        <option value='3'>etc</option>
                                                    </select>";
    } else  if ( $CI->data['PrioritasTugas']->Tugas_Prioritas == 2){
        $ComboPrioritasTugas = "<select class='form-control' name='Tugas_Prioritas'>
                                                        <option value='1'>Important</option>
                                                        <option selected value='2'>Hurry</option>
                                                        <option value='3'>etc</option>
                                                    </select>";
    } else {
        $ComboPrioritasTugas = "<select class='form-control' name='Tugas_Prioritas'>
                                                        <option value='1'>Important</option>
                                                        <option value='2'>Hurry</option>
                                                        <option selected value='3'>etc</option>
                                                    </select>";
    }
    return $ComboPrioritasTugas;
}


function get_IdProyekByIdTim($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('tim_m');

    // Call a function of the model
    return $CI->tim_m->get_by(array('Tim_Id' => $id), TRUE);
}

function get_IdTimByIdProyek($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('tim_m');

    // Call a function of the model
    return $CI->tim_m->get_by(array('Id_Proyek' => $id), TRUE);
}

function get_TaskProgressByIdPersonelIdProyek($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();
        $pisah_char = explode("&",$id);
        $id_proyek = $pisah_char[0];
        $id_personel = $pisah_char[1];
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('tugas_m');

    // Call a function of the model
    return $CI->tugas_m->get_by(
            array(
                'Id_Personel' => $id_personel,
                'Id_Proyek' => $id_proyek
                ),TRUE
            );
}

function get_ProyekDetailByIdProyek($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('project_m');

    // Call a function of the model
    return $CI->project_m->get_by(array('Proyek_Id' => $id), TRUE);
}

function get_HakAksesByIdProyekIdPersonel($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('tugas_m');

    $pisah_char = explode("&",$id);
        $id_proyek = $pisah_char[0];
        $id_personel = $pisah_char[1];
   
    if ($CI->tugas_m->get_by(array('Id_Proyek' => $id_proyek,'Id_Personel' => $id_personel),TRUE) != NULL) {
        $result = $CI->tugas_m->get_by(array('Id_Proyek' => $id_proyek,'Id_Personel' => $id_personel),TRUE);
        
    } else if($CI->tugas_m->get_by(array('Id_Proyek' => $id_proyek,'Id_Personel' => $id_personel),TRUE) == NULL){
        $result = "Belum mendapat task";
        // var_dump($result);
    }
    // return $CI->tugas_m->get_by(array('Id_Proyek' => $id_proyek,'Id_Personel' => $id_personel),TRUE);
    return $result;
}

function get_IdManagerProyek($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('project_m');

    // Call a function of the model
    return $CI->project_m->get_by(array('Proyek_Id' => $id), TRUE);
}

 function CountProjectManager($id=NULL)
    {
         $CI = get_instance();
         $CI->load->model('project_m');
        $query = $CI->db->query("select count(ManajerProyek_Id) as jumlah_manajer FROM zonk_proyek WHERE ManajerProyek_Id ='".$id."'");
        return $query->result();
    }


 function CountTask($id=NULL)
    {
         $CI = get_instance();
         $CI->load->model('tugas_m');
        $pisah_char = explode("&",$id);
        $id_proyek = $pisah_char[0];
        $id_personel = $pisah_char[1];
        $query = $CI->db->query("select count(Tugas_Id) as jumlah_tugas FROM zonk_tugas WHERE Id_Proyek ='".$id_proyek."' AND Id_Personel = '".$id_personel."'");
        return $query->result();
    }   

function CountProgresProject($id= null)
{
    $CI = get_instance();
    $CI->load->model('project_m');
    $pisah_char = explode("&",$id);
    $id_proyek = $pisah_char[0];
    $id_personel = $pisah_char[1];
    $tugas = $CI->tugas_m->get_by(
            array(
                'Id_Proyek' => $pisah_char[0],
                'Id_Personel' => $pisah_char[1]
                )
            );
            $jumlah_tugas = CountTask($pisah_char[0]."&".$pisah_char[1])[0]->jumlah_tugas;
            // var_dump($jumlah_tugas);
            $progres_tugas_to_proyek = null;
            for ($i=0; $i <$jumlah_tugas ; $i++) {    
                $sumbangan_tugas = 100 / $jumlah_tugas;
                $progres_tugas_to_proyek = ((($sumbangan_tugas / 100) * $tugas[$i]->Tugas_Progres) + $progres_tugas_to_proyek);    
            }
            return number_format($progres_tugas_to_proyek,2);
}



/* End of file ELTRAN_helper.php */
/* Location: ./application/helpers/ELTRAN_helper.php */