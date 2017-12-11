<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class getcustomreportdata extends SugarApi {

    public function registerApiRest() {
        return array(
            //GET
            'getcustomreportdata' => array(
                //request type
                'reqType' => 'GET',
                //set authentication
                'noLoginRequired' => false,
                //endpoint path
                'path' => array('getcustomreportdata'),
                //endpoint variables
                'pathVars' => array(''),
                //method to call
                'method' => 'getData',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of a GET endpoint',
                //long help to be displayed in the help documentation
                'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
            ),
        );
    }

    public function getData($api, $args) {

        $reportdata = array(
            'shops' => array(
                'Super C' => array(
                    'shop_name' => 'Super C',
                    'data' => array(
                        array(
                            'row_color' => '#fde600',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '8711',
                                'SPRDELTA' => '-4.7',
                                'APRDELTA' => '8.7'
                            ),
                            'weekly' => array(
                                'COUR' => '8711',
                                'SPRDELTA' => '-4.7',
                                'APRDELTA' => '8.7',
                                'TB_BDDELTA' => '4.7'
                            ),
                        ),
                    ),
                ),
                'Bannière comparable' => array(
                    'shop_name' => 'Bannière comparable',
                    'data' => array(
                        array(
                            'row_color' => '#fff',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '8512',
                                'SPRDELTA' => '-4.6',
                                'APRDELTA' => '69.0'
                            ),
                            'weekly' => array(
                                'COUR' => '8512',
                                'SPRDELTA' => '-4,6',
                                'APRDELTA' => '6.9',
                                'TB_BDDELTA' => '4.6'
                            ),
                        ),
                    ),
                ),
                'Abitibi-Témiscamingue' => array(
                    'shop_name' => 'Abitibi-Témiscamingue',
                    'data' => array(
                        array(
                            'row_color' => '#8a8a8a', 'color' => '#fff',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '199',
                                'SPRDELTA' => '-2,7',
                                'APRDELTA' => '2.1'
                            ),
                            'weekly' => array(
                                'COUR' => '199',
                                'SPRDELTA' => '-2,7',
                                'APRDELTA' => '2.1',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Rouyn-Noranda' => array(
                    'shop_name' => 'Rouyn-Noranda',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '111',
                                'SPRDELTA' => '-1,5',
                                'APRDELTA' => '-4,1'
                            ),
                            'weekly' => array(
                                'COUR' => '111',
                                'SPRDELTA' => '-1,5',
                                'APRDELTA' => '-4,1',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Val DOr' => array(
                    'shop_name' => 'Val DOr',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '87',
                                'SPRDELTA' => '-4,2',
                                'APRDELTA' => '11.1'
                            ),
                            'weekly' => array(
                                'COUR' => '87',
                                'SPRDELTA' => '-4,2',
                                'APRDELTA' => '11.1',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Chaudière-Appalaches' => array(
                    'shop_name' => 'Chaudière-Appalaches',
                    'data' => array(
                        array(
                            'row_color' => '#8a8a8a', 'color' => '#fff',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '375',
                                'SPRDELTA' => '-1.3',
                                'APRDELTA' => '5.9'
                            ),
                            'weekly' => array(
                                'COUR' => '375',
                                'SPRDELTA' => '-1,3',
                                'APRDELTA' => '5.9',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Chrysostome' => array(
                    'shop_name' => 'Chrysostome',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '85',
                                'SPRDELTA' => '3.3',
                                'APRDELTA' => '3.8'
                            ),
                            'weekly' => array(
                                'COUR' => '85',
                                'SPRDELTA' => '3.3',
                                'APRDELTA' => '3.8',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Lévis' => array(
                    'shop_name' => 'Lévis',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '127',
                                'SPRDELTA' => '1.6',
                                'APRDELTA' => '8.1'
                            ),
                            'weekly' => array(
                                'COUR' => '127',
                                'SPRDELTA' => '1.6',
                                'APRDELTA' => '8.1',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Ste-Marie' => array(
                    'shop_name' => 'Ste-Marie',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '72',
                                'SPRDELTA' => '-6,4',
                                'APRDELTA' => '10.0'
                            ),
                            'weekly' => array(
                                'COUR' => '72',
                                'SPRDELTA' => '-6,4',
                                'APRDELTA' => '10.0',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Thetford Mines' => array(
                    'shop_name' => 'Thetford Mines',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '91',
                                'SPRDELTA' => '-5,1',
                                'APRDELTA' => '1.7'
                            ),
                            'weekly' => array(
                                'COUR' => '91',
                                'SPRDELTA' => '-5,1',
                                'APRDELTA' => '1.7',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Mauricie/Bois-Franc' => array(
                    'shop_name' => 'Mauricie/Bois-Franc',
                    'data' => array(
                        array(
                            'row_color' => '#8a8a8a', 'color' => '#fff',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '644',
                                'SPRDELTA' => '-4,1',
                                'APRDELTA' => '12.3'
                            ),
                            'weekly' => array(
                                'COUR' => '644',
                                'SPRDELTA' => '-4,1',
                                'APRDELTA' => '12.3',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Cap-de-la-Madeleine' => array(
                    'shop_name' => 'Cap-de-la-Madeleine',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '120',
                                'SPRDELTA' => '-3,5',
                                'APRDELTA' => '12.9'
                            ),
                            'weekly' => array(
                                'COUR' => '120',
                                'SPRDELTA' => '-3,5',
                                'APRDELTA' => '12.9',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Drummondville' => array(
                    'shop_name' => 'Drummondville',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '145',
                                'SPRDELTA' => '-5,5',
                                'APRDELTA' => '18.9'
                            ),
                            'weekly' => array(
                                'COUR' => '145',
                                'SPRDELTA' => '-5,5',
                                'APRDELTA' => '18.9',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Shawinigan' => array(
                    'shop_name' => 'Shawinigan',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '73',
                                'SPRDELTA' => '-7,3',
                                'APRDELTA' => '7.9'
                            ),
                            'weekly' => array(
                                'COUR' => '73',
                                'SPRDELTA' => '7,3',
                                'APRDELTA' => '7.9',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Trois-Rivières' => array(
                    'shop_name' => 'Trois-Rivières',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '65',
                                'SPRDELTA' => '4.9',
                                'APRDELTA' => '3.4'
                            ),
                            'weekly' => array(
                                'COUR' => '65',
                                'SPRDELTA' => '4.9',
                                'APRDELTA' => '3.4',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Trois-Rivières Ouest' => array(
                    'shop_name' => 'Trois-Rivières Ouest',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '119',
                                'SPRDELTA' => '-7,1',
                                'APRDELTA' => '9.6'
                            ),
                            'weekly' => array(
                                'COUR' => '119',
                                'SPRDELTA' => '-7,1',
                                'APRDELTA' => '9.6',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Vicortiaville' => array(
                    'shop_name' => 'Vicortiaville',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '122',
                                'SPRDELTA' => '-2,4',
                                'APRDELTA' => '14.8'
                            ),
                            'weekly' => array(
                                'COUR' => '122',
                                'SPRDELTA' => '-2,4',
                                'APRDELTA' => '14.8',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Montérégie' => array(
                    'shop_name' => 'Montérégie',
                    'data' => array(
                        array(
                            'row_color' => '#8a8a8a', 'color' => '#fff',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '',
                                'SPRDELTA' => '',
                                'APRDELTA' => ''
                            ),
                            'weekly' => array(
                                'COUR' => '',
                                'SPRDELTA' => '',
                                'APRDELTA' => '',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Beloeil' => array(
                    'shop_name' => 'Beloeil',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '83',
                                'SPRDELTA' => '-15,6',
                                'APRDELTA' => '7.4'
                            ),
                            'weekly' => array(
                                'COUR' => '83',
                                'SPRDELTA' => '-15,6',
                                'APRDELTA' => '7.4',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Boucherville' => array(
                    'shop_name' => 'Boucherville',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '125',
                                'SPRDELTA' => '-15,9',
                                'APRDELTA' => '4.1'
                            ),
                            'weekly' => array(
                                'COUR' => '125',
                                'SPRDELTA' => '15,9',
                                'APRDELTA' => '4.1',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Châteauguay' => array(
                    'shop_name' => 'Châteauguay',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '115',
                                'SPRDELTA' => '5.6',
                                'APRDELTA' => '10.0'
                            ),
                            'weekly' => array(
                                'COUR' => '115',
                                'SPRDELTA' => '5.6',
                                'APRDELTA' => '10.0',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Cowansville' => array(
                    'shop_name' => 'Cowansville',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '111',
                                'SPRDELTA' => '10,5',
                                'APRDELTA' => '3.8'
                            ),
                            'weekly' => array(
                                'COUR' => '111',
                                'SPRDELTA' => '10,5',
                                'APRDELTA' => '3.8',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Granby' => array(
                    'shop_name' => 'Granby',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '163',
                                'SPRDELTA' => '-8,9',
                                'APRDELTA' => '13.0'
                            ),
                            'weekly' => array(
                                'COUR' => '163',
                                'SPRDELTA' => '-8,9',
                                'APRDELTA' => '13.0',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Greenfield_Park' => array(
                    'shop_name' => 'Greenfield_Park',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '87',
                                'SPRDELTA' => '-9,2',
                                'APRDELTA' => '1.1'
                            ),
                            'weekly' => array(
                                'COUR' => '87',
                                'SPRDELTA' => '-9,2',
                                'APRDELTA' => '1.1',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'St-Hyacinthe' => array(
                    'shop_name' => 'St-Hyacinthe',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '170',
                                'SPRDELTA' => '-5,1',
                                'APRDELTA' => '38.0'
                            ),
                            'weekly' => array(
                                'COUR' => '170',
                                'SPRDELTA' => '-5,1',
                                'APRDELTA' => '8.7',
                                'TB_BDDELTA' => '38.0'
                            ),
                        ),
                    ),
                ),
                'Sorel' => array(
                    'shop_name' => 'Sorel',
                    'data' => array(
                        array(
                            'row_color' => '#efefef',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '123',
                                'SPRDELTA' => '2.5',
                                'APRDELTA' => '12.7'
                            ),
                            'weekly' => array(
                                'COUR' => '123',
                                'SPRDELTA' => '2.5',
                                'APRDELTA' => '12.7',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
                'Non comparable' => array(
                    'shop_name' => 'Non comparable',
                    'data' => array(
                        array(
                            'row_color' => '#8a8a8a', 'color' => '#fff',
                            'font_weight' => 'bold',
                            'daily' => array(
                                'COUR' => '',
                                'SPRDELTA' => '',
                                'APRDELTA' => ''
                            ),
                            'weekly' => array(
                                'COUR' => '',
                                'SPRDELTA' => '',
                                'APRDELTA' => '',
                                'TB_BDDELTA' => ''
                            ),
                        ),
                    ),
                ),
            ),
        );

        return json_encode($reportdata);
    }

}
