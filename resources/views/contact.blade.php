@extends('main')
@section('content')
 <div class="box">
        <h3><a href="lien-he.html" title="Liên hệ">Liên hệ</a></h3>
    </div>
    <div style="width: 500px; margin: 0px auto">
        <br /><br />
        <div id='contact_form_errorloc' class='err'>
                        <span style="color: #00A6C7">
                <span style="color: #000; font-weight: bold">Bạn có thể liên hệ trực tiếp tới .. tại địa chỉ:<br /><br /></span>
                Công ty TNHH Thương Mại và Sản Xuất Tuấn Minh <br>Trụ sở chính: Số 10, ngõ 22, Hàng Vôi, Hoàn Kiếm, Hà Nội <br>VPGD: Tầng 4, số 559, Kim Mã, Ba Đình, Hà Nội  <br>ĐT: 043 771 3823 * Hotline: 0984 663 966 * Fax: 043 771 3834   <br /><br />
                <span style="color: #000; font-weight: bold;">Hoặc liên hệ bằng cách nhập thông tin vào form dưới đây:</span>
            </span>
                        <br />
            
        </div>
        <div style="clear: both; height: 10px"></div>
        <form method="POST" name="contact_form" action="#"> 
            <table>
                <tr>
                    <td style="text-align: right; width: 120px">
                        Người liên hệ :
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
                    <td style="text-align: right; vertical-align: top">Nội dung liên hệ :</td>
                    <td>
                        <textarea style="width: 315px" name="message" rows=8></textarea>
                    </td>
                </tr>
                <!-- <tr>
                    <td colspan="2">
                        <label for='message'>Vui lòng nhập mã xác nhận :</label>
                        <input id="6_letters_code" name="code" type="text">
                        <img src="captcha_code_file.jpg" id='captchaimg' >
                    </td>
                </tr> -->
                <tr>
                    <th colspan="2">
                        <input type="submit" value="Gửi thông tin liên hệ" name='submit' style="padding: 3px 10px;" />
                        <input type="reset" value="Làm mới" style="padding: 3px 10px;" />
                    </th>
                </tr>
            </table>

        </form>
    </div>
    <script language="JavaScript">
        var frmvalidator  = new Validator("contact_form");
        //remove the following two lines if you like error message box popups
        frmvalidator.EnableOnPageErrorDisplaySingleBox();
        frmvalidator.EnableMsgsTogether();

        frmvalidator.addValidation("name","req","Vui lòng nhập tên người liên hệ"); 
        frmvalidator.addValidation("email","req","Vui lòng nhập email"); 
        frmvalidator.addValidation("code","req","Vui lòng nhập mã xác nhận");
        frmvalidator.addValidation("email","email","Địa chỉ email không hợp lệ"); 
    </script>
@endsection