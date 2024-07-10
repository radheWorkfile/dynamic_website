 <?php
    class Website extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
            $this->load->model("website/Common_model", "Common_model");
            date_default_timezone_set("Asia/Calcutta");
        }



        function get_page_data($id)
        {
            // page data permission
            $data['menu_p']     = $this->Common_model->get_data("admin_menu", array("id" => $id), "*");

            //page data  only for menu page
            $con = array("menu_id" => $data['menu_p']['id'], "status" => 1);
            $data['banner']     = $this->Common_model->all_data_con("admin_banner", $con, "*");
            $data['service']    = $this->Common_model->all_data_con("admin_services", $con, "*");
            $data['testimonial']    = $this->Common_model->all_data_con("admin_testimonial", $con, "*");

            $data['gallery']    = $this->Common_model->all_data_con("admin_gallery", $con, "*");
            $data['news']       = $this->Common_model->all_data_con("admin_news", $con, "*");
            $data['hero']       = $this->Common_model->all_data_con("admin_hero_section", $con, "*");




            $data['seo']          = $this->Common_model->get_data("admin_seo", $con, "*");
            $data['about']        = $this->Common_model->get_data("admin_about", $con, "*");
            $data['summernote']   = $this->Common_model->get_data("admin_summernote", $con, "*");
            $data['summernote1']   = $this->Common_model->get_data("admin_summernote1", $con, "*");
            $data['summernote2']   = $this->Common_model->get_data("admin_summernote2", $con, "*");
           







            // header data it necessariy in all page
            $val = array("status" => 1);
            $data['logo']        = $this->Common_model->get_data("admin_single_data", array("id" => 1), "logo,favicon");
            $data['contact']     = $this->Common_model->get_data("admin_single_data", array("id" => 1), "contact_number,email");
            $data['company']     = $this->Common_model->get_data("system_config", array("id" => 1), "company_name,company_address,about_company,facebook,tweeter,instagram,linkedln,youtube,whatsapp");
            $data['links']       = $this->Common_model->get_data("admin_page_link", array("id" => 1, "status" => 1), "*");



            $data['menu']     = $this->Common_model->all_data_con("admin_menu", $val, "*");
            $data['submenu']  = $this->Common_model->all_data_con("admin_submenu", $val, "*");
            $data['3rd_menu'] = $this->Common_model->all_data_con("admin_3rd_menu", $val, "*");



            return $data;
        }

        function get_subpage_data($menu_id, $submenu_id)
        {
            // page data permission
            $data['menu_p']     = $this->Common_model->get_data("admin_submenu", array("id" => $submenu_id, "menu_id" => $menu_id), "*");

            //page data  only for menu page
            $con = array("submenu_id" => $data['menu_p']['id'], "menu_id" => $data['menu_p']['menu_id'], "status" => 1);
            //print_r($con);
            $data['banner'] = $this->Common_model->all_data_con("admin_banner", $con, "*");
            $data['service'] = $this->Common_model->all_data_con("admin_services", $con, "*");
            $data['gallery'] = $this->Common_model->all_data_con("admin_gallery", $con, "*");
            $data['news'] = $this->Common_model->all_data_con("admin_news", $con, "*");



            $data['about'] = $this->Common_model->get_data("admin_about", $con, "*");
            $data['summernote'] = $this->Common_model->get_data("admin_summernote", $con, "*");
            $data['seo'] = $this->Common_model->get_data("admin_seo", $con, "*");






            // header data it necessariy in all page
            $val = array("status" => 1);
            $data['logo']     = $this->Common_model->get_data("admin_single_data", array("id" => 1), "logo,favicon");
            $data['contact']     = $this->Common_model->get_data("admin_single_data", array("id" => 1), "contact_number,email");
            $data['company']     = $this->Common_model->get_data("system_config", array("id" => 1), "company_name,company_address,about_company,facebook,tweeter,instagram,linkedln");



            $data['menu']     = $this->Common_model->all_data_con("admin_menu", $val, "*");
            $data['submenu']  = $this->Common_model->all_data_con("admin_submenu", $val, "*");
            $data['3rd_menu'] = $this->Common_model->all_data_con("admin_3rd_menu", $val, "*");



            return $data;
        }



        function index()
        {

            $page = $this->Common_model->get_data("admin_menu", array('home_page' => 1), "*");

            $data = $this->get_page_data($page['id']);
            //  echo "<pre>";
            //  print_r($data);
            //  die;

            $this->load->view("website/index", $data);
        }

        function page($id)
        {
            $data = $this->get_page_data($id);
            //  echo "<pre>";
            //  print_r($data);
            //  die;

            $this->load->view("website/index", $data);
        }

        function sub_page($menu_id, $submenu_id)
        {
            $data = $this->get_subpage_data($menu_id, $submenu_id);
            //  echo "<pre>";
            //  print_r($data);
            //  die;

            $this->load->view("website/index", $data);
        }




        function enquiry_insertion()
        {

            if ($this->input->is_ajax_request()) {

                $val = $this->input->post();
                print_r($val);


                // extracting user data start
                $name                = ($val['name'] != null)  ? $val['name'] : NULL;
                $mobile              = ($val['mobile'] != NULL) ? $val['mobile'] : NULL;
                $email               = ($val['email'] != NULL) ? $val['email'] : NULL;
                $subject             = ($val['subject'] != NULL) ? $val['subject'] : NULL;
                $message             = ($val['message'] != NULL) ? $val['message'] : NULL;
                $address             = ($val['address'] != NULL) ? $val['address'] : NULL;
                $jop_profile          = ($val['jop_profile'] != NULL) ? $val['jop_profile'] : NULL;
                $education            = ($val['education'] != NULL) ? $val['education'] : NULL;
                $Passing_year         = ($val['Passing_year'] != NULL) ? $val['Passing_year'] : NULL;
                $experienced          = ($val['experienced'] != NULL) ? $val['experienced'] : NULL;
                $experience_no_of_year = ($val['experience_no_of_year'] != NULL) ? $val['experience_no_of_year'] : NULL;

                // extracting user data  end


                $data = array(
                    "name"                   =>  $name,
                    "mobile"                 =>  $mobile,
                    "email"                  =>   $email,
                    "subject"                =>  $subject,
                    "message"                =>  $message,
                    "address"                =>  $address,
                    "jop_profile"            =>   $jop_profile,
                    "education"              =>   $education,
                    "Passing_year"           =>   $Passing_year,
                    "experienced"            =>   $experienced,
                    "experience_no_of_year"  =>   $experience_no_of_year,
                    "status"                 =>  0,
                    "created_at"             =>  date("Y-m-d H:i:s")
                );

                $insert = $this->Common_model->save_data("admin_enquiry", $data);
                $contact     = $this->Common_model->get_data("admin_single_data", array("id" => 1), "contact_number,email");
                

                if (!empty($insert)) {

                    // mail function start to send mail neew to change message
                    if (strlen($name) >= 3 && $email != "" && strlen($mobile) == 10) {


                        $to = $contact['email'];
                        $subject = "Demo Enquiry From dynamic ";
                        $headers =  'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'From: dynamic' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        $full_message = "<html>
                                                <head><title>Demo Enquiry Data</title></head>
                                                <body>
                                                <table>
                                                    <tr>
                                                    <td>Name</td>
                                                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                                    <td> $name </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Email Id</td>
                                                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                                    <td> $email </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Mobile Number</td>
                                                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                                    <td> $mobile </td>
                                                    </tr>
                                                   
                                                    <tr>
                                                    <td>Message</td>
                                                    <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                                    <td> $message </td>
                                                    </tr>
                                                    
                                                </table>
                                                </body>
                                                </html>";

                       $user_email=$email;
                        $user_subject = "Thank You $name";
                        $user_headers = 'From: dynamic' . "\r\n";
                        $user_message = "Dear $name.\nWelcome to dynamic  Software\n We have got your query.We will reach you soon.\nThank You!";
                        
                       
                            if (mail($to, $subject, $full_message, $headers)) {
                                mail($user_email , $user_subject, $user_message, $user_headers);
                                $_SESSION["response"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:9572852742'>9572852742,</a><a href='tel:9028388889'> 9028388889</a></span></span></p>
                                                    <p>Thank You!</p></blockquote>";
                            } else {
                                $_SESSION["response"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:9572852742'>9572852742,</a><a href='tel:9028388889'> 9028388889</a></span></span></p>
                                                    <p>Please, try again!</p><p>Thank You!</p></blockquote>";
                            }
                        } 
                    } else {
                        $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>You have entered wrong <u class='text-warning'>information</u>. Please Enter the correct value.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone  px-2 '></i><span> <a href='tel:9572852742'>9572852742,</a><a href='tel:9028388889'> 9028388889</a></span></span></p>
                        <p>Please, try again!</p><p>Thank You!</p></blockquote>";
                    }
                    // header("Location:response.php");

                    echo $_SESSION["response"];



                    // mail function end 

                } else {
                   
                    echo "Not inserted";
                }
            }
        }
 

    ?> 