<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navbar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/common_model', 'Common_model');
        $this->load->model('admin/Navbar_model', 'Navbar_model');

        date_default_timezone_set("Asia/Calcutta");

        ($this->session->userdata('user_cate') != 1) ? redirect(base_url(), 'refresh') : '';
        error_reporting(0);
    }

    function index()
    {
        $data['title'] = 'Dashboard';
        $data['breadcrums'] = 'Dashboard';
        $this->load->view('admin/dashboard', $data);
    }
    function permission()
    {
        $con = array("id" => 1);
        $data = $this->Common_model->get_data("navbar", $con, "*");
        return $data;
    }


    function manage_navbar()
    {

        $data['title'] = 'Manage Navbar';
        $data['breadcrums'] = 'Manage Navbar';

        $data["navbar"] = $this->permission();
        $data["menu"] = $this->Common_model->all_data("admin_menu", "*");

        $this->load->view('admin/navbar/manage_navbar', $data);
    }

    function add_menu()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array(
                "created_at"     => date("y-m-d H:i:s"),
                "menu"           => $val["name"],
                "child"          => 0,
                "status"         => 1,

            );
            if ($this->Common_model->save_data("admin_menu", $data)) {
                $data = array("text" => " Menu added successfully !", "icon" => "Success");
            } else {
                echo $this->db->last_query();
                $data = array("text" => " went wrong !", "icon" => "Error");
            }
        } else {
            $data = array("text" => " Something went wrong !", "icon" => "Error");
        }

        echo json_encode($data);
    }

    function update_menu()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array(
                "menu"           => $val["name"],
            );

            if ($this->Common_model->update_data("admin_menu", $con, $data)) {
                $data = array("text" => " Menu updated successfully !", "icon" => "Success");
            } else {
                echo $this->db->last_query();
                $data = array("text" => " went wrong !", "icon" => "Error");
            }
        } else {
            $data = array("text" => " Something went wrong !", "icon" => "Error");
        }

        echo json_encode($data);
    }

    // unlinking image during deletion of data

    function unlink_mono_image($image, $field_name, $image_path)
    {
        unlink($image_path . '' . $image[$field_name]);
        return true;
    }

    function unlink_multi_image($image, $field_name, $image_path)
    {

        // foreach($image as $im)
        foreach ($image as $image) {
            unlink($image_path . '' . $image[$field_name]);
        }
        return true;
    }

    // unlinking image during deletion of data





    function delete()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $menu = $this->Common_model->get_data("admin_menu", $con, "*");

            if ($menu['child'] == 0) {

                // direct delete start
                $con2 = array("menu_id" => $val['id']);
                $this->Common_model->del_data_con("admin_news", $con2);
                $this->Common_model->del_data_con("admin_seo", $con2);
                $this->Common_model->del_data_con("admin_summernote", $con2);
                // direct delete end

                // delete with image data start
                // deleteing banner
                $banner_image = $this->Common_model->all_data_con("admin_banner", $con2, "*");
                $this->unlink_multi_image($banner_image, 'banner', "uploads/banner/");
                $this->Common_model->del_data_con("admin_banner", $con2);

                //deleting Gallery
                $gallery_image = $this->Common_model->all_data_con("admin_gallery", $con2, "*");
                $this->unlink_multi_image($gallery_image, 'image', "uploads/gallery/");
                $this->Common_model->del_data_con("admin_gallery", $con2);

                //deleting services
                $service_image = $this->Common_model->all_data_con("admin_services", $con2, "*");
                $this->unlink_multi_image($service_image, 'image', "uploads/image/");
                $this->Common_model->del_data_con("admin_services", $con2);


                //deleting testimonials
                $testimonial_image = $this->Common_model->all_data_con("admin_testimonial", $con2, "*");
                $this->unlink_multi_image($testimonial_image, 'image', "uploads/image/");
                $this->Common_model->del_data_con("admin_testimonial", $con2);




                // deleteing about
                $about_image = $this->Common_model->get_data("admin_about", $con2, "*");
                $this->unlink_mono_image($about_image, "about_image", "uploads/image/");
                $this->Common_model->del_data_con("admin_about", $con2);



                // delete with image data end all the data of this page deleted  successfully  then menu will delete
                

                // deleting menu start


                $chk = $this->Common_model->del_datas('admin_menu', array('id' => $val['id']));
                if ($chk) {
                    $data = array("text" => "Data Deleted successfully", "icon" => "Success");
                } else {
                    $msg = array("something Went Wrong");
                    $data = array("text" => $msg, "icon" => "error");
                }

                // deleting menu end




            } else {
                $msg = array("Child data existing ");
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => "something Went Wrong", "icon" => "error");
        }

        echo json_encode($data);
    }





    function get_navbar()
    {

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data['navbar'] = $this->Common_model->get_data("admin_menu", $val, "*");
            $this->load->view('admin/navbar/edit_navbar', $data);
        }
    }



    function deactivate_menu()
    {
        $msg = array("Something went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $val1 = array("id" => $val["id"], "table" => "admin_menu", "status" => 0);

            if ($this->Common_model->chageStatus($val1)) {
                $data = array("text" => "Dectivated successfully", "icon" => "success");
            } else {
                echo $this->db->last_query();
                $msg = array("not updated");

                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function activate_menu()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $val1 = array("id" => $val["id"], "table" => "admin_menu", "status" => 1);

            if ($this->Common_model->chageStatus($val1)) {

                $data = array("text" => "Activated successfully", "icon" => "success");
            } else {

                $msg = array("not updated");
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }


    // submenu started

    function manage_submenu()
    {
        $data['title'] = 'Manage submenu';
        $data['breadcrums'] = 'Manage submenu';

        $data["navbar"] = $this->permission();
        $data["menu"] = $this->Common_model->all_data("admin_menu", "*");
        $data['sub_menu'] = $this->Navbar_model->get_submenu();
        $this->load->view('admin/navbar/manage_submenu', $data);
    }



    function add_submenu()
    {
        $msg = ("something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $data = array(
                "menu_id" => $val['menu_id'],
                "sub_menu" => $val['submenu'],
                "child"   => 0,
                "page"   => 0,
                "status"  => 1,
                "created_at" => date("y-m-d H:i:s")

            );


            if ($this->Common_model->save_data("admin_submenu", $data)) {

                $con = array("id" => $val['menu_id']);
                $menu = $this->Common_model->get_data("admin_menu", $con, "child");
                $child = $menu['child'] + 1;
                $dat = array("child" => $child);
                $this->Common_model->update_data("admin_menu", $con, $dat);

                $data = array("text" => "submenu added successfully", "icon" => "success");
            } else {
                $data = array("text" => "somethig ddd went wrong", "icon" => "error");
            }
        } else {
            $data = array("text" => "somethimg  fffwent wrong", "icon" => "error");
        }
        echo json_encode($data);
    }


    function get_submenu_data()
    {
        if ($this->input->Is_ajax_request()) {
            $val = $this->input->post();

            $data["submenu"] = $this->Common_model->get_data("admin_submenu", $val, "*");

            $this->load->view("admin/navbar/edit_submenu", $data);
        }
    }


    function update_submenu()
    {

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array(
                "sub_menu"           => $val["name"],
            );

            if ($this->Common_model->update_data("admin_submenu", $con, $data)) {
                $data = array("text" => " submenu updated successfully !", "icon" => "Success");
            } else {
                echo $this->db->last_query();
                $data = array("text" => " went wrong !", "icon" => "Error");
            }
        } else {
            $data = array("text" => " Something went wrong !", "icon" => "Error");
        }

        echo json_encode($data);
    }

    function delete_submenu()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $submenu = $this->Common_model->get_data("admin_submenu", $con, "*");
            $con1 = array("id" => $submenu['menu_id']);

            if ($submenu['child'] == 0) {
                $val['table'] = "admin_submenu";
                $menu = $this->Common_model->get_data("admin_menu", $con1, "child,id");
               
                // direct delete start
                $con2 = array("menu_id" => $menu['id'],"submenu_id"=>$val['id']);
              
                $this->Common_model->del_data_con("admin_news", $con2);
                $this->Common_model->del_data_con("admin_seo", $con2);
                $this->Common_model->del_data_con("admin_summernote", $con2);
                // direct delete end

                // delete with image data start
                // deleteing banner
                $banner_image = $this->Common_model->all_data_con("admin_banner", $con2, "*");
                $this->unlink_multi_image($banner_image, 'banner', "uploads/banner/");
                $this->Common_model->del_data_con("admin_banner", $con2);
                
              
                if ($this->Common_model->del_data($val)) {



                    $child = $menu['child'] - 1;
                    $dat = array("child" => $child);
                    $this->Common_model->update_data("admin_menu", $con1, $dat);


                    $dat = array("child" => $child);
                    $data = array("text" => "Data Deleted successfully", "icon" => "Success");
                } else {
                    $msg = array("something Went Wrong");
                    $data = array("text" => $msg, "icon" => "error");
                }
            } else {
                $msg = array("Child data existing ");
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => "something Went Wrong", "icon" => "error");
        }

        echo json_encode($data);
    }



    function deactivate_submenu()
    {
        $msg = array("Something went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $val1 = array("id" => $val["id"], "table" => "admin_submenu", "status" => 0);

            if ($this->Common_model->chageStatus($val1)) {
                $data = array("text" => "Dectivated successfully", "icon" => "success");
            } else {
                echo $this->db->last_query();
                $msg = array("not updated");

                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }

    function activate_submenu()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $val1 = array("id" => $val["id"], "table" => "admin_submenu", "status" => 1);

            if ($this->Common_model->chageStatus($val1)) {

                $data = array("text" => "Activated successfully", "icon" => "success");
            } else {

                $msg = array("not updated");
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }








    // child submenu started


    function manage_child_submenu()
    {
        $data['title'] = 'Manage Child submenu';
        $data['breadcrums'] = 'Manage Child submenu';

        $data["navbar"] = $this->permission();

        $data["menu"] = $this->Common_model->all_data("admin_menu", "*");
        $data['child_submenu'] = $this->Navbar_model->get_child_submenu();
        // print_r( $data['child_submenu']);
        // die;

        $this->load->view('admin/navbar/manage_child_submenu', $data);
    }


    function add_child_submenu()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();


            $data = array(
                "submenu_id"     => $val['submenu_id'],
                "3rd_menu"       => $val['child_submenu'],
                "page"           => 0,
                "status"         => 1,
                "created_at"     => date("y-m-d H:i:s"),
            );

            $con1 = array("id" => $val['submenu_id']);
            $dat = $this->Common_model->get_data("admin_submenu", $con1, "child");
            $val1 = array("child" => $dat['child'] + 1);

            if ($this->Common_model->save_data("admin_3rd_menu", $data)) {
                $this->Common_model->update_data("admin_submenu", $con1, $val1);
                $data = array("text" => "child submenu updated successfully", "icon" => "success");
            } else {
                $msg = array("something went wrong");
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $msg = array("something went wrong");
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }


    function get_child_submenu_data()
    {
        if ($this->input->Is_ajax_request()) {
            $val = $this->input->post();

            $data["submenu"] = $this->Common_model->get_data("admin_3rd_menu", $val, "*");

            $this->load->view("admin/navbar/edit_child_submenu", $data);
        }
    }

    function update_child_submenu()
    {
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $con = array("id" => $val['id']);
            $data = array(
                "3rd_menu"           => $val["name"],
            );

            if ($this->Common_model->update_data("admin_3rd_menu", $con, $data)) {
                $data = array("text" => " child submenu updated successfully !", "icon" => "Success");
            } else {
                echo $this->db->last_query();
                $data = array("text" => " went wrong !", "icon" => "Error");
            }
        } else {
            $data = array("text" => " Something went wrong !", "icon" => "Error");
        }

        echo json_encode($data);
    }



    function delete_child_submenu()
    {
        $msg = array("something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();

            $val1 = array("id" => $val['id'], "table" => "admin_3rd_menu");
            $con1 = array("id" => $val['submenu_id']);
            $dat = $this->Common_model->get_data("admin_submenu", $con1, "child");
            $val2 = array("child" => $dat['child'] - 1);
             
            // deleting child page data start related child submenu
              // direct delete start
              $con2 = array("child_submenu_id" => $val1['id'],"submenu_id"=>$con1['id']);   
                   
              $this->Common_model->del_data_con("admin_news", $con2);
              $this->Common_model->del_data_con("admin_seo", $con2);
              $this->Common_model->del_data_con("admin_summernote", $con2);
              // direct delete end

              // delete with image data start
              // deleteing banner
              $banner_image = $this->Common_model->all_data_con("admin_banner", $con2, "*");
              $this->unlink_multi_image($banner_image, 'banner', "uploads/banner/");
              $this->Common_model->del_data_con("admin_banner", $con2);
            // deleting child page data start

             // deleting child page data end related child submenu


            if ($this->Common_model->del_data($val1)) {
                $this->Common_model->update_data('admin_submenu', $con1, $val2);
                $data = array("text" => "Deleted successfully", "icon" => "success");
            } else {
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }



    function deactivate_child_submenu()
    {
        $msg = array("Something went wrong");

        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $val1 = array("id" => $val["id"], "table" => "admin_3rd_menu", "status" => 0);

            if ($this->Common_model->chageStatus($val1)) {
                $data = array("text" => "Dectivated successfully", "icon" => "success");
            } else {
                echo $this->db->last_query();
                $msg = array("not updated");

                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }

        echo json_encode($data);
    }



    function activate_child_submenu()
    {
        $msg = array("Something went wrong");
        if ($this->input->is_ajax_request()) {
            $val = $this->input->post();
            $val1 = array("id" => $val["id"], "table" => "admin_3rd_menu", "status" => 1);

            if ($this->Common_model->chageStatus($val1)) {

                $data = array("text" => "Activated successfully", "icon" => "success");
            } else {

                $msg = array("not updated");
                $data = array("text" => $msg, "icon" => "error");
            }
        } else {
            $data = array("text" => $msg, "icon" => "error");
        }
        echo json_encode($data);
    }








    function get_submenu()
    {
        if ($this->input->Is_ajax_request()) {
            $val = $this->input->post();
            print_r($val);
            $data["submenu"] = $this->Common_model->all_data_con("admin_submenu", $val, "*");

            $this->load->view("admin/navbar/select_submenu", $data);
        }
    }
}
