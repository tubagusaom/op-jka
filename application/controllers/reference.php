<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reference extends MY_Controller {

    function __construct() {

        parent::__construct();
        $this->load->model('reference_model');
        $this->load->library('pagination');
    }

    function index() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->load->library('grid');
            $grid = $this->grid->set_properties(array('model' => 'reference_model', 'controller' => 'reference', 'options' => array('id' => 'reference', 'pagination', 'rownumber')))->load_model()->set_grid();
            $view = $this->load->view('reference/index', array('grid' => $grid), true);
            echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
        } else {
            block_access_method();
        }
    }

    function datagrid() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $row = intval($this->input->post('rows')) == 0 ? 20 : intval($this->input->post('rows'));
            $page = intval($this->input->post('page')) == 0 ? 1 : intval($this->input->post('page'));
            $offset = $row * ($page - 1);
            if (isset($_POST['reference']) && !empty($_POST['reference'])) {
                $where['reference LIKE'] = '%' . $this->input->post('reference') . '%';
            }

            // $where['id_group_users ='] = '6';
            $data = array();
            $params = array('_return' => 'data');

            if (isset($where))
                $params['_where'] = $where;
            $data['total'] = isset($where) ? $this->reference_model->count_by($where) : $this->reference_model->count_all();
            $this->reference_model->limit($row, $offset);
            $rows = $this->reference_model->set_params($params)->with(array());
            $data['rows'] = $this->reference_model->get_selected()->data_formatter($rows);
            echo json_encode($data);
        }
        else {
            block_access_method();
        }
    }

    function combogrid() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $row = intval($this->input->post('rows')) == 0 ? 20 : intval($this->input->post('rows'));
            $page = intval($this->input->post('page')) == 0 ? 1 : intval($this->input->post('page'));
            $offset = $row * ($page - 1);
            if (isset($_POST['q']) && !empty($_POST['q'])) {
                $where['users LIKE'] = '%' . $this->input->post('q') . '%';
            }
            $where['id_group_users ='] = '6';
            $data = array();
            $params = array('_return' => 'data');

            if (isset($where))
                $params['_where'] = $where;
            $data['total'] = isset($where) ? $this->reference_model->count_by($where) : $this->reference_model->count_all();
            $this->reference_model->limit($row, $offset);
            $rows = $this->reference_model->set_params($params)->with(array());
            $data['rows'] = $this->reference_model->get_selected()->data_formatter($rows);
            echo json_encode($data);
        }
        else {
            block_access_method();
        }
    }

    function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->reference_model->set_validation()->validate();

            if ($data !== false) {
                if ($this->reference_model->check_unique($data)) {
                    $data['is_users'] = '1';
                    $insert_database = $this->reference_model->insert($data);
                    if ($insert_database !== false) {
                        // $nama = str_replace(' ', '', strtolower($this->input->post('users')));
                        // if (strlen($nama) > 4) {
                        //     $akun = 'reference' . substr($nama, 0, 4) . rand(1, 99);
                        // } else {
                        //     $akun = 'reference' . $nama . rand(1, 9999);
                        // }
                        // $data_user = array(
                        //     'akun' => $akun,
                        //     'email' => $this->input->post('email'),
                        //     'hp' => $this->input->post('hp'),
                        //     'nama_user' => $this->input->post('users'),
                        //     'jenis_user' => '2',
                        //     'sandi' => '123456',
                        //     'sandi_asli' => '123456',
                        //     'aktif' => '1',
                        //     'pegawai_id' => $insert_database,
                        // );

                        // $this->load->model('User_Model');
                        // $this->User_Model->insert($data_user);
                        // $user_id = $this->db->insert_id();

                        // $datay['user_id'] = $user_id;
                        // $datay['role_id'] = 16;
                        // $this->load->model('User_Role_Model');
                        // $this->User_Role_Model->insert($datay);

                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->reference_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            echo json_encode(array('msgType' => 'success', 'msgValue' => $this->load->view('reference/add', '', TRUE)));
        }
    }

    function delete($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $roles = $this->reference_model->get(intval($id));
            if (sizeof($roles) == 1) {
                if ($this->reference_model->delete(intval($id))) {
                    echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil dihapus'));
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak berhasil dihapus !'));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        } else {
            block_access_method();
        }
    }

    function edit($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->reference_model->set_validation()->validate();

            if ($data !== false) {
                if ($this->reference_model->check_unique($data, intval($id))) {
                    $is_users = $this->input->post('is_users');
                    $data['is_users'] = '1';
                    if ($this->reference_model->update(intval($id), $data) !== false) {
                        // if ($is_users == '0') {
                        //     $nama = str_replace(' ', '', strtolower($this->input->post('users')));
                        //     if (strlen($nama) > 4) {
                        //         $akun = 'reference' . substr($nama, 0, 4) . rand(1, 99);
                        //     } else {
                        //         $akun = 'reference' . $nama . rand(1, 99);
                        //     }
                        //     $data_user = array(
                        //         'akun' => $akun,
                        //         'email' => $this->input->post('email'),
                        //         'hp' => $this->input->post('hp'),
                        //         'nama_user' => $this->input->post('users'),
                        //         'jenis_user' => '2',
                        //         'sandi' => '123456',
                        //         'sandi_asli' => '123456',
                        //         'aktif' => '1',
                        //         'pegawai_id' => $id,
                        //     );

                        //     $this->load->model('User_Model');
                        //     $this->User_Model->insert($data_user);
                        //     $user_id = $this->db->insert_id();

                        //     $datay['user_id'] = $user_id;
                        //     $datay['role_id'] = 16;
                        //     $this->load->model('User_Role_Model');
                        //     $this->User_Role_Model->insert($datay);
                        // }
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->reference_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        } else {
            $con_method = $this->reference_model->get(intval($id));
            if (sizeof($con_method) == 1) {

                $data = $this->reference_model->get_single($con_method);
                $view = $this->load->view('reference/edit', array('data' => $data), TRUE);
                echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat ditemukan !'));
            }
        }
    }

    function upload() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->reference_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->reference_model->check_unique($data)) {
                    if (isset($_FILES['fileToUpload']['tmp_name']) && !empty($_FILES['fileToUpload']['tmp_name'])) {
                        $data['foto'] = str_replace(' ', '_', $_FILES['fileToUpload']['name']);
                        $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets/img/siswa/';
                        $config['allowed_types'] = 'bmp|jpg|png|gif|jpeg';
                        $config['max_size'] = '512000';

                        $this->load->library('upload', $config);

                        if (!$this->upload->do_upload('fileToUpload')) {
                            echo json_encode(array('msgType' => 'error', 'msgValue' => $this->upload->display_errors()));
                            exit();
                        }
                    } else {
                        $data['foto'] = "";
                    }
                    if ($this->reference_model->insert($data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", strip_tag($this->reference_model->get_validation()))));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        }
    }

    function edit_upload($id = false) {
        if (!$id) {
            data_not_found();
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->reference_model->set_validation()->validate();
            if ($data !== false) {
                if ($this->reference_model->check_unique($data, intval($id))) {
                    if (isset($_FILES['fileToUpload']['tmp_name']) && !empty($_FILES['fileToUpload']['tmp_name'])) {
                        $siswa = $this->reference_model->get(intval($id));
                        $data['foto'] = $data['nis'] . '_' . str_replace(' ', '_', $_FILES['fileToUpload']['name']);
                        $config['upload_path'] = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets/img/siswa/';
                        $config['allowed_types'] = 'bmp|jpg|png|gif|jpeg';
                        $config['file_name'] = $data['foto'];
                        $config['max_size'] = '512000';

                        $this->load->library('upload', $config);

                        if ($this->upload->do_upload('fileToUpload')) {
                            $current_file = substr(__dir__, 0, strpos(__dir__, "application")) . 'assets/img/siswa/' . $siswa->foto;
                            if (is_file($current_file)) {
                                unlink($current_file);
                            }
                        } else {
                            echo json_encode(array('msgType' => 'error', 'msgValue' => strip_tags($this->upload->display_errors())));
                            exit();
                        }
                    } else {
                        $data['foto'] = $this->input->post('foto_hidden');
                    }
                    if ($this->reference_model->update(intval($id), $data) !== false) {
                        echo json_encode(array('msgType' => 'success', 'msgValue' => 'Data berhasil disimpan !'));
                    } else {
                        echo json_encode(array('msgType' => 'error', 'msgValue' => 'Data tidak dapat disimpan !'));
                    }
                } else {
                    echo json_encode(array('msgType' => 'error', 'msgValue' => implode("<br/>", $this->reference_model->get_validation())));
                }
            } else {
                echo json_encode(array('msgType' => 'error', 'msgValue' => validation_errors()));
            }
        }
    }

    function search() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $view = $this->load->view('reference/search', array(), TRUE);

            echo json_encode(array('msgType' => 'success', 'msgValue' => $view));
        } else {
            block_access_method();
        }
    }

}
