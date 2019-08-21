<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_pergeseran($id)
{
    # code...
    $CI = get_instance();
    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/pergeseran_m');
    // Call a function of the model
    return $CI->pergeseran_m->get_by(array('id' => $id ),false);
}

function get_pergeseran_dituju($akun,$kegiatan,$status)
{
        // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/pergeseran_m');
    // Call a function of the model
    return $CI->pergeseran_m->get_by(array('toakun_id' => $akun , 'kegiatan_id' => $kegiatan , 'status' => $status ),false);

}

function get_pergeseran_asal($akun,$kegiatan,$status)
{
        // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/pergeseran_m');
    // Call a function of the model
    return $CI->pergeseran_m->get_by(array('fromakun_id' => $akun , 'kegiatan_id' => $kegiatan , 'status' => $status ),false);

}

function get_abt($akun,$kegiatan,$status)
{
        // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/abt_m');
    // Call a function of the model
    return $CI->abt_m->get_by(array('akun_id' => $akun , 'kegiatan_id' => $kegiatan , 'status' => $status ),false);

}

function get_penggunaan_byid($id,$sta)
{
        // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/penggunaan_m');
    // Call a function of the model
    return $CI->penggunaan_m->get_by(array('id' => $id ),$sta);

}

function get_penggunaan($akun,$kegiatan)
{
        // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/penggunaan_m');
    // Call a function of the model
    return $CI->penggunaan_m->get_by(array('akun_id' => $akun , 'kegiatan_id' => $kegiatan ),false);

}

function get_JenisDokumen($id)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/jenis_dokumen_m');
    // Call a function of the model
    return $CI->jenis_dokumen_m->get_by(array('id' => $id),true);
}

function get_anggaran_byKegiatan($id,$check,$approve,$status)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/anggaran_m');
    // Call a function of the model
    return $CI->anggaran_m->get_by(array('kegiatan_id' => $id,'is_checked' => $check,'is_approved' => $approve),$status);

}

function get_akun($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/akun_m');
    // Call a function of the model
    return $CI->akun_m->get_by(array('id' => $id),true);
}

function get_kelompokma($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/kelompokma_m');
    // Call a function of the model
    return $CI->kelompokma_m->get_by(array('id' => $id),true);
}

function get_konsumenSPA($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/customer_m');
    // Call a function of the model
    return $CI->customer_m->get_by(array('id' => $id),true);
}

function get_jenisKegiatanSPA($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/jenis_kegiatan_m');
    // Call a function of the model
    return $CI->jenis_kegiatan_m->get_by(array('id' => $id),true);
}

function get_liniBisnisSPA($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/lini_bisnis_m');
    // Call a function of the model
    return $CI->lini_bisnis_m->get_by(array('id' => $id),true);
}

function get_kegiatan($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('anggaran/kegiatan_m');
    // Call a function of the model
    return $CI->kegiatan_m->get_by(array('id' => $id),true);
}

function get_proyek_by_kegiatan($id = NULL)
{
    // Get a reference to the controller object
    $CI = get_instance();

    // You may need to load the model if it hasn't been pre-loaded
    $CI->load->model('manpro/proyek/proyek_m');
    // Call a function of the model
    return $CI->proyek_m->get_by(array('id_kegiatan' => $id),true);

}

function romanNumerals($num){ 
    $n = intval($num); 
    $res = ''; 

    /*** roman_numerals array  ***/ 
    $roman_numerals = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($roman_numerals as $roman => $number){ 
        /*** divide to get  matches ***/ 
        $matches = intval($n / $number); 

        /*** assign the roman char * $matches ***/ 
        $res .= str_repeat($roman, $matches); 

        /*** substract from the number ***/ 
        $n = $n % $number; 
    } 

    /*** return the res ***/ 
    return $res; 
} 




/* End of file ELTRAN_helper.php */
/* Location: ./application/helpers/ELTRAN_helper.php */