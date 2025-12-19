<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
Class Reference_model extends MY_Model {

    public function __construct() {
        $this->_table = kode_lsp()."reference"; 
        parent::__construct($this->_table);
    }
    protected $_table;
    protected $table_label = 'Data Reference';
    protected $_columns = array(
        'reference' => array(
            'label' => 'Nama Dokumen',
            'rule' => 'trim|xss_clean',
            'formatter' => 'string',
            'save_formatter' => 'string',
            'width' => 150
        ),
        'pengesahan' => array(
            'label' => 'Yang Mengesahkan',
            'rule' => 'trim|xss_clean',
            'formatter' => 'string',
            'save_formatter' => 'string',
            'width' => 150
        ),
        'tgl_pengesahan' => array(
            'label' => 'Tanggal Pengesahan',
            'rule' => 'trim|xss_clean',
            'formatter' => 'general_date',
            'save_formatter' => 'date',
            'width' => 90,
            'align' =>'center',
        )

    );
    protected $_order = array("id" => "DESC");

    protected $_unique = array('unique' => array('no_reg'), 'group' => false);

     
}
