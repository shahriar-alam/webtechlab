<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name='myform' action='success.php' onsubmit="return validate()" method='POST'>
        <table>
            <tr rowspan='2'>
                <td>
                    <h1>Registration Form</h1>
                </td>
            </tr>
            <tr rowspan='3'>
                <td>
                    <h2>Use tab keys to move from one input field to the next.</h2>
                </td>
            </tr>
            <tr>
                <td text-allign = 'right'>User ID:</td>
                <td text-allign = 'left'><input type='text' name=uid id='i1'></td>
            </tr>
            <tr>
                <td text-allign = 'right'>Password:</td>
                <td text-allign = 'left'><input type='password' name=upass id='i2'></td>
            </tr>
            <tr>
                <td text-allign = 'right'>Name:</td>
                <td text-allign = 'left'><input type='text' name=uname id='i3'></td>
            </tr>
            <tr>
                <td text-allign = 'right'>Address:</td>
                <td text-allign = 'left'><input type='text' name=uadd id='i4'></td>
            </tr>
            <tr>
                <td text-allign = 'right'>Country:</td>
                <td text-allign = 'left'>
                    <select name="ucount" id='i5'>
                        <option value="none" selected>Enter your Country</option>
                        <option value="bd">Bangladesh</option>
                        <option value="in">India</option>
                        <option value="china">China</option>
                        <option value="aus">Australia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td text-allign = 'right'>Zip Code:</td>
                <td text-allign = 'left'><input type='text' name=uzip id='i6'></td>
            </tr>
            <tr>
                <td text-allign = 'right'>Email:</td>
                <td text-allign = 'left'><input type='text' name=uemail id='i7'></td>
            </tr>
            <tr>
                <td text-allign = 'right'>Sex:</td>
                <td text-allign = 'left'>
                    <input type="radio" name="ugender" id='i9' value="male" checked> Male<br>
                    <input type="radio" name="ugender" id='i10' value="female"> Female<br>
                </td>
            </tr>
            <tr>
                <td text-allign = 'right'>Language:</td>
                <td text-allign = 'left'>
                    <input type="checkbox" name="lang1" value="eng" checked id='i11'> English
                    <input type="checkbox" name="lang2" value="noneng" id='i12'> Non English 
                </td>
            </tr>
            <tr>
                <td text-allign = 'right'>About:</td>
                <td text-allign = 'left'>
                    <textarea name="about" rows="10" cols="30" id='i8'>
                    </textarea>
                </td>
            </tr>
        </table>
        <input type="submit" name='submit' value='Submit'>
    </form>
    <script>
        function validate()
        {
            
            var a1 = document.getElementById("i1");
            var a2 = document.getElementById("i2");
            var a3 = document.getElementById("i3");
            var a4 = document.getElementById("i4");
            var a5 = document.getElementById("i5");
            var a6 = document.getElementById("i6");
            var a7 = document.getElementById("i7");
            var a8 = document.getElementById("i8");
            var a9 = document.getElementById("i9");
            var a10 = document.getElementById("i10");
            var a11 = document.getElementById("i11");
            var a12 = document.getElementById("i12");

                    if(a1.value == "")
                    {
                        alert("Enter userID");
                        return false;
                    }
                    if(a2.value== "")
                    {
                        alert("Enter password");
                        return false;
                    }
                    if(a3.value== "")
                    {
                        alert("Enter name");
                        return false;
                    }
                    if(a4.value== "")
                    {
                        alert("Enter address");
                        return false;
                    }
                    if(a5.value== "none")
                    {
                        alert("Enter country");
                        return false;
                    }
                    if(a6.value== "")
                    {
                        alert("Enter zip");
                        return false;
                    }
                    if(a7.value== "")
                    {
                        alert("Enter email");
                        return false;
                    }
                    if(a8.value == '')
                    {
                        alert("Enter about");
                        return false;
                    }
                    if((a11.checked == false && a12.checked == false) || (a11.checked == true && a12.checked == true) )
                    {
                        alert("Check Language");
                        return false;
                    }


            return true;
        }
    </script>
</body>
</html>