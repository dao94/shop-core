@extends('main')
@section('content')
    <div class="box">
        <h3><a title="Contact">Contact</a></h3>
    </div>
    <div style="width: 500px; margin: 0px auto;font-size:12px" >
        <br><br>
        <div id="contact_form_errorloc" class="err">
            <span style="color: #00A6C7">
                <span style="color: #000; font-weight: bold">You can contact directly to the .. at:<br><br></span>
                nam phuong prouduction and trading investment company limited<br>Head Office: No. 16, hai ba trung  , trang tien Street, Hoan Kiem District, Hanoi <br> 21 Lo duc, hai ba trung, Hanoi  <br>Tel: (+84)989 14 9394 * Hotline: (+84)97 567 8488* Fax: (+84)43 771 3824<br><br>
                <span style="color: #000; font-weight: bold;">Or by entering your contact information into the form below:</span>
            </span>
            <br>
        </div>
        <div style="clear: both; height: 10px"></div>
        <form method="POST" name="contact_form" action='{{URL::to("/submit")}}'> 
            <table>
                <tbody><tr>
                    <td style="text-align: right; width: 120px">
                        Contact :
                    </td>
                    <td>
                        <input type="text" name="name" style="width: 315px">        
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; width: 120px">
                        Email :
                    </td>
                    <td>
                        <input type="text" name="email" style="width: 315px">  
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; vertical-align: top">Content :</td>
                    <td>
                        <textarea style="width: 315px" name="message" rows="8"></textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="Send contact" name="submit" style="padding: 3px 10px;">
                        <input type="reset" value="Reset" style="padding: 3px 10px;">
                    </th>
                </tr>
            </tbody></table>

        </form>
    </div>
    <script language="JavaScript">
        var frmvalidator  = new Validator("contact_form");
        //remove the following two lines if you like error message box popups
        frmvalidator.EnableOnPageErrorDisplaySingleBox();
        frmvalidator.EnableMsgsTogether();

        frmvalidator.addValidation("name","req","Please enter contact name"); 
        frmvalidator.addValidation("email","req","Please enter email");
        frmvalidator.addValidation("email","email","Invalid email address"); 
    </script>
@endsection