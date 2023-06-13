<?php
use App\Models\Absensi;
use Carbon\Carbon;

function removeString($id)
{
    if(!empty($id))
    {
        $result = preg_replace('/[^0-9,]/s', '', $id);
    }else{
        $result = null;
    }
    return $result;
}

function formatRupiah($id)
{
    if(!empty($id))
    {
        $result = number_format($id,0,',','.');
    }else{
        $result = null;
    }
    return $result;
}

function evalmath($equation)
{
    $result = 0;
    // sanitize imput
    $equation = preg_replace("/[^a-z0-9+\-.*\/()%]/","",$equation);
    // convert alphabet to $variabel
    $equation = preg_replace("/([a-z])+/i", "\$$0", $equation);
    // convert percentages to decimal
    $equation = preg_replace("/([+-])([0-9]{1})(%)/","*(1\$1.0\$2)",$equation);
    $equation = preg_replace("/([+-])([0-9]+)(%)/","*(1\$1.\$2)",$equation);
    $equation = preg_replace("/([0-9]{1})(%)/",".0\$1",$equation);
    $equation = preg_replace("/([0-9]+)(%)/",".\$1",$equation);
    return $equation;
}

function changeCommaToDot($id)
{
    if(!empty($id))
    {
        $result = str_replace(',', '.', $id);
    }else{
        $result = null;
    }
    return $result;
}

function getUserFirstValue($id)
{
    if(!empty($id))
    {
        $result = DB::table('users')->where('id', $id)->get();
    }else{
        $result = null;
    }
    return $result;
}
function getSiswaFirstValue($id)
{
    if(!empty($id))
    {
        $result = DB::table('siswas')->where('id', $id)->get();
    }else{
        $result = null;
    }
    return $result;
}
function getSiswaActiveStatus($id)
{
    if(!empty($id))
    {
        $result = DB::table('siswas')->where('kode_ortu', $id)->value('active');
    }else{
        $result = null;
    }
    return $result;
}
function getSiswaByKodeOrtu($kode_ortu)
{
    if(!empty($kode_ortu))
    {
        $result = DB::table('siswas')->where('kode_ortu', $kode_ortu)->value('nama');
    }else{
        $result = null;
    }
    return $result;
}

function getUserData($id)
{
    if(!empty($id))
    {
        $result = DB::table('users')->where('id', $id)->first();
    }else{
        $result = null;
    }
    return $result;
}

function getComponentTestIdbyName($id)
{
    if(!empty($id))
    {
        $result = DB::table('tb_componenttest')->where('nama_componenttest', $id)->value('id');
    }else{
        $result = null;
    }
    return $result;
}

function getItemTestGenerate($id)
{
    if(!empty($id))
    {
        $result = DB::table('tb_itemcomponenttest')->select('id_componenttest','id_jenis_componenttest','item_test','norma_m','norma_f','satuan')->where('id', $id)->get();
    }else{
        $result = null;
    }
    return $result;
}

function TrainingLoadValuecolorchecker($color)
{
    if($color < -1){
        $color = '#fff';
    }
    else if($color == 0){
        $color = '#e9ecef';
    }
    else if($color > 0 && $color < 11){
        $color = '#63BE7B';
    }
    else if($color > 10 && $color < 21){
        $color = '#82C77C';
    }
    else if($color > 20 && $color < 31){
        $color = '#A1D07E';
    }
    else if($color > 30 && $color < 41){
        $color = '#C0D980';
    }
    else if($color > 40 && $color < 51){
        $color = '#DFE282';
    }
    else if($color > 50 && $color < 61){
        $color = '#FFEB84';
    }
    else if($color > 60 && $color < 71){
        $color = '#FECB7E';
    }
    else if($color > 70 && $color < 81){
        $color = '#FCAA78';
    }
    else if($color > 80 && $color < 91){
        $color = '#FA8A72';
    }
    else if($color > 90 && $color < 101){
        $color = '#ffa4a4';
    }
    else if($color > 101){
        $color = '#ffa4a4';
    }
    return $color;
}
function RPEcolorchecker($color)
{
    if($color < -1){
        $color = '#fff';
    }
    else if($color == 0){
        $color = '#e9ecef';
    }
    else if($color > 0 && $color < 2){
        $color = '#63BE7B';
    }
    else if($color > 1 && $color < 3){
        $color = '#82C77C';
    }
    else if($color > 2 && $color < 4){
        $color = '#A1D07E';
    }
    else if($color > 3 && $color < 5){
        $color = '#C0D980';
    }
    else if($color > 4 && $color < 6){
        $color = '#DFE282';
    }
    else if($color > 5 && $color < 7){
        $color = '#FFEB84';
    }
    else if($color > 6 && $color < 8){
        $color = '#FECB7E';
    }
    else if($color > 7 && $color < 9){
        $color = '#FCAA78';
    }
    else if($color > 8 && $color < 10){
        $color = '#FA8A72';
    }
    else if($color > 9 && $color < 11){
        $color = '#fa7272';
    }
    return $color;
}
function checkWelnessDailyUpdatedToday($day,$id_plan)
{
    if(!empty($day))
    {
        $result = DB::table('tb_wellness_settings')->where('updated_at', '>=', $day.' 00:00:00')->where('id_plan', $id_plan)->first();
    }else{
        $result = null;
    }
    return $result;
}
function checkWelnessDailyExist($day,$day2,$id_plan)
{
    if(!empty($day))
    {
        // $result = DB::table('tb_wellness_settings')->where('day', $day)->where('id_plan', $id_plan)->first();
        $from = date($day);
        $to = date($day2);
        $result = DB::table('tb_wellness_settings')->whereBetween('day', [$from, $to])->where('id_plan', $id_plan)->first();
    }else{
        $result = null;
    }
    return $result;
}
function getSpesificWelnessSetting($noWelness,$day,$day2)
{
    if(!empty($day))
    {
        $noWelnessKey = $noWelness - 1;
        // $query = DB::table('tb_wellness_settings')->where('day', $day)->value('value');

        $from = date($day);
        $to = date($day2);
        $query = DB::table('tb_wellness_settings')->whereBetween('day', [$from, $to])->value('value');

        if($query != null){
            $result = collect(json_decode($query)[$noWelnessKey])['welness_id_'.$noWelness];
        }else{
            $result = null;
        }

    }else{
        $result = null;
    }
    return $result;
}

function getDataGuru($active)
{
    if(!empty($active))
    {
        $result = DB::table('gurus')->where('active', $active)->get();
    }else{
        $result = null;
    }
    return $result;
}
// function checkLogin()
// {
//     if(Auth::guard('siswa')->check())
//     {
//         return redirect('/admin/dashboard');
//     }
//     if(Auth::guard('siswa')->check())
//     {
//         return redirect('siswa/dashboard');
//     }
//     if(Auth::guard('guru')->check())
//     {
//         return redirect('/guru/dashboard');
//     }
//     if(Auth::guard('orangtua')->check())
//     {
//         return redirect('/orangtua/dashboard');
//     }
// }

function getTahunAkademik()
{
    $result = DB::table('tahun_akademiks')->get();
    return $result;
}
function getTahunAkademikByID($id)
{
    if(!empty($id))
    {
        $result = DB::table('tahun_akademiks')->where('id', $id)->get();
    }else{
        $result = null;
    }
    return $result;
}
