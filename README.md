
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body>
    <h3>Official documentation : <a href="http://knicklab.com/PHP FormValidation 1.0">http://knicklab.com/PHP FormValidation 1.0</a></h3>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><a class="navbar-brand navbar-link" href="#">Knicklab</a></div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="active" role="presentation"><a href="#">1.0 </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <h1>FormValidation 1.0</h1>
            <p>BY KNICKLAB.</p>
        </div>
        <h3><strong>Introduction</strong> </h3>
        <hr>
        <div style="text-align:justify;">
        <p>Form validation has been an important subject. To validate user input using PHP require more coding skills. <strong>Knicklab</strong> present ‘Form validation 1.0’. These ‘Form validation 1.0’ library make it easy to validate user input at server
            side using PHP. </p>
        <p>These package requires PHP 5.4+&nbsp; </p>
        </div>
        <h3><strong>Features</strong> </h3>
        <hr>
        <ul>
            <li>Email</li>
            <li>Mobile number</li>
            <li>Password </li>
            <li>Numeric password only</li>
            <li>Special password only</li>
            <li>Required </li>
            <li>Check Length </li>
            <li>Alphabet Only</li>
            <li>Alphanumeric Only</li>
            <li>Numeric Only</li>
            <li>Alphanumericwithspace Only</li>
            <li>Numericwithspace Only</li>
            <li>Date </li>
        </ul>
        <h3><strong>Installation</strong></h3>
        <hr>
        <p>After Download package, Copy BasicValidation_interface.php and BasicValidation.php to your project folder. Type <strong>require BasicValidation.php</strong> at the top of your project <em>.php</em> file</p>
        <h4><strong>Example</strong> </h4>
        <p> <span class="text-warning">require<span class="text-danger"> " BasicValidation.php"</span> </span>
        </p>
        <br/>
        <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>alphanumericOnly() </strong></h3>
        <hr>
        <p>This method check whether data is alphanumeric only or not </p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>Bool </td>
                        <td>false </td>
                        <td>User data to be required or not</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>

<p style="font-size:18px;">
<pre>
if($obj->alphanumericOnly($data,true,0,20)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation1234"
output : success
</pre>
<pre>
input : $data = "validation 234@"
output : failed
</pre>
</p>
<p>
    Note : These method allow only alphabet and numeric value if any special character is there or any space then function will return false
</p>
</div>
<br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>numericOnly() </strong></h3>
        <hr>
        <p>This method check whether data is numeric only or not </p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>Bool </td>
                        <td>false </td>
                        <td>User data to be required or not</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong></h4>
<p style="font-size:18px;">
<pre>
if($obj->numericOnly($data,true,0,10)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "12345"
output : success
</pre>
<pre>
input : $data = "validation1234"
output : failed
</pre>
</p>
<p>
    Note : These method allow only numeric value if any alphabet or special character is there or any space then function wil return false
</p>
</div>
<br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>alphabetOnly() </strong></h3>
        <hr>
        <p>This method check whether data is alphabetic only or not </p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>Bool </td>
                        <td>false </td>
                        <td>User data to be required or not</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
<h4><strong>Example</strong> </h4>

<p style="font-size:18px;">
<pre>
if($obj->alphabetOnly($data,true,0,10)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation"
output : success
</pre>
<pre>
input : $data = "validation 234@"
output : failed
</pre>
</p>
<p>
    Note : These method allow only alphabetic value if any numeric or special character is there or any space then function will return false
</p>
</div>
<br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>alphanumericOnlywithspace() </strong></h3>
        <hr>
        <p>This method check whether data is alphanumeric only or not and also allow space</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>Bool </td>
                        <td>false </td>
                        <td>User data to be required or not</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>

<p style="font-size:18px;">
<pre>
if($obj->alphanumericOnlywithspace($data,true,0,20)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation 245"
output : success
</pre>
<pre>
input : $data = "validation1234@"
output : failed
</pre>
</p>
<p>
    Note : These method allow alphanumeric value as well as space. if any special character is there, then function will  return false
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>numericOnlywithspace() </strong></h3>
        <hr>
        <p>This method check whether data is numeric only or not and also allow space</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>Bool </td>
                        <td>false </td>
                        <td>User data to be required or not</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->numericOnlywithspace($data,true,0,10)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "124 5"
output : success
</pre>
<pre>
input : $data = "validation 1234"
output : failed
</pre>
</p>
<p>
    Note : These method allow numeric value as well as space. if any special character is there, then function will  return false
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>alphabetOnlywithspace() </strong></h3>
        <hr>
        <p>This method check whether data is alphabet only or not and also allow space</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>Bool </td>
                        <td>false </td>
                        <td>User data to be required or not</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>NULL </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->alphabetOnlywithspace($data,true,0,20)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "valida tion"
output : success
</pre>
<pre>
input : $data = "valida tion1"
output : failed
</pre>
</p>
<p>
    Note : These method allow alphabetic value as well as space. if any special character is there, then function will  return false
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>required() </strong></h3>
        <hr>
        <p>This method check whether data is present or not</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$space </td>
                        <td>false </td>
                        <td>bool </td>
                        <td>false </td>
                        <td>space allow or not</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->required($data,false)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation"
output : success
</pre>
<pre>
input : $data = "  "
output : failed
</pre>
</p></div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>length() </strong></h3>
        <hr>
        <p>This method check whether data is in specific length</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>false </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>false </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->length($data,0,10)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation"
output : success
</pre>
<pre>
input : $data = "validation1234"
output : failed
</pre>
</p></div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>email()</strong></h3>
        <hr>
        <p>This method check whether data is in email format or not</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->email($data)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation@domain.com"
output : success
</pre>
<pre>
input : $data = "validation1234"
output : failed
</pre>
</p></div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>url() </strong></h3>
        <hr>
        <p>This method check whether data is in url format or not</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>false </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>false </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->url($data,0,10)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "http://validation"
output : success
</pre>
<pre>
input : $data = "validation1234"
output : failed
</pre>
</p>
<p>
    Note : These method allow only url.
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>ip() </strong></h3>
        <hr>
        <p>This method check whether data is in ip format or not i.e ipv4 or ipv6</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$type </td>
                        <td>false </td>
                        <td>string </td>
                        <td>NULL </td>
                        <td>is used for ip type i.e ipv4 or ipv6</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->ip($data)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "172.22.26.78"
output : success
</pre>
<pre>
input : $data = "2001:0db8:85a3:0000:0000:8a2e:0370:7334"
output : success
</pre>
<h4><strong>Example2</strong> </h4>
<pre>
if($obj->ip($data,"ipv4")){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "172.22.26.78"
output : success
</pre>
<pre>
input : $data = "172.22.26.258"
output : failed
</pre>
</p>
<h4><strong>Example3</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->ip($data,"ipv6")){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "2001:0db8:85a3:0000:0000:8a2e:0370:7334"
output : success
</pre>
<pre>
input : $data = "172.22.26.258"
output : failed
</pre>
</p>

<p>
    Note : If you want to allow only ipv4, then pass second argument as "ipv4" or if you want to allow only ipv6, then pass second argument as "ipv6". If you want to allow both then don't pass second argument. 
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>date() </strong></h3>
        <hr>
        <p>This method check whether date is in between range or not</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$between </td>
                        <td>true </td>
                        <td>array </td>
                        <td>NULL </td>
                        <td>Two date min and max for range checking</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->date($data,["12-05-2012","12-12-2018"])){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "18-05-2012"
output : success
</pre>
<pre>
input : $data = "12-05-1996"
output : failed
</pre>
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>password() </strong></h3>
        <hr>
        <p>This method check whether password format correct or not</p>
        <p class="text-info"><strong>Return : true or false</strong></p>
        <h4><strong>Arguments </strong></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Key </th>
                        <th>Required </th>
                        <th>Type </th>
                        <th>Default </th>
                        <th>Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$data </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>User date to be validate</td>
                    </tr>
                    <tr>
                        <td>$type </td>
                        <td>true </td>
                        <td>String </td>
                        <td>NULL </td>
                        <td>password type given below :</td>
                    </tr>
                    <tr>
                        <td>$required </td>
                        <td>false </td>
                        <td>bool </td>
                        <td>false </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$min </td>
                        <td>false </td>
                        <td>int </td>
                        <td>0 </td>
                        <td>Min user data string length</td>
                    </tr>
                    <tr>
                        <td>$max </td>
                        <td>false </td>
                        <td>int </td>
                        <td>20 </td>
                        <td>Max user data string length</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>type : </p>
        <ul>
            <li>alphanumeric : alphanumeric password allow only</li>
            <li>numeric : numeric password allow only</li>
            <li>alphabet : alphabet password allow only</li>
            <li>special : 1 Upper letter,1 lower letter,1 numeric and 1 special character or more</li>
        </ul>
        <h4><strong>Example</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->password($data,"alphanumeric",true,0,20)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "validation1234"
output : success
</pre>
<pre>
input : $data = "validation1234@"
output : failed
</pre>
</p>
<h4><strong>Example2</strong> </h4>
<p style="font-size:18px;">
<pre>
if($obj->password($data,"special",true,0,20)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "Validation1234@"
output : success
</pre>
<pre>
input : $data = "validation123"
output : failed
</pre>
</p>
<p>
    Note : These method validate password.
</p>
</div><br/>
    <div class="container">
        <h3><span class="fa fa-hand-o-right"></span> <strong>Extra pratice problem</strong></h3>
        <hr>
        <p>Mobile number validation</p>
        <h4><strong>Example</strong> </h4>

<p style="font-size:18px;">
<pre>
if($obj->numericOnly($data,true,0,10)){
    echo "success";
}
else{
    echo "failed";
}
</pre>
<pre>
input : $data = "1234567890"
output : success
</pre>
<pre>
input : $data = "1234567"
output : failed
</pre>
</p></div>
    <div class="container">
        <hr>
        <div class="page-header">
            <h1>Presented By <small>knicklab.com </small></h1></div>
    </div>
    <p class="text-left bg-primary">© 2017, Knicklab, All rights reserved </p>
    
</body>

</html>
