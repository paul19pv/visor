<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CobVeg extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CobVeg_model', 'cobveg');
    }
    //pagina principal para el portal
    public function navegacion($sec_id,$ecosistema,$fase){
        $data['mapa']=$this->load->view('sitio/mapa','',TRUE);
        $data['sector'] = $this->cobveg->get_sector($sec_id);
        $seguimiento['fase'] = $fase;
        $seguimiento['sector'] = $sec_id;
        $seguimiento['ecosistema']=$ecosistema;
        $seguimiento['datos'] = $this->cobveg->get_coberturas_sector($sec_id, $fase,$ecosistema);
        $data['seguimiento'] = $this->load->view('cobveg/componentes/seguimiento', $seguimiento, TRUE);
        $this->load->view('cobveg/index.php', $data);
    }

    public function index() {
        //$data_sim['necesidad']=$this->load->view('cobveg/simulacion/necesidad.php','',TRUE);
        $data['unidad'] = $this->view_unidades();
        //$data['simulacion']=$this->load->view('cobveg/simulacion.php',$data_sim,TRUE);
        $this->load->view('sitio/cobveg.php', $data);
    }

    //cargar unidades hidricas
    public function view_unidades() {
        $data['unidades'] = $this->cobveg->get_unidades();
        $vista = $this->load->view('cobveg/unidades.php', $data, TRUE);
        return $vista;
    }

    //cargar sectores por unidad hidrica
    public function view_sectores($unidad) {
        //$uni_id= $this->input->post('id');
        $data['encabezado'] = $this->cobveg->get_unidad($unidad);
        $data['sectores'] = $this->cobveg->get_sectores($unidad);
        $this->load->view('cobveg/sectores.php', $data);
    }

    

    //cargar el componente activa en base a la seccion y ecosistema
    public function view_activa($ecosistema, $sec_id) {
        $data = array();
        $data = array_merge($data, $this->plantacion($sec_id, $ecosistema));
        $data = array_merge($data, $this->seguimiento($sec_id, 'activa',$ecosistema));
        $data = array_merge($data, $this->get_txt_act($ecosistema));
        $this->load->view('cobveg/componentes/activa.php', $data);
    }
    //cargar el componente pasiva en base a la seccion y ecosistema
    public function view_pasiva($ecosistema, $sec_id) {
        $data = array();
        $data = array_merge($data, $this->cercado($sec_id, $ecosistema));
        $data = array_merge($data, $this->seguimiento($sec_id, 'pasiva',$ecosistema));
        $data = array_merge($data, $this->get_txt_pas($ecosistema));
        $this->load->view('cobveg/componentes/pasiva.php', $data);
    }

    //datos de plantacion y mantenimiento
    public function plantacion($sec_id, $ecosistema) {
        $data['plantacion'] = $this->cobveg->get_plantacion($sec_id, $ecosistema);
        $data['pla_man'] = $this->cobveg->get_pla_man($sec_id, $ecosistema);
        $data['tbl_plantacion'] = $this->load->view('cobveg/componentes/tbl_plantacion', '', TRUE);
        $data['tbl_pla_man'] = $this->load->view('cobveg/componentes/tbl_pla_man', '', TRUE);
        return $data;
    }

    //datos de cercado y mantenimiento
    public function cercado($sec_id, $ecosistema) {
        $data['cercado'] = $this->cobveg->get_cercado($sec_id, $ecosistema);
        $data['cer_man'] = $this->cobveg->get_cer_man($sec_id, $ecosistema);
        $data['tbl_cercado'] = $this->load->view('cobveg/componentes/tbl_cercado', '', TRUE);
        $data['tbl_cer_man'] = $this->load->view('cobveg/componentes/tbl_cer_man', '', TRUE);
        return $data;
    }

    //datos para el componente seguimiento
    public function seguimiento($sec_id, $fase,$ecosistema) {
        $seguimiento['fase'] = $fase;
        $seguimiento['sector'] = $sec_id;
        $seguimiento['ecosistema']=$ecosistema;
        $seguimiento['datos'] = $this->cobveg->get_coberturas_sector($sec_id, $fase,$ecosistema);
        $data['seguimiento'] = $this->load->view('cobveg/componentes/seguimiento', $seguimiento, TRUE);
        return $data;
    }
    //cargar la seccion paramo
    public function view_paramo($sec_id) {
        $data['sector'] = $this->cobveg->get_sector($sec_id);
        $this->load->view('cobveg/paramo.php', $data);
    }
    //cargar la seccion bosque
    public function view_bosque($sec_id) {
        //$sec_id=$this->input->post('sec_id');
        $data['sector'] = $this->cobveg->get_sector($sec_id);
        //$data['activa'] = $this->load->view('cobveg/bosque/activa.php', '', TRUE);
        //$data['pasiva'] = $this->load->view('cobveg/bosque/pasiva.php', '', TRUE);
        $this->load->view('cobveg/bosque.php', $data);
    }

    //cargar la seccion ripario
    public function view_ripario($sec_id) {
        //$sec_id=$this->input->post('sec_id');
        $data['sector'] = $this->cobveg->get_sector($sec_id);
        //$data['activa'] = $this->load->view('cobveg/ripario/activa.php', '', TRUE);
        //$data['pasiva'] = $this->load->view('cobveg/ripario/pasiva.php', '', TRUE);
        $this->load->view('cobveg/ripario.php', $data);
    }

    //cargar la seccion areas prioritarias
    public function view_areas($unidad) {
        $data_necesidad['unidad'] = $unidad;
        $data['necesidad'] = $this->load->view('cobveg/simulacion/necesidad.php', $data_necesidad, TRUE);
        $this->load->view('cobveg/areas', $data);
    }

    //vista de prueba
    public function view_informacion() {
        $this->load->view('cobveg/view_informacion');
    }

    //componente seguimiento para las secciones paramo, bosque y ripario
    public function view_seguimiento($sector, $fase,$ecosistema) {
        $data['sector'] = $sector;
        $data['fase'] = $fase;
        $data['datos'] = $this->cobveg->get_coberturas_sector($sector, $fase,$ecosistema);
        $this->load->view('cobveg/componentes/seguimiento', $data);
    }

    //componente simulacion con las capas por unidad hidrica
    public function view_coberturas_unidad($unidad, $demanda) {
        $data['datos'] = $this->cobveg->get_coberturas_unidad($unidad, $demanda);
        $data['unidad'] = $unidad;
        $data['demanda'] = $demanda;
        $this->load->view('cobveg/simulacion/simulacion', $data);
    }

    //componente escenario
    public function view_escenario($demanda, $precipitacion) {
        $data['guayllabamba'] = $this->cobveg->get_modelo('Guayllabamba', $demanda, $precipitacion);
        $data['napo'] = $this->cobveg->get_modelo('Napo', $demanda, $precipitacion);
        $data['demanda'] = $demanda;
        $data['precipitacion'] = $precipitacion;
        $data['introduccion'] = $this->get_txt_esc($precipitacion);
        $this->load->view('cobveg/componentes/escenario', $data);
    }

    //devolver lista de capas en formato json
    public function get_coberturas_unidad($unidad, $demanda) {
        $data = $this->cobveg->get_coberturas_unidad($unidad, $demanda);
        echo json_encode($data);
    }

    //devolver lista de capas de recuperacion en formato json
    public function get_coberturas_sector($sector, $fase,$ecosistema) {
        $data = $this->cobveg->get_coberturas_sector($sector, $fase,$ecosistema);
        echo json_encode($data);
    }

    //devolver lista de capas del modelo por demanda, precipitacion y cuenca en formato json
    public function get_coberturas_precipitacion($demanda, $precipitacion, $cuenca) {
        $data = $this->cobveg->get_coberturas_precipitacion($demanda, $precipitacion, $cuenca);
        echo json_encode($data);
    }
    //devolver lista de capas de recupracion por unidad en formato json
    public function get_recuperacion_unidad() {
        $data = $this->cobveg->get_recuperacion_unidad();
        echo json_encode($data);
    }

    //textos escenarios de la secion simulacion
    public function get_txt_esc($precipitacion) {
        switch ($precipitacion) {
            case 'actual':
                $texto = "Los resultados de la salida de información para este escenario están dados por la variable de estrés hídrico, considerando así que, para el escenario actual el estrés hídrico no tiene incremento de precipitación ni de demanda (P0D0).";
                break;
            case 'incremento':
                $texto = "Los resultados de la salida de información para una proyección donde el estrés hídrico resulta del incremento del 10% en precipitación y una mayor demanda (P+10D+).";
                break;
            case 'decremento':
                $texto = "Los resultados de la salida de información para una proyección donde el estrés hídrico resulta del decremento del 10% en precipitación y mayor demanda (P-10D+).";
                break;
            default:
                $texto = "No definido";
                break;
        }
        return $texto;
    }
    //textos para ecosistemas y fases
    public function get_txt_act($ecosistema) {
        switch ($ecosistema) {
            case 'paramo':
                $texto['txt_sin'] = "Debido a que el incremento de las actividades humanas productivas en los Páramos está alternado significativamente su funcionalidad natural especialmente la hidrológica, el FONAG implementa actividades como la introducción de plántulas de especies forestales, arbustivas y herbáceas nativas alto andinas adaptadas al medio que aceleren la recuperación del ecosistema páramo, cuando la restauración pasiva no funciona o es demasiado lenta.";
                $texto['txt_pla'] = "Este tipo de recuperación se ejecuta cuando el ecosistema páramo es fuertemente degradado, se lo realiza con la utilización de especies nativas principalmente Polylepis sp. (Yagual) Chuquiragua sp. Gynoxys sp (Piquil), Loricaria thuyoides (Jata), Hypericum sp (Romerillo de páramo) entre otras, aplicando metodologías como tres bolillo, tipo célula y en marco real, que dependen del grado de degradación, pendiente, viento y tipo de suelo del sector.";
                $texto['txt_man'] = "Una vez realizada la restauración activa se espera un período de al menos dos años de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se programa podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.";
                break;
            case 'bosque':
                $texto['txt_sin'] = "Los bosques andinos se desarrollan entre los 2800 y 3200 msnm y se distinguen por su amplia diversidad biológica. Debido al incremento de las actividades humanas productivas este ecosistema ha disminuido drásticamente. El FONAG busca su recuperación a través de la introducción de plántulas de especies forestales nativas y generar corredores forestales que ayuden a la conectividad de ecosistemas.";
                $texto['txt_pla'] = "Este tipo de recuperación se ejecuta cuando el ecosistema Bosque Andino está fuertemente degradado. Se utiliza especies nativas como: Oreopanax sp, Tecoma stans, Acacia melanoxilum, Alunus nepalensis, entre otras, aplicando metodologías como parches que vayan de acuerdo a las necesidades del terreno o en marco real, según el grado de degradación, pendiente, viento y tipo de suelo del sector.";
                $texto['txt_man'] = "Una vez realizada la restauración activa se espera un periodo de al menos un año de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, para reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se pueden programar podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.";
                break;
            case 'ripario':
                $texto['txt_sin'] = "Los hábitats vegetales de los márgenes y orillas de un río son de vital importancia debido al rol que desempeñan estabilizando y rehabilitando el suelo, motivo por el cual el FONAG busca su recuperación a través de la introducción de plántulas de especies forestales nativas al medio que aceleren la regeneración del ecosistema";
                $texto['txt_pla'] = "Este tipo de recuperación se ejecuta cuando el ecosistema ha sido fuertemente degradado y una regeneración natural ya no es posible, y se lo realiza con la utilización de especies hidrofílicas que dependerán del tipo de suelo, la topología y caudal del río, aplicando metodologías como: En parches entre 20 y 25 individuos que vayan de acuerdo a las necesidades del terreno, y la Marco real que se utiliza en caso no exista ningún tipo de vegetación y de esta manera evitar la sedimentación excesiva.";
                $texto['txt_man'] = "Una vez realizada la restauración activa se espera un periodo de al menos un año de adaptación de las plántulas a las condiciones climáticas y de tipo de suelo, para realizar una limpieza o un coronamiento en un radio de 50cm alrededor de las plantas, para reducir la competencia y fomentar su crecimiento. Durante el transcurso del tiempo, dependiendo del sitio y estado de la plantación se pueden programar podas y raleos para disminuir la densidad de los árboles y propiciar el ingreso natural de nuevas especies.";
                break;
            default:
                $texto['sintesis'] = "";
                $texto['plantacion'] = "No definido";
                $texto['mantenimiento'] = "";
                break;
        }
        return $texto;
    }

    public function get_txt_pas($ecosistema) {
        switch ($ecosistema) {
            case 'paramo':
                $texto['txt_sin'] = "Debido a que existen páramos que se encuentran en proceso de degradación, por actividades antropogénicas como la ganadería, el FONAG busca propiciar la restauración pasiva del ecosistema páramo a través de la regeneración natural, reducción de perturbaciones y la reducción de competencia con la implementación de cercados que limitan el ingreso de ganado.";
                $texto['txt_cer'] = "Actualmente el FONAG utiliza dos tipos de cercado; el primero un cercado eléctrico, que utiliza paneles solares, dos líneas alambre de acero y postes de plástico reciclado cada 30 m o menos dependiendo de la topología del sitio; y, el cercado tradicional con 4 líneas de alambre de púas y postes de pambil.";
                $texto['txt_man'] = "Debido a la constante presión del ganado en las cercas tradicional es necesario realizar un mantenimiento anual pues es común que se rompan las líneas de alambre por lo que se cambian los sectores afectados; para cercas eléctricas se realiza un cambio de batería en el panel y recolocación de postes de ser necesario.";
                break;
            case 'bosque':
                $texto['txt_sin'] = "Debido a que existen Bosques Andinos que se encuentran en proceso de degradación acelerado, por actividades antropogénicas como la ganadería, el FONAG busca propiciar la restauración pasiva del ecosistema a través de la regeneración natural, reducción de perturbaciones y la reducción de competencia con la implementación de cercados que limitan el ingreso principalmente de ganado.";
                $texto['txt_cer'] = "Se utilizan dos tipos de cercado, el primero un cercado eléctrico en el que se utilizan paneles solares, dos líneas alambre de acero y postes de plástico reciclado cada 30 m o menos, dependiendo de la topología del sitio, y el cercado tradicional con 6 líneas de alambre de púas y postes de pambil.";
                $texto['txt_man'] = "Debido a la constante presión del ganado en las cercas tradicionales es necesario realizar un mantenimiento anual de cercas, para el caso de cercas eléctricas se realiza un cambio de batería en el panel y recolocación de postes de ser necesario, para el caso es común que se rompan las líneas de alambre por lo que se hace un cambio de las mismas en los sectores afectados.";
                break;
            case 'ripario':
                $texto['txt_sin'] = "Debido a que existen Zonas Riparias que se encuentran en proceso de degradación acelerado por actividades antropogénicas como la ganadería pero que aún es posible una regeneración natural, el FONAG busca propiciar la restauración pasiva del ecosistema a través de la reducción de perturbaciones y la reducción de competencia con la implementación de cercados que limitan el ingreso principalmente de ganado.";
                $texto['txt_cer'] = "Actualmente el FONAG utiliza dos tipos de cercado, el primero se refiere a un cercado eléctrico en el que se utilizan paneles solares, dos líneas alambre de acero y postes de plástico reciclado cada 30 m o menos dependiendo de la topología del sitio, y el cercado tradicional con 4 líneas de alambre de púas y postes de pambil.";
                $texto['txt_man'] = "Debido a la constante presión del ganado en las cercas tradicionales es necesario realizar un mantenimiento anual de cercas, para el caso de cercas eléctricas se realiza un cambio de batería en el panel y recolocación de postes de ser necesario, para el caso es común que se rompan las líneas de alambre por lo que se hace un cambio de las mismas en los sectores afectados.";
                break;
            default:
                $texto['txt_sin'] = "";
                $texto['txt_cer'] = "No definido";
                $texto['txt_man'] = "";
                break;
        }
        return $texto;
    }

}
