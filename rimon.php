<?php
require "fpdf/fpdf.php";
$con = mysqli_connect('localhost','root','','bti');

/**
 * 
 */
class myPDF extends FPDF{
    function header(){
        $this->SetFont('Arial','B'.'U',11);
        $this->SetTextColor(2,104,107);

        $this->Cell(190,5,'Curriculumn Vitae (CV)',0,0,'C');
        $this->Ln();
    }


    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//First Introduce

        $pdf->SetFont('Arial','B',10);
        $pdf->Image('img/rimon.jpg',18,30,30,35);

        $pdf->Cell(190,5,'',0,0);
        $pdf->Ln();
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(46.5,6,'Name','B',0,'L',1);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(.5,6,'','B',0,'L',0);
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(141,6,'Mohammed Rimon (Nahid)','B'.'R',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(140,4,'',0,0,0);
        $pdf->Ln();

        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(47,4,'Expert',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Web Design and Development',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->setFillColor(234,234,234);

        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Father Name',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Mohammed Monju Mia',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Date of Birth',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'05 March 1997',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Gender',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Male',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Nationality',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Bangladehsi',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Religion',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Islam',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Address',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'38/Block-A,Sobujsena,Ghasitula,Lamapara,Sylhet-3100 ',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(47,4,'Mobile',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'01792-544275',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(46.5,32,'',0,0);
        $pdf->Cell(141.5,.6,'','L'.'B'.'R',0);
        $pdf->Ln(2);

        //Skills

        $pdf->Cell(46.5,4,'Web Programming Skills','B',0,'L',true);
        $pdf->Cell(.4,4,'','B',0,'L',0);
        $pdf->Cell(141,4,'HTML, CSS, Bootstrap , Javascript, PHP, Mysql, Laravel, Laravel Livewire, Vuejs(Basic) ','B'.'R',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(2);



        $pdf->Cell(46.5,8.4,'Wordpress Expert','B',0,'L',true);
        $pdf->Cell(.4,4,'',0,0,'L',0);
        $pdf->Cell(141,4,'Wordpres Website Develop,Theme/Plugin Install and customization, Secured Admin Panel, Manage Admin ','R',0,'L',true);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(46.5,0,'',0,0);
        $pdf->Cell(141.4,.4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(46.5,0,'',0,0,'L',true);
        $pdf->Cell(.4,4,'','B',0,'L',0);
        $pdf->Cell(141,4,'Panel,Integrate Payment/Chatting etc. ','B'.'R',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(2);


        $pdf->Cell(46.5,4,'Graphics','B',0,'L',true);
        $pdf->Cell(.4,4,'','B',0,'L',0);
        $pdf->Cell(141,4,'Photoshop CC , CS6 (Logo Design ,Bussiness card Design ,Poster Design)','B'.'R',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(2);


        // $pdf->Cell(46.5,8.4,'Web Activities','B',0,'L',true);
        // $pdf->Cell(.4,4,'',0,0,'L',0);
        // $pdf->Cell(141,4,'Content Writting, Blogging, Manage Social Site(Facebook, Youtube, Twitter, Linkdin etc.), Photography,','R',0,'L',true);
        // $pdf->Ln();
        // $pdf->setFillColor(234,234,234);
        // $pdf->Cell(46.5,0,'',0,0);
        // $pdf->Cell(141.4,.4,'','R',0);
        // $pdf->Ln();

        // $pdf->Cell(46.5,0,'',0,0,'L',true);
        // $pdf->Cell(.4,4,'','B',0,'L',0);
        // $pdf->Cell(141,4,'Manage Website, Optimize Website,','B'.'R',0,'L',true);
        // $pdf->Ln();
        // $pdf->Cell(190,.4,'',0,0);
        // $pdf->Ln(2);








        $pdf->SetTextColor(2,104,107);

        $pdf->Cell(190,5,'Hi,My name is Mohammed Rimon (Nahid).I am a full stack Wordpress and Web developer.I have already developed many project by using PHP, ',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(190,5,'Laravel, Mysql, Vuejs.However I do blogging, content writing, editing, FB page/groups manage, collecting social responses, optimizing.I mentioned',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(190,5,'all my skill in this CV.My vision into gain confidence and fame using my potential in the field of web technologies and express my innovative ',0,0,'L');
        $pdf->Ln();
        $pdf->Cell(190,5,'creative skills for myself and my company.',0,0,'L');
        $pdf->Ln();
        $pdf->Ln();

        //Social Links


        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Portfolio Website',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'rimonnahid.storialtech.com (view from here)',0,0,'L',true,'http://www.rimonnahid.storialtech.com/');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Email',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'rimonnahid19@gmail.com',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Github',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'https://github.com/rimonnahid (view profile)',0,0,'L',true,'https://github.com/rimonnahid');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Facebook',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'https://web.facebook.com/rimon.nahid.9 (view profile)',0,0,'L',true,'https://web.facebook.com/rimon.nahid.9');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Twitter',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'https://twitter.com/rimonnahid19  (view profile)',0,0,'L',true,'https://twitter.com/rimonnahid19');


        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln(2);












        //Educational Qualification

        $pdf->SetTextColor(200,100,100);
        $pdf->Cell(190,7,'Education Qualification:',0,0);
        $pdf->Ln();


        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(93.5,4,'Secondary School Certificate(voc)',0,0,'C',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Higher School Certificate(voc)',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.4,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Department',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,'Automotive',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);


        $pdf->Cell(46,4,'Department',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,'Auto Mobile',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Passing Year',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,'2014',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);


        $pdf->Cell(46,4,'Passing Year',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,'17',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Institute',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,'Sylhet Technical School and Collage',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);


        $pdf->Cell(46,4,'Institute',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,'Sylhet Technical School and Collage',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'GPA',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,'4.35',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);


        $pdf->Cell(46,4,'GPA',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,'3.78',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        //Diploma in Engineering
        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(187,4,'Diploma in Engineering (8th sem)',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Department',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,'Computer Science',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);


        $pdf->Cell(46,4,'Institute',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,'Sylhet Technical School and collage',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Session',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,'16-17',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);


        $pdf->Cell(46,4,'GPA',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,'running',0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln(2);

        //Portfolio

        $pdf->SetTextColor(200,100,100);
        $pdf->Cell(190,7,'Project Portfolio:',0,0);
        $pdf->Ln();
        $pdf->SetTextColor(0,0,0);




        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Blog',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'https://www.storialtech.com (visit from here)',0,0,'L',true,'https://www.storialtech.com');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Ecomerce Project',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'Made by HTML, CSS, Bootstrap, Javascript, PHP, Mysql, Laravel, Vue.js ,API Integration (view demo)',0,0,'L',true,'http://rimonnahid.storialtech.com/ecomerce/');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Inventory',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'Made by HTML, CSS, Bootstrap, Javascript, PHP, Mysql, Laravel. (view demo)',0,0,'L',true,'http://rimonnahid.storialtech.com/inventory/');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Inventory 2',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'Made by HTML, CSS, Bootstrap, Javascript, PHP, Mysql, Laravel. (view demo)',0,0,'L',true,'http://rimonnahid.storialtech.com/inventory/');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Traning Center Management',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,'Made by HTML, CSS, Bootstrap, Javascript, Jquery, PHP, Mysql (view demo)',0,0,'L',true,'http://rimonnahid.storialtech.com/training_center/');
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->SetFillColor(240,234,234);
        $pdf->Cell(187,4,"And have many small,medium project's",0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln(2);

        //Other
        $pdf->SetTextColor(200,100,100);
        $pdf->Cell(190,7,"Other's:",0,0);
        $pdf->Ln();
        $pdf->SetTextColor(0,0,0);


        $pdf->SetFillColor(234,234,234);

        $pdf->Cell(46.5,4,"Skill's (Other's)",'L',0,'L',true);
        $pdf->Cell(.4,6,'',0,0,'L',0);
        $pdf->Cell(141,4,'MS Office,Photoshop,Networking(Basic),Software and Hardware Assambly',0,0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(1);

        $pdf->Cell(46.5,4,'Language','L',0,'L',true);
        $pdf->Cell(.4,6,'',0,0,'L',0);
        $pdf->Cell(141,4,'Bangla,English',0,0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(1);

        $pdf->Cell(46.5,4,"Interest's",'L',0,'L',true);
        $pdf->Cell(.4,6,'',0,0,'L',0);
        $pdf->Cell(141,4,'Coding,Gaming,Learning,Eating',0,0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(4);

    
$pdf->AddPage();

        $pdf->Ln(4);
        $pdf->Cell(187.9,4,"SSC (2014) Testimonial",'L',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(4);

        $pdf->Image('img/rimon_ssc1.jpg',18,30,170,120);
    

$pdf->AddPage();

        $pdf->Ln(4);
        $pdf->Cell(187.9,4,"HSC (2017) Marksheet",'L',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(4);

        $pdf->Image('img/rimon_hsc.jpg',18,30,170,200);


$pdf->AddPage();

        $pdf->Ln(4);
        $pdf->Cell(187.9,4,"Diploma 3rd Semester Marksheet (2017)",'L',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(4);

        $pdf->Image('img/diploma3rdsem.jpg',18,30,170,200);




        $pdf->SetY(270);
        $pdf->Image('img/rimon_sig.jpg',155,245,45,20);
        
        $pdf->Cell(145,5,'',0,0,'C');
        $pdf->Cell(45,5,'Signature','T',0,'C');
$pdf->Output();
?>