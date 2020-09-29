<?php
$id = $_GET['id'];
require "fpdf/fpdf.php";
$con = mysqli_connect('localhost','root','','bti');

/**
 * 
 */
class myPDF extends FPDF{
    function header(){
        $this->Image('img/binary.png',20,6,25);
        $this->SetFont('Arial','B',11);
        $this->SetTextColor(2,104,107);
        $this->Cell(30,5,'',0,0);

        $this->Cell(160,5,' Binary Technical Institute Students Registration & Certificatuion Authority',0,0,'C');
        $this->Ln();
        $this->SetFont('Arial','',10);
        $this->Cell(30,5,'',0,0);
        $this->Cell(160,5,'Binary Technical Institute, Sakib Tower 2/2 Taltola, Sylhet.',0,0,'C');
        $this->Ln();
        $this->Cell(30,5,'',0,0);
        $this->Cell(160,5,'Mob: +8801636-409034 , E-mail: bti.syl18@gmail.com',0,1,'C');
        $this->Ln(5);
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
        $pdf->SetFont('Arial','B',10);

        
        $sql = "SELECT * FROM applicantsinfo WHERE id ='$id'";
        $run = mysqli_query($con,$sql);
        while($res = mysqli_fetch_assoc($run)){
        $pdf->Image('img/aimage/'.$res['aimage'],17,45,40,35);

        $pdf->Cell(190,5,'',0,0);
        $pdf->Ln();
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(65.5,6,'Student Id','B',0,'L',1);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(.5,6,'','B',0,'L',0);
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(122,6,$res['id'],'B'.'R',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(130,4,'',0,0,0);
        $pdf->Ln();

        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(65,4,'Name of the Course',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['coursename'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->setFillColor(234,234,234);
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Applicants name',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['name'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Father Name',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['fname'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Mother Name',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['mname'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Date of Birth',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['birthdate'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();


        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Gender',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['gender'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Nationality',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['nationality'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.4,'','L'.'R',0);
        $pdf->Ln();

        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(65,4,'Mobile',0,0,'L',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(65,4,$res['mobile'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
        $pdf->Cell(56.5,32,'',0,0);
        $pdf->Cell(131.5,.6,'','L'.'B'.'R',0);
        $pdf->Ln(2);

        $pdf->Cell(46.5,4,'Preliminary Test Subject','B',0,'L',true);
        $pdf->Cell(.4,6,'','B',0,'L',0);
        $pdf->Cell(141,4,$res['ptest'],'B'.'R',0,'L',true);
        $pdf->Ln();
        $pdf->Cell(190,.4,'',0,0);
        $pdf->Ln(2);


        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Religion',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['religion'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Maririal Status',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['maritial'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'National Id',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['nationalid'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Parrents Mobile',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pmobile'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'E-mail',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(140.5,4,$res['email'],0,0,'L',true);


        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();



        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln(2);
if($res['careof']){
        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(93.5,4,'Mailing Address',0,0,'C',true);
        $pdf->Cell(.5,6,'',0,0,'L',0);
        $pdf->Cell(93,4,'Permanent Address',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.4,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Care of',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['careof'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Care of',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pcareof'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Village/Town',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['village'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Village/Town',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pvillage'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Division',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['divi'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Division',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pdivi'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'District',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['dist'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'District',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pdist'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Thana/Upazilla',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['thana'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Thana/Upazilla',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pthana'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Post Office',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['posto'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Post Office',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['pposto'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Post Code',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['postc'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Post Code',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['ppostc'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln();
}
        $pdf->SetTextColor(200,100,100);
        $pdf->Cell(190,7,'Education Qualification:',0,0);
        $pdf->Ln();
if($res['sscexam'] || $res['hscexam']){

        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
if($res['sscexam']){
        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(187,4,'SSC or Equivalent Lavel',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();


        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Examination',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['sscexam'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Result',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['sscresult'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Board',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['sscboard'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Group',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['sscgroup'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Roll No',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['sscroll'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Passing Year',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['sscyear'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
}

if($res['hscexam']){
        //  hsc

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(187,4,'HSC or Equivalent Lavel',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Examination',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['hscexam'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Result',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['hscresult'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Board',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['hscboard'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Group',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['hscgroup'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Roll No',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['hscroll'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Passing Year',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['hscyear'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
}

        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln(2);

}

if($res['gexam']  || $res['mexam']){

        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(188,.6,'','T'.'L'.'R',0);
if($res['gexam']){
        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(187,4,'Graduation Lavel',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Examination',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['gexam'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Result',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['gresult'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Subject/Degree',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['gsub'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Passing Year',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['gyear'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'University/Institute',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['ginstitute'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Course Duration',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['gduration'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
}

if($res['mexam']){
        //  hsc

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->setFillColor(204,204,204);
        $pdf->Cell(187,4,'Master Degree',0,0,'C',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->setFillColor(234,234,234);
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Examination',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['mexam'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Result',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['mresult'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'Subject/Degree',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['msub'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Passing Year',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['myear'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();

        $pdf->Cell(188,.6,'','L'.'R',0);
        $pdf->Ln();
        $pdf->Cell(.5,4,'','L',0);
        $pdf->Cell(46,4,'University/Institute',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(47,4,$res['minstitute'],0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0);

        $pdf->Cell(46,4,'Course Duration',0,0,'L',true);
        $pdf->Cell(.5,4,'',0,0,'L',0);
        $pdf->Cell(46.5,4,$res['mduration'],0,0,'L',true);
        $pdf->Cell(.5,4,'','R',0);
        $pdf->Ln();
}


        $pdf->Cell(188,.6,'','B'.'L'.'R',0);
        $pdf->Ln(5);
}
        $pdf->SetFont('Arial','I',9);
        $pdf->MultiCell(188,5,'I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is  before  or  after  the  examination,  any  action  can  be  taken  against  me  by  the  Authority  including cancellation of my candidature.',0,1);
        $pdf->SetY(270);
        $pdf->Image('img/simage/'.$res['simage'],155,245,45,20);
        
        $pdf->Cell(145,5,'',0,0,'C');
        $pdf->Cell(45,5,'Signature','T',0,'C');
}
$pdf->Output();
?>